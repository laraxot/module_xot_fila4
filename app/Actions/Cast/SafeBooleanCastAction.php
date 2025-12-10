<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use Spatie\QueueableAction\QueueableAction;

/**
 * Action per convertire in modo sicuro un valore mixed in boolean.
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
 * - DRY: Evita duplicazione di logica di cast boolean in tutto il progetto
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
 * - Risoluzione errori PHPStan "Cannot cast mixed to bool"
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
 * $bool = SafeBooleanCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $bool = SafeBooleanCastAction::cast($mixedValue, true);
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
 * $bool = SafeBooleanCastAction::cast($mixedValue);
 *
 * // Con default personalizzato
 * $bool = SafeBooleanCastAction::cast($mixedValue, true);
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
 * $bool = SafeBooleanCastAction::cast($mixedValue);
 * 
 * // Con default personalizzato
 * $bool = SafeBooleanCastAction::cast($mixedValue, true);
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
 * // Con validazione di valori specifici
 * $bool = SafeBooleanCastAction::castFromString($mixedValue, ['yes', 'on', '1']);
 */
class SafeBooleanCastAction
{
    use QueueableAction;

    /**
     * Converte in modo sicuro un valore mixed in boolean.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  bool|null  $default  Valore di default se la conversione fallisce (default: false)
     * @return bool Il valore convertito
     */
<<<<<<< HEAD
    public function execute(mixed $value, ?bool $default = false): bool
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
     * @param bool|null $default Valore di default se la conversione fallisce (default: false)
     *
     * @return bool Il valore convertito
     */
    public function execute(mixed $value, null|bool $default = false): bool
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
    public function execute(mixed $value, ?bool $default = false): bool
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(mixed $value, null|bool $default = false): bool
=======
>>>>>>> 2f3197ab (.)
    public function execute(mixed $value, ?bool $default = false): bool
    public function execute(mixed $value, ?bool $default = false): bool
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, ?bool $default = false): bool
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
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
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
>>>>>>> 218dfed3 (.)
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, ?bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
<<<<<<< HEAD
    public function execute(mixed $value, ?bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, ?bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, ?bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, ?bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
    public function execute(mixed $value, ?bool $default = false): bool
    public function execute(mixed $value, null|bool $default = false): bool
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
    public function execute(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function execute(mixed $value, null|bool $default = false): bool
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
    public function execute(mixed $value, null|bool $default = false): bool
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
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    {
        // Se è già un boolean, restituiscilo direttamente
        if (is_bool($value)) {
            return $value;
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
            return $default ?? false;
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
        // Se è un intero, convertilo (0 = false, altri = true)
        if (is_int($value)) {
            return $value !== 0;
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
        // Se è un float, convertilo (0.0 = false, altri = true)
        if (is_float($value)) {
            return $value !== 0.0 && is_finite($value);
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
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        // Se è una stringa, convertila
        if (is_string($value)) {
            return $this->parseStringToBool($value, $default);
        }
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
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
        // Se è una stringa, convertila
        if (is_string($value)) {
            return $this->parseStringToBool($value, $default);
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
=======
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
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        // Se è un array, convertilo (array vuoto = false, altri = true)
        if (is_array($value)) {
            return ! empty($value);
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 414a4ffcb (.)
        // Se è un array, convertilo (array vuoto = false, altri = true)
        if (is_array($value)) {
            return ! empty($value);
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return ! empty(get_object_vars($value));
        }

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
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 218dfed3 (.)
        
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)

=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
            return !empty($value);
        }
        
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
            return !empty($value);
        }

        
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }

        
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
            return !empty($value);
        }

        
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }

        
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
            return !empty($value);
        }

        
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }


        
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }

        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)

        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
=======
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return ! empty(get_object_vars($value));
>>>>>>> 551c768c4 (.)
        }

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
        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return !empty(get_object_vars($value));
        }
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)

        // Se è un oggetto, convertilo (oggetto vuoto = false, altri = true)
        if (is_object($value)) {
            return ! empty(get_object_vars($value));
        }

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
        return $default ?? false;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private function parseStringToBool(string $value, ?bool $default = false): bool
    private function parseStringToBool(string $value, ?bool $default = false): bool
