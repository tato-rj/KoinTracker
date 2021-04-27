<?php

function appCurrency()
{
	return auth()->check() ? auth()->user()->currency() : currency(config('app.currency'));
}

function appCurrencySymbol()
{
	return auth()->check() ? 
		auth()->user()->currency()->getCurrency() : 
		currency(config('app.currency'))->getCurrency();
}
