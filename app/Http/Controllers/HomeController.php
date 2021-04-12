<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;

class HomeController extends Controller
{
    public function index()
    {
    	$coins = Coin::all();
dd(auth()->user()->hasBadge(\App\Models\Badge::all()[1]));
    	return view('home.index', compact('coins'));
    }
}
