<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class DeleteTableIndexByModelClassIndexNameAction
{
    use QueueableAction;

    public function execute(string $modelClass, string $indexName): void
    {
        Assert::isInstanceOf($model = app($modelClass), EloquentModel::class);
        $table = $model->getTable();
<<<<<<< HEAD
<<<<<<< HEAD
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $schemaManager->introspectTable($table);
        // $doctrineTable=$schemaManager->listTableDetails($table);
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $schemaManager->introspectTable($table);
        // $doctrineTable=$schemaManager->listTableDetails($table);
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $schemaManager->introspectTable($table);
        // $doctrineTable=$schemaManager->listTableDetails($table);
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $schemaManager->introspectTable($table);
        // $doctrineTable=$schemaManager->listTableDetails($table);
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $schemaManager->introspectTable($table);
        // $doctrineTable=$schemaManager->listTableDetails($table);
=======
        $formManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $formManager->introspectTable($table);
        // $doctrineTable=$formManager->listTableDetails($table);
>>>>>>> 551c768c4 (.)
=======
        $formManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $formManager->introspectTable($table);
        // $doctrineTable=$formManager->listTableDetails($table);
>>>>>>> 414a4ffcb (.)
        $doctrineTable->dropIndex($indexName);

        // ALTER TABLE `roles` DROP INDEX `roles_name_guard_name_unique`;
        // dddx(['res'=>$res,'doctrineTable'=>$doctrineTable,'indexName'=>$indexName]);
    }
}
