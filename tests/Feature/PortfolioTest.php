<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class PortfolioTest extends TestCase
{
    /** @test */
    public function when_a_user_verifies_the_email_a_default_portfolio_is_automatically_created()
    {
        $this->signIn(User::factory()->unverified()->create());

        $this->assertFalse(auth()->user()->portfolios()->exists());

        $this->simulateEmailConfirmation(auth()->user());

        $this->assertTrue(auth()->user()->portfolios()->exists());
    }
}
