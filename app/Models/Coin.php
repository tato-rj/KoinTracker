<?php

namespace App\Models;

use App\Contracts\{ApiContract, TradableAsset};
use App\Models\Traits\CryptoApi;
use App\Api\Fake\Coin as FakeCoin;
use App\Casts\Money;

class Coin extends AppModel implements ApiContract, TradableAsset
{
	use CryptoApi;
	
    protected $casts = [
        'current_price' => Money::class,
        'latest_market' => 'array',
		'latest_1h_range' => 'array',
		'latest_24h_range' => 'array',
		'latest_7d_range' => 'array',
		'latest_30d_range' => 'array',
		'latest_1y_range' => 'array',
		'latest_all_range' => 'array'
    ];

    public function getRouteKeyName()
    {
        return 'uid';
    }

    public function scopeFake($query)
    {
        return new FakeCoin;
    }

    public function getIcon($type = 'color')
    {
    	return asset('images/crypto/icons/'.$type.'/'.$this->short.'.svg');
    }

    public function scopeName($query, $name)
    {
        return $query->where('uid', $name)->first();
    }

    public function convertTo($fiat)
    {
        return $this->current_price->multiply($fiat->current_price)->format();
    }
}
