<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;

class HomeController extends Controller
{
    public function index()
    {
    	$coins = Coin::all();

    	return view('portfolio.index', compact('coins'));
    }
}
