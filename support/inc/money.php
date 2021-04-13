<?php

use  Akaunting\Money\{Money, Currency};

function fiat($value, $formatted = true)
{
	if ($value === null)
		return null;
	
	return (new Money($value, new Currency('USD'), $formatted));
}