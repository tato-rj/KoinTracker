<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Money implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return money($value);
    }

    public function set($model, $key, $value, $attributes)
    {
        return $value ? money($value)->getAmount() : null;
    }
}