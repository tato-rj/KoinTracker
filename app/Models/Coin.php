<?php

namespace App\Models;

use App\Contracts\ApiContract;
use App\Models\Traits\CryptoApi;
use App\Api\Fake\FakeCoin;
use App\Markets\CryptoMarket;

class Coin extends AppModel implements ApiContract
{
	use CryptoApi;
	
    public function getRouteKeyName()
    {
        return 'uid';
    }

    public function market()
    {
        return new CryptoMarket($this);
    }

    public function scopeFake($query)
    {
        return new FakeCoin($this);
    }

    public function is($uid)
    {
        return $this->uid == $uid;
    }

    public function getIcon($type = 'color')
    {
    	return asset('images/crypto/icons/'.$type.'/'.$this->short.'.svg');
    }

    public function scopeName($query, $name)
    {
        return $query->where('uid', $name)->first();
    }

    public function valueIn($amount, $currency)
    {
        $currency = strtoupper($currency);

        return $this->market()->get('current_price')->multiply($amount)
                                   ->convert(currency($currency), Fiat::currency($currency)->rate);
    }
}
