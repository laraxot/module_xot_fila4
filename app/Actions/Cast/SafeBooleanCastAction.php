<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use Spatie\QueueableAction\QueueableAction;

/**
 * Action per convertire in modo sicuro un valore mixed in boolean.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
 * 
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast boolean in tutto il progetto
 * - KISS: Logica semplice e diretta, facile da comprendere e mantenere
 * - Sicurezza: Gestisce tutti i casi edge e previene errori di cast
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
 * Casi d'uso tipici:
 * - Conversione di valori da API esterne
 * - Parsing di dati da file CSV/JSON
 * - Gestione di input utente
 * - Risoluzione errori PHPStan "Cannot cast mixed to bool"
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 *
 * @example
 * // Uso base
 * $bool = SafeBooleanCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $bool = SafeBooleanCastAction::cast($mixedValue, true);
 *
<<<<<<< HEAD
=======
=======
 * 
=======
 *
>>>>>>> b93ef594b4 (.)
 * @example
 * // Uso base
 * $bool = SafeBooleanCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $bool = SafeBooleanCastAction::cast($mixedValue, true);
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
 * @example
 * // Uso base
 * $bool = SafeBooleanCastAction::cast($mixedValue);
 * 
 * // Con default personalizzato
 * $bool = SafeBooleanCastAction::cast($mixedValue, true);
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * // Con validazione di valori specifici
 * $bool = SafeBooleanCastAction::castFromString($mixedValue, ['yes', 'on', '1']);
 */
class SafeBooleanCastAction
{
    use QueueableAction;

    /**
     * Converte in modo sicuro un valore mixed in boolean.
     *
     * @param mixed $value Il valore da convertire
     * @param bool|null $default Valore di default se la conversione fallisce (default: false)
     *
     * @return bool Il valore convertito
     */
<<<<<<< HEAD
    public function execute(mixed $value, null|bool $default = false): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|bool $default = false): bool
=======
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> a12f125f4a (.)
=======
    public function execute(mixed $value, null|bool $default = false): bool
