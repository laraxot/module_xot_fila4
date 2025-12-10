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
        return resource_path('themes/'.self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
        return resource_path('themes/'.self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
        return resource_path('themes/' . self::$currentTheme);
    }
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
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
}
} 
=======
=======
} 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
}
>>>>>>> 358ba79a7 (.)
=======
}
>>>>>>> f8f76a284 (.)
=======
}
>>>>>>> 5e6e0d054 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
}
>>>>>>> 5cf46378 (.)
=======
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
}
=======
} 
>>>>>>> f1d4085 (.)
=======
}
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
}
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
}
>>>>>>> aba62c408 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
}
>>>>>>> 5cb992cc6 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
}
>>>>>>> 3c8d62b79 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
