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
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> f1d4085 (.)
=======
    private static null|self $instance = null;
>>>>>>> 73eab74 (.)

    public function __construct()
    {
        // ---
<<<<<<< HEAD
<<<<<<< HEAD
        include_once __DIR__ . '/vendor/autoload.php';
=======
        include_once __DIR__.'/vendor/autoload.php';
>>>>>>> f1d4085 (.)
=======
        include_once __DIR__ . '/vendor/autoload.php';
>>>>>>> 73eab74 (.)
    }

    public static function getInstance(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!(self::$instance instanceof self)) {
=======
        if (! self::$instance instanceof self) {
>>>>>>> f1d4085 (.)
=======
        if (!(self::$instance instanceof self)) {
>>>>>>> 73eab74 (.)
            self::$instance = new self();
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
        return false !== filter_var($url, FILTER_VALIDATE_URL);
    }
}
