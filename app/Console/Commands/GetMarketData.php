<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Coin;

class GetMarketData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:fresh';

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
            Coin::all()->each(function($coin) {
                $data = $coin->api()->market();

                $coin->update(['current_price' => $data ? fiat($data['market_data']['current_price'][config('app.currency')], true) : $coin->current_price]);
                $coin->update(['latest_market' => $data ?? $coin->latest_market]);
                $coin->update(['latest_1h_range' => $coin->api()->range(now()->subHour()) ?? $coin->latest_1h_range]);
                $coin->update(['latest_24h_range' => $coin->api()->range(now()->subDay()) ?? $coin->latest_24h_range]);
                $coin->update(['latest_7d_range' => $coin->api()->range(now()->subWeek()) ?? $coin->latest_7d_range]);
                $coin->update(['latest_30d_range' => $coin->api()->range(now()->subMonth()) ?? $coin->latest_30d_range]);
                $coin->update(['latest_1y_range' => $coin->api()->range(now()->subYear()) ?? $coin->latest_1y_range]);
                $coin->update(['latest_all_range' => $coin->api()->range() ?? $coin->latest_all_range]);
            });
        } catch (\Exception $e) {
            return $this->info($e->getMessage());         
        }

        \Cache::forget('market_last_updated');
        \Cache::put('market_last_updated', now());

        $diff = now()->diffInMinutes($start) >= 1 ? 
                now()->diffInMinutes($start) .' in minutes' : 
                now()->diffInSeconds($start) . ' in seconds';

        $calls = Coin::count() * 7;

        return $this->info('Market data has been updated! We called the api ' . $calls . ' times and it took ' . $diff);
    }
}
