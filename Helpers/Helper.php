<?php

declare(strict_types=1);

<<<<<<< HEAD
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
=======
>>>>>>> 43d67f21 (.)
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
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
use Modules\Xot\Actions\File\FixPathAction;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\File\AssetPathAction;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 43d67f21 (.)
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
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 43d67f21 (.)
=======
use Illuminate\Support\Facades\Log;
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
>>>>>>> ca9324a4 (.)
=======
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
>>>>>>> ca9324a4 (.)
=======
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
>>>>>>> 43d67f21 (.)
=======
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Services\ModuleService;
use Nwidart\Modules\Facades\Module;
use Webmozart\Assert\Assert;

use function Safe\define;
use function Safe\glob;
use function Safe\json_decode;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\json_encode;
use function Safe\preg_match;
=======
use function Safe\preg_match;
use function Safe\realpath;
>>>>>>> 5a14301c (.)
=======
use function Safe\preg_match;
use function Safe\realpath;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('isRunningTestBench')) {
=======
if (!function_exists('isRunningTestBench')) {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isRunningTestBench')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isRunningTestBench')) {
=======
if (!function_exists('isRunningTestBench')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('isRunningTestBench')) {
>>>>>>> 5a14301c (.)
=======
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isRunningTestBench')) {
=======
if (!function_exists('isRunningTestBench')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('isRunningTestBench')) {
=======
if (!function_exists('isRunningTestBench')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('isRunningTestBench')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('isRunningTestBench')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

        return Str::endsWith($base, $path);
=======
        $res = Str::endsWith($base, $path);

        return $res;
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
>>>>>>> 43d67f21 (.)
=======
        $res = Str::endsWith($base, $path);

        return $res;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
        $res = Str::endsWith($base, $path);

        return $res;
>>>>>>> 5a14301c (.)

        // return false;
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('snake_case')) {
=======
if (!function_exists('snake_case')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('snake_case')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('snake_case')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('snake_case')) {
=======
if (!function_exists('snake_case')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('snake_case')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('snake_case')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('snake_case')) {
=======
if (! function_exists('snake_case')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('snake_case')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('snake_case')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('snake_case')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('snake_case')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('snake_case')) {
=======
if (!function_exists('snake_case')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('snake_case')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('snake_case')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('snake_case')) {
=======
if (!function_exists('snake_case')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('snake_case')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('snake_case')) {
>>>>>>> 5a14301c (.)
    function snake_case(string $str): string
    {
        return Str::snake($str);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('str_slug')) {
=======
if (!function_exists('str_slug')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('str_slug')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('str_slug')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('str_slug')) {
=======
if (!function_exists('str_slug')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('str_slug')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('str_slug')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('str_slug')) {
=======
if (! function_exists('str_slug')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('str_slug')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('str_slug')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('str_slug')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('str_slug')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('str_slug')) {
=======
if (!function_exists('str_slug')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('str_slug')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('str_slug')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('str_slug')) {
=======
if (!function_exists('str_slug')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('str_slug')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('str_slug')) {
>>>>>>> 5a14301c (.)
    function str_slug(string $str): string
    {
        return Str::slug($str);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('str_singular')) {
=======
if (!function_exists('str_singular')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('str_singular')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('str_singular')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('str_singular')) {
=======
if (!function_exists('str_singular')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('str_singular')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('str_singular')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('str_singular')) {
=======
if (! function_exists('str_singular')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('str_singular')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('str_singular')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('str_singular')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('str_singular')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('str_singular')) {
=======
if (!function_exists('str_singular')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('str_singular')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('str_singular')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('str_singular')) {
=======
if (!function_exists('str_singular')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('str_singular')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('str_singular')) {
>>>>>>> 5a14301c (.)
    function str_singular(string $str): string
    {
        return Str::singular($str);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('starts_with')) {
=======
if (!function_exists('starts_with')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('starts_with')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('starts_with')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('starts_with')) {
=======
if (!function_exists('starts_with')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('starts_with')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('starts_with')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('starts_with')) {
=======
if (! function_exists('starts_with')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('starts_with')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('starts_with')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('starts_with')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('starts_with')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('starts_with')) {
=======
if (!function_exists('starts_with')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('starts_with')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('starts_with')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('starts_with')) {
=======
if (!function_exists('starts_with')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('starts_with')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('starts_with')) {
>>>>>>> 5a14301c (.)
    function starts_with(string $str, string $str1): bool
    {
        return Str::startsWith($str, $str1);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('ends_with')) {
=======
if (!function_exists('ends_with')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('ends_with')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('ends_with')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('ends_with')) {
=======
if (!function_exists('ends_with')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('ends_with')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('ends_with')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('ends_with')) {
=======
if (! function_exists('ends_with')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('ends_with')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('ends_with')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('ends_with')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('ends_with')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('ends_with')) {
=======
if (!function_exists('ends_with')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('ends_with')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('ends_with')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('ends_with')) {
=======
if (!function_exists('ends_with')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('ends_with')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('ends_with')) {
>>>>>>> 5a14301c (.)
    function ends_with(string $str, string $str1): bool
    {
        return Str::endsWith($str, $str1);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('str_contains')) {
=======
if (!function_exists('str_contains')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('str_contains')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('str_contains')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('str_contains')) {
=======
if (!function_exists('str_contains')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('str_contains')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('str_contains')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('str_contains')) {
=======
if (! function_exists('str_contains')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('str_contains')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('str_contains')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('str_contains')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('str_contains')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('str_contains')) {
=======
if (!function_exists('str_contains')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('str_contains')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('str_contains')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('str_contains')) {
=======
if (!function_exists('str_contains')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('str_contains')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('str_contains')) {
>>>>>>> 5a14301c (.)
    function str_contains(string $str, string $str1): bool
    {
        return Str::contains($str, $str1);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('hex2rgba')) {
=======
if (!function_exists('hex2rgba')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('hex2rgba')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('hex2rgba')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('hex2rgba')) {
=======
if (!function_exists('hex2rgba')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('hex2rgba')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('hex2rgba')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('hex2rgba')) {
=======
if (! function_exists('hex2rgba')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('hex2rgba')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('hex2rgba')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('hex2rgba')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('hex2rgba')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('hex2rgba')) {
=======
if (!function_exists('hex2rgba')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('hex2rgba')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('hex2rgba')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('hex2rgba')) {
=======
if (!function_exists('hex2rgba')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('hex2rgba')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('hex2rgba')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
        if ($color[0] === '#') {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
        if ('#' === $color[0]) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if ($color[0] === '#') {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
        if ('#' === $color[0]) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        if ($color[0] === '#') {
>>>>>>> 43d67f21 (.)
=======
        if ($color[0] === '#') {
=======
        if ('#' === $color[0]) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($color[0] === '#') {
>>>>>>> 5842a556 (.)
=======
        if ('#' === $color[0]) {
>>>>>>> 5a14301c (.)
=======
        if ($color[0] === '#') {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
        if ($color[0] === '#') {
=======
        if ('#' === $color[0]) {
>>>>>>> 0e51323 (.)
=======
        if ('#' === $color[0]) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        if ($color[0] === '#') {
>>>>>>> 43d67f21 (.)
=======
        if ($color[0] === '#') {
=======
        if ('#' === $color[0]) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($color[0] === '#') {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        if ($color[0] === '#') {
>>>>>>> b7ea1cd1 (.)
=======
        if ($color[0] === '#') {
=======
        if ('#' === $color[0]) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if ($color[0] === '#') {
>>>>>>> 16dc7ab0 (.)
=======
        if ('#' === $color[0]) {
>>>>>>> 5a14301c (.)
            $color = mb_substr($color, 1);
        }

        // Check if color has 6 or 3 characters and get values
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
        if (mb_strlen($color) === 6) {
            $hex = [$color[0].$color[1], $color[2].$color[3], $color[4].$color[5]];
        } elseif (mb_strlen($color) === 3) {
            $hex = [$color[0].$color[0], $color[1].$color[1], $color[2].$color[2]];
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
        if (6 === mb_strlen($color)) {
            $hex = [$color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]];
        } elseif (3 === mb_strlen($color)) {
            $hex = [$color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if ('#' == $color[0]) {
            $color = substr($color, 1);
        }

        // Check if color has 6 or 3 characters and get values
        if (6 == strlen($color)) {
<<<<<<< HEAD
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
=======
            $hex = [$color[0].$color[1], $color[2].$color[3], $color[4].$color[5]];
        } elseif (3 === mb_strlen($color)) {
            $hex = [$color[0].$color[0], $color[1].$color[1], $color[2].$color[2]];
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $hex = [$color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]];
        } elseif (3 === mb_strlen($color)) {
            $hex = [$color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]];
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
        } else {
            return $default;
        }

        // Convert hexadec to rgb
        $rgb = array_map('hexdec', $hex);

        // Check if opacity is set(rgba or rgb)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
        if ($opacity !== -1.0) {
            if ($opacity < 0 || $opacity > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba('.implode(',', $rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(',', $rgb).')';
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
        if (-1.0 !== $opacity) {
            if ($opacity < 0 || $opacity > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba(' . implode(',', $rgb) . ',' . $opacity . ')';
        } else {
            $output = 'rgb(' . implode(',', $rgb) . ')';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if ($opacity) {
            if (abs($opacity) > 1) {
                $opacity = 1.0;
            }
            $output = 'rgba('.implode(',', $rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(',', $rgb).')';
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
            $output = 'rgba('.implode(',', $rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(',', $rgb).')';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $output = 'rgba(' . implode(',', $rgb) . ',' . $opacity . ')';
        } else {
            $output = 'rgb(' . implode(',', $rgb) . ')';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
        }

        // Return rgb(a) color string
        return $output;
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
=======
>>>>>>> d86d643a (.)
if (! function_exists('dddx')) {
    function dddx(mixed $params): void
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('dddx')) {
<<<<<<< HEAD
=======
if (! function_exists('dddx')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('dddx')) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('dddx')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('dddx')) {
=======
if (!function_exists('dddx')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('dddx')) {
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('dddx')) {
=======
if (!function_exists('dddx')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('dddx')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('dddx')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('dddx')) {
=======
if (!function_exists('dddx')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('dddx')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('dddx')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('dddx')) {
=======
if (!function_exists('dddx')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('dddx')) {
>>>>>>> 16dc7ab0 (.)
    function dddx(mixed $params): string
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
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
=======
if (!function_exists('dddx')) {
    function dddx(mixed $params): string
>>>>>>> 5a14301c (.)
    {
        $tmp = debug_backtrace();
        $file = $tmp[0]['file'] ?? 'file-unknown';
        $file = str_replace('/', DIRECTORY_SEPARATOR, $file);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 0e51323 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 43d67f21 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 5842a556 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT']);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 43d67f21 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 16dc7ab0 (.)
=======
        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 5a14301c (.)
        $doc_root = str_replace('/', DIRECTORY_SEPARATOR, $doc_root);

        $dir_piece = explode(DIRECTORY_SEPARATOR, __DIR__);
        $dir_piece = array_slice($dir_piece, 0, -6);

        $dir_copy = implode(DIRECTORY_SEPARATOR, $dir_piece);
        $file = str_replace($dir_copy, $doc_root, $file);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
        if (! defined('LARAVEL_START')) {
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> 0e51323 (.)
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> 43d67f21 (.)
=======
        if (! defined('LARAVEL_START')) {
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> 5842a556 (.)
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!defined('LARAVEL_START')) {
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> 43d67f21 (.)
=======
        if (! defined('LARAVEL_START')) {
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> b7ea1cd1 (.)
=======
        if (! defined('LARAVEL_START')) {
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if (! defined('LARAVEL_START')) {
>>>>>>> 16dc7ab0 (.)
=======
        if (!defined('LARAVEL_START')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> 43d67f21 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> 5842a556 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> 5a14301c (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> 0e51323 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> 43d67f21 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> b7ea1cd1 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
>>>>>>> 16dc7ab0 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2) . ' MB',
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getFilename')) {
=======
if (!function_exists('getFilename')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getFilename')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getFilename')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getFilename')) {
=======
if (!function_exists('getFilename')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getFilename')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getFilename')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getFilename')) {
=======
if (!function_exists('getFilename')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getFilename')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getFilename')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',

            // 'file_1' => $file, //da sistemare
        ];
        if (File::exists($data['file']) && Str::startsWith($data['file'], app(FixPathAction::class)->execute(storage_path('framework/views')))) {
            // $data['extra'] = 'preso';
            $content = File::get($data['file']);
            $data['view_file'] = app(FixPathAction::class)->execute(Str::between($content, '/**PATH ', ' ENDPATH**/'));
        }

        dd(
            $data,
        );
    }
}
/*
if (! function_exists('debug_methods')) {
    function debug_methods(object $rows): string
    {
        $methods = get_class_methods($rows);
        // *
        $methods_get = collect($methods)->filter(
            static fn ($item) => Str::startsWith($item, 'get')
        )->map(
            static function ($item) use ($rows) {
                $value = 'Undefined';
                try {
                    $value = $rows->{$item}();
                } catch (Exception|ArgumentCountError $e) {
                    $value = $e->getMessage();
                }

                return [
                    'name' => $item,
                    'value' => $value,
                ];
            }
        )->all();

        return ArrayService::make()
            ->setArray($methods_get)
            ->toHtml()
            ->render();
    }
}
*/

if (! function_exists('getFilename')) {
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
if (! function_exists('getFilename')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('getFilename')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getFilename')) {
=======
if (!function_exists('getFilename')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getFilename')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getFilename')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getFilename')) {
=======
if (!function_exists('getFilename')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getFilename')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getFilename')) {
>>>>>>> 5a14301c (.)
    function getFilename(array $params): string
    {
        $tmp = debug_backtrace();
        $class = class_basename($tmp[1]['class'] ?? 'class-unknown');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $func = $tmp[1]['function'] ?? 'function-unknown';
        $params_list = collect($params)->except(['_token', '_method'])->implode('_');

        return Str::slug(
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $func = $tmp[1]['function'];
        $params_list = collect($params)->except(['_token', '_method'])->implode('_');

        return Str::slug(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> 0e51323 (.)
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
>>>>>>> 43d67f21 (.)
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
=======
            str_replace('Controller', '', $class).
                '_'.str_replace('do_', '', $func).
                '_'.$params_list
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> 3fbbf1f5 (.)
=======
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
>>>>>>> 43d67f21 (.)
=======
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            str_replace('Controller', '', $class).'_'.str_replace('do_', '', $func).'_'.$params_list,
>>>>>>> b7ea1cd1 (.)
=======
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
            str_replace('Controller', '', $class) . '_' . str_replace('do_', '', $func) . '_' . $params_list,
>>>>>>> 5a14301c (.)
        );
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('req_uri')) {
=======
if (!function_exists('req_uri')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('req_uri')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('req_uri')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('req_uri')) {
=======
if (!function_exists('req_uri')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('req_uri')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('req_uri')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('req_uri')) {
=======
if (! function_exists('req_uri')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('req_uri')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('req_uri')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('req_uri')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('req_uri')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('req_uri')) {
=======
if (!function_exists('req_uri')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('req_uri')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('req_uri')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('req_uri')) {
=======
if (!function_exists('req_uri')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('req_uri')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('req_uri')) {
>>>>>>> 5a14301c (.)
    function req_uri(): mixed
    {
        return $_SERVER['REQUEST_URI'] ?? '';
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('in_admin')) {
=======
if (!function_exists('in_admin')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('in_admin')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('in_admin')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('in_admin')) {
=======
if (!function_exists('in_admin')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('in_admin')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('in_admin')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('in_admin')) {
=======
if (! function_exists('in_admin')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('in_admin')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('in_admin')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('in_admin')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('in_admin')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('in_admin')) {
=======
if (!function_exists('in_admin')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('in_admin')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('in_admin')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('in_admin')) {
=======
if (!function_exists('in_admin')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('in_admin')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('in_admin')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('inAdmin')) {
=======
if (!function_exists('inAdmin')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('inAdmin')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('inAdmin')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('inAdmin')) {
=======
if (!function_exists('inAdmin')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('inAdmin')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('inAdmin')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('inAdmin')) {
=======
if (! function_exists('inAdmin')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('inAdmin')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('inAdmin')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('inAdmin')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('inAdmin')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('inAdmin')) {
=======
if (!function_exists('inAdmin')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('inAdmin')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('inAdmin')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('inAdmin')) {
=======
if (!function_exists('inAdmin')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('inAdmin')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('inAdmin')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
        if (Request::segment(2) === 'admin') {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
        if (null !== config()->get('in_admin')) {
            return config()->get('in_admin');
        }
        */
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        if ('admin' === Request::segment(2)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> 43d67f21 (.)
=======
        if (Request::segment(2) === 'admin') {
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> 5842a556 (.)
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> 5a14301c (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
        if (Request::segment(2) === 'admin') {
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> 0e51323 (.)
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> 43d67f21 (.)
=======
        if (Request::segment(2) === 'admin') {
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> b7ea1cd1 (.)
=======
        if (Request::segment(2) === 'admin') {
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if (Request::segment(2) === 'admin') {
>>>>>>> 16dc7ab0 (.)
=======
        if ('admin' === Request::segment(2)) {
>>>>>>> 5a14301c (.)
            return true;
        }

        $segments = Request::segments();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return (is_countable($segments) ? count($segments) : 0) > 0 &&
=======
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 16dc7ab0 (.)
        return
            (is_countable($segments) ? count($segments) : 0) > 0 &&
>>>>>>> d86d643a (.)
            $segments[0] === 'livewire' &&
            session('in_admin') === true;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
        return (
            (is_countable($segments) ? count($segments) : 0) > 0 &&
            'livewire' === $segments[0] &&
            true === session('in_admin')
        );
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
        return
            (is_countable($segments) ? count($segments) : 0) > 0 &&
            $segments[0] === 'livewire' &&
            session('in_admin') === true;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
        return (
            (is_countable($segments) ? count($segments) : 0) > 0 &&
            'livewire' === $segments[0] &&
            true === session('in_admin')
        );
<<<<<<< HEAD
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
        return (is_countable($segments) ? count($segments) : 0) > 0 && 'livewire' === $segments[0] && true === session('in_admin');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return (is_countable($segments) ? count($segments) : 0) > 0 && 'livewire' === $segments[0] && true === session('in_admin');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return
            (is_countable($segments) ? count($segments) : 0) > 0 &&
            $segments[0] === 'livewire' &&
            session('in_admin') === true;
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isHome')) {
=======
if (!function_exists('isHome')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('isHome')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isHome')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('isHome')) {
=======
if (!function_exists('isHome')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isHome')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('isHome')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isHome')) {
=======
if (!function_exists('isHome')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isHome')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('isHome')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
     * Return true if current page is home.
     *
     * @return bool
     */
if (! function_exists('isHome')) {
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
if (! function_exists('isHome')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('isHome')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isHome')) {
=======
if (!function_exists('isHome')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isHome')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('isHome')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('isHome')) {
=======
if (!function_exists('isHome')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('isHome')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('isHome')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isAdminHome')) {
=======
if (!function_exists('isAdminHome')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('isAdminHome')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isAdminHome')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('isAdminHome')) {
=======
if (!function_exists('isAdminHome')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isAdminHome')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('isAdminHome')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isAdminHome')) {
=======
if (!function_exists('isAdminHome')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isAdminHome')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('isAdminHome')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
     * Return true if current page is an admin home page.
     *
     * @return bool
     */
if (! function_exists('isAdminHome')) {
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
if (! function_exists('isAdminHome')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('isAdminHome')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isAdminHome')) {
=======
if (!function_exists('isAdminHome')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isAdminHome')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('isAdminHome')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('isAdminHome')) {
=======
if (!function_exists('isAdminHome')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('isAdminHome')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('isAdminHome')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('isAdmin')) {
=======
if (!function_exists('isAdmin')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('isAdmin')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isAdmin')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('isAdmin')) {
=======
if (!function_exists('isAdmin')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isAdmin')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('isAdmin')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isAdmin')) {
=======
if (!function_exists('isAdmin')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isAdmin')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('isAdmin')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
     * https://gist.github.com/atorscho/5bcf63d077c11ed0e8ce
     * Return true if current page is an admin page.
     *
     * @return bool
     */
if (! function_exists('isAdmin')) {
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
if (! function_exists('isAdmin')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('isAdmin')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isAdmin')) {
=======
if (!function_exists('isAdmin')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isAdmin')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('isAdmin')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('isAdmin')) {
=======
if (!function_exists('isAdmin')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('isAdmin')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('isAdmin')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('fullTextWildcards')) {
=======
if (!function_exists('fullTextWildcards')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('fullTextWildcards')) {
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('fullTextWildcards')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('fullTextWildcards')) {
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('fullTextWildcards')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
     * Replaces spaces with full text search wildcards
     *
     * @param string $term
     * @return string
     */
if (! function_exists('fullTextWildcards')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
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
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('fullTextWildcards')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('fullTextWildcards')) {
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('fullTextWildcards')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('fullTextWildcards')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('fullTextWildcards')) {
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('fullTextWildcards')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('fullTextWildcards')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
                $words[$key] = '+'.$word.'*';
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> 0e51323 (.)
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> 43d67f21 (.)
=======
                $words[$key] = '+'.$word.'*';
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> 5842a556 (.)
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
                $words[$key] = '+' . $word . '*';
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> 3fbbf1f5 (.)
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> 43d67f21 (.)
=======
                $words[$key] = '+'.$word.'*';
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> b7ea1cd1 (.)
=======
                $words[$key] = '+'.$word.'*';
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
                $words[$key] = '+'.$word.'*';
>>>>>>> 16dc7ab0 (.)
=======
                $words[$key] = '+' . $word . '*';
>>>>>>> 5a14301c (.)
            }
        }

        return implode(' ', $words);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('isContainer')) {
=======
if (!function_exists('isContainer')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isContainer')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('isContainer')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isContainer')) {
=======
if (!function_exists('isContainer')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isContainer')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('isContainer')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('isContainer')) {
=======
if (! function_exists('isContainer')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('isContainer')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('isContainer')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isContainer')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('isContainer')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isContainer')) {
=======
if (!function_exists('isContainer')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isContainer')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('isContainer')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('isContainer')) {
=======
if (!function_exists('isContainer')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('isContainer')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('isContainer')) {
>>>>>>> 5a14301c (.)
    function isContainer(): bool
    {
        [$containers, $items] = params2ContainerItem();

        return count($containers) > count($items);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('isItem')) {
=======
if (!function_exists('isItem')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('isItem')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('isItem')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isItem')) {
=======
if (!function_exists('isItem')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isItem')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('isItem')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('isItem')) {
=======
if (! function_exists('isItem')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('isItem')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('isItem')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('isItem')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('isItem')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('isItem')) {
=======
if (!function_exists('isItem')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('isItem')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('isItem')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('isItem')) {
=======
if (!function_exists('isItem')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('isItem')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('isItem')) {
>>>>>>> 5a14301c (.)
    function isItem(): bool
    {
        [$containers, $items] = params2ContainerItem();

        return count($containers) === count($items);
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('params2ContainerItem')) {
    /**
     * @return array<array>
     */
    function params2ContainerItem(?array $params = null): array
    {
        if ($params === null) {
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if ($params === null) {
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
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
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
        if ($params === null) {
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
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('params2ContainerItem')) {
    /**
     * @return array<array>
     */
    function params2ContainerItem(null|array $params = null): array
    {
        if (null === $params) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
                ! empty($matches) &&
=======
                !empty($matches) &&
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                ! empty($matches) &&
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
                !empty($matches) &&
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
                ! empty($matches) &&
>>>>>>> 43d67f21 (.)
=======
                ! empty($matches) &&
=======
                !empty($matches) &&
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                ! empty($matches) &&
>>>>>>> 5842a556 (.)
=======
                !empty($matches) &&
>>>>>>> 5a14301c (.)
=======
                ! empty($matches) &&
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                ! empty($matches) &&
>>>>>>> 43d67f21 (.)
=======
                ! empty($matches) &&
=======
                !empty($matches) &&
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                ! empty($matches) &&
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
                ! empty($matches) &&
>>>>>>> b7ea1cd1 (.)
=======
                ! empty($matches) &&
=======
                !empty($matches) &&
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
                ! empty($matches) &&
>>>>>>> 16dc7ab0 (.)
=======
                !empty($matches) &&
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModelFields')) {
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('getModelFields')) {
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getModelFields')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getModelFields')) {
=======
if (!function_exists('getModelFields')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getModelFields')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getModelFields')) {
=======
if (!function_exists('getModelFields')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getModelFields')) {
>>>>>>> 5a14301c (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getModelFields')) {
=======
if (!function_exists('getModelFields')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getModelFields')) {
=======
if (!function_exists('getModelFields')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getModelFields')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getModelFields')) {
>>>>>>> 5a14301c (.)
    function getModelFields(Model $model): array
    {
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
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
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.'.$name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.' . $name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
if (! function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.'.$name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
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
if (!function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.' . $name);
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
=======

>>>>>>> ed734516 (.)
if (! function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.'.$name);
<<<<<<< HEAD
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
if (! function_exists('getModelByName')) {
    function getModelByName(string $name): Model
    {
        $registered = config('morph_map.'.$name);
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
        if (is_string($registered) && class_exists($registered)) {
            Assert::isInstanceOf($res = app($registered), Model::class);

            return $res;
        }

        // getFirst..
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
        $files_path = base_path('Modules').'/*/Models/*.php';
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> 0e51323 (.)
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> 43d67f21 (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> 5842a556 (.)
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        $files_path = base_path('Modules') . '/*/Models/*.php';
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> 3fbbf1f5 (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> 43d67f21 (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> b7ea1cd1 (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        $files_path = base_path('Modules').'/*/Models/*.php';
>>>>>>> 16dc7ab0 (.)
=======
        $files_path = base_path('Modules') . '/*/Models/*.php';
>>>>>>> 5a14301c (.)
        Assert::isArray($files = glob($files_path));
        // if (false === $files) {
        //    throw new Exception('['.__LINE__.']['.__FILE__.']');
        // }

        $path = Arr::first($files, function ($file) use ($name): bool {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 43d67f21 (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 5842a556 (.)
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 5a14301c (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 43d67f21 (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> b7ea1cd1 (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            Assert::string($file, __FILE__.':'.__LINE__.' - Helper');
>>>>>>> 16dc7ab0 (.)
=======
            Assert::string($file, __FILE__ . ':' . __LINE__ . ' - Helper');
>>>>>>> 5a14301c (.)
            $info = pathinfo($file);

            // Accedi direttamente a 'filename', che esiste sempre in pathinfo
            $filename = $info['filename'] ?? '';

            return Str::snake($filename) === $name;
        });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
        if ($path === null) {
            throw new Exception('['.$name.'] not in morph_map ['.__LINE__.']['.__FILE__.']');
        }
        Assert::string($path, __FILE__.':'.__LINE__.' - Helper');

        $path = app(FixPathAction::class)->execute($path);
        $info = pathinfo($path);
        $module_name = Str::between($path, 'Modules'.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR.'Models');

        $class = 'Modules\\'.$module_name.'\Models\\'.$info['filename'];
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
=======
>>>>>>> a5dccfe (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
        $class = 'Modules\\'.$module_name.'\Models\\'.$info['filename'];
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
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
        $path = Arr::first(
            $files,
            function ($file) use ($name): bool {
                Assert::string($file);
                $info = pathinfo($file);

                // Accedi direttamente a 'filename', che esiste sempre in pathinfo
                $filename = $info['filename'] ?? '';

                return Str::snake($filename) === $name;
            }
        );

        if (null === $path) {
            throw new Exception('['.$name.'] not in morph_map ['.__LINE__.']['.__FILE__.']');
        }
        Assert::string($path);

        $path = app(FixPathAction::class)->execute($path);
        $info = pathinfo($path);
        $module_name = Str::between($path, 'Modules'.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR.'Models');

        $class = 'Modules\\'.$module_name.'\Models\\'.$info['filename'];
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
        $class = 'Modules\\'.$module_name.'\Models\\'.$info['filename'];
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
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
        if (null === $path) {
            throw new Exception('[' . $name . '] not in morph_map [' . __LINE__ . '][' . __FILE__ . ']');
        }
        Assert::string($path, __FILE__ . ':' . __LINE__ . ' - Helper');

        $path = app(FixPathAction::class)->execute($path);
        $info = pathinfo($path);
        $module_name = Str::between($path, 'Modules' . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR . 'Models');

        $class = 'Modules\\' . $module_name . '\Models\\' . $info['filename'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('getModuleFromModel')) {
=======
if (!function_exists('getModuleFromModel')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModuleFromModel')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getModuleFromModel')) {
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getModuleFromModel')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getModuleFromModel')) {
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getModuleFromModel')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
if (! function_exists('getUserClass')) {
    function getUserClass(): string
    {
        $class = config('auth.providers.users.model');
        if (! is_string($class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }

        return $class;
    }
}
*/

if (! function_exists('getModuleFromModel')) {
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
if (! function_exists('getModuleFromModel')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('getModuleFromModel')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getModuleFromModel')) {
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getModuleFromModel')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getModuleFromModel')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getModuleFromModel')) {
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getModuleFromModel')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getModuleFromModel')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getModuleNameFromModel')) {
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getModuleNameFromModel')) {
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('getModuleNameFromModel')) {
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getModuleNameFromModel')) {
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getModuleNameFromModel')) {
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getModuleNameFromModel')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getModuleNameFromModel')) {
>>>>>>> 5a14301c (.)
    function getModuleNameFromModel(object $model): string
    {
        $class = $model::class;

        return Str::before(Str::after($class, 'Modules\\'), '\\Models\\');
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $model_class = config('morph_map.'.$model_name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $model_class = config('morph_map.' . $model_name);
        if (!is_string($model_class)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
if (! function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $model_class = config('morph_map.'.$model_name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
<<<<<<< HEAD
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
if (! function_exists('getModuleNameFromModelName')) {
    function getModuleNameFromModelName(string $model_name): string
    {
        $model_class = config('morph_map.'.$model_name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
        }

        Assert::isInstanceOf($model = app($model_class), Model::class);

        return getModuleNameFromModel($model);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getTransformerFromModel')) {
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getTransformerFromModel')) {
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('getTransformerFromModel')) {
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getTransformerFromModel')) {
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getTransformerFromModel')) {
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getTransformerFromModel')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getTransformerFromModel')) {
>>>>>>> 5a14301c (.)
    function getTransformerFromModel(object $model, string $type = 'Resource'): mixed
    {
        $class = $model::class;
        $module_name = getModuleNameFromModel($model);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 14edd1a1 (.)
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> ed734516 (.)
=======
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
>>>>>>> 5842a556 (.)
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
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
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> 14edd1a1 (.)
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> c06600c (.)
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
        $transformer = '\\Modules\\'.$module_name.'\Transformers\\'.class_basename($model).''.$type;
        // dddx($transformer.' '.class_exists($transformer));
        if (! class_exists($transformer)) {
>>>>>>> 16dc7ab0 (.)
=======
        $transformer = '\\Modules\\' . $module_name . '\Transformers\\' . class_basename($model) . '' . $type;
        // dddx($transformer.' '.class_exists($transformer));
        if (!class_exists($transformer)) {
>>>>>>> 5a14301c (.)
            dddx('preso');
        }

        return $transformer;
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getAllModules')) {
=======
if (!function_exists('getAllModules')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getAllModules')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getAllModules')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getAllModules')) {
=======
if (!function_exists('getAllModules')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getAllModules')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getAllModules')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('getAllModules')) {
=======
if (! function_exists('getAllModules')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('getAllModules')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('getAllModules')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getAllModules')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('getAllModules')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getAllModules')) {
=======
if (!function_exists('getAllModules')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getAllModules')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getAllModules')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getAllModules')) {
=======
if (!function_exists('getAllModules')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getAllModules')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getAllModules')) {
>>>>>>> 5a14301c (.)
    function getAllModules(): array
    {
        return Module::all();
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('getAllModulesModels')) {
    /**
     * Get all models from all enabled modules.
     *
     * @return array<string, string>
     *
     * @throws ReflectionException
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
     *
     * @throws ReflectionException
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
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
     *
     * @throws ReflectionException
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
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('getAllModulesModels')) {
    /**
     * Get all models from all enabled modules.
     *
     * @throws ReflectionException
     *
     * @return array<string, string>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
     */
    function getAllModulesModels(): array
    {
        $res = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<Nwidart\Modules\Laravel\Module> $modules */
        $modules = Module::all();

        foreach ($modules as $module) {
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        /** @var Nwidart\Modules\Laravel\Module[] $modules */
        $modules = Module::all();

        foreach ($modules as $module) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> 0e51323 (.)
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> 43d67f21 (.)
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
=======
            if (! $module instanceof Nwidart\Modules\Laravel\Module) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> 43d67f21 (.)
=======
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            if (! ($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> b7ea1cd1 (.)
=======
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
            if (!($module instanceof Nwidart\Modules\Laravel\Module)) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 14edd1a1 (.)
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
                Log::error('[Module:' .
                $moduleName .
                '] Error getting models: ' .
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
                Log::error('[Module:' .
                $moduleName .
                '] Error getting models: ' .
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
                Log::error('[Module:' .
                $moduleName .
                '] Error getting models: ' .
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> 5842a556 (.)
=======
                Log::error('[Module:' .
                $moduleName .
                '] Error getting models: ' .
>>>>>>> 5a14301c (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
                Log::error('[Module:'.
                $moduleName.
                '] Error getting models: '.
>>>>>>> 16dc7ab0 (.)
=======
                Log::error('[Module:' .
                $moduleName .
                '] Error getting models: ' .
>>>>>>> 5a14301c (.)
                $e->getMessage());

                continue;
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<string, string> */
=======
        /* @var array<string, string> */
>>>>>>> 5a14301c (.)
=======
        /* @var array<string, string> */
>>>>>>> 5a14301c (.)
=======
        /* @var array<string, string> */
>>>>>>> 5a14301c (.)
        return $res;
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getModuleModels')) {
=======
if (!function_exists('getModuleModels')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getModuleModels')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getModuleModels')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getModuleModels')) {
=======
if (!function_exists('getModuleModels')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getModuleModels')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getModuleModels')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('getModuleModels')) {
=======
if (! function_exists('getModuleModels')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('getModuleModels')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('getModuleModels')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getModuleModels')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('getModuleModels')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getModuleModels')) {
=======
if (!function_exists('getModuleModels')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getModuleModels')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getModuleModels')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getModuleModels')) {
=======
if (!function_exists('getModuleModels')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getModuleModels')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getModuleModels')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.'.$name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.' . $name);
        if (!is_string($model_class)) {
            throw new Exception('[' . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
=======
if (! function_exists('getModuleModelsMenu')) {
    function getModuleModelsMenu(string $module): Collection {
        $models = getModuleModels($module);
        $menu = collect($models)->map(
            function ($item, $key) {
                // $obj = new $item();
                $obj = app($item);
                $panel = PanelService::make()->get($obj);
                if ('media' === $key) {// media e' singolare ma anche plurale di medium
                    $panel->setName('medias');
                }
                $url = $panel->url('index');
                return (object) [
                    'title' => $key,
                    'url' => $url,
                    'active' => false,
                ];
            }
        );
        return $menu;
    }
}
*/

>>>>>>> ed734516 (.)
if (! function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.'.$name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
<<<<<<< HEAD
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
if (! function_exists('xotModel')) {
    function xotModel(string $name): Model
    {
        $model_class = config('morph_map.'.$name);
        if (! is_string($model_class)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
        }

        Assert::isInstanceOf($res = app($model_class), Model::class);

        return $res;
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('deltaTime')) {
    function deltaTime(): void
    {
        echo '<h3>Time : '.(microtime(true) - LARAVEL_START).'</h3>';
    }
}

if (! function_exists('bracketsToDotted')) {
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('deltaTime')) {
    function deltaTime(): void
    {
        echo '<h3>Time : ' . (microtime(true) - LARAVEL_START) . '</h3>';
    }
}

if (!function_exists('bracketsToDotted')) {
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
if (! function_exists('dottedToBrackets')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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
if (!function_exists('dottedToBrackets')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('dottedToBrackets')) {
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> 5a14301c (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('dottedToBrackets')) {
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('dottedToBrackets')) {
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('dottedToBrackets')) {
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('dottedToBrackets')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('dottedToBrackets')) {
>>>>>>> 5a14301c (.)
    // privacies.111.pivot.title => privacies[111][pivot][title]
    function dottedToBrackets(string $str, string $_quotation_marks = ''): string
    {
        return collect(explode('.', $str))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> 43d67f21 (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> 5842a556 (.)
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> 5a14301c (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> 43d67f21 (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> b7ea1cd1 (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            ->map(static fn (string $v, $k): string => $k === 0 ? $v : ('['.$v.']'))
>>>>>>> 16dc7ab0 (.)
=======
            ->map(static fn(string $v, $k): string => 0 === $k ? $v : ('[' . $v . ']'))
>>>>>>> 5a14301c (.)
            ->implode('');
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
if (! function_exists('array_merge_recursive_distinct')) {
=======
if (!function_exists('array_merge_recursive_distinct')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 21348520 (.)
=======
if (! function_exists('dottedToBrackets')) {
    // privacies.111.pivot.title => privacies[111][pivot][title]
    function dottedToBrackets(string $str, string $quotation_marks = ''): string
    {
        return collect(explode('.', $str))->map(
            static fn (string $v, $k): string => 0 === $k ? $v : '['.$v.']'
        )->implode('');
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
    }
}

if (! function_exists('array_merge_recursive_distinct')) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('array_merge_recursive_distinct')) {
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('array_merge_recursive_distinct')) {
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
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('array_merge_recursive_distinct')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('array_merge_recursive_distinct')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
if (! function_exists('getRelationships')) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('getRelationships')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getRelationships')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getRelationships')) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getRelationships')) {
=======
if (!function_exists('getRelationships')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getRelationships')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('getRelationships')) {
=======
if (! function_exists('getRelationships')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('getRelationships')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('getRelationships')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getRelationships')) {
=======
if (!function_exists('getRelationships')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getRelationships')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getRelationships')) {
=======
if (!function_exists('getRelationships')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getRelationships')) {
=======
if (!function_exists('getRelationships')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getRelationships')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getRelationships')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
            if ($args !== []) {
=======
            if ([] !== $args) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            if ($args !== []) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
            if ([] !== $args) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            if ($args !== []) {
>>>>>>> 43d67f21 (.)
=======
            if ($args !== []) {
=======
            if ([] !== $args) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if ($args !== []) {
>>>>>>> 5842a556 (.)
=======
            if ([] !== $args) {
>>>>>>> 5a14301c (.)
=======
            if ($args !== []) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            if ($args !== []) {
>>>>>>> 43d67f21 (.)
=======
            if ($args !== []) {
=======
            if ([] !== $args) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if ($args !== []) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            if ($args !== []) {
>>>>>>> b7ea1cd1 (.)
=======
            if ($args !== []) {
=======
            if ([] !== $args) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            if ($args !== []) {
>>>>>>> 16dc7ab0 (.)
=======
            if ([] !== $args) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 16dc7ab0 (.)
                $return = $reflection->invoke($model);
                $check = $return instanceof Relation;
<<<<<<< HEAD
                /*
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated())->getName();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 71f31700 (.)
                $modelInstance = is_string($model) ? new $model() : $model;
                $return = $reflection->invoke($modelInstance);
                $check = $return instanceof Relation;
                
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated());
                    $model=$related_model->getName();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> 492d6d3c (.)
=======
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
                $return = $reflection->invoke($model);
                $check = $return instanceof Relation;
                /*
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated())->getName();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
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
                if ($check) {
                    $related_model = (new ReflectionClass($return->getRelated()))->getName();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
                $modelInstance = is_string($model) ? new $model() : $model;
                $return = $reflection->invoke($modelInstance);
                $check = $return instanceof Relation;
                
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated());
                    $model=$related_model->getName();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
                $return = $reflection->invoke($model);
                $check = $return instanceof Relation;
                /*
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated())->getName();
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
                $return = $reflection->invoke($model);
                $check = $return instanceof Relation;
                /*
                if ($check) {
                    $related_model = new ReflectionClass($return->getRelated())->getName();
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
                    $msg = [
                        'name' => $reflection->name,
                        'type' => class_basename($return),
                        // 'check'=>$check,
                        // $msg['type']=(new \ReflectionClass($return))->getShortName();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7ea1cd1 (.)
                        'model' => $related_model,
                    ];
                    $data[] = $msg;
                }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            } catch (Throwable $e) {
                // Gestione generica delle eccezioni che potrebbero verificarsi durante l'analisi delle relazioni
                // Log::debug(['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
                        'model' => $related_model,
                    ];
                    $data[] = $msg;
                }
                    */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
                        'model' => $model,
                    ];
                    $data[] = $msg;
                }
                
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
            } catch (ErrorException) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            } catch (Exception|Throwable) {
                // Ignore reflection invocation errors
>>>>>>> 492d6d3c (.)
=======
            } catch (Throwable $e) {
                // Gestione generica delle eccezioni che potrebbero verificarsi durante l'analisi delle relazioni
                // Log::debug(['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> e59778ae (.)
                        'model' => $model,
                    ];
                    $data[] = $msg;
                }
                
<<<<<<< HEAD
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
            } catch (ErrorException) {
<<<<<<< HEAD
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            } catch (Throwable $e) {
                // Gestione generica delle eccezioni che potrebbero verificarsi durante l'analisi delle relazioni
                // Log::debug(['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
            } catch (ErrorException) {
<<<<<<< HEAD
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
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
                        'model' => $model,
                    ];
                    $data[] = $msg;
                }
                
            } catch (ErrorException) {
<<<<<<< HEAD
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
                    */
            } catch (Throwable $e) {
                // Gestione generica delle eccezioni che potrebbero verificarsi durante l'analisi delle relazioni
                // Log::debug(['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
<<<<<<< HEAD
>>>>>>> 43d67f21 (.)
=======
            } catch (ErrorException) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
            } catch (ErrorException) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('removeQueryParams')) {
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('removeQueryParams')) {
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('removeQueryParams')) {
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('removeQueryParams')) {
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('removeQueryParams')) {
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('removeQueryParams')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('removeQueryParams')) {
>>>>>>> 5a14301c (.)
    function removeQueryParams(array $params = []): string
    {
        $url = url()->current(); // get the base URL - everything to the left of the "?"
        $query = request()->query(); // get the query parameters (what follows the "?")
        Assert::isArray($query);
        foreach ($params as $param) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $key = is_string($param) ? $param : (string) $param;
            unset($query[$key]); // loop through the array of parameters we wish to remove and unset the parameter from the query array
        }

        // 924    Parameter #1 $querydata of function http_build_query expects array|object, array|string given.
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            unset($query[$param]); // loop through the array of parameters we wish to remove and unset the parameter from the query array
        }

        // 924    Parameter #1 $querydata of function http_build_query expects array|object, array|string given.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> 0e51323 (.)
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> 43d67f21 (.)
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
=======
        return $query ? $url.'?'.http_build_query($query) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> 3fbbf1f5 (.)
=======
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> 43d67f21 (.)
=======
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        return $query ? ($url.'?'.http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> b7ea1cd1 (.)
=======
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
        return $query ? ($url . '?' . http_build_query($query)) : $url; // rebuild the URL with the remaining parameters, don't append the "?" if there aren't any query parameters left
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
if (! function_exists('addQueryParams')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
if (!function_exists('addQueryParams')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('addQueryParams')) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('addQueryParams')) {
=======
if (!function_exists('addQueryParams')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('addQueryParams')) {
>>>>>>> 5a14301c (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('addQueryParams')) {
=======
if (!function_exists('addQueryParams')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('addQueryParams')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('addQueryParams')) {
=======
if (!function_exists('addQueryParams')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('addQueryParams')) {
=======
if (!function_exists('addQueryParams')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('addQueryParams')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('addQueryParams')) {
>>>>>>> 5a14301c (.)
    function addQueryParams(array $params = []): string
    {
        $query = array_merge((array) request()->query(), $params); // merge the existing query parameters with the ones we want to add

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
        return url()->current().'?'.http_build_query($query); // rebuild the URL with the new parameters array
    }
}

if (! function_exists('isJson')) {
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
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
        return url()->current() . '?' . http_build_query($query); // rebuild the URL with the new parameters array
    }
}

if (!function_exists('isJson')) {
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
        return url()->current().'?'.http_build_query($query); // rebuild the URL with the new parameters array
    }
}

if (! function_exists('isJson')) {
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
        return url()->current().'?'.http_build_query($query); // rebuild the URL with the new parameters array
    }
}

if (! function_exists('isJson')) {
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
        if (! ($route instanceof Illuminate\Routing\Route)) {
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
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
        if (!($route instanceof Illuminate\Routing\Route)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> 21348520 (.)
=======
if (! function_exists('getExcerpt')) {
    function getExcerpt(string $str, int $length = 225): string
    {
        $cleaned = strip_tags(
            (string) preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $str),
            '<code>'
        );
        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated).'...'
            : $cleaned;
    }
}
*/
>>>>>>> ed734516 (.)
if (! function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
<<<<<<< HEAD
        if (! ($route instanceof Illuminate\Routing\Route)) {
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
        if (! $route instanceof Illuminate\Routing\Route) {
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
if (! function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
        if (! ($route instanceof Illuminate\Routing\Route)) {
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
            return [];
        }

        return $route->parameters();
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
=======
>>>>>>> d86d643a (.)
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> 5842a556 (.)
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('getRouteName')) {
    function getRouteName(): null|string
>>>>>>> 5a14301c (.)
    {
        // getRouteName();
        /**
         * @var Illuminate\Routing\Route|null
         */
        $route = request()->route();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
        if (! ($route instanceof Illuminate\Routing\Route)) {
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 0e51323 (.)
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 43d67f21 (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 5842a556 (.)
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!($route instanceof Illuminate\Routing\Route)) {
=======
        if (! $route instanceof Illuminate\Routing\Route) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 43d67f21 (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> b7ea1cd1 (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if (! ($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 16dc7ab0 (.)
=======
        if (!($route instanceof Illuminate\Routing\Route)) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '['.__LINE__.']['.__FILE__.']');
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
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '[' . __LINE__ . '][' . __FILE__ . ']');
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
if (! function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '['.__LINE__.']['.__FILE__.']');
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
if (! function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '['.__LINE__.']['.__FILE__.']');
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)

        $stringable = Str::of($file_path)
            ->after('/Modules/')
            ->before('/')
            ->lower();
        $info = pathinfo($file_path);
        $group = Str::snake($info['filename']);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $stringable.'::'.$group;
=======
        return $stringable . '::' . $group;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        return $stringable . '::' . $group;
>>>>>>> 3fbbf1f5 (.)
=======
        return $stringable.'::'.$group;
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
        return $stringable.'::'.$group;
=======
        return $stringable . '::' . $group;
>>>>>>> 0e51323 (.)
=======
        return $stringable . '::' . $group;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        return $stringable.'::'.$group;
>>>>>>> 43d67f21 (.)
=======
        return $stringable.'::'.$group;
=======
        return $stringable . '::' . $group;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return $stringable.'::'.$group;
>>>>>>> 5842a556 (.)
=======
        return $stringable . '::' . $group;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
if (! function_exists('getRouteAction')) {
    function getRouteAction(): string {
    }
}
*/

if (! function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        Assert::string($file_path = Str::replace('\\', '/', $file_path), '['.__LINE__.']['.__FILE__.']');

        $stringable = Str::of($file_path)->after('/Modules/')->before('/')->lower();
        $info = pathinfo($file_path);
        $group = Str::snake($info['filename']);

        return $stringable.'::'.$group;
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
        return $stringable.'::'.$group;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return $stringable.'::'.$group;
>>>>>>> 43d67f21 (.)
=======
        return $stringable.'::'.$group;
=======
        return $stringable . '::' . $group;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return $stringable.'::'.$group;
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        return $stringable.'::'.$group;
>>>>>>> b7ea1cd1 (.)
=======
        return $stringable.'::'.$group;
=======
        return $stringable . '::' . $group;
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        return $stringable.'::'.$group;
>>>>>>> 16dc7ab0 (.)
=======
        return $stringable . '::' . $group;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('is_active')) {
=======
if (!function_exists('is_active')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('is_active')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('is_active')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('is_active')) {
=======
if (!function_exists('is_active')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('is_active')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('is_active')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('is_active')) {
=======
if (!function_exists('is_active')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('is_active')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('is_active')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
    function is_iterable($var)
{
    return $var !== null
        && (is_array($var)
            || $var instanceof Traversable
            || $var instanceof Iterator
            || $var instanceof IteratorAggregate
            );
}
*/

if (! function_exists('is_active')) {
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
if (! function_exists('is_active')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('is_active')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('is_active')) {
=======
if (!function_exists('is_active')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('is_active')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('is_active')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('is_active')) {
=======
if (!function_exists('is_active')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('is_active')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('is_active')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(?string $markdown): ?string
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(null|string $markdown): null|string
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
if (! function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(?string $markdown): ?string
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
if (! function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(?string $markdown): ?string
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
    {
        return $markdown;

        // return app(App\Markdown\Converter::class)->toHtml($markdown);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('replace_links')) {
=======
if (!function_exists('replace_links')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('replace_links')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('replace_links')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('replace_links')) {
=======
if (!function_exists('replace_links')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('replace_links')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('replace_links')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('replace_links')) {
=======
if (! function_exists('replace_links')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('replace_links')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('replace_links')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('replace_links')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('replace_links')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('replace_links')) {
=======
if (!function_exists('replace_links')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('replace_links')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('replace_links')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('replace_links')) {
=======
if (!function_exists('replace_links')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('replace_links')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('replace_links')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('debugStack')) {
=======
if (!function_exists('debugStack')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('debugStack')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('debugStack')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('debugStack')) {
=======
if (!function_exists('debugStack')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('debugStack')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('debugStack')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('debugStack')) {
=======
if (! function_exists('debugStack')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('debugStack')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('debugStack')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('debugStack')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('debugStack')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('debugStack')) {
=======
if (!function_exists('debugStack')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('debugStack')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('debugStack')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('debugStack')) {
=======
if (!function_exists('debugStack')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('debugStack')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('debugStack')) {
>>>>>>> 5a14301c (.)
    /**
     * Undocumented function.
     */
    function debugStack(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
        if (! extension_loaded('xdebug')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        if (!extension_loaded('xdebug')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> 43d67f21 (.)
=======
        if (! extension_loaded('xdebug')) {
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> 5842a556 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 5a14301c (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
        if (! extension_loaded('xdebug')) {
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 0e51323 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> 43d67f21 (.)
=======
        if (! extension_loaded('xdebug')) {
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> b7ea1cd1 (.)
=======
        if (! extension_loaded('xdebug')) {
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> 16dc7ab0 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 5a14301c (.)
            throw new RuntimeException('XDebug must be installed to use this function');
        }

        if (
            function_exists('xdebug_set_filter') &&
                defined('XDEBUG_FILTER_TRACING') &&
                defined('XDEBUG_PATH_EXCLUDE')
        ) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
                '/../../vendor/',
            ]);
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
<<<<<<< HEAD
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> 43d67f21 (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> 472bd9dc (.)
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
>>>>>>> 0e51323 (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> b7ea1cd1 (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> 16dc7ab0 (.)
                '/../../vendor/']);
>>>>>>> 5a14301c (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> ca9324a4 (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__.
>>>>>>> 43d67f21 (.)
                '/../../vendor/']);
>>>>>>> 5a14301c (.)
=======
            xdebug_set_filter(constant('XDEBUG_FILTER_TRACING'), constant('XDEBUG_PATH_EXCLUDE'), [__DIR__ .
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
if (! function_exists('secondsToHms')) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('secondsToHms')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('secondsToHms')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('secondsToHms')) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('secondsToHms')) {
=======
if (!function_exists('secondsToHms')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('secondsToHms')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('secondsToHms')) {
=======
if (! function_exists('secondsToHms')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('secondsToHms')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('secondsToHms')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('secondsToHms')) {
=======
if (!function_exists('secondsToHms')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('secondsToHms')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('secondsToHms')) {
=======
if (!function_exists('secondsToHms')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('secondsToHms')) {
=======
if (!function_exists('secondsToHms')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('secondsToHms')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('secondsToHms')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
            $str .= ($hours < 9 ? ('0'.$hours) : $hours).':';
>>>>>>> ca9324a4 (.)
        }

        return $str.($minutes < 9 ? ('0'.$minutes) : $minutes).':'.round($seconds, $decimal);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (!function_exists('rowsToSql')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('rowsToSql')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
if (! function_exists('rowsToSql')) {
<<<<<<< HEAD
=======
=======
>>>>>>> a5dccfe (.)
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
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('rowsToSql')) {
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
            $str .= ($hours < 9 ? '0'.$hours : $hours).':';
        }

        return $str.(($minutes < 9 ? '0'.$minutes : $minutes).':'.round($seconds, $decimal));
    }
}

if (! function_exists('rowsToSql')) {
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
if (! function_exists('rowsToSql')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('rowsToSql')) {
>>>>>>> 43d67f21 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
            $str .= ($hours < 9 ? ('0' . $hours) : $hours) . ':';
        }

        return $str . ($minutes < 9 ? ('0' . $minutes) : $minutes) . ':' . round($seconds, $decimal);
    }
}

if (!function_exists('rowsToSql')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('rowsToSql')) {
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('rowsToSql')) {
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
if (! function_exists('str_limit')) {
=======
if (!function_exists('str_limit')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('str_limit')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('str_limit')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('str_limit')) {
=======
if (!function_exists('str_limit')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('str_limit')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('str_limit')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('str_limit')) {
=======
if (!function_exists('str_limit')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('str_limit')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('str_limit')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
if (! function_exists('getServerName')) {
    function getServerName(): string
    {
        $default = config('app.url', 'localhost');
        if (! is_string($default)) {
            $default = 'localhost';
        }
        $default = Str::after($default, '//');

        $server_name = $default;
        if (isset($_SERVER['SERVER_NAME']) && '127.0.0.1' !== $_SERVER['SERVER_NAME']) {
            $server_name = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'];
        }
        if (! is_string($server_name)) {
            $server_name = $default;
        }
        $server_name = Str::of($server_name)->replace('www.', '')->toString();

        return $server_name;
    }
}
*/
/*
if (! function_exists('getLang')) {
    function getLang(): string {
        return '/en/'; //per xstream
    }
}
*/

if (! function_exists('str_limit')) {
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
if (! function_exists('str_limit')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('str_limit')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('str_limit')) {
=======
if (!function_exists('str_limit')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('str_limit')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('str_limit')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('str_limit')) {
=======
if (!function_exists('str_limit')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('str_limit')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('str_limit')) {
>>>>>>> 5a14301c (.)
    function str_limit(string $str, int $limit): string
    {
        return Str::limit($str, $limit); // per xstream
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('inArrayBetween')) {
    function inArrayBetween(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('inArrayBetween')) {
    function inArrayBetween(
        int $curr,
        array $data,
        null|string $field_start = 'start',
        null|string $field_end = 'end',
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
if (! function_exists('inArrayBetween')) {
    function inArrayBetween(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
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
if (! function_exists('inArrayBetween')) {
    function inArrayBetween(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        null|string $field_start = 'start',
        null|string $field_end = 'end',
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
if (! function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
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
if (! function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(
        int $curr,
        array $data,
        ?string $field_start = 'start',
        ?string $field_end = 'end',
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('is_base64')) {
=======
if (!function_exists('is_base64')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('is_base64')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('is_base64')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('is_base64')) {
=======
if (!function_exists('is_base64')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('is_base64')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('is_base64')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('is_base64')) {
=======
if (! function_exists('is_base64')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('is_base64')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('is_base64')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('is_base64')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('is_base64')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('is_base64')) {
=======
if (!function_exists('is_base64')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('is_base64')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('is_base64')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('is_base64')) {
=======
if (!function_exists('is_base64')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('is_base64')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('is_base64')) {
>>>>>>> 5a14301c (.)
    function is_base64(string $s): bool
    {
        return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s);
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('recursive_unset')) {
=======
if (!function_exists('recursive_unset')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('recursive_unset')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('recursive_unset')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('recursive_unset')) {
=======
if (!function_exists('recursive_unset')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('recursive_unset')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('recursive_unset')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('recursive_unset')) {
=======
if (! function_exists('recursive_unset')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('recursive_unset')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
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
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('recursive_unset')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('recursive_unset')) {
=======
if (!function_exists('recursive_unset')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('recursive_unset')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('recursive_unset')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('recursive_unset')) {
=======
if (!function_exists('recursive_unset')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('recursive_unset')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('recursive_unset')) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
if (! function_exists('profile')) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
if (!function_exists('profile')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
if (!function_exists('profile')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('profile')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
if (!function_exists('profile')) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
if (! function_exists('profile')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('profile')) {
=======
if (!function_exists('profile')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('profile')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('profile')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('profile')) {
=======
if (! function_exists('profile')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('profile')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('profile')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('profile')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('profile')) {
=======
if (!function_exists('profile')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('profile')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('profile')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('profile')) {
=======
if (!function_exists('profile')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('profile')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('profile')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('profile')) {
=======
if (!function_exists('profile')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('profile')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('profile')) {
>>>>>>> 5a14301c (.)
    function profile(): Model|ProfileContract
    {
        $xotData = XotData::make();

        return $xotData->getProfileModel();
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
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
if (! function_exists('cssInLine')) {
=======
if (!function_exists('cssInLine')) {
>>>>>>> 0e51323 (.)
=======
if (!function_exists('cssInLine')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
if (! function_exists('cssInLine')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('cssInLine')) {
=======
if (!function_exists('cssInLine')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('cssInLine')) {
>>>>>>> 5842a556 (.)
=======
if (!function_exists('cssInLine')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
if (!function_exists('cssInLine')) {
=======
if (! function_exists('cssInLine')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
if (!function_exists('cssInLine')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
if (!function_exists('cssInLine')) {
>>>>>>> 3fbbf1f5 (.)
=======
if (! function_exists('cssInLine')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
if (! function_exists('cssInLine')) {
>>>>>>> 43d67f21 (.)
=======
if (! function_exists('cssInLine')) {
=======
if (!function_exists('cssInLine')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
if (! function_exists('cssInLine')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
if (! function_exists('cssInLine')) {
>>>>>>> b7ea1cd1 (.)
=======
if (! function_exists('cssInLine')) {
=======
if (!function_exists('cssInLine')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
if (! function_exists('cssInLine')) {
>>>>>>> 16dc7ab0 (.)
=======
if (!function_exists('cssInLine')) {
>>>>>>> 5a14301c (.)
    function cssInLine(string $file): string
    {
        return File::get(app(AssetPathAction::class)->execute($file));
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
if (! function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): ?string
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
if (!function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
if (! function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): ?string
<<<<<<< HEAD
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
if (! function_exists('authId')) {
    /**
     * Get the current authenticated user ID from Filament or Laravel auth.
     */
    function authId(): ?string
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
 *
 * @param  T|null  $object  L'oggetto da controllare
 * @param  string  $method  Il nome del metodo da chiamare
 * @param  mixed  ...$args  Gli argomenti da passare al metodo
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 */
function safe_object_call($object, string $method, mixed ...$args): mixed
{
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
 * @param T|null $object L'oggetto da controllare
 * @param string $method Il nome del metodo da chiamare
 * @param mixed ...$args Gli argomenti da passare al metodo
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
 * @param T|null $object L'oggetto da controllare
 * @param string $method Il nome del metodo da chiamare
 * @param mixed ...$args Gli argomenti da passare al metodo
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
 * @param T|null $object L'oggetto da controllare
 * @param string $method Il nome del metodo da chiamare
 * @param mixed ...$args Gli argomenti da passare al metodo
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
 * @param T|null $object L'oggetto da controllare
 * @param string $method Il nome del metodo da chiamare
 * @param mixed ...$args Gli argomenti da passare al metodo
>>>>>>> 5a14301c (.)
 * @return mixed|null
 */
function safe_object_call($object, string $method, ...$args)
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
    if (! is_object($object)) {
        return null;
    }

    if (! method_exists($object, $method)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
function safe_object_call($object, string $method, ...$args) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
function safe_object_call($object, string $method, ...$args)
{
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
    if (!is_object($object)) {
        return null;
    }

    if (!method_exists($object, $method)) {
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
    if (! is_object($object)) {
        return null;
    }

    if (! method_exists($object, $method)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
>>>>>>> 6cba4fe (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
        return null;
    }

    return $object->$method(...$args);
}
