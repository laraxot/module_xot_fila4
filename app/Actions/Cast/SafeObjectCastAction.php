<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
use Webmozart\Assert\Assert;

use Throwable;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

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
use function Safe\json_decode;

/**
 * Action per gestire in modo sicuro l'accesso alle proprietà degli oggetti generici.
 *
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
 * Questa action centralizza la logica di accesso sicuro alle proprietà per evitare:
 * - Uso di property_exists() con oggetti che potrebbero avere magic methods
 * - Errori di tipo con accesso diretto alle proprietà
 * - Duplicazione di logica di verifica proprietà
 *
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
 *
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
 *
 * @package Modules\Xot\Actions\Cast
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
        
        return isset($object->{$property}) && $object->{$property} !== null;
=======
=======
>>>>>>> 218dfed3 (.)
=======
        
        return isset($object->{$property}) && $object->{$property} !== null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
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
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    public function getStringProperty(object $object, string $property, null|string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public function getStringProperty(object $object, string $property, ?string $default = ''): string
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? '';
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> a67e542f (.)
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
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
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
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    public function getIntProperty(object $object, string $property, null|int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public function getIntProperty(object $object, string $property, ?int $default = 0): int
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? 0;
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> a67e542f (.)
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
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
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
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    public function getFloatProperty(object $object, string $property, null|float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public function getFloatProperty(object $object, string $property, ?float $default = 0.0): float
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? 0.0;
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> a67e542f (.)
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
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
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
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    public function getBooleanProperty(object $object, string $property, null|bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public function getBooleanProperty(object $object, string $property, ?bool $default = false): bool
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? false;
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> a67e542f (.)
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
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
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
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    public function getArrayProperty(object $object, string $property, null|array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public function getArrayProperty(object $object, string $property, ?array $default = []): array
    {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        
        if (!isset($object->{$property})) {
            return $default ?? [];
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> a67e542f (.)
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
        return match ($type) {
            'string' => $this->getStringProperty($object, $property, is_string($default) ? $default : null),
            'int' => $this->getIntProperty($object, $property, is_int($default) ? $default : null),
            'float' => $this->getFloatProperty($object, $property, is_float($default) ? $default : null),
            'bool' => $this->getBooleanProperty($object, $property, is_bool($default) ? $default : null),
            'array' => $this->getArrayProperty($object, $property, is_array($default) ? $default : null),
            default => throw new InvalidArgumentException("Tipo non supportato: {$type}"),
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
        object $object,
        string $property,
        string $type,
        null|callable $validator = null,
        mixed $default = null,
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        object $object, 
        string $property, 
        string $type, 
        ?callable $validator = null,
        mixed $default = null
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
    ): mixed {
        Assert::object($object);
        Assert::stringNotEmpty($property);
        Assert::inArray($type, ['string', 'int', 'float', 'bool', 'array']);

        $value = $this->getTypedProperty($object, $property, $type, $default);

        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
        if ($validator !== null && !$validator($value)) {
            return $default;
        }

<<<<<<< HEAD
        $value = $this->getTypedProperty($object, $property, $type, $default);

        if ($validator !== null && !$validator($value)) {
            return $default;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        
        $value = $this->getTypedProperty($object, $property, $type, $default);
        
        if ($validator !== null && !$validator($value)) {
            return $default;
        }
        
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
    public function callMethodSafely(
        object $object,
        string $method,
        array $parameters = [],
        mixed $default = null,
    ): mixed {
        Assert::object($object);
        Assert::stringNotEmpty($method);

        if (!method_exists($object, $method)) {
            return $default;
        }

        Assert::object($object);
        Assert::stringNotEmpty($method);

        if (!method_exists($object, $method)) {
            return $default;
        }

        try {
            return $object->{$method}(...$parameters);
        } catch (Throwable $e) {
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
            return $default;
        }
    }
}
