<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use Exception;
>>>>>>> 091f883c (.)
=======
use Exception;
>>>>>>> 414a4ffcb (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Class MorphToManyAction.
 *
 * Handles morphToMany relationship updates for models
 */
class MorphToManyAction
{
    use QueueableAction;

    public Collection $res;

    /**
     * Execute the action to update morphToMany relationships.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Model       $row         The model instance to update
     * @param RelationDTO $relationDTO Data transfer object containing relation information
     * @param Model       $row         The model instance to update
     * @param RelationDTO $relationDTO Data transfer object containing relation information
     * @param Model       $row         The model instance to update
     * @param RelationDTO $relationDTO Data transfer object containing relation information
     * @param Model       $row         The model instance to update
     * @param RelationDTO $relationDTO Data transfer object containing relation information
     * @param Model       $row         The model instance to update
     * @param RelationDTO $relationDTO Data transfer object containing relation information
=======
     * @param  Model  $row  The model instance to update
     * @param  RelationDTO  $relationDTO  Data transfer object containing relation information
>>>>>>> 551c768c4 (.)
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws Exception When data is not in correct format or relation is invalid
=======
<<<<<<< HEAD
     * @throws Exception When data is not in correct format or relation is invalid
=======
     * @throws \Exception When data is not in correct format or relation is invalid
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @throws Exception When data is not in correct format or relation is invalid
>>>>>>> 091f883c (.)
=======
     * @param  Model  $row  The model instance to update
     * @param  RelationDTO  $relationDTO  Data transfer object containing relation information
     *
     * @throws Exception When data is not in correct format or relation is invalid
>>>>>>> 414a4ffcb (.)
     */
    public function execute(Model $row, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($relation = $relationDTO->rows, MorphToMany::class);
        $data = $relationDTO->data;
        $name = $relationDTO->name;
        $model = $row;

        if (\in_array('to', array_keys($data), false) || \in_array('from', array_keys($data), false)) {
<<<<<<< HEAD
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
=======
            if (! isset($data['to'])) {
>>>>>>> 414a4ffcb (.)
                $data['to'] = [];
            }
            $data = $data['to'];
        }

<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!\is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        }

        if (!Arr::isAssoc($data)) {
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        if (! \is_array($data)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        }

        if (! Arr::isAssoc($data)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (!\is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        }

        if (!Arr::isAssoc($data)) {
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (! \is_array($data)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        }

        if (! Arr::isAssoc($data)) {
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
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
        if (!\is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        }

        if (!Arr::isAssoc($data)) {
        if (! \is_array($data)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        }

        if (! Arr::isAssoc($data)) {
        if (!\is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        }

        if (!Arr::isAssoc($data)) {
        if (! \is_array($data)) {
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        }

        if (! Arr::isAssoc($data)) {
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
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
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            $relation->sync($data);

            return;
        }

        foreach ($data as $k => $v) {
            if (\is_array($v)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
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
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
                if (! isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                if (! isset($v['pivot'])) {
=======
                if (!isset($v['pivot'])) {
>>>>>>> 5a14301c (.)
=======
                if (!isset($v['pivot'])) {
>>>>>>> 3fbbf1f5 (.)
=======
                if (!isset($v['pivot'])) {
=======
                if (!isset($v['pivot'])) {
>>>>>>> 399f46d3 (.)
=======
                if (!isset($v['pivot'])) {
>>>>>>> 17684f52 (.)
=======
                if (!isset($v['pivot'])) {
>>>>>>> 399f46d3 (.)
=======
                if (!isset($v['pivot'])) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (!isset($v['pivot'])) {
=======
                if (! isset($v['pivot'])) {
>>>>>>> a12f125f4a (.)
=======
                if (!isset($v['pivot'])) {
>>>>>>> b93ef594b4 (.)
=======
                if (! isset($v['pivot'])) {
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                if (!isset($v['pivot'])) {
>>>>>>> ca9324a4 (.)
=======
                if (!isset($v['pivot'])) {
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
                if (! isset($v['pivot'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                if (! isset($v['pivot'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                if (!isset($v['pivot'])) {
=======
                if (! isset($v['pivot'])) {
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
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
<<<<<<< HEAD
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
=======
>>>>>>> ca9324a4 (.)
=======
                if (!isset($v['pivot'])) {
=======
                if (! isset($v['pivot'])) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                if (!isset($v['pivot'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                if (!isset($v['pivot'])) {
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
                if (!isset($v['pivot'])) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
                if (!isset($v['pivot'])) {
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
                if (!isset($v['pivot'])) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                if (! isset($v['pivot'])) {
>>>>>>> 53d6a6ba (.)
=======
=======
                if (!isset($v['pivot'])) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
                if (! isset($v['pivot'])) {
>>>>>>> 551c768c4 (.)
=======
                if (! isset($v['pivot'])) {
>>>>>>> 414a4ffcb (.)
                    $v['pivot'] = [];
                }

                $relation->syncWithoutDetaching([$k => $v['pivot']]);
            }
        }
    }
}
