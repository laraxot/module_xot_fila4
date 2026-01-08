<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

use Exception;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use LogicException;
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
>>>>>>> 48515e368 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false, array $params = []): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array<string, mixed>|Translator|string $res */
        $res = trans($tmp, $params);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new Exception('['.__LINE__.']['.class_basename(self::class).']');
<<<<<<< HEAD
=======
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, bool|float|int|string|null>  $params
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     * @param  array<string, bool|float|int|string|null>  $params
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
     * @param array<string, bool|float|int|string|null> $params
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
     * @param  array<string, bool|float|int|string|null>  $params
     *
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> a12f125f4a (.)
=======
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
     * @throws \Exception Se exceptionIfNotExist è true e la traduzione non esiste
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
>>>>>>> ed734516 (.)
=======
=======
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
>>>>>>> 7131bd09 (.)
=======
=======
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
<<<<<<< HEAD
=======
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false): string
    {
        $tmp = static::getKeyTrans($key);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array|\Illuminate\Contracts\Translation\Translator|string $res */
=======
        /** @var array|Translator|string $res */
>>>>>>> ed734516 (.)
        $res = trans($tmp);
=======
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
     * @param array<string, bool|float|int|string|null> $params
>>>>>>> b93ef594b4 (.)
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false, array $params = []): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array|Translator|string $res */
        $res = trans($tmp, $params);
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> 5a14301c (.)
=======
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
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
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        /** @var array|Translator|string $res */
        $res = trans($tmp);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
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
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
                return is_string($first) ? $first : ((string) $first);
            }
        }

<<<<<<< HEAD
        return 'fix:'.$tmp;
=======
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
        return 'fix:'.$tmp;
=======
        return 'fix:' . $tmp;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
        return 'fix:' . $tmp;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        return 'fix:' . $tmp;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        return 'fix:' . $tmp;
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
        return 'fix:'.$tmp;
=======
<<<<<<< HEAD
        return 'fix:'.$tmp;
=======
        return 'fix:' . $tmp;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                return is_string($first) ? $first : (string) $first;
            }
        }

        return 'fix:'.$tmp;
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
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return 'fix:' . $tmp;
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return 'fix:'.$tmp;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $key = $transKey . '.' . $key;
>>>>>>> 399f46d3 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> ca9324a4 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
        $key = $transKey.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $key = $transKey.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $key = $transKey . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> ca9324a4 (.)
=======
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $key = $transKey . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        $key = $transKey . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $key = $transKey.'.'.$key;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        $key = $transKey . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $key = $transKey . '.' . $key;
>>>>>>> 399f46d3 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> ca9324a4 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
        $key = $transKey.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $key = $transKey.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $key = $transKey . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> ca9324a4 (.)
