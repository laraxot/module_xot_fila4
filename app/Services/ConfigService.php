<?php

/**
 * @see https://medium.com/technology-hits/how-to-import-a-csv-excel-file-in-laravel-d50f93b98aa4
 */

declare(strict_types=1);

namespace Modules\Xot\Services;

/**
 * Class ConfigService.
 */
class ConfigService
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
    private static ?self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> 5a14301c (.)
=======
    private static null|self $instance = null;
>>>>>>> 3fbbf1f5 (.)
=======
    private static null|self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> 399f46d3 (.)
=======
    private static null|self $instance = null;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> a12f125f4a (.)
=======
    private static null|self $instance = null;
>>>>>>> b93ef594b4 (.)
=======
    private static ?self $instance = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    private static null|self $instance = null;
>>>>>>> ca9324a4 (.)
=======
    private static null|self $instance = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    private static null|self $instance = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    private static null|self $instance = null;
>>>>>>> ca9324a4 (.)
=======
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    private static null|self $instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    private static null|self $instance = null;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    private static null|self $instance = null;
>>>>>>> 9db27d12 (.)
=======
    private static null|self $instance = null;
>>>>>>> 5a14301c (.)
=======
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)

    public function __construct()
    {
        // ---
        // require_once __DIR__.'/vendor/autoload.php';
    }

    /**
     * Undocumented function.
     */
    public static function getInstance(): self
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
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
        if (!(self::$instance instanceof self)) {
=======
        if (! self::$instance instanceof self) {
>>>>>>> f1d4085 (.)
            self::$instance = new self();
>>>>>>> 5a14301c (.)
=======
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
>>>>>>> 5a14301c (.)
=======
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
>>>>>>> 5a14301c (.)
        }

        return self::$instance;
    }

    /**
     * Undocumented function.
     */
    public static function make(): self
    {
        return static::getInstance();
    }
}
