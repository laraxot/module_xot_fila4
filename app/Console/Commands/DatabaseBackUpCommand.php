<?php

declare(strict_types=1);

/**
 * @see https://github.com/paulvl/backup/blob/master/src/Console/Commands/MysqlDump.php
 */

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Webmozart\Assert\Assert;

use function Safe\exec;

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop

use function Safe\exec;

use Webmozart\Assert\Assert;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;

use function Safe\exec;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
     */
=======
     *
     * @return void
     */
<<<<<<< HEAD
    
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> origin/develop
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        $filename = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        $backup_path = storage_path('app/backup/' . $filename);
>>>>>>> 5a14301c (.)
        Assert::string(
            $backup_path = Str::replace(['/', '\\'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $backup_path),
            'wip',
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        Assert::string($backup_path = Str::replace(['/', '\\'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $backup_path), 'wip');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $filename = 'backup-'.Carbon::now()->format('Y-m-d').'.gz';
        $backup_path = storage_path('app/backup/'.$filename);
        Assert::string($backup_path = Str::replace(['/', '\\'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $backup_path), 'wip');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        Assert::string($user = config('database.connections.mysql.username'));
        Assert::string($password = config('database.connections.mysql.password'));
        Assert::string($host = config('database.connections.mysql.host'));
        Assert::string($database = config('database.connections.mysql.database'));
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $command =
<<<<<<< HEAD
            'mysqldump --user='.
            $user.
            ' --password='.
            $password.
            ' --host='.
            $host.
            ' '.
            $database.
            '  | gzip > '.
=======
            'mysqldump --user=' .
            $user .
            ' --password=' .
            $password .
            ' --host=' .
            $host .
            ' ' .
            $database .
            '  | gzip > ' .
>>>>>>> 5a14301c (.)
            $backup_path;
<<<<<<< HEAD
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

        $returnVar = null;
        $output = null;
        // echo $command;
        exec($command, $output, $returnVar);
    }
}
