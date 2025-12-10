<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetModelClassByModelTypeAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $model_type): string
    {
        $morph_map = config('morph_map');
<<<<<<< HEAD
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
=======
>>>>>>> a67e542f (.)
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> 218dfed3 (.)
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (! is_array($morph_map)) {
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
>>>>>>> ed734516 (.)
=======
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 7131bd09 (.)
=======
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (! is_array($morph_map)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!is_array($morph_map)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
        }

        Assert::string($res = collect($morph_map)->get($model_type));

        return $res;
    }
}
