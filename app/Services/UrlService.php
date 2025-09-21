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

    public function __construct()
    {
        // ---
<<<<<<< HEAD
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
    }

    public static function getInstance(): self
    {
<<<<<<< HEAD
        if (!(self::$instance instanceof self)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!(self::$instance instanceof self)) {
=======
        if (! self::$instance instanceof self) {
>>>>>>> a12f125f4a (.)
=======
        if (!(self::$instance instanceof self)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! self::$instance instanceof self) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
