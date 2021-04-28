<?php

namespace App\Models;

use App\Contracts\ApiContract;
use App\Chart\{Chart, Range};

class Portfolio extends AppModel implements ApiContract
{	
    public function getRouteKeyName()
    {
        return 'slug';
    }

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class)->orderBy('transaction_date', 'desc');
	}

	public function sellTransactions()
	{
		return $this->transactions()->where('type', 'sell');
	}

	public function buyTransactions()
	{
		return $this->transactions()->where('type', 'buy');
	}

	public function bestTransaction()
	{
		// return $this->transactions
	}

	public function getCoinsAttribute()
	{
		return $this->transactions()->with('coin')->get()->pluck('coin')->unique();
	}

	public function getSortedCoinsAttribute()
	{
		$collection = collect();
		
		$this->coins->each(function($coin, $index) use ($collection) {
			$collection->push(collect(['coin' => $coin, 'value' => $this->valueFor($coin)->getAmount()]));
		});

		return $collection->sortByDesc('value')->values();
	}

	public function amountOf($coinUid, $date = null)
	{
		$date = $date ?? now();

		$total = $this->transactions()->whereHas('coin', function($q) use ($coinUid) {
			$q->where('uid', $coinUid);
		})->where('transaction_date', '<=', $date)->sum('coin_amount');

		return floatval($total);
	}

	public function originalValue()
	{
		$total = 0;

		foreach ($this->transactions as $transaction) {
			$total = $transaction->price_per_coin->multiply($transaction->coin_amount)->add($total);
		}

		return $total;		
	}

	public function value($date = null)
	{
		$total = 0;

		foreach ($this->coins as $coin) {
			$total = $coin->current_price->multiply($this->amountOf($coin->uid, $date))->add($total);
		}

		return $total;
	}

	public function valueFor($coin, $date = null)
	{
		return $coin->current_price->multiply($this->amountOf($coin->uid, $date));
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
}
