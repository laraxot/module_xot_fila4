<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
use RuntimeException;
>>>>>>> 5a14301c (.)
use Exception;
=======
<<<<<<< HEAD
use RuntimeException;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Session;
use Modules\Xot\Actions\Model\UpdateAction;
use Modules\Xot\Datas\RelationData as RelationDTO;
<<<<<<< HEAD
use RuntimeException;
=======
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class BelongsToManyAction
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
>>>>>>> origin/develop
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        // dddx(['row' => $row, 'relation' => $relation]);
        if (\in_array('to', array_keys($relationDTO->data), false) || \in_array('from', array_keys($relationDTO->data), false)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        // dddx(['row' => $row, 'relation' => $relation]);
        if (
            \in_array('to', array_keys($relationDTO->data), false) ||
                \in_array('from', array_keys($relationDTO->data), false)
        ) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            // $this->saveMultiselectTwoSides($row, $relation->name, $relation->data);
            $to = $relationDTO->data['to'] ?? [];

            // Assicura che $to sia un array di ID validi
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            $to = is_iterable($to) ? iterator_to_array($to) : ((array) $to);
            Assert::allScalar($to, 'The "to" field must contain only scalar values.');

            $rows->sync($to);
<<<<<<< HEAD
<<<<<<< HEAD
            $status = 'collegati ['.implode(', ', $to).'] ';
=======
            $status = 'collegati [' . implode(', ', $to) . '] ';
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            $status = 'collegati [' . implode(', ', $to) . '] ';
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            $to = is_iterable($to) ? iterator_to_array($to) : (array) $to;
            Assert::allScalar($to, 'The "to" field must contain only scalar values.');

            $rows->sync($to);
            $status = 'collegati ['.implode(', ', $to).'] ';
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $to = is_iterable($to) ? iterator_to_array($to) : ((array) $to);
            Assert::allScalar($to, 'The "to" field must contain only scalar values.');

            $rows->sync($to);
            $status = 'collegati [' . implode(', ', $to) . '] ';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $safeData, []);
=======
                Assert::isArray($data, 'Data passed to UpdateAction must be an associative array.');
<<<<<<< HEAD
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======

                // Assicura che $data sia type-safe per UpdateAction
                /** @var array<string, mixed> $typedData */
                $typedData = [];
                foreach ($data as $key => $value) {
                    $typedData[(string) $key] = $value;
                }

                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
>>>>>>> a12f125f4a (.)
=======
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> b93ef594b4 (.)
=======
                /** @var Model $res */
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
                Assert::isInstanceOf($res, Model::class, 'UpdateAction must return an instance of Model.');

                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
<<<<<<< HEAD
                throw new RuntimeException(sprintf('Key "%s" not found in relation data.', $keyName));
=======
<<<<<<< HEAD
                throw new RuntimeException(sprintf('Key "%s" not found in relation data.', $keyName));
=======
                throw new \RuntimeException(sprintf('Key "%s" not found in relation data.', $keyName));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            }
        }

        // Sincronizza gli ID raccolti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! empty($ids)) {
=======
        if (!empty($ids)) {
>>>>>>> 5a14301c (.)
=======
        if (!empty($ids)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!empty($ids)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!empty($ids)) {
=======
        if (! empty($ids)) {
>>>>>>> a12f125f4a (.)
=======
        if (!empty($ids)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! empty($ids)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
            try {
                // Assicura che $ids sia un array di valori scalari
                // $ids è già un array non vuoto a questo punto, quindi non serve verificare se è iterabile
                Assert::allScalar($ids, 'The "ids" array must contain only scalar values.');

                $rows->syncWithoutDetaching($ids);
<<<<<<< HEAD
            } catch (Exception $e) {
                throw new RuntimeException(sprintf('Error during syncWithoutDetaching: %s', $e->getMessage()));
=======
<<<<<<< HEAD
            } catch (Exception $e) {
                throw new RuntimeException(sprintf('Error during syncWithoutDetaching: %s', $e->getMessage()));
=======
            } catch (\Exception $e) {
                throw new \RuntimeException(sprintf('Error during syncWithoutDetaching: %s', $e->getMessage()));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            }
        }
    }
}
