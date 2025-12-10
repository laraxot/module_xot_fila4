<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Arr;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class HasOneAction
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
        Assert::isInstanceOf($rows = $relationDTO->rows, HasOne::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            $related = $relationDTO->related->find($related_id);
            if (! ($related instanceof Model)) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            $related = $relationDTO->related->find($related_id);
=======
=======
>>>>>>> b7afadf9 (.)
            if (!($related instanceof Model)) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, HasOne::class);

        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            $related = $relationDTO->related->find($related_id);
<<<<<<< HEAD
            if (! $related instanceof Model) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
            if (!($related instanceof Model)) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, HasOne::class);

        if (! Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            $related = $relationDTO->related->find($related_id);
            if (! $related instanceof Model) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
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
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, HasOne::class);
>>>>>>> d2b0a27 (.)

            // Verifica che related sia un Model prima di chiamare find()
            if (! ($relationDTO->related instanceof Model)) {
                throw new Exception('['.__LINE__.']['.class_basename($this).'] Related must be a Model instance');
            }

            $related = $relationDTO->related::find($related_id);
            if (! ($related instanceof Model)) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            $related = $relationDTO->related->find($related_id);
            if (!($related instanceof Model)) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
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
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, HasOne::class);

        if (!Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            $related = $relationDTO->related->find($related_id);
<<<<<<< HEAD
            if (! $related instanceof Model) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
            if (!($related instanceof Model)) {
                throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, HasOne::class);

        if (! Arr::isAssoc($relationDTO->data) && 1 === \count($relationDTO->data)) {
            $related_id = Arr::first($relationDTO->data);
            $related = $relationDTO->related->find($related_id);
            if (! $related instanceof Model) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
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
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
                throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
            }

            $rows->save($related);

            return;
        }

        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * $rows = $relation->rows;
         * try {
         * $related = $rows->create($relation->data);
         * } catch (\Exception $e) {
         * // "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '1' for key 'PRIMARY' (SQL: insert into `liveuser_users` (`first_name`, `last_name`, `email`, `auth_user_id`, `created_by`, `updated_by`, `updated_at`, `created_at`) values (gfdsfs, fdsfds, fds
         * // dddx(['e' => $e->getMessage(), 'data' => $data]);
         * $related = $rows->update($relation->data);
         * }
         * if (! $model->{$relation->name}->exists()) {// collegamento non riuscito
         * $pk_local = $rows->getLocalKeyName();
         * $pk_fore = $rows->getForeignKeyName();
         * $data1 = [$pk_local => $related->$pk_fore];
         * $model->update($data1);
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $rows = $relation->rows;
        try {
            $related = $rows->create($relation->data);
        } catch (\Exception $e) {
            // "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '1' for key 'PRIMARY' (SQL: insert into `liveuser_users` (`first_name`, `last_name`, `email`, `auth_user_id`, `created_by`, `updated_by`, `updated_at`, `created_at`) values (gfdsfs, fdsfds, fds
            // dddx(['e' => $e->getMessage(), 'data' => $data]);
            $related = $rows->update($relation->data);
        }
        if (! $model->{$relation->name}->exists()) {// collegamento non riuscito
            $pk_local = $rows->getLocalKeyName();
            $pk_fore = $rows->getForeignKeyName();
            $data1 = [$pk_local => $related->$pk_fore];
            $model->update($data1);
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
