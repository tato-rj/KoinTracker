<?php

namespace App\Api\Fake;

use App\Models\Coin;
use Illuminate\Support\Facades\Redis;

class FakeCoin
{
	use Data;

	public function __construct(Coin $coin)
	{
		$this->prefix = config('database.redis.prefix');
		$this->coin = $coin;
	}

	public function mock()
	{
		$data = $this->market();

        $this->set('current_price', money($data['market_data']['current_price']['usd'], 'usd', $absolute = true));
        $this->set('latest_market', $data);
        $this->set('latest_1h_range', $this->range('hour'));
        $this->set('latest_24h_range', $this->range('day'));
        $this->set('latest_7d_range', $this->range('week'));
        $this->set('latest_30d_range', $this->range('month'));
        $this->set('latest_1y_range', $this->range('year'));
        $this->set('latest_all_range', $this->range());
	}

	public function market()
	{
		return json_decode($this->market, true);
	}

	public function range($range = null)
	{
		if ($range)
			return json_decode($this->$range, true);
	}

	public function set($key, $value)
	{
		if ($value)
			Redis::hset($this->namespace(), $key, serialize($value));
	}

	public function namespace()
	{
		return $this->prefix . 'coin:' . $this->coin->uid;
	}
}
