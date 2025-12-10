<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use RuntimeException;
use RuntimeException;
use RuntimeException;
use RuntimeException;
use RuntimeException;
use RuntimeException;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Session;
use Modules\Xot\Actions\Model\UpdateAction;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class BelongsToManyAction
{
    use QueueableAction;

<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        // dddx(['row' => $row, 'relation' => $relation]);
        if (
            \in_array('to', array_keys($relationDTO->data), false) ||
                \in_array('from', array_keys($relationDTO->data), false)
        ) {
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        // dddx(['row' => $row, 'relation' => $relation]);
        if (\in_array('to', array_keys($relationDTO->data), false) || \in_array('from', array_keys($relationDTO->data), false)) {
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        // dddx(['row' => $row, 'relation' => $relation]);
        if (
            \in_array('to', array_keys($relationDTO->data), false) ||
                \in_array('from', array_keys($relationDTO->data), false)
        ) {
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
            // $this->saveMultiselectTwoSides($row, $relation->name, $relation->data);
            $to = $relationDTO->data['to'] ?? [];

            // Assicura che $to sia un array di ID validi
<<<<<<< HEAD
            $to = is_iterable($to) ? iterator_to_array($to) : ((array) $to);
            Assert::allScalar($to, 'The "to" field must contain only scalar values.');

            $rows->sync($to);
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 2f3197ab (.)
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
=======
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
=======
=======
>>>>>>> origin/develop
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
>>>>>>> 2f3197ab (.)
            $to = is_iterable($to) ? iterator_to_array($to) : (array) $to;
            Assert::allScalar($to, 'The "to" field must contain only scalar values.');

            $rows->sync($to);
            $status = 'collegati ['.implode(', ', $to).'] ';
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
            $to = is_iterable($to) ? iterator_to_array($to) : ((array) $to);
            Assert::allScalar($to, 'The "to" field must contain only scalar values.');

            $rows->sync($to);
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati ['.implode(', ', $to).'] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
            $status = 'collegati [' . implode(', ', $to) . '] ';
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
>>>>>>> 2f3197ab (.)
            Session::flash('status', $status);

            return;
        }

        $models = [];
        $ids = [];
        $related = $relationDTO->related;
        $keyName = $relationDTO->related->getKeyName();

        // Itera sui dati della relazione
        foreach ($relationDTO->data as $data) {
            Assert::isArray($data, 'Each item in RelationDTO->data must be an array.');
            if (\array_key_exists($keyName, $data)) {
                // Aggiorna o crea il modello correlato
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
<<<<<<< HEAD

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction

                // Assicura che $data sia type-safe per UpdateAction
=======
=======
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');
<<<<<<< HEAD
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 2f3197ab (.)

                // Assicura che $data sia type-safe per UpdateAction
                /** @var array<string, mixed> $typedData */
                $typedData = [];
                foreach ($data as $key => $value) {
                    $typedData[(string) $key] = $value;
                }

                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
<<<<<<< HEAD
=======
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');

                // Assicura che $data sia type-safe per UpdateAction
                /** @var array<string, mixed> $typedData */
                $typedData = $data;
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);

                // Assicura che $data sia type-safe per UpdateAction
                /** @var array<string, mixed> $typedData */
                $typedData = [];
                foreach ($data as $key => $value) {
                    $typedData[(string) $key] = $value;
                }

                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $typedData, []);

                // Assicura che $data sia type-safe per UpdateAction
                /** @var array<string, mixed> $typedData */
                $typedData = $data;
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 2f3197ab (.)
                Assert::isInstanceOf($res, Model::class, 'UpdateAction must return an instance of Model.');

                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
            }
        }

        // Sincronizza gli ID raccolti
<<<<<<< HEAD
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
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
>>>>>>> 2f3197ab (.)
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (! empty($ids)) {
        if (! empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
<<<<<<< HEAD
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
        if (! empty($ids)) {
        if (!empty($ids)) {
        if (!empty($ids)) {
=======
>>>>>>> ca9324a4 (.)
=======
        if (!empty($ids)) {
=======
        if (! empty($ids)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            try {
                // Assicura che $ids sia un array di valori scalari
                // $ids è già un array non vuoto a questo punto, quindi non serve verificare se è iterabile
                Assert::allScalar($ids, 'The "ids" array must contain only scalar values.');

                $rows->syncWithoutDetaching($ids);
            }
        }
    }
}
