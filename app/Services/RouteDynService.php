<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
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
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return $prefix;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        Assert::string($name = $v['name']);
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return $prefix;
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
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
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return $as;
        }

<<<<<<< HEAD
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
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);
        $as = preg_replace('/{.*}./', '', $as);
        $as = str_replace(['{', '}'], '', $as);

<<<<<<< HEAD
        return $as . '.';
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
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
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
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return $namespace;
        }

<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
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
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return $act;
        }

        Assert::nullOrString($v['act'] = $v['name']);
        Assert::nullOrString($v['act']);
        $v['act'] = preg_replace('/{.*}\//', '', (string) $v['act']);
        if ($v['act'] === null) {
            $v['act'] = '';
        }

        $v['act'] = str_replace('/', '_', $v['act']);
        $v['act'] = Str::camel($v['act']);
        $v['act'] = str_replace(['{', '}'], '', $v['act']);

        return Str::camel($v['act']);
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
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
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return $param_name;
        }

<<<<<<< HEAD
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
        $param_name = str_replace(['{', '}'], '', $param_name);

        return mb_strtolower($param_name);
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<int, string>
     */
<<<<<<< HEAD
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
    {
        $param_name = self::getParamName($v, $namespace);

        return [$param_name];
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public static function getResourceOpts(array $v, null|string $namespace): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getResourceOpts(array $v, null|string $namespace): array
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> a12f125f4a (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        $param_name = self::getParamName($v, $namespace);
        $params_name = self::getParamsName($v, $namespace);
        Assert::isArray($params_name);

        $opts = [
            'parameters' => [mb_strtolower((string) $v['name']) => implode('}/{', $params_name)],
            'names' => self::prefixedResourceNames(self::getAs($v, $namespace)),
        ];

        if (isset($v['only'])) {
            $opts['only'] = $v['only'];
        }

<<<<<<< HEAD
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
            $opts['only'] = ['index'];
        }

        $opts['where'] = array_fill_keys($params_name, '[0-9]+');

        return $opts;
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
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
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return $controller;
        }

<<<<<<< HEAD
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
        $v['controller'] = str_replace(['/', '{', '}'], ['_', '', ''], $v['controller']);
        $v['controller'] = Str::studly($v['controller']);
        $v['controller'] .= 'Controller';

        return $v['controller'];
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
    public static function getUri(array $v, ?string $namespace): string
    {
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        // return mb_strtolower(is_string($v) ? $v : (string) $v['name);
        return $name;
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<int, string>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public static function getMethod(array $v, null|string $_namespace): array
    {
        if (isset($v['method'])) {
            /** @var array<int, string> */
            return Arr::wrap($v['method']);
<<<<<<< HEAD
=======
=======
    public static function getMethod(array $v, ?string $namespace): array
    {
        if (isset($v['method'])) {
            $wrapped = Arr::wrap($v['method']);
            // Ensure all elements are strings
            /** @var array<int, string> $result */
            $result = [];
            foreach ($wrapped as $item) {
                $result[] = (string) $item;
            }

            return $result;
>>>>>>> a12f125f4a (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
    {
        if (isset($v['method'])) {
            /** @var array<int, string> */
            return Arr::wrap($v['method']);
>>>>>>> b93ef594b4 (.)
=======
    public static function getMethod(array $v, ?string $namespace): array
    {
        if (isset($v['method'])) {
            return Arr::wrap($v['method']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return ['get', 'post'];
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
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
    {
        $controller = self::getController($v, $namespace);
        $act = self::getAct($v, $namespace);

<<<<<<< HEAD
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
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\' . self::$namespace_start . '\\' . $curr . '\\' . $uses;
        } else {
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
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
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name']);
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return ['as' => $as, 'uses' => $uses];
    }

    /**
     * @param  array<int, array<string, mixed>>  $array
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public static function dynamic_route(
        array $array,
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
    ): void {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public static function dynamic_route(array $array, ?string $namespace = null, ?string $namespace_start = null, ?string $curr = null): void
    {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public static function dynamic_route(array $array, ?string $namespace = null, ?string $namespace_start = null, ?string $curr = null): void
    {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        Assert::isArray($array, 'The $array parameter must be an array.');
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
    {
        if ($v['name'] === null) {
            return;
        }
<<<<<<< HEAD
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
        $opts = self::getResourceOpts($v, $namespace);
        $controller = self::getController($v, $namespace);

        Route::resource($name, $controller, $opts);
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
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
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> b93ef594b4 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return;
        }

        $sub_namespace = self::getNamespace($v, $namespace);
        $curr = $curr === null ? $sub_namespace : $curr;
        Assert::isArray($subs = $v['subs']);
<<<<<<< HEAD
        /** @var array<int, array<string, mixed>> $subs */
        self::dynamic_route($subs, $sub_namespace, null, $curr);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<int, array<string, mixed>> $subs */
        self::dynamic_route($subs, $sub_namespace, null, $curr);
=======

        // Ensure subs is properly typed for dynamic_route
        /** @var array<int, array<string, mixed>> $typedSubs */
        $typedSubs = [];
        foreach ($subs as $index => $sub) {
            if (is_array($sub)) {
                /** @var array<string, mixed> $typedSub */
                $typedSub = [];
                foreach ($sub as $key => $value) {
                    $typedSub[(string) $key] = $value;
                }
                $typedSubs[(int) $index] = $typedSub;
            }
        }

        self::dynamic_route($typedSubs, $sub_namespace, null, $curr);
>>>>>>> a12f125f4a (.)
=======
        /** @var array<int, array<string, mixed>> $subs */
        self::dynamic_route($subs, $sub_namespace, null, $curr);
>>>>>>> b93ef594b4 (.)
=======
        self::dynamic_route($subs, $sub_namespace, null, $curr);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
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
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> b93ef594b4 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return;
        }

        $controller = self::getController($v, $namespace);
        foreach ($v['acts'] as $v1) {
            Assert::isArray($v1);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var array<string, mixed> $v1 */
=======
>>>>>>> origin/develop
            $v1['controller'] = $controller;

            $method = self::getMethod($v1, $namespace);
            $uri = self::getUri($v1, $namespace);
            $callback = self::getCallback($v1, $namespace, $curr);
<<<<<<< HEAD
=======

            // Ensure $v1 is properly typed
            /** @var array<string, mixed> $typedV1 */
            $typedV1 = [];
            foreach ($v1 as $key => $value) {
                $typedV1[(string) $key] = $value;
            }
            $typedV1['controller'] = $controller;

            $method = self::getMethod($typedV1, $namespace);
            $uri = self::getUri($typedV1, $namespace);
            $callback = self::getCallback($typedV1, $namespace, $curr);
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 6cba4fe (.)
            /** @var array<string, mixed> $v1 */
            $v1['controller'] = $controller;

            $method = self::getMethod($v1, $namespace);
            $uri = self::getUri($v1, $namespace);
            $callback = self::getCallback($v1, $namespace, $curr);
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            'index' => $prefix . '.index',
            'create' => $prefix . '.create',
            'store' => $prefix . '.store',
            'show' => $prefix . '.show',
            'edit' => $prefix . '.edit',
            'update' => $prefix . '.update',
            'destroy' => $prefix . '.destroy',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            'index' => $prefix.'.index',
            'create' => $prefix.'.create',
            'store' => $prefix.'.store',
            'show' => $prefix.'.show',
            'edit' => $prefix.'.edit',
            'update' => $prefix.'.update',
            'destroy' => $prefix.'.destroy',
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }

    // --------------------------------------------------
}
