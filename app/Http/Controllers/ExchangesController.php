<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exchange;

class ExchangesController extends Controller
{
    public function index()
    {
    	$exchanges = Exchange::valid()->top(50)->get();

    	return view('exchanges.index', compact('exchanges'));
    }
}
