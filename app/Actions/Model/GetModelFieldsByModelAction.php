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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $model->getConnection()
            ->getSchemaBuilder()
            ->getColumnListing($model->getTable());
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
        return $model->getConnection()
            ->getSchemaBuilder()
            ->getColumnListing($model->getTable());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> b93ef594b4 (.)
=======
        return $model->getConnection()
            ->getSchemaBuilder()
            ->getColumnListing($model->getTable());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    }
}
