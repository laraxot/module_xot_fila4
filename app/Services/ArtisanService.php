<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

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
if (! defined('STDIN')) {
=======
if (!defined('STDIN')) {
>>>>>>> 5a14301c (.)
=======
if (!defined('STDIN')) {
>>>>>>> 3fbbf1f5 (.)
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
        if (! is_string($module_name)) {
=======
        if (!is_string($module_name)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_string($module_name)) {
>>>>>>> 3fbbf1f5 (.)
            $module_name = '';
        }
        switch ($act) {
            case 'migrate':
                DB::purge('mysql');
                DB::reconnect('mysql');
<<<<<<< HEAD
<<<<<<< HEAD
                if ($module_name !== '') {
                    echo '<h3>Module '.$module_name.'</h3>';

                    return self::exe('module:migrate '.$module_name.' --force');
=======
=======
>>>>>>> 3fbbf1f5 (.)
                if ('' !== $module_name) {
                    echo '<h3>Module ' . $module_name . '</h3>';

                    return self::exe('module:migrate ' . $module_name . ' --force');
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
                echo self::sessionClear().PHP_EOL;
                echo self::errorClear().PHP_EOL;
                echo self::debugbarClear().PHP_EOL;
                echo PHP_EOL.'DONE'.PHP_EOL;
=======
=======
>>>>>>> 3fbbf1f5 (.)
                echo self::exe('cache:clear') . PHP_EOL;
                echo self::exe('config:clear') . PHP_EOL;
                echo self::exe('event:clear') . PHP_EOL;
                echo self::exe('route:clear') . PHP_EOL;
                echo self::exe('view:clear') . PHP_EOL;
                echo self::exe('debugbar:clear') . PHP_EOL;
                echo self::exe('opcache:clear') . PHP_EOL;
                echo self::exe('optimize:clear') . PHP_EOL;
                echo self::exe('key:generate') . PHP_EOL;

                // -- non artisan
                echo self::sessionClear() . PHP_EOL;
                echo self::errorClear() . PHP_EOL;
                echo self::debugbarClear() . PHP_EOL;
                echo PHP_EOL . 'DONE' . PHP_EOL;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
                // -------------------------------------------------------------------
=======
            // -------------------------------------------------------------------
>>>>>>> 5a14301c (.)
=======
            // -------------------------------------------------------------------
>>>>>>> 3fbbf1f5 (.)
            case 'debugbar:clear':
                self::debugbarClear();
                break;

<<<<<<< HEAD
<<<<<<< HEAD
                // ------------------------------------------------------------------
=======
            // ------------------------------------------------------------------
>>>>>>> 5a14301c (.)
=======
            // ------------------------------------------------------------------
>>>>>>> 3fbbf1f5 (.)

            case 'module-list':
                return self::exe('module:list');
            case 'module-disable':
<<<<<<< HEAD
<<<<<<< HEAD
                return self::exe('module:disable '.$module_name);
            case 'module-enable':
                return self::exe('module:enable '.$module_name);
                // ----------------------------------------------------------------------
=======
=======
>>>>>>> 3fbbf1f5 (.)
                return self::exe('module:disable ' . $module_name);
            case 'module-enable':
                return self::exe('module:enable ' . $module_name);
            // ----------------------------------------------------------------------
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
            case 'error':
            case 'error-show':
                return self::errorShow()->render();
            case 'error-clear':
                return self::errorClear();

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)

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
        if (! is_string($log)) {
            $log = '';
        }
        $content = '';
        if ($log !== '' && File::exists(storage_path('logs/'.$log))) {
            $content = File::get(storage_path('logs/'.$log));
=======
=======
>>>>>>> 3fbbf1f5 (.)
        if (!is_string($log)) {
            $log = '';
        }
        $content = '';
        if ('' !== $log && File::exists(storage_path('logs/' . $log))) {
            $content = File::get(storage_path('logs/' . $log));
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
        }

        $pattern = '/url":"([^"]*)"/';
        preg_match_all($pattern, $content, $matches);

<<<<<<< HEAD
=======
        //$urls = is_array($matches[1]) ? array_unique($matches[1]) : [];
>>>>>>> 5a14301c (.)
        $urls = array_unique($matches[1]);
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
            if ($file->getExtension() === 'log' && $file->getRealPath() !== false) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>'.$file->getRealPath();
=======
            if ('log' === $file->getExtension() && false !== $file->getRealPath()) {
                // Parameter #1 $paths of static method Illuminate\Filesystem\Filesystem::delete() expects array|string, Symfony\Component\Finder\SplFileInfo given.
                echo '<br/>' . $file->getRealPath();
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)

                File::delete($file->getRealPath());
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return '<pre>laravel.log cleared !</pre> ('.\count($files).' Files )';
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 5a14301c (.)
=======
        return '<pre>laravel.log cleared !</pre> (' . \count($files) . ' Files )';
>>>>>>> 3fbbf1f5 (.)
    }

    public static function sessionClear(): string
    {
        $files = File::files(storage_path('framework/sessions'));

        foreach ($files as $file) {
<<<<<<< HEAD
            if ($file->getExtension() === '' && $file->getRealPath() !== false) {
=======
            if ('' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 5a14301c (.)
                // echo '<br/>'.$file->getRealPath();

                File::delete($file->getRealPath());

                // $file->delete();
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return 'Session cleared! ('.\count($files).' Files )';
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 5a14301c (.)
=======
        return 'Session cleared! (' . \count($files) . ' Files )';
>>>>>>> 3fbbf1f5 (.)
    }

    public static function debugbarClear(): string
    {
        $files = File::files(storage_path('debugbar'));
        foreach ($files as $file) {
<<<<<<< HEAD
            if ($file->getExtension() === 'json' && $file->getRealPath() !== false) {
=======
            if ('json' === $file->getExtension() && false !== $file->getRealPath()) {
>>>>>>> 5a14301c (.)
                // echo '<br/>'.$file->getRealPath();

                File::delete($file->getRealPath());

                // $file->delete();
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return 'Debugbar Storage cleared! ('.\count($files).' Files )';
    }

    /**
     * @param  array<string, mixed>  $arguments
=======
=======
>>>>>>> 3fbbf1f5 (.)
        return 'Debugbar Storage cleared! (' . \count($files) . ' Files )';
    }

    /**
     * @param array<string, mixed> $arguments
>>>>>>> 5a14301c (.)
     */
    public static function exe(string $command, array $arguments = []): string
    {
        try {
            $output = '';

            Artisan::call($command, $arguments);

<<<<<<< HEAD
<<<<<<< HEAD
            return $output.'[<pre>'.Artisan::output().'</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>'.$exception->getMessage().'</pre>]';
=======
=======
>>>>>>> 3fbbf1f5 (.)
            return $output . '[<pre>' . Artisan::output() . '</pre>]'; // dato che mi carico solo le route minime menufull.delete non esiste.. impostare delle route comuni.
        } catch (Exception $exception) {
            // throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
            return '[<pre>' . $exception->getMessage() . '</pre>]';
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
    }
}
