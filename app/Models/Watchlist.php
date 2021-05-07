<?php

namespace App\Models;

use App\Markets\CryptoCurrency;

class Watchlist extends AppModel
{
	public function coin()
	{
		if (app()->coins->exists('uid', $this->coin_id)) {
			$id = app()->coins->where('uid', $this->coin_id)->first()->uid;
		} else {
			$id = $this->coin_id;
		}

        return (new CryptoCurrency)->get()->where('id', $id)->first();
	}

	public function scopeHasCoin($query, $coin_id)
	{
		return $query->where('coin_id', $coin_id)->exists();
	}
}
