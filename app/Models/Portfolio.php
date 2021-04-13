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
		return $this->transactions()->with('coin')->get()->pluck('coin');
	}

	public function amountOf($coinUid, $date = null)
	{
		$date = $date ?? now();

		return $this->transactions()->whereHas('coin', function($q) use ($coinUid) {
			$q->where('uid', $coinUid);
		})->where('transaction_date', '<=', $date)->sum('coin_amount');
	}

	public function originalValue()
	{
		$total = 0;

		foreach ($this->transactions as $transaction) {
			$total += $transaction->coin_amount * $transaction->price_per_coin;
		}

		return $total;		
	}

	public function value($date = null)
	{
		$total = 0;

		foreach ($this->coins as $coin) {
			$total += $coin->price * $this->amountOf($coin->uid, $date);
		}

		return $total;
	}

	public function valueFor($coin, $date = null)
	{
		return $coin->price * $this->amountOf($coin->uid, $date);
	}

	public function range($range)
	{
		return (new Chart)->getData(
			(new Range)->portfolio($this)->get($range)
		)->filter();
	}

	public function formatted($data)
	{
		$timestamps = collect();
		$prices = collect();

		foreach ($data as $points) {
			$timestamps->push($points[0]);
			$prices->push($points[1]);
		}

		return compact(['timestamps', 'prices']);
	}

	public function transactionCost($coin_amount, $price_per_coin, $fee)
	{
		$cost = ($coin_amount * $price_per_coin) + $fee;

        return round($cost, 2);
	}
}
