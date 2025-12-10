<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use Spatie\QueueableAction\QueueableAction;

/**
 * Action per convertire in modo sicuro un valore mixed in boolean.
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast boolean in tutto il progetto
 * - KISS: Logica semplice e diretta, facile da comprendere e mantenere
 * - Sicurezza: Gestisce tutti i casi edge e previene errori di cast
 *
 * Casi d'uso tipici:
 * - Conversione di valori da API esterne
 * - Parsing di dati da file CSV/JSON
 * - Gestione di input utente
 * - Risoluzione errori PHPStan "Cannot cast mixed to bool"
 *
 * @example
 * // Uso base
 * $bool = SafeBooleanCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $bool = SafeBooleanCastAction::cast($mixedValue, true);
 *
 * // Con validazione di valori specifici
 * $bool = SafeBooleanCastAction::castFromString($mixedValue, ['yes', 'on', '1']);
 */
class SafeBooleanCastAction
{
    use QueueableAction;

    /**
     * Converte in modo sicuro un valore mixed in boolean.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  bool|null  $default  Valore di default se la conversione fallisce (default: false)
     * @return bool Il valore convertito
     */
    public function execute(mixed $value, ?bool $default = false): bool
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
     * @param bool|null $default Valore di default se la conversione fallisce (default: false)
     *
     * @return bool Il valore convertito
     */
    public function execute(mixed $value, null|bool $default = false): bool
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function execute(mixed $value, ?bool $default = false): bool
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|bool $default = false): bool
=======
    public function execute(mixed $value, ?bool $default = false): bool
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function execute(mixed $value, null|bool $default = false): bool
>>>>>>> b93ef594b4 (.)
=======
    public function execute(mixed $value, ?bool $default = false): bool
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
    public function execute(mixed $value, ?bool $default = false): bool
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
    public function execute(mixed $value, null|bool $default = false): bool
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
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(mixed $value, null|bool $default = false): bool
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
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|bool $default = false): bool
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
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|bool $default = false): bool
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
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(mixed $value, null|bool $default = false): bool
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
    public function execute(mixed $value, null|bool $default = false): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function execute(mixed $value, null|bool $default = false): bool
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public function execute(mixed $value, null|bool $default = false): bool
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|bool $default = false): bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
    {
        // Se è già un boolean, restituiscilo direttamente
        if (is_bool($value)) {
            return $value;
        }

        // Se è null, restituisci il default
        if (is_null($value)) {
            return $default ?? false;
        }

        // Se è un intero, convertilo (0 = false, altri = true)
        if (is_int($value)) {
            return $value !== 0;
        }

        // Se è un float, convertilo (0.0 = false, altri = true)
        if (is_float($value)) {
            return $value !== 0.0 && is_finite($value);
        }

        // Se è una stringa, convertila
        if (is_string($value)) {
            return $this->parseStringToBool($value, $default);
        }

        // Se è un array, convertilo (array vuoto = false, altri = true)
        if (is_array($value)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return ! empty($value);
=======
            return !empty($value);
>>>>>>> 5a14301c (.)
=======
            return !empty($value);
>>>>>>> 5a14301c (.)
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
<<<<<<< HEAD
<<<<<<< HEAD
            return ! empty(get_object_vars($value));
=======
            return !empty(get_object_vars($value));
>>>>>>> 5a14301c (.)
=======
            return !empty(get_object_vars($value));
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD

=======
        
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
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
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
            return !empty($value);
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
>>>>>>> 5a14301c (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
=======
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            return !empty($value);
        }
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)

=======
        
>>>>>>> f1d4085 (.)
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
=======
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)

=======
        
>>>>>>> f1d4085 (.)
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
            return !empty($value);
        }
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)

=======
        
>>>>>>> f1d4085 (.)
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
=======
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)

        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }

        // Per tutti gli altri tipi, restituisci il default
        return $default ?? false;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Converte una stringa in boolean con gestione avanzata.
     *
     * @param  string  $value  La stringa da convertire
     * @param  bool|null  $default  Valore di default
     * @return bool Il valore convertito
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private function parseStringToBool(string $value, ?bool $default = false): bool
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
    private function parseStringToBool(string $value, null|bool $default = false): bool
