<?php

namespace App\Markets;

use App\Api\Coingecko;

class CryptoCurrency extends Crypto
{
	public function update()
	{
		$data = (new Coingecko)->coins();

		$data->each(function($coin, $key) {
			if ($coin['market_cap_rank'] && isset($coin['sparkline_in_7d']['price'][0]))
				$this->set($key, $coin);
		});
	}

	public function namespace()
	{
		return $this->prefix . 'cryptocurrency';
	}
}