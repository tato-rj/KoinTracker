<?php

namespace App\Http\Controllers;

use App\Models\{Transaction, Portfolio};
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Portfolio $portfolio)
    {
        $portfolio->transactions()->create([
            'coin_id' => $request->coin_id,
            'coin_amount' => $request->coin_amount,
            'price_per_coin' => $request->price_per_coin,
            'currency' => auth()->user()->currency,
            'currency_amount' => $portfolio->transactionCost($request->coin_amount, $request->price_per_coin, $request->fee),
            'fee' => $request->fee ?? 0,
            'comments' => $request->comments,
            'type' => $request->type,
            'transfer_type' => $request->transfer_type,
            'transaction_date' => carbon($request->transaction_date)->setTimeFromTimeString($request->transaction_time)->toDateTimeString()
        ]);

        return back()->with('success', 'The transaction has been successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio, Transaction $transaction)
    {
        $this->authorize('update', $transaction);

        $transaction->update([
            'coin_amount' => $request->coin_amount,
            'price_per_coin' => $request->price_per_coin,
            'currency' => auth()->user()->currency,
            'currency_amount' => $portfolio->transactionCost($request->coin_amount, $request->price_per_coin, $request->fee),
            'fee' => $request->fee ?? 0,
            'comments' => $request->comments,
            'transfer_type' => $request->transfer_type,
            'transaction_date' => carbon($request->transaction_date . ' ' . $request->transaction_time)->toDateTimeString()
        ]);

        return back()->with('success', 'The transaction has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio, Transaction $transaction)
    {
        $this->authorize('update', $transaction);
        
        $transaction->delete();

        return back()->with('success', 'The transaction has been successfully deleted!');
    }
}
