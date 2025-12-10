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
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
 * 
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 * 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
 *
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
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
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
 * Principi applicati:
 * - DRY: Evita duplicazione di logica di cast float in tutto il progetto
 * - KISS: Logica semplice e diretta, facile da comprendere e mantenere
 * - Sicurezza: Gestisce tutti i casi edge e previene errori di cast
<<<<<<< HEAD
<<<<<<< HEAD
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
 *
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
 *
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
 * Casi d'uso tipici:
 * - Conversione di valori da API esterne
 * - Parsing di dati da file CSV/JSON
 * - Gestione di input utente
 * - Risoluzione errori PHPStan "Cannot cast mixed to float"
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
 * 
=======
 *
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
 * @example
 * // Uso base
 * $value = SafeFloatCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $value = SafeFloatCastAction::cast($mixedValue, 10.5);
<<<<<<< HEAD
 *
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
    public function execute(mixed $value, ?float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
     * @param mixed $value Il valore da convertire
     * @param float|null $default Valore di default se la conversione fallisce (default: 0.0)
     *
     * @return float Il valore convertito
     */
    public function execute(mixed $value, null|float $default = 0.0): float
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
>>>>>>> 2f3197ab (.)
    public function execute(mixed $value, ?float $default = 0.0): float
    public function execute(mixed $value, ?float $default = 0.0): float
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, ?float $default = 0.0): float
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, ?float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
<<<<<<< HEAD
    public function execute(mixed $value, ?float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, ?float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, ?float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, ?float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
    public function execute(mixed $value, ?float $default = 0.0): float
    public function execute(mixed $value, null|float $default = 0.0): float
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
    public function execute(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function execute(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public function execute(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function execute(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public function execute(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    {
        // Se è già un float, verifica che sia valido
        if (is_float($value)) {
            return is_finite($value) ? $value : ($default ?? 0.0);
        }
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
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD

>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        // Se è un intero, convertilo in float
        if (is_int($value)) {
            return (float) $value;
        }
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
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD

>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        // Se è null, restituisci il default
        if (is_null($value)) {
            return $default ?? 0.0;
        }
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
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD

>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        // Se è una stringa, prova a convertirla
        if (is_string($value)) {
            return $this->parseStringToFloat($value, $default);
        }
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
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD

>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        // Se è un booleano, convertilo (true = 1.0, false = 0.0)
        if (is_bool($value)) {
            return $value ? 1.0 : 0.0;
        }
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
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD

>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        // Se è un array e ha un solo elemento numerico
        if (is_array($value) && count($value) === 1) {
            return $this->execute(reset($value), $default);
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        // Se è un oggetto con metodo __toString, prova a convertirlo
        if (is_object($value) && method_exists($value, '__toString')) {
            return $this->parseStringToFloat((string) $value, $default);
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 414a4ffcb (.)
        // Se è un oggetto con metodo __toString, prova a convertirlo
        if (is_object($value) && method_exists($value, '__toString')) {
            return $this->parseStringToFloat((string) $value, $default);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

>>>>>>> 7468a7d2 (.)
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)

>>>>>>> 5cf46378 (.)
        // Se è un oggetto con metodo __toString, prova a convertirlo
        if (is_object($value) && method_exists($value, '__toString')) {
            return $this->parseStringToFloat((string) $value, $default);
        }
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======

<<<<<<< HEAD
=======
        
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        // Per tutti gli altri tipi, restituisci il default
        return $default ?? 0.0;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
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
=======
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
=======
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce (default: 0.0)
     * @return float Il valore convertito in float
     */
    public static function cast(mixed $value, ?float $default = 0.0): float
>>>>>>> 414a4ffcb (.)
    {
        return app(self::class)->execute($value, $default);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
    private function parseStringToFloat(string $value, null|float $default = 0.0): float
=======
=======
>>>>>>> 300ef70 (.)
    private function parseStringToFloat(string $value, null|float $default = 0.0): float
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        $trimmed = trim($value);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
    private function parseStringToFloat(string $value, ?float $default = 0.0): float
    {
        $trimmed = trim($value);
        
<<<<<<< HEAD
<<<<<<< HEAD
    private function parseStringToFloat(string $value, null|float $default = 0.0): float
=======
    /**
     * Converte un valore in float con validazione di range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float  $min  Valore minimo consentito
     * @param  float  $max  Valore massimo consentito
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito e validato
     */
    public function executeWithRange(mixed $value, float $min, float $max, ?float $default = null): float
    {
        $float = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }

    /**
     * Metodo statico di convenienza per cast con range.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float  $min  Valore minimo consentito
     * @param  float  $max  Valore massimo consentito
     * @param  float|null  $default  Valore di default se la conversione fallisce
     * @return float Il valore convertito e validato
     */
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
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
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
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
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
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
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
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
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
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
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
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
    public static function castAsCurrency(mixed $value, ?float $default = 0.0): float
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
>>>>>>> 414a4ffcb (.)
    {
        $trimmed = trim($value);

=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        // Stringa vuota o solo spazi
        if (empty($trimmed)) {
            return $default ?? 0.0;
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

        // Gestisci separatori decimali comuni (virgola europea)
        $normalized = str_replace(',', '.', $trimmed);

        // Rimuovi caratteri non numerici eccetto punto, segno meno, plus e notazione scientifica
        $cleaned = preg_replace('/[^0-9.\-+eE]/', '', $normalized);

        // Verifica se è un numero valido dopo la pulizia
        if (is_numeric($cleaned) && ! empty($cleaned)) {
            $float = (float) $cleaned;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // Gestisci separatori decimali comuni (virgola europea)
        $normalized = str_replace(',', '.', $trimmed);

        // Rimuovi caratteri non numerici eccetto punto, segno meno, plus e notazione scientifica
        $cleaned = preg_replace('/[^0-9.\-+eE]/', '', $normalized);

        // Verifica se è un numero valido dopo la pulizia
        if (is_numeric($cleaned) && !empty($cleaned)) {
            $float = (float) $cleaned;

=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
        
        // Gestisci separatori decimali comuni (virgola europea)
        $normalized = str_replace(',', '.', $trimmed);
        
        // Rimuovi caratteri non numerici eccetto punto, segno meno, plus e notazione scientifica
        $cleaned = preg_replace('/[^0-9.\-+eE]/', '', $normalized);
        
        // Verifica se è un numero valido dopo la pulizia
        if (is_numeric($cleaned) && !empty($cleaned)) {
            $float = (float) $cleaned;
            
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
            // Verifica che non sia infinito o NaN
            if (is_finite($float)) {
                return $float;
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)

        return $default ?? 0.0;
    }
<<<<<<< HEAD

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
        
        return $default ?? 0.0;
    }
    
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

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
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    /**
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 551c768c4 (.)
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  float|null  $default  Valore di default se la conversione fallisce (default: 0.0)
     * @return float Il valore convertito in float
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function cast(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
    public static function cast(mixed $value, null|float $default = 0.0): float
=======
=======
>>>>>>> 300ef70 (.)
    public static function cast(mixed $value, null|float $default = 0.0): float
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        return app(self::class)->execute($value, $default);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
    public function executeWithRange(mixed $value, float $min, float $max, ?float $default = null): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
    public function executeWithRange(mixed $value, float $min, float $max, null|float $default = null): float
=======
=======
>>>>>>> 300ef70 (.)
    public function executeWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        $float = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
=======
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
>>>>>>> f1d4085 (.)
=======
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
=======
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
=======
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
=======
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
=======
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
    public static function castAsCurrency(mixed $value, null|float $default = 0.0): float
=======
    public static function castAsCurrency(mixed $value, ?float $default = 0.0): float
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
     * Converte una stringa in float con gestione avanzata.
     *
     * @param string $value La stringa da convertire
     * @param float|null $default Valore di default
     *
     * @return float Il valore convertito
     */
    private function parseStringToFloat(string $value, null|float $default = 0.0): float
=======
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
        if (is_numeric($cleaned) && !empty($cleaned)) {
        if (is_numeric($cleaned) && !empty($cleaned)) {
        if (is_numeric($cleaned) && !empty($cleaned)) {
        if (is_numeric($cleaned) && !empty($cleaned)) {
        if (is_numeric($cleaned) && !empty($cleaned)) {
=======
        if (is_numeric($cleaned) && ! empty($cleaned)) {
>>>>>>> 551c768c4 (.)
            $float = (float) $cleaned;

            // Verifica che non sia infinito o NaN
            if (is_finite($float)) {
                return $float;
            }
        }

        return $default ?? 0.0;
    }
<<<<<<< HEAD

    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param mixed $value Il valore da convertire
     * @param float|null $default Valore di default se la conversione fallisce (default: 0.0)
     *
     * @return float Il valore convertito in float
     */
    public static function cast(mixed $value, null|float $default = 0.0): float
    {
        return app(self::class)->execute($value, $default);
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    public static function cast(mixed $value, ?float $default = 0.0): float
    {
        return app(self::class)->execute($value, $default);
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    public static function cast(mixed $value, null|float $default = 0.0): float
    {
        return app(self::class)->execute($value, $default);
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
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    /**
     * Converte un valore in float con validazione di range.
     *
     * @param mixed $value Il valore da convertire
     * @param float $min Valore minimo consentito
     * @param float $max Valore massimo consentito
     * @param float|null $default Valore di default se la conversione fallisce
     *
     * @return float Il valore convertito e validato
     */
    public function executeWithRange(mixed $value, float $min, float $max, null|float $default = null): float
    {
        $float = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
    public function executeWithRange(mixed $value, float $min, float $max, ?float $default = null): float
=======
    public function executeWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
    {
        $float = $this->execute($value, $default);

        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }
<<<<<<< HEAD

=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
    public function executeWithRange(mixed $value, float $min, float $max, ?float $default = null): float
    {
        $float = $this->execute($value, $default);
        
        // Clamp il valore tra min e max
        return max($min, min($max, $float));
    }
    
<<<<<<< HEAD
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
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    /**
     * Metodo statico di convenienza per cast con range.
     *
     * @param mixed $value Il valore da convertire
     * @param float $min Valore minimo consentito
     * @param float $max Valore massimo consentito
     * @param float|null $default Valore di default se la conversione fallisce
     *
     * @return float Il valore convertito e validato
     */
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
=======
=======
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
=======
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
>>>>>>> a12f125f4a (.)
=======
    public static function castWithRange(mixed $value, float $min, float $max, null|float $default = null): float
>>>>>>> b93ef594b4 (.)
=======
    public static function castWithRange(mixed $value, float $min, float $max, ?float $default = null): float
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    {
        return app(self::class)->executeWithRange($value, $min, $max, $default);
    }

    /**
     * Converte un valore in float con controllo di precisione.
     *
     * @param mixed $value Il valore da convertire
     * @param int $precision Numero di decimali (default: 2)
     * @param float|null $default Valore di default se la conversione fallisce
     *
     * @return float Il valore convertito con precisione specificata
     */
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> a12f125f4a (.)
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> b93ef594b4 (.)
=======
    public function executeWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    {
        $float = $this->execute($value, $default);
        return round($float, max(0, $precision));
    }

    /**
     * Metodo statico per cast con precisione.
     *
     * @param mixed $value Il valore da convertire
     * @param int $precision Numero di decimali (default: 2)
     * @param float|null $default Valore di default se la conversione fallisce
     *
     * @return float Il valore convertito con precisione specificata
     */
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
=======
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> a12f125f4a (.)
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, null|float $default = 0.0): float
>>>>>>> b93ef594b4 (.)
=======
    public static function castWithPrecision(mixed $value, int $precision = 2, ?float $default = 0.0): float
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    {
        return app(self::class)->executeWithPrecision($value, $precision, $default);
    }

    /**
     * Converte un valore in percentuale (0-100).
     *
     * @param mixed $value Il valore da convertire
     * @param float|null $default Valore di default se la conversione fallisce
     *
     * @return float Il valore convertito come percentuale (0-100)
     */
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
=======
=======
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
=======
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> a12f125f4a (.)
=======
    public function executeAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> b93ef594b4 (.)
=======
    public function executeAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    {
        return $this->executeWithRange($value, 0.0, 100.0, $default);
    }

    /**
     * Metodo statico per cast come percentuale.
     *
     * @param mixed $value Il valore da convertire
     * @param float|null $default Valore di default se la conversione fallisce
     *
     * @return float Il valore convertito come percentuale (0-100)
     */
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
=======
=======
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
=======
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> a12f125f4a (.)
=======
    public static function castAsPercentage(mixed $value, null|float $default = 0.0): float
>>>>>>> b93ef594b4 (.)
=======
    public static function castAsPercentage(mixed $value, ?float $default = 0.0): float
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    {
        return app(self::class)->executeAsPercentage($value, $default);
    }

    /**
     * Converte un valore in formato monetario (sempre positivo, 2 decimali).
     *
     * @param mixed $value Il valore da convertire
     * @param float|null $default Valore di default se la conversione fallisce
     *
     * @return float Il valore convertito come importo monetario
     */
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
=======
=======
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
=======
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
>>>>>>> a12f125f4a (.)
=======
    public function executeAsCurrency(mixed $value, null|float $default = 0.0): float
>>>>>>> b93ef594b4 (.)
=======
    public function executeAsCurrency(mixed $value, ?float $default = 0.0): float
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    {
        $float = $this->execute($value, $default);
        return round(abs($float), 2);
    }

    /**
     * Metodo statico per cast come importo monetario.
     *
     * @param mixed $value Il valore da convertire
     * @param float|null $default Valore di default se la conversione fallisce
     *
     * @return float Il valore convertito come importo monetario
     */
    public static function castAsCurrency(mixed $value, null|float $default = 0.0): float
    {
        return app(self::class)->executeAsCurrency($value, $default);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
    public static function castAsCurrency(mixed $value, ?float $default = 0.0): float
    public static function castAsCurrency(mixed $value, null|float $default = 0.0): float
=======
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
>>>>>>> 5cf46378 (.)
    {
        return app(self::class)->executeAsCurrency($value, $default);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 5cf46378 (.)
    public static function castAsCurrency(mixed $value, ?float $default = 0.0): float
    {
        return app(self::class)->executeAsCurrency($value, $default);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 551c768c4 (.)
}
}
} 
}
}
}
} 
} 
=======
} 
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    public static function castAsCurrency(mixed $value, null|float $default = 0.0): float
    {
        return app(self::class)->executeAsCurrency($value, $default);
    }
}
<<<<<<< HEAD
} 
=======
} 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
}
=======
} 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
}
>>>>>>> 414a4ffcb (.)
