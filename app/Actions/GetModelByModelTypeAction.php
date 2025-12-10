<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions;

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
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
    public function execute(string $model_type, ?string $model_id): Model
    {
        $model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);
        Assert::isInstanceOf($model = app($model_class), Model::class);
        if ($model_id !== null) {
            $model = $model->find($model_id);
        }

        if ($model === null) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
    public function execute(string $model_type, null|string $model_id): Model
    public function execute(string $model_type, null|string $model_id): Model
    public function execute(string $model_type, ?string $model_id): Model
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
    public function execute(string $model_type, null|string $model_id): Model
=======
    public function execute(string $model_type, ?string $model_id): Model
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        $model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);
        Assert::isInstanceOf($model = app($model_class), Model::class);
        if (null !== $model_id) {
            $model = $model->find($model_id);
        }

        if (null === $model) {
<<<<<<< HEAD
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (null === $model) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        }

        return $model;
    }
}
