<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

use Throwable;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
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

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use function Safe\json_decode;

/**
 * Action per gestire in modo sicuro l'accesso alle proprietà degli oggetti generici.
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
 * Questa action centralizza la logica di accesso sicuro alle proprietà per evitare:
 * - Uso di property_exists() con oggetti che potrebbero avere magic methods
 * - Errori di tipo con accesso diretto alle proprietà
 * - Duplicazione di logica di verifica proprietà
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
=======
>>>>>>> 091f883c (.)
 * Questa action centralizza la logica di accesso sicuro alle proprietà per evitare:
 * - Uso di property_exists() con oggetti che potrebbero avere magic methods
 * - Errori di tipo con accesso diretto alle proprietà
 * - Duplicazione di logica di verifica proprietà
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
use function Safe\json_decode;

/**
 * Action per gestire in modo sicuro l'accesso alle proprietà degli oggetti generici.
<<<<<<< HEAD
<<<<<<< HEAD
 *
>>>>>>> 7468a7d2 (.)
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
 * Questa action centralizza la logica di accesso sicuro alle proprietà per evitare:
 * - Uso di property_exists() con oggetti che potrebbero avere magic methods
 * - Errori di tipo con accesso diretto alle proprietà
 * - Duplicazione di logica di verifica proprietà
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di accesso proprietà
 * - KISS: Metodi semplici e diretti
 * - Robustezza: Gestisce tutti i casi edge e mantiene type safety
 * - Sicurezza: Previene errori di accesso a proprietà inesistenti
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
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
 */
class SafeObjectCastAction
{
    use QueueableAction;

    /**
     * Verifica se un oggetto ha una proprietà specifica.
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @return bool True se l'oggetto ha la proprietà
     */
    public function hasProperty(object $object, string $property): bool
    {
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::stringNotEmpty($property);
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
        return isset($object->{$property});
    }

    /**
     * Verifica se un oggetto ha una proprietà con valore non null.
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @return bool True se l'oggetto ha la proprietà con valore non null
     */
    public function hasNonNullProperty(object $object, string $property): bool
    {
        Assert::stringNotEmpty($property);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

        $hasProperty = isset($object->{$property});
        $isNotNull = $hasProperty && $object->{$property} !== null;

        Assert::true(
            ! $hasProperty || $isNotNull,
            __FILE__.':'.__LINE__.' - '.class_basename(self::class).' - Property null check should be consistent with isset result'
        Assert::object($object);
        Assert::stringNotEmpty($property);

        $hasProperty = isset($object->{$property});
        $isNotNull = $hasProperty && null !== $object->{$property};

        Assert::true(
            !$hasProperty || $isNotNull,
            __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__) . ' - Property null check should be consistent with isset result'
        );

        return $hasProperty && $isNotNull;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
        return isset($object->{$property}) && $object->{$property} !== null;
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
        
        return isset($object->{$property}) && $object->{$property} !== null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
=======
        
        return isset($object->{$property}) && $object->{$property} !== null;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        return isset($object->{$property}) && $object->{$property} !== null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
    }

    /**
     * Verifica se un oggetto ha una proprietà con valore non vuoto.
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
     * @return bool True se l'oggetto ha la proprietà con valore non vuoto
     */
    public function hasNonEmptyProperty(object $object, string $property): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::stringNotEmpty($property);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

        if (! isset($object->{$property})) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return false;
        }

        
        if (!isset($object->{$property})) {
            return false;
        }
        

        if (!isset($object->{$property})) {
            return false;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        if (!isset($object->{$property})) {
            return false;
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        $value = $object->{$property};
        return $value !== '';
    }

    /**
     * Ottiene una proprietà con cast sicuro a string.
     *
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  string|null  $default  Valore di default se la proprietà non esiste o è null
     * @return string Il valore della proprietà convertito in string
     */
<<<<<<< HEAD
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? '';
        }

