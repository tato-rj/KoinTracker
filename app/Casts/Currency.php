<?php

namespace App\Casts;

use  Akaunting\Money\Currency as MoneyCurrency;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Currency implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return new MoneyCurrency($value);
    }

    public function set($model, $key, $value, $attributes)
    {
        return (new MoneyCurrency($value))->getCurrency();
    }
}