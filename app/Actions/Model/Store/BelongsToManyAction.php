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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
>>>>>>> 88ea7103 (.)
=======
            $status = 'collegati [' . implode(', ', $to) . '] ';
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 2f3197ab (.)
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ce6fc085 (.)
    public function execute(Model $model, RelationDTO $relationDTO): void
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
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 2f3197ab (.)
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 218dfed3 (.)
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
            Session::flash('status', $status);

            return;
        }

        $rows->sync($relationDTO->data);
    }
}
