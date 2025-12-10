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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $relation = $model->{$relationDTO->name}();
            if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
                return;
            }
            $relation->saveMany($relationDTO->data);
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
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model - type assertion per dynamic relationship
            $relationName = $relationDTO->name;
            $morphRelation = $model->{$relationName}();
            Assert::object($morphRelation, sprintf('Relation "%s" must return an object', $relationName));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 249a0067 (.)

            if (! method_exists($morphRelation, 'saveMany')) {
                throw new InvalidArgumentException(sprintf('Relation "%s" must support saveMany() method', $relationName));
            }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)

=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)

>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
            // Cast to HasMany or MorphMany that supports saveMany()
            if ($morphRelation instanceof HasMany ||
                $morphRelation instanceof MorphMany) {
                $morphRelation->saveMany($relationDTO->data);
            } else {
                throw new InvalidArgumentException(sprintf('Relation "%s" must be HasMany or MorphMany to support saveMany()', $relationName));
            }
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)

>>>>>>> d2b0a27 (.)
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $relation = $model->{$relationDTO->name}();

        if (! is_object($relation) || ! method_exists($relation, 'getRelated')) {
            return;
        }

        $related = $relation->getRelated();

        if (! is_object($related) || ! method_exists($related, 'getKeyName')) {
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
            return;
        }

=======
>>>>>>> 249a0067 (.)
=======
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

            return;
        }

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        if ($relationDTO->data === []) {
            // dddx(['model'=>$model,'relationDTO'=>$relationDTO]);
            // save Model
            $model->{$relationDTO->name}()->saveMany($relationDTO->data);

            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
        $related = $relationDTO->related;
=======
>>>>>>> b7afadf9 (.)
=======
        $related = $relationDTO->related;
>>>>>>> 71586de2 (.)
=======
        $related = $relationDTO->related;
>>>>>>> 249a0067 (.)
=======
        $related = $relationDTO->related;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 17684f52 (.)
=======
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 17684f52 (.)

                // Assicura che $data sia type-safe per UpdateAction
=======

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> ed734516 (.)
=======

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> 399f46d3 (.)
=======

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> 7131bd09 (.)
=======

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> 17684f52 (.)
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
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)

                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> d2b0a27 (.)
                /** @var array<string, mixed> $typedData */
                $typedData = $data;
                Assert::isInstanceOf($related, Model::class, 'Related must be a Model');
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 71586de2 (.)
=======
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
>>>>>>> 249a0067 (.)
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
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 71586de2 (.)
=======
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
>>>>>>> 249a0067 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 249a0067 (.)
=======
>>>>>>> 249a0067 (.)
        $relation = $model->{$relationDTO->name}();
        if (! is_object($relation) || ! method_exists($relation, 'saveMany')) {
            return;
=======
=======
>>>>>>> 6dcebf8a (.)
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
>>>>>>> ab8cc3f3 (.)
        }
        $relation->saveMany($models);
<<<<<<< HEAD
<<<<<<< HEAD
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
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 17684f52 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 399f46d3 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 17684f52 (.)
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
        if (method_exists($relation, 'saveMany')) {
            $relation->saveMany($models);
        }
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        $model->{$relationDTO->name}()->saveMany($models);
=======
>>>>>>> 249a0067 (.)
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
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 9db27d12 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        $model->{$relationDTO->name}()->saveMany($models);
=======
>>>>>>> 249a0067 (.)
=======
        $model->{$relationDTO->name}()->saveMany($models);
>>>>>>> 5a14301c (.)

        // dddx(['model' => $model, 'relationDTO' => $relationDTO]);
    }
}
