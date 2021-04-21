<?php

use  Akaunting\Money\{Money, Currency};

function fiat($value, $formatted = false)
{
	return (new Money($value ?? 0, new Currency('USD'), $formatted));
}
