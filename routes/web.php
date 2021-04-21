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

Route::get('', 'HomeController@index')->name('home');

Route::get('glossary', 'GlossaryController@index')->name('glossary');

Route::get('exchanges', 'ExchangesController@index')->name('exchanges');

Route::prefix('{coin}')->name('coins.')->group(function() {

	Route::get('', 'CoinsController@show')->name('show');

	Route::get('chart', 'ChartsController@coin')->name('chart');

});

Route::prefix('portfolios')->name('portfolios.')->group(function() {

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

