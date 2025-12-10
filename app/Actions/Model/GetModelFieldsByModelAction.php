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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
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
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 358ba79a7 (.)
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> f8f76a284 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
<<<<<<< HEAD
<<<<<<< HEAD
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
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
        return $model->getConnection()
            ->getSchemaBuilder()
            ->getColumnListing($model->getTable());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
>>>>>>> 5cb992cc6 (.)
    }
}
