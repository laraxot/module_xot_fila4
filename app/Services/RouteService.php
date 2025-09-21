<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use function count;

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use function count;

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

<<<<<<< HEAD
use function count;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function count;

=======
>>>>>>> a12f125f4a (.)
=======
use function count;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * Class RouteService.
 * Modules\Xot\Services\RouteService.
 *
 * @method string urlAct($params)
 */
class RouteService
{
    /**
     * Verifica se l'utente è in modalità amministrazione.
     *
     * @param array<string,string> $params Parametri aggiuntivi
     * @return bool True se l'utente è in modalità amministrazione, false altrimenti
     */
    public static function inAdmin(array $params = []): bool
    {
        // Se il parametro in_admin è specificato, lo restituiamo direttamente
        if (isset($params['in_admin'])) {
            // Convertiamo qualsiasi valore a booleano
            return (bool) $params['in_admin'];
        }

        // Se il primo segmento dell'URL è 'admin', siamo in modalità amministrazione
        if ('admin' === Request::segment(1)) {
            return true;
        }

        // Verifichiamo un caso speciale per le richieste Livewire
        $segments = Request::segments();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Se abbiamo almeno un segmento, è 'livewire' e la sessione 'in_admin' è true
        return (
            (is_countable($segments) ? \count($segments) : 0) > 0 &&
            'livewire' === $segments[0] &&
            session('in_admin', false) === true
        );
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        // Se abbiamo almeno un segmento, è 'livewire' e la sessione 'in_admin' è true
        return (is_countable($segments) ? \count($segments) : 0) > 0 && 
               'livewire' === $segments[0] && 
               session('in_admin', false) === true;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // Se abbiamo almeno un segmento, è 'livewire' e la sessione 'in_admin' è true
        return (
            (is_countable($segments) ? \count($segments) : 0) > 0 &&
            'livewire' === $segments[0] &&
            session('in_admin', false) === true
        );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * @param array<string,string> $params
     */
    public static function urlAct(array $params): string
    {
        $query = [];
        $act = 'show';
        $row = (object) [];
        extract($params);
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * $mutator = $act.'_url';
         * try {
         * $route = $row->$mutator;
         * } catch (\Exception $e) {
         * $route = '#';
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $mutator = $act.'_url';
        try {
            $route = $row->$mutator;
        } catch (\Exception $e) {
            $route = '#';
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $route_action = (string) Route::currentRouteAction();
        Str::snake(Str::after($route_action, '@'));
        // Cannot call method getName() on mixed.
        $routename = ''; // Request::route()->getName();
        $old_act_route = last(explode('.', $routename));
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        if (!\is_string($old_act_route)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename(self::class) . ']');
        }

        $routename_act = Str::before($routename, $old_act_route) . '' . $act;
<<<<<<< HEAD
=======
=======
        if (! \is_string($old_act_route)) {
            throw new Exception('['.__LINE__.']['.class_basename(self::class).']');
        }

        $routename_act = Str::before($routename, $old_act_route).''.$act;
>>>>>>> a12f125f4a (.)
=======
        if (!\is_string($old_act_route)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename(self::class) . ']');
        }

        $routename_act = Str::before($routename, $old_act_route) . '' . $act;
>>>>>>> b93ef594b4 (.)
=======
        if (! \is_string($old_act_route)) {
            throw new \Exception('['.__LINE__.']['.class_basename(self::class).']');
        }

        $routename_act = Str::before($routename, $old_act_route).''.$act;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $route_current = Route::current();
        $route_params = [];
        if ($route_current instanceof \Illuminate\Routing\Route) {
            $route_params = $route_current->parameters();
            $routename = $route_current->getName();
        }

        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * try {
         * $route_params = optional(\Route::current())->parameters();
         * } catch (\Exception $e) {
         * $route_params = [];
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        try {
            $route_params = optional(\Route::current())->parameters();
        } catch (\Exception $e) {
            $route_params = [];
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        if (Route::has($routename_act)) {
            $parz = array_merge($route_params, [$row]);
            $parz = array_merge($parz, $query);

            return route($routename_act, $parz);
        }

<<<<<<< HEAD
        return '#' . $routename_act;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return '#' . $routename_act;
=======
        return '#'.$routename_act;
>>>>>>> a12f125f4a (.)
=======
        return '#' . $routename_act;
>>>>>>> b93ef594b4 (.)
=======
        return '#'.$routename_act;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    // se n=0 => 'container0'
    // se n=1 => 'containers.container1'
    /**
     * @param array<string,string> $params
     */
    public static function getRoutenameN(array $params): string
    {
        // default vars
        $n = 0;
        $act = 'show';
        extract($params);
        $tmp = [];
        // dddx(inAdmin());
        if (inAdmin($params)) {
            $tmp[] = 'admin';
        }

        for ($i = 0; $i <= $n; ++$i) {
<<<<<<< HEAD
            $tmp[] = 'container' . $i;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $tmp[] = 'container' . $i;
=======
            $tmp[] = 'container'.$i;
>>>>>>> a12f125f4a (.)
=======
            $tmp[] = 'container' . $i;
>>>>>>> b93ef594b4 (.)
=======
            $tmp[] = 'container'.$i;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        $tmp[] = $act;

        return implode('.', $tmp);
    }

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
     * public static function urlRelatedPanel(array $params){
     * $act = 'show';
     * extract($params);
     * if (! isset($panel)) {
     * dddx(['err' => 'panel is missing']);
     *
     * return;
     * }
     * if (! isset($related_name)) {
     * dddx(['err' => 'related_name is missing']);
     *
     * return;
     * }
     * $parents = collect([]);
     * $panel_curr = $panel;
     *
     * while (null != $panel_curr->getParent()) {
     * $parents->prepend($panel_curr->getParent());
     * $panel_curr = $panel_curr->getParent();
     * }
     * $container_root = $panel->getRow();
     * if ($parents->count() > 0) {
     *
     * //$tmp='['.$parents->count().']';
     * //foreach($parents as $parent){
     * //    $tmp.=$parent->getRow()->post_type.'-';
     * //}
     * //return $tmp;
     *
     * $container_root = $parents->first()?->row;
     * }
     *
     * //$containers_class = self::getContainersClass();
     * //$n = collect($containers_class)->search(get_class($container_root));
     * //if (null === $n) {
     * //    $n = 0;
     * //}
     *
     * $n = 0;
     *
     * $route_name = self::getRoutenameN(['n' => $n + 1 + $parents->count(), 'act' => $act]);
     * $route_current = \Route::current();
     * $route_params = is_object($route_current) ? $route_current->parameters() : [];
     *
     * $i = 0;
     * foreach ($parents as $parent) {
     * $route_params['container'.($n + $i)] = $parent->postType();
     * $route_params['item'.($n + $i)] = $parent->guid();
     * ++$i;
     * }
     * $route_params['container'.($n + $i)] = $panel->postType();
     * $route_params['item'.($n + $i)] = $panel->guid();
     * ++$i;
     * $route_params['container'.($n + $i)] = $related_name;
     *
     * $route_params['page'] = 1;
     * $route_params['_act'] = '';
     * unset($route_params['_act']);
     * try {
     * $url = str_replace(url(''), '', route($route_name, $route_params));
     * } catch (\Exception $e) {
     * if (request()->input('debug', false)) {
     * dd([
     * 'route_name' => $route_name,
     * 'route_params' => $route_params,
     * 'line' => __LINE__,
     * 'file' => __FILE__,
     * 'e' => $e->getMessage(),
     * ]);
     * }
     *
     * return '#['.__LINE__.']['.class_basename($this).']';
     * }
     *
     * return $url;
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    public static function urlRelatedPanel(array $params){
        $act = 'show';
        extract($params);
        if (! isset($panel)) {
            dddx(['err' => 'panel is missing']);

            return;
        }
        if (! isset($related_name)) {
            dddx(['err' => 'related_name is missing']);

            return;
        }
        $parents = collect([]);
        $panel_curr = $panel;

        while (null != $panel_curr->getParent()) {
            $parents->prepend($panel_curr->getParent());
            $panel_curr = $panel_curr->getParent();
        }
        $container_root = $panel->getRow();
        if ($parents->count() > 0) {

            //$tmp='['.$parents->count().']';
            //foreach($parents as $parent){
            //    $tmp.=$parent->getRow()->post_type.'-';
            //}
            //return $tmp;

            $container_root = $parents->first()?->row;
        }

        //$containers_class = self::getContainersClass();
        //$n = collect($containers_class)->search(get_class($container_root));
        //if (null === $n) {
        //    $n = 0;
        //}

        $n = 0;

        $route_name = self::getRoutenameN(['n' => $n + 1 + $parents->count(), 'act' => $act]);
        $route_current = \Route::current();
        $route_params = is_object($route_current) ? $route_current->parameters() : [];

        $i = 0;
        foreach ($parents as $parent) {
            $route_params['container'.($n + $i)] = $parent->postType();
            $route_params['item'.($n + $i)] = $parent->guid();
            ++$i;
        }
        $route_params['container'.($n + $i)] = $panel->postType();
        $route_params['item'.($n + $i)] = $panel->guid();
        ++$i;
        $route_params['container'.($n + $i)] = $related_name;

        $route_params['page'] = 1;
        $route_params['_act'] = '';
        unset($route_params['_act']);
        try {
            $url = str_replace(url(''), '', route($route_name, $route_params));
        } catch (\Exception $e) {
            if (request()->input('debug', false)) {
                dd([
                    'route_name' => $route_name,
                    'route_params' => $route_params,
                    'line' => __LINE__,
                    'file' => __FILE__,
                    'e' => $e->getMessage(),
                ]);
            }

            return '#['.__LINE__.']['.class_basename($this).']';
        }

        return $url;
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * @param array<string,string> $params
     */
    public static function urlLang(array $params = []): string
    {
        extract($params);

        return '?';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        /*
         * return '?'.$lang; //da fixare dopo
         * //$row=$this->row;
         * //$row->lang=$lang;
         * //return '/wip'.$this->url();
         * $route_name = \Route::currentRouteName();
         * $route_params = optional(\Route::current())->parameters();
         * $route_params['lang'] = $lang;
         * [$containers, $items] = params2ContainerItem($route_params);
         * $n_items = count($items);
         * //dddx($n_items);//1
         * //dddx($route_name); containers.show
         * for ($i = 0; $i < $n_items; ++$i) {
         * $v = $items[$i];
         * if (method_exists($v, 'postLang')) {
         * $tmp = $v->postLang($lang)->first();
         * if (is_object($tmp)) {
         * $guid = $tmp->guid;
         * } else {
         * $guid = '#';
         * //dddx(app()->getLocale());
         * $v_post = $v->post;
         * if (null == $v_post) {
         * break;
         * }
         * $new_post = $v_post->replicate();
         * $fields = ['title', 'subtitle', 'txt', 'meta_description', 'meta_keywords'];
         * foreach ($fields as $field) {
         * $trans = ImportService::trans(['q' => $new_post->$field, 'from' => app()->getLocale(), 'to' => $lang]);
         *
         * //dddx([
         * //    'from'=>app()->getLocale(),
         * //    'to'=>$lang,
         * //    'trans'=>$trans,
         *
         * //]);
         *
         * $new_post->$field = $trans;
         * }
         * $new_post->lang = $lang;
         * $new_post->save();
         * $guid = $new_post->guid;
         * }
         * } else {
         * $route_key_name = $v->getRouteKeyName();
         * $guid = $v->$route_key_name;
         * }
         *
         * $route_params['item'.$i] = $guid;
         * //dddx($route_params['item'.$i]->guidLang);
         * }
         * //dddx($route_params);
         * //return '/wip['.__LINE__.']['.class_basename($this).']';
         * try {
         * return route($route_name, $route_params);
         * } catch (\Exception $e) {
         * return url($lang);
         * }
         */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        /*
        return '?'.$lang; //da fixare dopo
        //$row=$this->row;
        //$row->lang=$lang;
        //return '/wip'.$this->url();
        $route_name = \Route::currentRouteName();
        $route_params = optional(\Route::current())->parameters();
        $route_params['lang'] = $lang;
        [$containers, $items] = params2ContainerItem($route_params);
        $n_items = count($items);
        //dddx($n_items);//1
        //dddx($route_name); containers.show
        for ($i = 0; $i < $n_items; ++$i) {
            $v = $items[$i];
            if (method_exists($v, 'postLang')) {
                $tmp = $v->postLang($lang)->first();
                if (is_object($tmp)) {
                    $guid = $tmp->guid;
                } else {
                    $guid = '#';
                    //dddx(app()->getLocale());
                    $v_post = $v->post;
                    if (null == $v_post) {
                        break;
                    }
                    $new_post = $v_post->replicate();
                    $fields = ['title', 'subtitle', 'txt', 'meta_description', 'meta_keywords'];
                    foreach ($fields as $field) {
                        $trans = ImportService::trans(['q' => $new_post->$field, 'from' => app()->getLocale(), 'to' => $lang]);

                        //dddx([
                        //    'from'=>app()->getLocale(),
                        //    'to'=>$lang,
                        //    'trans'=>$trans,

                        //]);

                        $new_post->$field = $trans;
                    }
                    $new_post->lang = $lang;
                    $new_post->save();
                    $guid = $new_post->guid;
                }
            } else {
                $route_key_name = $v->getRouteKeyName();
                $guid = $v->$route_key_name;
            }

            $route_params['item'.$i] = $guid;
            //dddx($route_params['item'.$i]->guidLang);
        }
        //dddx($route_params);
        //return '/wip['.__LINE__.']['.class_basename($this).']';
        try {
            return route($route_name, $route_params);
        } catch (\Exception $e) {
            return url($lang);
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        /*
         * return '?'.$lang; //da fixare dopo
         * //$row=$this->row;
         * //$row->lang=$lang;
         * //return '/wip'.$this->url();
         * $route_name = \Route::currentRouteName();
         * $route_params = optional(\Route::current())->parameters();
         * $route_params['lang'] = $lang;
         * [$containers, $items] = params2ContainerItem($route_params);
         * $n_items = count($items);
         * //dddx($n_items);//1
         * //dddx($route_name); containers.show
         * for ($i = 0; $i < $n_items; ++$i) {
         * $v = $items[$i];
         * if (method_exists($v, 'postLang')) {
         * $tmp = $v->postLang($lang)->first();
         * if (is_object($tmp)) {
         * $guid = $tmp->guid;
         * } else {
         * $guid = '#';
         * //dddx(app()->getLocale());
         * $v_post = $v->post;
         * if (null == $v_post) {
         * break;
         * }
         * $new_post = $v_post->replicate();
         * $fields = ['title', 'subtitle', 'txt', 'meta_description', 'meta_keywords'];
         * foreach ($fields as $field) {
         * $trans = ImportService::trans(['q' => $new_post->$field, 'from' => app()->getLocale(), 'to' => $lang]);
         *
         * //dddx([
         * //    'from'=>app()->getLocale(),
         * //    'to'=>$lang,
         * //    'trans'=>$trans,
         *
         * //]);
         *
         * $new_post->$field = $trans;
         * }
         * $new_post->lang = $lang;
         * $new_post->save();
         * $guid = $new_post->guid;
         * }
         * } else {
         * $route_key_name = $v->getRouteKeyName();
         * $guid = $v->$route_key_name;
         * }
         *
         * $route_params['item'.$i] = $guid;
         * //dddx($route_params['item'.$i]->guidLang);
         * }
         * //dddx($route_params);
         * //return '/wip['.__LINE__.']['.class_basename($this).']';
         * try {
         * return route($route_name, $route_params);
         * } catch (\Exception $e) {
         * return url($lang);
         * }
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Function getAct.
     *
<<<<<<< HEAD
     * @throws Exception
=======
<<<<<<< HEAD
     * @throws Exception
=======
     * @throws \Exception
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public static function getAct(): string
    {
        $route_action = Route::currentRouteAction();
        if (null === $route_action) {
<<<<<<< HEAD
            throw new Exception('$route_action is null');
=======
<<<<<<< HEAD
            throw new Exception('$route_action is null');
=======
            throw new \Exception('$route_action is null');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        $act = Str::after($route_action, '@');

        // --- i prossimi 2 if son per i controller con metodo invoke
        if (Str::contains($act, '\\')) {
            $act = Str::afterLast($act, '\\');
        }

        if (Str::endsWith($act, 'Controller')) {
            $act = Str::before($act, 'Controller');
        }

        return Str::snake($act);
    }

    /**
     * Function.
     *
<<<<<<< HEAD
     * @throws Exception
=======
<<<<<<< HEAD
     * @throws Exception
=======
     * @throws \Exception
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public static function getModuleName(): string
    {
        $route_action = Route::currentRouteAction();
        if (null === $route_action) {
<<<<<<< HEAD
            throw new Exception('$route_action is null');
=======
<<<<<<< HEAD
            throw new Exception('$route_action is null');
=======
            throw new \Exception('$route_action is null');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return Str::between($route_action, 'Modules\\', '\Http');
    }

    /**
     * Function.
     *
<<<<<<< HEAD
     * @throws Exception
=======
<<<<<<< HEAD
     * @throws Exception
=======
     * @throws \Exception
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public static function getControllerName(): string
    {
        $route_action = Route::currentRouteAction();
        if (null === $route_action) {
<<<<<<< HEAD
            throw new Exception('$route_action is null');
=======
<<<<<<< HEAD
            throw new Exception('$route_action is null');
=======
            throw new \Exception('$route_action is null');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return Str::between($route_action, 'Http\Controllers\\', 'Controller');
    }

    public static function getView(): string
    {
        $controllerName = self::getControllerName();
        $tmp_arr = explode('\\', $controllerName);

        $params = getRouteParameters();
        [$containers, $items] = params2ContainerItem($params);

        $params['containers'] = implode('.', $containers);

        return collect($tmp_arr)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            ->filter(static fn($item): bool => !\in_array($item, ['Module', 'Item'], false))
            ->map(static function ($item) use ($params) {
                $item = Str::snake($item);

                return $params[$item] ?? $item;
            })
            ->implode('.');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            ->filter(
                static fn ($item): bool => ! \in_array($item, ['Module', 'Item'], false)
            )
            ->map(
                static function ($item) use ($params) {
                    $item = Str::snake($item);

                    return $params[$item] ?? $item;
                }
            )->implode('.');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            ->filter(static fn($item): bool => !\in_array($item, ['Module', 'Item'], false))
            ->map(static function ($item) use ($params) {
                $item = Str::snake($item);

                return $params[$item] ?? $item;
            })
            ->implode('.');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
