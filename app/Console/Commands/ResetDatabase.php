<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset the database and make a fresh new call to the api';

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
        if (! local())
            return $this->info('You can only do this on local environment.');

        if ($this->confirm('This will delete the database and start everything from scratch. Are you sure?')) {
            \Artisan::call('migrate:fresh --seed');
            \Artisan::call('market:fresh');

            return $this->info('Ready to go.');
        }
    }
}
