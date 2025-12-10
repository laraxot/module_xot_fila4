<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

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
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use RuntimeException;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
use RuntimeException;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Illuminate\Database\Eloquent\Model as EloquentModel;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
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
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
     * @param  string  $modelClass  La classe del modello
=======
>>>>>>> 218dfed3 (.)
=======
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
     * @param string $modelClass La classe del modello
>>>>>>> 399f46d3 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> 17684f52 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> 399f46d3 (.)
=======
     * @param string $modelClass La classe del modello
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $modelClass La classe del modello
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
            return $connection->getDoctrineSchemaManager();
=======
>>>>>>> 399f46d3 (.)
=======
            return $connection->getDoctrineSchemaManager();
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return $connection->getDoctrineSchemaManager();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
