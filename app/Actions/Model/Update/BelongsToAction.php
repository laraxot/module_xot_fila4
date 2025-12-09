<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Illuminate\Database\Eloquent\Collection;
=======
use Illuminate\Database\Eloquent\Collection;
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
use Illuminate\Database\Eloquent\Collection;
use Exception;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use InvalidArgumentException;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Illuminate\Database\Eloquent\Collection;
use Exception;
>>>>>>> ca9324a4 (.)
=======
use Illuminate\Database\Eloquent\Collection;
use Exception;
>>>>>>> 5a14301c (.)
=======
=======
use InvalidArgumentException;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
use InvalidArgumentException;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class BelongsToAction
{
    use QueueableAction;

    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsTo::class);

        /*$relationDTO->data e' un array
         * if (! \is_array($relationDTO->data)) {
         * $related = $rows->getRelated();
         * $related = $related->find($relationDTO->data);
         * $res = $rows->associate($related);
         * $res->save();
         *
         * return;
         * }
         */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
=======
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
        if (! \is_array($relationDTO->data)) {
            $related = $rows->getRelated();
            $related = $related->find($relationDTO->data);
            $res = $rows->associate($related);
            $res->save();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
<<<<<<< HEAD
            if ($related_id === null) {
>>>>>>> a12f125f4a (.)
=======
            if (null === $related_id) {
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
>>>>>>> 5a14301c (.)
=======

            return;
        }
        */

        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
                return;
            }

            $related = $relationDTO->related->find($related_id);
            // Verifica che $related non sia una Collection, ma un singolo modello
            if ($related instanceof Collection) {
                $related = $related->first(); // Prendi il primo modello della collezione
            }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! ($related instanceof Model)) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
            if (!($related instanceof Model)) {
>>>>>>> 5a14301c (.)
=======
            if (!($related instanceof Model)) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!($related instanceof Model)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            if (!($related instanceof Model)) {
=======
            if (! $related instanceof Model) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (!($related instanceof Model)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (!($related instanceof Model)) {
>>>>>>> 3fbbf1f5 (.)
                throw new Exception('Expected a single model, got null or invalid object.');
            }
            $res = $rows->associate($related);
            $res->save();

            return;
        }

        if (Arr::isAssoc($relationDTO->data)) {
            $sub = $rows->firstOrCreate();
            // $sub = $rows->first() ?? $rows->getModel();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
            if (null === $sub) {
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> ca9324a4 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
            }

            app(RelationAction::class)->execute($sub, $relationDTO->data);
        }

        $fillable = collect($relationDTO->related->getFillable())->merge($relationDTO->related->getHidden());
        $data = collect($relationDTO->data)->only($fillable)->all();

        if ($rows->exists()) {
            // $rows->update($data); // non passa per il mutator
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $relationName = Str::camel($relationDTO->name);
            $relation = $model->{$relationName};

            if (! is_object($relation) || ! method_exists($relation, 'update')) {
                return;
            }

            $relation->update($data);
=======
=======
>>>>>>> 21348520 (.)
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 5a14301c (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 3fbbf1f5 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $model->{Str::camel($relationDTO->name)}->update($data);
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> ed734516 (.)
=======
            $relationName = Str::camel($relationDTO->name);
            $relatedModel = $model->{$relationName};

            // Type assertion: la relazione deve restituire un modello che supporta update()
            if (! $relatedModel instanceof Model) {
                throw new InvalidArgumentException('Related model must be an instance of Model to support update()');
            }

            $relatedModel->update($data);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> b93ef594b4 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> ca9324a4 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 3fbbf1f5 (.)

            return;
        }

        // dddx([$relation->related, $data]);

        $related = $relationDTO->related->create($data);
        $res = $rows->associate($related);
        $res->save();
    }
}
