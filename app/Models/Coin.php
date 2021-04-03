<?php

namespace App\Models;

use App\Contracts\ApiContract;
use App\Models\Traits\CryptoApi;

class Coin extends AppModel implements ApiContract
{
	use CryptoApi;
	
    protected $casts = [
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

    public function getIcon($type = 'color')
    {
    	return asset('images/crypto/icons/'.$type.'/'.$this->short.'.svg');
    }

    public function scopeName($query, $name)
    {
        return $query->where('name', $name)->first();
    }
}
