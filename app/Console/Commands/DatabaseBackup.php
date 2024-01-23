<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class DatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup   ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automating Daily Backups';

    /**
     * Execute the console command.
     */
    public function handle()
    {
            if (! Storage::exists('backup')) {
                Storage::makeDirectory('backup');
            }
     
           // $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";
        
            // $command = "mysqldump --user=root --password=('') "
            //         . " --host='127.0.0.1' ,'kider-admin'"  
            //         . "  | gzip > " . storage_path() . "/app/backup/" . $filename;

            $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";

            $command = "mysqldump --user=root --host=127.0.0.1 kider-admin"
                . " | gzip > " . storage_path() . "/app/backup/" . $filename;
    
     
            $returnVar = NULL;
            $output  = NULL;
     
            exec($command, $output, $returnVar);
    
    }
}
