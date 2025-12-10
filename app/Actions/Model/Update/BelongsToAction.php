<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Collection;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Collection;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Collection;
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

        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
        if (! \is_array($relationDTO->data)) {
            $related = $rows->getRelated();
            $related = $related->find($relationDTO->data);
            $res = $rows->associate($related);
            $res->save();

        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
            if (null === $related_id) {
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {

            return;
        }
        */

        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
                return;
            }

            $related = $relationDTO->related->find($related_id);
            // Verifica che $related non sia una Collection, ma un singolo modello
            if ($related instanceof Collection) {
                $related = $related->first(); // Prendi il primo modello della collezione
            }

            if (! ($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! ($related instanceof Model)) {
            if (! ($related instanceof Model)) {
            if (! ($related instanceof Model)) {
            if (! ($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! $related instanceof Model) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! $related instanceof Model) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! $related instanceof Model) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! $related instanceof Model) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! $related instanceof Model) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! ($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! ($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! $related instanceof Model) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! $related instanceof Model) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! ($related instanceof Model)) {
            if (! ($related instanceof Model)) {
                throw new Exception('Expected a single model, got null or invalid object.');
            }
            $res = $rows->associate($related);
            $res->save();

            return;
        }

        if (Arr::isAssoc($relationDTO->data)) {
            $sub = $rows->firstOrCreate();
            // $sub = $rows->first() ?? $rows->getModel();
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            }

            app(RelationAction::class)->execute($sub, $relationDTO->data);
        }

        $fillable = collect($relationDTO->related->getFillable())->merge($relationDTO->related->getHidden());
        $data = collect($relationDTO->data)->only($fillable)->all();

        if ($rows->exists()) {
            // $rows->update($data); // non passa per il mutator
            $relationName = Str::camel($relationDTO->name);
            $relation = $model->{$relationName};

            if (! is_object($relation) || ! method_exists($relation, 'update')) {
                return;
            }
            }

            $relation->update($data);

            $relation->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $relatedInstance = $model->{Str::camel($relationDTO->name)};
            if ($relatedInstance instanceof Model) {
                $relatedInstance->update($data);
            }

            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $relationName = Str::camel($relationDTO->name);
            $relatedModel = $model->{$relationName};

            // Type assertion: la relazione deve restituire un modello che supporta update()
            if (! $relatedModel instanceof Model) {
                throw new InvalidArgumentException('Related model must be an instance of Model to support update()');
            }

            $relatedModel->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);

            $model->{Str::camel($relationDTO->name)}->update($data);

            $model->{Str::camel($relationDTO->name)}->update($data);

            $model->{Str::camel($relationDTO->name)}->update($data);

            $model->{Str::camel($relationDTO->name)}->update($data);

            $model->{Str::camel($relationDTO->name)}->update($data);

            $model->{Str::camel($relationDTO->name)}->update($data);

            $model->{Str::camel($relationDTO->name)}->update($data);

            $model->{Str::camel($relationDTO->name)}->update($data);

            return;
        }

        // dddx([$relation->related, $data]);

        $related = $relationDTO->related->create($data);
        $res = $rows->associate($related);
        $res->save();
    }
}