<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
>>>>>>> 7468a7d2 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param string|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return string Il valore della proprietà convertito in string
     */
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? '';
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
=======
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
>>>>>>> b93ef594b4 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? '';
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
=======
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? '';
        }
        
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

        if (! isset($object->{$property})) {
            return $default ?? '';
        }

    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
            return $default ?? '';
        }

    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? '';
        }

    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        $value = $object->{$property};
        return (string) $value;
    }

    /**
     * Ottiene una proprietà con cast sicuro a int.
     *
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  int|null  $default  Valore di default se la proprietà non esiste o è null
     * @return int Il valore della proprietà convertito in int
     */
<<<<<<< HEAD
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? 0;
        }

<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
>>>>>>> 7468a7d2 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param int|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return int Il valore della proprietà convertito in int
     */
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? 0;
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
=======
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
>>>>>>> b93ef594b4 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? 0;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
=======
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? 0;
        }
        
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

        if (! isset($object->{$property})) {
            return $default ?? 0;
        }

    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
            return $default ?? 0;
        }

    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? 0;
        }

    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        $value = $object->{$property};
        return app(SafeIntCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene una proprietà con cast sicuro a float.
     *
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  float|null  $default  Valore di default se la proprietà non esiste o è null
     * @return float Il valore della proprietà convertito in float
     */
<<<<<<< HEAD
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? 0.0;
        }

<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
>>>>>>> 7468a7d2 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param float|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return float Il valore della proprietà convertito in float
     */
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? 0.0;
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
=======
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
>>>>>>> b93ef594b4 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? 0.0;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
=======
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? 0.0;
        }
        
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

        if (! isset($object->{$property})) {
            return $default ?? 0.0;
        }

    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
            return $default ?? 0.0;
        }

    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? 0.0;
        }

    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        $value = $object->{$property};
        return app(SafeFloatCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene una proprietà con cast sicuro a boolean.
     *
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  bool|null  $default  Valore di default se la proprietà non esiste o è null
     * @return bool Il valore della proprietà convertito in boolean
     */
<<<<<<< HEAD
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? false;
        }

<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
>>>>>>> 7468a7d2 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param bool|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return bool Il valore della proprietà convertito in boolean
     */
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? false;
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
=======
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
>>>>>>> b93ef594b4 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? false;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
=======
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? false;
        }
        
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

        if (! isset($object->{$property})) {
            return $default ?? false;
        }

    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
            return $default ?? false;
        }

    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? false;
        }

    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        $value = $object->{$property};
        return app(SafeBooleanCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene una proprietà con cast sicuro a array.
     *
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  array|null  $default  Valore di default se la proprietà non esiste o è null
     * @return array Il valore della proprietà convertito in array
     */
<<<<<<< HEAD
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? [];
        }

