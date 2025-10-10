<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
        Assert::isInstanceOf($model = app($modelClass), Model::class);
=======
<<<<<<< HEAD
        Assert::isInstanceOf($model = app($modelClass), Model::class);
=======
        \Webmozart\Assert\Assert::isInstanceOf($model = app($modelClass), \Illuminate\Database\Eloquent\Model::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $table = $model->getTable();
        $formManager = app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);

        return $formManager->listTableIndexes($table);
    }
}
