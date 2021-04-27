<?php

namespace App\Models;

use App\Api\OpenExchange;
use App\Casts\Currency;

class Fiat extends AppModel
{
	protected $relevantCurrencies = ['usd', 'eur', 'gbp', 'cad', 'brl', 'chf'];
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
		return money(1/$this->rate);
	}

	public function valueIn($amount, Coin $coin)
	{
		$fiat = money($amount, $this->currency)->convert(currency('usd'), 1/$this->rate)->getAmount();
		$price = $coin->current_price->getValue();

		return number_format($fiat / $price,4) . ' ' . strtoupper($coin->short);
	}

	public function scopeRelevant($query)
	{
		$sorted = collect();
		$currencies = $query->whereIn('currency', $this->relevantCurrencies)->get();

		foreach ($this->relevantCurrencies as $currency) {
			$sorted->push($currencies->where('currency', strtoupper($currency))->first());
		}

		return $sorted;
	}

	public function scopeNotRelevant($query)
	{
		return $query->whereNotIn('currency', $this->relevant()->pluck('currency'))->get();
	}
}
