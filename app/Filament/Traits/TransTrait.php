<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Translation\Translator;
use Exception;
=======
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
>>>>>>> 5a14301c (.)
=======
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
=======
<<<<<<< HEAD
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
>>>>>>> ca9324a4 (.)
=======
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;
<<<<<<< HEAD
<<<<<<< HEAD
use TypeError;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Webmozart\Assert\Assert;

trait TransTrait
{
    /**
     * Get translation for a given key.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, bool|float|int|string|null>  $params
     *
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
     * @param array<string, bool|float|int|string|null> $params
>>>>>>> 5a14301c (.)
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false, array $params = []): string
    {
        $tmp = static::getKeyTrans($key);
<<<<<<< HEAD
        /** @var array<string, mixed>|Translator|string $res */
=======
        /** @var array|Translator|string $res */
>>>>>>> 5a14301c (.)
        $res = trans($tmp, $params);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
<<<<<<< HEAD
<<<<<<< HEAD
                throw new Exception('['.__LINE__.']['.class_basename(self::class).']');
=======
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
     * @param array<string, bool|float|int|string|null> $params
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string, bool|float|int|string|null> $params
>>>>>>> 5a14301c (.)
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false, array $params = []): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array|Translator|string $res */
        $res = trans($tmp, $params);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
<<<<<<< HEAD
<<<<<<< HEAD
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> a12f125f4a (.)
=======
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> b93ef594b4 (.)
=======
     * @throws \Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array|\Illuminate\Contracts\Translation\Translator|string $res */
        $res = trans($tmp);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> 5a14301c (.)
            }

            return $res;
        }

        if (is_array($res)) {
            $first = current($res);
            if (is_string($first) || is_numeric($first)) {
                return is_string($first) ? $first : ((string) $first);
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'fix:'.$tmp;
=======
        return 'fix:' . $tmp;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        return 'fix:' . $tmp;
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                return is_string($first) ? $first : (string) $first;
            }
        }

        return 'fix:'.$tmp;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                return is_string($first) ? $first : ((string) $first);
            }
        }

        return 'fix:' . $tmp;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return 'fix:' . $tmp;
