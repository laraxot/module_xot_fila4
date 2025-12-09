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
<<<<<<< HEAD
        Event::listen(QueryExecuted::class, function (QueryExecuted $query): void {
=======
        Event::listen(QueryExecuted::class, function (QueryExecuted $query) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
            $log->debug('query : ' . $sql);
            $log->debug('time ' . $time);
            $log->debug('connection ' . $connection);
            $log->debug('bindings ' . print_r($query->bindings, true));
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
            $log->debug('query : ' . $sql);
            $log->debug('time ' . $time);
            $log->debug('connection ' . $connection);
            $log->debug('bindings ' . print_r($query->bindings, true));
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
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
            $log->debug('query : '.$sql);
            $log->debug('time '.$time);
            $log->debug('connection '.$connection);
            $log->debug('bindings '.print_r($query->bindings, true));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
        });
    }
}
