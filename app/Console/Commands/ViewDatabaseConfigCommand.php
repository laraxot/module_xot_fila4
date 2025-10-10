<?php

declare(strict_types=1);

/**
 * @see ---
 */

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;

class ViewDatabaseConfigCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:view-db-config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = ' esplode';

    /**
     * Create a new command instance.
     *
     * @return void
     */
<<<<<<< HEAD
    
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

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Assert::isArray($connections = config('database.connections'));
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $database = Arr::map($connections, function (array $item) {
            $item['password'] = '********';

            return $item;

            // return Arr::except($item, ['password']);
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $database = Arr::map(
            $connections,
            function (array $item) {
                $item['password'] = '********';

                return $item;
                // return Arr::except($item, ['password']);
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $database = Arr::map($connections, function (array $item) {
            $item['password'] = '********';

            return $item;

            // return Arr::except($item, ['password']);
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        dddx($database);
    }
}
