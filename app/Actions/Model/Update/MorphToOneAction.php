<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use InvalidArgumentException;
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
use InvalidArgumentException;
use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  The parent model
     * @param  RelationDTO  $relationDTO  Data transfer object containing relationship information
=======
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
     *
     * @throws InvalidArgumentException When relation type is invalid
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  The input data array
=======
     * @param array<string, mixed> $data The input data array
     *
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data The input data array
     *
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data The input data array
     *
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data The input data array
     *
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data The input data array
     *
>>>>>>> 5a14301c (.)
     * @return array<string, mixed> The prepared data array
     */
    private function prepareData(array $data): array
    {
        // Ensure the 'lang' key is set to the current locale if not provided
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
=======
>>>>>>> 21348520 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> ca9324a4 (.)
=======
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 9db27d12 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 5a14301c (.)
=======
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> ca9324a4 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 5a14301c (.)
=======
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> ca9324a4 (.)
=======
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
        if (! isset($data['lang'])) {
>>>>>>> 71586de2 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 5a14301c (.)
=======
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
            $data['lang'] = App::getLocale();
        }

        // Return the prepared data
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6dcebf8a (.)
        return array_filter($data, static fn ($value) => $value !== null);
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 5a14301c (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 3fbbf1f5 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 17684f52 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> a12f125f4a (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> b93ef594b4 (.)
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> ca9324a4 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> ca9324a4 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 9db27d12 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 5a14301c (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> ca9324a4 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 5a14301c (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> ca9324a4 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
        return array_filter($data, static fn ($value) => $value !== null);
>>>>>>> 71586de2 (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 5a14301c (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    }
}
