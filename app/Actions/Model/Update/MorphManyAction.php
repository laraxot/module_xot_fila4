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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if ([] === $relationDTO->data) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $relation = $model->{$relationDTO->name}();
            if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
                return;
            }
            $relation->saveMany($relationDTO->data);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model - type assertion per dynamic relationship
            $relationName = $relationDTO->name;
            $morphRelation = $model->{$relationName}();
            Assert::object($morphRelation, sprintf('Relation "%s" must return an object', $relationName));

            if (! method_exists($morphRelation, 'saveMany')) {
                throw new InvalidArgumentException(sprintf('Relation "%s" must support saveMany() method', $relationName));
            }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 48515e368 (.)

=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
        if ($relationDTO->data === []) {
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
        if ([] === $relationDTO->data) {
>>>>>>> a6ef6dc7 (.)
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
>>>>>>> 53d6a6ba (.)
=======
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
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
                 * $related_id = $data[$keyName];
                 * $row = $related->firstOrCreate([$keyName => $related_id]);
                 * $res = app(\Modules\Xot\Actions\Model\UpdateAction::class)->execute($row, $data, []);
                 */
<<<<<<< HEAD
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
=======
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
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
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
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)

                // Assicura che $data sia type-safe per UpdateAction
=======

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> d2b0a27 (.)
                /** @var array<string, mixed> $typedData */
                $typedData = $data;
                Assert::isInstanceOf($related, Model::class, 'Related must be a Model');
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
                dddx(['model' => $model, 'relationDTO' => $relationDTO]);
            }
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
>>>>>>> 48515e368 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
        $relation = $model->{$relationDTO->name}();
        if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
            return;
=======
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
>>>>>>> ab8cc3f3 (.)
        }
        $relation->saveMany($models);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $model->{$relationDTO->name}()->saveMany($models);
=======
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
>>>>>>> f1d4085 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
=======
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
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
        }
>>>>>>> b7afadf9 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 285375c74 (.)

>>>>>>> d2b0a27 (.)
        // dddx(['model' => $model, 'relationDTO' => $relationDTO]);
    }
}