<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class ArticleData - Gestisce la configurazione degli articoli per il framework Laraxot.
 * Utilizzato esclusivamente nell'ambito dell'architettura Filament-first.
 */
class ArticleData extends Data
{
    /**
     * @param  array<int, string>  $types  Tipi di articolo disponibili
     * @param  array<int, string>  $categories  Categorie disponibili
     * @param  bool  $enable_comments  Se abilitare i commenti
     * @param  bool  $moderate_comments  Se moderare i commenti
     * @param  string  $editor  Tipo di editor (markdown, wysiwyg)
     * @param  bool  $enable_rating  Se abilitare le valutazioni
     * @param  array<string, string>  $default_meta  Meta tag predefiniti
     * @param  bool  $show_author  Se mostrare l'autore
     * @param  bool  $show_date  Se mostrare la data
     * @param  bool  $show_reading_time  Se mostrare il tempo di lettura
     */
    public function __construct(
        public readonly array $types = ['post', 'page', 'news'],
        public readonly array $categories = [],
        public readonly bool $enable_comments = true,
        public readonly bool $moderate_comments = true,
        public readonly string $editor = 'markdown',
        public readonly bool $enable_rating = false,
        public readonly array $default_meta = [
            'title' => '',
            'description' => '',
            'keywords' => '',
        ],
        public readonly bool $show_author = true,
        public readonly bool $show_date = true,
        public readonly bool $show_reading_time = true,
    ) {}

    /**
     * Create a new instance of ArticleData with default values.
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
        return new static();
>>>>>>> 399f46d3 (.)
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
=======
>>>>>>> 21348520 (.)
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
=======
        return new static();
>>>>>>> 9db27d12 (.)
=======
        return new static();
>>>>>>> 5a14301c (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
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
=======
        return new static();
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
        return new static;
>>>>>>> 71586de2 (.)
=======
        return new static();
>>>>>>> 5a14301c (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
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
    }
}
