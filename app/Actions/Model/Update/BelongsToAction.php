<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

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
use Exception;
>>>>>>> ce6fc085 (.)
use Illuminate\Database\Eloquent\Collection;
use Exception;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
=======
>>>>>>> 399f46d3 (.)
=======
use Illuminate\Database\Eloquent\Collection;
use Exception;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
use Exception;
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
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
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
use Illuminate\Database\Eloquent\Collection;
use Exception;
use InvalidArgumentException;
use InvalidArgumentException;
=======
>>>>>>> ca9324a4 (.)
=======
=======
use InvalidArgumentException;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
use InvalidArgumentException;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        if (! \is_array($relationDTO->data)) {
            $related = $rows->getRelated();
            $related = $related->find($relationDTO->data);
            $res = $rows->associate($related);
            $res->save();
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 2f3197ab (.)

        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

            return;
        }
        */

        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
<<<<<<< HEAD
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
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
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
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            if (null === $related_id) {
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
            if (! ($related instanceof Model)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a67e542f (.)
            if (! ($related instanceof Model)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
            if (! ($related instanceof Model)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            if (! ($related instanceof Model)) {
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            if (!($related instanceof Model)) {
<<<<<<< HEAD
            if (! $related instanceof Model) {
=======
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
            if (!($related instanceof Model)) {
=======
            if (! $related instanceof Model) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
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
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
            if (! $related instanceof Model) {
            if (!($related instanceof Model)) {
            if (!($related instanceof Model)) {
=======
>>>>>>> 3fbbf1f5 (.)
=======
            if (!($related instanceof Model)) {
=======
            if (! $related instanceof Model) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            if (!($related instanceof Model)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (!($related instanceof Model)) {
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
                throw new Exception('Expected a single model, got null or invalid object.');
<<<<<<< HEAD
            if (!($related instanceof Model)) {
                throw new Exception('Expected a single model, got null or invalid object.');
=======
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
>>>>>>> ce6fc085 (.)

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
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
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
=======
>>>>>>> ed734516 (.)
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 7131bd09 (.)
=======
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
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
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (null === $sub) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            }

            app(RelationAction::class)->execute($sub, $relationDTO->data);
        }

        $fillable = collect($relationDTO->related->getFillable())->merge($relationDTO->related->getHidden());
        $data = collect($relationDTO->data)->only($fillable)->all();

        if ($rows->exists()) {
            // $rows->update($data); // non passa per il mutator
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
<<<<<<< HEAD
<<<<<<< HEAD
            $model->{Str::camel($relationDTO->name)}->update($data);
=======
>>>>>>> 399f46d3 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $model->{Str::camel($relationDTO->name)}->update($data);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
            $model->{Str::camel($relationDTO->name)}->update($data);
            $relatedInstance = $model->{Str::camel($relationDTO->name)};
            if ($relatedInstance instanceof Model) {
                $relatedInstance->update($data);
            }

            $model->{Str::camel($relationDTO->name)}->update($data);
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            $relationName = Str::camel($relationDTO->name);
            $relatedModel = $model->{$relationName};

            // Type assertion: la relazione deve restituire un modello che supporta update()
            if (! $relatedModel instanceof Model) {
                throw new InvalidArgumentException('Related model must be an instance of Model to support update()');
            }

            $relatedModel->update($data);
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
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
            $model->{Str::camel($relationDTO->name)}->update($data);
            $model->{Str::camel($relationDTO->name)}->update($data);
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            $model->{Str::camel($relationDTO->name)}->update($data);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

            return;
        }

        // dddx([$relation->related, $data]);

        $related = $relationDTO->related->create($data);
        $res = $rows->associate($related);
        $res->save();
    }
}
