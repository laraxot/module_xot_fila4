<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Action per gestire in modo sicuro l'accesso agli attributi dei modelli Eloquent.
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
 * Questa action centralizza la logica di accesso sicuro agli attributi per evitare:
 * - Uso di property_exists() con modelli Eloquent (anti-pattern)
 * - Errori di tipo con getAttribute() che restituisce mixed
 * - Duplicazione di logica di verifica attributi
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di accesso attributi
 * - KISS: Metodi semplici e diretti
 * - Robustezza: Gestisce tutti i casi edge e mantiene type safety
 * - Laravel Way: Rispetta l'architettura Eloquent
 * - Assert: Utilizza webmozart/assert per validazioni robuste
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
 *
 * @package Modules\Xot\Actions\Cast
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
 *
 * @package Modules\Xot\Actions\Cast
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 */
class SafeAttributeCastAction
{
    use QueueableAction;

    /**
     * Verifica se un attributo esiste e ha un valore non null su un modello.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
     * @return bool True se l'attributo esiste e ha un valore non null
     */
    public function hasAttribute(Model $model, string $attribute): bool
    {
<<<<<<< HEAD
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
        return $model->getAttribute($attribute) !== null;
    }

    /**
     * Verifica se un attributo esiste e ha un valore non vuoto su un modello.
     *
<<<<<<< HEAD
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
     * @return bool True se l'attributo esiste e ha un valore non vuoto
     */
    public function hasNonEmptyAttribute(Model $model, string $attribute): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

<<<<<<< HEAD
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);
=======
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
        return $value !== null && $value !== '';
    }

    /**
     * Ottiene un attributo con cast sicuro a string.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string|null  $default  Valore di default se l'attributo non esiste o è null
     * @return string Il valore dell'attributo convertito in string
     */
<<<<<<< HEAD
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return string Il valore dell'attributo convertito in string
     */
<<<<<<< HEAD
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
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
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

<<<<<<< HEAD
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
=======
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> ab8cc3f3 (.)
    {
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

<<<<<<< HEAD
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    public function getStringAttribute(Model $model, string $attribute, null|string $default = ''): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
=======
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
>>>>>>> laraxot/develop
    public function getStringAttribute(Model $model, string $attribute, ?string $default = ''): string
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? '';
        }

=======
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? '';
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        return (string) $value;
    }

    /**
     * Ottiene un attributo con cast sicuro a int.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  int|null  $default  Valore di default se l'attributo non esiste o è null
     * @return int Il valore dell'attributo convertito in int
     */
<<<<<<< HEAD
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param int|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return int Il valore dell'attributo convertito in int
     */
<<<<<<< HEAD
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
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
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

<<<<<<< HEAD
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
=======
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
>>>>>>> ab8cc3f3 (.)
    {
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

<<<<<<< HEAD
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    public function getIntAttribute(Model $model, string $attribute, null|int $default = 0): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
=======
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
>>>>>>> laraxot/develop
    public function getIntAttribute(Model $model, string $attribute, ?int $default = 0): int
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0;
        }

