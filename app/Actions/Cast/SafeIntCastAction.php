<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_match;

/**
 * Action per convertire in modo sicuro un valore mixed in int.
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
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
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast int in tutto il progetto
 * - KISS: Logica semplice e diretta, facile da comprendere e mantenere
 * - Robustezza: Gestisce tutti i casi edge e mantiene la type safety
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
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
class SafeIntCastAction
{
    use QueueableAction;

    /**
     * Converte in modo sicuro un valore mixed in int.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $value  Il valore da convertire
     * @param  int|null  $default  Valore di default se la conversione fallisce (default: 0)
     * @return int Il valore convertito in int
     */
    public function execute(mixed $value, ?int $default = 0): int
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
     * @param mixed $value Il valore da convertire
     * @param int|null $default Valore di default se la conversione fallisce (default: 0)
     *
     * @return int Il valore convertito in int
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|int $default = 0): int
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, ?int $default = 0): int
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
    public function execute(mixed $value, null|int $default = 0): int
=======
    public function execute(mixed $value, ?int $default = 0): int
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> b93ef594b4 (.)
=======
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
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
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
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
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
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
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
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
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
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
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?int $default = 0): int
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function execute(mixed $value, null|int $default = 0): int
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    {
        // Se è già un int, restituiscilo direttamente
        if (is_int($value)) {
            return $value;
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        // Se è un float, convertilo in int (troncamento)
        if (is_float($value)) {
            return is_finite($value) ? ((int) $value) : ($default ?? 0);
        }

<<<<<<< HEAD
=======
        
        // Se è un float, convertilo in int (troncamento)
        if (is_float($value)) {
            return is_finite($value) ? (int) $value : ($default ?? 0);
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        // Se è null, restituisci il default
        if (is_null($value)) {
            return $default ?? 0;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è una stringa, prova a convertirla
        if (is_string($value)) {
            return $this->parseStringToInt($value, $default);
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è un booleano, convertilo (true = 1, false = 0)
        if (is_bool($value)) {
            return $value ? 1 : 0;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è un array e ha un solo elemento numerico
        if (is_array($value) && count($value) === 1) {
            return $this->execute(reset($value), $default);
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Se è un oggetto con metodo __toString, prova a convertirlo
        if (is_object($value) && method_exists($value, '__toString')) {
            return $this->parseStringToInt((string) $value, $default);
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Per tutti gli altri tipi, restituisci il default
        return $default ?? 0;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Converte una stringa in int con gestione avanzata.
     *
     * @param  string  $value  La stringa da convertire
     * @param  int|null  $default  Valore di default
     * @return int Il valore convertito
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
    private function parseStringToInt(string $value, ?int $default = 0): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
    private function parseStringToInt(string $value, ?int $default = 0): int
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    private function parseStringToInt(string $value, null|int $default = 0): int
>>>>>>> ed734516 (.)
    {
        $trimmed = trim($value);

<<<<<<< HEAD
=======
    private function parseStringToInt(string $value, ?int $default = 0): int
    {
        $trimmed = trim($value);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? 0;
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        // Rimuovi separatori di migliaia comuni
        $normalized = str_replace([',', ' ', '.'], '', $trimmed);

<<<<<<< HEAD
=======
        
        // Rimuovi separatori di migliaia comuni
        $normalized = str_replace([',', ' ', '.'], '', $trimmed);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        // Verifica se è un numero valido
        if (is_numeric($normalized)) {
            $int = (int) $normalized;

            return $int;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Prova a estrarre solo i numeri
        $matches = [];
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && ! empty($matches[0])) {
            return (int) $matches[0];
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        return $default ?? 0;
    }

<<<<<<< HEAD
=======
        
        return $default ?? 0;
    }
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    /**
>>>>>>> ab8cc3f3 (.)
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int|null  $default  Valore di default se la conversione fallisce (default: 0)
     * @return int Il valore convertito in int
     */
    public static function cast(mixed $value, ?int $default = 0): int
    {
        return app(self::class)->execute($value, $default);
    }

    /**
     * Converte un valore in int con validazione di range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int  $min  Valore minimo consentito
     * @param  int  $max  Valore massimo consentito
     * @param  int|null  $default  Valore di default se la conversione fallisce
     * @return int Il valore convertito e validato
     */
    public function executeWithRange(mixed $value, int $min, int $max, ?int $default = null): int
    {
        $int = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $int));
    }

    /**
     * Metodo statico di convenienza per cast con range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  int  $min  Valore minimo consentito
     * @param  int  $max  Valore massimo consentito
     * @param  int|null  $default  Valore di default se la conversione fallisce
     * @return int Il valore convertito e validato
     */
    public static function castWithRange(mixed $value, int $min, int $max, ?int $default = null): int
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
    public function executeAsId(mixed $value, ?int $default = 1): int
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
    public static function castAsId(mixed $value, ?int $default = 1): int
    {
        return app(self::class)->executeAsId($value, $default);
    }

    /**
     * Converte una stringa in int con gestione avanzata.
     *
     * @param  string  $value  La stringa da convertire
     * @param  int|null  $default  Valore di default
     * @return int Il valore convertito
     */
    private function parseStringToInt(string $value, ?int $default = 0): int
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
     * Converte una stringa in int con gestione avanzata.
     *
     * @param string $value La stringa da convertire
     * @param int|null $default Valore di default
     *
     * @return int Il valore convertito
     */
    private function parseStringToInt(string $value, null|int $default = 0): int
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
    {
        $trimmed = trim($value);

        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? 0;
        }

        // Rimuovi separatori di migliaia comuni
        $normalized = str_replace([',', ' ', '.'], '', $trimmed);

        // Verifica se è un numero valido
        if (is_numeric($normalized)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return (int) $normalized;
=======
            $int = (int) $normalized;
            return $int;
>>>>>>> 5a14301c (.)
=======
            $int = (int) $normalized;
            return $int;
>>>>>>> 5a14301c (.)
=======
            $int = (int) $normalized;
            return $int;
>>>>>>> 5a14301c (.)
=======
            $int = (int) $normalized;
            return $int;
>>>>>>> 5a14301c (.)
=======
            $int = (int) $normalized;
            return $int;
>>>>>>> 5a14301c (.)
=======
            $int = (int) $normalized;
            return $int;
>>>>>>> 5a14301c (.)
        }

        // Prova a estrarre solo i numeri
        $matches = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && ! empty($matches[0])) {
=======
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && !empty($matches[0])) {
>>>>>>> 5a14301c (.)
=======
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && !empty($matches[0])) {
>>>>>>> 5a14301c (.)
=======
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && !empty($matches[0])) {
>>>>>>> 5a14301c (.)
=======
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && !empty($matches[0])) {
>>>>>>> 5a14301c (.)
=======
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && !empty($matches[0])) {
>>>>>>> 5a14301c (.)
=======
        if (preg_match('/^[+-]?[0-9]+/', $normalized, $matches) === 1 && !empty($matches[0])) {
>>>>>>> 5a14301c (.)
            return (int) $matches[0];
        }

        return $default ?? 0;
    }
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
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param mixed $value Il valore da convertire
     * @param int|null $default Valore di default se la conversione fallisce (default: 0)
     *
     * @return int Il valore convertito in int
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public static function cast(mixed $value, null|int $default = 0): int
    {
        return app(self::class)->execute($value, $default);
    }

<<<<<<< HEAD
=======
    public static function cast(mixed $value, ?int $default = 0): int
    {
        return app(self::class)->execute($value, $default);
    }
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    /**
     * Converte un valore in int con validazione di range.
     *
     * @param mixed $value Il valore da convertire
     * @param int $min Valore minimo consentito
     * @param int $max Valore massimo consentito
     * @param int|null $default Valore di default se la conversione fallisce
     *
     * @return int Il valore convertito e validato
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function executeWithRange(mixed $value, int $min, int $max, null|int $default = null): int
    {
        $int = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $int));
    }

<<<<<<< HEAD
=======
    public function executeWithRange(mixed $value, int $min, int $max, ?int $default = null): int
    {
        $int = $this->execute($value, $default);
        
        // Clamp il valore tra min e max
        return max($min, min($max, $int));
    }
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    /**
     * Metodo statico di convenienza per cast con range.
     *
     * @param mixed $value Il valore da convertire
     * @param int $min Valore minimo consentito
     * @param int $max Valore massimo consentito
     * @param int|null $default Valore di default se la conversione fallisce
     *
     * @return int Il valore convertito e validato
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, int $min, int $max, null|int $default = null): int
=======
    public static function castWithRange(mixed $value, int $min, int $max, ?int $default = null): int
>>>>>>> f1d4085 (.)
=======
    public static function castWithRange(mixed $value, int $min, int $max, null|int $default = null): int
>>>>>>> 73eab74 (.)
    {
        return app(self::class)->executeWithRange($value, $min, $max, $default);
    }

    /**
     * Converte un valore in ID positivo (sempre >= 1).
     *
     * @param mixed $value Il valore da convertire
     * @param int|null $default Valore di default se la conversione fallisce (default: 1)
     *
     * @return int Il valore convertito come ID positivo
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsId(mixed $value, null|int $default = 1): int
=======
    public function executeAsId(mixed $value, ?int $default = 1): int
>>>>>>> f1d4085 (.)
=======
    public function executeAsId(mixed $value, null|int $default = 1): int
>>>>>>> 73eab74 (.)
    {
        $int = $this->execute($value, $default);
        return max(1, $int);
    }

    /**
     * Metodo statico per cast come ID positivo.
     *
     * @param mixed $value Il valore da convertire
     * @param int|null $default Valore di default se la conversione fallisce (default: 1)
     *
     * @return int Il valore convertito come ID positivo
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsId(mixed $value, null|int $default = 1): int
=======
    public static function castAsId(mixed $value, ?int $default = 1): int
>>>>>>> f1d4085 (.)
=======
    public static function castAsId(mixed $value, null|int $default = 1): int
>>>>>>> 73eab74 (.)
    {
        return app(self::class)->executeAsId($value, $default);
    }
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
}
