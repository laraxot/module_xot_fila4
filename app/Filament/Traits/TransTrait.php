<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

use Illuminate\Contracts\Translation\Translator;
use Exception;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Exception;
use TypeError;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;
use TypeError;
use TypeError;
use Webmozart\Assert\Assert;

trait TransTrait
{
    /**
     * Get translation for a given key.
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param array<string, bool|float|int|string|null> $params
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param array<string, bool|float|int|string|null> $params
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false, array $params = []): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array<string, mixed>|Translator|string $res */
        /** @var array<string, mixed>|Translator|string $res */
        $res = trans($tmp, $params);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new Exception('['.__LINE__.']['.class_basename(self::class).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
     * @param array<string, bool|float|int|string|null> $params
     * @param array<string, bool|float|int|string|null> $params
     * @param array<string, bool|float|int|string|null> $params
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param array<string, bool|float|int|string|null> $params
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param array<string, bool|float|int|string|null> $params
     * @param array<string, bool|float|int|string|null> $params
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
                throw new Exception('['.__LINE__.']['.class_basename(self::class).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
     * @param array<string, bool|float|int|string|null> $params
     * @param array<string, bool|float|int|string|null> $params
     * @param array<string, bool|float|int|string|null> $params
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param array<string, bool|float|int|string|null> $params
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param array<string, bool|float|int|string|null> $params
     * @param array<string, bool|float|int|string|null> $params
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param  array<string, bool|float|int|string|null>  $params
     *
     * @param array<string, bool|float|int|string|null> $params
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false, array $params = []): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array|Translator|string $res */
        $res = trans($tmp, $params);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
     * @throws \Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
     * @throws \Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array|\Illuminate\Contracts\Translation\Translator|string $res */
        $res = trans($tmp);
     * @param array<string, bool|float|int|string|null> $params
        /** @var array|\Illuminate\Contracts\Translation\Translator|string $res */
        $res = trans($tmp);
     * @param array<string, bool|float|int|string|null> $params
     * @throws Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false, array $params = []): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var array|Translator|string $res */
        $res = trans($tmp, $params);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
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
        /** @var array|Translator|string $res */
        $res = trans($tmp);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
                throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
            }

            return $res;
        }

        if (is_array($res)) {
            $first = current($res);
            if (is_string($first) || is_numeric($first)) {
                return is_string($first) ? $first : ((string) $first);
            }
        }

        return 'fix:'.$tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
                return is_string($first) ? $first : (string) $first;
            }
        }

        return 'fix:'.$tmp;
                return is_string($first) ? $first : ((string) $first);
            }
        }

        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
        return 'fix:'.$tmp;
        return 'fix:'.$tmp;
        return 'fix:' . $tmp;
        return 'fix:' . $tmp;
    }

    /**
     * Get translation key for a given key.
     */
    public static function getKeyTrans(string $key): string
    {
        /** @var string */
        $transKey = app(GetTransKeyAction::class)->execute(static::class);

        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
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

        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
        $key = $transKey.'.'.$key;
        $key = $transKey . '.' . $key;
        $key = $transKey . '.' . $key;
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
        /** @var string $type */
        $type = $piece[2] ?? '';
        Assert::string($type, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $piece = Str::of($class)->explode('\\')->toArray();
        /** @var array<int, string> $piece */
        $piece = Str::of($class)->explode('\\')->toArray();
        /** @var string $type */
        $type = $piece[2] ?? '';
        Assert::string($type, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $piece = Str::of($class)->explode('\\')->toArray();
        $piece = Str::of($class)->explode('\\')->toArray();
        Assert::string($type = $piece[2], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\' . $type . '\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\' . $type . '\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();
        $key = $module_low . '::' . $model_snake;
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2]);
        $module = Str::of($class)->between('Modules\\', '\\'.$type.'\\')->toString();
        Assert::string($type = $piece[2], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\' . $type . '\\')->toString();
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2]);
        $module = Str::of($class)->between('Modules\\', '\\'.$type.'\\')->toString();
        Assert::string($type = $piece[2], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\' . $type . '\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\' . $type . '\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();
        $key = $module_low.'::'.$model_snake;
        $key = $module_low . '::' . $model_snake;
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $key = $module_low.'::'.$model_snake;
        $key = $module_low . '::' . $model_snake;
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2]);
        Assert::string($type = $piece[2], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($type = $piece[2]);
        $module = Str::of($class)->between('Modules\\', '\\'.$type.'\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\'.$type.'\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();

        return $module_low.'::'.$model_snake;
        $piece = Str::of($class)->explode('\\')->toArray();
        $piece = Str::of($class)->explode('\\')->toArray();
        $piece = Str::of($class)->explode('\\')->toArray();

        return $module_low.'::'.$model_snake;
        $piece = Str::of($class)->explode('\\')->toArray();
        $piece = Str::of($class)->explode('\\')->toArray();
        $piece = Str::of($class)->explode('\\')->toArray();
        Assert::string($type = $piece[2], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $module = Str::of($class)->between('Modules\\', '\\' . $type . '\\')->toString();

        $module_low = Str::of($module)->lower()->toString();

        $model = Str::of($class)->between('\\' . $type . '\\', '\\')->toString();
        $model_snake = Str::of($model)->snake()->toString();
        $key = $module_low . '::' . $model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;

        return $key;

        return $key;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;
        $key = $module_low.'::'.$model_snake;

        return $key;

        return $key;

        return $key;
    }

    /**
     * Get translation for a given class name.
     */
    public static function transClass(string $class, string $key): string
    {
        $class_key = static::getKeyTransClass($class);
        $key_full = $class_key.'.'.$key;
        /** @var array<string, mixed>|Translator|string $result */
        $result = trans($key_full);

        return is_string($result) ? $result : $key_full;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;
        $key_full = $class_key.'.'.$key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key . '.' . $key;
        $key_full = $class_key.'.'.$key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
        $key_full = $class_key . '.' . $key;

        return trans($key_full);
    }

    /**
     * Get translation for a given function name.
     */
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
    {
        $key = static::getKeyTransFunc($func);
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
    public static function transFunc(string $func, bool $_exceptionIfNotExist = false): string
    public static function transFunc(string $func, bool $exceptionIfNotExist = false): string
    {
        $key = static::getKeyTransFunc($func);
        /** @var string|array<int|string, mixed>|Translator|null $trans */
        $trans = null;

        try {
            /** @var array<string, mixed>|Translator|string $trans */
        /** @var string|array<int|string,mixed>|null */
        $trans = null;

        try {
            $trans = trans($key);
        } catch (TypeError $e) {
            $trans = trans($key);
        } catch (TypeError $e) {
        } catch (TypeError $e) {
            dddx([
                'e' => $e,
                'key' => $key,
            ]);
        }

        if ($key === $trans) {
            $group = Str::of($key)->before('.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            /** @var array<string, mixed>|Translator|string $group_arr */
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                /** @var mixed $transValue */
                $transValue = Arr::get($group_arr, $item);
                if (is_string($transValue) || is_numeric($transValue) || is_array($transValue)) {
                    $trans = $transValue;
                }
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                $trans = Arr::get($group_arr, $item);
            $item = Str::of($key)->after($group . '.')->toString();
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                $trans = Arr::get($group_arr, $item);
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                $trans = Arr::get($group_arr, $item);
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
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
                return is_string($first) ? $first : ((string) $first);
                return is_string($first) ? $first : ((string) $first);
                return is_string($first) ? $first : ((string) $first);
                return is_string($first) ? $first : ((string) $first);
                return is_string($first) ? $first : (string) $first;
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

        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
        return 'fix:'.$key;
        return 'fix:' . $key;
        return 'fix:' . $key;
    }

    /**
     * Get a translation according to an integer value.
     *
     * @param  array<string, bool|float|int|string|null>  $replace
     */
    protected function transChoice(string $key, int $number, array $replace = []): string
    {
        /** @var string $result */
        $result = trans_choice($key, $number, $replace);

     * @param array<string, bool|float|int|string|null> $replace
     * @param array<string, bool|float|int|string|null> $replace
     * @param array<string, bool|float|int|string|null> $replace
     * @param array<string, bool|float|int|string|null> $replace
     * @param  array<string, mixed>  $replace
     */
    protected function transChoice(string $key, int $number, array $replace = []): string
    {
        $result = trans_choice($key, $number, $replace);
        //@phpstan-ignore-next-line
        return is_string($result) ? $result : $key;
    }
}
