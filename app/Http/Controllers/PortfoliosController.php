<?php

namespace App\Http\Controllers;

use App\Models\{Portfolio, Coin};
use Illuminate\Http\Request;

class PortfoliosController extends Controller
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
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        $coins = Coin::all();

        return view('portfolios.show.index', compact(['portfolio', 'coins']));
    }

    public function transactions(Request $request, Portfolio $portfolio)
    {
        $transactions = $request->has('coin') ? 
            auth()->user()->transactionsOf(Coin::name($request->coin))->get()->slice($request->start_at)->take(3) : 
            $portfolio->transactions->slice($request->start_at)->take(3);

        if ($transactions)
            return view('transactions.show.load', compact('transactions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
