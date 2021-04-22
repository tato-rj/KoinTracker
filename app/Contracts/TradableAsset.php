<?php

namespace App\Contracts;

interface TradableAsset
{
	public function convertTo($tradable);
}
