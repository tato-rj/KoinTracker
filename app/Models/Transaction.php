<?php

namespace App\Models;

class Transaction extends AppModel
{
	protected $casts = [
		'coin_amount' => 'float',
		'price_per_coin' => 'float',
		'currency_amount' => 'float',
		'transaction_date' => 'datetime'
	];

	public function portfolio()
	{
		return $this->belongsTo(Portfolio::class);
	}

	public function coin()
	{
		return $this->belongsTo(Coin::class);
	}

	public function getCurrentValueAttribute()
	{
		return $this->coin_amount * $this->coin->price;
	}

	public function gains()
	{
		return diffInPercent($this->price_per_coin, $this->coin->price);
	}
}
