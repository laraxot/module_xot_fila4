<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Throwable;
use Webmozart\Assert\Assert;

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
use Throwable;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

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
use function Safe\json_decode;

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
/**
 * Action per gestire in modo sicuro l'accesso alle proprietà degli oggetti generici.
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
 * Questa action centralizza la logica di accesso sicuro alle proprietà per evitare:
 * - Uso di property_exists() con oggetti che potrebbero avere magic methods
 * - Errori di tipo con accesso diretto alle proprietà
 * - Duplicazione di logica di verifica proprietà
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
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di accesso proprietà
 * - KISS: Metodi semplici e diretti
 * - Robustezza: Gestisce tutti i casi edge e mantiene type safety
 * - Sicurezza: Previene errori di accesso a proprietà inesistenti
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
 */
class SafeObjectCastAction
{
    use QueueableAction;

    /**
     * Verifica se un oggetto ha una proprietà specifica.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da verificare
     * @param  string  $property  Il nome della proprietà
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'oggetto ha la proprietà
     */
    public function hasProperty(object $object, string $property): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($property);
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
        return isset($object->{$property});
    }

    /**
     * Verifica se un oggetto ha una proprietà con valore non null.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da verificare
     * @param  string  $property  Il nome della proprietà
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'oggetto ha la proprietà con valore non null
     */
    public function hasNonNullProperty(object $object, string $property): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::stringNotEmpty($property);

        $hasProperty = isset($object->{$property});
        $isNotNull = $hasProperty && $object->{$property} !== null;

        Assert::true(
            ! $hasProperty || $isNotNull,
            __FILE__.':'.__LINE__.' - '.class_basename(self::class).' - Property null check should be consistent with isset result'
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
        Assert::object($object);
        Assert::stringNotEmpty($property);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

        $hasProperty = isset($object->{$property});
        $isNotNull = $hasProperty && null !== $object->{$property};

        Assert::true(
            !$hasProperty || $isNotNull,
            __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__) . ' - Property null check should be consistent with isset result'
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
        );

        return $hasProperty && $isNotNull;
