<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

/**
 * Action per convertire in modo sicuro un valore mixed in string.
<<<<<<< HEAD
 *
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
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 */
class SafeStringCastAction
{
    /**
     * Converte in modo sicuro un valore mixed in string.
     * impostare delle eccezzioni ?
     *
     * @param mixed $value Il valore da convertire
     *
     * @param mixed $value Il valore da convertire
     *
     * @param mixed $value Il valore da convertire
     *
     * @param mixed $value Il valore da convertire
     *
     * @param mixed $value Il valore da convertire
     *
     * @return string Il valore convertito in string
     */
    public function execute(mixed $value): string
    {
        if (is_string($value)) {
            return $value;
        }
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
         * if ($value instanceof \BackedEnum) {
         * return $value->value;
         * }
         */

        if (is_null($value)) {
            return '';
        }

        if (is_bool($value)) {
            return $value ? '1' : '0';
        }

        if (is_scalar($value)) {
            return (string) $value;
        }

        // Per array, oggetti e altri tipi non scalari, restituisci stringa vuota
        return '';
    }

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
        if ($value instanceof \BackedEnum) {
            return $value->value;
        }
            */
        
<<<<<<< HEAD
<<<<<<< HEAD
        if (is_null($value)) {
            return '';
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
        if (is_null($value)) {
            return '';
        }
>>>>>>> ce6fc085 (.)

        if (is_bool($value)) {
            return $value ? '1' : '0';
        }

        if (is_scalar($value)) {
            return (string) $value;
        }

        // Per array, oggetti e altri tipi non scalari, restituisci stringa vuota
        return '';
    }
<<<<<<< HEAD

        if (is_null($value)) {
            return '';
        }
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        if (is_null($value)) {
            return '';
        }
>>>>>>> ce6fc085 (.)
=======
        if (is_null($value)) {
            return '';
        }
>>>>>>> 7468a7d2 (.)
        
        if (is_bool($value)) {
            return $value ? '1' : '0';
        }
        
        if (is_scalar($value)) {
            return (string) $value;
        }
        
        // Per array, oggetti e altri tipi non scalari, restituisci stringa vuota
        return '';
    }
    
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param mixed $value Il valore da convertire
     *
     * @param mixed $value Il valore da convertire
     *
     * @param mixed $value Il valore da convertire
     *
     * @param mixed $value Il valore da convertire
     *
     * @param mixed $value Il valore da convertire
     *
     * @return string Il valore convertito in string
     */
    public static function cast(mixed $value): string
    {
        return app(self::class)->execute($value);
    }
}
