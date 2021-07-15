<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Coin, Exchange, Fiat};

class HomeController extends Controller
{
    public function index()
    {
    	$exchanges = Exchange::valid()->top(8)->get();

       	return view('home.index', compact('exchanges'));
    }
}
