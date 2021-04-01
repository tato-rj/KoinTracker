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

Route::prefix('{coin}')->name('coins.')->group(function() {

	Route::get('', 'CoinsController@show')->name('show');

	Route::get('chart', 'CoinsController@chart')->name('chart');

});

Route::prefix('portfolios')->name('portfolios.')->group(function() {

	Route::prefix('{portfolio}')->group(function() {

		Route::prefix('transactions')->name('transactions.')->middleware(['auth', 'verified'])->group(function() {

			Route::post('', 'TransactionsController@store')->name('store');
			
			Route::patch('{transaction}', 'TransactionsController@update')->name('update');

			Route::delete('{transaction}', 'TransactionsController@destroy')->name('destroy');

		});
	});
});

