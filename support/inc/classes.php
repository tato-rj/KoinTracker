<?php

use  Akaunting\Money\Money;

function usd($cents)
{
	return Money::USD($cents, true)->format();
}