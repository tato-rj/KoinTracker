<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Auth\Events\{Registered, Verified};
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Arthur',
            'last_name' => 'Villar',
            'email' => 'arthurvillar@gmail.com',
            'email_verified_at' => now(),
            'currency' => strtoupper(config('app.currency')),
            'password' => \Hash::make('maiden84'),
        ]);

        event(new Registered($user));
        event(new Verified($user));
    }
}
