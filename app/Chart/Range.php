<?php

namespace App\Chart;

use App\Models\Portfolio;

class Range
{
	protected $portfolio;

	protected $ranges = [
		'1h' => \App\Chart\Ranges\Hour::class,
		'24h' => \App\Chart\Ranges\Day::class,
		'7d' => \App\Chart\Ranges\Week::class,
		'30d' => \App\Chart\Ranges\Month::class,
		'1y' => \App\Chart\Ranges\Year::class
	];

	public function portfolio(Portfolio $portfolio)
	{
		$this->portfolio = $portfolio;

		return $this;
	}

	public function get($range)
	{
		if (! array_key_exists($range, $this->ranges))
			return [];

		return (new $this->ranges[$range])->for($this->portfolio);
	}
}