<?php

namespace App\Api\Fake;

class Coin
{
	use Data;

	public function market()
	{
		return json_decode($this->market);
	}

	public function range($range)
	{
		return $this->$range;
	}
}
