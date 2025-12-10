<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
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
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
>>>>>>> 551c768c4 (.)
=======
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
>>>>>>> 414a4ffcb (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Action per gestire in modo sicuro i cast degli attributi Eloquent.
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
 *
 * Questa action sostituisce completamente l'uso di property_exists() con modelli Eloquent
 * fornendo metodi robusti e type-safe per l'accesso agli attributi.
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
 * 
 * Questa action sostituisce completamente l'uso di property_exists() con modelli Eloquent
 * fornendo metodi robusti e type-safe per l'accesso agli attributi.
 * 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
 *
 * Questa action sostituisce completamente l'uso di property_exists() con modelli Eloquent
 * fornendo metodi robusti e type-safe per l'accesso agli attributi.
 *
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
=======
>>>>>>> 9db27d12 (.)
 *
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
 * @package Modules\Xot\Actions\Cast
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
 */
class SafeEloquentCastAction
{
    use QueueableAction;

    /**
     * Verifica se un attributo esiste su un modello Eloquent.
     *
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
>>>>>>> 551c768c4 (.)
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
>>>>>>> 414a4ffcb (.)
     * @return bool True se l'attributo esiste
     */
    public function hasAttribute(Model $model, string $attribute): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        Assert::stringNotEmpty($attribute);
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
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD

>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        // Usa getAttribute invece di property_exists per evitare falsi positivi
        return $model->getAttribute($attribute) !== null;
    }

    /**
     * Verifica se un attributo esiste e ha un valore non vuoto.
     *
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
>>>>>>> 551c768c4 (.)
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
>>>>>>> 414a4ffcb (.)
     * @return bool True se l'attributo esiste e ha un valore non vuoto
     */
    public function hasNonEmptyAttribute(Model $model, string $attribute): bool
    {
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        $value = $model->getAttribute($attribute);

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
        $value = $model->getAttribute($attribute);
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return string Il valore dell'attributo convertito in string
     */
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
=======
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
=======
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
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

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

=======
>>>>>>> 414a4ffcb (.)
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

<<<<<<< HEAD
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
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
>>>>>>> d2b0a27 (.)
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 551c768c4 (.)
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)

=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param int|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return int Il valore dell'attributo convertito in int
     */
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
=======
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
=======
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
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

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

=======
>>>>>>> 414a4ffcb (.)
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

<<<<<<< HEAD
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
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
>>>>>>> d2b0a27 (.)
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 551c768c4 (.)
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)

=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param float|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return float Il valore dell'attributo convertito in float
     */
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
=======
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
=======
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
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

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

=======
>>>>>>> 414a4ffcb (.)
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
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
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
>>>>>>> d2b0a27 (.)
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 551c768c4 (.)
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)

=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param bool|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return bool Il valore dell'attributo convertito in boolean
     */
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
=======
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
=======
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
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

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

=======
>>>>>>> 414a4ffcb (.)
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

<<<<<<< HEAD
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
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
>>>>>>> d2b0a27 (.)
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 551c768c4 (.)
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)

