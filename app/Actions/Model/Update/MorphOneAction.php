<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\App;
use InvalidArgumentException;
use Modules\Xot\Datas\RelationData as RelationDTO;
use RuntimeException;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Class MorphOneAction.
 *
 * Handles morphOne relationship updates and creation with strict typing.
 */
final class MorphOneAction
{
    use QueueableAction;

    /**
     * Execute the morphOne relationship action.
     *
     * @param  Model  $model  The model instance
     * @param  RelationDTO  $relationDTO  The relation data transfer object
     *
     * @throws InvalidArgumentException When relation is not MorphOne
     * @throws RuntimeException When data array is invalid
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Validate the relation is an instance of MorphOne
        $relation = $model->{$relationDTO->name}();
        Assert::isInstanceOf($relation, MorphOne::class, 'Relation must be an instance of MorphOne.');

        // Validate and prepare the data
        $data = $this->validateAndPrepareData($relationDTO->data);

        // Update or create the related model
        if ($relation->exists()) {
            $relation->update($data);
        } else {
            $relation->create($data);
        }
    }

    /**
     * Validate and prepare the data array.
     *
     * @param  array<string, mixed>  $data  The input data array
     * @return array<string, mixed> The validated and prepared data
     */
    private function validateAndPrepareData(array $data): array
    {
        // Ensure the 'lang' key is set to the current locale if not provided
<<<<<<< HEAD
        if (! isset($data['lang'])) {
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
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! isset($data['lang'])) {
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        if (!isset($data['lang'])) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            $data['lang'] = App::getLocale();
        }

        // Remove null values from the data array
<<<<<<< HEAD
        return array_filter($data, static fn ($value): bool => $value !== null);
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
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 5a14301c (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 3fbbf1f5 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return array_filter($data, static fn($value): bool => null !== $value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> ed734516 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return array_filter($data, static fn($value): bool => null !== $value);
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> b93ef594b4 (.)
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> ca9324a4 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    }
}
