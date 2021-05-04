<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('coming-soon')->name('dev.')->group(function() {
	Route::get('', function() {
		return view('auth.dev');
	})->name('index');

	Route::post('admin', function() {
		if (request()->pass !== 'koin21')
			return back()->with('error', 'Your password is not right...');
		
		session(['dev' => true]);

		return redirect(route('home'));
	})->name('admin');
});

Route::get('', 'HomeController@index')->middleware('dev')->name('home');

Route::get('glossary', 'GlossaryController@index')->middleware('dev')->name('glossary');

Route::get('exchanges', 'ExchangesController@index')->middleware('dev')->name('exchanges');

Route::prefix('convert')->middleware('dev')->name('convert.')->group(function() {

	Route::get('', 'ConversionsController@index')->name('index');

	Route::get('coin-to-fiat', 'ConversionsController@coinToFiat')->name('coin-fiat');

	Route::get('fiat-to-coin', 'ConversionsController@fiatToCoin')->name('fiat-coin');

});

Route::prefix('coins')->middleware('dev')->name('coins.')->group(function() {

	Route::get('', 'CoinsController@index')->name('index');

	Route::get('search', 'CoinsController@search')->name('search');

	Route::prefix('{coin}')->name('show')->group(function() {

		Route::get('', 'CoinsController@show');

		Route::get('chart', 'ChartsController@coin')->name('.chart');

	});
});



Route::prefix('portfolios')->middleware('dev')->name('portfolios.')->group(function() {

	Route::prefix('{portfolio}')->group(function() {

		Route::get('', 'PortfoliosController@show')->name('show');

		Route::get('transactions', 'PortfoliosController@transactions')->name('transactions');

		Route::get('chart', 'ChartsController@portfolio')->name('chart');

		Route::prefix('transactions')->name('transactions.')->middleware(['auth', 'verified'])->group(function() {

			Route::post('', 'TransactionsController@store')->name('store');
			
			Route::patch('{transaction}', 'TransactionsController@update')->name('update');

			Route::delete('{transaction}', 'TransactionsController@destroy')->name('destroy');

		});
	});
});

