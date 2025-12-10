<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use RuntimeException;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
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
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
     * @param  string  $modelClass  La classe del modello
=======
>>>>>>> 218dfed3 (.)
     * @param  string  $modelClass  La classe del modello
     * @param  string  $modelClass  La classe del modello
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
     * @param  string  $modelClass  La classe del modello
=======
>>>>>>> a12f125f4a (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> b93ef594b4 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> ca9324a4 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
     * @param string $modelClass La classe del modello
=======
     * @param  string  $modelClass  La classe del modello
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
     * @param string $modelClass La classe del modello
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
     * @param string $modelClass La classe del modello
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
            $schemaManager = $connection->getDoctrineSchemaManager();

            Assert::isInstanceOf($schemaManager, AbstractSchemaManager::class);

            return $schemaManager;
            return $connection->getDoctrineSchemaManager();
            return $connection->getDoctrineSchemaManager();
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            return $connection->getDoctrineSchemaManager();
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            return $connection->getDoctrineSchemaManager();
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
        }

        // Se in futuro il metodo getDoctrineConnection diventa disponibile, possiamo usare questo
        throw new RuntimeException('Non è possibile ottenere lo schema manager Doctrine per questo modello.');
    }
}
