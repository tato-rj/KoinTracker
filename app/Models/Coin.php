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

    public function color($period)
    {
        $green = '#38c172';
        $red = '#e3342f';

        switch ($period) {
          case '1h':
            return $this->pastHourChange > 0 ? $green : $red;
            break;
          case '24h':
            return $this->pastDayChange > 0 ? $green : $red;
            break;
          case '7d':
            return $this->pastWeekChange > 0 ? $green : $red;
            break;
          case '30d':
            return $this->pastMonthChange > 0 ? $green : $red;
            break;
          case '1y':
            return $this->pastYearChange > 0 ? $green : $red;
            break;
          default:
            return '#212529';
        }
    }
}
