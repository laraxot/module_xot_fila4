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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\App;
use InvalidArgumentException;
use Modules\Xot\Datas\RelationData as RelationDTO;
use RuntimeException;
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
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
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
use InvalidArgumentException;
use RuntimeException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\App;
use Modules\Xot\Datas\RelationData as RelationDTO;
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
     * @param  Model  $model  The model instance
     * @param  RelationDTO  $relationDTO  The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     *
     * @throws InvalidArgumentException When relation is not MorphOne
     * @throws RuntimeException When data array is invalid
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  The model instance
     * @param  RelationDTO  $relationDTO  The relation data transfer object
=======
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
>>>>>>> 5a14301c (.)
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException When relation is not MorphOne
     * @throws RuntimeException When data array is invalid
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException When relation is not MorphOne
     * @throws RuntimeException When data array is invalid
=======
     * @throws \InvalidArgumentException When relation is not MorphOne
     * @throws \RuntimeException         When data array is invalid
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  The input data array
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
=======
<<<<<<< HEAD
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
=======
     * @param array<string, mixed> $data The input data array
     *
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @return array<string, mixed> The validated and prepared data
     */
    private function validateAndPrepareData(array $data): array
    {
        // Ensure the 'lang' key is set to the current locale if not provided
<<<<<<< HEAD
        if (! isset($data['lang'])) {
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
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!isset($data['lang'])) {
>>>>>>> 399f46d3 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 17684f52 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 399f46d3 (.)
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
=======
>>>>>>> 88ea7103 (.)
=======
        if (! isset($data['lang'])) {
=======
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
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
=======
        if (!isset($data['lang'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            $data['lang'] = App::getLocale();
        }

        // Remove null values from the data array
<<<<<<< HEAD
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn ($value): bool => $value !== null);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return array_filter($data, static fn ($value): bool => $value !== null);
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
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
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return array_filter($data, static fn($value): bool => null !== $value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 17684f52 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 399f46d3 (.)
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
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> ed734516 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 7131bd09 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> ed734516 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> ed734516 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 7131bd09 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 17684f52 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
>>>>>>> 399f46d3 (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
=======
        return array_filter($data, static fn($value): bool => null !== $value);
=======
>>>>>>> ed734516 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
=======
>>>>>>> ed734516 (.)
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
>>>>>>> 71586de2 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> ab8cc3f3 (.)
=======
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        return array_filter($data, static fn ($value): bool => $value !== null);
>>>>>>> 71586de2 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> laraxot/develop
    }
}
