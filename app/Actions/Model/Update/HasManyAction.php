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
>>>>>>> ce6fc085 (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use InvalidArgumentException;
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
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
     */
    public function execute(Model $model, RelationData $relationDTO): void
    {
        Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);

        $updateData = new HasManyUpdateData(
            foreignKey: $relation->getForeignKeyName(),
<<<<<<< HEAD
            parentKey: $model->getAttribute($relation->getLocalKeyName()),
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
        );

        match (true) {
            $this->isDirectUpdate($relationDTO->data) => $this->handleDirectUpdate($relationDTO, $updateData),
            default => $this->handleBatchUpdate($relationDTO, $updateData),
        };
    }

    /**
     * Determine if the update is a direct update.
     *
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     */
    private function isDirectUpdate(array $data): bool
    {
        return isset($data['to']) || isset($data['from']);
    }

    private function handleDirectUpdate(RelationData $relationDTO, HasManyUpdateData $updateData): void
    {
        /** @var Builder $query */
        $query = $relationDTO->related->newQuery();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $query->where($updateData->foreignKey, $updateData->parentKey)->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query
                ->whereIn($relationDTO->related->getKeyName(), $toIds)
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
        $query->where($updateData->foreignKey, $updateData->parentKey)
            ->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query->whereIn($relationDTO->related->getKeyName(), $toIds)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        $query->where($updateData->foreignKey, $updateData->parentKey)->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query
                ->whereIn($relationDTO->related->getKeyName(), $toIds)
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
                ->update([$updateData->foreignKey => $updateData->parentKey]);
        }
    }

    private function handleBatchUpdate(RelationData $relationDTO, HasManyUpdateData $updateData): void
    {
        $keyName = $relationDTO->related->getKeyName();
        $updatedIds = [];

        foreach ($relationDTO->data as $item) {
            Assert::isArray($item);
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            if (! isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
=======
=======
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
            if (!isset($item[$keyName])) {
=======
            if (! isset($item[$keyName])) {
>>>>>>> f1d4085 (.)
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
>>>>>>> ce6fc085 (.)
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
            $result = app(UpdateAction::class)->execute(
                $relationDTO->related,
                $itemData,
                []
            );
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
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
=======
=======
>>>>>>> origin/develop
            $result = app(UpdateAction::class)->execute(
                $relationDTO->related,
                $itemData,
                []
            );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
     * @param array<int|string> $updatedIds
     * @param array<int|string> $updatedIds
     * @param array<int|string> $updatedIds
     * @param array<int|string> $updatedIds
     * @param array<int|string> $updatedIds
     */
    private function cleanupOrphanedRecords(
        RelationData $relationDTO,
        HasManyUpdateData $updateData,
        array $updatedIds,
    ): void {
        if ($updatedIds) {
<<<<<<< HEAD
            $relationDTO
                ->related
                ->newQuery()
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
            $relationDTO
                ->related
                ->newQuery()
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
                ->where($updateData->foreignKey, $updateData->parentKey)
                ->whereNotIn($relationDTO->related->getKeyName(), $updatedIds)
                ->update([$updateData->foreignKey => null]);
        }
    }
}
