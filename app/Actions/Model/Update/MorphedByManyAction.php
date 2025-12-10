<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;

class MorphedByManyAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
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
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
    public function execute(Model $_model, RelationDTO $_relationDTO): void
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 358ba79a7 (.)
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
        /*
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
        /*
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        /*
=======
        /*
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
        /*
>>>>>>> 7468a7d2 (.)
=======
        /*
>>>>>>> 5cf46378 (.)
=======
        /*
>>>>>>> dbce41cec (.)
=======
        /*
>>>>>>> origin/develop
>>>>>>> 358ba79a7 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 358ba79a7 (.)
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
    }
}
