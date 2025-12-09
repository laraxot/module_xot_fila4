<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use InvalidArgumentException;
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
use Throwable;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
use function Safe\json_decode;

<<<<<<< HEAD
<<<<<<< HEAD
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
 * 
>>>>>>> f1d4085 (.)
 * Questa action centralizza la logica di accesso sicuro alle proprietà per evitare:
 * - Uso di property_exists() con oggetti che potrebbero avere magic methods
 * - Errori di tipo con accesso diretto alle proprietà
 * - Duplicazione di logica di verifica proprietà
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f1d4085 (.)
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
 *
=======
 * 
>>>>>>> f1d4085 (.)
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
     * @return bool True se l'oggetto ha la proprietà
     */
    public function hasProperty(object $object, string $property): bool
    {
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
        Assert::stringNotEmpty($property);
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
        return isset($object->{$property});
    }

    /**
     * Verifica se un oggetto ha una proprietà con valore non null.
     *
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
     * @return bool True se l'oggetto ha la proprietà con valore non null
     */
    public function hasNonNullProperty(object $object, string $property): bool
    {
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
        Assert::object($object);
        Assert::stringNotEmpty($property);
<<<<<<< HEAD

        $hasProperty = isset($object->{$property});
        $isNotNull = $hasProperty && null !== $object->{$property};

        Assert::true(
            !$hasProperty || $isNotNull,
            __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__) . ' - Property null check should be consistent with isset result'
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        );

        return $hasProperty && $isNotNull;
=======
        
        return isset($object->{$property}) && $object->{$property} !== null;
>>>>>>> f1d4085 (.)
    }

    /**
     * Verifica se un oggetto ha una proprietà con valore non vuoto.
     *
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
     * @return bool True se l'oggetto ha la proprietà con valore non vuoto
     */
    public function hasNonEmptyProperty(object $object, string $property): bool
    {
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
        Assert::object($object);
        Assert::stringNotEmpty($property);
<<<<<<< HEAD

        if (!isset($object->{$property})) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return false;
        }

=======
        
        if (!isset($object->{$property})) {
            return false;
        }
        
>>>>>>> f1d4085 (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  string|null  $default  Valore di default se la proprietà non esiste o è null
     * @return string Il valore della proprietà convertito in string
     */
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
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
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $default ?? '';
        }

=======
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? '';
        }
        
>>>>>>> f1d4085 (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  int|null  $default  Valore di default se la proprietà non esiste o è null
     * @return int Il valore della proprietà convertito in int
     */
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
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
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $default ?? 0;
        }

=======
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? 0;
        }
        
>>>>>>> f1d4085 (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  float|null  $default  Valore di default se la proprietà non esiste o è null
     * @return float Il valore della proprietà convertito in float
     */
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
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
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $default ?? 0.0;
        }

=======
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? 0.0;
        }
        
>>>>>>> f1d4085 (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  bool|null  $default  Valore di default se la proprietà non esiste o è null
     * @return bool Il valore della proprietà convertito in boolean
     */
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
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
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $default ?? false;
        }

=======
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? false;
        }
        
>>>>>>> f1d4085 (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  array|null  $default  Valore di default se la proprietà non esiste o è null
     * @return array Il valore della proprietà convertito in array
     */
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    {
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
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
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);

        if (!isset($object->{$property})) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $default ?? [];
        }

=======
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? [];
        }
        
>>>>>>> f1d4085 (.)
        $value = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
     * @param  object  $object  L'oggetto da cui ottenere la proprietà
     * @param  string  $property  Il nome della proprietà
     * @param  string  $type  Il tipo di cast desiderato (string, int, float, bool, array)
     * @param  mixed  $default  Valore di default se la proprietà non esiste o è null
=======
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
        
>>>>>>> f1d4085 (.)
        return match ($type) {
            'string' => $this->getStringProperty($object, $property, is_string($default) ? $default : null),
            'int' => $this->getIntProperty($object, $property, is_int($default) ? $default : null),
            'float' => $this->getFloatProperty($object, $property, is_float($default) ? $default : null),
            'bool' => $this->getBooleanProperty($object, $property, is_bool($default) ? $default : null),
            'array' => $this->getArrayProperty($object, $property, is_array($default) ? $default : null),
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
=======
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}")
>>>>>>> f1d4085 (.)
        };
    }

    /**
     * Verifica se un oggetto ha una proprietà con valore specifico.
     *
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
     * @param object $object L'oggetto da verificare
     * @param string $property Il nome della proprietà
     * @param mixed $expectedValue Il valore atteso
     *
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::stringNotEmpty($property);

        if (! isset($object->{$property})) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        Assert::object($object);
        Assert::stringNotEmpty($property);
<<<<<<< HEAD

        if (!isset($object->{$property})) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return false;
        }

=======
        
        if (!isset($object->{$property})) {
            return false;
        }
        
>>>>>>> f1d4085 (.)
        $actualValue = $object->{$property};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
     * @param object $object L'oggetto da cui ottenere la proprietà
     * @param string $property Il nome della proprietà
     * @param string $type Il tipo di cast desiderato
     * @param callable|null $validator Funzione di validazione opzionale
     * @param mixed $default Valore di default se la validazione fallisce
     *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @return mixed Il valore della proprietà validato e convertito
     */
    public function getValidatedProperty(
<<<<<<< HEAD
        object $object,
        string $property,
        string $type,
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
        null|callable $validator = null,
        mixed $default = null,
=======
        object $object, 
        string $property, 
        string $type, 
        ?callable $validator = null,
        mixed $default = null
>>>>>>> f1d4085 (.)
    ): mixed {
        Assert::object($object);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        Assert::stringNotEmpty($property);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);
<<<<<<< HEAD

        $value = $this->getTypedProperty($object, $property, $type, $default);

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
            return $default;
        }

=======
        
        $value = $this->getTypedProperty($object, $property, $type, $default);
        
        if ($validator !== null && !$validator($value)) {
            return $default;
        }
        
>>>>>>> f1d4085 (.)
        return $value;
    }

    /**
     * Verifica se un oggetto ha un metodo specifico.
     *
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
     * @return bool True se l'oggetto ha il metodo
     */
    public function hasMethod(object $object, string $method): bool
    {
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
        Assert::stringNotEmpty($method);
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
        return method_exists($object, $method);
    }

    /**
     * Esegue un metodo su un oggetto in modo sicuro.
     *
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
     * @param object $object L'oggetto su cui eseguire il metodo
     * @param string $method Il nome del metodo
     * @param array $parameters I parametri del metodo
     * @param mixed $default Valore di default se il metodo non esiste o fallisce
     *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @return mixed Il risultato del metodo o il valore di default
     */
<<<<<<< HEAD
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
        Assert::object($object);
        Assert::stringNotEmpty($method);

        if (!method_exists($object, $method)) {
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
            return $default;
        }

=======
    public function callMethodSafely(object $object, string $method, array $parameters = [], mixed $default = null): mixed
    {
        Assert::object($object);
        Assert::stringNotEmpty($method);
        
        if (!method_exists($object, $method)) {
            return $default;
        }
        
>>>>>>> f1d4085 (.)
        try {
            return $object->{$method}(...$parameters);
        } catch (Throwable $e) {
            return $default;
        }
    }
}
