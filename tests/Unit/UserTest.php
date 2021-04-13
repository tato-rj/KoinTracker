<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\{Portfolio, Transaction, User, Badge, Coin};

class UserTest extends TestCase
{
	/** @test */
	public function it_has_many_portfolios()
	{
		$user = User::factory()->create();

		Portfolio::factory()->create(['user_id' => $user->id]);

		$this->assertInstanceOf(Portfolio::class, $user->portfolios->first());		 
	}

	/** @test */
	public function it_has_many_transactions()
	{
		$user = User::factory()->create();

		Transaction::factory()->create(['portfolio_id' => Portfolio::factory()->create(['user_id' => $user->id])]);

		$this->assertInstanceOf(Transaction::class, $user->transactions->first());
	}
}
