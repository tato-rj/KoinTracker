<?php

namespace App\Markets;

use App\Models\Coin;

class CryptoMarket extends Crypto
{
	public function __construct(Coin $coin)
	{
		parent::__construct();

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

	public function namespace()
	{
		return $this->prefix . 'coin:' . $this->coin->uid;
	}
}