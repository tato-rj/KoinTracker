<?php

namespace App\Models;

use App\Casts\Money;

class Transaction extends AppModel
{
	protected $casts = [
		'coin_amount' => 'float',
		'price_per_coin' => Money::class,
		'fee' => Money::class,
		'currency_amount' => Money::class,
		'transaction_date' => 'datetime',
	];

	public function portfolio()
	{
		return $this->belongsTo(Portfolio::class);
	}

	public function coin()
	{
		return $this->belongsTo(Coin::class);
	}

	public function getIsShortAttribute()
	{
		return $this->type == 'sell' || $this->transfer_type == 'out';
	}

	public function getTimeAttribute()
	{
		return $this->transaction_date->format('h:i A');
	}

	public function getCurrentValueAttribute()
	{
		return $this->coin->market()->get('current_price')->multiply($this->coin_amount);
	}

	public function getDifferenceAttribute()
	{
		return $this->currentValue->subtract($this->currency_amount);
	}

	public function getIsPositiveAttribute()
	{
		return $this->difference->isPositive();
	}

	public function gains($number = false)
	{
		$percent = diffInPercent($this->price_per_coin->getAmount(), $this->coin->market()->get('current_price')->getAmount());

		return $number ? floatval($percent) : $percent;
	}

	public function isTransfer()
	{
		return $this->type == 'transfer';
	}
}
