<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use RuntimeException;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
<<<<<<< HEAD
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
>>>>>>> 2f3197ab (.)
use RuntimeException;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
use Illuminate\Database\Eloquent\Model as EloquentModel;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetSchemaManagerByModelClassAction
{
    use QueueableAction;

    /**
     * Ottiene lo schema manager Doctrine per una classe di modello Eloquent.
     *
<<<<<<< HEAD
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
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
>>>>>>> 2f3197ab (.)
     * @param  string  $modelClass  La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
<<<<<<< HEAD
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
     * @param  string  $modelClass  La classe del modello
     * @param string $modelClass La classe del modello
     * @param string $modelClass La classe del modello
=======
>>>>>>> ca9324a4 (.)
=======
     * @param string $modelClass La classe del modello
=======
     * @param  string  $modelClass  La classe del modello
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
     * @return AbstractSchemaManager Lo schema manager di Doctrine
     */
    public function execute(string $modelClass): AbstractSchemaManager
    {
        Assert::isInstanceOf($model = app($modelClass), EloquentModel::class);
        $connection = $model->getConnection();
        // In Laravel 9+ il metodo getDoctrineSchemaManager è stato deprecato
        // ma getDoctrineConnection() non esiste, dobbiamo usare getDoctrineSchemaManager direttamente
        if (method_exists($connection, 'getDoctrineSchemaManager')) {
            /** @phpstan-ignore deprecated.method */
<<<<<<< HEAD
            return $connection->getDoctrineSchemaManager();
            $schemaManager = $connection->getDoctrineSchemaManager();

            $schemaManager = $connection->getDoctrineSchemaManager();
            $schemaManager = $connection->getDoctrineSchemaManager();

            $schemaManager = $connection->getDoctrineSchemaManager();
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
>>>>>>> 2f3197ab (.)
            $schemaManager = $connection->getDoctrineSchemaManager();

            Assert::isInstanceOf($schemaManager, AbstractSchemaManager::class);

            return $schemaManager;
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
<<<<<<< HEAD
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            return $connection->getDoctrineSchemaManager();
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            $schemaManager = $connection->getDoctrineSchemaManager();
            Assert::isInstanceOf($schemaManager, AbstractSchemaManager::class, 'Schema manager must be instance of AbstractSchemaManager');

            return $schemaManager;
<<<<<<< HEAD
=======
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
<<<<<<< HEAD
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        }

        // Se in futuro il metodo getDoctrineConnection diventa disponibile, possiamo usare questo
        throw new RuntimeException('Non è possibile ottenere lo schema manager Doctrine per questo modello.');
    }
}
