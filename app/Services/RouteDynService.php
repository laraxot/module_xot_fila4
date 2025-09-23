<?php

declare(strict_types=1);

namespace Modules\Xot\Services;



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
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
>>>>>>> a57150a (.)
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
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)

            return $prefix;
        }

<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
=======
>>>>>>> a57150a (.)
        }

        return $prefix;
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)

            return $as;
        }

<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
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
=======
>>>>>>> a57150a (.)
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)

            return $namespace;
        }

<<<<<<< HEAD
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)
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
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)

            return $act;
        }

        Assert::nullOrString($v['act'] = $v['name']);
        Assert::nullOrString($v['act']);
<<<<<<< HEAD

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
=======
>>>>>>> a57150a (.)
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)

            return $param_name;
        }

<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
=======
>>>>>>> a57150a (.)
        $param_name = str_replace(['{', '}'], '', $param_name);

        return mb_strtolower($param_name);
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<int, string>
     */
<<<<<<< HEAD
    public static function getParamsName(array $v, ?string $namespace): array
=======
>>>>>>> a57150a (.)
    {
        $param_name = self::getParamName($v, $namespace);

        return [$param_name];
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public static function getResourceOpts(array $v, ?string $namespace): array
=======
>>>>>>> a57150a (.)
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
        if ($param_name === '' && ! isset($opts['only'])) {
=======
>>>>>>> a57150a (.)
            $opts['only'] = ['index'];
        }

        $opts['where'] = array_fill_keys($params_name, '[0-9]+');

        return $opts;
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)

            return $controller;
        }

<<<<<<< HEAD
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)
        $v['controller'] = str_replace(['/', '{', '}'], ['_', '', ''], $v['controller']);
        $v['controller'] = Str::studly($v['controller']);
        $v['controller'] .= 'Controller';

        return $v['controller'];
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)

        // return mb_strtolower(is_string($v) ? $v : (string) $v['name);
        return $name;
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<int, string>
     */
<<<<<<< HEAD
    public static function getMethod(array $v, ?string $_namespace): array
=======
>>>>>>> a57150a (.)
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
    public static function getUses(array $v, ?string $namespace): string
=======
>>>>>>> a57150a (.)
    {
        $controller = self::getController($v, $namespace);
        $act = self::getAct($v, $namespace);

<<<<<<< HEAD
        return $controller.'@'.$act;
=======
>>>>>>> a57150a (.)
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
=======
>>>>>>> a57150a (.)
        }

        return ['as' => $as, 'uses' => $uses];
    }

    /**
     * @param  array<int, array<string, mixed>>  $array
     */
    public static function dynamic_route(
        array $array,
<<<<<<< HEAD
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
=======
>>>>>>> a57150a (.)
    ): void {
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
    public static function createRouteResource(array $v, ?string $namespace): void
=======
>>>>>>> a57150a (.)
    {
        if ($v['name'] === null) {
            return;
        }
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> a57150a (.)
        $opts = self::getResourceOpts($v, $namespace);
        $controller = self::getController($v, $namespace);

        Route::resource($name, $controller, $opts);
    }

    /**
     * @param  array<string, mixed>  $v
     */
<<<<<<< HEAD
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
=======
>>>>>>> a57150a (.)
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
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
=======
>>>>>>> a57150a (.)
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
            'index' => $prefix.'.index',
            'create' => $prefix.'.create',
            'store' => $prefix.'.store',
            'show' => $prefix.'.show',
            'edit' => $prefix.'.edit',
            'update' => $prefix.'.update',
            'destroy' => $prefix.'.destroy',
=======
>>>>>>> a57150a (.)
        ];
    }

    // --------------------------------------------------
}