=======
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $key = $transKey . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $key = $transKey . '.' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        $key = $transKey . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $key = $transKey.'.'.$key;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        $key = $transKey . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        $key = Str::of($key)->replace('.cluster.pages.', '.')->toString();
        $key = Str::of($key)->replace('::edit_', '::')->toString();

        return $key;
    }

    /**
     * Get translation key for a given class name.
     */
    public static function getKeyTransClass(string $class): string
    {
        /** @var array<int, string> $piece */
        $piece = Str::of($class)->explode('\\')->toArray();
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
>>>>>>> 48515e368 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
        /** @var string $type */
        $type = $piece[2] ?? '';
        Assert::string($type, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        Assert::string($type = $piece[2], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\' . $type . '\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\' . $type . '\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();
        $key = $module_low . '::' . $model_snake;
<<<<<<< HEAD
=======
        Assert::string($type = $piece[2]);
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
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

        $model_str = Str::of($class)->after('\\'.$type.'\\');
        $model = $model_str->contains('\\') ? $model_str->before('\\')->toString() : $model_str->toString();
        $model_snake = Str::of($model)->snake()->toString();
<<<<<<< HEAD

        return $module_low.'::'.$model_snake;
<<<<<<< HEAD
=======
=======
        $piece = Str::of($class)->explode('\\')->toArray();
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        $piece = Str::of($class)->explode('\\')->toArray();
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
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        Assert::string($type = $piece[2], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\' . $type . '\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\' . $type . '\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();
        $key = $module_low . '::' . $model_snake;
=======
        $key = $module_low.'::'.$model_snake;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        return $key;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
    }

    /**
     * Get translation for a given class name.
     */
    public static function transClass(string $class, string $key): string
    {
        $class_key = static::getKeyTransClass($class);
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
>>>>>>> 48515e368 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
        $key_full = $class_key.'.'.$key;
        /** @var array<string, mixed>|Translator|string $result */
        $result = trans($key_full);

        return is_string($result) ? $result : $key_full;
<<<<<<< HEAD
=======
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
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        $key_full = $class_key . '.' . $key;
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $key_full = $class_key.'.'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
        $key_full = $class_key . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $key_full = $class_key.'.'.$key;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        $key_full = $class_key . '.' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        return trans($key_full);
>>>>>>> 5a14301c (.)
=======
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    {
        $key = static::getKeyTransFunc($func);
        /** @var string|array<int|string, mixed>|Translator|null $trans */
        $trans = null;

        try {
            /** @var array<string, mixed>|Translator|string $trans */
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
>>>>>>> 48515e368 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
            $item = Str::of($key)->after($group.'.')->toString();
            /** @var array<string, mixed>|Translator|string $group_arr */
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                /** @var mixed $transValue */
                $transValue = Arr::get($group_arr, $item);
                if (is_string($transValue) || is_numeric($transValue) || is_array($transValue)) {
                    $trans = $transValue;
                }
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
            $item = Str::of($key)->after($group . '.')->toString();
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
            $item = Str::of($key)->after($group.'.')->toString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
            $item = Str::of($key)->after($group . '.')->toString();
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            $item = Str::of($key)->after($group.'.')->toString();
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
            $item = Str::of($key)->after($group . '.')->toString();
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                $trans = Arr::get($group_arr, $item);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return 'fix:' . $key;
>>>>>>> 399f46d3 (.)
=======
        return 'fix:' . $key;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return 'fix:' . $key;
>>>>>>> ca9324a4 (.)
=======
        return 'fix:' . $key;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
        return 'fix:'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return 'fix:'.$key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        return 'fix:' . $key;
=======
        return 'fix:'.$key;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return 'fix:' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return 'fix:' . $key;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return 'fix:' . $key;
>>>>>>> ca9324a4 (.)
=======
        return 'fix:' . $key;
=======
        return 'fix:'.$key;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return 'fix:' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return 'fix:' . $key;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return 'fix:' . $key;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return 'fix:' . $key;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        return 'fix:' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return 'fix:'.$key;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        return 'fix:' . $key;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    }

    /**
     * Get a translation according to an integer value.
     *
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
     * @param  array<string, bool|float|int|string|null>  $replace
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
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
>>>>>>> 8b18e4bff (.)
     */
    protected function transChoice(string $key, int $number, array $replace = []): string
    {
        /** @var string $result */
        $result = trans_choice($key, $number, $replace);

        return is_string($result) ? $result : $key;
    }

    /**
     * Ottiene la chiave di traduzione per un dato key.
     * Genera un percorso di traduzione standardizzato basato sul modulo e sul nome della classe.
     *
     * @param  string  $key  La chiave di traduzione specifica
     * @param  array<string, bool|float|int|string>  $replace  Parametri di sostituzione per la traduzione
     * @param  string|null  $locale  Locale da utilizzare (null = locale corrente)
     * @param  bool  $useFallback  Se true, utilizza la chiave come fallback se la traduzione non esiste
     * @return string La stringa tradotta o la chiave originale se non trovata
     */
    public static function getTranslatedString(
        string $key,
        array $replace = [],
        ?string $locale = null,
        bool $useFallback = true,
    ): string {
        $moduleName = static::getModuleName();
        $moduleNameLow = Str::lower($moduleName);
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(Str::kebab(...))->implode('.');

        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
        $translation = __($translationKey, $replace, $locale);

        if ($translation === $translationKey && App::environment('local', 'development', 'testing')) {
            Log::warning("Traduzione mancante: {$translationKey}");

            return $useFallback ? $key : $translationKey;
        }

        if (! is_string($translation)) {
            return $useFallback ? $key : $translationKey;
        }

        return $translation;
    }

    /**
     * Ottiene la chiave di traduzione per un dato key (alias per getTranslatedString).
     * Genera un percorso di traduzione standardizzato basato sul modulo e sul nome della classe.
     *
     * @param  string  $key  La chiave di traduzione specifica
     * @param  array<string, bool|float|int|string>  $replace  Parametri di sostituzione per la traduzione
     * @param  string|null  $locale  Locale da utilizzare (null = locale corrente)
     * @param  bool  $useFallback  Se true, utilizza la chiave come fallback se la traduzione non esiste
     * @return string La stringa tradotta o la chiave originale se non trovata
     */
    public static function transOLD(
        string $key,
        array $replace = [],
        ?string $locale = null,
        bool $useFallback = true,
    ): string {
        return static::getTranslatedString($key, $replace, $locale, $useFallback);
    }

    /**
     * Ottiene il nome del modulo dalla classe.
     * Estrae il nome del modulo dal namespace della classe.
     *
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
     */
    public static function getModuleName(): string
    {
        $namespace = static::class;
        $moduleName = Str::between($namespace, 'Modules\\', '\\Filament');

        if ($moduleName === '') {
            throw new LogicException(sprintf('Cannot extract module name from class %s', static::class));
        }

        return $moduleName;
    }
}
