<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
=======
=======
>>>>>>> 399f46d3 (.)
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Action per gestire in modo sicuro i cast degli attributi Eloquent.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 *
 * Questa action sostituisce completamente l'uso di property_exists() con modelli Eloquent
 * fornendo metodi robusti e type-safe per l'accesso agli attributi.
 *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
 * 
 * Questa action sostituisce completamente l'uso di property_exists() con modelli Eloquent
 * fornendo metodi robusti e type-safe per l'accesso agli attributi.
 * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
 *
 * Questa action sostituisce completamente l'uso di property_exists() con modelli Eloquent
 * fornendo metodi robusti e type-safe per l'accesso agli attributi.
 *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast attributi
 * - KISS: Metodi semplici e diretti
 * - Robustezza: Gestisce tutti i casi edge e mantiene type safety
 * - Laravel Way: Rispetta l'architettura Eloquent
 * - Assert: Utilizza webmozart/assert per validazioni robuste
 * - NO property_exists: Mai utilizzare property_exists con modelli Eloquent
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @package Modules\Xot\Actions\Cast
>>>>>>> 5a14301c (.)
 */
class SafeEloquentCastAction
{
    use QueueableAction;

    /**
     * Verifica se un attributo esiste su un modello Eloquent.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'attributo esiste
     */
    public function hasAttribute(Model $model, string $attribute): bool
    {
<<<<<<< HEAD
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Usa getAttribute invece di property_exists per evitare falsi positivi
        return $model->getAttribute($attribute) !== null;
    }

    /**
     * Verifica se un attributo esiste e ha un valore non vuoto.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

=======
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $value = $model->getAttribute($attribute);
>>>>>>> 5a14301c (.)
        return $value !== null && $value !== '';
    }

    /**
     * Ottiene un attributo con cast sicuro a string.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string|null  $default  Valore di default se l'attributo non esiste o è null
     * @return string Il valore dell'attributo convertito in string
     */
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return string Il valore dell'attributo convertito in string
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

<<<<<<< HEAD
=======
=======
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
=======
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? '';
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return (string) $value;
    }

    /**
     * Ottiene un attributo con cast sicuro a int.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  int|null  $default  Valore di default se l'attributo non esiste o è null
     * @return int Il valore dell'attributo convertito in int
     */
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param int|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return int Il valore dell'attributo convertito in int
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

