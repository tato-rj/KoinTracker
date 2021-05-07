<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Fiat;

class GetFiatsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:fiats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get latest data from major fiat currencies';

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
        Fiat::getData();
          
        return $this->info('All set!');
    }
}
