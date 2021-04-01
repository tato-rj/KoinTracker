<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\{Portfolio, Transaction, User, Badge};

class BadgeTest extends TestCase
{
	/** @test */
	public function it_belongs_to_many_users()
	{
		$this->assertTrue(true);
	}
}
