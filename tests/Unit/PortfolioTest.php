<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\{Portfolio, Transaction, User, Coin};

class PortfolioTest extends TestCase
{
	/** @test */
	public function it_belongs_to_a_user()
	{
		$this->assertInstanceOf(User::class, $this->portfolio->user);
	}

	/** @test */
	public function it_has_many_transactions()
	{
		$this->assertInstanceOf(Transaction::class, $this->portfolio->transactions->first());
	}

	/** @test */
	public function it_has_many_coins()
	{
		$this->assertInstanceOf(Coin::class, $this->portfolio->coins->first());
	}

	/** @test */
	public function it_knows_the_amount_of_coins_it_has_for_any_given_coin()
	{
		$coin = $this->newCoin();
		
		Transaction::factory()->count(2)->create([
			'portfolio_id' => $this->portfolio->id, 
			'coin_id' => $coin->id,
			'coin_amount' => 5
		]);

		$this->assertEquals($this->portfolio->amountOf($coin->uid), 10);
	}

	/** @test */
	public function it_knows_the_amount_of_coins_it_has_for_any_given_coin_up_to_a_specific_date()
	{
		$coin = $this->newCoin();
		
		Transaction::factory()->count(2)->create([
			'portfolio_id' => $this->portfolio->id, 
			'coin_id' => $coin->id,
			'transaction_date' => now()->subMonth(),
			'coin_amount' => 5
		]);

		Transaction::factory()->create([
			'portfolio_id' => $this->portfolio->id, 
			'coin_id' => $coin->id,
			'transaction_date' => now()->subDay(),
			'coin_amount' => 5
		]);

		$this->assertEquals($this->portfolio->amountOf($coin->uid, now()->subWeek()), 10);

		$this->assertEquals($this->portfolio->amountOf($coin->uid), 15);
	}

	/** @test */
	public function it_knows_its_original_value()
	{
		Transaction::factory()->create(['portfolio_id' => $this->portfolio->id, 'transaction_date' => now()->subMonth(), 'coin_id' => $this->newCoin()->id]);
		 
		$this->assertFalse($this->portfolio->originalValue()->equals($this->portfolio->value()));		 
	}

	/** @test */
	public function it_knows_its_most_current_total_value()
	{
		Transaction::factory()->create(['portfolio_id' => $this->portfolio->id, 'coin_id' => $this->newCoin()->id]);

		$oldValue = $this->portfolio->value();

		Transaction::factory()->create(['portfolio_id' => $this->portfolio->id, 'coin_id' => $this->newCoin()->id]);

		$this->assertTrue($this->portfolio->value()->greaterThan($oldValue));
	}

	/** @test */
	public function it_knows_its_total_most_current_total_value_up_to_a_specific_date()
	{
		Transaction::factory()->create(['portfolio_id' => $this->portfolio->id, 'transaction_date' => now()->subMonth(), 'coin_id' => $this->newCoin()->id]);

		$oldValue = $this->portfolio->value();

		Transaction::factory()->create(['portfolio_id' => $this->portfolio->id, 'transaction_date' => now(), 'coin_id' => $this->newCoin()->id]);

		$this->assertTrue($this->portfolio->value(now()->subWeek())->equals($oldValue));
	}

	/** @test */
	public function it_knows_its_total_most_current_total_value_for_a_given_coin()
	{
		Transaction::factory()->create(['portfolio_id' => $this->portfolio->id, 'coin_id' => $this->newCoin()->id]);

		Transaction::factory()->create(['portfolio_id' => $this->portfolio->id, 'coin_id' => $this->newCoin()->id]);

		$this->assertTrue($this->portfolio->valueFor($this->portfolio->coins->first())->lessThan($this->portfolio->value()));
	}

	/** @test */
	public function it_knows_its_total_most_current_total_value_for_a_given_coin_up_to_a_specific_date()
	{
		$coin = $this->newCoin();

		Transaction::factory()->create(['coin_id' => $coin->id, 'portfolio_id' => $this->portfolio->id, 'transaction_date' => now()->subMonth(), 'coin_id' => $coin->id]);

		Transaction::factory()->create(['coin_id' => $coin->id, 'portfolio_id' => $this->portfolio->id, 'transaction_date' => now(), 'coin_id' => $coin->id]);

		$this->assertTrue($this->portfolio->valueFor($coin, now()->subWeek())->lessThan($this->portfolio->valueFor($coin)));
	}
}
