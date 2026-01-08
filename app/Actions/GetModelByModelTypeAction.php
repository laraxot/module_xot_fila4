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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
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
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function execute(string $model_type, ?string $model_id): Model
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
<<<<<<< HEAD
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
=======
    public function execute(string $model_type, null|string $model_id): Model
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
    {
        $model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);
        Assert::stringNotEmpty($model_class);
        Assert::classExists($model_class);
        Assert::isAOf($model_class, Model::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var class-string<Model> $model_class */
        $model = $model_id !== null
            ? $model_class::query()->find($model_id)
            : new $model_class;

        if (! ($model instanceof Model)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
        if ($model === null) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
    public function execute(string $model_type, null|string $model_id): Model
    {
        $model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);
        Assert::isInstanceOf($model = app($model_class), Model::class);
        if (null !== $model_id) {
            $model = $model->find($model_id);
        }

        if (null === $model) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
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
<<<<<<< HEAD
=======
        if (null === $model) {
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
        if ($model === null) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (null === $model) {
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
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
=======
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        }

        return $model;
    }
}
