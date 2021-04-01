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
            'coin' => $request->coin,
            'coin_amount' => $request->coin_amount,
            'currency' => $request->currency,
            'currency_amount' => $request->currency_amount,
            'fee' => $request->fee,
            'comments' => $request->comments,
            'date' => carbon($request->date)->format('YYYY-MM-DD hh:mm:ss')
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
            'coin' => $request->coin,
            'coin_amount' => $request->coin_amount,
            'currency' => $request->currency,
            'currency_amount' => $request->currency_amount,
            'fee' => $request->fee,
            'comments' => $request->comments,
            'date' => carbon($request->date)->format('YYYY-MM-DD hh:mm:ss')
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
