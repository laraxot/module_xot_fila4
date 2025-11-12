<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\ExtraContract;
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
            '['.__LINE__.']['.class_basename($this).']['.$extra_class.']',
        );
        // Assert::isInstanceOf($extra_class, ExtraContract::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');
        // Assert::implementsInterface($extra_class, ExtraContract::class, '['.__LINE__.']['.class_basename($this).']['.$extra_class.']');

        return $this->morphOne($extra_class, 'model');
    }

    /**
     * @return array<string, mixed>|bool|float|int|string|null
     */
    public function getExtra(string $name): array|bool|float|int|string|null
    {
<<<<<<< HEAD
        if ($this->extra === null || $this->extra->extra_attributes === null) {
=======
        if ($this->extra === null) {
>>>>>>> f1570712 (.)
            return null;
        }
        // PHPStan Level 10: extra_attributes is non-nullable, use -> instead of ?->
        $value = $this->extra->extra_attributes->get($name);

<<<<<<< HEAD
        return $this->normalizeExtraValue($value);
    }
    
    /**
     * Normalize the extra value to a supported type.
     *
     * @param mixed $value
     * @return array<string, mixed>|bool|float|int|string|null
     */
    private function normalizeExtraValue($value): array|bool|float|int|string|null
    {
        if (\is_array($value)) {
            // PHPStan: Cast to ensure array<string, mixed> type
            /** @var array<string, mixed> $value */
            return $value;
        }

        if ($value === null || \is_bool($value) || \is_string($value)) {
            return $value;
        }

        if (\is_int($value) || \is_float($value)) {
            return $value;
        }

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
            return $value;
        }

>>>>>>> f1570712 (.)
        throw new \Exception('['.__LINE__.']['.__CLASS__.']');
    }

    /**
     * @param  int|float|string|array<string, mixed>|bool|null  $value
     */
    public function setExtra(string $name, $value): void
    {
        $extra = $this->extra;
        if ($this->extra === null) {
            // $extra = $this->extra()->firstOrCreate([], ['extra_attributes' => []]);
            $extra = $this->extra()->firstOrCreate([], ['extra_attributes' => json_encode([])]);
            Assert::implementsInterface(
                $extra,
                ExtraContract::class,
                '['.__LINE__.']['.class_basename($this).']['.$extra.']',
            );
        }
        Assert::notNull($extra);
        // PHPStan Level 10: extra_attributes is non-nullable after assertion
        $extra->extra_attributes->set($name, $value);
        $extra->save();
    }
}
