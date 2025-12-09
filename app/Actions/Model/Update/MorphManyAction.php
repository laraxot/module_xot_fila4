<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $relation = $model->{$relationDTO->name}();
            if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
                return;
            }
            $relation->saveMany($relationDTO->data);
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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
        if ([] === $relationDTO->data) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
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
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        if ([] === $relationDTO->data) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);
>>>>>>> b93ef594b4 (.)
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)

            return;
        }

        $related = $relationDTO->related;
        $keyName = $related->getKeyName();
        $models = [];
        $ids = [];
        foreach ($relationDTO->data as $data) {
            Assert::isArray($data);
            if (\in_array($keyName, array_keys($data), false)) {
                /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                 * $related_id = $data[$keyName];
                 * $row = $related->firstOrCreate([$keyName => $related_id]);
                 * $res = app(\Modules\Xot\Actions\Model\UpdateAction::class)->execute($row, $data, []);
                 */
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
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
                $related_id = $data[$keyName];
                $row = $related->firstOrCreate([$keyName => $related_id]);
                $res = app(\Modules\Xot\Actions\Model\UpdateAction::class)->execute($row, $data, []);
                */
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)

                // Assicura che $data sia type-safe per UpdateAction
                /** @var array<string, mixed> $typedData */
                $typedData = [];
                foreach ($data as $key => $value) {
                    $typedData[(string) $key] = $value;
                }

                $res = app(UpdateAction::class)->execute($related, $typedData, []);
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
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
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
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
                $res = app(UpdateAction::class)->execute($related, $data, []);
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
                $res = app(UpdateAction::class)->execute($related, $data, []);
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
                dddx(['model' => $model, 'relationDTO' => $relationDTO]);
            }
        }

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
<<<<<<< HEAD
        $relation = $model->{$relationDTO->name}();
        if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
            return;
        }
        $relation->saveMany($models);
=======
=======
>>>>>>> 21348520 (.)
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 5a14301c (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        $model->{$relationDTO->name}()->saveMany($models);
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 17684f52 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $model->{$relationDTO->name}()->saveMany($models);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
=======
>>>>>>> 7131bd09 (.)
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
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> b93ef594b4 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> ca9324a4 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 9db27d12 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> ca9324a4 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)

        // dddx(['model' => $model, 'relationDTO' => $relationDTO]);
    }
}
