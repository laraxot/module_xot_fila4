<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

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
        Assert::isInstanceOf($model = app($modelClass), Model::class);
        $table = $model->getTable();
<<<<<<< HEAD
        $formManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $formManager->listTableIndexes($table);
=======
        $schemaManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $schemaManager->listTableIndexes($table);
>>>>>>> 54cbe5d (.)
    }
}