=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param array|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return array Il valore dell'attributo convertito in array
     */
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
=======
=======
=======
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
=======
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
>>>>>>> 7468a7d2 (.)
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
    {
        Assert::isInstanceOf($model, Model::class);
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
=======
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
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        Assert::isInstanceOf($model, Model::class);
=======
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
>>>>>>> 414a4ffcb (.)
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 551c768c4 (.)
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
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
=======
>>>>>>> 091f883c (.)
=======
=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        return app(SafeArrayCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a un tipo specifico.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se l'attributo non esiste o è null
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato (string, int, float, bool, array)
     * @param mixed $default Valore di default se l'attributo non esiste o è null
     *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     * @return mixed Il valore dell'attributo convertito nel tipo specificato
     */
    public function getTypedAttribute(Model $model, string $attribute, string $type, mixed $default = null): mixed
    {
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 414a4ffcb (.)
        return match ($type) {
            'string' => $this->getStringAttribute($model, $attribute, is_string($default) ? $default : ''),
            'int' => $this->getIntAttribute($model, $attribute, is_int($default) ? $default : 0),
            'float' => $this->getFloatAttribute($model, $attribute, is_float($default) ? $default : 0.0),
            'bool' => $this->getBooleanAttribute($model, $attribute, is_bool($default) ? $default : false),
            'array' => $this->getArrayAttribute($model, $attribute, is_array($default) ? $default : []),
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}")
>>>>>>> f1d4085 (.)
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 414a4ffcb (.)
        };
    }

    /**
     * Verifica se un attributo esiste e ha un valore specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param mixed $expectedValue Il valore atteso
     *
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  mixed  $expectedValue  Il valore atteso
>>>>>>> 551c768c4 (.)
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  mixed  $expectedValue  Il valore atteso
>>>>>>> 414a4ffcb (.)
     * @return bool True se l'attributo esiste e ha il valore atteso
     */
    public function hasAttributeValue(Model $model, string $attribute, mixed $expectedValue): bool
    {
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        $actualValue = $model->getAttribute($attribute);

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
        $actualValue = $model->getAttribute($attribute);
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato
     * @param callable|null $validator Funzione di validazione opzionale
     * @param mixed $default Valore di default se la validazione fallisce
     *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     * @return mixed Il valore dell'attributo validato e convertito
     */
    public function getValidatedAttribute(
<<<<<<< HEAD
        Model $model,
        string $attribute,
        string $type,
        ?callable $validator = null,
        mixed $default = null,
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        Model $model,
        string $attribute,
        string $type,
        null|callable $validator = null,
        mixed $default = null,
<<<<<<< HEAD
=======
        Model $model, 
        string $attribute, 
        string $type, 
        ?callable $validator = null,
        mixed $default = null
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    ): mixed {
        null|callable $validator = null,
        mixed $default = null,
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
=======
>>>>>>> 091f883c (.)
    ): mixed {
        Assert::isInstanceOf($model, Model::class);
=======
    ): mixed {
>>>>>>> 551c768c4 (.)
=======
    ): mixed {
>>>>>>> 414a4ffcb (.)
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

        $value = $this->getTypedAttribute($model, $attribute, $type, $default);

<<<<<<< HEAD
<<<<<<< HEAD
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
=======
        if ($validator !== null && ! $validator($value)) {
>>>>>>> 551c768c4 (.)
            return $default;
        }

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
        
        $value = $this->getTypedAttribute($model, $attribute, $type, $default);
        
        if ($validator !== null && !$validator($value)) {
            return $default;
        }
        
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
        if ($validator !== null && ! $validator($value)) {
            return $default;
        }

>>>>>>> 414a4ffcb (.)
        return $value;
    }

    /**
     * Verifica se un attributo esiste e soddisfa una condizione.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param callable $condition La condizione da verificare
     *
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  callable  $condition  La condizione da verificare
>>>>>>> 414a4ffcb (.)
     * @return bool True se l'attributo esiste e soddisfa la condizione
     */
    public function hasAttributeCondition(Model $model, string $attribute, callable $condition): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
>>>>>>> a6ef6dc7 (.)
    {
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return app(SafeArrayCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a un tipo specifico.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se l'attributo non esiste o è null
     * @return mixed Il valore dell'attributo convertito nel tipo specificato
     */
    public function getTypedAttribute(Model $model, string $attribute, string $type, mixed $default = null): mixed
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
        return match ($type) {
            'string' => $this->getStringAttribute($model, $attribute, is_string($default) ? $default : ''),
            'int' => $this->getIntAttribute($model, $attribute, is_int($default) ? $default : 0),
            'float' => $this->getFloatAttribute($model, $attribute, is_float($default) ? $default : 0.0),
            'bool' => $this->getBooleanAttribute($model, $attribute, is_bool($default) ? $default : false),
            'array' => $this->getArrayAttribute($model, $attribute, is_array($default) ? $default : []),
<<<<<<< HEAD
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}")
>>>>>>> f1d4085 (.)
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
>>>>>>> 300ef70 (.)
        };
    }

    /**
     * Verifica se un attributo esiste e ha un valore specifico.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  mixed  $expectedValue  Il valore atteso
     * @return bool True se l'attributo esiste e ha il valore atteso
     */
    public function hasAttributeValue(Model $model, string $attribute, mixed $expectedValue): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
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
     * @return mixed Il valore dell'attributo validato e convertito
     */
    public function getValidatedAttribute(
<<<<<<< HEAD
<<<<<<< HEAD
        Model $model,
        string $attribute,
        string $type,
        ?callable $validator = null,
        mixed $default = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        Model $model,
        string $attribute,
        string $type,
        null|callable $validator = null,
        mixed $default = null,
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Model $model, 
        string $attribute, 
        string $type, 
        ?callable $validator = null,
        mixed $default = null
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    ): mixed {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        $value = $this->getTypedAttribute($model, $attribute, $type, $default);

        if ($validator !== null && ! $validator($value)) {
            return $default;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        $value = $this->getTypedAttribute($model, $attribute, $type, $default);
        
        if ($validator !== null && !$validator($value)) {
            return $default;
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return $value;
    }

    /**
     * Verifica se un attributo esiste e soddisfa una condizione.
     *
=======
>>>>>>> 551c768c4 (.)
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  callable  $condition  La condizione da verificare
     * @return bool True se l'attributo esiste e soddisfa la condizione
     */
    public function hasAttributeCondition(Model $model, string $attribute, callable $condition): bool
    {
<<<<<<< HEAD
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 551c768c4 (.)
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return false;
        }

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
=======
        
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return false;
        }
<<<<<<< HEAD

=======
>>>>>>> 218dfed3 (.)
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return false;
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        return (bool) $condition($value);
    }

    /**
     * Ottiene un attributo con fallback a un altro attributo se il primo è null.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $primaryAttribute  L'attributo primario
     * @param  string  $fallbackAttribute  L'attributo di fallback
     * @param  string  $type  Il tipo di cast desiderato
     * @param  mixed  $default  Valore di default se entrambi gli attributi sono null
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Model $model Il modello Eloquent
     * @param string $primaryAttribute L'attributo primario
     * @param string $fallbackAttribute L'attributo di fallback
     * @param string $type Il tipo di cast desiderato
     * @param mixed $default Valore di default se entrambi gli attributi sono null
     *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     * @return mixed Il valore dell'attributo primario o di fallback
     */
    public function getAttributeWithFallback(
        Model $model,
        string $primaryAttribute,
        string $fallbackAttribute,
        string $type,
<<<<<<< HEAD
<<<<<<< HEAD
        mixed $default = null,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        mixed $default = null
=======
=======
        mixed $default = null
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        mixed $default = null,
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
        mixed $default = null,
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        mixed $default = null,
=======
        mixed $default = null
>>>>>>> f1d4085 (.)
=======
        mixed $default = null,
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        mixed $default = null,
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    ): mixed {
<<<<<<< HEAD
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 551c768c4 (.)
=======
    ): mixed {
>>>>>>> 414a4ffcb (.)
        Assert::stringNotEmpty($primaryAttribute);
        Assert::stringNotEmpty($fallbackAttribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

        $primaryValue = $model->getAttribute($primaryAttribute);

        if ($primaryValue !== null) {
            return $this->getTypedAttribute($model, $primaryAttribute, $type, $default);
        }

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
=======
        
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        $primaryValue = $model->getAttribute($primaryAttribute);

        if ($primaryValue !== null) {
            return $this->getTypedAttribute($model, $primaryAttribute, $type, $default);
        }
<<<<<<< HEAD

=======
>>>>>>> 218dfed3 (.)
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
        
        $primaryValue = $model->getAttribute($primaryAttribute);
        
        if ($primaryValue !== null) {
            return $this->getTypedAttribute($model, $primaryAttribute, $type, $default);
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        return $this->getTypedAttribute($model, $fallbackAttribute, $type, $default);
    }

    /**
     * Metodo di convenienza per ottenere attributi con cast sicuro.
     *
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato
     * @param  mixed  $default  Valore di default
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato
     * @param mixed $default Valore di default
     *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
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
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
>>>>>>> 551c768c4 (.)
=======
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
>>>>>>> 414a4ffcb (.)
     * @return bool True se l'attributo esiste
     */
    public static function has(Model $model, string $attribute): bool
    {
        return app(self::class)->hasAttribute($model, $attribute);
    }
}
