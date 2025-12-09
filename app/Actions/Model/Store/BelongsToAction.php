<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class BelongsToAction
{
    use QueueableAction;

<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsTo::class);

        $related = $relationDTO->rows->create($relationDTO->data);

        $relationDTO->rows->associate($related);

        // $rows = $relation->rows;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
        // dd([$relation->name]);
>>>>>>> 5a14301c (.)
=======
        // dd([$relation->name]);
>>>>>>> 5a14301c (.)
=======
        // dd([$relation->name]);
>>>>>>> 5a14301c (.)
=======
        // dd([$relation->name]);
>>>>>>> 5a14301c (.)
        /*
         * if (null == $row->{$relation->name}) {
         * $row->{$relation->name}()->create($relation->data);
         *
         * return;
         * }
         */
        /*
         * dddx([
         * 'message' => 'wip',
         * 'row' => $row,
         * 'relation' => $relation,
         * 'relation_rows' => $relation->rows->exists(),
         * 't' => $row->{$relation->name},
         * 't1'=>$rows,
         * ]);
         */
=======

        // dd([$relation->name]);
        /*
        if (null == $row->{$relation->name}) {
            $row->{$relation->name}()->create($relation->data);

            return;
        }
        */
        /*
        dddx([
            'message' => 'wip',
            'row' => $row,
            'relation' => $relation,
            'relation_rows' => $relation->rows->exists(),
            't' => $row->{$relation->name},
            't1'=>$rows,
        ]);
        */
>>>>>>> f1d4085 (.)
    }
}
