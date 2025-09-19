<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Collection;
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use InvalidArgumentException;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
         * if (! \is_array($relationDTO->data)) {
         * $related = $rows->getRelated();
         * $related = $related->find($relationDTO->data);
         * $res = $rows->associate($related);
         * $res->save();
         *
         * return;
         * }
         */

        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
<<<<<<< HEAD
=======
        if (! \is_array($relationDTO->data)) {
            $related = $rows->getRelated();
            $related = $related->find($relationDTO->data);
            $res = $rows->associate($related);
            $res->save();

            return;
        }
        */

        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
                return;
            }

            $related = $relationDTO->related->find($related_id);
            // Verifica che $related non sia una Collection, ma un singolo modello
            if ($related instanceof Collection) {
                $related = $related->first(); // Prendi il primo modello della collezione
            }

<<<<<<< HEAD
<<<<<<< HEAD
            if (!($related instanceof Model)) {
=======
            if (! $related instanceof Model) {
>>>>>>> f1d4085 (.)
=======
            if (!($related instanceof Model)) {
>>>>>>> 73eab74 (.)
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
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
            }

            app(RelationAction::class)->execute($sub, $relationDTO->data);
        }

        $fillable = collect($relationDTO->related->getFillable())->merge($relationDTO->related->getHidden());
        $data = collect($relationDTO->data)->only($fillable)->all();

        if ($rows->exists()) {
            // $rows->update($data); // non passa per il mutator
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
>>>>>>> f1d4085 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 73eab74 (.)

            return;
        }

        // dddx([$relation->related, $data]);

        $related = $relationDTO->related->create($data);
        $res = $rows->associate($related);
        $res->save();
    }
}
