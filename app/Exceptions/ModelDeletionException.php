<?php

/**
 * @see https://dev.to/jackmiras/laravel-delete-actions-simplified-4h8b
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Override;
=======
use Override;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)

class ModelDeletionException extends ApplicationException
{
    private readonly string $model;

    public function __construct(
        private readonly int $id,
        string $model,
    ) {
        $this->model = Str::afterLast($model, '\\');
    }

    #[Override]
    public function status(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }

    #[Override]
    public function help(): string
    {
        $res = trans('exception.model_not_deleted.help');
<<<<<<< HEAD
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
        }

        return $res;
    }

    #[Override]
    public function error(): string
    {
        $res = trans('exception.model_not_deleted.error', [
            'id' => $this->id,
            'model' => $this->model,
        ]);
<<<<<<< HEAD
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
        }

        return $res;
    }
}
