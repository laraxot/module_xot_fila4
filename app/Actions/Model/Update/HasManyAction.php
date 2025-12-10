<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use InvalidArgumentException;
use InvalidArgumentException;
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $query->where($updateData->foreignKey, $updateData->parentKey)->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query
                ->whereIn($relationDTO->related->getKeyName(), $toIds)
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        $query->where($updateData->foreignKey, $updateData->parentKey)
            ->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query->whereIn($relationDTO->related->getKeyName(), $toIds)
<<<<<<< HEAD
        $query->where($updateData->foreignKey, $updateData->parentKey)->update([$updateData->foreignKey => null]);

        $toIds = $relationDTO->data['to'] ?? [];
        if ($toIds) {
            $query
                ->whereIn($relationDTO->related->getKeyName(), $toIds)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            if (! isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (!isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
<<<<<<< HEAD
            if (! isset($item[$keyName])) {
            if (! isset($item[$keyName])) {
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
                continue;
            }

            /** @var array<string, mixed> $itemData */
            $itemData = array_merge($item, [
                $updateData->foreignKey => $updateData->parentKey,
            ]);

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
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
=======
            $result = app(UpdateAction::class)->execute(
                $relationDTO->related,
                $itemData,
                []
            );
>>>>>>> f1d4085 (.)
=======
            $result = app(UpdateAction::class)->execute($relationDTO->related, $itemData, []);
>>>>>>> 73eab74 (.)

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
<<<<<<< HEAD
            $relationDTO
                ->related
                ->newQuery()
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
            $relationDTO
                ->related
                ->newQuery()
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                ->where($updateData->foreignKey, $updateData->parentKey)
                ->whereNotIn($relationDTO->related->getKeyName(), $updatedIds)
                ->update([$updateData->foreignKey => null]);
        }
    }
}