<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
>>>>>>> 7468a7d2 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param array|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return array Il valore della proprietà convertito in array
     */
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? [];
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
=======
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
>>>>>>> b93ef594b4 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? [];
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
=======
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? [];
        }
        
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

        if (! isset($object->{$property})) {
            return $default ?? [];
        }

    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
            return $default ?? [];
        }

    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return $default ?? [];
        }

    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        $value = $object->{$property};
        return app(SafeArrayCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene una proprietà con cast sicuro a un tipo specifico.
     *
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se la proprietà non esiste o è null
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param string $type Il tipo di cast desiderato (string, int, float, bool, array)
     * @param mixed $default Valore di default se la proprietà non esiste o è null
     *
     * @return mixed Il valore della proprietà convertito nel tipo specificato
     */
    public function getTypedProperty(object $object, string $property, string $type, mixed $default = null): mixed
    {
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::stringNotEmpty($property);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
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
        return match ($type) {
            'string' => $this->getStringProperty($object, $property, is_string($default) ? $default : null),
            'int' => $this->getIntProperty($object, $property, is_int($default) ? $default : null),
            'float' => $this->getFloatProperty($object, $property, is_float($default) ? $default : null),
            'bool' => $this->getBooleanProperty($object, $property, is_bool($default) ? $default : null),
            'array' => $this->getArrayProperty($object, $property, is_array($default) ? $default : null),
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
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
        };
    }

    /**
     * Verifica se un oggetto ha una proprietà con valore specifico.
     *
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     * @param mixed $expectedValue Il valore atteso
     *
     * @return bool True se l'oggetto ha la proprietà con il valore atteso
     */
    public function hasPropertyValue(object $object, string $property, mixed $expectedValue): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::stringNotEmpty($property);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

        if (! isset($object->{$property})) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
            return false;
        }

        
        if (!isset($object->{$property})) {
            return false;
        }
        

        if (!isset($object->{$property})) {
            return false;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        if (!isset($object->{$property})) {
            return false;
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        $actualValue = $object->{$property};
        return $actualValue === $expectedValue;
    }

    /**
     * Ottiene una proprietà con validazione di tipo e valore.
     *
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  string  $type  Il tipo di cast desiderato
     * @param  callable|null  $validator  Funzione di validazione opzionale
     * @param  mixed  $default  Valore di default se la validazione fallisce
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param string $type Il tipo di cast desiderato
     * @param callable|null $validator Funzione di validazione opzionale
     * @param mixed $default Valore di default se la validazione fallisce
     *
     * @return mixed Il valore della proprietà validato e convertito
     */
    public function getValidatedProperty(
<<<<<<< HEAD
        object $object,
        string $property,
        string $type,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ?callable $validator = null,
        mixed $default = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        object $object,
        string $property,
        string $type,
        null|callable $validator = null,
        mixed $default = null,
<<<<<<< HEAD
=======
        object $object, 
        string $property, 
        string $type, 
        ?callable $validator = null,
        mixed $default = null
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    ): mixed {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
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
        object $object, 
        string $property, 
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
        Assert::object($object);
        Assert::stringNotEmpty($property);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

        $value = $this->getTypedProperty($object, $property, $type, $default);

        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
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
        $value = $this->getTypedProperty($object, $property, $type, $default);

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
        
        $value = $this->getTypedProperty($object, $property, $type, $default);
        
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
        return $value;
    }

    /**
     * Verifica se un oggetto ha un metodo specifico.
     *
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
     * @return bool True se l'oggetto ha il metodo
     */
    public function hasMethod(object $object, string $method): bool
    {
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::object($object);
        Assert::stringNotEmpty($method);
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
        return method_exists($object, $method);
    }

    /**
     * Esegue un metodo su un oggetto in modo sicuro.
     *
     * @param  object  $object  L'oggetto su cui eseguire il metodo
     * @param  string  $method  Il nome del metodo
     * @param  array  $parameters  I parametri del metodo
     * @param  mixed  $default  Valore di default se il metodo non esiste o fallisce
     * @param object $object L'oggetto su cui eseguire il metodo
     * @param string $method Il nome del metodo
     * @param array $parameters I parametri del metodo
     * @param mixed $default Valore di default se il metodo non esiste o fallisce
     *
     * @return mixed Il risultato del metodo o il valore di default
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    public function callMethodSafely(
        object $object,
        string $method,
        array $parameters = [],
        mixed $default = null,
    ): mixed {
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
        Assert::stringNotEmpty($method);

        if (! method_exists($object, $method)) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
        Assert::object($object);
        Assert::stringNotEmpty($method);

        if (!method_exists($object, $method)) {
            return $default;
        }

=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        Assert::object($object);
        Assert::stringNotEmpty($method);

        if (!method_exists($object, $method)) {
            return $default;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function callMethodSafely(object $object, string $method, array $parameters = [], mixed $default = null): mixed
    {
        Assert::object($object);
        Assert::stringNotEmpty($method);
        
        if (!method_exists($object, $method)) {
            return $default;
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        try {
            return $object->{$method}(...$parameters);
        } catch (Throwable $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
    public function callMethodSafely(object $object, string $method, array $parameters = [], mixed $default = null): mixed
    {
=======
>>>>>>> b93ef594b4 (.)
        Assert::object($object);
        Assert::stringNotEmpty($method);

        if (!method_exists($object, $method)) {
            return $default;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
        try {
            return $object->{$method}(...$parameters);
        } catch (Throwable $e) {
=======
>>>>>>> ce6fc085 (.)
    public function callMethodSafely(object $object, string $method, array $parameters = [], mixed $default = null): mixed
    {
        Assert::object($object);
        Assert::stringNotEmpty($method);
        
        if (!method_exists($object, $method)) {
            return $default;
        }
        
        try {
            return $object->{$method}(...$parameters);
        } catch (\Throwable $e) {
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            return $default;
        }
    }
}
