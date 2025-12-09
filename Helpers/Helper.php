<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Actions\File\FixPathAction;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\File\AssetPathAction;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Actions\File\FixPathAction;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\File\AssetPathAction;
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
=======
>>>>>>> 5a14301c (.)
=======
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Illuminate\Support\Facades\Log;
>>>>>>> ca9324a4 (.)
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
=======
>>>>>>> 5a14301c (.)
=======
=======
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
>>>>>>> ca9324a4 (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Services\ModuleService;
use Nwidart\Modules\Facades\Module;
use Webmozart\Assert\Assert;

use function Safe\define;
use function Safe\glob;
use function Safe\json_decode;
<<<<<<< HEAD
use function Safe\json_encode;
use function Safe\preg_match;
=======
use function Safe\preg_match;
use function Safe\realpath;
>>>>>>> 5a14301c (.)

// ------------------------------------------------

/* --- MAH
 * if (! function_exists('get_current_theme_name')) {
 * function current_theme_name(): string {
 * $theme_name = config('xra.pub_theme');
 *
 * if (inAdmin()) {
 * $theme_name = config('xra.adm_theme');
 * }
 *
 * return '_'.Str::lower($theme_name);
 * }
 * }
 */
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isRunningTestBench')) {
=======
if (!function_exists('isRunningTestBench')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> ca9324a4 (.)
    function isRunningTestBench(): bool
    {
        /*
         * try {
         * $testbench = realpath(__DIR__.'/../vendor/orchestra');
         * } catch (Exception $e) {
         * return false;
         * }
         * $res = Str::startsWith(base_path(), $testbench);
         * if (false == $res) {
         * dd([
         * 'msg' => 'preso',
         * 'res' => $res,
         * 'base_path' => base_path(),
         * 'testbench' => $testbench,
         * ]);
         * }
         *
         * return $res;
         */
        $path = app(FixPathAction::class)->execute('\vendor\orchestra\testbench-core\laravel');
        $base = app(FixPathAction::class)->execute(base_path());
<<<<<<< HEAD

        return Str::endsWith($base, $path);
=======
        $res = Str::endsWith($base, $path);

        return $res;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)

        // return false;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('snake_case')) {
=======
if (!function_exists('snake_case')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('snake_case')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('snake_case')) {
>>>>>>> ca9324a4 (.)
    function snake_case(string $str): string
    {
        return Str::snake($str);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('str_slug')) {
=======
if (!function_exists('str_slug')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('str_slug')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('str_slug')) {
>>>>>>> ca9324a4 (.)
    function str_slug(string $str): string
    {
        return Str::slug($str);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('str_singular')) {
=======
if (!function_exists('str_singular')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('str_singular')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('str_singular')) {
>>>>>>> ca9324a4 (.)
    function str_singular(string $str): string
    {
        return Str::singular($str);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('starts_with')) {
=======
if (!function_exists('starts_with')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('starts_with')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('starts_with')) {
>>>>>>> ca9324a4 (.)
    function starts_with(string $str, string $str1): bool
    {
        return Str::startsWith($str, $str1);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('ends_with')) {
=======
if (!function_exists('ends_with')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('ends_with')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('ends_with')) {
>>>>>>> ca9324a4 (.)
    function ends_with(string $str, string $str1): bool
    {
        return Str::endsWith($str, $str1);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('str_contains')) {
=======
if (!function_exists('str_contains')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('str_contains')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('str_contains')) {
>>>>>>> ca9324a4 (.)
    function str_contains(string $str, string $str1): bool
    {
        return Str::contains($str, $str1);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('hex2rgba')) {
=======
if (!function_exists('hex2rgba')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('hex2rgba')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('hex2rgba')) {
>>>>>>> ca9324a4 (.)
    /* Convert hexdec color string to rgb(a) string */

    function hex2rgba(string $color, float $opacity = -1.0): string
    {
        $default = 'rgb(0,0,0)';

        // Return default if no color provided
        if (empty($color)) {
            return $default;
        }

        // Sanitize $color if "#" is provided
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($color[0] === '#') {
=======
=======
>>>>>>> 399f46d3 (.)
        if ('#' === $color[0]) {
>>>>>>> 5a14301c (.)
=======
        if ($color[0] === '#') {
>>>>>>> ca9324a4 (.)
            $color = mb_substr($color, 1);
        }

        // Check if color has 6 or 3 characters and get values
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (mb_strlen($color) === 6) {
            $hex = [$color[0].$color[1], $color[2].$color[3], $color[4].$color[5]];
        } elseif (mb_strlen($color) === 3) {
            $hex = [$color[0].$color[0], $color[1].$color[1], $color[2].$color[2]];
=======
=======
>>>>>>> 3fbbf1f5 (.)
        if (6 === mb_strlen($color)) {
            $hex = [$color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]];
        } elseif (3 === mb_strlen($color)) {
            $hex = [$color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]];
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
        if ('#' == $color[0]) {
            $color = substr($color, 1);
        }

        // Check if color has 6 or 3 characters and get values
        if (6 == strlen($color)) {
=======
        if (mb_strlen($color) === 6) {
>>>>>>> ca9324a4 (.)
            $hex = [$color[0].$color[1], $color[2].$color[3], $color[4].$color[5]];
        } elseif (mb_strlen($color) === 3) {
            $hex = [$color[0].$color[0], $color[1].$color[1], $color[2].$color[2]];
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        } else {
            return $default;
        }

        // Convert hexadec to rgb
        $rgb = array_map('hexdec', $hex);

        // Check if opacity is set(rgba or rgb)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($opacity !== -1.0) {
            if ($opacity < 0 || $opacity > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba('.implode(',', $rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(',', $rgb).')';
=======
=======
>>>>>>> 399f46d3 (.)
        if (-1.0 !== $opacity) {
            if ($opacity < 0 || $opacity > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba(' . implode(',', $rgb) . ',' . $opacity . ')';
        } else {
            $output = 'rgb(' . implode(',', $rgb) . ')';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
        if ($opacity) {
            if (abs($opacity) > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba('.implode(',', $rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(',', $rgb).')';
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        if ($opacity !== -1.0) {
            if ($opacity < 0 || $opacity > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba('.implode(',', $rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(',', $rgb).')';
>>>>>>> ca9324a4 (.)
        }

        // Return rgb(a) color string
        return $output;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('dddx')) {
    function dddx(mixed $params): void
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('dddx')) {
=======
if (! function_exists('dddx')) {
>>>>>>> ca9324a4 (.)
    function dddx(mixed $params): string
>>>>>>> 5a14301c (.)
    {
        $tmp = debug_backtrace();
        $file = $tmp[0]['file'] ?? 'file-unknown';
        $file = str_replace('/', DIRECTORY_SEPARATOR, $file);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 5a14301c (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
>>>>>>> ca9324a4 (.)
        $doc_root = str_replace('/', DIRECTORY_SEPARATOR, $doc_root);

        $dir_piece = explode(DIRECTORY_SEPARATOR, __DIR__);
        $dir_piece = array_slice($dir_piece, 0, -6);

        $dir_copy = implode(DIRECTORY_SEPARATOR, $dir_piece);
        $file = str_replace($dir_copy, $doc_root, $file);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! defined('LARAVEL_START')) {
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> 5a14301c (.)
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> ca9324a4 (.)
            define('LARAVEL_START', microtime(true));
        }

        $start = LARAVEL_START;
        $data = [
            '_' => $params,
            'line' => $tmp[0]['line'] ?? 'line-unknows',
            'file' => app(FixPathAction::class)->execute($tmp[0]['file'] ?? 'file-unknown'),
            'time' => microtime(true) - $start,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
=======
=======
>>>>>>> 3fbbf1f5 (.)
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> 5a14301c (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> ca9324a4 (.)
            // 'file_1' => $file, //da sistemare
        ];
        if (
            File::exists($data['file']) &&
                Str::startsWith(
                    $data['file'],
                    app(FixPathAction::class)->execute(storage_path('framework/views')),
                )
        ) {
            // $data['extra'] = 'preso';
            $content = File::get($data['file']);
            $data['view_file'] = app(FixPathAction::class)
                ->execute(Str::between($content, '/**PATH ', ' ENDPATH**/'));
        }
<<<<<<< HEAD
=======

>>>>>>> 5a14301c (.)
        dd($data);
    }
}
/*
 * if (! function_exists('debug_methods')) {
 * function debug_methods(object $rows): string
 * {
 * $methods = get_class_methods($rows);
 * // *
 * $methods_get = collect($methods)->filter(
 * static fn ($item) => Str::startsWith($item, 'get')
 * )->map(
 * static function ($item) use ($rows) {
 * $value = 'Undefined';
 * try {
 * $value = $rows->{$item}();
 * } catch (Exception|ArgumentCountError $e) {
 * $value = $e->getMessage();
 * }
 *
 * return [
 * 'name' => $item,
 * 'value' => $value,
 * ];
 * }
 * )->all();
 *
 * return ArrayService::make()
 * ->setArray($methods_get)
 * ->toHtml()
 * ->render();
 * }
 * }
 */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getFilename')) {
=======
if (!function_exists('getFilename')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getFilename')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getFilename')) {
>>>>>>> ca9324a4 (.)
    function getFilename(array $params): string
    {
        $tmp = debug_backtrace();
        $class = class_basename($tmp[1]['class'] ?? 'class-unknown');

<<<<<<< HEAD
        $func = $tmp[1]['function'] ?? 'function-unknown';
        $params_list = collect($params)->except(['_token', '_method'])->implode('_');

        return Str::slug(
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
=======
        $func = $tmp[1]['function'];
        $params_list = collect($params)->except(['_token', '_method'])->implode('_');

        return Str::slug(
<<<<<<< HEAD
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
>>>>>>> ca9324a4 (.)
        );
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('req_uri')) {
=======
if (!function_exists('req_uri')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('req_uri')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('req_uri')) {
>>>>>>> ca9324a4 (.)
    function req_uri(): mixed
    {
        return $_SERVER['REQUEST_URI'] ?? '';
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('in_admin')) {
=======
if (!function_exists('in_admin')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('in_admin')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('in_admin')) {
>>>>>>> ca9324a4 (.)
    /**
     * ---.
     */
    function in_admin(array $params = []): bool
    {
        return inAdmin($params);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('inAdmin')) {
=======
if (!function_exists('inAdmin')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('inAdmin')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('inAdmin')) {
>>>>>>> ca9324a4 (.)
    /**
     * ---.
     */
    function inAdmin(array $params = []): bool
    {
        if (isset($params['in_admin'])) {
            return (bool) $params['in_admin'];
        }

        // dddx(ThemeService::__getStatic('in_admin'));
        /* Cannot call method get() on mixed
         * if (null !== config()->get('in_admin')) {
         * return config()->get('in_admin');
         * }
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (Request::segment(2) === 'admin') {
=======
=======
>>>>>>> 3fbbf1f5 (.)
        if ('admin' === Request::segment(2)) {
>>>>>>> 5a14301c (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> ca9324a4 (.)
            return true;
        }

        $segments = Request::segments();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return (is_countable($segments) ? count($segments) : 0) > 0 &&
            $segments[0] === 'livewire' &&
            session('in_admin') === true;
=======
=======
>>>>>>> 3fbbf1f5 (.)
        return (
            (is_countable($segments) ? count($segments) : 0) > 0 &&
            'livewire' === $segments[0] &&
            true === session('in_admin')
        );
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
/*
if (! function_exists('menu_gen')) {
    function menu_gen(array $item) {
        return MenuService::make($item);
    }
}
*/

/*
if (! function_exists('get_current_theme_name')) {
    function current_theme_name(): string {
        $theme_name = config('xra.pub_theme');

        if (inAdmin()) {
            $theme_name = config('xra.adm_theme');
        }

        return '_'.Str::lower($theme_name);
    }
}
*/

if (! function_exists('dddx')) {
    function dddx($data): void
    {
        ddd($data);
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return
            (is_countable($segments) ? count($segments) : 0) > 0 &&
            $segments[0] === 'livewire' &&
            session('in_admin') === true;
>>>>>>> ca9324a4 (.)
    }
}

/*
 * Return true if current page is home.
 *
 * @return bool
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isHome')) {
=======
if (!function_exists('isHome')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('isHome')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isHome')) {
>>>>>>> ca9324a4 (.)
    function isHome(): bool
    {
        if (URL::current() === url('')) {
            return true;
        }

        return Route::is('home');
    }
}

/*
 * Return true if current page is an admin home page.
 *
 * @return bool
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isAdminHome')) {
=======
if (!function_exists('isAdminHome')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('isAdminHome')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isAdminHome')) {
>>>>>>> ca9324a4 (.)
    function isAdminHome(): bool
    {
        return URL::current() === route('admin.index');
    }
}

/*
 * https://gist.github.com/atorscho/5bcf63d077c11ed0e8ce
 * Return true if current page is an admin page.
 *
 * @return bool
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isAdmin')) {
=======
if (!function_exists('isAdmin')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('isAdmin')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isAdmin')) {
>>>>>>> ca9324a4 (.)
    function isAdmin(): bool
    {
        return Route::is('*admin*');
    }
}

/*
 * Replaces spaces with full text search wildcards
 *
 * @param string $term
 * @return string
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('fullTextWildcards')) {
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> 3fbbf1f5 (.)
    /* protected */
=======
if (! function_exists('asset_theme')) {
    function asset_theme(string $filename): string {
        $theme = Theme::getActive();
        $path = $theme->getPath().'/'.$theme->getName().'/assets/'.$filename;
        $content = File::get($path);

        return $content;
    }
}
*/

/*
if (! function_exists('asset')) {
    function asset(string $path, ?bool $secure = null): string {
        return app('url')->asset($path, $secure);
    }
}
*/

/*
if (! function_exists('safe_defined')) {
    function safe_defined(string $name, string $value): void {
        if (! defined($name)) {
            define($name, $value);
        }
    }
}

if (! function_exists('safe_defined_int')) {
    function safe_defined_int(string $name, int $value): void {
        if (! defined($name)) {
            define($name, $value);
        }
    }
}
*/

/*
if (! function_exists('is_connected')) {
    function is_connected(): bool {
        $connected = @fsockopen('www.google.com', 80);
        if ($connected) {
            $is_conn = true; // action when connected
            fclose($connected);
        } else {
            $is_conn = false; // action in connection failure
        }

        return $is_conn;
    }
}
*/

if (! function_exists('debug_methods')) {
    function debug_methods($obj): void
    {
        $methods = [];
        if (is_object($obj)) {
            $methods = get_class_methods(get_class($obj));
        }
        foreach ($methods as $method) {
            echo '<br/>'.PHP_EOL.$method;
        }
    }
}

if (! function_exists('getFilename')) {
    function getFilename(string $name): string
    {
        return FixPathAction::execute($name);
    }
}

if (! function_exists('req_uri')) {
    function req_uri(): string
    {
        $req_uri = '';
        if (isset($_SERVER['REQUEST_URI'])) {
            $req_uri = $_SERVER['REQUEST_URI'];
        }

        return $req_uri;
    }
}

if (! function_exists('in_admin')) {
    function in_admin(): bool
    {
        return inAdmin();
    }
}

if (! function_exists('inAdmin')) {
    function inAdmin(): bool
    {
        $uri = Request::path();
        $admin_prefix = XotData::make()->getAdminPrefixByFilament();

        return Str::startsWith($uri, $admin_prefix);
    }
}

// ---- Home Route Name --- Da mettere nel tema ?
if (! function_exists('isHome')) {
    function isHome(): bool
    {
        $route_name = Route::currentRouteName();
        if (null == $route_name) {
            return false;
        }
        if (! is_string($route_name)) {
            return false;
        }
        $home_routes = [
            'home',
            'pub.index',
            'profile.index',
        ];

        return in_array($route_name, $home_routes, true);
    }
}

if (! function_exists('isAdminHome')) {
    function isAdminHome(): bool
    {
        $route_name = Route::currentRouteName();
        if (null == $route_name) {
            return false;
        }
        if (! is_string($route_name)) {
            return false;
        }
        $admin_home_routes = [
            'adm.index',
            'filament.admin.pages.dashboard',
        ];

        return in_array($route_name, $admin_home_routes, true);
    }
}

if (! function_exists('isAdmin')) {
    function isAdmin(): bool
    {
        return inAdmin();
    }
}

=======
>>>>>>> ca9324a4 (.)
if (! function_exists('fullTextWildcards')) {
    /* protected */
    function fullTextWildcards(string $term): string
    {
        // removing symbols used by MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);

        $words = explode(' ', $term);

        foreach ($words as $key => $word) {
            /*
             * applying + operator (required word) only big words
             * because smaller ones are not indexed by mysql
             */
            if (mb_strlen($word) >= 3) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $words[$key] = '+'.$word.'*';
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> 5a14301c (.)
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> 3fbbf1f5 (.)
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> ca9324a4 (.)
            }
        }

        return implode(' ', $words);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isContainer')) {
=======
if (!function_exists('isContainer')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('isContainer')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isContainer')) {
>>>>>>> ca9324a4 (.)
    function isContainer(): bool
    {
        [$containers, $items] = params2ContainerItem();

        return count($containers) > count($items);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isItem')) {
=======
if (!function_exists('isItem')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('isItem')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isItem')) {
>>>>>>> ca9324a4 (.)
    function isItem(): bool
    {
        [$containers, $items] = params2ContainerItem();

        return count($containers) === count($items);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('params2ContainerItem')) {
    /**
     * @return array<array>
     */
    function params2ContainerItem(?array $params = null): array
    {
        if ($params === null) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('params2ContainerItem')) {
=======
if (! function_exists('params2ContainerItem')) {
>>>>>>> ca9324a4 (.)
    /**
     * @return array<array>
     */
    function params2ContainerItem(?array $params = null): array
    {
<<<<<<< HEAD
        if (null === $params) {
>>>>>>> 5a14301c (.)
=======
        if ($params === null) {
>>>>>>> ca9324a4 (.)
            // Call to static method current() on an unknown class Route.
            // $params = optional(\Route::current())->parameters();
            // Cannot call method parameters() on mixed.
            // $params = optional(Route::current())->parameters();
            $params = [];
            $route_current = Route::current();
            if ($route_current instanceof Illuminate\Routing\Route) {
                $params = $route_current->parameters();
            }
        }

        $container = [];
        $item = [];
        foreach ($params as $k => $v) {
            $pattern = '/(container|item)(\d+)/';
            preg_match($pattern, $k, $matches);

            if (
<<<<<<< HEAD
<<<<<<< HEAD
                ! empty($matches) &&
=======
                !empty($matches) &&
>>>>>>> 5a14301c (.)
=======
                ! empty($matches) &&
>>>>>>> ca9324a4 (.)
                    isset($matches[1], $matches[2]) &&
                    is_string($matches[1]) &&
                    is_string($matches[2])
            ) {
                $sk = $matches[1];
                $sv = $matches[2];
                // @phpstan-ignore offsetAccess.nonOffsetAccessible
                ${$sk}[$sv] = $v;
            }
        }

        return [$container, $item];
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModelFields')) {
=======
if (!function_exists('getModelFields')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getModelFields')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> ca9324a4 (.)
    function getModelFields(Model $model): array
    {
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.'.$name);
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.' . $name);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.'.$name);
>>>>>>> ca9324a4 (.)
        if (is_string($registered) && class_exists($registered)) {
            Assert::isInstanceOf($res = app($registered), Model::class);

            return $res;
        }

        // getFirst..
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $files_path = base_path('Modules').'/*/Models/*.php';
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> 5a14301c (.)
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> 3fbbf1f5 (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> ca9324a4 (.)
        Assert::isArray($files = glob($files_path));
        // if (false === $files) {
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        // }

        $path = Arr::first($files, function ($file) use ($name): bool {
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 5a14301c (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> ca9324a4 (.)
            $info = pathinfo($file);

            // Accedi direttamente a 'filename', che esiste sempre in pathinfo
            $filename = $info['filename'] ?? '';

            return Str::snake($filename) === $name;
        });

<<<<<<< HEAD
<<<<<<< HEAD
        if ($path === null) {
            throw new Exception('['.$name.'] not in morph_map ['.__LINE__.']['.__FILE__.']');
        }
        Assert::string($path, __FILE__.':'.__LINE__.' - Helper');

        $path = app(FixPathAction::class)->execute($path);
        $info = pathinfo($path);
        $module_name = Str::between($path, 'Modules'.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR.'Models');

        $class = 'Modules\\'.$module_name.'\Models\\'.$info['filename'];
=======
        if (null === $path) {
            throw new Exception('[' . $name . '] not in morph_map [' . __LINE__ . '][' . __FILE__ . ']');
=======
        if ($path === null) {
            throw new Exception('['.$name.'] not in morph_map ['.__LINE__.']['.__FILE__.']');
>>>>>>> ca9324a4 (.)
        }
        Assert::string($path, __FILE__.':'.__LINE__.' - Helper');

        $path = app(FixPathAction::class)->execute($path);
        $info = pathinfo($path);
        $module_name = Str::between($path, 'Modules'.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR.'Models');

<<<<<<< HEAD
        $class = 'Modules\\' . $module_name . '\Models\\' . $info['filename'];
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
        $class = 'Modules\\'.$module_name.'\Models\\'.$info['filename'];
>>>>>>> ca9324a4 (.)

        Assert::isInstanceOf($res = app($class), Model::class);

        return $res;
    }
}

/* moved into xotData
 * if (! function_exists('getUserClass')) {
 * function getUserClass(): string
 * {
 * $class = config('auth.providers.users.model');
 * if (! is_string($class)) {
 * throw new Exception('['.__LINE__.']['.__FILE__.']');
 * }
 *
 * return $class;
 * }
 * }
 */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModuleFromModel')) {
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModuleFromModel')) {
>>>>>>> ca9324a4 (.)
    function getModuleFromModel(object $model): Nwidart\Modules\Module
    {
        $class = $model::class;
        $module_name = Str::before(Str::after($class, 'Modules\\'), '\\Models\\');

        // call to an undefined static method  Nwidart\Modules\Facades\Module::find().
        // $mod = Module::find($module_name);
        // Call to an undefined static method Nwidart\Modules\Facades\Module::get().
        // $mod = Module::get($module_name);
        // Static call to instance method Nwidart\Modules\Module::get()
        // $mod = \Nwidart\Modules\Module::get($module_name);
        // 480    Call to an undefined method Nwidart\Modules\Facades\Module::get()
        // $mod = app('module')->get($module_name);

        // @phpstan-ignore method.nonObject
        Assert::isInstanceOf($res = app('module')->find($module_name), Nwidart\Modules\Module::class);

        return $res;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModuleNameFromModel')) {
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> ca9324a4 (.)
    function getModuleNameFromModel(object $model): string
    {
        $class = $model::class;

        return Str::before(Str::after($class, 'Modules\\'), '\\Models\\');
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $model_class = config('morph_map.'.$model_name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $model_class = config('morph_map.' . $model_name);
        if (!is_string($model_class)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $model_class = config('morph_map.'.$model_name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> ca9324a4 (.)
        }

        Assert::isInstanceOf($model = app($model_class), Model::class);

        return getModuleNameFromModel($model);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getTransformerFromModel')) {
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> ca9324a4 (.)
    function getTransformerFromModel(object $model, string $type = 'Resource'): mixed
    {
        $class = $model::class;
        $module_name = getModuleNameFromModel($model);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> 5a14301c (.)
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> 3fbbf1f5 (.)
=======
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
>>>>>>> ca9324a4 (.)
            dddx('preso');
        }

        return $transformer;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getAllModules')) {
=======
if (!function_exists('getAllModules')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getAllModules')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getAllModules')) {
>>>>>>> ca9324a4 (.)
    function getAllModules(): array
    {
        return Module::all();
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getAllModulesModels')) {
    /**
     * Get all models from all enabled modules.
     *
     * @return array<string, string>
     *
     * @throws ReflectionException
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('getAllModulesModels')) {
=======
if (! function_exists('getAllModulesModels')) {
>>>>>>> ca9324a4 (.)
    /**
     * Get all models from all enabled modules.
     *
     *
     * @return array<string, string>
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
     *
     * @throws ReflectionException
>>>>>>> ca9324a4 (.)
     */
    function getAllModulesModels(): array
    {
        $res = [];

<<<<<<< HEAD
        /** @var array<Nwidart\Modules\Laravel\Module> $modules */
        $modules = Module::all();

        foreach ($modules as $module) {
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
=======
        /** @var Nwidart\Modules\Laravel\Module[] $modules */
        $modules = Module::all();

        foreach ($modules as $module) {
<<<<<<< HEAD
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> ca9324a4 (.)
                continue;
            }

            $moduleName = $module->getName();
            if ($moduleName === '') {
                continue;
            }

            try {
                /** @var array<string, string> $moduleModels */
                $moduleModels = getModuleModels($moduleName);
                $res = array_merge($res, $moduleModels);
            } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
=======
=======
>>>>>>> 3fbbf1f5 (.)
                Log::error('[Module:' .
                $moduleName .
                '] Error getting models: ' .
>>>>>>> 5a14301c (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> ca9324a4 (.)
                $e->getMessage());

                continue;
            }
        }

<<<<<<< HEAD
        /** @var array<string, string> */
=======
        /* @var array<string, string> */
>>>>>>> 5a14301c (.)
        return $res;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModuleModels')) {
=======
if (!function_exists('getModuleModels')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getModuleModels')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModuleModels')) {
>>>>>>> ca9324a4 (.)
    /**
     * @throws ReflectionException
     */
    function getModuleModels(string $module): array
    {
        return ModuleService::make()->setName($module)->getModels();
    }
}

/* --- XOT NON DEVE DIPENDERE DA NESSUNO PANEL E' in CMS questa sara' un helper di cms
 * if (! function_exists('getModuleModelsMenu')) {
 * function getModuleModelsMenu(string $module): Collection {
 * $models = getModuleModels($module);
 * $menu = collect($models)->map(
 * function ($item, $key) {
 * // $obj = new $item();
 * $obj = app($item);
 * $panel = PanelService::make()->get($obj);
 * if ('media' === $key) {// media e' singolare ma anche plurale di medium
 * $panel->setName('medias');
 * }
 * $url = $panel->url('index');
 * return (object) [
 * 'title' => $key,
 * 'url' => $url,
 * 'active' => false,
 * ];
 * }
 * );
 * return $menu;
 * }
 * }
 */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.'.$name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.' . $name);
        if (!is_string($model_class)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.'.$name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> ca9324a4 (.)
        }

        Assert::isInstanceOf($res = app($model_class), Model::class);

        return $res;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('deltaTime')) {
    function deltaTime(): void
    {
        echo '<h3>Time : '.(microtime(true) - LARAVEL_START).'</h3>';
    }
}

if (! function_exists('bracketsToDotted')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('deltaTime')) {
    function deltaTime(): void
    {
        echo '<h3>Time : ' . (microtime(true) - LARAVEL_START) . '</h3>';
    }
}

if (!function_exists('bracketsToDotted')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
    // privacies[111][pivot][title] => privacies.111.pivot.title

    function bracketsToDotted(string $str, string $_quotation_marks = ''): string
=======
            if (strlen($word) >= 3) {
                $words[$key] = '+'.$word.'*';
            }
        }

        $searchTerm = implode(' ', $words);

        return $searchTerm;
    }
}

if (! function_exists('isContainer')) {
    function isContainer(): bool
    {
        return 'show' == Route::current()?->getActionMethod();
    }
}

if (! function_exists('isItem')) {
    function isItem(): bool
    {
        return ! isContainer();
    }
}

if (! function_exists('params2ContainerItem')) {
    function params2ContainerItem(array $params): array
    {
        if (isContainer()) {
            $params['container'] = $params['item'];
            unset($params['item']);
        }

        return $params;
    }
}

/*
if (! function_exists('theme_func')) {
    function theme_func(string $func) {
        return 'theme_func';
    }
}
*/

/*
if (! function_exists('getView')) {
    function getView() {
        return 'getView';
    }
}
*/

/*
if (! function_exists('getViewPath')) {
    function getViewPath() {
        return 'getViewPath';
    }
}
*/

/*
if (! function_exists('getTheme')) {
    function getTheme() {
        return 'getTheme';
    }
}
*/

/*
if (! function_exists('setTheme')) {
    function setTheme() {
        return 'setTheme';
    }
}
*/

if (! function_exists('getModelFields')) {
    function getModelFields(string $class_name): array
    {
        $model = new $class_name();
        $fillable = $model->getFillable();

        return $fillable;
    }
}

if (! function_exists('getModelByName')) {
    function getModelByName(string $module_name, string $model_name): ?Model
    {
        $ns = ModuleService::getModelNamespace($module_name);
        $class = $ns.$model_name;
        if (! class_exists($class)) {
            return null;
        }

        return app($class);
    }
}

/*
 * Get relationships from model
 */
if (! function_exists('getRelationships')) {
    function getRelationships(Model $model): array
    {
        $relationships = [];
        foreach ((new \ReflectionClass($model))->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
            $returnType = $method->getReturnType();
            if (! $method->isStatic()
                && null !== $returnType
                && ! $method->getNumberOfRequiredParameters()
                && $method->class === get_class($model)
            ) {
                $returnTypeName = $returnType->getName();
                if (strpos($returnTypeName, 'Illuminate\Database\Eloquent\Relations') === 0) {
                    $relationships[] = $method->getName();
                }
            }
        }

        return $relationships;
    }
}

/*
 * Retrieve relationship value even if the relationship method does not exist.
 * - FALLBACK_TO_NULL: Returns null if the value cannot be retrieved via the relationship.
 * - FALLBACK_TO_VALUE: Returns the value itself if it cannot be retrieved via the relationship.
 * - THROW_INVALID_RELATIONSHIP: Throws an exception if relationship doesn't exist
 */
define('FALLBACK_TO_NULL', 0);
define('FALLBACK_TO_VALUE', 1);
define('THROW_INVALID_RELATIONSHIP', 2);

if (! function_exists('data_get_nested_relationship')) {
    function data_get_nested_relationship($data, ?string $value, int $fallback = FALLBACK_TO_NULL)
    {
        if (! is_object($data) || null === $value) {
            return match ($fallback) {
                FALLBACK_TO_VALUE => $value,
                FALLBACK_TO_NULL => null,
                THROW_INVALID_RELATIONSHIP => throw new \Exception('Unable to get data from a non-object'),
                default => null,
            };
        }

        if (! str_contains($value, '.')) {
            $relationship = $value;
            $remainingRelationships = null;
        } else {
            $relationships = explode('.', $value);
            $relationship = array_shift($relationships);
            $remainingRelationships = implode('.', $relationships);
        }

        if (! method_exists($data, $relationship)) {
            return match ($fallback) {
                FALLBACK_TO_VALUE => $value,
                FALLBACK_TO_NULL => null,
                THROW_INVALID_RELATIONSHIP => throw new \Exception("Relationship [$relationship] does not exist on [".get_class($data).']'),
                default => null,
            };
        }

        $relationshipValue = $data->{$relationship};

        if (null === $remainingRelationships) {
            return $relationshipValue;
        }

        return data_get_nested_relationship($relationshipValue, $remainingRelationships, $fallback);
    }
}

if (! function_exists('getUserClass')) {
    function getUserClass(): ?string
    {
        $guard = Filament::getCurrentPanel()?->getAuthGuard();
        if (null === $guard) {
            return null;
        }
        $provider = config('auth.guards.'.$guard.'.provider');
        if (null === $provider) {
            return null;
        }

        return config('auth.providers.'.$provider.'.model');
    }
}

if (! function_exists('getModuleFromModel')) {
    function getModuleFromModel(Model $model): string
    {
        $class = get_class($model);
        $class_name = Str::of($class)->after('Modules\\')->before('\\Models\\')->__toString();

        return $class_name;
    }
}

if (! function_exists('getModuleNameFromModel')) {
    function getModuleNameFromModel(Model $model): string
    {
        return getModuleFromModel($model);
    }
}

if (! function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $class_name = Str::of($model_name)->after('Modules\\')->before('\\Models\\')->__toString();

        return $class_name;
    }
}

if (! function_exists('getTransformerFromModel')) {
    function getTransformerFromModel(Model $model): string
    {
        $class = get_class($model);
        $transformer_name = Str::of($class)->after('Models\\')->__toString().'Transformer';
        $transformer_class = Str::of($class)->before('\\Models\\')->append('\\Transformers\\'.$transformer_name)->__toString();

        return $transformer_class;
    }
}

/*
 * Aggiungere anche quelli disabilitati o quelli installati ??
 */
if (! function_exists('getAllModules')) {
    function getAllModules(): array
    {
        return Module::allEnabled();
    }
}

if (! function_exists('getAllModulesModels')) {
    function getAllModulesModels(): array
    {
        $modules = getAllModules();
        $all = [];
        foreach ($modules as $module) {
            $module_name = $module->getName();
            $models = getModuleModels($module_name);
            $all = array_merge($all, $models);
        }

        return $all;
    }
}

/*
 * --.
 *  function getModuleModels
 *  Get models of a module
 *  @param string $module_name name of module
 *  @return array models of module
 */
if (! function_exists('getModuleModels')) {
    function getModuleModels(string $module_name): array
    {
        $ns = ModuleService::getModelNamespace($module_name);
        $path = ModuleService::getModulePath($module_name).'Models';

        if (! File::exists($path)) {
            return [];
        }

        $out = glob($path.'/*.php');
        $out = array_map(
            static function ($item) use ($ns) {
                $class_name = str_replace('.php', '', basename($item));

                return $ns.$class_name;
            },
            $out
        );

        return $out;
    }
}

if (! function_exists('getModuleModelsMenu')) {
    function getModuleModelsMenu(string $module_name): array
    {
        $models = getModuleModels($module_name);
        $out = [];
        foreach ($models as $v) {
            $model = app($v);
            $out[] = [
                'name' => class_basename($v),
                'class' => $v,
                'table' => $model->getTable(),
            ];
        }

        return $out;
    }
}

if (! function_exists('xotModel')) {
    function xotModel(string $model_name): Model
    {
        $model_class = ModuleService::getModelClass('Xot', $model_name);

        return app($model_class);
    }
}

if (! function_exists('deltaTime')) {
    function deltaTime(): float
    {
        return microtime(true) - LARAVEL_START;
=======
if (! function_exists('deltaTime')) {
    function deltaTime(): void
    {
        echo '<h3>Time : '.(microtime(true) - LARAVEL_START).'</h3>';
>>>>>>> ca9324a4 (.)
    }
}

if (! function_exists('bracketsToDotted')) {
    // privacies[111][pivot][title] => privacies.111.pivot.title

    function bracketsToDotted(string $str, string $_quotation_marks = ''): string
    {
        return str_replace(['[', ']'], ['.', ''], $str);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('dottedToBrackets')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('dottedToBrackets')) {
>>>>>>> 5a14301c (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> ca9324a4 (.)
    // privacies.111.pivot.title => privacies[111][pivot][title]
    function dottedToBrackets(string $str, string $_quotation_marks = ''): string
    {
        return collect(explode('.', $str))
<<<<<<< HEAD
<<<<<<< HEAD
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> 5a14301c (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> ca9324a4 (.)
            ->implode('');
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('array_merge_recursive_distinct')) {
=======
if (!function_exists('array_merge_recursive_distinct')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> 3fbbf1f5 (.)
=======
=======
if (! function_exists('dottedToBrackets')) {
    function dottedToBrackets(string $str): string
    {
        $arr = explode('.', $str);
        $first = array_shift($arr);
        if ([] === $arr) {
            return $first;
        }
        $rest = implode('][', $arr);

        return $first.'['.$rest.']';
    }
}

if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> ca9324a4 (.)
    function array_merge_recursive_distinct(array &$array1, array &$array2): array
    {
        $merged = $array1;

        foreach ($array2 as $key => &$value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = array_merge_recursive_distinct($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }

        return $merged;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getRelationships')) {
=======
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('getRelationships')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getRelationships')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> ca9324a4 (.)
    /**
     * @throws ReflectionException
     */
    function getRelationships(Model $model): array
    {
        $methods = get_class_methods($model);
        $data = [];
        // if (! is_array($methods)) {
        //     return $data;
        // }

        foreach ($methods as $method) {
            $reflection = new ReflectionMethod($model, $method);
            $args = $reflection->getParameters();
<<<<<<< HEAD
<<<<<<< HEAD
            if ($args !== []) {
=======
            if ([] !== $args) {
>>>>>>> 5a14301c (.)
=======
            if ($args !== []) {
>>>>>>> ca9324a4 (.)
                continue;
            }

            if ($reflection->class !== $model::class) {
                continue;
            }

            try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
                $return = $reflection->invoke($model);
                $check = $return instanceof Relation;
                /*
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated())->getName();
=======
=======
>>>>>>> 71f31700 (.)
                $modelInstance = is_string($model) ? new $model() : $model;
                $return = $reflection->invoke($modelInstance);
                $check = $return instanceof Relation;
                
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated());
                    $model=$related_model->getName();
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> 492d6d3c (.)
                $return = $reflection->invoke($model);
                $check = $return instanceof Relation;
                /*
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated())->getName();
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
                    $msg = [
                        'name' => $reflection->name,
                        'type' => class_basename($return),
                        // 'check'=>$check,
                        // $msg['type']=(new \ReflectionClass($return))->getShortName();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        'model' => $related_model,
                    ];
                    $data[] = $msg;
                }
                    */
<<<<<<< HEAD
<<<<<<< HEAD
            } catch (Throwable $e) {
                // Gestione generica delle eccezioni che potrebbero verificarsi durante l'analisi delle relazioni
                // Log::debug(['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
=======
=======
=======
>>>>>>> 71f31700 (.)
                        'model' => $model,
                    ];
                    $data[] = $msg;
                }
                
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> 492d6d3c (.)
                        'model' => $related_model,
                    ];
                    $data[] = $msg;
                }
                    */
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
            } catch (ErrorException) {
>>>>>>> 5a14301c (.)
=======
            } catch (Exception|Throwable) {
                // Ignore reflection invocation errors
>>>>>>> 492d6d3c (.)
=======
            } catch (Throwable $e) {
                // Gestione generica delle eccezioni che potrebbero verificarsi durante l'analisi delle relazioni
                // Log::debug(['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
>>>>>>> ca9324a4 (.)
            }
        }

        return $data;
    }
}

/*
 * public function getRelationshipsV2($model){
 * $relationships = [];
 * foreach((new \ReflectionClass($model))->getMethods(\ReflectionMethod::IS_PUBLIC) as $method){
 * if ($method->class != get_class($model) ||
 * !empty($method->getParameters()) ||
 * $method->getName() == __FUNCTION__) {
 * continue;
 * }
 * try {
 * $return = $method->invoke($model);
 * if ($return instanceof \Illuminate\Database\Eloquent\Relations\Relation) {
 * $relationships[$method->getName()] = [
 * 'name' => $method->getName(),
 * 'type' => (new \ReflectionClass($return))->getShortName(),
 * 'model' => (new \ReflectionClass($return->getRelated()))->getName()
 * ];
 * }
 * } catch(ErrorException $e) {}
 * }
 * return $relationships;
 * }
 */

/*
 * https://chasingcode.dev/blog/laravel-global-url-helpers/
 * URL before:
 * https://example.com/orders/123?order=ABC009&status=shipped
 *
 * 1. removeQueryParams(['status'])
 * 2. removeQueryParams(['status', 'order'])
 *
 * URL after:
 * 1. https://example.com/orders/123?order=ABC009
 * 2. https://example.com/orders/123
 */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('removeQueryParams')) {
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> ca9324a4 (.)
    function removeQueryParams(array $params = []): string
    {
        $url = url()->current(); // get the base URL - everything to the left of the "?"
        $query = request()->query(); // get the query parameters (what follows the "?")
        Assert::isArray($query);
        foreach ($params as $param) {
<<<<<<< HEAD
            $key = is_string($param) ? $param : (string) $param;
            unset($query[$key]); // loop through the array of parameters we wish to remove and unset the parameter from the query array
        }

        // 924    Parameter #1 $querydata of function http_build_query expects array|object, array|string given.
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
=======
            unset($query[$param]); // loop through the array of parameters we wish to remove and unset the parameter from the query array
        }

        // 924    Parameter #1 $querydata of function http_build_query expects array|object, array|string given.
<<<<<<< HEAD
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> ca9324a4 (.)
    }
}

/*
 * https://chasingcode.dev/blog/laravel-global-url-helpers/
 * URL before:
 * https://example.com/orders/123?order=ABC009
 *
 * 1. addQueryParams(['status' => 'shipped'])
 * 2. addQueryParams(['status' => 'shipped', 'coupon' => 'CCC2019'])
 *
 * URL after:
 * 1. https://example.com/orders/123?order=ABC009&status=shipped
 * 2. https://example.com/orders/123?order=ABC009&status=shipped&coupon=CCC2019
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('addQueryParams')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('addQueryParams')) {
>>>>>>> 5a14301c (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> ca9324a4 (.)
    function addQueryParams(array $params = []): string
    {
        $query = array_merge((array) request()->query(), $params); // merge the existing query parameters with the ones we want to add

<<<<<<< HEAD
<<<<<<< HEAD
        return url()->current().'?'.http_build_query($query); // rebuild the URL with the new parameters array
    }
}

if (! function_exists('isJson')) {
=======
        return url()->current() . '?' . http_build_query($query); // rebuild the URL with the new parameters array
    }
}

if (!function_exists('isJson')) {
>>>>>>> 5a14301c (.)
=======
        return url()->current().'?'.http_build_query($query); // rebuild the URL with the new parameters array
    }
}

if (! function_exists('isJson')) {
>>>>>>> ca9324a4 (.)
    /*
     * function isJson($string) {
     * json_decode($string);
     * return (json_last_error() == JSON_ERROR_NONE);
     * }
     */
    /*
     * function isJson($string) {
     * return ((is_string($string) &&
     * (is_object(json_decode($string)) ||
     * is_array(json_decode($string))))) ? true : false;
     * }
     */
    function isJson(string $string): bool
    {
        // return is_string($string) && is_array(json_decode($string, true, 512, JSON_THROW_ON_ERROR));
        return is_array(json_decode($string, true, 512, JSON_THROW_ON_ERROR));
    }
}

/*
 * if (! function_exists('getExcerpt')) {
 * function getExcerpt(string $str, int $length = 225): string
 * {
 * $cleaned = strip_tags(
 * (string) preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $str),
 * '<code>'
 * );
 * $truncated = substr($cleaned, 0, $length);
 *
 * if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
 * $truncated .= '</code>';
 * }
 *
 * return strlen($cleaned) > $length
 * ? preg_replace('/\s+?(\S+)?$/', '', $truncated).'...'
 * : $cleaned;
 * }
 * }
 */
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
        if (! ($route instanceof Illuminate\Routing\Route)) {
=======
if (!function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
        if (!($route instanceof Illuminate\Routing\Route)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
if (! function_exists('relationshipsCount')) {
    function relationshipsCount(Model $model): array {
        $relationships = getRelationships($model);
        $counts = [];
        foreach ($relationships as $relationship => $details) {
            try {
                $count = $model->$relationship()->count();
                $counts[$relationship] = $count;
            } catch (\Exception $e) {
                $counts[$relationship] = 'Error: '.$e->getMessage();
            }
        }

        return $counts;
    }
}
*/

if (! function_exists('removeQueryParams')) {
    function removeQueryParams(array $params = []): string
    {
        $url = URL::current();
        $query = Request::query();

        foreach ($params as $param) {
            unset($query[$param]);
        }

        return $url.'?'.http_build_query($query);
    }
}

if (! function_exists('addQueryParams')) {
    function addQueryParams(array $params = []): string
    {
        $url = URL::current();
        $query = Request::query();

        foreach ($params as $key => $value) {
            $query[$key] = $value;
        }

        return $url.'?'.http_build_query($query);
    }
}

if (! function_exists('isJson')) {
    function isJson(string $string): bool
    {
        json_decode($string);

        return JSON_ERROR_NONE == json_last_error();
    }
}

if (! function_exists('getExcerpt')) {
    function getExcerpt(string $text, int $limit = 100): string
    {
        return Str::limit(strip_tags($text), $limit);
    }
}

if (! function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = Request::route();
        if (null === $route) {
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
if (! function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> ca9324a4 (.)
            return [];
        }

        return $route->parameters();
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
=======
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> ca9324a4 (.)
    {
        // getRouteName();
        /**
         * @var Illuminate\Routing\Route|null
         */
        $route = request()->route();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($route instanceof Illuminate\Routing\Route)) {
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 5a14301c (.)
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> ca9324a4 (.)
            return null;
        }

        return $route->getName();
    }
}

/*
 * if (! function_exists('getRouteAction')) {
 * function getRouteAction(): string {
 * }
 * }
 */

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '['.__LINE__.']['.__FILE__.']');
=======
if (!function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '[' . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 5a14301c (.)
=======
if (! function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '['.__LINE__.']['.__FILE__.']');
>>>>>>> ca9324a4 (.)

        $stringable = Str::of($file_path)
            ->after('/Modules/')
            ->before('/')
            ->lower();
        $info = pathinfo($file_path);
        $group = Str::snake($info['filename']);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $stringable.'::'.$group;
=======
        return $stringable . '::' . $group;
>>>>>>> 5a14301c (.)
=======
        return $stringable . '::' . $group;
>>>>>>> 3fbbf1f5 (.)
=======
        return $stringable.'::'.$group;
>>>>>>> ca9324a4 (.)
    }
}

/*
 * function is_iterable($var)
 * {
 * return $var !== null
 * && (is_array($var)
 * || $var instanceof Traversable
 * || $var instanceof Iterator
 * || $var instanceof IteratorAggregate
 * );
 * }
 */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('is_active')) {
=======
if (!function_exists('is_active')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('is_active')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('is_active')) {
>>>>>>> ca9324a4 (.)
    /**
     * Determines if the given routes are active.
     */
    function is_active(array $routes): bool
    {
        return (bool) call_user_func_array([app('router'), 'is'], $routes);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(?string $markdown): ?string
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(null|string $markdown): null|string
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(?string $markdown): ?string
>>>>>>> ca9324a4 (.)
    {
        return $markdown;

        // return app(App\Markdown\Converter::class)->toHtml($markdown);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('replace_links')) {
=======
if (!function_exists('replace_links')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('replace_links')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('replace_links')) {
>>>>>>> ca9324a4 (.)
    /**
     * Convert Standalone Urls to HTML.
     */
    function replace_links(string $markdown): string
    {
        /*
         * return (new LinkFinder([
         * 'attrs' => ['target' => '_blank', 'rel' => 'nofollow'],
         * ]))->processHtml($markdown);
         */
        return $markdown;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('debugStack')) {
=======
if (!function_exists('debugStack')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('debugStack')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('debugStack')) {
>>>>>>> ca9324a4 (.)
    /**
     * Undocumented function.
     */
    function debugStack(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! extension_loaded('xdebug')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
        if (!extension_loaded('xdebug')) {
>>>>>>> 5a14301c (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> ca9324a4 (.)
            throw new RuntimeException('XDebug must be installed to use this function');
        }

        if (
            function_exists('xdebug_set_filter') &&
                defined('XDEBUG_FILTER_TRACING') &&
                defined('XDEBUG_PATH_EXCLUDE')
        ) {
<<<<<<< HEAD
<<<<<<< HEAD
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
                '/../../vendor/',
            ]);
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> ca9324a4 (.)
                '/../../vendor/']);
>>>>>>> 5a14301c (.)
        }

        if (function_exists('xdebug_print_function_stack')) {
            xdebug_print_function_stack();
        } else {
            debug_print_backtrace();
        }
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('secondsToHms')) {
=======
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('secondsToHms')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('secondsToHms')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> ca9324a4 (.)
    function secondsToHms(float $seconds, int $decimal = 0): string
    {
        $hours = floor($seconds / 3600);
        $seconds -= $hours * 3600;
        $minutes = floor($seconds / 60);
        $seconds -= $minutes * 60;
        $str = '';
        if ($hours > 0) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $str .= ($hours < 9 ? '0'.$hours : $hours).':';
        }

        return $str.($minutes < 9 ? '0'.$minutes : $minutes).':'.round($seconds, $decimal);
    }
}

if (! function_exists('rowsToSql')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
            $str .= ($hours < 9 ? ('0' . $hours) : $hours) . ':';
=======
            $str .= ($hours < 9 ? ('0'.$hours) : $hours).':';
>>>>>>> ca9324a4 (.)
        }

        return $str.($minutes < 9 ? ('0'.$minutes) : $minutes).':'.round($seconds, $decimal);
    }
}

<<<<<<< HEAD
if (!function_exists('rowsToSql')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('rowsToSql')) {
>>>>>>> ca9324a4 (.)
    /**
     * Undocumented function.
     */
    function rowsToSql(HasOne|Builder|Illuminate\Database\Eloquent\Builder $rows): string
    {
        // $sql = str_replace('?', $rows->getBindings(), $rows->toSql());
        /**
         * @var array<int|string, string>
         */
        $bindings = $rows->getBindings();
        $sql = $rows->toSql();

        return Str::replaceArray('?', $bindings, $sql);
    }
}
/*
 * if (! function_exists('getServerName')) {
 * function getServerName(): string
 * {
 * $default = config('app.url', 'localhost');
 * if (! is_string($default)) {
 * $default = 'localhost';
 * }
 * $default = Str::after($default, '//');
 *
 * $server_name = $default;
 * if (isset($_SERVER['SERVER_NAME']) && '127.0.0.1' !== $_SERVER['SERVER_NAME']) {
 * $server_name = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'];
 * }
 * if (! is_string($server_name)) {
 * $server_name = $default;
 * }
 * $server_name = Str::of($server_name)->replace('www.', '')->toString();
 *
 * return $server_name;
 * }
 * }
 */
/*
 * if (! function_exists('getLang')) {
 * function getLang(): string {
 * return '/en/'; //per xstream
 * }
 * }
 */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('str_limit')) {
=======
if (!function_exists('str_limit')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('str_limit')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('str_limit')) {
>>>>>>> ca9324a4 (.)
    function str_limit(string $str, int $limit): string
    {
        return Str::limit($str, $limit); // per xstream
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('inArrayBetween')) {
    function inArrayBetween(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('inArrayBetween')) {
    function inArrayBetween(
        int $curr,
        array $data,
        null|string $field_start = 'start',
        null|string $field_end = 'end',
>>>>>>> 5a14301c (.)
=======
if (! function_exists('inArrayBetween')) {
    function inArrayBetween(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
>>>>>>> ca9324a4 (.)
    ): bool {
        foreach ($data as $v) {
            Assert::isArray($v);
            if ($curr < $v[$field_start]) {
                continue;
            }

            if ($curr > $v[$field_end]) {
                continue;
            }

            return true;
        }

        return false;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        null|string $field_start = 'start',
        null|string $field_end = 'end',
>>>>>>> 5a14301c (.)
=======
if (! function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
>>>>>>> ca9324a4 (.)
    ): int|bool {
        foreach ($data as $k => $v) {
            Assert::isArray($v);
            if ($curr < $v[$field_start]) {
                continue;
            }

            if ($curr > $v[$field_end]) {
                continue;
            }

            return $k;
        }

        return false;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('is_base64')) {
=======
if (!function_exists('is_base64')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('is_base64')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('is_base64')) {
>>>>>>> ca9324a4 (.)
    function is_base64(string $s): bool
    {
        return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('recursive_unset')) {
=======
if (!function_exists('recursive_unset')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('recursive_unset')) {
>>>>>>> 3fbbf1f5 (.)
    function recursive_unset(array &$array, string $unwanted_key): void
=======
if (! function_exists('secondsToHms')) {
    function secondsToHms(int $seconds): string
    {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $seconds = $seconds % 60;

        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }
}

if (! function_exists('rowsToSql')) {
    function rowsToSql(Builder $query): string
    {
        $sql = $query->toSql();
        $bindings = $query->getBindings();

        foreach ($bindings as $binding) {
            if (is_string($binding)) {
                $binding = "'".$binding."'";
            } elseif (is_bool($binding)) {
                $binding = $binding ? 1 : 0;
            } elseif (null === $binding) {
                $binding = 'NULL';
            }

            $sql = preg_replace('/\?/', (string) $binding, $sql, 1);
        }

        return $sql;
    }
}

if (! function_exists('getServerName')) {
    function getServerName(): string
    {
        return $_SERVER['SERVER_NAME'] ?? 'localhost';
    }
}

if (! function_exists('str_limit')) {
    function str_limit(string $value, int $limit = 100, string $end = '...'): string
    {
        return Str::limit($value, $limit, $end);
    }
}

if (! function_exists('getLang')) {
    function getLang(): string
    {
        return app()->getLocale();
    }
}

if (! function_exists('inArrayBetween')) {
    function inArrayBetween(array $array, $start, $end): array
    {
        $result = [];
        $capture = false;

        foreach ($array as $item) {
            if ($item === $start) {
                $capture = true;
            }

            if ($capture) {
                $result[] = $item;
            }

            if ($item === $end) {
                break;
            }
        }

        return $result;
    }
}

if (! function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(array $array, $startKey, $endKey): array
    {
        $result = [];
        $capture = false;

        foreach ($array as $key => $value) {
            if ($key === $startKey) {
                $capture = true;
            }

            if ($capture) {
                $result[$key] = $value;
            }

            if ($key === $endKey) {
                break;
            }
        }

        return $result;
    }
}

if (! function_exists('is_base64')) {
    function is_base64(string $string): bool
    {
        return base64_encode(base64_decode($string, true)) === $string;
    }
}

=======
>>>>>>> ca9324a4 (.)
if (! function_exists('recursive_unset')) {
    function recursive_unset(array &$array, string $unwanted_key): void
    {
        unset($array[$unwanted_key]);
        foreach ($array as &$value) {
            if (is_array($value)) {
                recursive_unset($value, $unwanted_key);
            }
        }
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('profile')) {
=======
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('profile')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('profile')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('profile')) {
>>>>>>> ca9324a4 (.)
    function profile(): Model|ProfileContract
    {
        $xotData = XotData::make();

        return $xotData->getProfileModel();
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('cssInLine')) {
=======
if (!function_exists('cssInLine')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('cssInLine')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('cssInLine')) {
>>>>>>> ca9324a4 (.)
    function cssInLine(string $file): string
    {
        return File::get(app(AssetPathAction::class)->execute($file));
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): ?string
=======
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): null|string
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): ?string
>>>>>>> ca9324a4 (.)
    {
        try {
            $filamentAuth = Filament::auth();
            $id = null;

            if ($filamentAuth && method_exists($filamentAuth, 'id')) {
                $id = $filamentAuth->id();
            }

            if ($id === null && auth()->check()) {
                $id = auth()->id();
            }

            return $id === null ? null : (is_string($id) ? $id : ((string) $id));
        } catch (Exception|Error $e) {
            return null;
        }
    }
}
/**
 * Esegue un controllo sicuro su un oggetto e chiama un metodo se l'oggetto esiste
 *
 * @template T
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
 *
 * @param  T|null  $object  L'oggetto da controllare
 * @param  string  $method  Il nome del metodo da chiamare
 * @param  mixed  ...$args  Gli argomenti da passare al metodo
<<<<<<< HEAD
 */
function safe_object_call($object, string $method, mixed ...$args): mixed
{
    if (! is_object($object)) {
        return null;
    }

    if (! method_exists($object, $method)) {
=======
 * @param T|null $object L'oggetto da controllare
 * @param string $method Il nome del metodo da chiamare
 * @param mixed ...$args Gli argomenti da passare al metodo
=======
>>>>>>> ca9324a4 (.)
 * @return mixed|null
 */
function safe_object_call($object, string $method, ...$args)
{
<<<<<<< HEAD
    if (!is_object($object)) {
        return null;
    }

    if (!method_exists($object, $method)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
if (! function_exists('profile')) {
    function profile(): ?ProfileContract
    {
        return app(ProfileContract::class);
    }
}

if (! function_exists('cssInLine')) {
    function cssInLine(string $css): string
    {
        return preg_replace('/\s+/', ' ', $css);
    }
}

if (! function_exists('authId')) {
    function authId(): mixed
    {
        return auth()->id();
    }
}

/**
 * Safely call a method on an object if it exists.
 * Returns null if the object is not an object or if the method doesn't exist.
 */
function safe_object_call($object, string $method, ...$args)
{
=======
>>>>>>> ca9324a4 (.)
    if (! is_object($object)) {
        return null;
    }

    if (! method_exists($object, $method)) {
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        return null;
    }

    return $object->$method(...$args);
}
