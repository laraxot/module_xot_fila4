<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        if ([] === $relationDTO->data) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $relation = $model->{$relationDTO->name}();
            if (is_object($relation) && method_exists($relation, 'saveMany')) {
                $relation->saveMany($relationDTO->data);
            }

<<<<<<< HEAD
=======
            // Cast to HasMany or MorphMany that supports saveMany()
            if ($morphRelation instanceof HasMany ||
                $morphRelation instanceof MorphMany) {
                $morphRelation->saveMany($relationDTO->data);
            } else {
                throw new InvalidArgumentException(sprintf('Relation "%s" must be HasMany or MorphMany to support saveMany()', $relationName));
            }
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)

>>>>>>> d2b0a27 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
                 * $related_id = $data[$keyName];
                 * $row = $related->firstOrCreate([$keyName => $related_id]);
                 * $res = app(\Modules\Xot\Actions\Model\UpdateAction::class)->execute($row, $data, []);
                 */
<<<<<<< HEAD
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
=======
                $related_id = $data[$keyName];
                $row = $related->firstOrCreate([$keyName => $related_id]);
                $res = app(\Modules\Xot\Actions\Model\UpdateAction::class)->execute($row, $data, []);
                */

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> d2b0a27 (.)
                /** @var array<string, mixed> $typedData */
                $typedData = $data;
                Assert::isInstanceOf($related, Model::class, 'Related must be a Model');
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
                dddx(['model' => $model, 'relationDTO' => $relationDTO]);
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
        }

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
        $model->{$relationDTO->name}()->saveMany($models);

>>>>>>> d2b0a27 (.)
        // dddx(['model' => $model, 'relationDTO' => $relationDTO]);
    }
}