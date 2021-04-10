<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\{Portfolio, Transaction, User, Coin};

class TransactionTest extends TestCase
{
	/** @test */
	public function it_belongs_to_a_portfolio()
	{
		$this->assertInstanceOf(Portfolio::class, $this->transaction->portfolio);
	}

	/** @test */
	public function it_belongs_to_a_coin()
	{
		$this->assertInstanceOf(Coin::class, $this->transaction->coin);
	}
}
