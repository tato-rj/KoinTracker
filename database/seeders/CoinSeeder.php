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
            // ['uid' => 'binancecoin', 'short' => 'bnb', 'name' => 'Binance Coin'],
			['uid' => 'ripple', 'short' => 'xrp', 'name' => 'Ripple'],
			['uid' => 'cardano', 'short' => 'ada', 'name' => 'Cardano'],
            // ['uid' => 'polkadot', 'short' => 'dot', 'name' => 'Polkadot'],
            // ['uid' => 'uniswap', 'short' => 'uni', 'name' => 'Uniswap'],
			['uid' => 'bitcoin-cash', 'short' => 'bch', 'name' => 'Bitcoin Cash'],
			['uid' => 'stellar', 'short' => 'xlm', 'name' => 'Stellar Lumen'],
			['uid' => 'dogecoin', 'short' => 'doge', 'name' => 'Dogecoin'],
			['uid' => 'decentraland', 'short' => 'mana', 'name' => 'Decentraland'],
            // ['uid' => 'chainlink', 'short' => 'link', 'name' => 'Chainlink'],
    	];

    	foreach($coins as $coin) {
	        Coin::create($coin);	
    	}
    }
}
