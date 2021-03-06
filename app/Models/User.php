<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Traits\BadgePolicy;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, BadgePolicy;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function watchlist()
    {
        return $this->hasMany(Watchlist::class);
    }

    public function getPortfolioAttribute()
    {
        return $this->portfolios->first();
    }

    public function transactions()
    {
        return $this->hasManyThrough(Transaction::class, Portfolio::class);
    }

    public function getCoinsAttribute()
    {
        return $this->transactions()->with('coin')->get()->pluck('coin')->unique();
    }

    public function currency()
    {
        return currency(config('app.currency'));
    }
    
    public function hasBadge(Badge $badge)
    {
        $policy = $badge->policy;

        if (method_exists($this, $policy))
            return $this->$policy();
        
        return false;
    }

    public function owns(Coin $coin)
    {
        return $this->transactions()->where('coin_id', $coin->id)->exists();
    }

    public function transactionsOf(Coin $coin = null)
    {
        return $this->transactions()->where('coin_id', $coin->id)->orderBy('transaction_date', 'desc');
    }
}
