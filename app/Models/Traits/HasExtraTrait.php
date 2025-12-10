<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

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
=======
>>>>>>> ce6fc085 (.)
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
<<<<<<< HEAD
use Exception;
=======
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
use Exception;
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
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
<<<<<<< HEAD
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
use Exception;
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Extra;
use Modules\Xot\Models\Extra;
use Modules\Xot\Models\Extra;
use Modules\Xot\Models\Extra;
use Modules\Xot\Models\Extra;
use Webmozart\Assert\Assert;

use function Safe\json_encode;

/**
 * Modules\Xot\Models\HasExtraTrait.
 *
 * @property string $currency
 * @property float $price
 * @property string $price_complete
 * @property int $qty
 * @property ExtraContract|null $extra
 */
trait HasExtraTrait
{
    /**
     * Retrieves the morphed one-to-one relationship between the current model and the Extra model.
     *
     * return MorphOne<ExtraContract>
     */
    public function extra(): MorphOne
    {
        $extra_class = Str::of(static::class)
            ->before('\Models\\')
            ->append('\Models\Extra')
            ->toString();
        Assert::classExists($extra_class);
        Assert::isAOf(
            $extra_class,
            Model::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isAOf($extra_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');
=======
=======
        Assert::isAOf($extra_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
        Assert::isAOf($extra_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
        Assert::isAOf($extra_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::isAOf($extra_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        // Assert::isInstanceOf($extra_class, ExtraContract::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');
        // Assert::implementsInterface($extra_class, ExtraContract::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');

        return $this->morphOne($extra_class, 'model');
    }

    public function getExtra(string $name): array|bool|float|int|string|null
    {
        $extra = $this->extra;
        if (! $extra instanceof ExtraContract || ! $extra instanceof Model) {
            return null;
        }

        $attributes = $extra->extra_attributes;
        if (! $attributes instanceof SchemalessAttributes) {
            return null;
        }

        $value = $attributes->get($name);

        if (\is_array($value)) {
            return $value;
        }

        if (\is_bool($value) || \is_float($value) || \is_int($value) || \is_string($value)) {
            return $value;
        }

        return null;
    /**
     * @return array<string, mixed>|bool|int|string|null
     */
    public function getExtra(string $name): array|bool|int|string|null
    {
        if ($this->extra === null) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        if ($this->extra == null) {
=======
=======

        if ($this->extra == null) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        if ($this->extra === null) {
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->extra === null) {
=======

        if ($this->extra == null) {
>>>>>>> a12f125f4a (.)
=======
        if ($this->extra === null) {
>>>>>>> b93ef594b4 (.)
=======

        if ($this->extra == null) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            return null;
        }
        $value = $this->extra->extra_attributes->get($name);
        if (
            is_array($value) ||
                is_int($value) ||
                // || is_float($value)
                is_null($value) ||
                is_bool($value) ||
                is_string($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
            is_array($value) || is_int($value)
            // || is_float($value)
            || is_null($value) || is_bool($value)
            || is_string($value)
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        ) {
            /** @var array<string, mixed>|bool|int|string|null */

        if ($value === null || \is_bool($value) || \is_string($value)) {
            return $value;
        }

        if (\is_int($value) || \is_float($value)) {
            return $value;
        }
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new \Exception('['.__LINE__.']['.__CLASS__.']');
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
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ce6fc085 (.)
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
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
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
<<<<<<< HEAD
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
            return $value;
        }
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
            return $value;
        }
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
    }

    /**
     * @param  int|float|string|array<string, mixed>|bool|null  $value
     */
    public function setExtra(string $name, int|float|string|array|bool|null $value): void
    {
        $extra = $this->extra;
        if (! $extra instanceof ExtraContract || ! $extra instanceof Model) {
            $extra = $this->extra()->firstOrCreate([], ['extra_attributes' => json_encode([])]);
            if (! $extra instanceof ExtraContract || ! $extra instanceof Model) {
                return;
            }
        }

        $attributes = $extra->extra_attributes;
        if (! $attributes instanceof SchemalessAttributes) {
            $extra->extra_attributes = $attributes = new SchemalessAttributes($extra, 'extra_attributes');
        }

        $attributes->set($name, $value);
     * @return void
     */
    public function setExtra(string $name, $value)
    {
        $extra = $this->extra;
        if ($this->extra === null) {
            // $extra = $this->extra()->firstOrCreate([], ['extra_attributes' => []]);
            $extra = $this->extra()->firstOrCreate([], ['extra_attributes' => json_encode([])]);
            Assert::implementsInterface(
                $extra,
                ExtraContract::class,
                '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra . ']',
            );
<<<<<<< HEAD
<<<<<<< HEAD
            $extra = $this->extra()
                ->firstOrCreate([], ['extra_attributes' => json_encode([])]);
            Assert::implementsInterface($extra, ExtraContract::class, '['.__LINE__.']['.class_basename($this).']['.$extra.']');
        }
        Assert::notNull($extra);
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        }
        Assert::notNull($extra);
        // $extra is asserted to be non-null above
        $extra->extra_attributes->set($name, $value);
        $extra->save();
    }
}
