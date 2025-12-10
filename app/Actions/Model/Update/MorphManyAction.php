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
        if ([] === $relationDTO->data) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $relation = $model->{$relationDTO->name}();
            if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
                return;
            }
            $relation->saveMany($relationDTO->data);
        if ([] === $relationDTO->data) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model - type assertion per dynamic relationship
            $relationName = $relationDTO->name;
            $morphRelation = $model->{$relationName}();
            Assert::object($morphRelation, sprintf('Relation "%s" must return an object', $relationName));

            if (! method_exists($morphRelation, 'saveMany')) {
                throw new InvalidArgumentException(sprintf('Relation "%s" must support saveMany() method', $relationName));
            }

            // Cast to HasMany or MorphMany that supports saveMany()
            if ($morphRelation instanceof HasMany ||
                $morphRelation instanceof MorphMany) {
                $morphRelation->saveMany($relationDTO->data);
            } else {
                throw new InvalidArgumentException(sprintf('Relation "%s" must be HasMany or MorphMany to support saveMany()', $relationName));
            }
        if ([] === $relationDTO->data) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);


        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);

            // Cast to HasMany or MorphMany that supports saveMany()
            if ($morphRelation instanceof HasMany ||
                $morphRelation instanceof MorphMany) {
                $morphRelation->saveMany($relationDTO->data);
            } else {
                throw new InvalidArgumentException(sprintf('Relation "%s" must be HasMany or MorphMany to support saveMany()', $relationName));
            }

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


            return;
        }

        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);

            return;
        }

        $related = $relationDTO->related;
        $related = $relationDTO->related;
        $related = $relationDTO->related;
        $related = $relationDTO->related;
        $keyName = $related->getKeyName();
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
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $related_id = $data[$keyName];
                $row = $related->firstOrCreate([$keyName => $related_id]);
                $res = app(\Modules\Xot\Actions\Model\UpdateAction::class)->execute($row, $data, []);
                */

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction
                /** @var array<string, mixed> $typedData */
                $typedData = [];
                foreach ($data as $key => $value) {
                    $typedData[(string) $key] = $value;
                }

                $res = app(UpdateAction::class)->execute($related, $typedData, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);

                // Assicura che $data sia type-safe per UpdateAction
                /** @var array<string, mixed> $typedData */
                $typedData = $data;
                Assert::isInstanceOf($related, Model::class, 'Related must be a Model');
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
                $res = app(UpdateAction::class)->execute($related, $data, []);
                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
                dddx(['model' => $model, 'relationDTO' => $relationDTO]);
            }
        }

        $relation = $model->{$relationDTO->name}();
        if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
            return;
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
        }
        $relation->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        // Type assertion per dynamic relationship method
        $relationName = $relationDTO->name;
        $morphRelation = $model->{$relationName}();
        Assert::object($morphRelation, sprintf('Relation "%s" must return an object', $relationName));

        if (! method_exists($morphRelation, 'saveMany')) {
            throw new InvalidArgumentException(sprintf('Relation "%s" must support saveMany() method', $relationName));
        }

        // Cast to HasMany or MorphMany that supports saveMany()
        if ($morphRelation instanceof HasMany ||
            $morphRelation instanceof MorphMany) {
            $morphRelation->saveMany($models);
        } else {
            throw new InvalidArgumentException(sprintf('Relation "%s" must be HasMany or MorphMany to support saveMany()', $relationName));
        }
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
        }
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
        }

        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);

        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);
        $model->{$relationDTO->name}()->saveMany($models);

        // dddx(['model' => $model, 'relationDTO' => $relationDTO]);
    }
}