>>>>>>> 5a14301c (.)
    }

    /**
     * Get translation key for a given key.
     */
    public static function getKeyTrans(string $key): string
    {
        /** @var string */
        $transKey = app(GetTransKeyAction::class)->execute(static::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $transKey.'.'.$key;
=======
        $key = $transKey . '.' . $key;
>>>>>>> 5a14301c (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 3fbbf1f5 (.)
=======
        $key = $transKey . '.' . $key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> a12f125f4a (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> b93ef594b4 (.)
=======
        $key = $transKey.'.'.$key;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> ca9324a4 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 5a14301c (.)
        $key = Str::of($key)->replace('.cluster.pages.', '.')->toString();
        if (Str::startsWith($key, 'edit_')) {
            $key = Str::after($key, 'edit_');
        }
        if (Str::endsWith($key, '_widget')) {
            $key = Str::beforeLast($key, '_widget');
        }

        return $key;
    }

    /**
     * Get translation key for a given function name.
     */
    public static function getKeyTransFunc(string $func): string
    {
        $key = Str::of($func)
            ->after('get')
            ->snake()
            ->replace('_', '.')
            ->toString();
        /** @var string */
        $transKey = app(GetTransKeyAction::class)->execute(static::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $transKey.'.'.$key;
=======
        $key = $transKey . '.' . $key;
>>>>>>> 5a14301c (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 3fbbf1f5 (.)
=======
        $key = $transKey . '.' . $key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> a12f125f4a (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> b93ef594b4 (.)
=======
        $key = $transKey.'.'.$key;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> ca9324a4 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 5a14301c (.)
        $key = Str::of($key)->replace('.cluster.pages.', '.')->toString();
        $key = Str::of($key)->replace('::edit_', '::')->toString();

        return $key;
    }

    /**
     * Get translation key for a given class name.
     */
    public static function getKeyTransClass(string $class): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<int, string> $piece */
        $piece = Str::of($class)->explode('\\')->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var string $type */
        $type = $piece[2] ?? '';
        Assert::string($type, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        $module = Str::of($class)->between('Modules\\', '\\'.$type.'\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\'.$type.'\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();

        return $module_low.'::'.$model_snake;
=======
        $piece = Str::of($class)->explode('\\')->toArray();
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        $piece = Str::of($class)->explode('\\')->toArray();
>>>>>>> 5a14301c (.)
        Assert::string($type = $piece[2], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\' . $type . '\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\' . $type . '\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();
        $key = $module_low . '::' . $model_snake;

        return $key;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    }

    /**
     * Get translation for a given class name.
     */
    public static function transClass(string $class, string $key): string
    {
        $class_key = static::getKeyTransClass($class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $key_full = $class_key.'.'.$key;
        /** @var array<string, mixed>|Translator|string $result */
        $result = trans($key_full);

        return is_string($result) ? $result : $key_full;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
>>>>>>> 5a14301c (.)
=======
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
>>>>>>> 5a14301c (.)
    }

    /**
     * Get translation for a given function name.
     */
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
    {
        $key = static::getKeyTransFunc($func);
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var string|array<int|string, mixed>|Translator|null $trans */
        $trans = null;

        try {
            /** @var array<string, mixed>|Translator|string $trans */
=======
=======
>>>>>>> 5a14301c (.)
        /** @var string|array<int|string,mixed>|null */
        $trans = null;

        try {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            $trans = trans($key);
        } catch (TypeError $e) {
            dddx([
                'e' => $e,
                'key' => $key,
            ]);
        }

        if ($key === $trans) {
            $group = Str::of($key)->before('.')->toString();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $item = Str::of($key)->after($group.'.')->toString();
            /** @var array<string, mixed>|Translator|string $group_arr */
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                /** @var mixed $transValue */
                $transValue = Arr::get($group_arr, $item);
                if (is_string($transValue) || is_numeric($transValue) || is_array($transValue)) {
                    $trans = $transValue;
                }
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
            $item = Str::of($key)->after($group . '.')->toString();
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                $trans = Arr::get($group_arr, $item);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            }
        }
        if (is_numeric($trans)) {
            return strval($trans);
        }

        if (is_array($trans)) {
            $first = current($trans);
            if (is_string($first) || is_numeric($first)) {
                return is_string($first) ? $first : ((string) $first);
            }
        }

        if (is_string($trans)) {
            if ($trans === $key) {
                $newTrans = Str::of($key)
                    ->between('::', '.')
                    ->replace('_', ' ')
                    ->toString();
                app(SaveTransAction::class)->execute($key, $newTrans);

                return $newTrans;
            }

            return $trans;
        }

        if ($trans === null) {
            $newTrans = Str::of($key)
                ->between('::', '.')
                ->replace('_', ' ')
                ->toString();
            app(SaveTransAction::class)->execute($key, $newTrans);

            return $newTrans;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'fix:'.$key;
=======
        return 'fix:' . $key;
>>>>>>> 5a14301c (.)
=======
        return 'fix:' . $key;
>>>>>>> 3fbbf1f5 (.)
=======
        return 'fix:' . $key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'fix:' . $key;
=======
        return 'fix:'.$key;
>>>>>>> a12f125f4a (.)
=======
        return 'fix:' . $key;
>>>>>>> b93ef594b4 (.)
=======
        return 'fix:'.$key;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return 'fix:' . $key;
>>>>>>> ca9324a4 (.)
=======
        return 'fix:' . $key;
>>>>>>> 5a14301c (.)
    }

    /**
     * Get a translation according to an integer value.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, bool|float|int|string|null>  $replace
     */
    protected function transChoice(string $key, int $number, array $replace = []): string
    {
        /** @var string $result */
        $result = trans_choice($key, $number, $replace);

=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
     * @param array<string, bool|float|int|string|null> $replace
     */
    protected function transChoice(string $key, int $number, array $replace = []): string
    {
        $result = trans_choice($key, $number, $replace);
        //@phpstan-ignore-next-line
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return is_string($result) ? $result : $key;
    }
}
