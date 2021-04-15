<?php

namespace App\Models;

use App\Api\Coingecko;

class Exchange extends AppModel
{
	protected $flags = [
		'Cayman Islands' => 'ky',
		'United States' => 'us',
		'British Virgin Islands' => 'vg',
		'Hong Kong' => 'hk'
	];

	public function api()
	{
		return new Coingecko;
	}

	public function scopeGetData($query, $count)
	{
		$list = $this->api()->exchanges($count);

		$this->truncate();

		foreach ($list as $exchange) {
			$this->create([
				'name' => $exchange['name'],
				'country' => $exchange['country'],
				'icon' => $exchange['image'],
				'url' => $exchange['url'],
			]);
		}
	}

	public function flag()
	{
		if (array_key_exists($this->country, $this->flags))
			return $this->flags[$this->country];

		return null;
	}
}
