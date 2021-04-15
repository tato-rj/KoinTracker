<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Coin, Exchange};

class HomeController extends Controller
{
    public function index()
    {
    	$coins = Coin::all();
    	$exchanges = Exchange::all();
    	
    	return view('home.index', compact(['coins', 'exchanges']));
    }
}
