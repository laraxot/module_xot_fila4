<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> 551c768c4 (.)
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> 414a4ffcb (.)
class GetPronounceablePasswordAction
{
    use QueueableAction;

    /**
     * Genera una password pronunciabile con caratteri speciali e numeri.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param int $length Lunghezza minima della password (default: 12)
     * @param int $length Lunghezza minima della password (default: 12)
     * @param int $length Lunghezza minima della password (default: 12)
     * @param int $length Lunghezza minima della password (default: 12)
     * @param int $length Lunghezza minima della password (default: 12)
=======
     * @param  int  $length  Lunghezza minima della password (default: 12)
>>>>>>> 551c768c4 (.)
=======
     * @param  int  $length  Lunghezza minima della password (default: 12)
>>>>>>> 414a4ffcb (.)
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
        while (strlen($password) < $length - 4) {
            $char = $useConsonant ? $consonants[array_rand($consonants)] : $vowels[array_rand($vowels)];
            $password .= $char;
            $useConsonant = ! $useConsonant;
<<<<<<< HEAD
<<<<<<< HEAD
        while (strlen($password) < ($length - 4)) {
            $char = $useConsonant ? $consonants[array_rand($consonants)] : $vowels[array_rand($vowels)];
            $password .= $char;
            $useConsonant = !$useConsonant;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        }

        // Verifica che la password non sia vuota prima di accedere agli offset
        if (strlen($password) === 0) {
            // Fallback: genera almeno una consonante e una vocale
<<<<<<< HEAD
<<<<<<< HEAD
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
            $password = $consonants[array_rand($consonants)] . $vowels[array_rand($vowels)];
=======
            $password = $consonants[array_rand($consonants)].$vowels[array_rand($vowels)];
>>>>>>> 551c768c4 (.)
=======
            $password = $consonants[array_rand($consonants)].$vowels[array_rand($vowels)];
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
        $password .= $uppercase . $digit . $special;
        $password .= $uppercase . $digit . $special;
        $password .= $uppercase . $digit . $special;
        $password .= $uppercase . $digit . $special;
        $password .= $uppercase . $digit . $special;
=======
        $password .= $uppercase.$digit.$special;
>>>>>>> 551c768c4 (.)
=======
        $password .= $uppercase.$digit.$special;
>>>>>>> 414a4ffcb (.)

        // Shuffle finale per rendere la password meno prevedibile
        $shuffled = str_shuffle($password);

        return trim($shuffled);
    }
}
