<?php

namespace App\Models;

class Portfolio extends AppModel
{
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}

	public function range($range)
	{
		return [[]];

		// Example	
		// return [
		// 	[now()->subDay()->timestamp, 10000],
		// 	[now()->timestamp, 12000]
		// ];
	}
}
