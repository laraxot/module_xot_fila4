<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class SearchEngineData - Gestisce la configurazione dei motori di ricerca per il framework Laraxot.
 * Utilizzato esclusivamente nell'ambito dell'architettura Filament-first.
 */
class SearchEngineData extends Data
{
    /**
     * @param  string  $driver  Driver del motore di ricerca (algolia, meilisearch, ecc.)
     * @param  string  $algolia_app_id  Algolia App ID
     * @param  string  $algolia_secret  Chiave segreta Algolia
     * @param  string  $meili_host  Host MeiliSearch
     * @param  string  $meili_key  Chiave MeiliSearch
     * @param  bool  $enable_local  Abilita la ricerca locale
     * @param  array<int, class-string>  $searchable  Modelli cercabili
     */
    public function __construct(
        public readonly string $driver = 'local',
        public readonly string $algolia_app_id = '',
        public readonly string $algolia_secret = '',
        public readonly string $meili_host = 'http://localhost:7700',
        public readonly string $meili_key = '',
        public readonly bool $enable_local = true,
        public readonly array $searchable = [],
    ) {}

    /**
     * Create a new instance of SearchEngineData with default values.
     */
    public static function make(): static
    {
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
        return new static;
=======
        return new static();
>>>>>>> 5a14301c (.)
=======
        return new static();
>>>>>>> 3fbbf1f5 (.)
=======
        return new static();
=======
        return new static();
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return new static();
=======
        return new static;
>>>>>>> a12f125f4a (.)
=======
        return new static();
>>>>>>> b93ef594b4 (.)
=======
        return new static;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> ca9324a4 (.)
=======
        return new static();
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return new static();
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> ca9324a4 (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return new static();
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
    }
}
