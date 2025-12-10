<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

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
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Exception;
use Illuminate\Http\Response;
use Override;
use Override;
use Exception;
use Override;
use Exception;
use Illuminate\Http\Response;
use Override;
use Exception;
use Illuminate\Http\Response;
use Override;
use Exception;
use Illuminate\Http\Response;
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Exception;
use Illuminate\Http\Response;
use Override;
use Exception;
use Illuminate\Http\Response;
use Override;
use Exception;
use Illuminate\Http\Response;

class JsonEncodeException extends ApplicationException
{
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
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
        $res = trans('exception.json_not_encoded.help');
        if (!\is_string($res)) {
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    public function help(): string
    {
        $res = trans('exception.json_not_encoded.help');
        if (! \is_string($res)) {
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> 2f3197ab (.)
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
    #[Override]
    public function help(): string
    {
        $res = trans('exception.json_not_encoded.help');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 218dfed3 (.)
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
    public function help(): string
    {
        $res = trans('exception.json_not_encoded.help');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
    public function help(): string
    {
        $res = trans('exception.json_not_encoded.help');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
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
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
        $res = trans('exception.json_not_encoded.error');
        if (!\is_string($res)) {
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    public function error(): string
    {
        $res = trans('exception.json_not_encoded.error');
        if (! \is_string($res)) {
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> 2f3197ab (.)
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
    #[Override]
    public function error(): string
    {
        $res = trans('exception.json_not_encoded.error');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 218dfed3 (.)
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
    public function error(): string
    {
        $res = trans('exception.json_not_encoded.error');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
    public function error(): string
    {
        $res = trans('exception.json_not_encoded.error');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! \is_string($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!\is_string($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
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
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        }

        return $res;
    }
}
