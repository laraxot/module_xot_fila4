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
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
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
    ) {}
>>>>>>> 5400be3e2 (.)
=======
    ) {}
>>>>>>> aa96bb619 (.)
=======
    ) {}
>>>>>>> efbf15eba (.)
=======
    ) {}
>>>>>>> f2dd5676b (.)
=======
    ) {
    }
>>>>>>> f1d4085 (.)
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
=======
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0117b849c (.)
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5400be3e2 (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
    ) {}
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
    ) {}
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
    ) {}
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
=======
    ) {}
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)

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
