<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)

class MorphedByManyAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function execute(Model $_model, RelationDTO $_relationDTO): void
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');

        /*
         * foreach ($data as $k => $v) {
         * if (! \is_array($v)) {
         * $v = [];
         * }
         * if (! isset($v['pivot'])) {
         * $v['pivot'] = [];
         * }
         * // Call to undefined method Illuminate\Database\Eloquent\Relations\MorphMany::syncWithoutDetaching()
         * // $res = $model->$name()->syncWithoutDetaching([$k => $v['pivot']]);
         * $model->$name()->touch();
         * }
         */
<<<<<<< HEAD
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
    public function execute(Model $_model, RelationDTO $_relationDTO): void
>>>>>>> b93ef594b4 (.)
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');

        /*
<<<<<<< HEAD
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');
        /*
>>>>>>> origin/develop
        foreach ($data as $k => $v) {
            if (! \is_array($v)) {
                $v = [];
            }
            if (! isset($v['pivot'])) {
                $v['pivot'] = [];
            }
            // Call to undefined method Illuminate\Database\Eloquent\Relations\MorphMany::syncWithoutDetaching()
            // $res = $model->$name()->syncWithoutDetaching([$k => $v['pivot']]);
            $model->$name()->touch();
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
         * foreach ($data as $k => $v) {
         * if (! \is_array($v)) {
         * $v = [];
         * }
         * if (! isset($v['pivot'])) {
         * $v['pivot'] = [];
         * }
         * // Call to undefined method Illuminate\Database\Eloquent\Relations\MorphMany::syncWithoutDetaching()
         * // $res = $model->$name()->syncWithoutDetaching([$k => $v['pivot']]);
         * $model->$name()->touch();
         * }
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
