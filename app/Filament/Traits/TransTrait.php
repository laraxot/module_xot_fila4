<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

use Exception;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;
use TypeError;
use Webmozart\Assert\Assert;

trait TransTrait
{
    /**
     * Get translation for a given key.
     *
<<<<<<< HEAD
     * @param  array<string, bool|float|int|string|null>  $params
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, bool|float|int|string|null>  $params
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
     * @param array<string, bool|float|int|string|null> $params
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
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
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
<<<<<<< HEAD
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array|Translator|string $res */
        $res = trans($tmp);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            }

            return $res;
        }

        if (is_array($res)) {
            $first = current($res);
            if (is_string($first) || is_numeric($first)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
                return is_string($first) ? $first : ((string) $first);
            }
        }

<<<<<<< HEAD
        return 'fix:'.$tmp;
=======
<<<<<<< HEAD
        return 'fix:'.$tmp;
=======
        return 'fix:' . $tmp;
<<<<<<< HEAD
<<<<<<< HEAD
=======
                return is_string($first) ? $first : (string) $first;
            }
        }

        return 'fix:'.$tmp;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    }

    /**
     * Get translation key for a given key.
     */
    public static function getKeyTrans(string $key): string
    {
        /** @var string */
        $transKey = app(GetTransKeyAction::class)->execute(static::class);

<<<<<<< HEAD
        $key = $transKey.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $transKey.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> f1d4085 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
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
        $key = $transKey.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $transKey.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> f1d4085 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        $key = Str::of($key)->replace('.cluster.pages.', '.')->toString();
        $key = Str::of($key)->replace('::edit_', '::')->toString();

        return $key;
    }

    /**
     * Get translation key for a given class name.
     */
    public static function getKeyTransClass(string $class): string
    {
        $piece = Str::of($class)->explode('\\')->toArray();
<<<<<<< HEAD
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\'.$type.'\\')->toString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        Assert::string($type = $piece[2], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\' . $type . '\\')->toString();
>>>>>>> a6ef6dc7 (.)

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\'.$type.'\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();
<<<<<<< HEAD
        $key = $module_low.'::'.$model_snake;
=======
        $key = $module_low . '::' . $model_snake;
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::string($type = $piece[2]);
>>>>>>> d2b0a27 (.)
        $module = Str::of($class)->between('Modules\\', '\\'.$type.'\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\'.$type.'\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();
        $key = $module_low.'::'.$model_snake;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

        return $key;
    }

    /**
     * Get translation for a given class name.
     */
    public static function transClass(string $class, string $key): string
    {
        $class_key = static::getKeyTransClass($class);
<<<<<<< HEAD
        $key_full = $class_key.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $key_full = $class_key.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $key_full = $class_key . '.' . $key;
=======
        $key_full = $class_key.'.'.$key;
>>>>>>> f1d4085 (.)
=======
        $key_full = $class_key . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $key_full = $class_key . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

        return trans($key_full);
    }

    /**
     * Get translation for a given function name.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
=======
    public static function transFunc(string $func, bool $exceptionIfNotExist = false): string
>>>>>>> f1d4085 (.)
=======
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
>>>>>>> 300ef70 (.)
    {
        $key = static::getKeyTransFunc($func);
        /** @var string|array<int|string,mixed>|null */
        $trans = null;

        try {
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
            $item = Str::of($key)->after($group.'.')->toString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $item = Str::of($key)->after($group.'.')->toString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $item = Str::of($key)->after($group . '.')->toString();
=======
            $item = Str::of($key)->after($group.'.')->toString();
>>>>>>> f1d4085 (.)
=======
            $item = Str::of($key)->after($group . '.')->toString();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            $item = Str::of($key)->after($group . '.')->toString();
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                $trans = Arr::get($group_arr, $item);
            }
        }
        if (is_numeric($trans)) {
            return strval($trans);
        }

        if (is_array($trans)) {
            $first = current($trans);
            if (is_string($first) || is_numeric($first)) {
<<<<<<< HEAD
<<<<<<< HEAD
                return is_string($first) ? $first : ((string) $first);
=======
<<<<<<< HEAD
<<<<<<< HEAD
                return is_string($first) ? $first : ((string) $first);
=======
                return is_string($first) ? $first : (string) $first;
>>>>>>> f1d4085 (.)
=======
                return is_string($first) ? $first : ((string) $first);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                return is_string($first) ? $first : ((string) $first);
>>>>>>> 300ef70 (.)
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
        return 'fix:'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return 'fix:'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return 'fix:' . $key;
=======
        return 'fix:'.$key;
>>>>>>> f1d4085 (.)
=======
        return 'fix:' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return 'fix:' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    }

    /**
     * Get a translation according to an integer value.
     *
<<<<<<< HEAD
     * @param  array<string, bool|float|int|string|null>  $replace
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, bool|float|int|string|null>  $replace
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, bool|float|int|string|null> $replace
=======
     * @param  array<string, mixed>  $replace
>>>>>>> f1d4085 (.)
=======
     * @param array<string, bool|float|int|string|null> $replace
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param array<string, bool|float|int|string|null> $replace
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
     */
    protected function transChoice(string $key, int $number, array $replace = []): string
    {
        $result = trans_choice($key, $number, $replace);

        // @phpstan-ignore-next-line
        return is_string($result) ? $result : $key;
    }
}
