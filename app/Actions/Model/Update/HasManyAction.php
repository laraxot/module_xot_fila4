<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Modules\Xot\Actions\Model\UpdateAction;
use Modules\Xot\Datas\HasManyUpdateData;
use Modules\Xot\Datas\RelationData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class HasManyAction
{
    use QueueableAction;

    /**
     * Execute the HasMany relation update.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException
=======
     * @throws \InvalidArgumentException
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @throws InvalidArgumentException
>>>>>>> 091f883c (.)
=======
     * @throws InvalidArgumentException
>>>>>>> 414a4ffcb (.)
     */
    public function execute(Model $model, RelationData $relationDTO): void
    {
        Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);

        $updateData = new HasManyUpdateData(
            foreignKey: $relation->getForeignKeyName(),
<<<<<<< HEAD
<<<<<<< HEAD
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            parentKey: $model->getAttribute($relation->getLocalKeyName())
=======
=======
            parentKey: $model->getAttribute($relation->getLocalKeyName())
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
=======
            parentKey: $model->getAttribute($relation->getLocalKeyName())
>>>>>>> a12f125f4a (.)
=======
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
>>>>>>> b93ef594b4 (.)
=======
            parentKey: $model->getAttribute($relation->getLocalKeyName())
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
=======
            parentKey: $model->getAttribute($relation->getLocalKeyName())
>>>>>>> f1d4085 (.)
=======
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        );

        match (true) {
            $this->isDirectUpdate($relationDTO->data) => $this->handleDirectUpdate($relationDTO, $updateData),
            default => $this->handleBatchUpdate($relationDTO, $updateData),
        };
    }

    /**
     * Determine if the update is a direct update.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> 551c768c4 (.)
=======
     * @param  array<string, mixed>  $data
>>>>>>> 414a4ffcb (.)
     */
    private function isDirectUpdate(array $data): bool
    {
        return isset($data['to']) || isset($data['from']);
    }

    private function handleDirectUpdate(RelationData $relationDTO, HasManyUpdateData $updateData): void
    {
        $relation = $relationDTO->rows;
        Assert::isInstanceOf($relation, HasMany::class);
        $related = $relation->getRelated();
        Assert::notNull($related, 'Related model cannot be null');

<<<<<<< HEAD
<<<<<<< HEAD
=======
        /** @var Builder $query */
        $query = $related->newQuery();

<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
        $query->where($updateData->foreignKey, $updateData->parentKey)->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query
<<<<<<< HEAD
                ->whereIn($relationDTO->related->getKeyName(), $toIds)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
<<<<<<< HEAD
                ->whereIn($related->getKeyName(), $toIds)
=======
                ->whereIn($relationDTO->related->getKeyName(), $toIds)
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
        $query->where($updateData->foreignKey, $updateData->parentKey)
            ->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query->whereIn($relationDTO->related->getKeyName(), $toIds)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        $query->where($updateData->foreignKey, $updateData->parentKey)->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query
<<<<<<< HEAD
                ->whereIn($related->getKeyName(), $toIds)
=======
                ->whereIn($relationDTO->related->getKeyName(), $toIds)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
=======
        $query->where($updateData->foreignKey, $updateData->parentKey)
            ->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query->whereIn($relationDTO->related->getKeyName(), $toIds)
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
                ->update([$updateData->foreignKey => $updateData->parentKey]);
        }
    }

    private function handleBatchUpdate(RelationData $relationDTO, HasManyUpdateData $updateData): void
    {
        $relation = $relationDTO->rows;
        Assert::isInstanceOf($relation, HasMany::class);
        $related = $relation->getRelated();
        Assert::notNull($related, 'Related model cannot be null');

        $keyName = $related->getKeyName();
        $updatedIds = [];

        foreach ($relationDTO->data as $item) {
            Assert::isArray($item);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            if (! isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            if (! isset($item[$keyName])) {
=======
            if (!isset($item[$keyName])) {
>>>>>>> 5a14301c (.)
=======
            if (!isset($item[$keyName])) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!isset($item[$keyName])) {
=======
            if (!isset($item[$keyName])) {
>>>>>>> 399f46d3 (.)
=======
            if (!isset($item[$keyName])) {
>>>>>>> 17684f52 (.)
=======
            if (!isset($item[$keyName])) {
>>>>>>> 399f46d3 (.)
=======
            if (!isset($item[$keyName])) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!isset($item[$keyName])) {
=======
            if (! isset($item[$keyName])) {
>>>>>>> a12f125f4a (.)
=======
            if (!isset($item[$keyName])) {
>>>>>>> b93ef594b4 (.)
=======
            if (! isset($item[$keyName])) {
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            if (!isset($item[$keyName])) {
>>>>>>> ca9324a4 (.)
=======
            if (!isset($item[$keyName])) {
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
            if (! isset($item[$keyName])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            if (! isset($item[$keyName])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            if (!isset($item[$keyName])) {
=======
            if (! isset($item[$keyName])) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
<<<<<<< HEAD
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
=======
>>>>>>> ca9324a4 (.)
=======
            if (!isset($item[$keyName])) {
=======
            if (! isset($item[$keyName])) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            if (!isset($item[$keyName])) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (!isset($item[$keyName])) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
            if (!isset($item[$keyName])) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
            if (!isset($item[$keyName])) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            if (!isset($item[$keyName])) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            if (! isset($item[$keyName])) {
>>>>>>> 53d6a6ba (.)
=======
=======
            if (!isset($item[$keyName])) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            if (! isset($item[$keyName])) {
>>>>>>> 551c768c4 (.)
=======
            if (! isset($item[$keyName])) {
>>>>>>> 414a4ffcb (.)
                continue;
            }

            /** @var array<string, mixed> $itemData */
            $itemData = array_merge($item, [
                $updateData->foreignKey => $updateData->parentKey,
            ]);

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
>>>>>>> 5cf46378 (.)
            $result = app(UpdateAction::class)->execute($related, $itemData, []);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
            $result = app(UpdateAction::class)->execute(
                $relationDTO->related,
                $itemData,
                []
            );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 414a4ffcb (.)
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

            if ($result instanceof Model) {
                $id = $result->getKey();
                if (is_int($id) || is_string($id)) {
                    $updatedIds[] = $id;
                }
            }
        }

        $this->cleanupOrphanedRecords($relationDTO, $updateData, $updatedIds);
    }

    /**
     * Clean up orphaned records after batch update.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<int|string> $updatedIds
     * @param array<int|string> $updatedIds
     * @param array<int|string> $updatedIds
     * @param array<int|string> $updatedIds
     * @param array<int|string> $updatedIds
=======
     * @param  array<int|string>  $updatedIds
>>>>>>> 551c768c4 (.)
=======
     * @param  array<int|string>  $updatedIds
>>>>>>> 414a4ffcb (.)
     */
    private function cleanupOrphanedRecords(
        RelationData $relationDTO,
        HasManyUpdateData $updateData,
        array $updatedIds,
    ): void {
        if ($updatedIds) {
<<<<<<< HEAD
<<<<<<< HEAD
            $relationDTO
                ->related
                ->newQuery()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $relationDTO->related->newQuery()
=======
=======
            $relationDTO->related->newQuery()
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $relationDTO
                ->related
                ->newQuery()
=======
            $relationDTO->related->newQuery()
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
<<<<<<< HEAD
            $relation = $relationDTO->rows;
            Assert::isInstanceOf($relation, HasMany::class);
            $related = $relation->getRelated();
            Assert::notNull($related, 'Related model cannot be null');

            $related
                ->newQuery()
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $relationDTO
                ->related
                ->newQuery()
=======
            $relationDTO->related->newQuery()
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
            $relation = $relationDTO->rows;
            Assert::isInstanceOf($relation, HasMany::class);
            $related = $relation->getRelated();
            Assert::notNull($related, 'Related model cannot be null');

            $related
                ->newQuery()
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $relationDTO
                ->related
                ->newQuery()
=======
            $relationDTO->related->newQuery()
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
            $relationDTO
                ->related
                ->newQuery()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            $relationDTO->related->newQuery()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            $relationDTO
                ->related
                ->newQuery()
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
                ->where($updateData->foreignKey, $updateData->parentKey)
                ->whereNotIn($related->getKeyName(), $updatedIds)
                ->update([$updateData->foreignKey => null]);
        }
    }
}
