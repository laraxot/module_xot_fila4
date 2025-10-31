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
        // require_once __DIR__.'/vendor/autoload.php';
    }

    /**
     * Undocumented function.
     */
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
}
