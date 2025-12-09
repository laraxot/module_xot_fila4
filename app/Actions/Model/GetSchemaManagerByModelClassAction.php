<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

<<<<<<< HEAD
<<<<<<< HEAD
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use RuntimeException;
=======
=======
>>>>>>> 399f46d3 (.)
use RuntimeException;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
use RuntimeException;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Database\Eloquent\Model as EloquentModel;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
>>>>>>> b93ef594b4 (.)
=======
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetSchemaManagerByModelClassAction
{
    use QueueableAction;

    /**
     * Ottiene lo schema manager Doctrine per una classe di modello Eloquent.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $modelClass  La classe del modello
=======
     * @param string $modelClass La classe del modello
>>>>>>> 5a14301c (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> 3fbbf1f5 (.)
=======
     * @param string $modelClass La classe del modello
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $modelClass La classe del modello
=======
     * @param  string  $modelClass  La classe del modello
>>>>>>> a12f125f4a (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> b93ef594b4 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
     * @return AbstractSchemaManager Lo schema manager di Doctrine
     */
    public function execute(string $modelClass): AbstractSchemaManager
    {
        Assert::isInstanceOf($model = app($modelClass), EloquentModel::class);
        $connection = $model->getConnection();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // In Laravel 9+ il metodo getDoctrineSchemaManager è stato deprecato
        // ma getDoctrineConnection() non esiste, dobbiamo usare getDoctrineSchemaManager direttamente
        if (method_exists($connection, 'getDoctrineSchemaManager')) {
            /** @phpstan-ignore deprecated.method */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $schemaManager = $connection->getDoctrineSchemaManager();

            Assert::isInstanceOf($schemaManager, AbstractSchemaManager::class);

            return $schemaManager;
=======
            return $connection->getDoctrineSchemaManager();
>>>>>>> 5a14301c (.)
=======
            return $connection->getDoctrineSchemaManager();
>>>>>>> 3fbbf1f5 (.)
=======
            return $connection->getDoctrineSchemaManager();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return $connection->getDoctrineSchemaManager();
=======
            $schemaManager = $connection->getDoctrineSchemaManager();
            Assert::isInstanceOf($schemaManager, AbstractSchemaManager::class, 'Schema manager must be instance of AbstractSchemaManager');

            return $schemaManager;
>>>>>>> a12f125f4a (.)
=======
            return $connection->getDoctrineSchemaManager();
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        }

        // Se in futuro il metodo getDoctrineConnection diventa disponibile, possiamo usare questo
        throw new RuntimeException('Non è possibile ottenere lo schema manager Doctrine per questo modello.');
<<<<<<< HEAD
=======
=======
            return $connection->getDoctrineSchemaManager();
        }

        // Se in futuro il metodo getDoctrineConnection diventa disponibile, possiamo usare questo
        throw new \RuntimeException('Non è possibile ottenere lo schema manager Doctrine per questo modello.');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
