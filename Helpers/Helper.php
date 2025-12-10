<?php

declare(strict_types=1);

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Services\ArrayService;
use Modules\Xot\Services\ModuleService;
use Nwidart\Modules\Facades\Module;
use Webmozart\Assert\Assert;

if (! function_exists('isRunningTestBench')) {
    function isRunningTestBench(): bool
    {
        $path = app(FixPathAction::class)->execute('\vendor\orchestra\testbench-core\laravel');
        $base = app(FixPathAction::class)->execute(base_path());

        return Str::endsWith($base, $path);
    }
}

if (! function_exists('snake_case')) {
    function snake_case(string $str): string
    {
        return Str::snake($str);
    }
}

if (! function_exists('str_slug')) {
    function str_slug(string $str): string
    {
        return Str::slug($str);
    }
}

if (! function_exists('str_singular')) {
    function str_singular(string $str): string
    {
        return Str::singular($str);
    }
}

if (! function_exists('starts_with')) {
    function starts_with(string $str, string $str1): bool
    {
        return Str::startsWith($str, $str1);
    }
}

if (! function_exists('ends_with')) {
    function ends_with(string $str, string $str1): bool
    {
        return Str::endsWith($str, $str1);
    }
}

if (! function_exists('str_contains')) {
    function str_contains(string $str, string $str1): bool
    {
        return Str::contains($str, $str1);
    }
}

if (! function_exists('hex2rgba')) {
    function hex2rgba(string $color, float $opacity = -1.0): string
    {
        $default = 'rgb(0,0,0)';

        if (empty($color)) {
            return $default;
        }

        if ('#' === $color[0]) {
            $color = mb_substr($color, 1);
        }

        if (6 === mb_strlen($color)) {
            $hex = [$color[0].$color[1], $color[2].$color[3], $color[4].$color[5]];
        } elseif (3 === mb_strlen($color)) {
            $hex = [$color[0].$color[0], $color[1].$color[1], $color[2].$color[2]];
        } else {
            return $default;
        }

        $rgb = array_map('hexdec', $hex);

        if (-1.0 !== $opacity) {
            if ($opacity < 0 || $opacity > 1) {
                $opacity = 1.0;
            }

            return 'rgba('.implode(',', $rgb).','.$opacity.')';
        }

        return 'rgb('.implode(',', $rgb).')';
    }
}

if (! function_exists('dddx')) {
    function dddx(mixed $params): void
    {
        $tmp = debug_backtrace();
        $file = $tmp[0]['file'] ?? 'file-unknown';
        $file = str_replace('/', DIRECTORY_SEPARATOR, $file);

        Assert::string($doc_root = $_SERVER['DOCUMENT_ROOT'], __FILE__.':'.__LINE__.' - Helper');
        $doc_root = str_replace('/', DIRECTORY_SEPARATOR, $doc_root);

        $dir_piece = explode(DIRECTORY_SEPARATOR, __DIR__);
        $dir_piece = array_slice($dir_piece, 0, -6);

        $dir_copy = implode(DIRECTORY_SEPARATOR, $dir_piece);
        $file = str_replace($dir_copy, $doc_root, $file);

        if (! defined('LARAVEL_START')) {
            define('LARAVEL_START', microtime(true));
        }

        $start = LARAVEL_START;
        $data = [
            '_' => $params,
            'line' => $tmp[0]['line'] ?? 'line-unknown',
            'file' => app(FixPathAction::class)->execute($file),
            'time' => microtime(true) - $start,
            'memory_taken' => round(memory_get_peak_usage() / (1024 * 1024), 2).' MB',
        ];

        if (
            File::exists($data['file']) &&
            Str::startsWith(
                $data['file'],
                app(FixPathAction::class)->execute(storage_path('framework/views'))
            )
        ) {
            $content = File::get($data['file']);
            $data['view_file'] = app(FixPathAction::class)
                ->execute(Str::between($content, '/**PATH ', ' ENDPATH**/'));
        }

        dd($data);
    }
}

if (! function_exists('getRouteName')) {
    function getRouteName(): ?string
    {
        return Route::currentRouteName();
    }
}

