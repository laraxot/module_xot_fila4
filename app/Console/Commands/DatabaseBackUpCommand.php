<?php

declare(strict_types=1);

/**
 * @see https://github.com/paulvl/backup/blob/master/src/Console/Commands/MysqlDump.php
 */

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use function Safe\exec;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)

use function Safe\exec;

use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
use Webmozart\Assert\Assert;

use function Safe\exec;

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
class DatabaseBackUpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dump your Mysql database to a file';

    /**
     * Create a new command instance.
     */
     *
     * @return void
     */
    
<<<<<<< HEAD
    
     */
     *
     * @return void
     */
    
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
    
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    
    
    
<<<<<<< HEAD
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
<<<<<<< HEAD
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
        Assert::string(
            $backup_path = Str::replace(['/', '\\'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $backup_path),
            'wip',
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        Assert::string($backup_path = Str::replace(['/', '\\'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $backup_path), 'wip');
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        Assert::string($backup_path = Str::replace(['/', '\\'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $backup_path), 'wip');
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        Assert::string($backup_path = Str::replace(['/', '\\'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $backup_path), 'wip');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        Assert::string($user = config('database.connections.mysql.username'));
        Assert::string($password = config('database.connections.mysql.password'));
        Assert::string($host = config('database.connections.mysql.host'));
        Assert::string($database = config('database.connections.mysql.database'));
        $command =
        $command =
            'mysqldump --user='.
            $user.
            ' --password='.
            $password.
            ' --host='.
            $host.
            ' '.
            $database.
            '  | gzip > '.
            'mysqldump --user=' .
            $user .
            ' --password=' .
            $password .
            ' --host=' .
            $host .
            ' ' .
            $database .
            '  | gzip > ' .
            $backup_path;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $backup_path;
        $command = 'mysqldump --user='.$user.' --password='.$password.' --host='.$host.' '.$database.'  | gzip > '.$backup_path;
=======
=======
        $command = 'mysqldump --user='.$user.' --password='.$password.' --host='.$host.' '.$database.'  | gzip > '.$backup_path;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
        $command = 'mysqldump --user='.$user.' --password='.$password.' --host='.$host.' '.$database.'  | gzip > '.$backup_path;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
        $command = 'mysqldump --user='.$user.' --password='.$password.' --host='.$host.' '.$database.'  | gzip > '.$backup_path;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $command = 'mysqldump --user='.$user.' --password='.$password.' --host='.$host.' '.$database.'  | gzip > '.$backup_path;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

        $returnVar = null;
        $output = null;
        // echo $command;
        exec($command, $output, $returnVar);
    }
}
