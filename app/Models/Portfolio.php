<?php

namespace App\Models;

use App\Contracts\ApiContract;

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

	public function range($range)
	{
		$now = now();
		$points = collect([]);
		$length = 48;
		$step = 30;
		$range = Coin::name('bitcoin')->range('24h');

		for ($i=0; $i<=$length; $i++) {
			$date = now()->subMinutes($step * $i);
			$coins = $this->transactions()->whereDate('transaction_date', '<=', $date)->sum('coin_amount');

			foreach ($range as $point) {
				if (carbon($point[0], true)->gte($date)) {
					$points->prepend([$date->getPreciseTimestamp(3), $coins * $point[1]]);
					break;
				}
			}
		}

		return $points;
	}

	public function transactionCost($coin_amount, $price_per_coin, $fee)
	{
		$cost = ($coin_amount * $price_per_coin) + $fee;

        return round($cost, 2);
	}
}
