<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use Spatie\QueueableAction\QueueableAction;

/**
 * Action per convertire in modo sicuro un valore mixed in array.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
<<<<<<< HEAD
=======
 * 
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast array in tutto il progetto
 * - KISS: Logica semplice e diretta, facile da comprendere e mantenere
 * - Sicurezza: Gestisce tutti i casi edge e previene errori di cast
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
 * Casi d'uso tipici:
 * - Conversione di valori da API esterne
 * - Parsing di dati da file CSV/JSON
 * - Gestione di input utente
 * - Risoluzione errori PHPStan "Cannot cast mixed to array"
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
 *
 * @example
 * // Uso base
 * $array = SafeArrayCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $array = SafeArrayCastAction::cast($mixedValue, ['default']);
 *
<<<<<<< HEAD
=======
 * 
 * @example
 * // Uso base
 * $array = SafeArrayCastAction::cast($mixedValue);
 * 
 * // Con default personalizzato
 * $array = SafeArrayCastAction::cast($mixedValue, ['default']);
 * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
 * // Con validazione di struttura
 * $array = SafeArrayCastAction::castWithKeys($mixedValue, ['required_key']);
 */
class SafeArrayCastAction
{
    use QueueableAction;

    /**
     * Converte in modo sicuro un valore mixed in array.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  array|null  $default  Valore di default se la conversione fallisce (default: [])
     * @return array Il valore convertito
     */
    public function execute(mixed $value, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param array|null $default Valore di default se la conversione fallisce (default: [])
     *
     * @return array Il valore convertito
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, ?array $default = []): array
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|array $default = []): array
=======
    public function execute(mixed $value, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> b93ef594b4 (.)
=======
    public function execute(mixed $value, ?array $default = []): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?array $default = []): array
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
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function execute(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function execute(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    {
        // Se è già un array, restituiscilo direttamente
        if (is_array($value)) {
            return $value;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è null, restituisci il default
        if (is_null($value)) {
            return $default ?? [];
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è una Collection Laravel, convertila in array
        if (is_object($value) && method_exists($value, 'toArray')) {
            $result = $value->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return is_array($result) ? $result : ($default ?? []);
        }
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        
>>>>>>> f1d4085 (.)
        // Se è un oggetto stdClass, convertilo in array
<<<<<<< HEAD
<<<<<<< HEAD
        if (is_object($value) && $value::class === 'stdClass') {
=======
        if (is_object($value) && get_class($value) === 'stdClass') {
>>>>>>> 5a14301c (.)
=======
        if (is_object($value) && get_class($value) === 'stdClass') {
>>>>>>> 5a14301c (.)
            return (array) $value;
        }
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
            return is_array($result) ? $result : ($default ?? []);
        }

>>>>>>> 5a14301c (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }
=======
>>>>>>> 21348520 (.)
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            return is_array($result) ? $result : ($default ?? []);
        }

>>>>>>> 5a14301c (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }
=======
>>>>>>> 21348520 (.)
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
            return is_array($result) ? $result : ($default ?? []);
        }

>>>>>>> 5a14301c (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }
=======
>>>>>>> 21348520 (.)
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è un oggetto con metodo __toArray, usalo
        if (is_object($value) && method_exists($value, '__toArray')) {
            $result = $value->__toArray();
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
            return is_array($result) ? $result : ($default ?? []);
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è un oggetto con proprietà pubbliche, convertilo in array
        if (is_object($value)) {
            return get_object_vars($value);
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è uno scalare, avvolgilo in un array
        if (is_scalar($value)) {
            return [$value];
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Per tutti gli altri tipi, restituisci il default
        return $default ?? [];
    }

    /**
     * Converte un valore in array con validazione di chiavi richieste.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $requiredKeys  Chiavi che devono essere presenti
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con chiavi validate
     */
    public function executeWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param array $requiredKeys Chiavi che devono essere presenti
     * @param array|null $default Valore di default se la conversione fallisce
     *
     * @return array Il valore convertito con chiavi validate
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function executeWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
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
    {
        $array = $this->execute($value, $default);

<<<<<<< HEAD
=======
    public function executeWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    {
        $array = $this->execute($value, $default);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        // Verifica che tutte le chiavi richieste siano presenti
        foreach ($requiredKeys as $key) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! is_string($key) && ! is_int($key)) {
                continue;
            }
            if (! array_key_exists($key, $array)) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            if (!is_string($key) && !is_int($key)) {
                continue;
            }
            if (!array_key_exists($key, $array)) {
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
                return $default ?? [];
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        return $array;
    }

    /**
     * Converte un valore in array con filtro di chiavi.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $allowedKeys  Solo queste chiavi saranno mantenute
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con solo le chiavi permesse
     */
    public function executeWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param array $allowedKeys Solo queste chiavi saranno mantenute
     * @param array|null $default Valore di default se la conversione fallisce
     *
     * @return array Il valore convertito con solo le chiavi permesse
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function executeWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
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
    {
        $array = $this->execute($value, $default);

<<<<<<< HEAD
=======
    public function executeWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    {
        $array = $this->execute($value, $default);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        // Filtra solo le chiavi permesse
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $flippedKeys = array_flip(array_filter($allowedKeys, fn ($key) => is_string($key) || is_int($key)));

=======
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
>>>>>>> 5a14301c (.)
=======
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
>>>>>>> 5a14301c (.)
=======
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
>>>>>>> 5a14301c (.)
=======
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
>>>>>>> 5a14301c (.)
=======
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
>>>>>>> 5a14301c (.)
        return array_intersect_key($array, $flippedKeys);
    }

    /**
     * Converte un valore in array con validazione di tipo per i valori.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  string  $valueType  Tipo richiesto per i valori ('string', 'int', 'float', 'bool')
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con valori del tipo richiesto
     */
    public function executeWithValueType(mixed $value, string $valueType, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param string $valueType Tipo richiesto per i valori ('string', 'int', 'float', 'bool')
     * @param array|null $default Valore di default se la conversione fallisce
     *
     * @return array Il valore convertito con valori del tipo richiesto
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function executeWithValueType(mixed $value, string $valueType, null|array $default = []): array
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeWithValueType(mixed $value, string $valueType, ?array $default = []): array
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function executeWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> d2b0a27 (.)
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
>>>>>>> 5a14301c (.)
    {
        $array = $this->execute($value, $default);

        // Converte i valori al tipo richiesto
        switch ($valueType) {
            case 'string':
                return array_map(SafeStringCastAction::cast(...), $array);
            case 'int':
                return array_map(SafeIntCastAction::cast(...), $array);
            case 'float':
                return array_map(SafeFloatCastAction::cast(...), $array);
            case 'bool':
                return array_map(SafeBooleanCastAction::cast(...), $array);
<<<<<<< HEAD
=======
    public function executeWithValueType(mixed $value, string $valueType, ?array $default = []): array
    {
        $array = $this->execute($value, $default);
        
        // Converte i valori al tipo richiesto
        switch ($valueType) {
            case 'string':
                return array_map(fn($v) => SafeStringCastAction::cast($v), $array);
            case 'int':
                return array_map(fn($v) => SafeIntCastAction::cast($v), $array);
            case 'float':
                return array_map(fn($v) => SafeFloatCastAction::cast($v), $array);
            case 'bool':
                return array_map(fn($v) => SafeBooleanCastAction::cast($v), $array);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            default:
                return $array;
        }
    }

    /**
     * Verifica se un valore può essere convertito in array.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da verificare
=======
     * @param mixed $value Il valore da verificare
     *
>>>>>>> 5a14301c (.)
=======
     * @param mixed $value Il valore da verificare
     *
>>>>>>> 5a14301c (.)
=======
     * @param mixed $value Il valore da verificare
     *
>>>>>>> 5a14301c (.)
=======
     * @param mixed $value Il valore da verificare
     *
>>>>>>> 5a14301c (.)
=======
     * @param mixed $value Il valore da verificare
     *
>>>>>>> 5a14301c (.)
     * @return bool True se il valore può essere convertito in array
     */
    public function canCast(mixed $value): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return is_array($value) || is_null($value) || is_object($value) || is_scalar($value);
=======
        return is_array($value) || 
               is_null($value) || 
               is_object($value) || 
               is_scalar($value);
>>>>>>> f1d4085 (.)
=======
        return is_array($value) || is_null($value) || is_object($value) || is_scalar($value);
>>>>>>> 73eab74 (.)
    }

    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  array|null  $default  Valore di default se la conversione fallisce (default: [])
     * @return array Il valore convertito in array
     */
    public static function cast(mixed $value, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param array|null $default Valore di default se la conversione fallisce (default: [])
     *
     * @return array Il valore convertito in array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function cast(mixed $value, null|array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function cast(mixed $value, ?array $default = []): array
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public static function cast(mixed $value, null|array $default = []): array
=======
    public static function cast(mixed $value, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> b93ef594b4 (.)
=======
    public static function cast(mixed $value, ?array $default = []): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function cast(mixed $value, ?array $default = []): array
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
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public static function cast(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function cast(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function cast(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public static function cast(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function cast(mixed $value, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    {
        return app(self::class)->execute($value, $default);
    }

    /**
     * Metodo statico per cast con chiavi richieste.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $requiredKeys  Chiavi che devono essere presenti
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con chiavi validate
     */
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param array $requiredKeys Chiavi che devono essere presenti
     * @param array|null $default Valore di default se la conversione fallisce
     *
     * @return array Il valore convertito con chiavi validate
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> b93ef594b4 (.)
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
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
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    {
        return app(self::class)->executeWithKeys($value, $requiredKeys, $default);
    }

    /**
     * Metodo statico per cast con filtro di chiavi.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $allowedKeys  Solo queste chiavi saranno mantenute
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con solo le chiavi permesse
     */
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param array $allowedKeys Solo queste chiavi saranno mantenute
     * @param array|null $default Valore di default se la conversione fallisce
     *
     * @return array Il valore convertito con solo le chiavi permesse
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> b93ef594b4 (.)
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
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
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    {
        return app(self::class)->executeWithFilter($value, $allowedKeys, $default);
    }

    /**
     * Metodo statico per cast con tipo di valore specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  string  $valueType  Tipo richiesto per i valori
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con valori del tipo richiesto
     */
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param string $valueType Tipo richiesto per i valori
     * @param array|null $default Valore di default se la conversione fallisce
     *
     * @return array Il valore convertito con valori del tipo richiesto
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
=======
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> b93ef594b4 (.)
=======
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
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
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    {
        return app(self::class)->executeWithValueType($value, $valueType, $default);
    }
}
