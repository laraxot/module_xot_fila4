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
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
        $models = app(GetAllModelsAction::class)->execute();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::string(
            $modelClass = collect($models)->get($modelName),
            '[' . __LINE__ . '][' . class_basename($this) . ']',
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
        );
<<<<<<< HEAD
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

        return $modelClass;
    }
}
