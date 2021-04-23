<?php

namespace App\Models;

use App\Api\OpenExchange;
use App\Casts\Currency;

class Fiat extends AppModel
{
	protected $casts = ['rate' => 'float'];

	public function api()
	{
		return new OpenExchange;
	}

	public function is($currency)
	{
		return $this->currency == strtoupper($currency);
	}

	public function scopeGetData($query)
	{
		$list = $this->api()->rates();

		$this->truncate();

		foreach ($list['rates'] as $currency => $rate) {
			try {
				currency($currency);
				$this->create(['currency' => $currency, 'rate' => $rate]);
			} catch (\Exception $e) {
				//
			}
		}
	}

	public function scopeCurrency($query, $currency)
	{
		return $query->where('currency', $currency)->firstOrFail();
	}

	public function getCurrency()
	{
		return currency($this->currency);
	}

	public function usd()
	{
		return fiat(1/$this->rate, true);
	}

	public function valueIn($amount, Coin $coin)
	{
		return money($amount, $this->currency)->convert(currency('usd'), $this->rate)->getAmount() / $coin->current_price->getValue();
	}
}
