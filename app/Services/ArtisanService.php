<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)

=======
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
use Exception;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

use function Safe\define;
use function Safe\fopen;
use function Safe\preg_match_all;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)

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
if (! defined('STDIN')) {
=======
if (!defined('STDIN')) {
>>>>>>> 5a14301c (.)
=======
if (!defined('STDIN')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (!defined('STDIN')) {
=======
if (!defined('STDIN')) {
>>>>>>> 399f46d3 (.)
=======
if (!defined('STDIN')) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
if (!defined('STDIN')) {
=======
if (! defined('STDIN')) {
>>>>>>> a12f125f4a (.)
=======
if (!defined('STDIN')) {
>>>>>>> b93ef594b4 (.)
=======
if (! defined('STDIN')) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
if (! defined('STDIN')) {
>>>>>>> ca9324a4 (.)
=======

if (! defined('STDIN')) {
>>>>>>> 43d67f21 (.)
=======

<<<<<<< HEAD
if (!defined('STDIN')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
if (! defined('STDIN')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!defined('STDIN')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!defined('STDIN')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
if (! defined('STDIN')) {
>>>>>>> ca9324a4 (.)
=======

if (! defined('STDIN')) {
>>>>>>> 43d67f21 (.)
=======

<<<<<<< HEAD
if (!defined('STDIN')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
if (! defined('STDIN')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
if (!defined('STDIN')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!defined('STDIN')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
if (! defined('STDIN')) {
>>>>>>> ca9324a4 (.)
=======

if (! defined('STDIN')) {
>>>>>>> 43d67f21 (.)
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
     * @throws FileNotFoundException
     */
    public static function act(string $act): string
    {
        // da fare anche in noconsole, e magari mettere un policy
        $module_name = Request::input('module', '');
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
=======
>>>>>>> 21348520 (.)
        if (!is_string($module_name)) {
=======
        if (! is_string($module_name)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
        if (!is_string($module_name)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_string($module_name)) {
=======
        if (! is_string($module_name)) {
>>>>>>> f1d4085 (.)
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
            $module_name = '';
        }
        switch ($act) {
            case 'migrate':
                DB::purge('mysql');
                DB::reconnect('mysql');
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
                if ($module_name !== '') {
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
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
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
                    echo '<h3>Module ' . $module_name . '</h3>';

                    return self::exe('module:migrate ' . $module_name . ' --force');
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
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
                }

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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======

                // -- non artisan
>>>>>>> 43d67f21 (.)
                echo self::sessionClear().PHP_EOL;
                echo self::errorClear().PHP_EOL;
                echo self::debugbarClear().PHP_EOL;
                echo PHP_EOL.'DONE'.PHP_EOL;
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
=======
>>>>>>> a12f125f4a (.)
=======
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                // -------------------------------------------------------------------
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
            // -------------------------------------------------------------------
>>>>>>> 0e51323 (.)
=======
            // -------------------------------------------------------------------
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
            // -------------------------------------------------------------------
=======
                // -------------------------------------------------------------------
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
            // -------------------------------------------------------------------
=======
                // -------------------------------------------------------------------
>>>>>>> f1d4085 (.)
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
            case 'debugbar:clear':
                self::debugbarClear();
                break;

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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                // ------------------------------------------------------------------
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
            // ------------------------------------------------------------------
>>>>>>> 0e51323 (.)
=======
            // ------------------------------------------------------------------
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
            // ------------------------------------------------------------------
=======
                // ------------------------------------------------------------------
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
            // ------------------------------------------------------------------
=======
                // ------------------------------------------------------------------
>>>>>>> f1d4085 (.)
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

            case 'module-list':
                return self::exe('module:list');
            case 'module-disable':
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
>>>>>>> ca9324a4 (.)
                return self::exe('module:disable '.$module_name);
            case 'module-enable':
                return self::exe('module:enable '.$module_name);
                // ----------------------------------------------------------------------
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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
                return self::exe('module:disable '.$module_name);
            case 'module-enable':
                return self::exe('module:enable '.$module_name);
                // ----------------------------------------------------------------------
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
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                return self::exe('module:disable '.$module_name);
            case 'module-enable':
                return self::exe('module:enable '.$module_name);
                // ----------------------------------------------------------------------
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
            case 'error':
            case 'error-show':
                return self::errorShow()->render();
            case 'error-clear':
                return self::errorClear();

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
=======
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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

            default:
                return '';
        }

        return '';
    }

    public static function errorShow(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'xot::acts.artisan.error-show';
        $files = File::files(storage_path('logs'));
        $log = request('log', '');
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
        if (! is_string($log)) {
            $log = '';
        }
        $content = '';
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
        if (!is_string($log)) {
            $log = '';
        }
        $content = '';
        if ('' !== $log && File::exists(storage_path('logs/' . $log))) {
            $content = File::get(storage_path('logs/' . $log));
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        if (! is_string($log)) {
            $log = '';
        }
        $content = '';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> 399f46d3 (.)
        if ('' !== $log && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
        if (!is_string($log)) {
            $log = '';
        }
        $content = '';
        if ('' !== $log && File::exists(storage_path('logs/' . $log))) {
            $content = File::get(storage_path('logs/' . $log));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        if (! is_string($log)) {
            $log = '';
        }
        $content = '';
<<<<<<< HEAD
<<<<<<< HEAD
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
        if ('' !== $log && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
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
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        if (! is_string($log)) {
            $log = '';
        }
        $content = '';
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
        if ('' !== $log && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
>>>>>>> f1d4085 (.)
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
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        if (! is_string($log)) {
            $log = '';
        }
        $content = '';
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
>>>>>>> 43d67f21 (.)
        }

        $pattern = '/url":"([^"]*)"/';
        preg_match_all($pattern, $content, $matches);

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
        //$urls = is_array($matches[1]) ? array_unique($matches[1]) : [];
>>>>>>> 5a14301c (.)
        $urls = array_unique($matches[1]);
<<<<<<< HEAD
=======
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
        // Verifica che l'array $matches contenga l'indice 1 prima di accedervi
        $urls = [];
        if (isset($matches[1]) && is_array($matches[1])) {
            $urls = array_unique($matches[1]);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
        //$urls = is_array($matches[1]) ? array_unique($matches[1]) : [];
        $urls = array_unique($matches[1]);
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
        //$urls = is_array($matches[1]) ? array_unique($matches[1]) : [];
        $urls = array_unique($matches[1]);
>>>>>>> c06600c (.)
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        //$urls = is_array($matches[1]) ? array_unique($matches[1]) : [];
        $urls = array_unique($matches[1]);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
        //$urls = is_array($matches[1]) ? array_unique($matches[1]) : [];
        $urls = array_unique($matches[1]);
>>>>>>> 0e51323 (.)
=======
        //$urls = is_array($matches[1]) ? array_unique($matches[1]) : [];
        $urls = array_unique($matches[1]);
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        //$urls = is_array($matches[1]) ? array_unique($matches[1]) : [];
        $urls = array_unique($matches[1]);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
        $view_params = [
            'view' => $view,
            'lang' => app()->getLocale(),
            'files' => $files,
            'content' => $content,
            'urls' => $urls,
        ];

        return view($view, $view_params);
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
         * @phpstan-var view-string
         */
        $view = 'xot::acts.artisan.show_route_list';
        $view_params = [
            'view' => $view,
            'routeCollection' => $routeCollection,
            'lang' => app()->getLocale(),
        ];

        $out = view($view, $view_params);

        return $out->render();
    }

    public static function errorClear(): string
    {
        $files = File::files(storage_path('logs'));

        foreach ($files as $file) {
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
>>>>>>> e59778ae (.)
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            if ('log' === $file->getExtension() && false !== $file->getRealPath()) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
<<<<<<< HEAD
                echo '<br/>' . $file->getRealPath();
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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                echo '<br/>' . $file->getRealPath();
=======
                echo '<br/>'.$file->getRealPath();
>>>>>>> a12f125f4a (.)
=======
                echo '<br/>' . $file->getRealPath();
>>>>>>> b93ef594b4 (.)
=======
                echo '<br/>'.$file->getRealPath();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
            if ('log' === $file->getExtension() && false !== $file->getRealPath()) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
<<<<<<< HEAD
                echo '<br/>' . $file->getRealPath();
<<<<<<< HEAD
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
>>>>>>> 43d67f21 (.)
=======
>>>>>>> d86d643a (.)
=======
            if ('log' === $file->getExtension() && false !== $file->getRealPath()) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
<<<<<<< HEAD
                echo '<br/>' . $file->getRealPath();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
            if ('log' === $file->getExtension() && false !== $file->getRealPath()) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>' . $file->getRealPath();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
                echo '<br/>'.$file->getRealPath();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                echo '<br/>' . $file->getRealPath();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
>>>>>>> 43d67f21 (.)
=======
            if ('log' === $file->getExtension() && false !== $file->getRealPath()) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>' . $file->getRealPath();
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
>>>>>>> 5842a556 (.)
=======
            if ('log' === $file->getExtension() && false !== $file->getRealPath()) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>' . $file->getRealPath();
>>>>>>> 5a14301c (.)
=======
=======
                echo '<br/>'.$file->getRealPath();
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                echo '<br/>' . $file->getRealPath();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
            if ('log' === $file->getExtension() && false !== $file->getRealPath()) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>' . $file->getRealPath();
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
>>>>>>> 43d67f21 (.)

                File::delete($file->getRealPath());
            }
        }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 5a14301c (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 3fbbf1f5 (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 399f46d3 (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> a12f125f4a (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> b93ef594b4 (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 0e51323 (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> 5842a556 (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> 5842a556 (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 5a14301c (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
    }

    public static function sessionClear(): string
    {
        $files = File::files(storage_path('framework/sessions'));

        foreach ($files as $file) {
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
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
=======
            if ('' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 5a14301c (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
            if ('' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 0e51323 (.)
=======
            if ('' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
>>>>>>> 43d67f21 (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
=======
            if ('' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
>>>>>>> 5842a556 (.)
=======
            if ('' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 5a14301c (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
>>>>>>> 43d67f21 (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
=======
            if ('' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
>>>>>>> 5842a556 (.)
=======
            if ('' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 5a14301c (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
>>>>>>> 43d67f21 (.)
                // echo '<br/>'.$file->getRealPath();

                File::delete($file->getRealPath());

                // $file->delete();
            }
        }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Session cleared! ('.\count($files).' Files )';
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 5a14301c (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 3fbbf1f5 (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 399f46d3 (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Session cleared! (' . \count($files) . ' Files )';
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> a12f125f4a (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> b93ef594b4 (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 0e51323 (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> 5842a556 (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        return 'Session cleared! (' . \count($files) . ' Files )';
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> 5842a556 (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 5a14301c (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return 'Session cleared! ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
    }

    public static function debugbarClear(): string
    {
        $files = File::files(storage_path('debugbar'));
        foreach ($files as $file) {
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
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
=======
            if ('json' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 5a14301c (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
            if ('json' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 0e51323 (.)
=======
            if ('json' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
>>>>>>> 43d67f21 (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
=======
            if ('json' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
>>>>>>> 5842a556 (.)
=======
            if ('json' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 5a14301c (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
>>>>>>> 43d67f21 (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
=======
            if ('json' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
>>>>>>> 5842a556 (.)
=======
            if ('json' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 5a14301c (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
>>>>>>> 43d67f21 (.)
                // echo '<br/>'.$file->getRealPath();

                File::delete($file->getRealPath());

                // $file->delete();
            }
        }

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
        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
=======
=======
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> a5dccfe (.)
        return 'Debugbar Storage cleared! (' . \count($files) . ' Files )';
>>>>>>> d86d643a (.)
=======
        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
=======
        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
=======
        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
>>>>>>> 43d67f21 (.)
    }

    /**
     * @param  array<string, mixed>  $arguments
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        return 'Debugbar Storage cleared! (' . \count($files) . ' Files )';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Debugbar Storage cleared! (' . \count($files) . ' Files )';
=======
=======
>>>>>>> ca9324a4 (.)
        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
    }

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $arguments
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $arguments
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        return 'Debugbar Storage cleared! (' . \count($files) . ' Files )';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Debugbar Storage cleared! (' . \count($files) . ' Files )';
=======
=======
>>>>>>> ca9324a4 (.)
        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
    }

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $arguments
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $arguments
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        return 'Debugbar Storage cleared! (' . \count($files) . ' Files )';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Debugbar Storage cleared! (' . \count($files) . ' Files )';
=======
=======
>>>>>>> ca9324a4 (.)
        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
    }

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $arguments
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $arguments
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
     */
    public static function exe(string $command, array $arguments = []): string
    {
        try {
            $output = '';

            Artisan::call($command, $arguments);

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
            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>'.$exception->getMessage().'</pre>]';
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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
            return $output . '[<pre>' . Artisan::output() . '</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>' . $exception->getMessage() . '</pre>]';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
=======
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]';  // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
=======
            return $output . '[<pre>' . Artisan::output() . '</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
>>>>>>> b93ef594b4 (.)
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>' . $exception->getMessage() . '</pre>]';

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
<<<<<<< HEAD
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]';  // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (\Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> ca9324a4 (.)
            return '[<pre>'.$exception->getMessage().'</pre>]';
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>'.$exception->getMessage().'</pre>]';
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
=======
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]';  // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
=======
            return $output . '[<pre>' . Artisan::output() . '</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
>>>>>>> b93ef594b4 (.)
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>' . $exception->getMessage() . '</pre>]';

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
<<<<<<< HEAD
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]';  // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (\Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> ca9324a4 (.)
            return '[<pre>'.$exception->getMessage().'</pre>]';
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>'.$exception->getMessage().'</pre>]';
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
=======
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]';  // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
=======
            return $output . '[<pre>' . Artisan::output() . '</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
>>>>>>> b93ef594b4 (.)
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>' . $exception->getMessage() . '</pre>]';

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
<<<<<<< HEAD
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]';  // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (\Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> ca9324a4 (.)
            return '[<pre>'.$exception->getMessage().'</pre>]';
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>'.$exception->getMessage().'</pre>]';
>>>>>>> 43d67f21 (.)

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