if (! function_exists('getRouteAction')) {
    function getRouteAction(): string
    {
        $route = Route::current();
        if (! $route) {
            return '';
        }

        return $route->getActionName();
    }
}

if (! function_exists('getModTradFilepath')) {
    function getModTradFilepath(string $file_path): string
    {
        $arr = explode(DIRECTORY_SEPARATOR, $file_path);
        $module = $arr[count($arr) - 4];
        $lang = $arr[count($arr) - 2];
        $file = $arr[count($arr) - 1];
        $file = str_replace('.php', '', $file);

        return $module.'::'.$file;
    }
}

if (! function_exists('is_iterable')) {
    /**
     * @param mixed $var
     */
    function is_iterable($var): bool
    {
        return is_array($var) || $var instanceof Traversable;
    }
}

if (! function_exists('is_active')) {
    function is_active(array $routes): bool
    {
        foreach ($routes as $route) {
            if (Request::is($route)) {
                return true;
            }
        }

        return false;
    }
}

if (! function_exists('md_to_html')) {
    function md_to_html(?string $markdown): ?string
    {
        return Str::markdown($markdown ?? '');
    }
}

if (! function_exists('replace_links')) {
    function replace_links(string $markdown): string
    {
        return $markdown;
    }
}

if (! function_exists('debugStack')) {
    function debugStack(): void
    {
        Log::info(print_r(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS), true));
    }
}

if (! function_exists('secondsToHms')) {
    function secondsToHms(float $seconds, int $decimal = 0): string
    {
        return gmdate('H:i:s', (int) $seconds);
    }
}

if (! function_exists('rowsToSql')) {
    function rowsToSql(Builder|Relation $query): string
    {
        return $query->toSql();
    }
}

if (! function_exists('getServerName')) {
    function getServerName(): string
    {
        return $_SERVER['SERVER_NAME'] ?? 'localhost';
    }
}

if (! function_exists('getLang')) {
    function getLang(): string
    {
        return app()->getLocale();
    }
}

if (! function_exists('str_limit')) {
    function str_limit(string $value, int $limit = 100, string $end = '...'): string
    {
        return Str::limit($value, $limit, $end);
    }
}

if (! function_exists('inArrayBetween')) {
    function inArrayBetween(array $array, mixed $start, mixed $end): array
    {
        $result = [];
        $recording = false;

        foreach ($array as $item) {
            if ($item == $start) {
                $recording = true;
            }
            if ($recording) {
                $result[] = $item;
            }
            if ($item == $end) {
                $recording = false;
            }
        }

        return $result;
    }
}

if (! function_exists('inArrayBetweenKey')) {
    function inArrayBetweenKey(array $array, mixed $startKey, mixed $endKey): array
    {
        $result = [];
        $recording = false;

        foreach ($array as $key => $item) {
            if ($key == $startKey) {
                $recording = true;
            }
            if ($recording) {
                $result[$key] = $item;
            }
            if ($key == $endKey) {
                $recording = false;
            }
        }

        return $result;
    }
}

if (! function_exists('is_base64')) {
    function is_base64(string $string): bool
    {
        $decoded = base64_decode($string, true);

        // Check if there is no invalid character in string
        if (! preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $string)) {
            return false;
        }

        // Decode the string in strict mode and check the results
        if (! $decoded) {
            return false;
        }

        // Encode the string again
        if (base64_encode($decoded) != $string) {
            return false;
        }

        return true;
    }
}

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

if (! function_exists('profile')) {
    function profile(): ?ProfileContract
    {
        // Implementation might depend on user session or XotData
        // Placeholder for now as I verify the main logic
        return XotData::make()->getProfile();
    }
}

if (! function_exists('cssInLine')) {
    function cssInLine(string $file): string
    {
        return File::exists($file) ? File::get($file) : '';
    }
}

if (! function_exists('authId')) {
    function authId(): ?string
    {
        return auth()->id() ? (string) auth()->id() : null;
    }
}

if (! function_exists('safe_object_call')) {
    function safe_object_call($object, string $method, ...$args)
    {
        if (is_object($object) && method_exists($object, $method)) {
            return $object->$method(...$args);
        }

        return null;
    }
}
