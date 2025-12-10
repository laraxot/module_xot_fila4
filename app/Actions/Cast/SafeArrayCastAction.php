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
=======
>>>>>>> 2f3197ab (.)
 * 
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 * 
<<<<<<< HEAD
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast array in tutto il progetto
 * - KISS: Logica semplice e diretta, facile da comprendere e mantenere
 * - Sicurezza: Gestisce tutti i casi edge e previene errori di cast
<<<<<<< HEAD
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
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
 * @example
 * // Uso base
 * $array = SafeArrayCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $array = SafeArrayCastAction::cast($mixedValue, ['default']);
 *
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
 * // Con validazione di struttura
 * $array = SafeArrayCastAction::castWithKeys($mixedValue, ['required_key']);
 */
class SafeArrayCastAction
{
    use QueueableAction;

    /**
     * Converte in modo sicuro un valore mixed in array.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  array|null  $default  Valore di default se la conversione fallisce (default: [])
     * @return array Il valore convertito
     */
    public function execute(mixed $value, ?array $default = []): array
     * @param mixed $value Il valore da convertire
     * @param array|null $default Valore di default se la conversione fallisce (default: [])
     *
     * @return array Il valore convertito
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|array $default = []): array
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|array $default = []): array
=======
>>>>>>> 2f3197ab (.)
    public function execute(mixed $value, ?array $default = []): array
    public function execute(mixed $value, ?array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, ?array $default = []): array
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, ?array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
<<<<<<< HEAD
    public function execute(mixed $value, ?array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, ?array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, ?array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, ?array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
    public function execute(mixed $value, ?array $default = []): array
    public function execute(mixed $value, null|array $default = []): array
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function execute(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    {
        // Se è già un array, restituiscilo direttamente
        if (is_array($value)) {
            return $value;
        }
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        // Se è null, restituisci il default
        if (is_null($value)) {
            return $default ?? [];
        }
=======
>>>>>>> 218dfed3 (.)
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
>>>>>>> 218dfed3 (.)
        // Se è una Collection Laravel, convertila in array
        if (is_object($value) && method_exists($value, 'toArray')) {
            $result = $value->toArray();
            return is_array($result) ? $result : ($default ?? []);
        }
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }


        
        
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }

            return is_array($result) ? $result : ($default ?? []);
        }
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
=======
>>>>>>> 2f3197ab (.)
        
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }

            return is_array($result) ? $result : ($default ?? []);
        }

        
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD

<<<<<<< HEAD
        
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }

            return is_array($result) ? $result : ($default ?? []);
        }

        
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }

        
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }

            return is_array($result) ? $result : ($default ?? []);
        }

        
        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }

        // Se è un oggetto stdClass, convertilo in array
        if (is_object($value) && get_class($value) === 'stdClass') {
            return (array) $value;
        }

        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> 218dfed3 (.)
        // Se è un oggetto con metodo __toArray, usalo
        if (is_object($value) && method_exists($value, '__toArray')) {
            $result = $value->__toArray();
            return is_array($result) ? $result : ($default ?? []);
        }
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
        // Se è un oggetto con proprietà pubbliche, convertilo in array
        if (is_object($value)) {
            return get_object_vars($value);
        }
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        // Se è uno scalare, avvolgilo in un array
        if (is_scalar($value)) {
            return [$value];
        }
