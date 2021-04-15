<?php

namespace App\Api;

use Illuminate\Support\Facades\Http;

class Coingecko
{
	protected $id;

	public function __construct($id = null)
	{
		$this->id = $id;	
	}

	public function range($from = null)
	{
		if (! $from)
			return null;

		$response = Http::retry(3, 100)->get('https://api.coingecko.com/api/v3/coins/'.$this->id.'/market_chart/range', [
			'vs_currency' => config('app.currency'),
			'from' => $from->timestamp,
			'to' => now()->timestamp
		]);

		return $response->collect();
	}

	public function market()
	{
		$response = Http::retry(3, 100)->get('https://api.coingecko.com/api/v3/coins/'.$this->id, [
			'localization' => false,
			'tickers' => false,
			'community_data' => false,
			'developer_data' => false
		]);

		return $response->collect();
	}

	public function exchanges($count)
	{
		$response = Http::retry(3, 100)->get('https://api.coingecko.com/api/v3/exchanges', [
			'per_page' => $count,
			'page' => 1
		]);

		return $response->collect();
	}
}