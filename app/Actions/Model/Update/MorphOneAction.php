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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\App;
use InvalidArgumentException;
use Modules\Xot\Datas\RelationData as RelationDTO;
use RuntimeException;
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
use RuntimeException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\App;
use Modules\Xot\Datas\RelationData as RelationDTO;
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
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     *
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
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
     * @return array<string, mixed> The validated and prepared data
     */
    private function validateAndPrepareData(array $data): array
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

        // Remove null values from the data array
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
        return array_filter($data, static fn ($value): bool => $value !== null);
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
        return array_filter($data, static fn ($value): bool => $value !== null);
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
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
=======
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
>>>>>>> ed734516 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 7131bd09 (.)
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    }
}
