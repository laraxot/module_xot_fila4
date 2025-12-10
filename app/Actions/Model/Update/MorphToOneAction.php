<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use InvalidArgumentException;
use InvalidArgumentException;
use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Class MorphToOneAction.
 *
 * Handles the creation of MorphToOne relationship records.
 *
 * @template TModel of Model
 */
class MorphToOneAction
{
    use QueueableAction;

    /**
     * Execute the action to create a MorphToOne relationship.
     *
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     *
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Validate the relationship type
        $relation = $model->{$relationDTO->name}();
        Assert::isInstanceOf($relation, MorphToOne::class, 'Relation must be an instance of MorphToOne.');

        // Prepare the data for creation
        $data = $this->prepareData($relationDTO->data);

        // Create the related record
        $relation->create($data);
    }

    /**
     * Prepare the data array for creation.
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @return array<string, mixed> The prepared data array
     */
    private function prepareData(array $data): array
    {
        // Ensure the 'lang' key is set to the current locale if not provided
<<<<<<< HEAD
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
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
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
<<<<<<< HEAD
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> ca9324a4 (.)
=======
        if (!isset($data['lang'])) {
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
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
<<<<<<< HEAD
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
=======
>>>>>>> ca9324a4 (.)
=======
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
            $data['lang'] = App::getLocale();
        }

        // Return the prepared data
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
<<<<<<< HEAD
=======
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
>>>>>>> 218dfed3 (.)
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
<<<<<<< HEAD
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
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
<<<<<<< HEAD
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
=======
>>>>>>> ca9324a4 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    }
}
