<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Coin, Portfolio};

class ChartsController extends Controller
{
    public function coin(Request $request, Coin $coin)
    {
        return view('components.chart.canvas', [
            'id' => $request->id, 
            'points' => $coin->range($request->range), 
            'url' => route('coins.show.chart', $coin), 
            'range' => $request->range,
            'color' => $coin->color($request->range)])->render();
    }

    public function portfolio(Request $request, Portfolio $portfolio)
    {
        return view('components.chart.canvas', [
            'id' => $request->id, 
            'points' => $portfolio->range($request->range), 
            'range' => $request->range,
            'url' => route('portfolios.chart', $portfolio)])->render();
    }
}
