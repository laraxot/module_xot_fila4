<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Doctrine\DBAL\Schema\AbstractSchemaManager;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model as EloquentModel;
use RuntimeException;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model as EloquentModel;
use RuntimeException;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Database\Eloquent\Model as EloquentModel;
>>>>>>> f1d4085 (.)
=======
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetSchemaManagerByModelClassAction
{
    use QueueableAction;

    /**
     * Ottiene lo schema manager Doctrine per una classe di modello Eloquent.
     *
<<<<<<< HEAD
     * @param  string  $modelClass  La classe del modello
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $modelClass  La classe del modello
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $modelClass La classe del modello
=======
     * @param  string  $modelClass  La classe del modello
>>>>>>> f1d4085 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return $connection->getDoctrineSchemaManager();
=======
>>>>>>> d2b0a27 (.)
            $schemaManager = $connection->getDoctrineSchemaManager();
            Assert::isInstanceOf($schemaManager, AbstractSchemaManager::class);

            return $schemaManager;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
            return $connection->getDoctrineSchemaManager();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            return $connection->getDoctrineSchemaManager();
>>>>>>> 300ef70 (.)
        }

        // Se in futuro il metodo getDoctrineConnection diventa disponibile, possiamo usare questo
        throw new RuntimeException('Non è possibile ottenere lo schema manager Doctrine per questo modello.');
    }
}
