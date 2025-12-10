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
use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use InvalidArgumentException;
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
use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
=======
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
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
=======
     * @param  Model  $model  The parent model
     * @param  RelationDTO  $relationDTO  Data transfer object containing relationship information
>>>>>>> 551c768c4 (.)
     *
<<<<<<< HEAD
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
=======
     * @throws InvalidArgumentException When relation type is invalid
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
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
=======
     * @param  array<string, mixed>  $data  The input data array
>>>>>>> 551c768c4 (.)
     * @return array<string, mixed> The prepared data array
     */
    private function prepareData(array $data): array
    {
        // Ensure the 'lang' key is set to the current locale if not provided
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        if (! isset($data['lang'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! isset($data['lang'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (!isset($data['lang'])) {
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
        if (!isset($data['lang'])) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! isset($data['lang'])) {
>>>>>>> 53d6a6ba (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        if (! isset($data['lang'])) {
>>>>>>> 551c768c4 (.)
            $data['lang'] = App::getLocale();
        }

        // Return the prepared data
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        return array_filter($data, static fn($value) => null !== $value);
=======
=======
=======
        return array_filter($data, static fn ($value) => $value !== null);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return array_filter($data, static fn ($value) => $value !== null);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        return array_filter($data, static fn($value) => null !== $value);
        return array_filter($data, static fn ($value) => null !== $value);
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
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
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return array_filter($data, static fn ($value) => $value !== null);
>>>>>>> 53d6a6ba (.)
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        return array_filter($data, static fn ($value) => $value !== null);
>>>>>>> 551c768c4 (.)
    }
}
