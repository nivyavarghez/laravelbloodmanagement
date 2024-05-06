<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cookie;

class ClearCookies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cookies:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all cookies';

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
        // Delete all cookies
        Cookie::queue(Cookie::forget('cookie_name1'));
        Cookie::queue(Cookie::forget('cookie_name2'));
        // Repeat this for each cookie you want to delete

        $this->info('Cookies cleared successfully.');
    }
}
