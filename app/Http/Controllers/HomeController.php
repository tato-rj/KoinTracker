<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;

class HomeController extends Controller
{
    public function index()
    {
    	$coins = Coin::all();
    	// dd(get_sentences($coins->first()->description, 2));
    	return view('home.index', compact('coins'));
    }
}
