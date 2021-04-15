<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Exchange;

class GetExchangesData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchanges:fresh {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get latest data from top exchanges';

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
        $count = $this->argument('count');

        if ($this->confirm('This will delete all the exchanges and get fresh new data for the top '.$count.'. Are you sure?')) {
            Exchange::getData($count);
            
            return $this->info('All set!');
        }
    }
}
