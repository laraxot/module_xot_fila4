<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class PwaData - Gestisce la configurazione PWA per il framework Laraxot.
 * Utilizzato esclusivamente nell'ambito dell'architettura Filament-first.
 */
class PwaData extends Data
{
    /**
     * @param  bool  $enable  Se il PWA è abilitato
     * @param  string  $name  Nome dell'applicazione
     * @param  string  $short_name  Nome breve dell'applicazione
     * @param  string  $description  Descrizione dell'applicazione
     * @param  string  $background_color  Colore di sfondo
     * @param  string  $theme_color  Colore del tema
     * @param  string  $icon_path  Percorso dell'icona
     * @param  array<string, string>  $splash  Configurazione splash screen
     */
    public function __construct(
        public readonly bool $enable = false,
        public readonly string $name = 'Laraxot App',
        public readonly string $short_name = 'Laraxot',
        public readonly string $description = 'Laraxot Framework Application',
        public readonly string $background_color = '#ffffff',
        public readonly string $theme_color = '#000000',
        public readonly string $icon_path = 'img/icons',
        public readonly array $splash = [
            '640x1136' => 'img/splash/splash-640x1136.png',
            '750x1334' => 'img/splash/splash-750x1334.png',
            '1242x2208' => 'img/splash/splash-1242x2208.png',
            '1125x2436' => 'img/splash/splash-1125x2436.png',
        ],
    ) {}

    /**
     * Create a new instance of PwaData with default values.
     */
    public static function make(): static
    {
<<<<<<< HEAD
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        return new static;
        return new static();
        return new static();
        return new static;
        return new static;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        return new static;
        return new static;
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        return new static;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return new static;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return new static();
        return new static;
        return new static();
        return new static();
        return new static();
<<<<<<< HEAD
        return new static();
        return new static;
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static;
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static;
        return new static();
        return new static();
        return new static();
        return new static();
        return new static;
        return new static();
        return new static();
        return new static();
        return new static();
        return new static();
        return new static;
        return new static();
        return new static;
        return new static();
        return new static();
        return new static;
        return new static();
        return new static();
        return new static();
        return new static();
        return new static;
        return new static();
        return new static();
        return new static();
        return new static();
        return new static;
        return new static;
        return new static();
        return new static();
        return new static;
        return new static();
        return new static();
=======
>>>>>>> ca9324a4 (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return new static();
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        return new static();
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return new static();
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return new static;
>>>>>>> 53d6a6ba (.)
=======
=======
        return new static();
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    }
}
