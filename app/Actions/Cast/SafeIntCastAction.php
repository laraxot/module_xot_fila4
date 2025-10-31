<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

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
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_match;

/**
 * Action per convertire in modo sicuro un valore mixed in int.
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use function Safe\preg_match;

use Spatie\QueueableAction\QueueableAction;

/**
 * Action per convertire in modo sicuro un valore mixed in int.
 * 
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast int in tutto il progetto
 * - KISS: Logica semplice e diretta, facile da comprendere e mantenere
 * - Robustezza: Gestisce tutti i casi edge e mantiene la type safety
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
 *
 * @package Modules\Xot\Actions\Cast
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
 */
class SafeIntCastAction
{
    use QueueableAction;

    /**
     * Converte in modo sicuro un valore mixed in int.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int|null  $default  Valore di default se la conversione fallisce (default: 0)
     * @return int Il valore convertito in int
     */
<<<<<<< HEAD
    public function execute(mixed $value, ?int $default = 0): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, ?int $default = 0): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|int $default = 0): int
=======
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        // Se è già un int, restituiscilo direttamente
        if (is_int($value)) {
            return $value;
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

        // Se è un float, convertilo in int (troncamento)
        if (is_float($value)) {
            return is_finite($value) ? ((int) $value) : ($default ?? 0);
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        // Se è un float, convertilo in int (troncamento)
        if (is_float($value)) {
            return is_finite($value) ? (int) $value : ($default ?? 0);
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        // Se è null, restituisci il default
        if (is_null($value)) {
            return $default ?? 0;
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

>>>>>>> 300ef70 (.)
        // Se è una stringa, prova a convertirla
        if (is_string($value)) {
            return $this->parseStringToInt($value, $default);
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

>>>>>>> 300ef70 (.)
        // Se è un booleano, convertilo (true = 1, false = 0)
        if (is_bool($value)) {
            return $value ? 1 : 0;
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

>>>>>>> 300ef70 (.)
        // Se è un array e ha un solo elemento numerico
        if (is_array($value) && count($value) === 1) {
            return $this->execute(reset($value), $default);
        }
<<<<<<< HEAD
<<<<<<< HEAD

        // Se è un oggetto con metodo __toString, prova a convertirlo
        if (is_object($value) && method_exists($value, '__toString')) {
            return $this->parseStringToInt((string) $value, $default);
        }

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)

        // Se è un oggetto con metodo __toString, prova a convertirlo
        if (is_object($value) && method_exists($value, '__toString')) {
            return $this->parseStringToInt((string) $value, $default);
        }

<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        // Per tutti gli altri tipi, restituisci il default
        return $default ?? 0;
    }

    /**
     * Converte una stringa in int con gestione avanzata.
     *
     * @param  string  $value  La stringa da convertire
     * @param  int|null  $default  Valore di default
     * @return int Il valore convertito
     */
<<<<<<< HEAD
    private function parseStringToInt(string $value, ?int $default = 0): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    private function parseStringToInt(string $value, ?int $default = 0): int
    {
        $trimmed = trim($value);

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    private function parseStringToInt(string $value, null|int $default = 0): int
>>>>>>> a6ef6dc7 (.)
    {
        $trimmed = trim($value);

<<<<<<< HEAD
<<<<<<< HEAD
=======
    private function parseStringToInt(string $value, ?int $default = 0): int
    {
        $trimmed = trim($value);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? 0;
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

        // Rimuovi separatori di migliaia comuni
        $normalized = str_replace([',', ' ', '.'], '', $trimmed);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        // Rimuovi separatori di migliaia comuni
        $normalized = str_replace([',', ' ', '.'], '', $trimmed);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        // Verifica se è un numero valido
        if (is_numeric($normalized)) {
            $int = (int) $normalized;

            return $int;
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

>>>>>>> 300ef70 (.)
        // Prova a estrarre solo i numeri
        $matches = [];
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && ! empty($matches[0])) {
            return (int) $matches[0];
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

        return $default ?? 0;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        return $default ?? 0;
    }
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int|null  $default  Valore di default se la conversione fallisce (default: 0)
     * @return int Il valore convertito in int
     */
<<<<<<< HEAD
    public static function cast(mixed $value, ?int $default = 0): int
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
    public static function cast(mixed $value, null|int $default = 0): int
>>>>>>> a6ef6dc7 (.)
    {
        return app(self::class)->execute($value, $default);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public static function cast(mixed $value, ?int $default = 0): int
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
     * Converte un valore in int con validazione di range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int  $min  Valore minimo consentito
     * @param  int  $max  Valore massimo consentito
     * @param  int|null  $default  Valore di default se la conversione fallisce
     * @return int Il valore convertito e validato
     */
<<<<<<< HEAD
    public function executeWithRange(mixed $value, int $min, int $max, ?int $default = null): int
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
    public function executeWithRange(mixed $value, int $min, int $max, null|int $default = null): int
>>>>>>> a6ef6dc7 (.)
    {
        $int = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $int));
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function executeWithRange(mixed $value, int $min, int $max, ?int $default = null): int
    {
        $int = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $int));
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
     * @param  int  $min  Valore minimo consentito
     * @param  int  $max  Valore massimo consentito
     * @param  int|null  $default  Valore di default se la conversione fallisce
     * @return int Il valore convertito e validato
     */
<<<<<<< HEAD
    public static function castWithRange(mixed $value, int $min, int $max, ?int $default = null): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, int $min, int $max, ?int $default = null): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, int $min, int $max, null|int $default = null): int
=======
    public static function castWithRange(mixed $value, int $min, int $max, ?int $default = null): int
>>>>>>> f1d4085 (.)
=======
    public static function castWithRange(mixed $value, int $min, int $max, null|int $default = null): int
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function castWithRange(mixed $value, int $min, int $max, null|int $default = null): int
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        return app(self::class)->executeWithRange($value, $min, $max, $default);
    }

    /**
     * Converte un valore in ID positivo (sempre >= 1).
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int|null  $default  Valore di default se la conversione fallisce (default: 1)
     * @return int Il valore convertito come ID positivo
     */
<<<<<<< HEAD
    public function executeAsId(mixed $value, ?int $default = 1): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsId(mixed $value, ?int $default = 1): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsId(mixed $value, null|int $default = 1): int
=======
    public function executeAsId(mixed $value, ?int $default = 1): int
>>>>>>> f1d4085 (.)
=======
    public function executeAsId(mixed $value, null|int $default = 1): int
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function executeAsId(mixed $value, null|int $default = 1): int
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        $int = $this->execute($value, $default);

        return max(1, $int);
    }

    /**
     * Metodo statico per cast come ID positivo.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int|null  $default  Valore di default se la conversione fallisce (default: 1)
     * @return int Il valore convertito come ID positivo
     */
<<<<<<< HEAD
    public static function castAsId(mixed $value, ?int $default = 1): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsId(mixed $value, ?int $default = 1): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsId(mixed $value, null|int $default = 1): int
=======
    public static function castAsId(mixed $value, ?int $default = 1): int
>>>>>>> f1d4085 (.)
=======
    public static function castAsId(mixed $value, null|int $default = 1): int
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function castAsId(mixed $value, null|int $default = 1): int
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    {
        return app(self::class)->executeAsId($value, $default);
    }
}
