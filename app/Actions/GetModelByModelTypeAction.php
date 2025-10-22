<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Exception;
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
    public function execute(string $model_type, ?string $model_id): Model
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $model_type, null|string $model_id): Model
=======
    public function execute(string $model_type, ?string $model_id): Model
>>>>>>> f1d4085 (.)
=======
    public function execute(string $model_type, null|string $model_id): Model
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        $model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);
        Assert::isInstanceOf($model = app($model_class), Model::class);
        if ($model_id !== null) {
            $model = $model->find($model_id);
        }

<<<<<<< HEAD
        if ($model === null) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (null === $model) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        }

        return $model;
    }
}
