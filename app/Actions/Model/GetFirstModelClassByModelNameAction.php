<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetFirstModelClassByModelNameAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $modelName): string
    {
        /** @var array<string, class-string> $models */
        $models = app(GetAllModelsAction::class)->execute();
        Assert::keyExists(
            $models,
            $modelName,
            '['.__LINE__.']['.class_basename($this).']',
        );

        $modelClass = $models[$modelName];
        Assert::string(
            $modelClass,
            '['.__LINE__.']['.class_basename($this).']',
        $models = app(GetAllModelsAction::class)->execute();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        Assert::string(
            $modelClass = collect($models)->get($modelName),
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($modelClass = collect($models)->get($modelName), '['.__LINE__.']['.class_basename($this).']');
=======
=======
        Assert::string($modelClass = collect($models)->get($modelName), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
        Assert::string($modelClass = collect($models)->get($modelName), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
        Assert::string($modelClass = collect($models)->get($modelName), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($modelClass = collect($models)->get($modelName), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

        return $modelClass;
    }
}
