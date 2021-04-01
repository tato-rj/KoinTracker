<?php

namespace App\Api;

use Illuminate\Support\Facades\Http;

class Coingecko
{
	protected $id;

	public function __construct($id)
	{
		$this->id = $id;	
	}

	public function range($from = null)
	{
		if (! $from)
			return null;

		// $successful = false;
		// $attempts = 0;

		// while ($attempts < 3 || $successful) {
		// 	$attempts += 1;

			$response = Http::get('https://api.coingecko.com/api/v3/coins/'.$this->id.'/market_chart/range', [
				'vs_currency' => config('app.currency'),
				'from' => $from->timestamp,
				'to' => now()->timestamp
			]);

		// 	if ($response->successful())
		// 		$successful = true;
		// }

		return $response->collect();
	}

	public function market()
	{
		$response = Http::get('https://api.coingecko.com/api/v3/coins/'.$this->id, [
			'localization' => false,
			'tickers' => false,
			'community_data' => false,
			'developer_data' => false
		]);

		return $response->collect();
	}
}