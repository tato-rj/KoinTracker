<?php

namespace App\Models;

class Transaction extends AppModel
{
	protected $casts = [
		'coin_amount' => 'float',
		'price_per_coin' => 'float',
		'currency_amount' => 'float',
		'transaction_date' => 'date'
	];

	public function portfolio()
	{
		return $this->belongsTo(Portfolio::class);
	}
}
