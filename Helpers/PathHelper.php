<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

<<<<<<< HEAD
=======
/**
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
 */
>>>>>>> 5a14301c (.)
class PathHelper
{
    /**
     * Percorso base del progetto.
     */
<<<<<<< HEAD
    public static string $projectBasePath = '/var/www/html/<nome progetto>';
=======
    public static string $projectBasePath = '/var/www/html/saluteora';
>>>>>>> 5a14301c (.)

    /**
     * Percorso base di Laravel.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static string $laravelBasePath = '/var/www/html/<nome progetto>/laravel';
=======
    public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
>>>>>>> 5a14301c (.)
=======
    public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
>>>>>>> 3fbbf1f5 (.)

    /**
     * Percorso base dei moduli.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static string $modulesBasePath = '/var/www/html/<nome progetto>/laravel/Modules';
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 5a14301c (.)
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 3fbbf1f5 (.)

    /**
     * Ottiene il percorso completo di un modulo.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return string Percorso completo del modulo
     */
    public static function modulePath(string $moduleName): string
    {
<<<<<<< HEAD
        return self::$modulesBasePath.'/'.$moduleName;
=======
        return self::$modulesBasePath . '/' . $moduleName;
>>>>>>> 5a14301c (.)
    }

    /**
     * Ottiene il percorso dei modelli di un modulo.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return string Percorso dei modelli
     */
    public static function modelsPath(string $moduleName): string
    {
<<<<<<< HEAD
        return self::modulePath($moduleName).'/app/Models';
=======
        return self::modulePath($moduleName) . '/app/Models';
>>>>>>> 5a14301c (.)
    }

    /**
     * Ottiene il percorso delle migrazioni di un modulo.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return string Percorso delle migrazioni
     */
    public static function migrationsPath(string $moduleName): string
    {
<<<<<<< HEAD
        return self::modulePath($moduleName).'/database/migrations';
=======
        return self::modulePath($moduleName) . '/database/migrations';
>>>>>>> 5a14301c (.)
    }

    /**
     * Ottiene il percorso dei seeder di un modulo.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return string Percorso dei seeder
     */
    public static function seedersPath(string $moduleName): string
    {
<<<<<<< HEAD
        return self::modulePath($moduleName).'/database/seeders';
=======
        return self::modulePath($moduleName) . '/database/seeders';
>>>>>>> 5a14301c (.)
    }

    /**
     * Ottiene il percorso dei controller di un modulo.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return string Percorso dei controller
     */
    public static function controllersPath(string $moduleName): string
    {
<<<<<<< HEAD
        return self::modulePath($moduleName).'/app/Http/Controllers';
=======
        return self::modulePath($moduleName) . '/app/Http/Controllers';
>>>>>>> 5a14301c (.)
    }

    /**
     * Ottiene il percorso delle risorse Filament di un modulo.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return string Percorso delle risorse Filament
     */
    public static function filamentResourcesPath(string $moduleName): string
    {
<<<<<<< HEAD
        return self::modulePath($moduleName).'/app/Filament/Resources';
=======
        return self::modulePath($moduleName) . '/app/Filament/Resources';
>>>>>>> 5a14301c (.)
    }

    /**
     * Ottiene il percorso dei provider di un modulo.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return string Percorso dei provider
     */
    public static function providersPath(string $moduleName): string
    {
<<<<<<< HEAD
        return self::modulePath($moduleName).'/app/Providers';
=======
        return self::modulePath($moduleName) . '/app/Providers';
>>>>>>> 5a14301c (.)
    }

    /**
     * Ottiene il percorso delle viste di un modulo.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return string Percorso delle viste
     */
    public static function viewsPath(string $moduleName): string
    {
<<<<<<< HEAD
        return self::modulePath($moduleName).'/resources/views';
=======
        return self::modulePath($moduleName) . '/resources/views';
>>>>>>> 5a14301c (.)
    }

    /**
     * Verifica se un percorso è corretto secondo le convenzioni del progetto.
     *
     * @param  string  $path  Percorso da verificare
     * @return bool True se il percorso è corretto, false altrimenti
     */
    public static function isValidPath(string $path): bool
    {
        // Verifica che il percorso contenga /laravel/Modules/ e non solo /Modules/
<<<<<<< HEAD
<<<<<<< HEAD
        if (Str::contains($path, '/Modules/') && ! Str::contains($path, '/laravel/Modules/')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
        if (Str::contains($path, '/saluteora/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /saluteora/
        if (Str::contains($path, '/saluteora/') && !Str::contains($path, '/saluteora/laravel/')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
            return false;
        }

        return true;
    }

    /**
     * Corregge un percorso errato secondo le convenzioni del progetto.
     *
     * @param  string  $path  Percorso da correggere
     * @return string Percorso corretto
     */
    public static function correctPath(string $path): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // Corregge /var/www/html/Modules/ in /var/www/html/<nome progetto>/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
            $path = Str::replace('/var/www/html/Modules/', self::$modulesBasePath.'/', $path);
=======
=======
>>>>>>> 3fbbf1f5 (.)
        // Corregge /var/www/html/saluteora/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/saluteora/Modules/')) {
            return str_replace('/saluteora/Modules/', '/saluteora/laravel/Modules/', $path);
        }

        // Corregge /var/www/html/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
            return str_replace('/var/www/html/Modules/', '/var/www/html/saluteora/laravel/Modules/', $path);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
        if (! File::exists($modulesPath)) {
=======
        if (!File::exists($modulesPath)) {
>>>>>>> 5a14301c (.)
            return [];
        }

        /** @var array<string> $directories */
        $directories = File::directories($modulesPath);

        return array_map(basename(...), $directories);
    }

    /**
     * Verifica se un modulo esiste.
     *
     * @param  string  $moduleName  Nome del modulo
     * @return bool True se il modulo esiste, false altrimenti
     */
    public static function moduleExists(string $moduleName): bool
    {
        return File::exists(self::modulePath($moduleName));
    }
}
