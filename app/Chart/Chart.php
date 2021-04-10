<?php

namespace App\Chart;

class Chart
{
	protected $data;

	public function __construct()
	{
		$this->max = 40;
	}

	public function getData($data)
	{
		$this->data = collect($data);

		return $this;
	}

	public function setMax($max)
	{
		$this->max = $max;

		return $this;
	}

	public function filter($formatted = true)
	{
		$data = $this->data;

		if ($data->count() <= $this->max)
			return $formatted ? $this->formatted($data->values()) : $data->values();

		$last = $data->pop();

		while ($data->count() > $this->max) {
			$data = $data->filter(function ($points, $key) {
			    return $key % 2 === 0;
			})->values();
		}

		$data->push($last);

		return $formatted ? $this->formatted($data) : $data;
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
