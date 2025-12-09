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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  bool  $accept  Se il cookie è stato accettato
     * @param  string  $type  Tipo di cookie (es. necessari, analitici, marketing)
     * @param  int  $duration_days  Durata dei cookie in giorni
     * @param  string  $policy_url  URL della cookie policy
     * @param  string  $banner_style  Stile del banner dei cookie
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param bool   $accept         Se il cookie è stato accettato
     * @param string $type           Tipo di cookie (es. necessari, analitici, marketing)
     * @param int    $duration_days  Durata dei cookie in giorni
     * @param string $policy_url     URL della cookie policy
     * @param string $banner_style   Stile del banner dei cookie
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
     */
    public function __construct(
        public readonly bool $accept = false,
        public readonly string $type = 'necessary',
        public readonly int $duration_days = 365,
        public readonly string $policy_url = '/cookie-policy',
        public readonly string $banner_style = 'bottom',
<<<<<<< HEAD
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> a12f125f4a (.)
=======
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    ) {
    }
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Create a new instance of CookieData with default values.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public static function make(): static
    {
        return new static;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     *
     * @return static
     */
    public static function make(): static
    {
        return new static();
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
    }
}
