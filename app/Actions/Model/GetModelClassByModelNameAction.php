<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetModelClassByModelNameAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $modelName): string
    {
        Assert::isArray($morph_map = config('morph_map'));
        $modelClass = collect($morph_map)->get($modelName);
        if (null === $modelClass) {
            return app(GetFirstModelClassByModelNameAction::class)->execute($modelName);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 2f3197ab (.)
        Assert::string($modelClass);
        Assert::string($modelClass);
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass);
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        Assert::string($modelClass);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
        Assert::string($modelClass);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
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
=======
        Assert::string($modelClass);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass);
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
        Assert::string($modelClass);
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass);
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($modelClass);
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass);
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($modelClass);
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
        Assert::string($modelClass);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)

        return $modelClass;
    }
}
