<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Coin;

class CoinTest extends TestCase
{
	/** @test */
	public function it_knows_its_most_current_value()
	{		
		$this->assertFalse($this->coin->current_price->isZero());
	}
}
