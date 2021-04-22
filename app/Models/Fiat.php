<?php

namespace App\Models;

use App\Api\OpenExchange;
use App\Contracts\TradableAsset;
use  Akaunting\Money\{Money, Currency};

class Fiat extends AppModel implements TradableAsset
{
	protected $casts = [
        'current_price' => 'float',
	];

	public function api()
	{
		return new OpenExchange;
	}

	public function scopeGetData($query)
	{
		$list = $this->api()->rates();

		$this->truncate();

		foreach ($list['rates'] as $currency => $price) {
			$this->create([
				'currency' => $currency,
				'current_price' => $price
			]);
		}
	}

	public function convertTo($coin)
	{
        return bcdiv($this->inDollar->getValue() , $coin->current_price->getValue(), 8);
	}

	public function getInDollarAttribute()
	{
		return fiat(1/$this->current_price, true);
	}
}
