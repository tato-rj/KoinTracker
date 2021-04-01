<?php

namespace App\Models;

class Transaction extends AppModel
{
	public function portfolio()
	{
		return $this->belongsTo(Portfolio::class);
	}
}
