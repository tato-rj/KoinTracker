<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /** @test */
    public function unauthenticated_users_cannot_add_transations()
    {
        $this->expectException('Illuminate\Auth\AuthenticationException');

        $this->post(route('portfolio.transactions.store'));         
    }
}
