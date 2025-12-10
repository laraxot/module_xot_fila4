<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
use Doctrine\DBAL\Schema\Index;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Doctrine\DBAL\Schema\Index;
use Spatie\QueueableAction\QueueableAction;
=======
>>>>>>> 551c768c4 (.)

class GetTableIndexesByModelClassAction
{
    use QueueableAction;

    /**
     * @return array<Index>
     */
    public function execute(string $modelClass): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        Assert::isInstanceOf($model = app($modelClass), Model::class);
=======
<<<<<<< HEAD
        Assert::isInstanceOf($model = app($modelClass), Model::class);
=======
        \Webmozart\Assert\Assert::isInstanceOf($model = app($modelClass), \Illuminate\Database\Eloquent\Model::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        Assert::isInstanceOf($model = app($modelClass), Model::class);
>>>>>>> 091f883c (.)
        $table = $model->getTable();
<<<<<<< HEAD
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
=======
        $formManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $formManager->listTableIndexes($table);
>>>>>>> 551c768c4 (.)
    }
}
