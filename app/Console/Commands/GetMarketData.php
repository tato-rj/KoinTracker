<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Coin;
use Illuminate\Support\Facades\Redis;

class GetMarketData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get latest data from entire crypto market';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $start = now();

        try {
            app()->coins->each(function($coin) {
                $coin->market()->update();
            });
        } catch (\Exception $e) {
            bugreport($e);

            return $this->info($e->getMessage());         
        }

        \Cache::forget('market_last_updated');
        \Cache::put('market_last_updated', now());

        $diff = now()->diffInMinutes($start) >= 1 ? 
                now()->diffInMinutes($start) .' in minutes' : 
                now()->diffInSeconds($start) . ' in seconds';

        $calls = app()->coins->count() * 7;

        return $this->info('Market data has been updated! We called the api ' . $calls . ' times and it took ' . $diff);
    }
}