<<<<<<< HEAD
=======
=======
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
=======
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? 0;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return app(SafeIntCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a float.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  float|null  $default  Valore di default se l'attributo non esiste o è null
     * @return float Il valore dell'attributo convertito in float
     */
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param float|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return float Il valore dell'attributo convertito in float
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
=======
=======
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
=======
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? 0.0;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return app(SafeFloatCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a boolean.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  bool|null  $default  Valore di default se l'attributo non esiste o è null
     * @return bool Il valore dell'attributo convertito in boolean
     */
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param bool|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return bool Il valore dell'attributo convertito in boolean
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

<<<<<<< HEAD
=======
=======
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
=======
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? false;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return app(SafeBooleanCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a array.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  array|null  $default  Valore di default se l'attributo non esiste o è null
     * @return array Il valore dell'attributo convertito in array
     */
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param array|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return array Il valore dell'attributo convertito in array
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
=======
=======
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
=======
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? [];
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return app(SafeArrayCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a un tipo specifico.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se l'attributo non esiste o è null
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato (string, int, float, bool, array)
     * @param mixed $default Valore di default se l'attributo non esiste o è null
     *
>>>>>>> 5a14301c (.)
     * @return mixed Il valore dell'attributo convertito nel tipo specificato
     */
    public function getTypedAttribute(Model $model, string $attribute, string $type, mixed $default = null): mixed
    {
<<<<<<< HEAD
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return match ($type) {
            'string' => $this->getStringAttribute($model, $attribute, is_string($default) ? $default : ''),
            'int' => $this->getIntAttribute($model, $attribute, is_int($default) ? $default : 0),
            'float' => $this->getFloatAttribute($model, $attribute, is_float($default) ? $default : 0.0),
            'bool' => $this->getBooleanAttribute($model, $attribute, is_bool($default) ? $default : false),
            'array' => $this->getArrayAttribute($model, $attribute, is_array($default) ? $default : []),
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}")
>>>>>>> a12f125f4a (.)
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
>>>>>>> b93ef594b4 (.)
=======
            default => throw new \InvalidArgumentException("Tipo non supportato: {$type}")
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        };
    }

    /**
     * Verifica se un attributo esiste e ha un valore specifico.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  mixed  $expectedValue  Il valore atteso
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param mixed $expectedValue Il valore atteso
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'attributo esiste e ha il valore atteso
     */
    public function hasAttributeValue(Model $model, string $attribute, mixed $expectedValue): bool
    {
<<<<<<< HEAD
        Assert::stringNotEmpty($attribute);

        $actualValue = $model->getAttribute($attribute);

=======
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $actualValue = $model->getAttribute($attribute);
>>>>>>> 5a14301c (.)
        return $actualValue === $expectedValue;
    }

    /**
     * Ottiene un attributo con validazione di tipo e valore.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato
     * @param  callable|null  $validator  Funzione di validazione opzionale
     * @param  mixed  $default  Valore di default se la validazione fallisce
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato
     * @param callable|null $validator Funzione di validazione opzionale
     * @param mixed $default Valore di default se la validazione fallisce
     *
>>>>>>> 5a14301c (.)
     * @return mixed Il valore dell'attributo validato e convertito
     */
    public function getValidatedAttribute(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Model $model,
        string $attribute,
        string $type,
<<<<<<< HEAD
        ?callable $validator = null,
        mixed $default = null,
    ): mixed {
=======
        null|callable $validator = null,
        mixed $default = null,
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        Model $model, 
        string $attribute, 
        string $type, 
        ?callable $validator = null,
        mixed $default = null
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    ): mixed {
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $value = $this->getTypedAttribute($model, $attribute, $type, $default);

<<<<<<< HEAD
        if ($validator !== null && ! $validator($value)) {
=======
        if ($validator !== null && !$validator($value)) {
>>>>>>> 5a14301c (.)
            return $default;
        }

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $value = $this->getTypedAttribute($model, $attribute, $type, $default);

        if ($validator !== null && !$validator($value)) {
            return $default;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $value = $this->getTypedAttribute($model, $attribute, $type, $default);
        
        if ($validator !== null && !$validator($value)) {
            return $default;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $value;
    }

    /**
     * Verifica se un attributo esiste e soddisfa una condizione.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  callable  $condition  La condizione da verificare
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param callable $condition La condizione da verificare
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'attributo esiste e soddisfa la condizione
     */
    public function hasAttributeCondition(Model $model, string $attribute, callable $condition): bool
    {
<<<<<<< HEAD
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return false;
        }

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return false;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return false;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return (bool) $condition($value);
    }

    /**
     * Ottiene un attributo con fallback a un altro attributo se il primo è null.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $primaryAttribute  L'attributo primario
     * @param  string  $fallbackAttribute  L'attributo di fallback
     * @param  string  $type  Il tipo di cast desiderato
     * @param  mixed  $default  Valore di default se entrambi gli attributi sono null
=======
     * @param Model $model Il modello Eloquent
     * @param string $primaryAttribute L'attributo primario
     * @param string $fallbackAttribute L'attributo di fallback
     * @param string $type Il tipo di cast desiderato
     * @param mixed $default Valore di default se entrambi gli attributi sono null
     *
>>>>>>> 5a14301c (.)
     * @return mixed Il valore dell'attributo primario o di fallback
     */
    public function getAttributeWithFallback(
        Model $model,
        string $primaryAttribute,
        string $fallbackAttribute,
        string $type,
<<<<<<< HEAD
        mixed $default = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        mixed $default = null,
=======
        mixed $default = null
>>>>>>> a12f125f4a (.)
=======
        mixed $default = null,
>>>>>>> b93ef594b4 (.)
=======
        mixed $default = null
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    ): mixed {
<<<<<<< HEAD
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($primaryAttribute);
        Assert::stringNotEmpty($fallbackAttribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $primaryValue = $model->getAttribute($primaryAttribute);

        if ($primaryValue !== null) {
            return $this->getTypedAttribute($model, $primaryAttribute, $type, $default);
        }

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $primaryValue = $model->getAttribute($primaryAttribute);

        if ($primaryValue !== null) {
            return $this->getTypedAttribute($model, $primaryAttribute, $type, $default);
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $primaryValue = $model->getAttribute($primaryAttribute);
        
        if ($primaryValue !== null) {
            return $this->getTypedAttribute($model, $primaryAttribute, $type, $default);
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $this->getTypedAttribute($model, $fallbackAttribute, $type, $default);
    }

    /**
     * Metodo di convenienza per ottenere attributi con cast sicuro.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato
     * @param  mixed  $default  Valore di default
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato
     * @param mixed $default Valore di default
     *
>>>>>>> 5a14301c (.)
     * @return mixed Il valore dell'attributo convertito
     */
    public static function get(Model $model, string $attribute, string $type, mixed $default = null): mixed
    {
        return app(self::class)->getTypedAttribute($model, $attribute, $type, $default);
    }

    /**
     * Metodo di convenienza per verificare l'esistenza di attributi.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
=======
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'attributo esiste
     */
    public static function has(Model $model, string $attribute): bool
    {
        return app(self::class)->hasAttribute($model, $attribute);
    }
}
