<?php

namespace App\Models\Traits;

use App\Api\Coingecko;

trait CryptoApi
{
	public function api()
	{
		return (new Coingecko($this->uid));
	}

	public function getPriceAttribute()
	{
		return $this->latest_market['market_data']['current_price'][config('app.currency')];
	}

	public function getPriceChangeTodayAttribute()
	{
		return $this->price - $this->range('24h')[0][1];
	}

	public function getLastUpdatedAttribute()
	{
		return carbon($this->latest_market['last_updated'])->format('D, M j, g:i a');
	}

	public function getMarketCapAttribute()
	{
		return $this->latest_market['market_data']['market_cap'][config('app.currency')];
	}

	public function getTotalVolumeAttribute()
	{
		return $this->latest_market['market_data']['total_volume'][config('app.currency')];
	}

	public function getSupplyAttribute()
	{
		return $this->latest_market['market_data']['circulating_supply'];
	}

	public function getMaxSupplyAttribute()
	{
		return $this->latest_market['market_data']['max_supply'];
	}

	public function getPastHourChangeAttribute()
	{
		return $this->latest_market['market_data']['price_change_percentage_1h_in_currency'][config('app.currency')];
	}

	public function getPastDayChangeAttribute()
	{
		return $this->latest_market['market_data']['price_change_percentage_24h_in_currency'][config('app.currency')];
	}

	public function getPastWeekChangeAttribute()
	{
		return $this->latest_market['market_data']['price_change_percentage_24h_in_currency'][config('app.currency')];
	}

	public function getPastMonthChangeAttribute()
	{
		return $this->latest_market['market_data']['price_change_percentage_30d_in_currency'][config('app.currency')];
	}

	public function getPastYearChangeAttribute()
	{
		return $this->latest_market['market_data']['price_change_percentage_1y_in_currency'][config('app.currency')];
	}

	public function range($range)
	{
		$attr = 'latest_'.$range.'_range';

		return $this->$attr['prices'];		
	}
}