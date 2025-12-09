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
    private static ?self $instance = null;
=======
    private static null|self $instance = null;
>>>>>>> 5a14301c (.)
=======
    private static null|self $instance = null;
>>>>>>> 3fbbf1f5 (.)

    public function __construct()
    {
        // ---
<<<<<<< HEAD
<<<<<<< HEAD
        include_once __DIR__.'/vendor/autoload.php';
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> 5a14301c (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> 3fbbf1f5 (.)
    }

    public static function getInstance(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
=======
=======
>>>>>>> 3fbbf1f5 (.)
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
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
=======
        return false !== filter_var($url, FILTER_VALIDATE_URL);
>>>>>>> 5a14301c (.)
    }
}
