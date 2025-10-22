<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Override;
>>>>>>> 300ef70 (.)
use Exception;
use Illuminate\Http\Response;
use Override;

class JsonEncodeException extends ApplicationException
{
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
    public function status(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function help(): string
    {
        $res = trans('exception.json_not_encoded.help');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        }

        return $res;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function error(): string
    {
        $res = trans('exception.json_not_encoded.error');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        }

        return $res;
    }
}
