<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class OptionData - Gestisce le opzioni di configurazione per il framework Laraxot.
 * Utilizzato esclusivamente nell'ambito dell'architettura Filament-first.
 */
class OptionData extends Data
{
    /**
     * @param  string  $cache_driver  Driver per la cache delle opzioni
     * @param  bool  $enable_cache  Se abilitare la cache delle opzioni
     * @param  int  $cache_ttl  TTL cache in secondi
     * @param  string  $prefix  Prefisso per le chiavi delle opzioni
     * @param  array  $autoload  Opzioni da caricare automaticamente
     * @param string $cache_driver    Driver per la cache delle opzioni
     * @param bool   $enable_cache    Se abilitare la cache delle opzioni
     * @param int    $cache_ttl       TTL cache in secondi
     * @param string $prefix          Prefisso per le chiavi delle opzioni
     * @param array  $autoload        Opzioni da caricare automaticamente
     */
    public function __construct(
        public readonly string $cache_driver = 'file',
        public readonly bool $enable_cache = true,
        public readonly int $cache_ttl = 86400,
        public readonly string $prefix = 'options_',
        public readonly array $autoload = ['site_name', 'site_description', 'site_logo'],
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

    /**
     * Create a new instance of OptionData with default values.
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
