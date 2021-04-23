<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\{Coin, Fiat};

class CoinTest extends TestCase
{
	/** @test */
	public function it_knows_its_most_current_value()
	{		
		$this->assertFalse($this->coin->current_price->isZero());
	}

	/** @test */
	public function given_any_amount_it_knows_how_much_it_is_worth_in_any_given_fiat_currency()
	{
		$usd = Fiat::factory()->create(['currency' => 'USD', 'rate' => 1]);
		$brl = Fiat::factory()->create(['currency' => 'BRL', 'rate' => 5]);

		$this->assertNotEquals($this->coin->valueIn(10, 'usd'), $this->coin->valueIn(10, 'brl'));
	}
}
