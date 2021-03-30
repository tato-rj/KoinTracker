<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coin;

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$coins = [
			['uid' => 'bitcoin', 'short' => 'btc', 'name' => 'Bitcoin'],
			['uid' => 'ethereum', 'short' => 'eth', 'name' => 'Ethereum'],
			['uid' => 'ripple', 'short' => 'xrp', 'name' => 'Ripple'],
			['uid' => 'cardano', 'short' => 'ada', 'name' => 'Cardano'],
			['uid' => 'bitcoin-cash', 'short' => 'bch', 'name' => 'Bitcoin Cash'],
			['uid' => 'stellar', 'short' => 'xlm', 'name' => 'Stellar Lumen'],
			['uid' => 'dogecoin', 'short' => 'doge', 'name' => 'Dogecoin'],
			['uid' => 'decentraland', 'short' => 'mana', 'name' => 'Decentraland'],
    	];

    	foreach($coins as $coin) {
	        Coin::create($coin);	
    	}
    }
}
