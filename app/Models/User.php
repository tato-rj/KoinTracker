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

    public function getPortfolioAttribute()
    {
        return $this->portfolios->first();
    }

    public function transactions()
    {
        return $this->hasManyThrough(Transaction::class, Portfolio::class);
    }

    public function hasBadge(Badge $badge)
    {
        $policy = $badge->policy;

        if (method_exists($this, $policy))
            return $this->$policy();
        
        return false;
    }
}
