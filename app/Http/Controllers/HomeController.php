<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Coin, Exchange, Fiat};

class HomeController extends Controller
{
    public function index()
    {
\Mail::raw('Foo bar', function ($message) {
    $message->to('arthurvillar@gmail.com');
});
    	$coins = Coin::all();
    	$exchanges = Exchange::valid()->top(8)->get();

    	return view('home.index', compact(['coins', 'exchanges']));
    }
}
