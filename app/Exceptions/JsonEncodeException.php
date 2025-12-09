<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
use Exception;
use Illuminate\Http\Response;
use Override;
=======
use Override;
use Exception;
use Illuminate\Http\Response;
>>>>>>> 5a14301c (.)

class JsonEncodeException extends ApplicationException
{
    #[Override]
    public function status(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }

    #[Override]
    public function help(): string
    {
        $res = trans('exception.json_not_encoded.help');
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
        $res = trans('exception.json_not_encoded.error');
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
