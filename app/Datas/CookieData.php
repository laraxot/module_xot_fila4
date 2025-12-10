<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class CookieData - Gestisce la configurazione dei cookie per il framework Laraxot.
 * Utilizzato esclusivamente nell'ambito dell'architettura Filament-first.
 */
class CookieData extends Data
{
    /**
     * @param  bool  $accept  Se il cookie è stato accettato
     * @param  string  $type  Tipo di cookie (es. necessari, analitici, marketing)
     * @param  int  $duration_days  Durata dei cookie in giorni
     * @param  string  $policy_url  URL della cookie policy
     * @param  string  $banner_style  Stile del banner dei cookie
     * @param bool   $accept         Se il cookie è stato accettato
     * @param string $type           Tipo di cookie (es. necessari, analitici, marketing)
     * @param int    $duration_days  Durata dei cookie in giorni
     * @param string $policy_url     URL della cookie policy
     * @param string $banner_style   Stile del banner dei cookie
     */
    public function __construct(
        public readonly bool $accept = false,
        public readonly string $type = 'necessary',
        public readonly int $duration_days = 365,
        public readonly string $policy_url = '/cookie-policy',
        public readonly string $banner_style = 'bottom',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
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
    ) {}
>>>>>>> dbce41cec (.)
=======
    ) {
    }
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
>>>>>>> a12f125f4a (.)
=======
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    ) {
    }
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
>>>>>>> dbce41cec (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
    ) {}
>>>>>>> aba62c408 (.)

    /**
     * Create a new instance of CookieData with default values.
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
