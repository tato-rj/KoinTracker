<?php

namespace App\Models\Traits;

use App\Api\Coingecko;
use App\Chart\Chart;

trait CryptoApi
{
	public function api()
	{
		return (new Coingecko($this->uid));
	}

	public function getWebsiteAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['links']['homepage'][0];
	}

	public function getSubredditAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['links']['subreddit_url'];
	}

	public function getDescriptionAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return strip_tags($this->market()->get('latest_market')['description'][config('app.locale')]);
	}

	public function getPriceChangeTodayAttribute()
	{
		return $this->market()->get('current_price')->subtract(money($this->range('24h', $formatted = false)[0][1], 'usd', $notCents = true));
	}

	public function getLastUpdatedAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return carbon($this->market()->get('latest_market')['last_updated'])->format('D, M j, g:i a');
	}

	public function getMarketCapAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['market_cap'][config('app.currency')];
	}

	public function getTotalVolumeAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['total_volume'][config('app.currency')];
	}

	public function getSupplyAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['circulating_supply'];
	}

	public function getMaxSupplyAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['max_supply'];
	}

	public function getPastHourChangeAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['price_change_percentage_1h_in_currency'][config('app.currency')];
	}

	public function getPastDayChangeAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['price_change_percentage_24h_in_currency'][config('app.currency')];
	}

	public function getPastWeekChangeAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['price_change_percentage_7d_in_currency'][config('app.currency')];
	}

	public function getPastMonthChangeAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['price_change_percentage_30d_in_currency'][config('app.currency')];
	}

	public function getPastYearChangeAttribute()
	{
		if (! $this->market()->get('latest_market'))
			return null;

		return $this->market()->get('latest_market')['market_data']['price_change_percentage_1y_in_currency'][config('app.currency')];
	}

	public function range($range, $formatted = true)
	{
		$attr = 'latest_'.$range.'_range';

		if (! $this->market()->get($attr))
			return null;

		return (new Chart)->getData($this->market()->get($attr)['prices'])->setMax(30)->filter($formatted);
	}
}