>>>>>>> ed734516 (.)
    {
        $trimmed = strtolower(trim($value));

        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? false;
        }

        // Valori che rappresentano true
        $trueValues = ['true', '1', 'yes', 'on', 'enabled', 'active', 'si', 'sì'];
        if (in_array($trimmed, $trueValues, true)) {
            return true;
        }

        // Valori che rappresentano false
        $falseValues = ['false', '0', 'no', 'off', 'disabled', 'inactive'];
        if (in_array($trimmed, $falseValues, true)) {
            return false;
        }

        // Se la stringa contiene solo numeri, convertila
        if (is_numeric($trimmed)) {
            return ((float) $trimmed) !== 0.0;
        }

        // Per tutte le altre stringhe, restituisci il default
        return $default ?? false;
    }

    /**
>>>>>>> ab8cc3f3 (.)
     * Converte un valore in boolean con validazione di valori specifici.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $trueValues  Array di valori che rappresentano true
     * @param  array  $falseValues  Array di valori che rappresentano false
     * @param  bool|null  $default  Valore di default se la conversione fallisce
     * @return bool Il valore convertito
     */
    public function executeWithCustomValues(
        mixed $value,
        array $trueValues,
        array $falseValues,
        ?bool $default = false,
    ): bool {
        if (is_string($value)) {
            $trimmed = strtolower(trim($value));

            if (
                in_array(
                    $trimmed,
                    array_map(fn ($value) => is_string($value) ? strtolower($value) : $value, $trueValues),
                    true,
                )
            ) {
                return true;
            }

            if (
                in_array(
                    $trimmed,
                    array_map(fn ($value) => is_string($value) ? strtolower($value) : $value, $falseValues),
                    true,
                )
            ) {
                return false;
            }
        }

        // Fallback al comportamento standard
        return $this->execute($value, $default);
    }

    /**
     * Converte un valore in boolean con validazione di range numerico.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float  $threshold  Soglia per determinare true/false
     * @param  bool  $greaterThanTrue  True se valori > threshold sono true, false altrimenti
     * @param  bool|null  $default  Valore di default se la conversione fallisce
     * @return bool Il valore convertito
     */
    public function executeWithThreshold(
        mixed $value,
        float $threshold,
        bool $greaterThanTrue = true,
        ?bool $default = false,
    ): bool {
        if (is_numeric($value)) {
            $numeric = (float) $value;

            if ($greaterThanTrue) {
                return $numeric > $threshold;
            }

            return $numeric < $threshold;
        }

        // Fallback al comportamento standard
        return $this->execute($value, $default);
    }

    /**
     * Verifica se un valore può essere convertito in boolean.
     *
     * @param  mixed  $value  Il valore da verificare
     * @return bool True se il valore può essere convertito in boolean
     */
    public function canCast(mixed $value): bool
    {
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
    }

    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  bool|null  $default  Valore di default se la conversione fallisce (default: false)
     * @return bool Il valore convertito in boolean
     */
    public static function cast(mixed $value, ?bool $default = false): bool
    {
        return app(self::class)->execute($value, $default);
    }

    /**
     * Metodo statico per cast con valori personalizzati.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $trueValues  Array di valori che rappresentano true
     * @param  array  $falseValues  Array di valori che rappresentano false
     * @param  bool|null  $default  Valore di default se la conversione fallisce
     * @return bool Il valore convertito
     */
    public static function castWithCustomValues(
        mixed $value,
        array $trueValues,
        array $falseValues,
        ?bool $default = false,
    ): bool {
        return app(self::class)->executeWithCustomValues($value, $trueValues, $falseValues, $default);
    }

    /**
     * Metodo statico per cast con soglia numerica.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float  $threshold  Soglia per determinare true/false
     * @param  bool  $greaterThanTrue  True se valori > threshold sono true, false altrimenti
     * @param  bool|null  $default  Valore di default se la conversione fallisce
     * @return bool Il valore convertito
     */
    public static function castWithThreshold(
        mixed $value,
        float $threshold,
        bool $greaterThanTrue = true,
        ?bool $default = false,
    ): bool {
        return app(self::class)->executeWithThreshold($value, $threshold, $greaterThanTrue, $default);
    }

    /**
     * Converte una stringa in boolean con gestione avanzata.
     *
     * @param  string  $value  La stringa da convertire
     * @param  bool|null  $default  Valore di default
     * @return bool Il valore convertito
     */
    private function parseStringToBool(string $value, ?bool $default = false): bool
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * Converte una stringa in boolean con gestione avanzata.
     *
     * @param string $value La stringa da convertire
     * @param bool|null $default Valore di default
     *
     * @return bool Il valore convertito
     */
    private function parseStringToBool(string $value, null|bool $default = false): bool
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
        $trimmed = strtolower(trim($value));

        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? false;
        }

        // Valori che rappresentano true
        $trueValues = ['true', '1', 'yes', 'on', 'enabled', 'active', 'si', 'sì'];
        if (in_array($trimmed, $trueValues, true)) {
            return true;
        }

        // Valori che rappresentano false
        $falseValues = ['false', '0', 'no', 'off', 'disabled', 'inactive'];
        if (in_array($trimmed, $falseValues, true)) {
            return false;
        }

        // Se la stringa contiene solo numeri, convertila
        if (is_numeric($trimmed)) {
            return ((float) $trimmed) !== 0.0;
        }

        // Per tutte le altre stringhe, restituisci il default
        return $default ?? false;
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

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
    public function executeWithCustomValues(
        mixed $value,
        array $trueValues,
        array $falseValues,
        null|bool $default = false,
    ): bool {
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
    public function executeWithThreshold(
        mixed $value,
        float $threshold,
        bool $greaterThanTrue = true,
        null|bool $default = false,
    ): bool {
        if (is_numeric($value)) {
            $numeric = (float) $value;

            if ($greaterThanTrue) {
                return $numeric > $threshold;
            } else {
                return $numeric < $threshold;
            }
        }

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
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
    }

    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param mixed $value Il valore da convertire
     * @param bool|null $default Valore di default se la conversione fallisce (default: false)
     *
     * @return bool Il valore convertito in boolean
     */
    public static function cast(mixed $value, null|bool $default = false): bool
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
    public static function castWithCustomValues(
        mixed $value,
        array $trueValues,
        array $falseValues,
        null|bool $default = false,
    ): bool {
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
    public static function castWithThreshold(
        mixed $value,
        float $threshold,
        bool $greaterThanTrue = true,
        null|bool $default = false,
    ): bool {
        return app(self::class)->executeWithThreshold($value, $threshold, $greaterThanTrue, $default);
    }
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
}
