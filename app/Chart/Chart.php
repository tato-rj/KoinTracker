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

	public function filter()
	{
		$data = $this->data;

		if ($data->count() <= $this->max)
			return $data->values();

		$last = $data->pop();

		while ($data->count() > $this->max) {
			$data = $data->filter(function ($points, $key) {
			    return $key % 2 === 0;
			})->values();
		}

		$data->push($last);

		return $data;
	}	
}
