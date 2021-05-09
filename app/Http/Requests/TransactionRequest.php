<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function authorize()
    {
        return $this->portfolio->user()->is(auth()->user());
    }

    public function rules()
    {
        return [
            'coin_id' => 'sometimes',
            'coin_amount' => 'required|numeric',
            'price_per_coin' => 'required',
            'type' => 'sometimes',
            'transfer_type' => 'sometimes',
            'transaction_date' => 'required',
            'transaction_time' => 'required'
        ];
    }

    public function coins()
    {
        if ($this->isShort())
            return $this->coin_amount * -1;

        return $this->coin_amount;
    }

    public function cost()
    {
        if ($this->typeIs('buy'))
            return $this->buyCost();

        if ($this->typeIs('sell'))
            return $this->sellCost();

        return money(0);
    }

    public function sellCost()
    {
        return money($this->price_per_coin, appCurrencySymbol(), true)
                ->multiply(floatval($this->coin_amount))
                ->subtract($this->getFee())
                ->multiply(-1);
    }

    public function buyCost()
    {
        return money($this->price_per_coin, appCurrencySymbol(), true)
                ->multiply(floatval($this->coin_amount))
                ->add($this->getFee());
    }

    public function isShort()
    {
        if ($this->transaction)
            return $this->transaction->type == 'sell' || $this->transaction->transfer_type == 'out';

        return $this->type == 'sell' || $this->transfer_type == 'out';  
    }

    public function date()
    {
        return carbon($this->transaction_date)->setTimeFromTimeString($this->transaction_time)->toDateTimeString();
    }

    public function typeIs($type)
    {
        if ($this->transaction)
            return $this->transaction->type == $type;

        return $this->type == $type;
    }

    public function getFee()
    {
        $fee = $this->fee ?? 0;

        return money($fee, appCurrencySymbol(), true);
    }
}
