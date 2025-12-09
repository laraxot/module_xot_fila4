<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

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
use Doctrine\DBAL\Schema\Index;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
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
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Doctrine\DBAL\Schema\Index;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class GetTableIndexesByModelClassAction
{
    use QueueableAction;

    /**
     * @return array<Index>
     */
    public function execute(string $modelClass): array
    {
        Assert::isInstanceOf($model = app($modelClass), Model::class);
        $table = $model->getTable();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $formManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $formManager->listTableIndexes($table);
=======
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
>>>>>>> 5a14301c (.)
=======
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
>>>>>>> 5a14301c (.)
=======
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
>>>>>>> 5a14301c (.)
    }
}
