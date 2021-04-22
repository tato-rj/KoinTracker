<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Fiat, Coin};

class ConversionsController extends Controller
{
    public function index()
    {
    	return view('convert.index');
    }

    public function coinToFiat(Request $request)
    {
    	return Coin::find($request->coin)->convertTo(Fiat::find($request->fiat));
    }

    public function fiatToCoin(Request $request)
    {
        return Fiat::find($request->fiat)->convertTo(Coin::find($request->coin));
    }
}