>>>>>>> b93ef594b4 (.)
=======
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        // Se è già un boolean, restituiscilo direttamente
        if (is_bool($value)) {
            return $value;
        }
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
        // Se è null, restituisci il default
        if (is_null($value)) {
            return $default ?? false;
        }
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
        // Se è un intero, convertilo (0 = false, altri = true)
        if (is_int($value)) {
            return $value !== 0;
        }
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
        // Se è un float, convertilo (0.0 = false, altri = true)
        if (is_float($value)) {
            return $value !== 0.0 && is_finite($value);
        }
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
        // Se è una stringa, convertila
        if (is_string($value)) {
            return $this->parseStringToBool($value, $default);
        }
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
        // Se è un array, convertilo (array vuoto = false, altri = true)
        if (is_array($value)) {
            return !empty($value);
        }
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
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
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
        // Per tutti gli altri tipi, restituisci il default
        return $default ?? false;
    }

    /**
     * Converte una stringa in boolean con gestione avanzata.
     *
     * @param string $value La stringa da convertire
     * @param bool|null $default Valore di default
     *
     * @return bool Il valore convertito
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    private function parseStringToBool(string $value, null|bool $default = false): bool
    {
        $trimmed = strtolower(trim($value));

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    private function parseStringToBool(string $value, ?bool $default = false): bool
    {
        $trimmed = strtolower(trim($value));
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    private function parseStringToBool(string $value, null|bool $default = false): bool
    {
        $trimmed = strtolower(trim($value));

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? false;
        }
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
        // Valori che rappresentano true
        $trueValues = ['true', '1', 'yes', 'on', 'enabled', 'active', 'si', 'sì'];
        if (in_array($trimmed, $trueValues, true)) {
            return true;
        }
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
        // Valori che rappresentano false
        $falseValues = ['false', '0', 'no', 'off', 'disabled', 'inactive'];
        if (in_array($trimmed, $falseValues, true)) {
            return false;
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Se la stringa contiene solo numeri, convertila
        if (is_numeric($trimmed)) {
            return ((float) $trimmed) !== 0.0;
        }

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Se la stringa contiene solo numeri, convertila
        if (is_numeric($trimmed)) {
            return ((float) $trimmed) !== 0.0;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        // Se la stringa contiene solo numeri, convertila
        if (is_numeric($trimmed)) {
            return (float) $trimmed !== 0.0;
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Per tutte le altre stringhe, restituisci il default
        return $default ?? false;
    }

    /**
     * Converte un valore in boolean con validazione di valori specifici.
     *
     * @param mixed $value Il valore da convertire
     * @param array $trueValues Array di valori che rappresentano true
     * @param array $falseValues Array di valori che rappresentano false
     * @param bool|null $default Valore di default se la conversione fallisce
     *
     * @return bool Il valore convertito
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function executeWithCustomValues(
        mixed $value,
        array $trueValues,
        array $falseValues,
        null|bool $default = false,
    ): bool {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        if (is_string($value)) {
            $trimmed = strtolower(trim($value));

            if (
                in_array(
                    $trimmed,
                    array_map(fn($value) => is_string($value) ? strtolower($value) : $value, $trueValues),
                    true,
                )
            ) {
                return true;
            }

            if (
                in_array(
                    $trimmed,
                    array_map(fn($value) => is_string($value) ? strtolower($value) : $value, $falseValues),
                    true,
                )
            ) {
                return false;
            }
        }

<<<<<<< HEAD
=======
=======
    public function executeWithCustomValues(mixed $value, array $trueValues, array $falseValues, ?bool $default = false): bool
    {
=======
>>>>>>> b93ef594b4 (.)
        if (is_string($value)) {
            $trimmed = strtolower(trim($value));

            if (
                in_array(
                    $trimmed,
                    array_map(fn($value) => is_string($value) ? strtolower($value) : $value, $trueValues),
                    true,
                )
            ) {
                return true;
            }

            if (
                in_array(
                    $trimmed,
                    array_map(fn($value) => is_string($value) ? strtolower($value) : $value, $falseValues),
                    true,
                )
            ) {
                return false;
            }
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    public function executeWithCustomValues(mixed $value, array $trueValues, array $falseValues, ?bool $default = false): bool
    {
        if (is_string($value)) {
            $trimmed = strtolower(trim($value));
            
            if (in_array($trimmed, array_map(fn($value) => is_string($value) ? strtolower($value) : $value, $trueValues), true)) {
                return true;
            }
            
            if (in_array($trimmed, array_map(fn($value) => is_string($value) ? strtolower($value) : $value, $falseValues), true)) {
                return false;
            }
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Fallback al comportamento standard
        return $this->execute($value, $default);
    }

    /**
     * Converte un valore in boolean con validazione di range numerico.
     *
     * @param mixed $value Il valore da convertire
     * @param float $threshold Soglia per determinare true/false
     * @param bool $greaterThanTrue True se valori > threshold sono true, false altrimenti
     * @param bool|null $default Valore di default se la conversione fallisce
     *
     * @return bool Il valore convertito
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function executeWithThreshold(
        mixed $value,
        float $threshold,
        bool $greaterThanTrue = true,
        null|bool $default = false,
    ): bool {
<<<<<<< HEAD
        if (is_numeric($value)) {
            $numeric = (float) $value;

=======
<<<<<<< HEAD
        if (is_numeric($value)) {
            $numeric = (float) $value;

=======
=======
>>>>>>> origin/develop
    public function executeWithThreshold(mixed $value, float $threshold, bool $greaterThanTrue = true, ?bool $default = false): bool
    {
        if (is_numeric($value)) {
            $numeric = (float) $value;
            
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (is_numeric($value)) {
            $numeric = (float) $value;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            if ($greaterThanTrue) {
                return $numeric > $threshold;
            } else {
                return $numeric < $threshold;
            }
        }
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
        // Fallback al comportamento standard
        return $this->execute($value, $default);
    }

    /**
     * Verifica se un valore può essere convertito in boolean.
     *
     * @param mixed $value Il valore da verificare
     *
     * @return bool True se il valore può essere convertito in boolean
     */
    public function canCast(mixed $value): bool
    {
<<<<<<< HEAD
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
=======
=======
>>>>>>> origin/develop
        return is_bool($value) || 
               is_null($value) || 
               is_scalar($value) || 
               is_array($value) || 
               is_object($value);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param mixed $value Il valore da convertire
     * @param bool|null $default Valore di default se la conversione fallisce (default: false)
     *
     * @return bool Il valore convertito in boolean
     */
<<<<<<< HEAD
    public static function cast(mixed $value, null|bool $default = false): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function cast(mixed $value, null|bool $default = false): bool
=======
    public static function cast(mixed $value, ?bool $default = false): bool
>>>>>>> a12f125f4a (.)
=======
    public static function cast(mixed $value, null|bool $default = false): bool
>>>>>>> b93ef594b4 (.)
=======
    public static function cast(mixed $value, ?bool $default = false): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return app(self::class)->execute($value, $default);
    }

    /**
     * Metodo statico per cast con valori personalizzati.
     *
     * @param mixed $value Il valore da convertire
     * @param array $trueValues Array di valori che rappresentano true
     * @param array $falseValues Array di valori che rappresentano false
     * @param bool|null $default Valore di default se la conversione fallisce
     *
     * @return bool Il valore convertito
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public static function castWithCustomValues(
        mixed $value,
        array $trueValues,
        array $falseValues,
        null|bool $default = false,
    ): bool {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public static function castWithCustomValues(mixed $value, array $trueValues, array $falseValues, ?bool $default = false): bool
    {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public static function castWithCustomValues(mixed $value, array $trueValues, array $falseValues, ?bool $default = false): bool
    {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return app(self::class)->executeWithCustomValues($value, $trueValues, $falseValues, $default);
    }

    /**
     * Metodo statico per cast con soglia numerica.
     *
     * @param mixed $value Il valore da convertire
     * @param float $threshold Soglia per determinare true/false
     * @param bool $greaterThanTrue True se valori > threshold sono true, false altrimenti
     * @param bool|null $default Valore di default se la conversione fallisce
     *
     * @return bool Il valore convertito
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public static function castWithThreshold(
        mixed $value,
        float $threshold,
        bool $greaterThanTrue = true,
        null|bool $default = false,
    ): bool {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public static function castWithThreshold(mixed $value, float $threshold, bool $greaterThanTrue = true, ?bool $default = false): bool
    {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public static function castWithThreshold(mixed $value, float $threshold, bool $greaterThanTrue = true, ?bool $default = false): bool
    {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return app(self::class)->executeWithThreshold($value, $threshold, $greaterThanTrue, $default);
    }
}
