<?php

namespace App\Models;

use App\Contracts\ApiContract;
use App\Chart\{Chart, Range};

class Portfolio extends AppModel implements ApiContract
{
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}

	public function getCoinsAttribute()
	{
		return $this->transactions()->groupBy('coin')->pluck('coin');
	}

	public function amountOf($coin)
	{
		return $this->transactions()->where('coin', $coin)->sum('coin_amount');
	}

	public function getCurrentValueAttribute()
	{
		$total = 0;

		foreach ($this->coins as $coin) {
			$total += Coin::name($coin)->price * $this->amountOf($coin);
		}

		return $total;
	}

	public function range($range)
	{
		$points = (new Range)->portfolio($this)->get($range);

		return (new Chart)->getData($points)->filter();
	}

	public function transactionCost($coin_amount, $price_per_coin, $fee)
	{
		$cost = ($coin_amount * $price_per_coin) + $fee;

        return round($cost, 2);
	}
}
