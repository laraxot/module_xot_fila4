<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class MorphToOneAction
{
    use QueueableAction;

<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
<<<<<<< HEAD
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        // if ($relationDTO === null) {
        //    return;
        // }

        Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);

        if (! isset($relationDTO->data['lang'])) {
            $relationDTO->data['lang'] = App::getLocale();
        }

        // if ($rows !== null) {
        $rows->create($relationDTO->data);

        // }
        //if ($relationDTO === null) {
        //    return;
        //}

        Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);

<<<<<<< HEAD
        if (!isset($relationDTO->data['lang'])) {
<<<<<<< HEAD
        if (! isset($relationDTO->data['lang'])) {
=======
=======
        if (! isset($relationDTO->data['lang'])) {
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
            $relationDTO->data['lang'] = App::getLocale();
        }

        //if ($rows !== null) {
        $rows->create($relationDTO->data);
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
        //}
        // } else {
        //    $rows->sync($relation->data);
        // }
<<<<<<< HEAD
        /*
         * dddx([
         * 'message' => 'wip',
         * 'row' => $row,
         * 'relation' => $relation,
         * 'relation_rows' => $relation->rows->exists(),
         * 't' => $row->{$relation->name},
         * ]);
         *
         * dddx('wip');
         */
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)

        /*
        dddx([
            'message' => 'wip',
            'row' => $row,
            'relation' => $relation,
            'relation_rows' => $relation->rows->exists(),
            't' => $row->{$relation->name},
        ]);

        dddx('wip');
        */
<<<<<<< HEAD
        /*
         * dddx([
         * 'message' => 'wip',
         * 'row' => $row,
         * 'relation' => $relation,
         * 'relation_rows' => $relation->rows->exists(),
         * 't' => $row->{$relation->name},
         * ]);
         *
         * dddx('wip');
         */
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    }
}
