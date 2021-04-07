<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;

class HomeController extends Controller
{
    public function index()
    {
    	$coins = Coin::all();

    	// return auth()->user()->portfolio->range('1h');
    	return view('home.index', compact('coins'));
    }
}
