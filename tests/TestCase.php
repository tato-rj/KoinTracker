<?php

namespace Tests;

use Tests\Support\ExceptionHandling;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\Models\{User, Transaction, Portfolio, Coin, Fiat};

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, ExceptionHandling, DatabaseMigrations;

    public function setUp() : void
    {
        parent::setUp();
        
        $this->disableExceptionHandling();

        $this->portfolio = Portfolio::factory()->create();

        $this->coin = $this->newCoin();

        $this->fiat = Fiat::factory()->create();
        
        $this->transaction = Transaction::factory()->create(['portfolio_id' => $this->portfolio, 'coin_id' => $this->newCoin()->id]);

        $this->beforeApplicationDestroyed(function () {
            $this->artisan('redis:flush ' . config('database.redis.prefix'));
        });
    }

    protected function signIn($guest = null, $verify = false)
    {
        $user = $guest ?? User::factory()->create();

        if (! $guest->hasVerifiedEmail() && $verify)
            $this->simulateEmailConfirmation($user);

        return $this->actingAs($user);
    }

    protected function logout()
    {
        \Auth::logout();
    }

    function simulateEmailConfirmation($user)
    {
        $verificationUrl = \URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        return $this->actingAs($user)->get($verificationUrl);
    }

    public function newCoin()
    {
        $coin = Coin::factory()->create();

        $coin->fake()->mock();

        return $coin;
    }
}
