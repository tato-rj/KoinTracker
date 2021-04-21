<?php

namespace App\Models\Traits;
use App\Models\Coin;

trait BadgePolicy
{
	public function baby()
	{
		return $this->transactions()->count() > 0;
	}

	public function cookie()
	{
		foreach ($this->transactions as $transaction) {
			if (intval($transaction->gains()) >= 10)
				return true;
		}
		
		return false;
	}

	public function starHalf()
	{
		return $this->created_at->lte(now()->subMonth());
	}

	public function star()
	{
		return $this->created_at->lte(now()->subYear());
	}

	public function dice()
	{
		return $this->transactions()->count() >= 5;
	}

	public function heart()
	{
		return $this->coins->count() >= 3;
	}

	public function gamepad()
	{
		foreach ($this->transactions as $transaction) {
			if (intval($transaction->gains()) >= 50)
				return true;
		}
		
		return false;
	}

	public function coffee()
	{
		return $this->transactions()->whereBetween('transactions.created_at', [now()->subMonths(3), now()->subMonths(2)])->exists() &&
			   $this->transactions()->whereBetween('transactions.created_at', [now()->subMonths(2), now()->subMonths(1)])->exists() &&
			   $this->transactions()->whereBetween('transactions.created_at', [now()->subMonths(1), now()])->exists();
	}

	public function userAstronaut()
	{
		foreach ($this->transactions as $transaction) {
			if (intval($transaction->gains()) >= 100)
				return true;
		}
		
		return false;
	}

	public function fighterJet()
	{
		foreach ($this->transactions as $transaction) {
			if (intval($transaction->gains()) >= 200)
				return true;
		}
		
		return false;
	}

	public function ethereum()
	{
		return $this->transactionsOf(Coin::name('ethereum'))->whereDate('transaction_date', '<=', now()->subYear())->exists();
	}

	public function bitcoin()
	{
		return $this->transactionsOf(Coin::name('bitcoin'))->sum('coin_amount') >= 1;
	}

	public function jedi()
	{
		return $this->transactions()->whereDate('transaction_date', '<=', now()->subYear())->exists();
	}

	public function medal()
	{
		return false;
	}

	public function trophy()
	{
		return $this->transactions()->whereDate('transaction_date', '<=', now()->subYears(5))->exists();
	}

	public function dragon()
	{
		if ($this->transactions()->exists())
			return intval(diffInPercent($this->portfolio->originalValue()->getAmount(), $this->portfolio->value()->getAmount())) >= 1000;

		return false;
	}
}