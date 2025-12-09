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
        $formManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $formManager->introspectTable($table);
        // $doctrineTable=$formManager->listTableDetails($table);
=======
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $doctrineTable = $schemaManager->introspectTable($table);
        // $doctrineTable=$schemaManager->listTableDetails($table);
>>>>>>> 5a14301c (.)
        $doctrineTable->dropIndex($indexName);
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
        // ALTER TABLE `roles` DROP INDEX `roles_name_guard_name_unique`;
        // dddx(['res'=>$res,'doctrineTable'=>$doctrineTable,'indexName'=>$indexName]);
    }
}
