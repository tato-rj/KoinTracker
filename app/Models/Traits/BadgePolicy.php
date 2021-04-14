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
			if (intval($transaction->gains()) >= 10)
				return true;
		}
		
		return false;
	}

	public function fighterJet()
	{
		return intval(diffInPercent($this->portfolio->originalValue(), $this->portfolio->value())) >= 100;
	}
}