<?php

namespace App\Chart\Ranges;

use App\Models\{Portfolio, Coin};

abstract class ChartRange
{
	public function for(Portfolio $portfolio)
	{
		$points = collect();
		$market = collect();
		// Get market data for each coin in the portfolio for the selected range
		foreach ($portfolio->coins as $coin) {
			$market[$coin] = Coin::name($coin)->range($this->range);
		}

		// For each point (timestamp) in the graph...
		for ($i=0; $i<$this->length; $i++) {
			$total = 0;
			$date = now()->{$this->frequency}($this->step * $i);
			// Go through each coin in the portfolio...
			foreach ($market as $coin => $data) {
				// Get the amount of that coin up until that point in time...
				$amount = $portfolio->transactions()->where('coin', $coin)->where('transaction_date', '<=', $date)->sum('coin_amount');
				// Search in the list of market prices for that coin
				foreach ($data as $point) {
					// Get the closest market price in the current point (timestamp) and multiply the coins owned by the market price
					if (carbon($point[0], true)->gte($date)) {
						$total += $amount * $point[1];
						break;
					}
				}
			}

			if ($total)
				$points->prepend([$date->getPreciseTimestamp(3), $total]);
		}

		return $points;
	}
}