<?php

namespace App\Markets;

use App\Models\Coin;
use Illuminate\Support\Facades\Redis;

class CryptoMarket
{
	public function __construct(Coin $coin)
	{
		$this->prefix = config('database.redis.prefix');
		$this->coin = $coin;
	}

	public function update()
	{
		$data = $this->coin->api()->market();

        $this->set('current_price', $data->isEmpty() ? $this->get('current_price') : money($data['market_data']['current_price']['usd'], 'usd', $absolute = true));
        $this->set('latest_market', $data);
        $this->set('latest_1h_range', $this->coin->api()->range(now()->subHour()));
        $this->set('latest_24h_range', $this->coin->api()->range(now()->subDay()));
        $this->set('latest_7d_range', $this->coin->api()->range(now()->subWeek()));
        $this->set('latest_30d_range', $this->coin->api()->range(now()->subMonth()));
        $this->set('latest_1y_range', $this->coin->api()->range(now()->subYear()));
        $this->set('latest_all_range', $this->coin->api()->range());
	}

	public function set($key, $value)
	{
		if ($value)
			Redis::hset($this->namespace(), $key, serialize($value));
	}

	public function get($key = null)
	{
		if ($key)
			return unserialize(Redis::hget($this->namespace(), $key));

		return Redis::hgetall($this->namespace());
	}

	public function namespace()
	{
		return $this->prefix . 'coin:' . $this->coin->uid;
	}
}