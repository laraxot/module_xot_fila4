<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetModelByModelTypeAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
<<<<<<< HEAD
    public function execute(string $model_type, null|string $model_id): Model
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $model_type, null|string $model_id): Model
=======
    public function execute(string $model_type, ?string $model_id): Model
>>>>>>> a12f125f4a (.)
=======
    public function execute(string $model_type, null|string $model_id): Model
>>>>>>> b93ef594b4 (.)
=======
    public function execute(string $model_type, ?string $model_id): Model
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        $model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);
        Assert::isInstanceOf($model = app($model_class), Model::class);
        if (null !== $model_id) {
            $model = $model->find($model_id);
        }

        if (null === $model) {
<<<<<<< HEAD
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return $model;
    }
}
