<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\{Portfolio, Transaction, User, Badge, Coin, Watchlist};

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
	public function it_has_coins_in_a_watchlist()
	{
		$user = User::factory()->create();

		$user->watchlist()->create(['coin_id' => $this->coin->uid]);

		$this->assertInstanceOf(Watchlist::class, $user->watchlist->first());
	}

	/** @test */
	public function it_has_many_transactions()
	{
		$user = User::factory()->create();

		Transaction::factory()->create(['portfolio_id' => Portfolio::factory()->create(['user_id' => $user->id])]);

		$this->assertInstanceOf(Transaction::class, $user->transactions->first());
	}

	/** @test */
	public function it_has_many_coins()
	{
		$user = User::factory()->create();

		Transaction::factory()->create(['portfolio_id' => Portfolio::factory()->create(['user_id' => $user->id])]);

		$this->assertInstanceOf(Coin::class, $user->coins->first());		 
	}

	/** @test */
	public function it_knows_if_it_owns_a_given_coin()
	{
		$user = User::factory()->create();
		$coin = Coin::factory()->create();

		$this->assertFalse($user->transactionsOf($coin)->exists());

		Transaction::factory()->create(['coin_id' => $coin->id, 'portfolio_id' => Portfolio::factory()->create(['user_id' => $user->id])]);
		
		$this->assertTrue($user->transactionsOf($coin)->exists());		
	}
}
