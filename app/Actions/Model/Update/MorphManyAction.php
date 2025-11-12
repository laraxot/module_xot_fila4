<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Model\UpdateAction;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class MorphManyAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $relation = $model->{$relationDTO->name}();
<<<<<<< HEAD
            if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
                return;
            }
            $relation->saveMany($relationDTO->data);
=======
            if (is_object($relation) && method_exists($relation, 'saveMany')) {
                $relation->saveMany($relationDTO->data);
            }
>>>>>>> eeaa032 (.)

            return;
        }

        $relation = $model->{$relationDTO->name}();

        if (! is_object($relation) || ! method_exists($relation, 'getRelated')) {
            return;
        }

        $related = $relation->getRelated();

        if (! is_object($related) || ! method_exists($related, 'getKeyName')) {
            return;
        }

        $keyName = $related->getKeyName();
        Assert::string($keyName, 'Key name must be a string');
        $models = [];
        $ids = [];
        foreach ($relationDTO->data as $data) {
            Assert::isArray($data);
            if (\in_array($keyName, array_keys($data), false)) {
                /*
                 * $related_id = $data[$keyName];
                 * $row = $related->firstOrCreate([$keyName => $related_id]);
                 * $res = app(\Modules\Xot\Actions\Model\UpdateAction::class)->execute($row, $data, []);
                 */
<<<<<<< HEAD
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
=======
                /** @var array<string, mixed> $typedData */
                $typedData = $data;
                Assert::isInstanceOf($related, Model::class, 'Related must be a Model');
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
>>>>>>> eeaa032 (.)
                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
                dddx(['model' => $model, 'relationDTO' => $relationDTO]);
            }
        }

<<<<<<< HEAD
        $relation = $model->{$relationDTO->name}();
        if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
            return;
        }
        $relation->saveMany($models);
=======
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
        }
>>>>>>> eeaa032 (.)

        // dddx(['model' => $model, 'relationDTO' => $relationDTO]);
    }
}
