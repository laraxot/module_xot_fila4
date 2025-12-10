<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;

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
>>>>>>> laraxot/develop
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
class GetPronounceablePasswordAction
{
    use QueueableAction;

    /**
     * Genera una password pronunciabile con caratteri speciali e numeri.
     *
<<<<<<< HEAD
     * @param  int  $length  Lunghezza minima della password (default: 12)
     * @param int $length Lunghezza minima della password (default: 12)
     * @param int $length Lunghezza minima della password (default: 12)
     * @param int $length Lunghezza minima della password (default: 12)
     * @param int $length Lunghezza minima della password (default: 12)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  int  $length  Lunghezza minima della password (default: 12)
=======
     * @param int $length Lunghezza minima della password (default: 12)
>>>>>>> 5a14301c (.)
=======
     * @param int $length Lunghezza minima della password (default: 12)
>>>>>>> 5a14301c (.)
=======
     * @param int $length Lunghezza minima della password (default: 12)
>>>>>>> 5a14301c (.)
=======
     * @param int $length Lunghezza minima della password (default: 12)
>>>>>>> 5a14301c (.)
=======
     * @param int $length Lunghezza minima della password (default: 12)
>>>>>>> 5a14301c (.)
=======
     * @param int $length Lunghezza minima della password (default: 12)
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @return string Password generata
     */
    public function execute(int $length = 12): string
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $consonants = [
            'b',
            'c',
            'd',
            'f',
            'g',
            'h',
            'j',
            'k',
            'l',
            'm',
            'n',
            'p',
            'r',
            's',
            't',
            'v',
            'w',
            'x',
            'y',
            'z',
        ];

        $password = '';
        $useConsonant = true;

        // Costruisci la parte pronunciabile alternando consonanti e vocali
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
        while (strlen($password) < $length - 4) {
            $char = $useConsonant ? $consonants[array_rand($consonants)] : $vowels[array_rand($vowels)];
            $password .= $char;
            $useConsonant = ! $useConsonant;
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
        while (strlen($password) < ($length - 4)) {
            $char = $useConsonant ? $consonants[array_rand($consonants)] : $vowels[array_rand($vowels)];
            $password .= $char;
            $useConsonant = !$useConsonant;
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
        }

        // Verifica che la password non sia vuota prima di accedere agli offset
        if (strlen($password) === 0) {
            // Fallback: genera almeno una consonante e una vocale
<<<<<<< HEAD
            $password = $consonants[array_rand($consonants)].$vowels[array_rand($vowels)];
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $password = $consonants[array_rand($consonants)].$vowels[array_rand($vowels)];
=======
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
>>>>>>> 5a14301c (.)
=======
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
>>>>>>> 5a14301c (.)
=======
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
>>>>>>> 5a14301c (.)
=======
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
>>>>>>> 5a14301c (.)
=======
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
>>>>>>> 5a14301c (.)
=======
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        }

        // Aggiungi almeno:
        // - 1 maiuscola
        // - 1 cifra
        // - 1 speciale
        $passwordLength = strlen($password);
        $randomIndex = rand(0, $passwordLength - 1);
        $uppercase = strtoupper($password[$randomIndex]);
        $digit = strval(rand(0, 9));
        $specials = '!#*-_=+:?';
        $special = $specials[rand(0, strlen($specials) - 1)];

        // Evita duplicazioni semplici: aggiungi un'altra minuscola casuale
<<<<<<< HEAD
        $password .= $uppercase.$digit.$special;
        $password .= $uppercase . $digit . $special;
        $password .= $uppercase . $digit . $special;
        $password .= $uppercase . $digit . $special;
        $password .= $uppercase . $digit . $special;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $password .= $uppercase.$digit.$special;
=======
        $password .= $uppercase . $digit . $special;
>>>>>>> 5a14301c (.)
=======
        $password .= $uppercase . $digit . $special;
>>>>>>> 5a14301c (.)
=======
        $password .= $uppercase . $digit . $special;
>>>>>>> 5a14301c (.)
=======
        $password .= $uppercase . $digit . $special;
>>>>>>> 5a14301c (.)
=======
        $password .= $uppercase . $digit . $special;
>>>>>>> 5a14301c (.)
=======
        $password .= $uppercase . $digit . $special;
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

        // Shuffle finale per rendere la password meno prevedibile
        $shuffled = str_shuffle($password);

        return trim($shuffled);
    }
}
