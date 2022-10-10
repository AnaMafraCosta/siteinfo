<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class SetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Minimal Resource Setup for Development';

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

        $this->info("Starting envionment setup...");

        $email = $this->ask('Please inform an email:');

        $this->info("");
        $this->copy_env_file();
        
        $this->info("");
        $this->info('Generating laravel APP_KEY');
        Artisan::call('key:generate');
        
        $this->info("");
        $this->info('Creating sqlite file');
        if ($this->create_sqlite_file()) {
            Artisan::call('migrate');
        }

        $this->info("");
        $this->info("In your console run 'php artisan serve'");
        if ($this->create_user ($email)) {
            $this->info("Use this email: ". $email. 'and this password: 123123123');    
        }

        return 0;
    }

    /**
     * This functinos create dababase.sqlite file.
     * 
     * It assumed that Sqlite is the default database
     * used for tests
     * 
     */
    private function create_sqlite_file () {

        $db_path = database_path("database.sqlite");

        if (!File::exists($db_path)) {
            
            File::put($db_path, "");
            return true;
        }

        return false;

    }

    /**
     * 
     * This function copies .env.example to .env file
     * Note that Sqlite is the database configured to the app
     * 
     */
    private function copy_env_file () {

        $this->info('Copying env file');

        $env = base_path('.env.example');

        if (! File::exists($env)) {
            
            return File::copy($env, base_path('.env'));

        }

        return false;
    }

    private function create_user ($email) {
        
        if (!User::where('email', $email)->exists()) {
            User::factory()->create([
                'email' => $email,
            ]);
            return true;
        } 

        return false;

    }
}
