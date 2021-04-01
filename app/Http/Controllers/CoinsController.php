<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;

class CoinsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function show(Coin $coin)
    {
        $coins = Coin::all();

        return view('coin.show.index', compact(['coin', 'coins']));
    }

    public function chart(Request $request, Coin $coin)
    {
        return view('components.chart.canvas', [
            'id' => $request->id, 
            'points' => $coin->range($request->range), 
            'url' => route('coins.chart', $coin)])->render();
    }
}
