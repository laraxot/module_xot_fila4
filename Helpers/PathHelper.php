<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
/**
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
=======
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
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
 * Helper per la gestione dei percorsi nel progetto SaluteOra.
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
 */
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
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
<<<<<<< HEAD
     */
    public static string $projectBasePath = '/var/www/html/<nome progetto>';
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static string $projectBasePath = '/var/www/html/<nome progetto>';
=======
    public static string $projectBasePath = '/var/www/html/saluteora';
>>>>>>> 5a14301c (.)
=======
    public static string $projectBasePath = '/var/www/html/saluteora';
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

    /**
     * Percorso base di Laravel.
     */
<<<<<<< HEAD
    public static string $laravelBasePath = '/var/www/html/<nome progetto>/laravel';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static string $laravelBasePath = '/var/www/html/<nome progetto>/laravel';
=======
    public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
>>>>>>> 5a14301c (.)
=======
    public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
>>>>>>> 3fbbf1f5 (.)
=======
    public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

    /**
     * Percorso base dei moduli.
     */
<<<<<<< HEAD
    public static string $modulesBasePath = '/var/www/html/<nome progetto>/laravel/Modules';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static string $modulesBasePath = '/var/www/html/<nome progetto>/laravel/Modules';
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 3fbbf1f5 (.)
=======
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
=======
>>>>>>> 5a14301c (.)
    public static string $projectBasePath = '/var/www/html/saluteora';
=======
    public static string $projectBasePath = '/var/www/html/<nome progetto>';
>>>>>>> b7afadf9 (.)

    /**
     * Percorso base di Laravel.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> origin/develop
=======
>>>>>>> 5a14301c (.)
     */
    public static string $laravelBasePath = '/var/www/html/<directory progetto>/laravel';

    /**
     * Percorso base dei moduli.
<<<<<<< HEAD
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
<<<<<<< HEAD
    public static string $modulesBasePath = '/var/www/html/<directory progetto>/laravel/Modules';
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     */
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public static string $modulesBasePath = '/var/www/html/<directory progetto>/laravel/Modules';
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

    /**
     * Ottiene il percorso completo di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
     * @return bool True se il percorso è corretto, false altrimenti
     */
    public static function isValidPath(string $path): bool
    {
        // Verifica che il percorso contenga /laravel/Modules/ e non solo /Modules/
<<<<<<< HEAD
        if (Str::contains($path, '/Modules/') && ! Str::contains($path, '/laravel/Modules/')) {
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
        if (Str::contains($path, '/Modules/') && ! Str::contains($path, '/laravel/Modules/')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
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
>>>>>>> b7afadf9 (.)
        if (Str::contains($path, '/saluteora/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /saluteora/
<<<<<<< HEAD
        if (Str::contains($path, '/saluteora/') && !Str::contains($path, '/saluteora/laravel/')) {
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
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
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        if (Str::contains($path, '/saluteora/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /saluteora/
<<<<<<< HEAD
        if (Str::contains($path, '/saluteora/') && !Str::contains($path, '/saluteora/laravel/')) {
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
        if (Str::contains($path, '/base_techplanner_fila3_mono/Modules/')) {
            return false;
        }

        // Verifica che il percorso contenga /laravel/ dopo /base_techplanner_fila3_mono/
        if (Str::contains($path, '/base_techplanner_fila3_mono/') && !Str::contains($path, '/base_techplanner_fila3_mono/laravel/')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (Str::contains($path, '/saluteora/') && ! Str::contains($path, '/saluteora/laravel/')) {
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
<<<<<<< HEAD
        if (Str::contains($path, '/saluteora/') && ! Str::contains($path, '/saluteora/laravel/')) {
=======
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
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
     * @return string Percorso corretto
     */
    public static function correctPath(string $path): string
    {
<<<<<<< HEAD
        // Corregge /var/www/html/Modules/ in /var/www/html/<nome progetto>/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
            $path = Str::replace('/var/www/html/Modules/', self::$modulesBasePath.'/', $path);
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
        // Corregge /var/www/html/Modules/ in /var/www/html/<nome progetto>/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
            $path = Str::replace('/var/www/html/Modules/', self::$modulesBasePath.'/', $path);
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        // Corregge /var/www/html/saluteora/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/saluteora/Modules/')) {
            return str_replace('/saluteora/Modules/', '/saluteora/laravel/Modules/', $path);
=======
        // Corregge /var/www/html/<directory progetto>/Modules/ in /var/www/html/<directory progetto>/laravel/Modules/
        if (Str::contains($path, '/<directory progetto>/Modules/')) {
            return str_replace('/<directory progetto>/Modules/', '/<directory progetto>/laravel/Modules/', $path);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        // Corregge /var/www/html/saluteora/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/saluteora/Modules/')) {
            return str_replace('/saluteora/Modules/', '/saluteora/laravel/Modules/', $path);
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
        // Corregge /var/www/html/saluteora/Modules/ in /var/www/html/saluteora/laravel/Modules/
        if (Str::contains($path, '/saluteora/Modules/')) {
            return str_replace('/saluteora/Modules/', '/saluteora/laravel/Modules/', $path);
>>>>>>> 53d6a6ba (.)
=======
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
>>>>>>> b7afadf9 (.)
        }

        // Corregge /var/www/html/Modules/ in /var/www/html/<directory progetto>/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return str_replace('/var/www/html/Modules/', '/var/www/html/saluteora/laravel/Modules/', $path);
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
            return str_replace('/var/www/html/Modules/', '/var/www/html/<directory progetto>/laravel/Modules/', $path);
=======
            return str_replace('/var/www/html/Modules/', '/var/www/html/saluteora/laravel/Modules/', $path);
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
            return str_replace('/var/www/html/Modules/', '/var/www/html/<directory progetto>/laravel/Modules/', $path);
=======
            return str_replace('/var/www/html/Modules/', '/var/www/html/saluteora/laravel/Modules/', $path);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 8b18e4bff (.)
        // Corregge /var/www/html/base_techplanner_fila3_mono/Modules/ in /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
        if (Str::contains($path, '/base_techplanner_fila3_mono/Modules/')) {
            return str_replace('/base_techplanner_fila3_mono/Modules/', '/base_techplanner_fila3_mono/laravel/Modules/', $path);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        }

        // Corregge /var/www/html/Modules/ in /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
        if (Str::contains($path, '/var/www/html/Modules/')) {
            return str_replace('/var/www/html/Modules/', '/var/www/html/base_techplanner_fila3_mono/laravel/Modules/', $path);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            return str_replace('/var/www/html/Modules/', '/var/www/html/saluteora/laravel/Modules/', $path);
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)

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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    }

    /**
     * Verifica se un modulo esiste.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Nome del modulo
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
=======
     *
>>>>>>> 27537f124 (.)
     * @return bool True se il modulo esiste, false altrimenti
     */
    public static function moduleExists(string $moduleName): bool
    {
        return File::exists(self::modulePath($moduleName));
    }
}
