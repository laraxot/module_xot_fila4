<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

use Illuminate\Contracts\View\View;
use Exception;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
use Modules\Xot\Services\Artisan\CommandRegistry;
>>>>>>> 8b18e4bff (.)

=======
>>>>>>> 27537f124 (.)
use function Safe\define;
use function Safe\fopen;
use function Safe\preg_match_all;

if (! defined('STDIN')) {
    define('STDIN', fopen('php://stdin', 'r'));
}

// ----- TODO
// --  1) capire come far fare da chiamato non da consolle "scout:import"

/**
 * Class ArtisanService.
 */
class ArtisanService
{
    /**
     * Execute an artisan command using the command registry pattern.
     *
     * @throws FileNotFoundException
     */
    public static function act(string $act): string
    {
<<<<<<< HEAD
        // da fare anche in noconsole, e magari mettere un policy
        $module_name = Request::input('module', '');
<<<<<<< HEAD
        if (! is_string($module_name)) {
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
        if (! is_string($module_name)) {
=======
        if (!is_string($module_name)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_string($module_name)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!is_string($module_name)) {
=======
        if (!is_string($module_name)) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($module_name)) {
=======
        if (! is_string($module_name)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_string($module_name)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! is_string($module_name)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (! is_string($module_name)) {
>>>>>>> ca9324a4 (.)
=======
        if (! is_string($module_name)) {
>>>>>>> 43d67f21 (.)
=======
        if (!is_string($module_name)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!is_string($module_name)) {
=======
        if (! is_string($module_name)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!is_string($module_name)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!is_string($module_name)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (! is_string($module_name)) {
>>>>>>> ca9324a4 (.)
=======
        if (! is_string($module_name)) {
>>>>>>> 43d67f21 (.)
=======
        if (! is_string($module_name)) {
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
            $module_name = '';
        }
        switch ($act) {
            case 'migrate':
                DB::purge('mysql');
                DB::reconnect('mysql');
<<<<<<< HEAD
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
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                if ($module_name !== '') {
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
                if ('' !== $module_name) {
<<<<<<< HEAD
                    echo '<h3>Module ' . $module_name . '</h3>';

                    return self::exe('module:migrate ' . $module_name . ' --force');
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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    echo '<h3>Module ' . $module_name . '</h3>';

                    return self::exe('module:migrate ' . $module_name . ' --force');
=======
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
>>>>>>> a12f125f4a (.)
=======
                    echo '<h3>Module ' . $module_name . '</h3>';

                    return self::exe('module:migrate ' . $module_name . ' --force');
>>>>>>> b93ef594b4 (.)
=======
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                if ($module_name !== '') {
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
                if ($module_name !== '') {
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> 5a14301c (.)
                if ('' !== $module_name) {
<<<<<<< HEAD
                    echo '<h3>Module ' . $module_name . '</h3>';

                    return self::exe('module:migrate ' . $module_name . ' --force');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                    echo '<h3>Module ' . $module_name . '</h3>';

                    return self::exe('module:migrate ' . $module_name . ' --force');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                if ($module_name !== '') {
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
                if ($module_name !== '') {
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
>>>>>>> 43d67f21 (.)
=======
=======
                if ('' !== $module_name) {
                    echo '<h3>Module ' . $module_name . '</h3>';

                    return self::exe('module:migrate ' . $module_name . ' --force');
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
>>>>>>> 285375c74 (.)
                }

=======
                }

>>>>>>> 53d6a6ba (.)
                return self::exe('migrate --force');

            case 'routelist':
                return self::exe('route:list');
            case 'queue:flush':
                return self::exe('queue:flush');
            case 'routelist1':
                return self::showRouteList();
            case 'optimize':
                return self::exe('optimize');
            case 'clear':
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 43d67f21 (.)
                echo self::exe('cache:clear').PHP_EOL;
                echo self::exe('config:clear').PHP_EOL;
                echo self::exe('event:clear').PHP_EOL;
                echo self::exe('route:clear').PHP_EOL;
                echo self::exe('view:clear').PHP_EOL;
                echo self::exe('debugbar:clear').PHP_EOL;
                echo self::exe('opcache:clear').PHP_EOL;
                echo self::exe('optimize:clear').PHP_EOL;
                echo self::exe('key:generate').PHP_EOL;
<<<<<<< HEAD
<<<<<<< HEAD

                // -- non artisan
                echo self::sessionClear().PHP_EOL;
                echo self::errorClear().PHP_EOL;
                echo self::debugbarClear().PHP_EOL;
                echo PHP_EOL.'DONE'.PHP_EOL;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
                echo self::exe('cache:clear') . PHP_EOL;
                echo self::exe('config:clear') . PHP_EOL;
                echo self::exe('event:clear') . PHP_EOL;
                echo self::exe('route:clear') . PHP_EOL;
                echo self::exe('view:clear') . PHP_EOL;
                echo self::exe('debugbar:clear') . PHP_EOL;
                echo self::exe('opcache:clear') . PHP_EOL;
                echo self::exe('optimize:clear') . PHP_EOL;
                echo self::exe('key:generate') . PHP_EOL;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

                // -- non artisan
                echo self::sessionClear() . PHP_EOL;
                echo self::errorClear() . PHP_EOL;
                echo self::debugbarClear() . PHP_EOL;
                echo PHP_EOL . 'DONE' . PHP_EOL;
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                echo self::exe('cache:clear').PHP_EOL;
                echo self::exe('config:clear').PHP_EOL;
                echo self::exe('event:clear').PHP_EOL;
                echo self::exe('route:clear').PHP_EOL;
                echo self::exe('view:clear').PHP_EOL;
                echo self::exe('debugbar:clear').PHP_EOL;
                echo self::exe('opcache:clear').PHP_EOL;
                echo self::exe('optimize:clear').PHP_EOL;
                echo self::exe('key:generate').PHP_EOL;

                // -- non artisan
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

                // -- non artisan
>>>>>>> 43d67f21 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======

                // -- non artisan
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                echo self::sessionClear().PHP_EOL;
                echo self::errorClear().PHP_EOL;
                echo self::debugbarClear().PHP_EOL;
                echo PHP_EOL.'DONE'.PHP_EOL;
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
                echo self::exe('cache:clear') . PHP_EOL;
                echo self::exe('config:clear') . PHP_EOL;
                echo self::exe('event:clear') . PHP_EOL;
                echo self::exe('route:clear') . PHP_EOL;
                echo self::exe('view:clear') . PHP_EOL;
                echo self::exe('debugbar:clear') . PHP_EOL;
                echo self::exe('opcache:clear') . PHP_EOL;
                echo self::exe('optimize:clear') . PHP_EOL;
                echo self::exe('key:generate') . PHP_EOL;
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> e59778ae (.)

                // -- non artisan
                echo self::sessionClear() . PHP_EOL;
                echo self::errorClear() . PHP_EOL;
                echo self::debugbarClear() . PHP_EOL;
                echo PHP_EOL . 'DONE' . PHP_EOL;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                break;
            case 'clearcache':
                return self::exe('cache:clear');
            case 'routecache':
                return self::exe('route:cache');
            case 'routeclear':
                return self::exe('route:clear');
            case 'viewclear':
                return self::exe('view:clear');
            case 'configcache':
                return self::exe('config:cache');
<<<<<<< HEAD
                // -------------------------------------------------------------------
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
<<<<<<< HEAD
                // -------------------------------------------------------------------
=======
            // -------------------------------------------------------------------
>>>>>>> 5a14301c (.)
=======
            // -------------------------------------------------------------------
>>>>>>> 3fbbf1f5 (.)
=======
            // -------------------------------------------------------------------
=======
            // -------------------------------------------------------------------
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // -------------------------------------------------------------------
=======
                // -------------------------------------------------------------------
>>>>>>> a12f125f4a (.)
=======
            // -------------------------------------------------------------------
>>>>>>> b93ef594b4 (.)
=======
                // -------------------------------------------------------------------
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                // -------------------------------------------------------------------
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
            // -------------------------------------------------------------------
>>>>>>> 0e51323 (.)
=======
            // -------------------------------------------------------------------
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
                // -------------------------------------------------------------------
>>>>>>> 43d67f21 (.)
=======
                // -------------------------------------------------------------------
=======
            // -------------------------------------------------------------------
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                // -------------------------------------------------------------------
>>>>>>> 5842a556 (.)
=======
            // -------------------------------------------------------------------
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            // -------------------------------------------------------------------
=======
                // -------------------------------------------------------------------
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            // -------------------------------------------------------------------
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            // -------------------------------------------------------------------
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                // -------------------------------------------------------------------
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                // -------------------------------------------------------------------
>>>>>>> 43d67f21 (.)
=======
                // -------------------------------------------------------------------
=======
            // -------------------------------------------------------------------
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                // -------------------------------------------------------------------
>>>>>>> 5842a556 (.)
=======
                // -------------------------------------------------------------------
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
            case 'debugbar:clear':
                self::debugbarClear();
                break;

<<<<<<< HEAD
                // ------------------------------------------------------------------
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
<<<<<<< HEAD
                // ------------------------------------------------------------------
=======
            // ------------------------------------------------------------------
>>>>>>> 5a14301c (.)
=======
            // ------------------------------------------------------------------
>>>>>>> 3fbbf1f5 (.)
=======
            // ------------------------------------------------------------------
=======
            // ------------------------------------------------------------------
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // ------------------------------------------------------------------
=======
                // ------------------------------------------------------------------
>>>>>>> a12f125f4a (.)
=======
            // ------------------------------------------------------------------
>>>>>>> b93ef594b4 (.)
=======
                // ------------------------------------------------------------------
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                // ------------------------------------------------------------------
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
            // ------------------------------------------------------------------
>>>>>>> 0e51323 (.)
=======
            // ------------------------------------------------------------------
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
                // ------------------------------------------------------------------
>>>>>>> 43d67f21 (.)
=======
                // ------------------------------------------------------------------
=======
            // ------------------------------------------------------------------
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                // ------------------------------------------------------------------
>>>>>>> 5842a556 (.)
=======
            // ------------------------------------------------------------------
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            // ------------------------------------------------------------------
=======
                // ------------------------------------------------------------------
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            // ------------------------------------------------------------------
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            // ------------------------------------------------------------------
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                // ------------------------------------------------------------------
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                // ------------------------------------------------------------------
>>>>>>> 43d67f21 (.)
=======
                // ------------------------------------------------------------------
=======
            // ------------------------------------------------------------------
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                // ------------------------------------------------------------------
>>>>>>> 5842a556 (.)
=======
                // ------------------------------------------------------------------
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

            case 'module-list':
                return self::exe('module:list');
            case 'module-disable':
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                return self::exe('module:disable '.$module_name);
            case 'module-enable':
                return self::exe('module:enable '.$module_name);
                // ----------------------------------------------------------------------
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> e59778ae (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
                return self::exe('module:disable ' . $module_name);
            case 'module-enable':
                return self::exe('module:enable ' . $module_name);
            // ----------------------------------------------------------------------
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
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
                return self::exe('module:disable '.$module_name);
            case 'module-enable':
                return self::exe('module:enable '.$module_name);
                // ----------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
                return self::exe('module:disable ' . $module_name);
            case 'module-enable':
                return self::exe('module:enable ' . $module_name);
            // ----------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                return self::exe('module:disable '.$module_name);
            case 'module-enable':
                return self::exe('module:enable '.$module_name);
                // ----------------------------------------------------------------------
<<<<<<< HEAD
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
                return self::exe('module:disable '.$module_name);
            case 'module-enable':
                return self::exe('module:enable '.$module_name);
                // ----------------------------------------------------------------------
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
            case 'error':
            case 'error-show':
                return self::errorShow()->render();
            case 'error-clear':
                return self::errorClear();

<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                // -------------------------------------------------------------------------
            case 'spatiecache-clear':
                /* da vedere se e' necessaria
                 * try {
                 * return \Spatie\ResponseCache\Facades\ResponseCache::clear();
                 * } catch (\Exception $e) {
                 * dddx($e);
                 * }
                 */
                // case 'spatiecache-clear1': return ArtisanService::exe('responsecache:clear'); //The command "responsecache:clear" does not exist.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> e59778ae (.)
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
=======
>>>>>>> e59778ae (.)
            // -------------------------------------------------------------------------
            case 'spatiecache-clear':
            /* da vedere se e' necessaria
             * try {
             * return \Spatie\ResponseCache\Facades\ResponseCache::clear();
             * } catch (\Exception $e) {
             * dddx($e);
             * }
             */
            // case 'spatiecache-clear1': return ArtisanService::exe('responsecache:clear'); //The command "responsecache:clear" does not exist.
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
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
                // -------------------------------------------------------------------------
            case 'spatiecache-clear':
=======
                // -------------------------------------------------------------------------
            case 'spatiecache-clear':
>>>>>>> 43d67f21 (.)
=======
                // -------------------------------------------------------------------------
            case 'spatiecache-clear':
>>>>>>> 43d67f21 (.)
                /* da vedere se e' necessaria
                 * try {
                 * return \Spatie\ResponseCache\Facades\ResponseCache::clear();
                 * } catch (\Exception $e) {
                 * dddx($e);
                 * }
                 */
                // case 'spatiecache-clear1': return ArtisanService::exe('responsecache:clear'); //The command "responsecache:clear" does not exist.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
            // -------------------------------------------------------------------------
            case 'spatiecache-clear':
            /* da vedere se e' necessaria
             * try {
             * return \Spatie\ResponseCache\Facades\ResponseCache::clear();
             * } catch (\Exception $e) {
             * dddx($e);
             * }
             */
            // case 'spatiecache-clear1': return ArtisanService::exe('responsecache:clear'); //The command "responsecache:clear" does not exist.
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
                // -------------------------------------------------------------------------
            case 'spatiecache-clear':
                /* da vedere se e' necessaria
                 * try {
                 * return \Spatie\ResponseCache\Facades\ResponseCache::clear();
                 * } catch (\Exception $e) {
                 * dddx($e);
                 * }
                 */
                // case 'spatiecache-clear1': return ArtisanService::exe('responsecache:clear'); //The command "responsecache:clear" does not exist.
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
            // -------------------------------------------------------------------------
            case 'spatiecache-clear':
            /* da vedere se e' necessaria
             * try {
             * return \Spatie\ResponseCache\Facades\ResponseCache::clear();
             * } catch (\Exception $e) {
             * dddx($e);
             * }
             */
            // case 'spatiecache-clear1': return ArtisanService::exe('responsecache:clear'); //The command "responsecache:clear" does not exist.
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

            default:
                return '';
=======
        $moduleName = self::getModuleName();
        $registry = new CommandRegistry;

        $handler = $registry->findHandler($act);

        if ($handler === null) {
            return '';
>>>>>>> b7afadf9 (.)
        }

        return $handler->handle($moduleName);
    }

    /**
     * Get the module name from the request.
     */
    private static function getModuleName(): string
    {
        $moduleName = Request::input('module', '');

        if (! is_string($moduleName)) {
            return '';
        }

        return $moduleName;
    }

    public static function errorShow(): Renderable
    {
        /**
         * @var view-string
         */
        $view = 'xot::acts.artisan.error-show';
        $files = File::files(storage_path('logs'));
        $log = request('log', '');
        if (! is_string($log)) {
            $log = '';
        }
        $content = '';
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
        }

        $pattern = '/url":"([^"]*)"/';

        /** @var array<int, array<int, string>>|null $matches */
        $matches = [];
        preg_match_all($pattern, $content, $matches);

        /** @var array<int, string> $urls */
        $urls = [];
<<<<<<< HEAD
        if (is_array($matches)) {
=======
        if (is_array($matches) && isset($matches[1])) {
>>>>>>> c85ea7588 (.)
            /** @var array<int, string> $urlsRaw */
            $urlsRaw = $matches[1];
            $urls = array_values(array_unique($urlsRaw));
        }

        $view_params = [
            'view' => $view,
            'lang' => app()->getLocale(),
            'files' => $files,
            'content' => $content,
            'urls' => $urls,
        ];

        return view((string) $view, $view_params);
    }

    public static function showRouteList(): string
    {
        $routeCollection = Route::getRoutes();
        /*
         * $view = ThemeService::g1etViewModule();
         *
         * dddx([
         * 'view' => $view,
         * 'this' => get_class(),
         * 'parent' => get_parent_class(),
         * 'debug' => \debug_backtrace(),
         * ]);
         */
        /*
         * $debug = \debug_backtrace();
         * $file = $debug[1]['file'];
         *
         * dddx([
         * 'file' => $file,
         * 'views' => ThemeService::getDefaultViewArray(),
         * ]);
         */
        /**
         * @var view-string
         */
        $view = 'xot::acts.artisan.show_route_list';
        $view_params = [
            'view' => $view,
            'routeCollection' => $routeCollection,
            'lang' => app()->getLocale(),
        ];

        $out = view((string) $view, $view_params);

        Assert::isInstanceOf($out, View::class);

        return $out->render();
    }

    public static function errorClear(): string
    {
        $files = File::files(storage_path('logs'));

        foreach ($files as $file) {
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();

                File::delete($file->getRealPath());
            }
        }

        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
    }

    public static function sessionClear(): string
    {
        $files = File::files(storage_path('framework/sessions'));

        foreach ($files as $file) {
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
                // echo '<br/>'.$file->getRealPath();

                File::delete($file->getRealPath());

                // $file->delete();
            }
        }

        return 'Session cleared! ('.\count($files).' Files )';
    }

    public static function debugbarClear(): string
    {
        $files = File::files(storage_path('debugbar'));
        foreach ($files as $file) {
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
                // echo '<br/>'.$file->getRealPath();

                File::delete($file->getRealPath());

                // $file->delete();
            }
        }

        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
    }

    /**
     * @param  array<string, mixed>  $arguments
     */
    public static function exe(string $command, array $arguments = []): string
    {
        try {
            $output = '';

            Artisan::call($command, $arguments);

            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (\Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>'.$exception->getMessage().'</pre>]';

            // dddx(get_class_methods($e));
            /*
             * $vendor_dir = (realpath(LARAVEL_DIR.'/vendor'));
             * if (false === $vendor_dir) {
             * throw new \Exception('not recognize realpath laravel_dir/vendor');
             * }
             * $my = collect($e->getTrace())->filter(
             * function ($item) use ($vendor_dir) {
             * return isset($item['file']) && ! Str::startsWith($item['file'], $vendor_dir);
             * }
             * );
             *
             * //dddx([LARAVEL_DIR, $e->getTrace(), $e->getPrevious()]);
             * //dddx($my);
             * $msg = '<br/>'.$command.' non effettuato '.$e->getMessage().
             * '<br/>Code: '.$e->getCode().
             * '<br/>File: '.$e->getFile().
             * '<br/>Line: '.$e->getLine();
             * foreach ($my as $v) {
             * $msg .= '<br/>My File :'.$v['file'].
             * '<br/>My Line :'.$v['line'];
             * }
             *
             * return $msg;
             */
        } /*
         * //Dead catch - Symfony\Component\Console\Exception\CommandNotFoundException is already caught by Exception above.
         * catch (\Symfony\Component\Console\Exception\CommandNotFoundException $e) {
         * return '<br/>'.$command.' non effettuato';
         * }*/
    }
}
