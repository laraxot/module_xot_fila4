<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Action per gestire in modo sicuro l'accesso agli attributi dei modelli Eloquent.
 *
 * Questa action centralizza la logica di accesso sicuro agli attributi per evitare:
 * - Uso di property_exists() con modelli Eloquent (anti-pattern)
 * - Errori di tipo con getAttribute() che restituisce mixed
 * - Duplicazione di logica di verifica attributi
 *
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di accesso attributi
 * - KISS: Metodi semplici e diretti
 * - Robustezza: Gestisce tutti i casi edge e mantiene type safety
 * - Laravel Way: Rispetta l'architettura Eloquent
 * - Assert: Utilizza webmozart/assert per validazioni robuste
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
 *
 * @package Modules\Xot\Actions\Cast
>>>>>>> 5a14301c (.)
=======
 *
 * @package Modules\Xot\Actions\Cast
>>>>>>> 5a14301c (.)
=======
 *
 * @package Modules\Xot\Actions\Cast
>>>>>>> 5a14301c (.)
=======
 *
 * @package Modules\Xot\Actions\Cast
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
 *
 * @package Modules\Xot\Actions\Cast
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
 */
class SafeAttributeCastAction
{
    use QueueableAction;

    /**
     * Verifica se un attributo esiste e ha un valore non null su un modello.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'attributo esiste e ha un valore non null
     */
    public function hasAttribute(Model $model, string $attribute): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);

        return $model->getAttribute($attribute) !== null;
    }

    /**
     * Verifica se un attributo esiste e ha un valore non vuoto su un modello.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'attributo esiste e ha un valore non vuoto
     */
    public function hasNonEmptyAttribute(Model $model, string $attribute): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);
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
        return $value !== null && $value !== '';
    }

    /**
     * Ottiene un attributo con cast sicuro a string.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string|null  $default  Valore di default se l'attributo non esiste o è null
     * @return string Il valore dell'attributo convertito in string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return string Il valore dell'attributo convertito in string
     */
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

        return (string) $value;
    }

    /**
     * Ottiene un attributo con cast sicuro a int.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  int|null  $default  Valore di default se l'attributo non esiste o è null
     * @return int Il valore dell'attributo convertito in int
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param int|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return int Il valore dell'attributo convertito in int
     */
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

        return app(SafeIntCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a float.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  float|null  $default  Valore di default se l'attributo non esiste o è null
     * @return float Il valore dell'attributo convertito in float
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param float|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return float Il valore dell'attributo convertito in float
     */
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

        return app(SafeFloatCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a boolean.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  bool|null  $default  Valore di default se l'attributo non esiste o è null
     * @return bool Il valore dell'attributo convertito in boolean
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param bool|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return bool Il valore dell'attributo convertito in boolean
     */
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

        return app(SafeBooleanCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a array.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  array|null  $default  Valore di default se l'attributo non esiste o è null
     * @return array Il valore dell'attributo convertito in array
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param array|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return array Il valore dell'attributo convertito in array
     */
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

        return app(SafeArrayCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a un tipo specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se l'attributo non esiste o è null
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato (string, int, float, bool, array)
     * @param mixed $default Valore di default se l'attributo non esiste o è null
     *
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
     * @return mixed Il valore dell'attributo convertito nel tipo specificato
     */
    public function getTypedAttribute(Model $model, string $attribute, string $type, mixed $default = null): mixed
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);

        return match ($type) {
            'string' => $this->getStringAttribute($model, $attribute, is_string($default) ? $default : null),
            'int' => $this->getIntAttribute($model, $attribute, is_int($default) ? $default : null),
            'float' => $this->getFloatAttribute($model, $attribute, is_float($default) ? $default : null),
            'bool' => $this->getBooleanAttribute($model, $attribute, is_bool($default) ? $default : null),
            'array' => $this->getArrayAttribute($model, $attribute, is_array($default) ? $default : null),
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
        };
    }

    /**
     * Verifica se un attributo esiste e ha un valore specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  mixed  $expectedValue  Il valore atteso
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param mixed $expectedValue Il valore atteso
     *
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
     * @return bool True se l'attributo esiste e ha il valore atteso
     */
    public function hasAttributeValue(Model $model, string $attribute, mixed $expectedValue): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::stringNotEmpty($attribute);

        $actualValue = $model->getAttribute($attribute);

=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $actualValue = $model->getAttribute($attribute);
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
        return $actualValue === $expectedValue;
    }

    /**
     * Ottiene un attributo con validazione di tipo e valore.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato
     * @param  callable|null  $validator  Funzione di validazione opzionale
     * @param  mixed  $default  Valore di default se la validazione fallisce
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato
     * @param callable|null $validator Funzione di validazione opzionale
     * @param mixed $default Valore di default se la validazione fallisce
     *
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
     * @return mixed Il valore dell'attributo validato e convertito
     */
    public function getValidatedAttribute(
        Model $model,
        string $attribute,
        string $type,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ?callable $validator = null,
        mixed $default = null,
    ): mixed {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        null|callable $validator = null,
        mixed $default = null,
    ): mixed {
        Assert::isInstanceOf($model, Model::class);
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
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);

        $value = $this->getTypedAttribute($model, $attribute, $type, $default);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($validator !== null && ! $validator($value)) {
=======
        if ($validator !== null && !$validator($value)) {
>>>>>>> 5a14301c (.)
=======
        if ($validator !== null && !$validator($value)) {
>>>>>>> 5a14301c (.)
=======
        if ($validator !== null && !$validator($value)) {
>>>>>>> 5a14301c (.)
=======
        if ($validator !== null && !$validator($value)) {
>>>>>>> 5a14301c (.)
            return $default;
        }

        return $value;
    }

    /**
     * Metodo statico per utilizzare hasNonEmptyAttribute.
     */
    public static function hasNonEmpty(Model $model, string $attribute): bool
    {
        return app(self::class)->hasNonEmptyAttribute($model, $attribute);
    }

    /**
     * Metodo statico per utilizzare getStringAttribute.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 5a14301c (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 399f46d3 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 17684f52 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 399f46d3 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 399f46d3 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> a12f125f4a (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> b93ef594b4 (.)
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> ca9324a4 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
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
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
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
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> ca9324a4 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 9db27d12 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 5a14301c (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> ca9324a4 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 5a14301c (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> ca9324a4 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 9db27d12 (.)
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> 53d6a6ba (.)
    {
        return app(self::class)->getStringAttribute($model, $attribute, $default);
    }
}
