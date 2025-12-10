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
use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException When relation type is invalid
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException When relation type is invalid
=======
     * @throws \InvalidArgumentException When relation type is invalid
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
=======
>>>>>>> a67e542f (.)
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
=======
=======
        if (! isset($data['lang'])) {
=======
        if (!isset($data['lang'])) {
>>>>>>> 5a14301c (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!isset($data['lang'])) {
=======
        if (!isset($data['lang'])) {
>>>>>>> 399f46d3 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 17684f52 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 399f46d3 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> a12f125f4a (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> b93ef594b4 (.)
=======
        if (! isset($data['lang'])) {
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
        return array_filter($data, static fn ($value) => $value !== null);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn($value) => null !== $value);
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    }
}
