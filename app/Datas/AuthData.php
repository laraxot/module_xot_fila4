<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class AuthData - Gestisce la configurazione dell'autenticazione per il framework Laraxot.
 * Utilizzato esclusivamente nell'ambito dell'architettura Filament-first.
 */
class AuthData extends Data
{
    /**
     * @param  string  $guard  Guard predefinita
     * @param  array  $guards  Guards disponibili
     * @param  array  $providers  Provider di autenticazione
     * @param  bool  $verify_email  Se richiedere verifica email
     * @param  int  $password_reset_timeout  Password reset timeout in minuti
     * @param  array  $throttle  Configurazione throttling
     * @param  array  $social  Provider social abilitati
     * @param string $guard          Guard predefinita
     * @param array  $guards         Guards disponibili
     * @param array  $providers      Provider di autenticazione
     * @param bool   $verify_email   Se richiedere verifica email
     * @param int    $password_reset_timeout Password reset timeout in minuti
     * @param array  $throttle       Configurazione throttling
     * @param array  $social         Provider social abilitati
     */
    public function __construct(
        public readonly string $guard = 'web',
        public readonly array $guards = ['web', 'api'],
        public readonly array $providers = ['users' => ['driver' => 'eloquent', 'model' => '']],
        public readonly bool $verify_email = true,
        public readonly int $password_reset_timeout = 60,
        public readonly array $throttle = [
            'enabled' => true,
            'decay_minutes' => 1,
            'max_attempts' => 5,
        ],
        public readonly array $social = [
            'google' => false,
            'facebook' => false,
            'twitter' => false,
            'github' => false,
        ],
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {
    }
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
>>>>>>> 7468a7d2 (.)
=======
    ) {
    }
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    ) {}
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    ) {
    }
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    ) {}
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

    /**
     * Create a new instance of AuthData with default values.
     */
    public static function make(): static
    {
        return new static;
     *
     * @return static
     */
    public static function make(): static
    {
        return new static();
    }
}
