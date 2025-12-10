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
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');

=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');
>>>>>>> 2f3197ab (.)
        /*
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    }
}
