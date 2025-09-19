<?php

/**
 * @see https://dev.to/jackmiras/laravel-delete-actions-simplified-4h8b
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ModelDeletionException extends ApplicationException
{
    private readonly string $model;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function __construct(
        private readonly int $id,
        string $model,
    ) {
        $this->model = Str::afterLast($model, '\\');
    }

    #[Override]
<<<<<<< HEAD
=======
    public function __construct(private readonly int $id, string $model)
    {
        $this->model = Str::afterLast($model, '\\');
    }

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    public function status(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    #[Override]
    public function help(): string
    {
        $res = trans('exception.model_not_deleted.help');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
    public function help(): string
    {
        $res = trans('exception.model_not_deleted.help');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        }

        return $res;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    #[Override]
    public function error(): string
    {
        $res = trans('exception.model_not_deleted.error', [
            'id' => $this->id,
            'model' => $this->model,
        ]);
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
    public function error(): string
    {
        $res = trans(
            'exception.model_not_deleted.error',
            [
                'id' => $this->id,
                'model' => $this->model,
            ]
        );
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        }

        return $res;
    }
}
