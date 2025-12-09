<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Arr;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class MorphToManyAction
{
    use QueueableAction;

    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, MorphToMany::class);

        $data = $relationDTO->data;
        if (\in_array('to', array_keys($data), false) || \in_array('from', array_keys($data), false)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! isset($data['to'])) {
=======
            if (!isset($data['to'])) {
>>>>>>> 5a14301c (.)
=======
            if (!isset($data['to'])) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!isset($data['to'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!isset($data['to'])) {
=======
            if (! isset($data['to'])) {
>>>>>>> a12f125f4a (.)
=======
            if (!isset($data['to'])) {
>>>>>>> b93ef594b4 (.)
=======
            if (! isset($data['to'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
            if (!isset($data['to'])) {
>>>>>>> ca9324a4 (.)
=======
            if (!isset($data['to'])) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            if (!isset($data['to'])) {
=======
            if (! isset($data['to'])) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (!isset($data['to'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                $data['to'] = [];
            }

            $data = $data['to'];
        }
        Assert::isArray($data);
        // dddx(['row' => $row, 'relation' => $relation, 't1' => Arr::isAssoc($data)]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! Arr::isAssoc($data)) {
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 5a14301c (.)
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!Arr::isAssoc($data)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!Arr::isAssoc($data)) {
=======
        if (! Arr::isAssoc($data)) {
>>>>>>> a12f125f4a (.)
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! Arr::isAssoc($data)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> ca9324a4 (.)
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!Arr::isAssoc($data)) {
=======
        if (! Arr::isAssoc($data)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
            $relationDTO->rows->sync($data);

            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        dddx([
            'message' => 'wip',
            'row' => $model,
            'relation' => $relationDTO,
            'relation_rows' => $relationDTO->rows->exists(),
            't' => $model->{$relationDTO->name},
        ]);

        dddx('wip');

        /*
         * foreach ($data as $k => $v) {
         * if (\is_array($v)) {
         * if (! isset($v['pivot'])) {
         * $v['pivot'] = [];
         * }
         * if (! isset($v['pivot']['user_id']) && isset($model->user_id)) {
         * $v['pivot']['user_id'] = $model->user_id;
         * }
         * if (! isset($v['pivot']['user_id']) && \Auth::check()) {
         * $v['pivot']['user_id'] = \Auth::id();
         * }
         * $model->$name()->syncWithoutDetaching([$k => $v['pivot']]);
         * } else {
         * $res = $model->$name()->syncWithoutDetaching([$v]);
         * }
         * }
         */
<<<<<<< HEAD
=======
        dddx(
            [
                'message' => 'wip',
                'row' => $model,
                'relation' => $relationDTO,
                'relation_rows' => $relationDTO->rows->exists(),
                't' => $model->{$relationDTO->name},
            ]
        );

        dddx('wip');
        /*
        foreach ($data as $k => $v) {
            if (\is_array($v)) {
                if (! isset($v['pivot'])) {
                    $v['pivot'] = [];
                }
                if (! isset($v['pivot']['user_id']) && isset($model->user_id)) {
                    $v['pivot']['user_id'] = $model->user_id;
                }
                if (! isset($v['pivot']['user_id']) && \Auth::check()) {
                    $v['pivot']['user_id'] = \Auth::id();
                }
                $model->$name()->syncWithoutDetaching([$k => $v['pivot']]);
            } else {
                $res = $model->$name()->syncWithoutDetaching([$v]);
            }
        }
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    }
}
