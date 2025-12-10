<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
use Exception;
>>>>>>> 5a14301c (.)
=======
use Exception;
=======
use Exception;
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> 17684f52 (.)
=======
use Exception;
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> 17684f52 (.)
=======
use Exception;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> ca9324a4 (.)
=======
use Exception;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Exception;
>>>>>>> 9db27d12 (.)
=======
use Exception;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> ca9324a4 (.)
=======
use Exception;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Exception;
>>>>>>> 9db27d12 (.)
=======
use Exception;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Exception;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Exception;
>>>>>>> 9db27d12 (.)
=======
use Exception;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\ExtraContract;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\SchemalessAttributes\SchemalessAttributes;
=======
use Modules\Xot\Models\Extra;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\Extra;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\Extra;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\Extra;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\Extra;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\Extra;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']['.$extra_class.']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
>>>>>>> 3fbbf1f5 (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $extra_class . ']',
>>>>>>> 5a14301c (.)
        );
        // Assert::isInstanceOf($extra_class, ExtraContract::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');
        // Assert::implementsInterface($extra_class, ExtraContract::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');

        return $this->morphOne($extra_class, 'model');
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
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
    /**
     * @return array<string, mixed>|bool|int|string|null
     */
    public function getExtra(string $name): array|bool|int|string|null
    {
        if ($this->extra === null) {
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
        ) {
            /** @var array<string, mixed>|bool|int|string|null */
<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (\is_array($value)) {
            // PHPStan: Cast to ensure array<string, mixed> type
            /** @var array<string, mixed> $value */
            return $value;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        if ($value === null || \is_bool($value) || \is_string($value)) {
            return $value;
        }

        if (\is_int($value) || \is_float($value)) {
>>>>>>> fe347873 (.)
            return $value;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 399f46d3 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> a12f125f4a (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> b93ef594b4 (.)
=======
        throw new \Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
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
>>>>>>> 5a14301c (.)
=======
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> f1d4085 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> 71586de2 (.)
=======
<<<<<<< HEAD
=======
        if (\is_array($value)) {
            // PHPStan: Cast to ensure array<string, mixed> type
            /** @var array<string, mixed> $value */
            return $value;
        }

        if ($value === null || \is_bool($value) || \is_string($value)) {
            return $value;
        }

        if (\is_int($value) || \is_float($value)) {
>>>>>>> fe347873 (.)
            return $value;
        }
<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> ca9324a4 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> 71586de2 (.)
=======
            return $value;
        }
<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
>>>>>>> 3fbbf1f5 (.)
    }

    /**
     * @param  int|float|string|array<string, mixed>|bool|null  $value
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
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
        }
        Assert::notNull($extra);
        // $extra is asserted to be non-null above
        $extra->extra_attributes->set($name, $value);
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
        $extra->save();
    }
}
