<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Session;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class BelongsToManyAction
{
    use QueueableAction;

    public function execute(Model $_model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        /*
         * dddx(['message' => 'wip',
         * 'row' => $row,
         * 'relation' => $relation, ]);
         */
        if (
            \in_array('to', array_keys($relationDTO->data), false) ||
                \in_array('from', array_keys($relationDTO->data), false)
        ) {
            // $this->saveMultiselectTwoSides($row, $relation->name, $relation->data);
            Assert::isArray($to = $relationDTO->data['to'] ?? []);
            $rows->sync($to);
<<<<<<< HEAD
<<<<<<< HEAD
            $status = 'collegati ['.implode(', ', $to).'] ';
=======
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            $status = 'collegati [' . implode(', ', $to) . '] ';
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        /*
         * dddx(['message' => 'wip',
         * 'row' => $row,
         * 'relation' => $relation, ]);
         */
        if (
            \in_array('to', array_keys($relationDTO->data), false) ||
                \in_array('from', array_keys($relationDTO->data), false)
        ) {
            // $this->saveMultiselectTwoSides($row, $relation->name, $relation->data);
            Assert::isArray($to = $relationDTO->data['to'] ?? []);
            $rows->sync($to);
<<<<<<< HEAD
            $status = 'collegati ['.implode(', ', $to).'] ';
>>>>>>> a12f125f4a (.)
=======
            $status = 'collegati [' . implode(', ', $to) . '] ';
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        /*
        dddx(['message' => 'wip',
            'row' => $row,
            'relation' => $relation, ]);
        */
        if (\in_array('to', array_keys($relationDTO->data), false) || \in_array('from', array_keys($relationDTO->data), false)) {
            // $this->saveMultiselectTwoSides($row, $relation->name, $relation->data);
            Assert::isArray($to = $relationDTO->data['to'] ?? []);
            $rows->sync($to);
            $status = 'collegati ['.implode(', ', $to).'] ';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
            Session::flash('status', $status);

            return;
        }

        $rows->sync($relationDTO->data);
    }
}
