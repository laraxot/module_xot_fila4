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
        Event::listen(QueryExecuted::class, function (QueryExecuted $query): void {
            $sql = $query->sql;
            $time = $query->time;
            $connection = $query->connection->getName();

            $log = Log::build([
                'driver' => 'daily',
                'path' => storage_path('logs/querylog.log'),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
            $log->debug('query : ' . $sql);
            $log->debug('time ' . $time);
            $log->debug('connection ' . $connection);
            $log->debug('bindings ' . print_r($query->bindings, true));
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
            $log->debug('query : '.$sql);
            $log->debug('time '.$time);
            $log->debug('connection '.$connection);
            $log->debug('bindings '.print_r($query->bindings, true));
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        });
    }
}
