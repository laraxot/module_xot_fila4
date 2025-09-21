<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
<<<<<<< HEAD
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
=======
 * Helper per la gestione dei percorsi nel progetto TechPlanner.
>>>>>>> a12f125f4a (.)
=======
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
>>>>>>> b93ef594b4 (.)
=======
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 */
class PathHelper
{
    /**
     * Percorso base del progetto.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     */
    public static string $projectBasePath = '/var/www/html/saluteora';

    /**
     * Percorso base di Laravel.
     */
    public static string $laravelBasePath = '/var/www/html/saluteora/laravel';

    /**
     * Percorso base dei moduli.
     */
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
<<<<<<< HEAD
=======
=======
     *
     * @var string
=======
>>>>>>> b93ef594b4 (.)
=======
     *
     * @var string
>>>>>>> origin/develop
     */
    public static string $projectBasePath = '/var/www/html/saluteora';

    /**
     * Percorso base di Laravel.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> origin/develop
     */
    public static string $laravelBasePath = '/var/www/html/saluteora/laravel';

    /**
     * Percorso base dei moduli.
<<<<<<< HEAD
     */
<<<<<<< HEAD
    public static string $modulesBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules';
>>>>>>> a12f125f4a (.)
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> b93ef594b4 (.)
=======
     *
     * @var string
     */
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Ottiene il percorso completo di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso completo del modulo
     */
    public static function modulePath(string $moduleName): string
    {
        return self::$modulesBasePath . '/' . $moduleName;
    }

    /**
     * Ottiene il percorso dei modelli di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso dei modelli
     */
    public static function modelsPath(string $moduleName): string
    {
        return self::modulePath($moduleName) . '/app/Models';
    }

    /**
     * Ottiene il percorso delle migrazioni di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso delle migrazioni
     */
    public static function migrationsPath(string $moduleName): string
    {
        return self::modulePath($moduleName) . '/database/migrations';
    }

    /**
     * Ottiene il percorso dei seeder di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso dei seeder
     */
    public static function seedersPath(string $moduleName): string
    {
        return self::modulePath($moduleName) . '/database/seeders';
    }

    /**
     * Ottiene il percorso dei controller di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso dei controller
     */
    public static function controllersPath(string $moduleName): string
    {
        return self::modulePath($moduleName) . '/app/Http/Controllers';
    }

    /**
     * Ottiene il percorso delle risorse Filament di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso delle risorse Filament
     */
    public static function filamentResourcesPath(string $moduleName): string
    {
        return self::modulePath($moduleName) . '/app/Filament/Resources';
    }

    /**
     * Ottiene il percorso dei provider di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso dei provider
     */
    public static function providersPath(string $moduleName): string
    {
        return self::modulePath($moduleName) . '/app/Providers';
    }

    /**
     * Ottiene il percorso delle viste di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso delle viste
     */
    public static function viewsPath(string $moduleName): string
    {
        return self::modulePath($moduleName) . '/resources/views';
    }

    /**
     * Verifica se un percorso è corretto secondo le convenzioni del progetto.
     *
<<<<<<< HEAD
     * @param  string  $path  Percorso da verificare
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $path  Percorso da verificare
=======
     * @param string $path Percorso da verificare
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $path  Percorso da verificare
>>>>>>> b93ef594b4 (.)
=======
     * @param string $path Percorso da verificare
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return bool True se il percorso è corretto, false altrimenti
     */
    public static function isValidPath(string $path): bool
    {
        // Verifica che il percorso contenga /laravel/Modules/ e non solo /Modules/
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        if (Str::contains($path, '/saluteora/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /saluteora/
        if (Str::contains($path, '/saluteora/') && !Str::contains($path, '/saluteora/laravel/')) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (Str::contains($path, '/base_techplanner_fila3_mono/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /base_techplanner_fila3_mono/
        if (Str::contains($path, '/base_techplanner_fila3_mono/') && !Str::contains($path, '/base_techplanner_fila3_mono/laravel/')) {
>>>>>>> a12f125f4a (.)
=======
        if (Str::contains($path, '/saluteora/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /saluteora/
        if (Str::contains($path, '/saluteora/') && !Str::contains($path, '/saluteora/laravel/')) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return false;
        }

        return true;
    }

    /**
     * Corregge un percorso errato secondo le convenzioni del progetto.
     *
<<<<<<< HEAD
     * @param  string  $path  Percorso da correggere
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $path  Percorso da correggere
=======
     * @param string $path Percorso da correggere
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $path  Percorso da correggere
>>>>>>> b93ef594b4 (.)
=======
     * @param string $path Percorso da correggere
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string Percorso corretto
     */
    public static function correctPath(string $path): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Corregge /var/www/html/saluteora/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/saluteora/Modules/')) {
            return str_replace('/saluteora/Modules/', '/saluteora/laravel/Modules/', $path);
        }

        // Corregge /var/www/html/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
            return str_replace('/var/www/html/Modules/', '/var/www/html/saluteora/laravel/Modules/', $path);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        // Corregge /var/www/html/base_techplanner_fila3_mono/Modules/ in /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
        if (Str::contains($path, '/base_techplanner_fila3_mono/Modules/')) {
            return str_replace('/base_techplanner_fila3_mono/Modules/', '/base_techplanner_fila3_mono/laravel/Modules/', $path);
=======
        // Corregge /var/www/html/saluteora/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/saluteora/Modules/')) {
            return str_replace('/saluteora/Modules/', '/saluteora/laravel/Modules/', $path);
>>>>>>> b93ef594b4 (.)
        }

        // Corregge /var/www/html/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
<<<<<<< HEAD
            return str_replace('/var/www/html/Modules/', '/var/www/html/base_techplanner_fila3_mono/laravel/Modules/', $path);
>>>>>>> a12f125f4a (.)
=======
            return str_replace('/var/www/html/Modules/', '/var/www/html/saluteora/laravel/Modules/', $path);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return $path;
    }

    /**
     * Ottiene tutti i moduli disponibili.
     *
     * @return array<string> Array con i nomi dei moduli
     */
    public static function getModules(): array
    {
        $modulesPath = self::$modulesBasePath;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        if (!File::exists($modulesPath)) {
            return [];
        }

        /** @var array<string> $directories */
        $directories = File::directories($modulesPath);

        return array_map(basename(...), $directories);
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        if (!File::exists($modulesPath)) {
            return [];
        }

        /** @var array<string> $directories */
        $directories = File::directories($modulesPath);
<<<<<<< HEAD
        
        return array_map(fn(string $path): string => basename($path), $directories);
>>>>>>> a12f125f4a (.)
=======

        return array_map(basename(...), $directories);
>>>>>>> b93ef594b4 (.)
=======
        
        if (!File::exists($modulesPath)) {
            return [];
        }
        
        /** @var array<string> $directories */
        $directories = File::directories($modulesPath);
        
        return array_map(fn(string $path): string => basename($path), $directories);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Verifica se un modulo esiste.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> a12f125f4a (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> b93ef594b4 (.)
=======
     * @param string $moduleName Nome del modulo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return bool True se il modulo esiste, false altrimenti
     */
    public static function moduleExists(string $moduleName): bool
    {
        return File::exists(self::modulePath($moduleName));
    }
}