<<<<<<< HEAD
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
    }

    /**
     * Verifica se un oggetto ha una proprietà con valore non vuoto.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da verificare
     * @param  string  $property  Il nome della proprietà
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'oggetto ha la proprietà con valore non vuoto
     */
    public function hasNonEmptyProperty(object $object, string $property): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
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
        Assert::object($object);
        Assert::stringNotEmpty($property);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        if (!isset($object->{$property})) {
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
            return false;
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        if (!isset($object->{$property})) {
            return false;
        }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        if (!isset($object->{$property})) {
            return false;
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
        return $value !== '';
    }

    /**
     * Ottiene una proprietà con cast sicuro a string.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  string|null  $default  Valore di default se la proprietà non esiste o è null
     * @return string Il valore della proprietà convertito in string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
=======
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
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
>>>>>>> a6ef6dc7 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
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
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param string|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return string Il valore della proprietà convertito in string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
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
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
            return $default ?? '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
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
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
>>>>>>> a6ef6dc7 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? '';
        }

<<<<<<< HEAD
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
=======
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? '';
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
        return (string) $value;
    }

    /**
     * Ottiene una proprietà con cast sicuro a int.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  int|null  $default  Valore di default se la proprietà non esiste o è null
     * @return int Il valore della proprietà convertito in int
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
=======
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
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
>>>>>>> a6ef6dc7 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
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
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param int|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return int Il valore della proprietà convertito in int
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
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
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
            return $default ?? 0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
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
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
>>>>>>> a6ef6dc7 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? 0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? 0;
        }

<<<<<<< HEAD
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
=======
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? 0;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
        return app(SafeIntCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene una proprietà con cast sicuro a float.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  float|null  $default  Valore di default se la proprietà non esiste o è null
     * @return float Il valore della proprietà convertito in float
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
=======
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
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
>>>>>>> a6ef6dc7 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
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
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param float|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return float Il valore della proprietà convertito in float
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
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
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
            return $default ?? 0.0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
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
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
>>>>>>> a6ef6dc7 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? 0.0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? 0.0;
        }

<<<<<<< HEAD
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
=======
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? 0.0;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
        return app(SafeFloatCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene una proprietà con cast sicuro a boolean.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  bool|null  $default  Valore di default se la proprietà non esiste o è null
     * @return bool Il valore della proprietà convertito in boolean
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
=======
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
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
>>>>>>> a6ef6dc7 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
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
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param bool|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return bool Il valore della proprietà convertito in boolean
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
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
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
            return $default ?? false;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
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
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
>>>>>>> a6ef6dc7 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? false;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? false;
        }

<<<<<<< HEAD
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
=======
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? false;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
        return app(SafeBooleanCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene una proprietà con cast sicuro a array.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  array|null  $default  Valore di default se la proprietà non esiste o è null
     * @return array Il valore della proprietà convertito in array
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
=======
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
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
>>>>>>> a6ef6dc7 (.)
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
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
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param array|null $default Valore di default se la proprietà non esiste o è null
     *
     * @return array Il valore della proprietà convertito in array
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
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
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
            return $default ?? [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
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
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
>>>>>>> a6ef6dc7 (.)
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
>>>>>>> 5a14301c (.)
            return $default ?? [];
        }

<<<<<<< HEAD
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
=======
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? [];
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
        return app(SafeArrayCastAction::class)->execute($value, $default);
    }

    /**
     * Ottiene una proprietà con cast sicuro a un tipo specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se la proprietà non esiste o è null
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
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param string $type Il tipo di cast desiderato (string, int, float, bool, array)
     * @param mixed $default Valore di default se la proprietà non esiste o è null
     *
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
     * @return mixed Il valore della proprietà convertito nel tipo specificato
     */
    public function getTypedProperty(object $object, string $property, string $type, mixed $default = null): mixed
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($property);
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
            'string' => $this->getStringProperty($object, $property, is_string($default) ? $default : null),
            'int' => $this->getIntProperty($object, $property, is_int($default) ? $default : null),
            'float' => $this->getFloatProperty($object, $property, is_float($default) ? $default : null),
            'bool' => $this->getBooleanProperty($object, $property, is_bool($default) ? $default : null),
            'array' => $this->getArrayProperty($object, $property, is_array($default) ? $default : null),
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
     * Verifica se un oggetto ha una proprietà con valore specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da verificare
     * @param  string  $property  Il nome della proprietà
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
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     * @param mixed $expectedValue Il valore atteso
     *
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
     * @return bool True se l'oggetto ha la proprietà con il valore atteso
     */
    public function hasPropertyValue(object $object, string $property, mixed $expectedValue): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
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
        Assert::object($object);
        Assert::stringNotEmpty($property);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        if (!isset($object->{$property})) {
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
            return false;
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        if (!isset($object->{$property})) {
            return false;
        }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        if (!isset($object->{$property})) {
            return false;
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $actualValue = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
        return $actualValue === $expectedValue;
    }

    /**
     * Ottiene una proprietà con validazione di tipo e valore.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param string $type Il tipo di cast desiderato
     * @param callable|null $validator Funzione di validazione opzionale
     * @param mixed $default Valore di default se la validazione fallisce
     *
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
     * @return mixed Il valore della proprietà validato e convertito
     */
    public function getValidatedProperty(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        object $object,
        string $property,
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
        object $object, 
        string $property, 
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
        Assert::object($object);
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
        Assert::stringNotEmpty($property);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $value = $this->getTypedProperty($object, $property, $type, $default);

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
        $value = $this->getTypedProperty($object, $property, $type, $default);

        if ($validator !== null && !$validator($value)) {
            return $default;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $value = $this->getTypedProperty($object, $property, $type, $default);
        
        if ($validator !== null && !$validator($value)) {
            return $default;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $value;
    }

    /**
     * Verifica se un oggetto ha un metodo specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto da verificare
     * @param  string  $method  Il nome del metodo
=======
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
>>>>>>> 5a14301c (.)
=======
     * @param object $object L'oggetto da verificare
     * @param string $method Il nome del metodo
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'oggetto ha il metodo
     */
    public function hasMethod(object $object, string $method): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
=======
        Assert::object($object);
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($method);
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
        return method_exists($object, $method);
    }

    /**
     * Esegue un metodo su un oggetto in modo sicuro.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $object  L'oggetto su cui eseguire il metodo
     * @param  string  $method  Il nome del metodo
     * @param  array  $parameters  I parametri del metodo
     * @param  mixed  $default  Valore di default se il metodo non esiste o fallisce
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
     * @param object $object L'oggetto su cui eseguire il metodo
     * @param string $method Il nome del metodo
     * @param array $parameters I parametri del metodo
     * @param mixed $default Valore di default se il metodo non esiste o fallisce
     *
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
     * @return mixed Il risultato del metodo o il valore di default
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function callMethodSafely(
        object $object,
        string $method,
        array $parameters = [],
        mixed $default = null,
    ): mixed {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        Assert::object($object);
        Assert::stringNotEmpty($method);

        if (!method_exists($object, $method)) {
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $default;
        }

<<<<<<< HEAD
        try {
            return $object->{$method}(...$parameters);
        } catch (Throwable $e) {
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return $default;
        }
    }
}
