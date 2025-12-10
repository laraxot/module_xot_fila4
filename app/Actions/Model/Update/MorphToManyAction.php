<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

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
     *
     */
    public function execute(Model $row, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($relation = $relationDTO->rows, MorphToMany::class);
        $data = $relationDTO->data;
        $name = $relationDTO->name;
        $model = $row;

        if (\in_array('to', array_keys($data), false) || \in_array('from', array_keys($data), false)) {
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            if (! isset($data['to'])) {
            if (!isset($data['to'])) {
            if (!isset($data['to'])) {
            if (! isset($data['to'])) {
            if (! isset($data['to'])) {
<<<<<<< HEAD
            if (! isset($data['to'])) {
            if (! isset($data['to'])) {
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
            if (!isset($data['to'])) {
=======
            if (! isset($data['to'])) {
>>>>>>> f1d4085 (.)
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
>>>>>>> 218dfed3 (.)
                $data['to'] = [];
            }
            $data = $data['to'];
        }

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
        if (! \is_array($data)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        }

        if (! Arr::isAssoc($data)) {
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
>>>>>>> 218dfed3 (.)
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
>>>>>>> 218dfed3 (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 218dfed3 (.)
            $relation->sync($data);

            return;
        }

        foreach ($data as $k => $v) {
            if (\is_array($v)) {
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
                if (! isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (!isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
<<<<<<< HEAD
                if (! isset($v['pivot'])) {
                if (! isset($v['pivot'])) {
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
                if (!isset($v['pivot'])) {
=======
                if (! isset($v['pivot'])) {
>>>>>>> f1d4085 (.)
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
>>>>>>> 218dfed3 (.)
                    $v['pivot'] = [];
                }

                $relation->syncWithoutDetaching([$k => $v['pivot']]);
            }
        }
    }
}
