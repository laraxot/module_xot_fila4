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
            if (! isset($data['to'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (! isset($data['to'])) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            if (! isset($data['to'])) {
            if (! isset($data['to'])) {
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
            if (!isset($data['to'])) {
>>>>>>> 399f46d3 (.)
=======
            if (!isset($data['to'])) {
>>>>>>> 17684f52 (.)
=======
            if (!isset($data['to'])) {
>>>>>>> 399f46d3 (.)
=======
            if (!isset($data['to'])) {
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
            if (! isset($data['to'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            if (! isset($data['to'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            if (!isset($data['to'])) {
=======
            if (! isset($data['to'])) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
<<<<<<< HEAD
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
=======
>>>>>>> ca9324a4 (.)
=======
            if (!isset($data['to'])) {
=======
            if (! isset($data['to'])) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            if (!isset($data['to'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (!isset($data['to'])) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
            if (!isset($data['to'])) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
            if (!isset($data['to'])) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            if (!isset($data['to'])) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            if (! isset($data['to'])) {
>>>>>>> 53d6a6ba (.)
=======
=======
            if (!isset($data['to'])) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            if (! isset($data['to'])) {
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                $data['to'] = [];
            }

            $data = $data['to'];
        }
        Assert::isArray($data);
        // dddx(['row' => $row, 'relation' => $relation, 't1' => Arr::isAssoc($data)]);

<<<<<<< HEAD
        if (! Arr::isAssoc($data)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        if (! Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
        if (!Arr::isAssoc($data)) {
>>>>>>> 399f46d3 (.)
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 17684f52 (.)
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 399f46d3 (.)
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        if (! Arr::isAssoc($data)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! Arr::isAssoc($data)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        if (!Arr::isAssoc($data)) {
=======
        if (! Arr::isAssoc($data)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
<<<<<<< HEAD
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (! Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
        if (!Arr::isAssoc($data)) {
=======
>>>>>>> ca9324a4 (.)
=======
        if (!Arr::isAssoc($data)) {
=======
        if (! Arr::isAssoc($data)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! Arr::isAssoc($data)) {
>>>>>>> 53d6a6ba (.)
=======
=======
        if (!Arr::isAssoc($data)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        if (! Arr::isAssoc($data)) {
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
            $relationDTO->rows->sync($data);

            return;
        }

<<<<<<< HEAD
=======
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
>>>>>>> 38b70c7ba (.)
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
        dddx(
            [
                'message' => 'wip',
                'row' => $model,
                'relation' => $relationDTO,
                'relation_rows' => $relationDTO->rows->exists(),
                't' => $model->{$relationDTO->name},
            ]
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        dddx('wip');
<<<<<<< HEAD

=======
>>>>>>> 2f3197ab (.)
        /*
=======
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

        dddx('wip');

        /*
<<<<<<< HEAD
=======

        dddx('wip');
        /*
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======

        dddx('wip');
        /*
>>>>>>> 7468a7d2 (.)
=======

        dddx('wip');
        /*
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
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
>>>>>>> 38b70c7ba (.)
    }
}
