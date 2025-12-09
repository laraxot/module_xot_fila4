<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)

/**
 * Class RouteDynService.
 */
class RouteDynService
{
    private static string $namespace_start = '';

    // Commentato: La proprietà $curr non viene mai letta, quindi potrebbe essere rimossa
    // private static ?string $curr = null;

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getGroupOpts(array $v, null|string $namespace): array
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> a12f125f4a (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 0e51323 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
    {
        return [
            'prefix' => self::getPrefix($v, $namespace),
            'namespace' => self::getNamespace($v, $namespace),
            'as' => self::getAs($v, $namespace),
        ];
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
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
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix']);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

            return $prefix;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
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
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
        Assert::string($name = $v['name']);
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 43d67f21 (.)
=======
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
        }

        return $prefix;
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
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
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
    public static function getAs(array $v, ?string $namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as']);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

            return $as;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

        // Assicuriamoci che $as sia una stringa prima di usare preg_replace
        if (is_string($as)) {
            $replaced = preg_replace('/{.*}./', '', $as);
            $as = is_string($replaced) ? $replaced : $as;
            $as = str_replace(['{', '}'], '', $as);

            return $as.'.';
        }

        return '.';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
=======
        return $as.'.';
>>>>>>> a12f125f4a (.)
=======
        return $as . '.';
>>>>>>> b93ef594b4 (.)
=======
        return $as.'.';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        // Assicuriamoci che $as sia una stringa prima di usare preg_replace
        if (is_string($as)) {
            $replaced = preg_replace('/{.*}./', '', $as);
            $as = is_string($replaced) ? $replaced : $as;
            $as = str_replace(['{', '}'], '', $as);

            return $as.'.';
        }

        return '.';
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
        return $as . '.';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
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
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace']);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

            return $namespace;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($namespace = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 0e51323 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
        $namespace = str_replace(['{', '}'], '', $namespace);
        if ($namespace === '') {
            return null;
        }

        return Str::studly($namespace);
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
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
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
    public static function getAct(array $v, ?string $namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act']);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

            return $act;
        }

        Assert::nullOrString($v['act'] = $v['name']);
        Assert::nullOrString($v['act']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
        $v['act'] = preg_replace('/{.*}\//', '', (string) $v['act']);
        if ($v['act'] === null) {
            $v['act'] = '';
        }
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

        // Convertiamo esplicitamente a stringa e gestiamo il caso null
        $act = (string) ($v['act'] ?? '');

        // Applichiamo le trasformazioni in modo sicuro
        $replaced = preg_replace('/{.*}\//', '', $act);
        $act = is_string($replaced) ? $replaced : $act;
        $act = str_replace('/', '_', $act);

        // Assicuriamoci che sia una stringa prima di usare Str::camel
        $camelCase = Str::camel($act);
        $act = str_replace(['{', '}'], '', $camelCase);

        return Str::camel($act);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        $v['act'] = preg_replace('/{.*}\//', '', (string) $v['act']);
        if ($v['act'] === null) {
            $v['act'] = '';
        }
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)

        // Convertiamo esplicitamente a stringa e gestiamo il caso null
        $act = (string) ($v['act'] ?? '');

<<<<<<< HEAD
<<<<<<< HEAD
        return Str::camel($v['act']);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 43d67f21 (.)
        // Applichiamo le trasformazioni in modo sicuro
        $replaced = preg_replace('/{.*}\//', '', $act);
        $act = is_string($replaced) ? $replaced : $act;
        $act = str_replace('/', '_', $act);

        // Assicuriamoci che sia una stringa prima di usare Str::camel
        $camelCase = Str::camel($act);
        $act = str_replace(['{', '}'], '', $camelCase);

        return Str::camel($act);
<<<<<<< HEAD
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
        return Str::camel($v['act']);
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
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
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
    public static function getParamName(array $v, ?string $namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name']);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

            return $param_name;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        $param_name = 'id_'.$name;
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 5a14301c (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
=======
        Assert::string($name = $v['name']);
        $param_name = 'id_'.$name;
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
        $param_name = 'id_'.$name;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> ca9324a4 (.)
=======
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 0e51323 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 5842a556 (.)
        $param_name = str_replace(['{', '}'], '', $param_name);

        return mb_strtolower($param_name);
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<int, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getParamsName(array $v, null|string $namespace): array
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> a12f125f4a (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 0e51323 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
    {
        $param_name = self::getParamName($v, $namespace);

        return [$param_name];
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getResourceOpts(array $v, ?string $namespace): array
    {
        $param_name = self::getParamName($v, $namespace);
        $params_name = self::getParamsName($v, $namespace);
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getResourceOpts(array $v, null|string $namespace): array
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getResourceOpts(array $v, null|string $namespace): array
=======
=======
>>>>>>> ca9324a4 (.)
    public static function getResourceOpts(array $v, ?string $namespace): array
=======
>>>>>>> 0e51323 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
    {
        $param_name = self::getParamName($v, $namespace);
        $params_name = self::getParamsName($v, $namespace);
        Assert::isArray($params_name);
>>>>>>> 5a14301c (.)

        $opts = [
            'parameters' => [mb_strtolower((string) $v['name']) => implode('}/{', $params_name)],
            'names' => self::prefixedResourceNames(self::getAs($v, $namespace)),
        ];

        if (isset($v['only'])) {
            $opts['only'] = $v['only'];
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 5a14301c (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 3fbbf1f5 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($param_name === '' && !isset($opts['only'])) {
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> a12f125f4a (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> b93ef594b4 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> ca9324a4 (.)
=======
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 0e51323 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 43d67f21 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 5842a556 (.)
            $opts['only'] = ['index'];
        }

        $opts['where'] = array_fill_keys($params_name, '[0-9]+');

        return $opts;
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
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
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
    public static function getController(array $v, ?string $namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller']);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

            return $controller;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($v['controller'] = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 0e51323 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
        $v['controller'] = str_replace(['/', '{', '}'], ['_', '', ''], $v['controller']);
        $v['controller'] = Str::studly($v['controller']);
        $v['controller'] .= 'Controller';

        return $v['controller'];
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
    public static function getUri(array $v, ?string $namespace): string
    {
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public static function getUri(array $v, ?string $namespace): string
    {
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)

        // return mb_strtolower(is_string($v) ? $v : (string) $v['name);
        return $name;
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<int, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getMethod(array $v, ?string $_namespace): array
=======
>>>>>>> d86d643a (.)
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
    public static function getMethod(array $v, null|string $_namespace): array
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 5842a556 (.)
    {
        if (isset($v['method'])) {
            /** @var array<int, string> */
            return Arr::wrap($v['method']);
        }

        return ['get', 'post'];
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 5a14301c (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getUses(array $v, null|string $namespace): string
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> a12f125f4a (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> b93ef594b4 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> ca9324a4 (.)
=======
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 0e51323 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 43d67f21 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 5842a556 (.)
    {
        $controller = self::getController($v, $namespace);
        $act = self::getAct($v, $namespace);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> 5a14301c (.)
=======
        return $controller . '@' . $act;
>>>>>>> 3fbbf1f5 (.)
=======
        return $controller . '@' . $act;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $controller . '@' . $act;
=======
        return $controller.'@'.$act;
>>>>>>> a12f125f4a (.)
=======
        return $controller . '@' . $act;
>>>>>>> b93ef594b4 (.)
=======
        return $controller.'@'.$act;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return $controller.'@'.$act;
>>>>>>> ca9324a4 (.)
=======
=======
        return $controller . '@' . $act;
>>>>>>> 0e51323 (.)
=======
        return $controller . '@' . $act;
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        return $controller.'@'.$act;
>>>>>>> 43d67f21 (.)
=======
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return $controller.'@'.$act;
>>>>>>> 5842a556 (.)
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> 43d67f21 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
<<<<<<< HEAD
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> b93ef594b4 (.)
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\' . self::$namespace_start . '\\' . $curr . '\\' . $uses;
        } else {
<<<<<<< HEAD
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> a12f125f4a (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> b93ef594b4 (.)
=======
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
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
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 43d67f21 (.)
=======
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
        }

        return ['as' => $as, 'uses' => $uses];
    }

    /**
     * @param  array<int, array<string, mixed>>  $array
     */
    public static function dynamic_route(
        array $array,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
    ): void {
=======
>>>>>>> d86d643a (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
<<<<<<< HEAD
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 43d67f21 (.)
    ): void {
        Assert::isArray($array, 'The $array parameter must be an array.');
>>>>>>> 5a14301c (.)
        Assert::notEmpty($array, 'The $array parameter cannot be empty.');

        if ($namespace_start !== null) {
            self::$namespace_start = $namespace_start;
        }

        foreach ($array as $v) {
            Assert::isArray($v, 'Each item in the array must be an array.');
            $group_opts = self::getGroupOpts($v, $namespace);
            $v['group_opts'] = $group_opts;

            self::createRouteResource($v, $namespace);

            Route::group($group_opts, static function () use ($v, $namespace, $curr): void {
                self::createRouteActs($v, $namespace, $curr);
                self::createRouteSubs($v, $namespace, $curr);
            });
        }
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 5a14301c (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 3fbbf1f5 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function createRouteResource(array $v, null|string $namespace): void
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> a12f125f4a (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> b93ef594b4 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> ca9324a4 (.)
=======
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 0e51323 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 43d67f21 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 5842a556 (.)
    {
        if ($v['name'] === null) {
            return;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 0e51323 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
        $opts = self::getResourceOpts($v, $namespace);
        $controller = self::getController($v, $namespace);

        Route::resource($name, $controller, $opts);
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 43d67f21 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 5842a556 (.)
            return;
        }

        $sub_namespace = self::getNamespace($v, $namespace);
        $curr = $curr === null ? $sub_namespace : $curr;
        Assert::isArray($subs = $v['subs']);
        /** @var array<int, array<string, mixed>> $subs */
        self::dynamic_route($subs, $sub_namespace, null, $curr);
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 43d67f21 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 5842a556 (.)
            return;
        }

        $controller = self::getController($v, $namespace);
        foreach ($v['acts'] as $v1) {
            Assert::isArray($v1);
            /** @var array<string, mixed> $v1 */
            $v1['controller'] = $controller;

            $method = self::getMethod($v1, $namespace);
            $uri = self::getUri($v1, $namespace);
            $callback = self::getCallback($v1, $namespace, $curr);
            Route::match($method, $uri, $callback);
        }
    }

    /**
     * @return array<string, string>
     */
    public static function prefixedResourceNames(string $prefix): array
    {
        if (mb_substr($prefix, -1) === '.') {
            $prefix = mb_substr($prefix, 0, -1);
        }

        return [
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
            'index' => $prefix.'.index',
            'create' => $prefix.'.create',
            'store' => $prefix.'.store',
            'show' => $prefix.'.show',
            'edit' => $prefix.'.edit',
            'update' => $prefix.'.update',
            'destroy' => $prefix.'.destroy',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
            'index' => $prefix . '.index',
            'create' => $prefix . '.create',
            'store' => $prefix . '.store',
            'show' => $prefix . '.show',
            'edit' => $prefix . '.edit',
            'update' => $prefix . '.update',
            'destroy' => $prefix . '.destroy',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
=======
>>>>>>> ca9324a4 (.)
            'index' => $prefix.'.index',
            'create' => $prefix.'.create',
            'store' => $prefix.'.store',
            'show' => $prefix.'.show',
            'edit' => $prefix.'.edit',
            'update' => $prefix.'.update',
            'destroy' => $prefix.'.destroy',
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
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
        ];
    }

    // --------------------------------------------------
}
