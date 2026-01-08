<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use function Safe\preg_replace;

/**
 * Action per convertire in modo sicuro un valore mixed in float.
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
 * 
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast float in tutto il progetto
 * - KISS: Logica semplice e diretta, facile da comprendere e mantenere
 * - Sicurezza: Gestisce tutti i casi edge e previene errori di cast
<<<<<<< HEAD
<<<<<<< HEAD
 *
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
>>>>>>> d2b0a27 (.)
=======
 *
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
 * Casi d'uso tipici:
 * - Conversione di valori da API esterne
 * - Parsing di dati da file CSV/JSON
 * - Gestione di input utente
 * - Risoluzione errori PHPStan "Cannot cast mixed to float"
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
 *
 * @example
 * // Uso base
 * $value = SafeFloatCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $value = SafeFloatCastAction::cast($mixedValue, 10.5);
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
 * 
 * @example
 * // Uso base
 * $value = SafeFloatCastAction::cast($mixedValue);
 * 
 * // Con default personalizzato
 * $value = SafeFloatCastAction::cast($mixedValue, 10.5);
 * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
 * // Con validazione di range
 * $percentage = SafeFloatCastAction::castWithRange($mixedValue, 0.0, 100.0);
 */
class SafeFloatCastAction
{
    /**
     * Converte in modo sicuro un valore mixed in float.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce (default: 0.0)
     * @return float Il valore convertito
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
    public function execute(mixed $value, ?float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    public function execute(mixed $value, ?float $default = 0.0): float
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param float|null $default Valore di default se la conversione fallisce (default: 0.0)
     *
     * @return float Il valore convertito
     */
    public function execute(mixed $value, null|float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, ?float $default = 0.0): float
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|float $default = 0.0): float
=======
    public function execute(mixed $value, ?float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function execute(mixed $value, null|float $default = 0.0): float
>>>>>>> b93ef594b4 (.)
=======
    public function execute(mixed $value, ?float $default = 0.0): float
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|float $default = 0.0): float
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
    public function execute(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(mixed $value, null|float $default = 0.0): float
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
    public function execute(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
    public function execute(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
    public function execute(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    {
        // Se è già un float, verifica che sia valido
        if (is_float($value)) {
            return is_finite($value) ? $value : ($default ?? 0.0);
        }
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

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // Se è un intero, convertilo in float
        if (is_int($value)) {
            return (float) $value;
        }
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

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // Se è null, restituisci il default
        if (is_null($value)) {
            return $default ?? 0.0;
        }
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

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // Se è una stringa, prova a convertirla
        if (is_string($value)) {
            return $this->parseStringToFloat($value, $default);
        }
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

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // Se è un booleano, convertilo (true = 1.0, false = 0.0)
        if (is_bool($value)) {
            return $value ? 1.0 : 0.0;
        }
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

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // Se è un array e ha un solo elemento numerico
        if (is_array($value) && count($value) === 1) {
            return $this->execute(reset($value), $default);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)

        // Se è un oggetto con metodo __toString, prova a convertirlo
        if (is_object($value) && method_exists($value, '__toString')) {
            return $this->parseStringToFloat((string) $value, $default);
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)

>>>>>>> 8b18e4bff (.)
        // Se è un oggetto con metodo __toString, prova a convertirlo
        if (is_object($value) && method_exists($value, '__toString')) {
            return $this->parseStringToFloat((string) $value, $default);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======

<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // Per tutti gli altri tipi, restituisci il default
        return $default ?? 0.0;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Converte una stringa in float con gestione avanzata.
     *
     * @param  string  $value  La stringa da convertire
     * @param  float|null  $default  Valore di default
     * @return float Il valore convertito
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
=======
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
    {
        $trimmed = trim($value);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
    private function parseStringToFloat(string $value, null|float $default = 0.0): float
=======
=======
>>>>>>> 300ef70 (.)
    private function parseStringToFloat(string $value, null|float $default = 0.0): float
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
    {
        $trimmed = trim($value);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
=======
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
    {
        $trimmed = trim($value);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? 0.0;
        }
<<<<<<< HEAD
=======
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

        // Gestisci separatori decimali comuni (virgola europea)
        $normalized = str_replace(',', '.', $trimmed);

        // Rimuovi caratteri non numerici eccetto punto, segno meno, plus e notazione scientifica
        $cleaned = preg_replace('/[^0-9.\-+eE]/', '', $normalized);

        // Verifica se è un numero valido dopo la pulizia
        if (is_numeric($cleaned) && ! empty($cleaned)) {
            $float = (float) $cleaned;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        // Gestisci separatori decimali comuni (virgola europea)
        $normalized = str_replace(',', '.', $trimmed);
        
        // Rimuovi caratteri non numerici eccetto punto, segno meno, plus e notazione scientifica
        $cleaned = preg_replace('/[^0-9.\-+eE]/', '', $normalized);
        
        // Verifica se è un numero valido dopo la pulizia
        if (is_numeric($cleaned) && !empty($cleaned)) {
            $float = (float) $cleaned;
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            // Verifica che non sia infinito o NaN
            if (is_finite($float)) {
                return $float;
            }
        }
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

        return $default ?? 0.0;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        return $default ?? 0.0;
    }
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    /**
>>>>>>> ab8cc3f3 (.)
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce (default: 0.0)
     * @return float Il valore convertito in float
     */
<<<<<<< HEAD
    public static function cast(mixed $value, ?float $default = 0.0): float
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
    public static function cast(mixed $value, null|float $default = 0.0): float
>>>>>>> a6ef6dc7 (.)
    {
        return app(self::class)->execute($value, $default);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public static function cast(mixed $value, ?float $default = 0.0): float
    {
        return app(self::class)->execute($value, $default);
    }
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    /**
     * Converte un valore in float con validazione di range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float  $min  Valore minimo consentito
     * @param  float  $max  Valore massimo consentito
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito e validato
     */
<<<<<<< HEAD
    public function executeWithRange(mixed $value, float $min, float $max, ?float $default = null): float
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
    public function executeWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> a6ef6dc7 (.)
    {
        $float = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function executeWithRange(mixed $value, float $min, float $max, ?float $default = null): float
    {
        $float = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    /**
     * Metodo statico di convenienza per cast con range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float  $min  Valore minimo consentito
     * @param  float  $max  Valore massimo consentito
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito e validato
     */
<<<<<<< HEAD
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
=======
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
>>>>>>> f1d4085 (.)
=======
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        return app(self::class)->executeWithRange($value, $min, $max, $default);
    }

    /**
     * Converte un valore in float con controllo di precisione.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int  $precision  Numero di decimali (default: 2)
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito con precisione specificata
     */
<<<<<<< HEAD
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        $float = $this->execute($value, $default);

        return round($float, max(0, $precision));
    }

    /**
     * Metodo statico per cast con precisione.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int  $precision  Numero di decimali (default: 2)
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito con precisione specificata
     */
<<<<<<< HEAD
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        return app(self::class)->executeWithPrecision($value, $precision, $default);
    }

    /**
     * Converte un valore in percentuale (0-100).
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito come percentuale (0-100)
     */
<<<<<<< HEAD
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
=======
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        return $this->executeWithRange($value, 0.0, 100.0, $default);
    }

    /**
     * Metodo statico per cast come percentuale.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito come percentuale (0-100)
     */
<<<<<<< HEAD
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
=======
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        return app(self::class)->executeAsPercentage($value, $default);
    }

    /**
     * Converte un valore in formato monetario (sempre positivo, 2 decimali).
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito come importo monetario
     */
<<<<<<< HEAD
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
=======
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        $float = $this->execute($value, $default);

        return round(abs($float), 2);
    }

    /**
     * Metodo statico per cast come importo monetario.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito come importo monetario
     */
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)

        // Gestisci separatori decimali comuni (virgola europea)
        $normalized = str_replace(',', '.', $trimmed);

        // Rimuovi caratteri non numerici eccetto punto, segno meno, plus e notazione scientifica
        $cleaned = preg_replace('/[^0-9.\-+eE]/', '', $normalized);

        // Verifica se è un numero valido dopo la pulizia
        if (is_numeric($cleaned) && ! empty($cleaned)) {
            $float = (float) $cleaned;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        // Gestisci separatori decimali comuni (virgola europea)
        $normalized = str_replace(',', '.', $trimmed);
        
        // Rimuovi caratteri non numerici eccetto punto, segno meno, plus e notazione scientifica
        $cleaned = preg_replace('/[^0-9.\-+eE]/', '', $normalized);
        
        // Verifica se è un numero valido dopo la pulizia
        if (is_numeric($cleaned) && !empty($cleaned)) {
            $float = (float) $cleaned;
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
            // Verifica che non sia infinito o NaN
            if (is_finite($float)) {
                return $float;
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)

        return $default ?? 0.0;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        return $default ?? 0.0;
    }
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    /**
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce (default: 0.0)
     * @return float Il valore convertito in float
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public static function cast(mixed $value, null|float $default = 0.0): float
    {
        return app(self::class)->execute($value, $default);
    }

<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    public static function cast(mixed $value, ?float $default = 0.0): float
    {
        return app(self::class)->execute($value, $default);
    }

<<<<<<< HEAD
=======
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    /**
     * Converte un valore in float con validazione di range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float  $min  Valore minimo consentito
     * @param  float  $max  Valore massimo consentito
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito e validato
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function executeWithRange(mixed $value, float $min, float $max, null|float $default = null): float
    {
        $float = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }

<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    public function executeWithRange(mixed $value, float $min, float $max, ?float $default = null): float
    {
        $float = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }

<<<<<<< HEAD
=======
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    /**
     * Metodo statico di convenienza per cast con range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float  $min  Valore minimo consentito
     * @param  float  $max  Valore massimo consentito
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito e validato
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
=======
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
>>>>>>> f1d4085 (.)
=======
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
>>>>>>> 285375c74 (.)
    {
        return app(self::class)->executeWithRange($value, $min, $max, $default);
    }

    /**
     * Converte un valore in float con controllo di precisione.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int  $precision  Numero di decimali (default: 2)
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito con precisione specificata
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> 285375c74 (.)
    {
        $float = $this->execute($value, $default);

        return round($float, max(0, $precision));
    }

    /**
     * Metodo statico per cast con precisione.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int  $precision  Numero di decimali (default: 2)
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito con precisione specificata
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> 285375c74 (.)
    {
        return app(self::class)->executeWithPrecision($value, $precision, $default);
    }

    /**
     * Converte un valore in percentuale (0-100).
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito come percentuale (0-100)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
=======
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> 285375c74 (.)
    {
        return $this->executeWithRange($value, 0.0, 100.0, $default);
    }

    /**
     * Metodo statico per cast come percentuale.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito come percentuale (0-100)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
=======
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> 285375c74 (.)
    {
        return app(self::class)->executeAsPercentage($value, $default);
    }

    /**
     * Converte un valore in formato monetario (sempre positivo, 2 decimali).
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito come importo monetario
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
=======
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
>>>>>>> 285375c74 (.)
    {
        $float = $this->execute($value, $default);

        return round(abs($float), 2);
    }

    /**
     * Metodo statico per cast come importo monetario.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito come importo monetario
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public static function castAsCurrency(mixed $value, null|float $default = 0.0): float
    {
        return app(self::class)->executeAsCurrency($value, $default);
    }

    /**
     * Converte una stringa in float con gestione avanzata.
     *
     * @param  string  $value  La stringa da convertire
     * @param  float|null  $default  Valore di default
     * @return float Il valore convertito
     */
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
    {
        $trimmed = trim($value);

        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? 0.0;
        }

        // Gestisci separatori decimali comuni (virgola europea)
        $normalized = str_replace(',', '.', $trimmed);

        // Rimuovi caratteri non numerici eccetto punto, segno meno, plus e notazione scientifica
        $cleaned = preg_replace('/[^0-9.\-+eE]/', '', $normalized);

        // Verifica se è un numero valido dopo la pulizia
        if (is_numeric($cleaned) && ! empty($cleaned)) {
            $float = (float) $cleaned;

            // Verifica che non sia infinito o NaN
            if (is_finite($float)) {
                return $float;
            }
        }

        return $default ?? 0.0;
    }
}
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public static function castAsCurrency(mixed $value, ?float $default = 0.0): float
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
    public static function castAsCurrency(mixed $value, null|float $default = 0.0): float
>>>>>>> a6ef6dc7 (.)
    {
        return app(self::class)->executeAsCurrency($value, $default);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public static function castAsCurrency(mixed $value, ?float $default = 0.0): float
    {
        return app(self::class)->executeAsCurrency($value, $default);
    }
<<<<<<< HEAD
}
>>>>>>> 8b18e4bff (.)
=======
} 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
