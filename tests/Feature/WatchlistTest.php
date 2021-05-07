<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class WatchlistTest extends TestCase
{
    /** @test */
    public function unauthenticated_users_cannot_add_coins_to_their_watchlist()
    {
        $this->expectException('Illuminate\Auth\AuthenticationException');

        $this->patch(route('watchlist.update', ['coin_id' => $this->coin->uid]));         
    }

    /** @test */
    public function users_can_toggle_pieces_from_their_watchlist()
    {
        $this->signIn(User::factory()->unverified()->create(), $verify = true);

        $this->assertEmpty(auth()->user()->watchlist);

        $this->patch(route('watchlist.update', ['coin_id' => $this->coin->uid]));
        
        $this->assertNotEmpty(auth()->user()->watchlist()->get());

        $this->patch(route('watchlist.update', ['coin_id' => $this->coin->uid]));
        
        $this->assertEmpty(auth()->user()->fresh()->watchlist()->get());
    }
}
