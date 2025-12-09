<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

class GetModelFieldsByModelAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(Model $model): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
=======
        return $model->getConnection()
            ->getSchemaBuilder()
            ->getColumnListing($model->getTable());
>>>>>>> f1d4085 (.)
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 300ef70 (.)
    }
}
