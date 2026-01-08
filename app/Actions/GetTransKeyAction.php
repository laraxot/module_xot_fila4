<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetTransKeyAction
{
    use QueueableAction;

    /**
     * Generate a translation key based on the class name.
     */
    public function execute(string $class = ''): string
    {
        $class0 = $class;
        // If no class is provided, try to get it from the backtrace
        if ($class === '') {
            /** @var list<array{function: string, line?: int, file?: string, class?: class-string, type?: '->'|'::', args?: list<mixed>, object?: object}> $backtrace PHPStan knows this is always array */
            $backtrace = debug_backtrace();
            $class = Arr::get($backtrace, '1.class');
            Assert::string($class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
        if ('' === $class) {
            $backtrace = debug_backtrace();
            Assert::isArray($backtrace);
            $class = Arr::get($backtrace, '1.class');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
            Assert::string($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            Assert::string($class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
            Assert::string($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
            Assert::string($class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            Assert::string($class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            Assert::string($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
            Assert::string($class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            Assert::string($class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
            Assert::string($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
            Assert::string($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            Assert::string($class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        }

        $arr = explode('\\', $class);

        // Handle cases where the provided class is not in the "Modules" namespace
        if ($arr[0] !== 'Modules') {
            $backtrace = array_slice(debug_backtrace(), 2);
            $res = Arr::first(
                $backtrace,
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
                fn (array $item): bool => (isset($item['object']) && explode('\\', get_class($item['object']))[0] === 'Modules'),
=======
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
                fn (array $item): bool => (
                    isset($item['object']) && explode('\\', get_class($item['object']))[0] === 'Modules'
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                fn(array $item): bool => (
                    isset($item['object']) && 'Modules' === explode('\\', get_class($item['object']))[0]
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
                ),
>>>>>>> ab8cc3f3 (.)
            );

            if ($res === null || ! isset($res['object'])) {
                $page = Arr::get(debug_backtrace(), '0.args.0');
<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($page, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
        if ('Modules' !== $arr[0]) {
            $backtrace = array_slice(debug_backtrace(), 2);
            $res = Arr::first(
                $backtrace,
                fn(array $item): bool => (
                    isset($item['object']) && 'Modules' === explode('\\', get_class($item['object']))[0]
                ),
            );

            if (null === $res || !isset($res['object'])) {
                $page = Arr::get(debug_backtrace(), '0.args.0');
                Assert::string($page, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
                function (array $item): bool {
                    return isset($item['object']) && 'Modules' === explode('\\', get_class($item['object']))[0];
                }
=======
                fn(array $item): bool => (
                    isset($item['object']) && 'Modules' === explode('\\', get_class($item['object']))[0]
                ),
>>>>>>> b93ef594b4 (.)
            );

            if (null === $res || !isset($res['object'])) {
                $page = Arr::get(debug_backtrace(), '0.args.0');
<<<<<<< HEAD
                Assert::string($page);
>>>>>>> a12f125f4a (.)
=======
                Assert::string($page, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
                Assert::string($page, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
                Assert::string($page, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
                function (array $item): bool {
                    return isset($item['object']) && 'Modules' === explode('\\', get_class($item['object']))[0];
                }
            );

            if (null === $res || ! isset($res['object'])) {
                $page = Arr::get(debug_backtrace(), '0.args.0');
                Assert::string($page);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                Assert::string($page, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                $main_module = XotData::make()->main_module;
                $main_module_low = mb_strtolower($main_module);
                $page_arr = explode('\\', $page);
                $page_arr_count = count($page_arr);
                $page_arr_last = $page_arr[$page_arr_count - 1];
                $page_arr_last_snake = Str::of($page_arr_last)->snake()->toString();
<<<<<<< HEAD

                return $main_module_low.'::'.$page_arr_last_snake;
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

                return $main_module_low.'::'.$page_arr_last_snake;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
                $tmp = $main_module_low . '::' . $page_arr_last_snake;
=======
                $tmp = $main_module_low.'::'.$page_arr_last_snake;
=======
<<<<<<< HEAD
<<<<<<< HEAD
                $tmp = $main_module_low . '::' . $page_arr_last_snake;
=======
                $tmp = $main_module_low.'::'.$page_arr_last_snake;
>>>>>>> f1d4085 (.)
=======
                $tmp = $main_module_low . '::' . $page_arr_last_snake;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
                $tmp = $main_module_low . '::' . $page_arr_last_snake;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                $tmp = $main_module_low.'::'.$page_arr_last_snake;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

                return $tmp;
>>>>>>> 5a14301c (.)
=======
                $tmp = $main_module_low . '::' . $page_arr_last_snake;

                return $tmp;
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
            }

            $class = get_class($res['object']);
            $arr = explode('\\', $class);
        }

        $module = $arr[1];
        $module_low = mb_strtolower($module);
        $c = count($arr);

        $type = Str::singular($arr[$c - 2]);
        $class = $arr[$c - 1];

        // If the class name ends with the type, remove the suffix
        if (Str::endsWith($class, $type)) {
            $class = Str::beforeLast($class, $type);
<<<<<<< HEAD
<<<<<<< HEAD
            if (in_array($type, ['RelationManager'], strict: true)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (in_array($type, ['RelationManager'], strict: true)) {
=======
            if (in_array($type, ['RelationManager'])) {
>>>>>>> f1d4085 (.)
=======
            if (in_array($type, ['RelationManager'], strict: true)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            if (in_array($type, ['RelationManager'], strict: true)) {
>>>>>>> 285375c74 (.)
                $class = Str::of($class)->singular()->toString();
            }
        }

        $class_snake = Str::of($class)->snake()->toString();
        $arr = explode('_', $class_snake);
        $first = $arr[0];
        $last = $arr[count($arr) - 1];
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        if (in_array($first, ['dashboard', 'list', 'get', 'manage', 'edit', 'view'], strict: true)) {
            $class_snake = implode('_', array_slice($arr, 1));
        }
        if (in_array($last, ['action'], strict: true)) {
            $class_snake = Str::beforeLast($class_snake, '_'.$last);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 285375c74 (.)
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
>>>>>>> ca9324a4 (.)
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
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
        if (in_array($first, ['dashboard', 'list', 'get', 'manage'], strict: true)) {
            $class_snake = implode('_', array_slice($arr, 1));
        }
        if (in_array($last, ['action'], strict: true)) {
            $class_snake = Str::beforeLast($class_snake, '_' . $last);
<<<<<<< HEAD
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
        if (in_array($first, ['dashboard', 'list', 'get', 'manage'])) {
            $class_snake = implode('_', array_slice($arr, 1));
        }
        if (in_array($last, ['action'])) {
            $class_snake = Str::beforeLast($class_snake, '_'.$last);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        if (in_array($first, ['dashboard', 'list', 'get', 'manage'], strict: true)) {
            $class_snake = implode('_', array_slice($arr, 1));
        }
        if (in_array($last, ['action'], strict: true)) {
            $class_snake = Str::beforeLast($class_snake, '_' . $last);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        }

        if (Str::endsWith($class_snake, 'form_schema')) {
            $class_snake = Str::beforeLast($class_snake, '_form_schema');
        }

        // Handle cases where the class starts with "list_"
<<<<<<< HEAD
<<<<<<< HEAD
        if (in_array($first, ['list'], strict: true)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (in_array($first, ['list'], strict: true)) {
=======
        if (in_array($first, ['list'])) {
>>>>>>> f1d4085 (.)
=======
        if (in_array($first, ['list'], strict: true)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (in_array($first, ['list'], strict: true)) {
>>>>>>> 285375c74 (.)
            $class_snake = Str::of($class_snake)
                // ->after('list_')
                ->singular()
                ->toString();
        }

<<<<<<< HEAD
        return $module_low.'::'.$class_snake;
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
        return $module_low.'::'.$class_snake;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        $tmp = $module_low . '::' . $class_snake;
=======
        $tmp = $module_low.'::'.$class_snake;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $tmp = $module_low . '::' . $class_snake;
=======
        $tmp = $module_low.'::'.$class_snake;
>>>>>>> f1d4085 (.)
=======
        $tmp = $module_low . '::' . $class_snake;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
        $tmp = $module_low . '::' . $class_snake;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $tmp = $module_low.'::'.$class_snake;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

        return $tmp;
>>>>>>> 5a14301c (.)
=======
        $tmp = $module_low . '::' . $class_snake;

        return $tmp;
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
    }
}
