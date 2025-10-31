<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Exception;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use InvalidArgumentException;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
=======
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
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
                return;
            }

            $relatedModel = $rows->getRelated();
            Assert::notNull($relatedModel, 'Related model cannot be null');
            $related = $relatedModel->find($related_id);

<<<<<<< HEAD
            if (! ($related instanceof Model)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (! ($related instanceof Model)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (!($related instanceof Model)) {
=======
            if (! $related instanceof Model) {
>>>>>>> f1d4085 (.)
=======
            if (!($related instanceof Model)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            if (!($related instanceof Model)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
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
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
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
>>>>>>> d2b0a27 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            }

            app(RelationAction::class)->execute($sub, $relationDTO->data);
        }

        $relatedModel = $rows->getRelated();
        Assert::notNull($relatedModel, 'Related model cannot be null');

        $fillable = collect($relatedModel->getFillable())->merge($relatedModel->getHidden());
        $data = collect($relationDTO->data)->only($fillable)->all();

        if ($rows->exists()) {
            // $rows->update($data); // non passa per il mutator
<<<<<<< HEAD
<<<<<<< HEAD
            $relatedInstance = $model->{Str::camel($relationDTO->name)};
            if ($relatedInstance instanceof Model) {
                $relatedInstance->update($data);
            }

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
            $model->{Str::camel($relationDTO->name)}->update($data);

>>>>>>> d2b0a27 (.)
            return;
        }

        // dddx([$relation->related, $data]);

        $related = $relatedModel->create($data);
        $res = $rows->associate($related);
        $res->save();
    }
}