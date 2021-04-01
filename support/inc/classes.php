<?php

use  Akaunting\Money\Money;

function usd($cents)
{
	if ($cents === null)
		return null;
	
	return Money::USD($cents, true)->format();
}