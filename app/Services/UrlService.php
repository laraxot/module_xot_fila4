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
    private static ?self $instance = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    private static ?self $instance = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> f1d4085 (.)
=======
    private static null|self $instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    private static null|self $instance = null;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

    public function __construct()
    {
        // ---
<<<<<<< HEAD
        include_once __DIR__.'/vendor/autoload.php';
=======
<<<<<<< HEAD
<<<<<<< HEAD
        include_once __DIR__.'/vendor/autoload.php';
=======
<<<<<<< HEAD
<<<<<<< HEAD
        include_once __DIR__ . '/vendor/autoload.php';
=======
        include_once __DIR__.'/vendor/autoload.php';
>>>>>>> f1d4085 (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    }

    public static function getInstance(): self
    {
<<<<<<< HEAD
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
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
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
}
