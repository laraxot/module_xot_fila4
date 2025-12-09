<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Exception;
use Illuminate\Http\Response;
use Override;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Override;
use Exception;
use Illuminate\Http\Response;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function help(): string
    {
        $res = trans('exception.json_not_encoded.help');
        if (! \is_string($res)) {
<<<<<<< HEAD
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function help(): string
    {
        $res = trans('exception.json_not_encoded.help');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function error(): string
    {
        $res = trans('exception.json_not_encoded.error');
        if (! \is_string($res)) {
<<<<<<< HEAD
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function error(): string
    {
        $res = trans('exception.json_not_encoded.error');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
        }

        return $res;
    }
}
