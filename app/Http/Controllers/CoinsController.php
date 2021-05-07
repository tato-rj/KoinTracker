<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;
use App\Paginator\CollectionPaginator;
use App\Markets\CryptoCurrency;

class CoinsController extends Controller
{
    public function index()
    {
        $coins = CollectionPaginator::paginate((new CryptoCurrency)->get()->sortKeys(), 16);

        return view('coins.index', compact('coins'));
    }

    public function search(Request $request)
    {
        $coins = (new CryptoCurrency)->get()->sortKeys()->filter(function($coin) use ($request) {
            return str_contains(strtolower($coin['name']), strtolower($request->input));
        });
        
        return view('coins.search.results', compact('coins'))->render();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function show(Coin $coin)
    {
        return view('coins.show.index', compact(['coin']));
    }
}
