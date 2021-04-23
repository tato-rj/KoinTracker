<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Fiat, Coin};

class ConversionsController extends Controller
{
    public function index()
    {
        $coins = Coin::all();
        $fiats = Fiat::all();

    	return view('convert.index', compact(['coins', 'fiats']));
    }

    public function coinToFiat(Request $request)
    {
    	return Coin::find($request->coin)->valueIn((float) $request->amount, $request->currency);
    }

    public function fiatToCoin(Request $request)
    {
        return Fiat::currency($request->currency)->valueIn($request->amount, Coin::find($request->coin));
    }
}
