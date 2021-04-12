<?php

namespace App\Models\Traits;

trait BadgePolicy
{
	public function baby()
	{
		return $this->transactions()->count() > 0;
	}

	public function cookie()
	{
		foreach ($this->transactions as $transaction) {
			if ($transaction->gains() >= 10)
				return true;
		}
		
		return false;
	}
}