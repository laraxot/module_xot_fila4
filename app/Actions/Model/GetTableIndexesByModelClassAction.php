<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Doctrine\DBAL\Schema\Index;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Doctrine\DBAL\Schema\Index;
use Spatie\QueueableAction\QueueableAction;

class GetTableIndexesByModelClassAction
{
    use QueueableAction;

    /**
     * @return array<Index>
     */
    public function execute(string $modelClass): array
    {
        $table = $model->getTable();
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
    }
}
