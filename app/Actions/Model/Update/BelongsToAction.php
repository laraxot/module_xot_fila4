<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
use Exception;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
use Exception;
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (! \is_array($relationDTO->data)) {
            $related = $rows->getRelated();
            $related = $related->find($relationDTO->data);
            $res = $rows->associate($related);
            $res->save();
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
                return;
            }

            $related = $relationDTO->related->find($related_id);
            // Verifica che $related non sia una Collection, ma un singolo modello
            if ($related instanceof Collection) {
                $related = $related->first(); // Prendi il primo modello della collezione
            }

<<<<<<< HEAD
            if (!($related instanceof Model)) {
                throw new Exception('Expected a single model, got null or invalid object.');
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (!($related instanceof Model)) {
=======
            if (! $related instanceof Model) {
>>>>>>> a12f125f4a (.)
=======
            if (!($related instanceof Model)) {
>>>>>>> b93ef594b4 (.)
                throw new Exception('Expected a single model, got null or invalid object.');
=======

            return;
        }
        */

        if (! Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
                return;
            }
            
            $related = $relationDTO->related->find($related_id);
            // Verifica che $related non sia una Collection, ma un singolo modello
            if ($related instanceof \Illuminate\Database\Eloquent\Collection) {
                $related = $related->first(); // Prendi il primo modello della collezione
            }

            if (! $related instanceof Model) {
                throw new \Exception('Expected a single model, got null or invalid object.');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            }
            $res = $rows->associate($related);
            $res->save();

            return;
        }

        if (Arr::isAssoc($relationDTO->data)) {
            $sub = $rows->firstOrCreate();
            // $sub = $rows->first() ?? $rows->getModel();
<<<<<<< HEAD
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
            }

            app(RelationAction::class)->execute($sub, $relationDTO->data);
        }

        $fillable = collect($relationDTO->related->getFillable())->merge($relationDTO->related->getHidden());
        $data = collect($relationDTO->data)->only($fillable)->all();

        if ($rows->exists()) {
            // $rows->update($data); // non passa per il mutator
<<<<<<< HEAD
            $model->{Str::camel($relationDTO->name)}->update($data);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $model->{Str::camel($relationDTO->name)}->update($data);
=======
            $relationName = Str::camel($relationDTO->name);
            $relatedModel = $model->{$relationName};

            // Type assertion: la relazione deve restituire un modello che supporta update()
            if (! $relatedModel instanceof Model) {
                throw new InvalidArgumentException('Related model must be an instance of Model to support update()');
            }

            $relatedModel->update($data);
>>>>>>> a12f125f4a (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> b93ef594b4 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return;
        }

        // dddx([$relation->related, $data]);

        $related = $relationDTO->related->create($data);
        $res = $rows->associate($related);
        $res->save();
    }
}
