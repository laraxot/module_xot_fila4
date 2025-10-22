<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * Helper per la gestione dei percorsi nel progetto <main module>.
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
=======
 * Helper per la gestione dei percorsi nel progetto TechPlanner.
>>>>>>> f1d4085 (.)
=======
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
>>>>>>> 300ef70 (.)
 */
class PathHelper
{
    /**
     * Percorso base del progetto.
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
     */
    public static string $projectBasePath = '/var/www/html/<nome progetto>';

    /**
     * Percorso base di Laravel.
     */
    public static string $laravelBasePath = '/var/www/html/<directory progetto>/laravel';

    /**
     * Percorso base dei moduli.
     */
<<<<<<< HEAD
    public static string $modulesBasePath = '/var/www/html/<directory progetto>/laravel/Modules';
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
     */
    public static string $projectBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono';

    /**
     * Percorso base di Laravel.
     *
     * @var string
     */
    public static string $laravelBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel';

    /**
     * Percorso base dei moduli.
     *
     * @var string
     */
    public static string $modulesBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules';
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

    /**
     * Ottiene il percorso completo di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return string Percorso completo del modulo
     */
    public static function modulePath(string $moduleName): string
    {
        return self::$modulesBasePath.'/'.$moduleName;
    }

    /**
     * Ottiene il percorso dei modelli di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return string Percorso dei modelli
     */
    public static function modelsPath(string $moduleName): string
    {
        return self::modulePath($moduleName).'/app/Models';
    }

    /**
     * Ottiene il percorso delle migrazioni di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return string Percorso delle migrazioni
     */
    public static function migrationsPath(string $moduleName): string
    {
        return self::modulePath($moduleName).'/database/migrations';
    }

    /**
     * Ottiene il percorso dei seeder di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return string Percorso dei seeder
     */
    public static function seedersPath(string $moduleName): string
    {
        return self::modulePath($moduleName).'/database/seeders';
    }

    /**
     * Ottiene il percorso dei controller di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return string Percorso dei controller
     */
    public static function controllersPath(string $moduleName): string
    {
        return self::modulePath($moduleName).'/app/Http/Controllers';
    }

    /**
     * Ottiene il percorso delle risorse Filament di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return string Percorso delle risorse Filament
     */
    public static function filamentResourcesPath(string $moduleName): string
    {
        return self::modulePath($moduleName).'/app/Filament/Resources';
    }

    /**
     * Ottiene il percorso dei provider di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return string Percorso dei provider
     */
    public static function providersPath(string $moduleName): string
    {
        return self::modulePath($moduleName).'/app/Providers';
    }

    /**
     * Ottiene il percorso delle viste di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return string Percorso delle viste
     */
    public static function viewsPath(string $moduleName): string
    {
        return self::modulePath($moduleName).'/resources/views';
    }

    /**
     * Verifica se un percorso è corretto secondo le convenzioni del progetto.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $path  Percorso da verificare
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $path  Percorso da verificare
=======
     * @param string $path Percorso da verificare
>>>>>>> f1d4085 (.)
=======
     * @param  string  $path  Percorso da verificare
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $path  Percorso da verificare
>>>>>>> 300ef70 (.)
     * @return bool True se il percorso è corretto, false altrimenti
     */
    public static function isValidPath(string $path): bool
    {
        // Verifica che il percorso contenga /laravel/Modules/ e non solo /Modules/
<<<<<<< HEAD
<<<<<<< HEAD
        if (Str::contains($path, '/<directory progetto>/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /<directory progetto>/
        if (Str::contains($path, '/<directory progetto>/') && ! Str::contains($path, '/<directory progetto>/laravel/')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        if (Str::contains($path, '/saluteora/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /saluteora/
        if (Str::contains($path, '/saluteora/') && !Str::contains($path, '/saluteora/laravel/')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (Str::contains($path, '/base_techplanner_fila3_mono/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /base_techplanner_fila3_mono/
        if (Str::contains($path, '/base_techplanner_fila3_mono/') && !Str::contains($path, '/base_techplanner_fila3_mono/laravel/')) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            return false;
        }

        return true;
    }

    /**
     * Corregge un percorso errato secondo le convenzioni del progetto.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $path  Percorso da correggere
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $path  Percorso da correggere
=======
     * @param string $path Percorso da correggere
>>>>>>> f1d4085 (.)
=======
     * @param  string  $path  Percorso da correggere
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $path  Percorso da correggere
>>>>>>> 300ef70 (.)
     * @return string Percorso corretto
     */
    public static function correctPath(string $path): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // Corregge /var/www/html/<directory progetto>/Modules/ in /var/www/html/<directory progetto>/laravel/Modules/
        if (Str::contains($path, '/<directory progetto>/Modules/')) {
            return str_replace('/<directory progetto>/Modules/', '/<directory progetto>/laravel/Modules/', $path);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        // Corregge /var/www/html/saluteora/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/saluteora/Modules/')) {
            return str_replace('/saluteora/Modules/', '/saluteora/laravel/Modules/', $path);
>>>>>>> d2b0a27 (.)
        }

        // Corregge /var/www/html/Modules/ in /var/www/html/<directory progetto>/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
<<<<<<< HEAD
            return str_replace('/var/www/html/Modules/', '/var/www/html/<directory progetto>/laravel/Modules/', $path);
=======
            return str_replace('/var/www/html/Modules/', '/var/www/html/saluteora/laravel/Modules/', $path);
<<<<<<< HEAD
<<<<<<< HEAD
=======
        // Corregge /var/www/html/base_techplanner_fila3_mono/Modules/ in /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
        if (Str::contains($path, '/base_techplanner_fila3_mono/Modules/')) {
            return str_replace('/base_techplanner_fila3_mono/Modules/', '/base_techplanner_fila3_mono/laravel/Modules/', $path);
        }

        // Corregge /var/www/html/Modules/ in /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
            return str_replace('/var/www/html/Modules/', '/var/www/html/base_techplanner_fila3_mono/laravel/Modules/', $path);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        if (! File::exists($modulesPath)) {
            return [];
        }

        /** @var array<string> $directories */
        $directories = File::directories($modulesPath);

        return array_map(basename(...), $directories);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        if (!File::exists($modulesPath)) {
            return [];
        }
        
        /** @var array<string> $directories */
        $directories = File::directories($modulesPath);
        
        return array_map(fn(string $path): string => basename($path), $directories);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }

    /**
     * Verifica se un modulo esiste.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
=======
     * @param string $moduleName Nome del modulo
>>>>>>> f1d4085 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param  string  $moduleName  Nome del modulo
>>>>>>> 300ef70 (.)
     * @return bool True se il modulo esiste, false altrimenti
     */
    public static function moduleExists(string $moduleName): bool
    {
        return File::exists(self::modulePath($moduleName));
    }
}
