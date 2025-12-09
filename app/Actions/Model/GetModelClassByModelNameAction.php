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
<<<<<<< HEAD
<<<<<<< HEAD
        if ($modelClass === null) {
            return app(GetFirstModelClassByModelNameAction::class)->execute($modelName);
        }
        Assert::string($modelClass, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
>>>>>>> 5a14301c (.)
        if (null === $modelClass) {
            return app(GetFirstModelClassByModelNameAction::class)->execute($modelName);
        }
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($modelClass);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($modelClass, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($modelClass);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)

        return $modelClass;
    }
}
