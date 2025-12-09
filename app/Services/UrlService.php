<?php

/**
 * @see https://www.webslesson.info/2019/02/import-excel-file-in-laravel.html
 * @see https://sweetcode.io/import-and-export-excel-files-data-using-in-laravel/
 */

declare(strict_types=1);

namespace Modules\Xot\Services;

/**
 * Undocumented class.
 */
class UrlService
{
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
>>>>>>> 399f46d3 (.)
=======
    private static null|self $instance = null;
>>>>>>> ca9324a4 (.)
=======
    private static null|self $instance = null;
>>>>>>> 5a14301c (.)

    public function __construct()
    {
        // ---
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        include_once __DIR__.'/vendor/autoload.php';
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> 5a14301c (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> 3fbbf1f5 (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        include_once __DIR__ . '/vendor/autoload.php';
=======
        include_once __DIR__.'/vendor/autoload.php';
>>>>>>> a12f125f4a (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> b93ef594b4 (.)
=======
        include_once __DIR__.'/vendor/autoload.php';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> ca9324a4 (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> 5a14301c (.)
    }

    public static function getInstance(): self
    {
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

    public function checkValidUrl(string $url): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
=======
        return false !== filter_var($url, FILTER_VALIDATE_URL);
>>>>>>> 5a14301c (.)
=======
        return false !== filter_var($url, FILTER_VALIDATE_URL);
>>>>>>> 5a14301c (.)
    }
}
