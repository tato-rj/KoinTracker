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

	/** @test */
	public function it_knows_its_total_gains()
	{
		$transaction = Transaction::factory()->create(['price_per_coin' => $this->coin->price/2]);

		$this->assertTrue($transaction->gains() == '100%');
	}
}
