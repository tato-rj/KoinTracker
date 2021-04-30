<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Fiat, Coin, Exchange};

class ConversionsController extends Controller
{
    public function index()
    {
        $relevantFiats = Fiat::relevant();
        $otherFiats = Fiat::notRelevant();
        $fiats = $relevantFiats->merge($otherFiats);
        $exchanges = Exchange::valid()->top(8)->get();
        
    	return view('convert.index', compact(['relevantFiats', 'otherFiats', 'fiats', 'exchanges']));
    }

    public function coinToFiat(Request $request)
    {
        $fiat = money((float) $request->amount, $request->currency, $notCents = true);
        $currency = $fiat->getCurrency();
        $coin = Coin::find($request->coin);
        $amount = $request->amount;
    	$price = $coin->valueIn($fiat->getValue(), $request->currency);

        return view('convert.results.coinToFiat', compact(['coin', 'amount', 'price', 'currency']))->render();
    }

    public function fiatToCoin(Request $request)
    {
        $fiat = money($request->amount, $request->currency, $notCents = true);
        $coins = Fiat::currency($request->currency)->valueIn($fiat->getValue(), Coin::find($request->coin));

        return view('convert.results.fiatToCoin', compact(['fiat', 'coins']))->render();
    }
}
