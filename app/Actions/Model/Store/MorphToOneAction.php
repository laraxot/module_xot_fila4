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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> a12f125f4a (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
    {
        // if ($relationDTO === null) {
        //    return;
        // }

        Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);

<<<<<<< HEAD
        if (! isset($relationDTO->data['lang'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (! isset($relationDTO->data['lang'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        if (!isset($relationDTO->data['lang'])) {
=======
        if (! isset($relationDTO->data['lang'])) {
>>>>>>> f1d4085 (.)
=======
        if (!isset($relationDTO->data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
        if (!isset($relationDTO->data['lang'])) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
            $relationDTO->data['lang'] = App::getLocale();
        }

        // if ($rows !== null) {
        $rows->create($relationDTO->data);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

        // }
<<<<<<< HEAD
<<<<<<< HEAD
        //if ($relationDTO === null) {
        //    return;
        //}

        Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);

        if (!isset($relationDTO->data['lang'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! isset($relationDTO->data['lang'])) {
=======
=======
        if (! isset($relationDTO->data['lang'])) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        if (!isset($relationDTO->data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!isset($relationDTO->data['lang'])) {
=======
        if (! isset($relationDTO->data['lang'])) {
>>>>>>> a12f125f4a (.)
=======
        if (!isset($relationDTO->data['lang'])) {
>>>>>>> b93ef594b4 (.)
=======
        if (! isset($relationDTO->data['lang'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            $relationDTO->data['lang'] = App::getLocale();
        }

        //if ($rows !== null) {
        $rows->create($relationDTO->data);

        //}
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        // } else {
        //    $rows->sync($relation->data);
        // }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        //}
=======
=======
>>>>>>> 300ef70 (.)

        // }
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 414a4ffcb (.)
    }
}