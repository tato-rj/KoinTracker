<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\{Fiat, Coin};

class FiatTest extends TestCase
{
	/** @test */
	public function it_knows_how_to_find_a_currency_by_its_currency_name()
	{
		$this->assertInstanceOf(Fiat::class, Fiat::currency('USD'));
	}

	/** @test */
	public function given_any_amount_it_knows_how_much_of_any_given_coins_it_can_buy()
	{
		$this->assertTrue($this->fiat->valueIn(10, $this->coin) > 0);
	}
}
