<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Query;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Spatie\QueueableAction\QueueableAction;

class StartQueryLogAction
{
    use QueueableAction;

    public function execute(): void
    {
<<<<<<< HEAD
        Event::listen(QueryExecuted::class, function (QueryExecuted $query): void {
=======
        Event::listen(QueryExecuted::class, function (QueryExecuted $query) {
>>>>>>> 5a14301c (.)
            $sql = $query->sql;
            $time = $query->time;
            $connection = $query->connection->getName();

            $log = Log::build([
                'driver' => 'daily',
                'path' => storage_path('logs/querylog.log'),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $log->debug('query : '.$sql);
            $log->debug('time '.$time);
            $log->debug('connection '.$connection);
            $log->debug('bindings '.print_r($query->bindings, true));
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
            $log->debug('query : ' . $sql);
            $log->debug('time ' . $time);
            $log->debug('connection ' . $connection);
            $log->debug('bindings ' . print_r($query->bindings, true));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            $log->debug('query : '.$sql);
            $log->debug('time '.$time);
            $log->debug('connection '.$connection);
            $log->debug('bindings '.print_r($query->bindings, true));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        });
    }
}
