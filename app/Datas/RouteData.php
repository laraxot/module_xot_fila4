<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class RouteData - Gestisce la configurazione delle rotte per il framework Laraxot.
 */
class RouteData extends Data
{
    /**
     * @param  string  $prefix  Prefisso per tutte le rotte
     * @param  array<int, string>  $middleware  Middleware applicati a tutte le rotte
     * @param  string  $namespace  Namespace per i controller
     * @param  bool  $use_passport  Se utilizzare Passport per l'autenticazione API
     * @param  array<int, string>  $except_verify  Rotte eccettuate dalla verifica
     * @param  bool  $enable  Se le rotte sono abilitate
     */
    public function __construct(
        public readonly string $prefix = '',
        public readonly array $middleware = [],
        public readonly string $namespace = '',
        public readonly bool $use_passport = false,
        public readonly array $except_verify = [],
        public readonly bool $enable = true,
    ) {}

    /**
     * Create a new instance of RouteData with default values.
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
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
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
    }
}