=======
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
=======
    private function parseStringToBool(string $value, ?bool $default = false): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    private function parseStringToBool(string $value, ?bool $default = false): bool
    {
        $trimmed = strtolower(trim($value));

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
    private function parseStringToBool(string $value, null|bool $default = false): bool
=======
=======
>>>>>>> 300ef70 (.)
    private function parseStringToBool(string $value, null|bool $default = false): bool
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        $trimmed = strtolower(trim($value));

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
    private function parseStringToBool(string $value, ?bool $default = false): bool
    {
        $trimmed = strtolower(trim($value));
        
<<<<<<< HEAD
<<<<<<< HEAD
    private function parseStringToBool(string $value, null|bool $default = false): bool
    {
        $trimmed = strtolower(trim($value));

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
            return $default ?? false;
        }
<<<<<<< HEAD
<<<<<<< HEAD

        
=======
<<<<<<< HEAD

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
        // Valori che rappresentano true
        $trueValues = ['true', '1', 'yes', 'on', 'enabled', 'active', 'si', 'sì'];
        if (in_array($trimmed, $trueValues, true)) {
            return true;
        }
<<<<<<< HEAD
<<<<<<< HEAD

        
=======
<<<<<<< HEAD

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
        // Valori che rappresentano false
        $falseValues = ['false', '0', 'no', 'off', 'disabled', 'inactive'];
        if (in_array($trimmed, $falseValues, true)) {
            return false;
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

        // Se la stringa contiene solo numeri, convertila
        if (is_numeric($trimmed)) {
            return ((float) $trimmed) !== 0.0;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        // Se la stringa contiene solo numeri, convertila
        if (is_numeric($trimmed)) {
            return ((float) $trimmed) !== 0.0;
        }

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
        
        // Se la stringa contiene solo numeri, convertila
        if (is_numeric($trimmed)) {
            return (float) $trimmed !== 0.0;
        }
        
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
        // Per tutte le altre stringhe, restituisci il default
        return $default ?? false;
    }

    /**
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     * Converte un valore in boolean con validazione di valori specifici.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  array  $trueValues  Array di valori che rappresentano true
     * @param  array  $falseValues  Array di valori che rappresentano false
     * @param  bool|null  $default  Valore di default se la conversione fallisce
     * @return bool Il valore convertito
     */
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

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
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
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
    public function executeWithThreshold(
        mixed $value,
        float $threshold,
        bool $greaterThanTrue = true,
        ?bool $default = false,
    ): bool {
        if (is_numeric($value)) {
            $numeric = (float) $value;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
    public function executeWithThreshold(mixed $value, float $threshold, bool $greaterThanTrue = true, ?bool $default = false): bool
    {
        if (is_numeric($value)) {
            $numeric = (float) $value;
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
            if ($greaterThanTrue) {
                return $numeric > $threshold;
            }

            return $numeric < $threshold;
        }
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
=======
        return is_bool($value) || 
               is_null($value) || 
               is_scalar($value) || 
               is_array($value) || 
               is_object($value);
>>>>>>> f1d4085 (.)
=======
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
        return is_bool($value) || is_null($value) || is_scalar($value) || is_array($value) || is_object($value);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    }

    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @param  bool|null  $default  Valore di default se la conversione fallisce (default: false)
     * @return bool Il valore convertito in boolean
     */
<<<<<<< HEAD
    public static function cast(mixed $value, ?bool $default = false): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function cast(mixed $value, ?bool $default = false): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public static function cast(mixed $value, null|bool $default = false): bool
=======
    public static function cast(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
=======
    public static function cast(mixed $value, null|bool $default = false): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
    public static function cast(mixed $value, null|bool $default = false): bool
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
    public static function castWithCustomValues(
        mixed $value,
        array $trueValues,
        array $falseValues,
        ?bool $default = false,
    ): bool {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
    public static function castWithCustomValues(mixed $value, array $trueValues, array $falseValues, ?bool $default = false): bool
    {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
    public static function castWithThreshold(
        mixed $value,
        float $threshold,
        bool $greaterThanTrue = true,
        ?bool $default = false,
    ): bool {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
    public static function castWithThreshold(mixed $value, float $threshold, bool $greaterThanTrue = true, ?bool $default = false): bool
    {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * Converte una stringa in boolean con gestione avanzata.
     *
     * @param string $value La stringa da convertire
     * @param bool|null $default Valore di default
     *
     * @return bool Il valore convertito
     */
    private function parseStringToBool(string $value, null|bool $default = false): bool
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
    public function executeWithCustomValues(mixed $value, array $trueValues, array $falseValues, ?bool $default = false): bool
    {
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function executeWithThreshold(mixed $value, float $threshold, bool $greaterThanTrue = true, ?bool $default = false): bool
    {
        if (is_numeric($value)) {
            $numeric = (float) $value;
            
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        if (is_numeric($value)) {
            $numeric = (float) $value;

            if ($greaterThanTrue) {
                return $numeric > $threshold;
            } else {
                return $numeric < $threshold;
            }
        }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return is_bool($value) || 
               is_null($value) || 
               is_scalar($value) || 
               is_array($value) || 
               is_object($value);
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function cast(mixed $value, ?bool $default = false): bool
=======
=======
    public static function cast(mixed $value, ?bool $default = false): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public static function cast(mixed $value, null|bool $default = false): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithCustomValues(mixed $value, array $trueValues, array $falseValues, ?bool $default = false): bool
    {
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public static function castWithCustomValues(mixed $value, array $trueValues, array $falseValues, ?bool $default = false): bool
    {
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function castWithThreshold(mixed $value, float $threshold, bool $greaterThanTrue = true, ?bool $default = false): bool
    {
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public static function castWithThreshold(mixed $value, float $threshold, bool $greaterThanTrue = true, ?bool $default = false): bool
    {
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        return app(self::class)->executeWithThreshold($value, $threshold, $greaterThanTrue, $default);
    }
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
}
