<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\{User, Portfolio, Transaction};

class TransactionTest extends TestCase
{
    /** @test */
    public function unauthenticated_users_cannot_add_transations()
    {
        $this->expectException('Illuminate\Auth\AuthenticationException');

        $this->post(route('portfolios.transactions.store', $this->portfolio));         
    }

    /** @test */
    public function unverified_users_cannot_add_transations()
    {
    	$this->signIn(User::factory()->unverified()->create());

        $portfolio = Portfolio::factory()->create(['user_id' => auth()->user()]);

        $this->post(route('portfolios.transactions.store', $portfolio))->assertRedirect();     
    }

    /** @test */
    public function verified_users_can_add_transations()
    {
        $request = Transaction::factory()->make();

    	$this->signIn(User::factory()->unverified()->create(), $verify = true);

        $this->post(route('portfolios.transactions.store', auth()->user()->portfolios->first()), [
            'coin_id' => $request->coin_id,
            'coin_amount' => $request->coin_amount,
            'price_per_coin' => $request->price_per_coin,
            'fee' => $request->fee,
            'comments' => $request->comments,
            'type' => $request->type,
            'transfer_type' => $request->transfer_type,
            'transaction_date' => '2021-04-03',
            'transaction_time' => '09:15 AM']);

        $this->assertDatabaseHas('transactions', ['portfolio_id' => auth()->user()->portfolios->first()->id]);
    }

    /** @test */
    public function users_can_edit_their_transations()
    {
        $this->signIn(User::factory()->unverified()->create(), $verify = true);

        $original = Transaction::factory()->make(['transaction_time' => now()->format('h:m:i')]);

        $this->post(route('portfolios.transactions.store', auth()->user()->portfolios->first()), [
            'coin_id' => $original->coin_id,
            'coin_amount' => $original->coin_amount,
            'price_per_coin' => $original->price_per_coin,
            'fee' => $original->fee,
            'comments' => $original->comments,
            'type' => $original->type,
            'transfer_type' => $original->transfer_type,
            'transaction_date' => '2021-04-03',
            'transaction_time' => '09:15 AM']);

        $portfolio = auth()->user()->portfolios->first();
        $transaction = $portfolio->transactions->first();

        $this->patch(route('portfolios.transactions.update', compact(['portfolio', 'transaction'])), [
            'coin_id' => $original->coin_id,
            'coin_amount' => $original->coin_amount,
            'price_per_coin' => $original->price_per_coin,
            'fee' => $original->fee,
            'comments' => 'NEW COMMENT',
            'type' => $original->type,
            'transfer_type' => $original->transfer_type,
            'transaction_date' => '2021-04-03',
            'transaction_time' => '09:15 AM']);

        $this->assertNotEquals($original->comments, auth()->user()->fresh()->portfolios->first()->transactions->first()->comments);
    }

    /** @test */
    public function users_cannot_edit_other_users_transations()
    {
        $this->expectException('Illuminate\Auth\Access\AuthorizationException');

        $this->signIn(User::factory()->unverified()->create(), $verify = true);

        $portfolio = Portfolio::factory()->create(['user_id' => User::factory()->create()->id]);

        $transaction = Transaction::factory()->create(['portfolio_id' => $portfolio->id]);

        $this->patch(route('portfolios.transactions.update', compact(['portfolio', 'transaction'])), Transaction::factory()->make(['comments' => 'foo'])->toArray());
    }

    /** @test */
    public function users_can_delete_their_transations()
    {
        $this->signIn(User::factory()->unverified()->create(), $verify = true);

        $portfolio = Portfolio::factory()->create(['user_id' => auth()->user()->id]);

        $transaction = Transaction::factory()->create(['portfolio_id' => $portfolio->id]);

        $this->delete(route('portfolios.transactions.destroy', compact(['portfolio', 'transaction'])));

        $this->assertDatabaseMissing('transactions', ['id' => $transaction->id]);
    }

    /** @test */
    public function users_cannot_delete_other_users_transations()
    {
        $this->expectException('Illuminate\Auth\Access\AuthorizationException');

        $this->signIn(User::factory()->unverified()->create(), $verify = true);

        $portfolio = Portfolio::factory()->create(['user_id' => User::factory()->create()->id]);

        $transaction = Transaction::factory()->create(['portfolio_id' => $portfolio->id]);

        $this->delete(route('portfolios.transactions.destroy', compact(['portfolio', 'transaction'])));
    }

    /** @test */
    public function transfer_transactions_dont_record_a_currency_amount()
    {
        $request = Transaction::factory()->make(['type' => 'transfer']);

        $this->signIn(User::factory()->unverified()->create(), $verify = true);

        $this->post(route('portfolios.transactions.store', auth()->user()->portfolios->first()), [
            'coin_id' => $request->coin_id,
            'coin_amount' => $request->coin_amount,
            'price_per_coin' => $request->price_per_coin,
            'fee' => $request->fee,
            'comments' => $request->comments,
            'type' => $request->type,
            'transfer_type' => $request->transfer_type,
            'transaction_date' => '2021-04-03',
            'transaction_time' => '09:15 AM']);

        $this->assertTrue(auth()->user()->transactions()->first()->currency_amount->isZero());
    }

    /** @test */
    public function sell_transactions_record_a_negative_currency_amount_and_coin_amount()
    {
        $request = Transaction::factory()->make(['type' => 'sell']);

        $this->signIn(User::factory()->unverified()->create(), $verify = true);

        $this->post(route('portfolios.transactions.store', auth()->user()->portfolios->first()), [
            'coin_id' => $request->coin_id,
            'coin_amount' => $request->coin_amount,
            'price_per_coin' => $request->price_per_coin,
            'fee' => $request->fee,
            'comments' => $request->comments,
            'type' => $request->type,
            'transfer_type' => $request->transfer_type,
            'transaction_date' => '2021-04-03',
            'transaction_time' => '09:15 AM']);

        $this->assertTrue(auth()->user()->transactions()->first()->currency_amount->isNegative());

        $this->assertTrue(auth()->user()->transactions()->first()->coin_amount < 0);
    }
}
