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
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 300ef70 (.)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // if ($relationDTO === null) {
        //    return;
        // }

        Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);

<<<<<<< HEAD
        if (! isset($relationDTO->data['lang'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! isset($relationDTO->data['lang'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!isset($relationDTO->data['lang'])) {
=======
        if (! isset($relationDTO->data['lang'])) {
>>>>>>> f1d4085 (.)
=======
        if (!isset($relationDTO->data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (!isset($relationDTO->data['lang'])) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            $relationDTO->data['lang'] = App::getLocale();
        }

        // if ($rows !== null) {
        $rows->create($relationDTO->data);
<<<<<<< HEAD
<<<<<<< HEAD

        // }
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        //if ($relationDTO === null) {
        //    return;
        //}

        Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);

        if (!isset($relationDTO->data['lang'])) {
            $relationDTO->data['lang'] = App::getLocale();
        }

        //if ($rows !== null) {
        $rows->create($relationDTO->data);

        //}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        // } else {
        //    $rows->sync($relation->data);
        // }
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)

        // }
        // } else {
        //    $rows->sync($relation->data);
        // }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}