=======
>>>>>>> 218dfed3 (.)
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
>>>>>>> 218dfed3 (.)
        // Per tutti gli altri tipi, restituisci il default
        return $default ?? [];
    }

    /**
     * Converte un valore in array con validazione di chiavi richieste.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $requiredKeys  Chiavi che devono essere presenti
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con chiavi validate
     */
    public function executeWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
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
    {
        $array = $this->execute($value, $default);

    public function executeWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    {
        $array = $this->execute($value, $default);
        
    public function executeWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
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
            if (! is_string($key) && ! is_int($key)) {
                continue;
            }
            if (! array_key_exists($key, $array)) {
            if (!is_string($key) && !is_int($key)) {
                continue;
            }
            if (!array_key_exists($key, $array)) {
                return $default ?? [];
            }
        }
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
        return $array;
    }

    /**
     * Converte un valore in array con filtro di chiavi.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $allowedKeys  Solo queste chiavi saranno mantenute
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con solo le chiavi permesse
     */
    public function executeWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
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
    {
        $array = $this->execute($value, $default);

    public function executeWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    {
        $array = $this->execute($value, $default);
        
    public function executeWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
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
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
        $flippedKeys = array_flip(array_filter($allowedKeys, fn($key) => is_string($key) || is_int($key)));
        return array_intersect_key($array, $flippedKeys);
    }

    /**
     * Converte un valore in array con validazione di tipo per i valori.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  string  $valueType  Tipo richiesto per i valori ('string', 'int', 'float', 'bool')
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con valori del tipo richiesto
     */
    public function executeWithValueType(mixed $value, string $valueType, ?array $default = []): array
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
    public function executeWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public function executeWithValueType(mixed $value, string $valueType, null|array $default = []): array
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
=======
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            default:
                return $array;
        }
    }

    /**
     * Verifica se un valore può essere convertito in array.
     *
     * @param mixed $value Il valore da verificare
     *
     * @param mixed $value Il valore da verificare
     *
     * @param mixed $value Il valore da verificare
     *
     * @param mixed $value Il valore da verificare
     *
     * @param mixed $value Il valore da verificare
     *
     * @return bool True se il valore può essere convertito in array
     */
    public function canCast(mixed $value): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return is_array($value) || 
               is_null($value) || 
               is_object($value) || 
               is_scalar($value);
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
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
     * @param  mixed  $value  Il valore da convertire
     * @param  array|null  $default  Valore di default se la conversione fallisce (default: [])
     * @return array Il valore convertito in array
     */
    public static function cast(mixed $value, ?array $default = []): array
     * @param mixed $value Il valore da convertire
     * @param array|null $default Valore di default se la conversione fallisce (default: [])
     *
     * @return array Il valore convertito in array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function cast(mixed $value, null|array $default = []): array
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function cast(mixed $value, null|array $default = []): array
=======
>>>>>>> 2f3197ab (.)
    public static function cast(mixed $value, ?array $default = []): array
    public static function cast(mixed $value, ?array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, ?array $default = []): array
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, ?array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
<<<<<<< HEAD
    public static function cast(mixed $value, ?array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, ?array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, ?array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, ?array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
    public static function cast(mixed $value, ?array $default = []): array
    public static function cast(mixed $value, null|array $default = []): array
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function cast(mixed $value, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    {
        return app(self::class)->execute($value, $default);
    }

    /**
     * Metodo statico per cast con chiavi richieste.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $requiredKeys  Chiavi che devono essere presenti
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con chiavi validate
     */
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
=======
>>>>>>> 2f3197ab (.)
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
<<<<<<< HEAD
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, ?array $default = []): array
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function castWithKeys(mixed $value, array $requiredKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    {
        return app(self::class)->executeWithKeys($value, $requiredKeys, $default);
    }

    /**
     * Metodo statico per cast con filtro di chiavi.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $allowedKeys  Solo queste chiavi saranno mantenute
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con solo le chiavi permesse
     */
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
=======
>>>>>>> 2f3197ab (.)
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
<<<<<<< HEAD
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, ?array $default = []): array
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function castWithFilter(mixed $value, array $allowedKeys, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    {
        return app(self::class)->executeWithFilter($value, $allowedKeys, $default);
    }

    /**
     * Metodo statico per cast con tipo di valore specifico.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  string  $valueType  Tipo richiesto per i valori
     * @param  array|null  $default  Valore di default se la conversione fallisce
     * @return array Il valore convertito con valori del tipo richiesto
     */
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
=======
>>>>>>> 2f3197ab (.)
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
<<<<<<< HEAD
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, ?array $default = []): array
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function castWithValueType(mixed $value, string $valueType, null|array $default = []): array
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    {
        return app(self::class)->executeWithValueType($value, $valueType, $default);
    }
}
