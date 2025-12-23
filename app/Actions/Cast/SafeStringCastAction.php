<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

/**
 * Action per convertire in modo sicuro un valore mixed in string.
<<<<<<< HEAD
 *
=======
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
>>>>>>> laraxot/develop
 * Questa action centralizza la logica di cast sicuro per evitare duplicazioni
 * di codice (principio DRY) e garantire comportamento consistente in tutto il codebase.
 */
class SafeStringCastAction
{
    /**
     * Converte in modo sicuro un valore mixed in string.
     * impostare delle eccezzioni ?
     *
     * @param  mixed  $value  Il valore da convertire
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
         * if ($value instanceof \BackedEnum) {
         * return $value->value;
         * }
         */

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if ($value instanceof \BackedEnum) {
            return $value->value;
        }
            */
        
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
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
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
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
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    /**
     * Metodo statico di convenienza per chiamate dirette.
     *
     * @param  mixed  $value  Il valore da convertire
     * @return string Il valore convertito in string
     */
    public static function cast(mixed $value): string
    {
        return app(self::class)->execute($value);
    }
}
