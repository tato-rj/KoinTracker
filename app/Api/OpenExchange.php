<?php

namespace App\Api;

use Illuminate\Support\Facades\Http;

class OpenExchange
{
	public function rates()
	{
		$response = Http::retry(3, 100)->get('https://openexchangerates.org/api/latest.json', [
			'app_id' => config('services.openex.key')
		]);

		return $response->collect();
	}
}