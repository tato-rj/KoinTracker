<?php

namespace App\Http\Controllers;

use App\Models\{Transaction, Portfolio};
use Illuminate\Http\Request;
use App\Transactions\Calculator;
use App\Http\Requests\TransactionRequest;

class TransactionsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Portfolio $portfolio, TransactionRequest $form)
    {
        $portfolio->transactions()->create([
            'coin_id' => $form->coin_id,
            'coin_amount' => $form->coins(),
            'price_per_coin' => money($form->price_per_coin, appCurrencySymbol(), $notCents = true),
            'currency_amount' => $form->cost(),
            'fee' => $form->getFee(),
            'comments' => $form->comments,
            'type' => $form->type,
            'transfer_type' => $form->transfer_type,
            'transaction_date' => $form->date()
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
    public function update(Request $request, Portfolio $portfolio, Transaction $transaction, TransactionRequest $form)
    {
        $transaction->update([
            'coin_amount' => $form->coins(),
            'price_per_coin' => money($form->price_per_coin, appCurrencySymbol(), $notCents = true),
            'currency_amount' => $form->cost(),
            'fee' => $form->getFee(),
            'comments' => $form->comments,
            'transfer_type' => $form->transfer_type,
            'transaction_date' => $form->date()
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
        $this->authorize('delete', $transaction);
        
        $transaction->delete();

        return back()->with('success', 'The transaction has been successfully deleted!');
    }
}
