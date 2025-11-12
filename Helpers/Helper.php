<?php

declare(strict_types=1);

use Modules\Xot\Actions\File\FixPathAction;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\File\AssetPathAction;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Services\ModuleService;
use Nwidart\Modules\Facades\Module;
use Webmozart\Assert\Assert;

use function Safe\define;
use function Safe\glob;
use function Safe\json_decode;
use function Safe\preg_match;
use function Safe\realpath;

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
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isRunningTestBench')) {
>>>>>>> a5dccfe (.)
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
        $res = Str::endsWith($base, $path);

        return $res;

        // return false;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('snake_case')) {
=======
if (!function_exists('snake_case')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('snake_case')) {
>>>>>>> a5dccfe (.)
    function snake_case(string $str): string
    {
        return Str::snake($str);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('str_slug')) {
=======
if (!function_exists('str_slug')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('str_slug')) {
>>>>>>> a5dccfe (.)
    function str_slug(string $str): string
    {
        return Str::slug($str);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('str_singular')) {
=======
if (!function_exists('str_singular')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('str_singular')) {
>>>>>>> a5dccfe (.)
    function str_singular(string $str): string
    {
        return Str::singular($str);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('starts_with')) {
=======
if (!function_exists('starts_with')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('starts_with')) {
>>>>>>> a5dccfe (.)
    function starts_with(string $str, string $str1): bool
    {
        return Str::startsWith($str, $str1);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('ends_with')) {
=======
if (!function_exists('ends_with')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('ends_with')) {
>>>>>>> a5dccfe (.)
    function ends_with(string $str, string $str1): bool
    {
        return Str::endsWith($str, $str1);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('str_contains')) {
=======
if (!function_exists('str_contains')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('str_contains')) {
>>>>>>> a5dccfe (.)
    function str_contains(string $str, string $str1): bool
    {
        return Str::contains($str, $str1);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('hex2rgba')) {
=======
if (!function_exists('hex2rgba')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('hex2rgba')) {
>>>>>>> a5dccfe (.)
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
        if ($color[0] === '#') {
=======
        if ('#' === $color[0]) {
>>>>>>> 0e51323 (.)
=======
        if ('#' === $color[0]) {
>>>>>>> a5dccfe (.)
            $color = mb_substr($color, 1);
        }

        // Check if color has 6 or 3 characters and get values
<<<<<<< HEAD
<<<<<<< HEAD
        if (mb_strlen($color) === 6) {
            $hex = [$color[0].$color[1], $color[2].$color[3], $color[4].$color[5]];
        } elseif (mb_strlen($color) === 3) {
            $hex = [$color[0].$color[0], $color[1].$color[1], $color[2].$color[2]];
=======
=======
>>>>>>> a5dccfe (.)
        if (6 === mb_strlen($color)) {
            $hex = [$color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]];
        } elseif (3 === mb_strlen($color)) {
            $hex = [$color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]];
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
        } else {
            return $default;
        }

        // Convert hexadec to rgb
        $rgb = array_map('hexdec', $hex);

        // Check if opacity is set(rgba or rgb)
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
>>>>>>> a5dccfe (.)
        if (-1.0 !== $opacity) {
            if ($opacity < 0 || $opacity > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba(' . implode(',', $rgb) . ',' . $opacity . ')';
        } else {
            $output = 'rgb(' . implode(',', $rgb) . ')';
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
        }

        // Return rgb(a) color string
        return $output;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('dddx')) {
=======
if (!function_exists('dddx')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('dddx')) {
>>>>>>> a5dccfe (.)
    function dddx(mixed $params): string
    {
        $tmp = debug_backtrace();
        $file = $tmp[0]['file'] ?? 'file-unknown';
        $file = str_replace('/', DIRECTORY_SEPARATOR, $file);

<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 0e51323 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> a5dccfe (.)
        $doc_root = str_replace('/', DIRECTORY_SEPARATOR, $doc_root);

        $dir_piece = explode(DIRECTORY_SEPARATOR, __DIR__);
        $dir_piece = array_slice($dir_piece, 0, -6);

        $dir_copy = implode(DIRECTORY_SEPARATOR, $dir_piece);
        $file = str_replace($dir_copy, $doc_root, $file);

<<<<<<< HEAD
<<<<<<< HEAD
        if (! defined('LARAVEL_START')) {
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> 0e51323 (.)
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> a5dccfe (.)
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
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> 0e51323 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> a5dccfe (.)
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
if (! function_exists('getFilename')) {
=======
if (!function_exists('getFilename')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getFilename')) {
>>>>>>> a5dccfe (.)
    function getFilename(array $params): string
    {
        $tmp = debug_backtrace();
        $class = class_basename($tmp[1]['class'] ?? 'class-unknown');

        $func = $tmp[1]['function'];
        $params_list = collect($params)->except(['_token', '_method'])->implode('_');

        return Str::slug(
<<<<<<< HEAD
<<<<<<< HEAD
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> 0e51323 (.)
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> a5dccfe (.)
        );
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('req_uri')) {
=======
if (!function_exists('req_uri')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('req_uri')) {
>>>>>>> a5dccfe (.)
    function req_uri(): mixed
    {
        return $_SERVER['REQUEST_URI'] ?? '';
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('in_admin')) {
=======
if (!function_exists('in_admin')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('in_admin')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('inAdmin')) {
=======
if (!function_exists('inAdmin')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('inAdmin')) {
>>>>>>> a5dccfe (.)
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
        if (Request::segment(2) === 'admin') {
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> 0e51323 (.)
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> a5dccfe (.)
            return true;
        }

        $segments = Request::segments();

<<<<<<< HEAD
<<<<<<< HEAD
        return
            (is_countable($segments) ? count($segments) : 0) > 0 &&
            $segments[0] === 'livewire' &&
            session('in_admin') === true;
=======
=======
>>>>>>> a5dccfe (.)
        return (
            (is_countable($segments) ? count($segments) : 0) > 0 &&
            'livewire' === $segments[0] &&
            true === session('in_admin')
        );
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
    }
}

/*
 * Return true if current page is home.
 *
 * @return bool
 */
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isHome')) {
=======
if (!function_exists('isHome')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isHome')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('isAdminHome')) {
=======
if (!function_exists('isAdminHome')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isAdminHome')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('isAdmin')) {
=======
if (!function_exists('isAdmin')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isAdmin')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('fullTextWildcards')) {
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> a5dccfe (.)
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
                $words[$key] = '+'.$word.'*';
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> 0e51323 (.)
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> a5dccfe (.)
            }
        }

        return implode(' ', $words);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isContainer')) {
=======
if (!function_exists('isContainer')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isContainer')) {
>>>>>>> a5dccfe (.)
    function isContainer(): bool
    {
        [$containers, $items] = params2ContainerItem();

        return count($containers) > count($items);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isItem')) {
=======
if (!function_exists('isItem')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isItem')) {
>>>>>>> a5dccfe (.)
    function isItem(): bool
    {
        [$containers, $items] = params2ContainerItem();

        return count($containers) === count($items);
    }
}

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
>>>>>>> a5dccfe (.)
if (!function_exists('params2ContainerItem')) {
    /**
     * @return array<array>
     */
    function params2ContainerItem(null|array $params = null): array
    {
        if (null === $params) {
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
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
>>>>>>> 0e51323 (.)
=======
                !empty($matches) &&
>>>>>>> a5dccfe (.)
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
if (! function_exists('getModelFields')) {
=======
if (!function_exists('getModelFields')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getModelFields')) {
>>>>>>> a5dccfe (.)
    function getModelFields(Model $model): array
    {
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.'.$name);
=======
=======
>>>>>>> a5dccfe (.)
if (!function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.' . $name);
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
        if (is_string($registered) && class_exists($registered)) {
            Assert::isInstanceOf($res = app($registered), Model::class);

            return $res;
        }

        // getFirst..
<<<<<<< HEAD
<<<<<<< HEAD
        $files_path = base_path('Modules').'/*/Models/*.php';
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> 0e51323 (.)
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> a5dccfe (.)
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
>>>>>>> 0e51323 (.)
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> a5dccfe (.)
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
=======
>>>>>>> a5dccfe (.)
        if (null === $path) {
            throw new Exception('[' . $name . '] not in morph_map [' . __LINE__ . '][' . __FILE__ . ']');
        }
        Assert::string($path, __FILE__ . ':' . __LINE__ . ' - Helper');

        $path = app(FixPathAction::class)->execute($path);
        $info = pathinfo($path);
        $module_name = Str::between($path, 'Modules' . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR . 'Models');

        $class = 'Modules\\' . $module_name . '\Models\\' . $info['filename'];
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)

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
if (! function_exists('getModuleFromModel')) {
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('getModuleNameFromModel')) {
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> a5dccfe (.)
    function getModuleNameFromModel(object $model): string
    {
        $class = $model::class;

        return Str::before(Str::after($class, 'Modules\\'), '\\Models\\');
    }
}

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
>>>>>>> a5dccfe (.)
if (!function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $model_class = config('morph_map.' . $model_name);
        if (!is_string($model_class)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
        }

        Assert::isInstanceOf($model = app($model_class), Model::class);

        return getModuleNameFromModel($model);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getTransformerFromModel')) {
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> a5dccfe (.)
    function getTransformerFromModel(object $model, string $type = 'Resource'): mixed
    {
        $class = $model::class;
        $module_name = getModuleNameFromModel($model);
<<<<<<< HEAD
<<<<<<< HEAD
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> 0e51323 (.)
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> a5dccfe (.)
            dddx('preso');
        }

        return $transformer;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getAllModules')) {
=======
if (!function_exists('getAllModules')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getAllModules')) {
>>>>>>> a5dccfe (.)
    function getAllModules(): array
    {
        return Module::all();
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getAllModulesModels')) {
    /**
     * Get all models from all enabled modules.
     *
     *
     * @return array<string, string>
     *
     * @throws ReflectionException
=======
=======
>>>>>>> a5dccfe (.)
if (!function_exists('getAllModulesModels')) {
    /**
     * Get all models from all enabled modules.
     *
     * @throws ReflectionException
     *
     * @return array<string, string>
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
     */
    function getAllModulesModels(): array
    {
        $res = [];

        /** @var Nwidart\Modules\Laravel\Module[] $modules */
        $modules = Module::all();

        foreach ($modules as $module) {
<<<<<<< HEAD
<<<<<<< HEAD
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> 0e51323 (.)
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> a5dccfe (.)
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
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
=======
                Log::error('[Module:' .
                $moduleName .
                '] Error getting models: ' .
>>>>>>> 0e51323 (.)
=======
                Log::error('[Module:' .
                $moduleName .
                '] Error getting models: ' .
>>>>>>> a5dccfe (.)
                $e->getMessage());

                continue;
            }
        }

        /* @var array<string, string> */
        return $res;
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModuleModels')) {
=======
if (!function_exists('getModuleModels')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getModuleModels')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.'.$name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
=======
=======
>>>>>>> a5dccfe (.)
if (!function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.' . $name);
        if (!is_string($model_class)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
        }

        Assert::isInstanceOf($res = app($model_class), Model::class);

        return $res;
    }
}

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
>>>>>>> a5dccfe (.)
if (!function_exists('deltaTime')) {
    function deltaTime(): void
    {
        echo '<h3>Time : ' . (microtime(true) - LARAVEL_START) . '</h3>';
    }
}

if (!function_exists('bracketsToDotted')) {
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
    // privacies[111][pivot][title] => privacies.111.pivot.title

    function bracketsToDotted(string $str, string $_quotation_marks = ''): string
    {
        return str_replace(['[', ']'], ['.', ''], $str);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('dottedToBrackets')) {
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> a5dccfe (.)
    // privacies.111.pivot.title => privacies[111][pivot][title]
    function dottedToBrackets(string $str, string $_quotation_marks = ''): string
    {
        return collect(explode('.', $str))
<<<<<<< HEAD
<<<<<<< HEAD
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> 0e51323 (.)
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> a5dccfe (.)
            ->implode('');
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('array_merge_recursive_distinct')) {
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('getRelationships')) {
=======
if (!function_exists('getRelationships')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getRelationships')) {
>>>>>>> a5dccfe (.)
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
>>>>>>> 0e51323 (.)
=======
            if ([] !== $args) {
>>>>>>> a5dccfe (.)
                continue;
            }

            if ($reflection->class !== $model::class) {
                continue;
            }

            try {
<<<<<<< HEAD
                $return = $reflection->invoke($model);
                $check = $return instanceof Relation;
                /*
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated())->getName();
=======
                $modelInstance = is_string($model) ? new $model() : $model;
                $return = $reflection->invoke($modelInstance);
                $check = $return instanceof Relation;
                
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated());
                    $model=$related_model->getName();
>>>>>>> a5dccfe (.)
                    $msg = [
                        'name' => $reflection->name,
                        'type' => class_basename($return),
                        // 'check'=>$check,
                        // $msg['type']=(new \ReflectionClass($return))->getShortName();
<<<<<<< HEAD
                        'model' => $related_model,
                    ];
                    $data[] = $msg;
                }
                    */
<<<<<<< HEAD
            } catch (Throwable $e) {
                // Gestione generica delle eccezioni che potrebbero verificarsi durante l'analisi delle relazioni
                // Log::debug(['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
=======
            } catch (ErrorException) {
>>>>>>> 0e51323 (.)
=======
                        'model' => $model,
                    ];
                    $data[] = $msg;
                }
                
            } catch (ErrorException) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('removeQueryParams')) {
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> a5dccfe (.)
    function removeQueryParams(array $params = []): string
    {
        $url = url()->current(); // get the base URL - everything to the left of the "?"
        $query = request()->query(); // get the query parameters (what follows the "?")
        Assert::isArray($query);
        foreach ($params as $param) {
            unset($query[$param]); // loop through the array of parameters we wish to remove and unset the parameter from the query array
        }

        // 924    Parameter #1 $querydata of function http_build_query expects array|object, array|string given.
<<<<<<< HEAD
<<<<<<< HEAD
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> 0e51323 (.)
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> a5dccfe (.)
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
if (! function_exists('addQueryParams')) {
=======
if (!function_exists('addQueryParams')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('addQueryParams')) {
>>>>>>> a5dccfe (.)
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
=======
>>>>>>> a5dccfe (.)
        return url()->current() . '?' . http_build_query($query); // rebuild the URL with the new parameters array
    }
}

if (!function_exists('isJson')) {
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
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
=======
>>>>>>> a5dccfe (.)
if (!function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
        if (!($route instanceof Illuminate\Routing\Route)) {
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
            return [];
        }

        return $route->parameters();
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> a5dccfe (.)
    {
        // getRouteName();
        /**
         * @var Illuminate\Routing\Route|null
         */
        $route = request()->route();
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($route instanceof Illuminate\Routing\Route)) {
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 0e51323 (.)
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> a5dccfe (.)
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
=======
>>>>>>> a5dccfe (.)
if (!function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '[' . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)

        $stringable = Str::of($file_path)
            ->after('/Modules/')
            ->before('/')
            ->lower();
        $info = pathinfo($file_path);
        $group = Str::snake($info['filename']);

<<<<<<< HEAD
<<<<<<< HEAD
        return $stringable.'::'.$group;
=======
        return $stringable . '::' . $group;
>>>>>>> 0e51323 (.)
=======
        return $stringable . '::' . $group;
>>>>>>> a5dccfe (.)
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
if (! function_exists('is_active')) {
=======
if (!function_exists('is_active')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('is_active')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(?string $markdown): ?string
=======
=======
>>>>>>> a5dccfe (.)
if (!function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(null|string $markdown): null|string
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
    {
        return $markdown;

        // return app(App\Markdown\Converter::class)->toHtml($markdown);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('replace_links')) {
=======
if (!function_exists('replace_links')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('replace_links')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('debugStack')) {
=======
if (!function_exists('debugStack')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('debugStack')) {
>>>>>>> a5dccfe (.)
    /**
     * Undocumented function.
     */
    function debugStack(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! extension_loaded('xdebug')) {
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 0e51323 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> a5dccfe (.)
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
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
>>>>>>> 0e51323 (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
>>>>>>> a5dccfe (.)
                '/../../vendor/']);
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
if (! function_exists('secondsToHms')) {
=======
if (!function_exists('secondsToHms')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('secondsToHms')) {
>>>>>>> a5dccfe (.)
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
            $str .= ($hours < 9 ? ('0'.$hours) : $hours).':';
        }

        return $str.($minutes < 9 ? ('0'.$minutes) : $minutes).':'.round($seconds, $decimal);
    }
}

if (! function_exists('rowsToSql')) {
=======
=======
>>>>>>> a5dccfe (.)
            $str .= ($hours < 9 ? ('0' . $hours) : $hours) . ':';
        }

        return $str . ($minutes < 9 ? ('0' . $minutes) : $minutes) . ':' . round($seconds, $decimal);
    }
}

if (!function_exists('rowsToSql')) {
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
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
if (! function_exists('str_limit')) {
=======
if (!function_exists('str_limit')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('str_limit')) {
>>>>>>> a5dccfe (.)
    function str_limit(string $str, int $limit): string
    {
        return Str::limit($str, $limit); // per xstream
    }
}

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
>>>>>>> a5dccfe (.)
if (!function_exists('inArrayBetween')) {
    function inArrayBetween(
        int $curr,
        array $data,
        null|string $field_start = 'start',
        null|string $field_end = 'end',
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
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
if (! function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
=======
=======
>>>>>>> a5dccfe (.)
if (!function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        null|string $field_start = 'start',
        null|string $field_end = 'end',
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
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
if (! function_exists('is_base64')) {
=======
if (!function_exists('is_base64')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('is_base64')) {
>>>>>>> a5dccfe (.)
    function is_base64(string $s): bool
    {
        return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('recursive_unset')) {
=======
if (!function_exists('recursive_unset')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('recursive_unset')) {
>>>>>>> a5dccfe (.)
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
if (! function_exists('profile')) {
=======
if (!function_exists('profile')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('profile')) {
>>>>>>> a5dccfe (.)
    function profile(): Model|ProfileContract
    {
        $xotData = XotData::make();

        return $xotData->getProfileModel();
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('cssInLine')) {
=======
if (!function_exists('cssInLine')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('cssInLine')) {
>>>>>>> a5dccfe (.)
    function cssInLine(string $file): string
    {
        return File::get(app(AssetPathAction::class)->execute($file));
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): ?string
=======
=======
>>>>>>> a5dccfe (.)
if (!function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): null|string
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
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
 *
 * @param  T|null  $object  L'oggetto da controllare
 * @param  string  $method  Il nome del metodo da chiamare
 * @param  mixed  ...$args  Gli argomenti da passare al metodo
=======
 * @param T|null $object L'oggetto da controllare
 * @param string $method Il nome del metodo da chiamare
 * @param mixed ...$args Gli argomenti da passare al metodo
>>>>>>> 0e51323 (.)
=======
 * @param T|null $object L'oggetto da controllare
 * @param string $method Il nome del metodo da chiamare
 * @param mixed ...$args Gli argomenti da passare al metodo
>>>>>>> a5dccfe (.)
 * @return mixed|null
 */
function safe_object_call($object, string $method, ...$args)
{
<<<<<<< HEAD
<<<<<<< HEAD
    if (! is_object($object)) {
        return null;
    }

    if (! method_exists($object, $method)) {
=======
=======
>>>>>>> a5dccfe (.)
    if (!is_object($object)) {
        return null;
    }

    if (!method_exists($object, $method)) {
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
        return null;
    }

    return $object->$method(...$args);
}
