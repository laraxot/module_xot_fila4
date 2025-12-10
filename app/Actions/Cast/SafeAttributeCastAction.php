<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

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
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Action per gestire in modo sicuro l'accesso agli attributi dei modelli Eloquent.
<<<<<<< HEAD
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
 * Questa action centralizza la logica di accesso sicuro agli attributi per evitare:
 * - Uso di property_exists() con modelli Eloquent (anti-pattern)
 * - Errori di tipo con getAttribute() che restituisce mixed
 * - Duplicazione di logica di verifica attributi
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
 *
<<<<<<< HEAD
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
 *
>>>>>>> 73eab74 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
 * Questa action centralizza la logica di accesso sicuro agli attributi per evitare:
 * - Uso di property_exists() con modelli Eloquent (anti-pattern)
 * - Errori di tipo con getAttribute() che restituisce mixed
 * - Duplicazione di logica di verifica attributi
<<<<<<< HEAD
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di accesso attributi
 * - KISS: Metodi semplici e diretti
 * - Robustezza: Gestisce tutti i casi edge e mantiene type safety
 * - Laravel Way: Rispetta l'architettura Eloquent
 * - Assert: Utilizza webmozart/assert per validazioni robuste
<<<<<<< HEAD
 *
 *
 * 
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
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
 *
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
 */
class SafeAttributeCastAction
{
    use QueueableAction;

    /**
     * Verifica se un attributo esiste e ha un valore non null su un modello.
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @return bool True se l'attributo esiste e ha un valore non null
     */
    public function hasAttribute(Model $model, string $attribute): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
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
>>>>>>> ce6fc085 (.)
        return $model->getAttribute($attribute) !== null;
    }

    /**
     * Verifica se un attributo esiste e ha un valore non vuoto su un modello.
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     *
     * @return bool True se l'attributo esiste e ha un valore non vuoto
     */
    public function hasNonEmptyAttribute(Model $model, string $attribute): bool
    {
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
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
>>>>>>> ce6fc085 (.)
        $value = $model->getAttribute($attribute);
        return $value !== null && $value !== '';
    }

    /**
     * Ottiene un attributo con cast sicuro a string.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string|null  $default  Valore di default se l'attributo non esiste o è null
     * @return string Il valore dell'attributo convertito in string
     */
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? '';
        }
        
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        return (string) $value;
    }

    /**
     * Ottiene un attributo con cast sicuro a int.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  int|null  $default  Valore di default se l'attributo non esiste o è null
     * @return int Il valore dell'attributo convertito in int
     */
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? 0;
        }
        
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        return app(SafeIntCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a float.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  float|null  $default  Valore di default se l'attributo non esiste o è null
     * @return float Il valore dell'attributo convertito in float
     */
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? 0.0;
        }
        
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        return app(SafeFloatCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a boolean.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  bool|null  $default  Valore di default se l'attributo non esiste o è null
     * @return bool Il valore dell'attributo convertito in boolean
     */
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? false;
        }
        
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        return app(SafeBooleanCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a array.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  array|null  $default  Valore di default se l'attributo non esiste o è null
     * @return array Il valore dell'attributo convertito in array
     */
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
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
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? [];
        }
        
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        return app(SafeArrayCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a un tipo specifico.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se l'attributo non esiste o è null
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato (string, int, float, bool, array)
     * @param mixed $default Valore di default se l'attributo non esiste o è null
     *
     * @return mixed Il valore dell'attributo convertito nel tipo specificato
     */
    public function getTypedAttribute(Model $model, string $attribute, string $type, mixed $default = null): mixed
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
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
>>>>>>> ce6fc085 (.)
        return match ($type) {
            'string' => $this->getStringAttribute($model, $attribute, is_string($default) ? $default : null),
            'int' => $this->getIntAttribute($model, $attribute, is_int($default) ? $default : null),
            'float' => $this->getFloatAttribute($model, $attribute, is_float($default) ? $default : null),
            'bool' => $this->getBooleanAttribute($model, $attribute, is_bool($default) ? $default : null),
            'array' => $this->getArrayAttribute($model, $attribute, is_array($default) ? $default : null),
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            default => throw new \InvalidArgumentException("Tipo non supportato: {$type}")
=======
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}")
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
        };
    }

    /**
     * Verifica se un attributo esiste e ha un valore specifico.
     *
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param mixed $expectedValue Il valore atteso
     *
     * @return bool True se l'attributo esiste e ha il valore atteso
     */
    public function hasAttributeValue(Model $model, string $attribute, mixed $expectedValue): bool
    {
        Assert::stringNotEmpty($attribute);

        $actualValue = $model->getAttribute($attribute);

        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
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
>>>>>>> ce6fc085 (.)
        $actualValue = $model->getAttribute($attribute);
        return $actualValue === $expectedValue;
    }

    /**
     * Ottiene un attributo con validazione di tipo e valore.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato
     * @param  callable|null  $validator  Funzione di validazione opzionale
     * @param  mixed  $default  Valore di default se la validazione fallisce
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato
     * @param callable|null $validator Funzione di validazione opzionale
     * @param mixed $default Valore di default se la validazione fallisce
     *
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
        null|callable $validator = null,
        mixed $default = null,
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
        Model $model, 
        string $attribute, 
        string $type, 
        ?callable $validator = null,
        mixed $default = null
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
    ): mixed {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $value = $this->getTypedAttribute($model, $attribute, $type, $default);

        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
            return $default;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        $value = $this->getTypedAttribute($model, $attribute, $type, $default);

        if ($validator !== null && !$validator($value)) {
            return $default;
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        
        $value = $this->getTypedAttribute($model, $attribute, $type, $default);
        
        if ($validator !== null && !$validator($value)) {
            return $default;
        }
        
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
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
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
=======
=======
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 88ea7103 (.)
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
<<<<<<< HEAD
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    {
        return app(self::class)->getStringAttribute($model, $attribute, $default);
    }
}
