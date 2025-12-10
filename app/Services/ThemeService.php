<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

use Illuminate\Support\Facades\Config;

/**
 * Class ThemeService
 * Gestisce il tema dell'applicazione.
 */
class ThemeService
{
    /**
     * Nome del tema corrente.
     */
    private static string $currentTheme = 'default';

    /**
     * Imposta il tema corrente.
     */
    public static function setTheme(string $theme): void
    {
        self::$currentTheme = $theme;
        Config::set('theme.active', $theme);
    }

    /**
     * Recupera il tema corrente.
     */
    public static function getTheme(): string
    {
        return self::$currentTheme;
    }

    /**
     * Verifica se un tema specifico è attivo.
     */
    public static function isTheme(string $theme): bool
    {
        return self::$currentTheme === $theme;
    }

    /**
     * Recupera il percorso delle risorse del tema.
     */
    public static function getThemePath(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return resource_path('themes/'.self::$currentTheme);
=======
        return resource_path('themes/' . self::$currentTheme);
>>>>>>> 5a14301c (.)
=======
        return resource_path('themes/' . self::$currentTheme);
>>>>>>> 5a14301c (.)
=======
        return resource_path('themes/' . self::$currentTheme);
>>>>>>> 5a14301c (.)
=======
        return resource_path('themes/' . self::$currentTheme);
>>>>>>> 5a14301c (.)
=======
        return resource_path('themes/' . self::$currentTheme);
>>>>>>> 5a14301c (.)
=======
        return resource_path('themes/' . self::$currentTheme);
>>>>>>> 5a14301c (.)
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
