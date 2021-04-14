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

	public function getDifferenceAttribute()
	{
		return $this->currentValue - $this->currency_amount;
	}

	public function getIsPositiveAttribute()
	{
		return $this->difference > 0;
	}

	public function gains($number = false)
	{
		$percent = diffInPercent($this->price_per_coin, $this->coin->price);

		return $number ? floatval($percent) : $percent;
	}
}
