<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\{Portfolio, Transaction, User};

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
}