=======
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? 0;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        return app(SafeIntCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a float.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  float|null  $default  Valore di default se l'attributo non esiste o è null
     * @return float Il valore dell'attributo convertito in float
     */
<<<<<<< HEAD
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param float|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return float Il valore dell'attributo convertito in float
     */
<<<<<<< HEAD
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
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
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
=======
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
>>>>>>> ab8cc3f3 (.)
    {
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    public function getFloatAttribute(Model $model, string $attribute, null|float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
=======
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
>>>>>>> laraxot/develop
    public function getFloatAttribute(Model $model, string $attribute, ?float $default = 0.0): float
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? 0.0;
        }

=======
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? 0.0;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        return app(SafeFloatCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a boolean.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  bool|null  $default  Valore di default se l'attributo non esiste o è null
     * @return bool Il valore dell'attributo convertito in boolean
     */
<<<<<<< HEAD
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param bool|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return bool Il valore dell'attributo convertito in boolean
     */
<<<<<<< HEAD
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
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
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

<<<<<<< HEAD
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
=======
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
>>>>>>> ab8cc3f3 (.)
    {
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

<<<<<<< HEAD
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    public function getBooleanAttribute(Model $model, string $attribute, null|bool $default = false): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
=======
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
>>>>>>> laraxot/develop
    public function getBooleanAttribute(Model $model, string $attribute, ?bool $default = false): bool
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? false;
        }

=======
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? false;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        return app(SafeBooleanCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a array.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  array|null  $default  Valore di default se l'attributo non esiste o è null
     * @return array Il valore dell'attributo convertito in array
     */
<<<<<<< HEAD
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param array|null $default Valore di default se l'attributo non esiste o è null
     *
     * @return array Il valore dell'attributo convertito in array
     */
<<<<<<< HEAD
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
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
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
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
>>>>>>> laraxot/develop
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
=======
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
>>>>>>> ab8cc3f3 (.)
    {
        Assert::isInstanceOf($model, Model::class);
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    public function getArrayAttribute(Model $model, string $attribute, null|array $default = []): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
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
>>>>>>> laraxot/develop
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
=======
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
>>>>>>> laraxot/develop
    public function getArrayAttribute(Model $model, string $attribute, ?array $default = []): array
    {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
<<<<<<< HEAD

        $value = $model->getAttribute($attribute);

        if ($value === null) {
            return $default ?? [];
        }

=======
        
        $value = $model->getAttribute($attribute);
        
        if ($value === null) {
            return $default ?? [];
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        return app(SafeArrayCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene un attributo con cast sicuro a un tipo specifico.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se l'attributo non esiste o è null
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato (string, int, float, bool, array)
     * @param mixed $default Valore di default se l'attributo non esiste o è null
     *
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
     * @return mixed Il valore dell'attributo convertito nel tipo specificato
     */
    public function getTypedAttribute(Model $model, string $attribute, string $type, mixed $default = null): mixed
    {
<<<<<<< HEAD
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);

=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        Assert::isInstanceOf($model, Model::class);
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
        return match ($type) {
            'string' => $this->getStringAttribute($model, $attribute, is_string($default) ? $default : null),
            'int' => $this->getIntAttribute($model, $attribute, is_int($default) ? $default : null),
            'float' => $this->getFloatAttribute($model, $attribute, is_float($default) ? $default : null),
            'bool' => $this->getBooleanAttribute($model, $attribute, is_bool($default) ? $default : null),
            'array' => $this->getArrayAttribute($model, $attribute, is_array($default) ? $default : null),
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
=======
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
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param mixed $expectedValue Il valore atteso
     *
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
     * @return bool True se l'attributo esiste e ha il valore atteso
     */
    public function hasAttributeValue(Model $model, string $attribute, mixed $expectedValue): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
        Assert::stringNotEmpty($attribute);

        $actualValue = $model->getAttribute($attribute);

<<<<<<< HEAD
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);

        $actualValue = $model->getAttribute($attribute);
=======
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
        return $actualValue === $expectedValue;
    }

    /**
     * Ottiene un attributo con validazione di tipo e valore.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param  Model  $model  Il modello Eloquent
     * @param  string  $attribute  Il nome dell'attributo
     * @param  string  $type  Il tipo di cast desiderato
     * @param  callable|null  $validator  Funzione di validazione opzionale
     * @param  mixed  $default  Valore di default se la validazione fallisce
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
     * @param Model $model Il modello Eloquent
     * @param string $attribute Il nome dell'attributo
     * @param string $type Il tipo di cast desiderato
     * @param callable|null $validator Funzione di validazione opzionale
     * @param mixed $default Valore di default se la validazione fallisce
     *
<<<<<<< HEAD
     * @return mixed Il valore dell'attributo validato e convertito
     */
    public function getValidatedAttribute(
        Model $model,
        string $attribute,
        string $type,
        ?callable $validator = null,
        mixed $default = null,
    ): mixed {
        null|callable $validator = null,
        mixed $default = null,
    ): mixed {
        Assert::isInstanceOf($model, Model::class);
        Assert::stringNotEmpty($attribute);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);

        $value = $this->getTypedAttribute($model, $attribute, $type, $default);

        if ($validator !== null && ! $validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
            return $default;
        }

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
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
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
=======
        if ($validator !== null && !$validator($value)) {
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
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
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
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
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
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
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 399f46d3 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 17684f52 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 399f46d3 (.)
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
=======
=======
>>>>>>> 6dcebf8a (.)
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
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
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
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
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> 71586de2 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function getString(Model $model, string $attribute, null|string $default = ''): string
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getString(Model $model, string $attribute, ?string $default = ''): string
>>>>>>> 71586de2 (.)
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
>>>>>>> laraxot/develop
    {
        return app(self::class)->getStringAttribute($model, $attribute, $default);
    }
}
