<?php

namespace App\Models\Traits;

use App\Api\Coingecko;

trait CryptoApi
{
	public function api()
	{
		return (new Coingecko($this->uid));
	}

	public function getWebsiteAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['links']['homepage'][0];
	}

	public function getSubredditAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['links']['subreddit_url'];
	}

	public function getDescriptionAttribute()
	{
		if (! $this->latest_market)
			return null;

		return strip_tags($this->latest_market['description'][config('app.locale')]);
	}

	public function getPriceAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['current_price'][config('app.currency')];
	}

	public function getPriceChangeTodayAttribute()
	{
		return $this->price - $this->range('24h')[0][1];
	}

	public function getLastUpdatedAttribute()
	{
		if (! $this->latest_market)
			return null;

		return carbon($this->latest_market['last_updated'])->format('D, M j, g:i a');
	}

	public function getMarketCapAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['market_cap'][config('app.currency')];
	}

	public function getTotalVolumeAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['total_volume'][config('app.currency')];
	}

	public function getSupplyAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['circulating_supply'];
	}

	public function getMaxSupplyAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['max_supply'];
	}

	public function getPastHourChangeAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['price_change_percentage_1h_in_currency'][config('app.currency')];
	}

	public function getPastDayChangeAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['price_change_percentage_24h_in_currency'][config('app.currency')];
	}

	public function getPastWeekChangeAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['price_change_percentage_24h_in_currency'][config('app.currency')];
	}

	public function getPastMonthChangeAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['price_change_percentage_30d_in_currency'][config('app.currency')];
	}

	public function getPastYearChangeAttribute()
	{
		if (! $this->latest_market)
			return null;

		return $this->latest_market['market_data']['price_change_percentage_1y_in_currency'][config('app.currency')];
	}

	public function range($range)
	{
		$attr = 'latest_'.$range.'_range';

		if (! $this->$attr)
			return null;

		return $this->$attr['prices'];
	}
}