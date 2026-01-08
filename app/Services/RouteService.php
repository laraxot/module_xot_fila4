<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use function count;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
=======
use function count;

>>>>>>> 5a14301c (.)
=======
use function count;

>>>>>>> 3fbbf1f5 (.)
=======
use function count;

=======
use function count;

>>>>>>> 399f46d3 (.)
=======
use function count;

>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use function count;

>>>>>>> ca9324a4 (.)
=======
use function count;

>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
use function count;

=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
use function count;

=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
use function count;

>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
use function count;

>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use function count;

>>>>>>> ca9324a4 (.)
=======
use function count;

=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
use function count;

>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
use function count;

>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
     * @param  array<string,string>  $params  Parametri aggiuntivi
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
        if (Request::segment(1) === 'admin') {
            return true;
        }

        // Verifichiamo un caso speciale per le richieste Livewire
        $segments = Request::segments();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

        // Se abbiamo almeno un segmento, è 'livewire' e la sessione 'in_admin' è true
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        return (is_countable($segments) ? \count($segments) : 0) > 0 &&
=======
        return
            (is_countable($segments) ? \count($segments) : 0) > 0 &&
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
            $segments[0] === 'livewire' &&
            session('in_admin', false) === true;
=======
            'livewire' === $segments[0] &&
            session('in_admin', false) === true
        );
<<<<<<< HEAD
=======
        
        // Se abbiamo almeno un segmento, è 'livewire' e la sessione 'in_admin' è true
        return (is_countable($segments) ? \count($segments) : 0) > 0 && 
               'livewire' === $segments[0] && 
               session('in_admin', false) === true;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    }

    /**
     * @param  array<string,string>  $params
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
        $mutator = $act.'_url';
        try {
            $route = $row->$mutator;
        } catch (\Exception $e) {
            $route = '#';
        }
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!\is_string($old_act_route)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename(self::class) . ']');
        }

        $routename_act = Str::before($routename, $old_act_route) . '' . $act;
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        if (! \is_string($old_act_route)) {
            throw new Exception('['.__LINE__.']['.class_basename(self::class).']');
        }

        $routename_act = Str::before($routename, $old_act_route).''.$act;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
        if (!\is_string($old_act_route)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename(self::class) . ']');
        }

        $routename_act = Str::before($routename, $old_act_route) . '' . $act;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
        if (! \is_string($old_act_route)) {
            throw new Exception('['.__LINE__.']['.class_basename(self::class).']');
        }

        $routename_act = Str::before($routename, $old_act_route).''.$act;
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        $route_current = Route::current();
        $route_params = [];
        if ($route_current instanceof \Illuminate\Routing\Route) {
            $route_params = $route_current->parameters();
            // $routename non utilizzata dopo l'assegnazione
        }

        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
        try {
            $route_params = optional(\Route::current())->parameters();
        } catch (\Exception $e) {
            $route_params = [];
        }
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        if (Route::has($routename_act)) {
            $parz = array_merge($route_params, [$row]);
            $parz = array_merge($parz, $query);

            return route($routename_act, $parz);
        }

<<<<<<< HEAD
        return '#'.$routename_act;
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
        return '#'.$routename_act;
=======
        return '#' . $routename_act;
>>>>>>> 5a14301c (.)
=======
        return '#' . $routename_act;
>>>>>>> 3fbbf1f5 (.)
=======
        return '#' . $routename_act;
=======
        return '#' . $routename_act;
>>>>>>> 399f46d3 (.)
=======
        return '#' . $routename_act;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return '#' . $routename_act;
>>>>>>> ca9324a4 (.)
=======
        return '#' . $routename_act;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        return '#'.$routename_act;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        return '#' . $routename_act;
=======
        return '#'.$routename_act;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return '#' . $routename_act;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return '#' . $routename_act;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return '#' . $routename_act;
>>>>>>> ca9324a4 (.)
=======
        return '#' . $routename_act;
=======
        return '#'.$routename_act;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return '#' . $routename_act;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return '#' . $routename_act;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return '#' . $routename_act;
>>>>>>> 9db27d12 (.)
=======
=======
        return '#' . $routename_act;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
    }

    // se n=0 => 'container0'
    // se n=1 => 'containers.container1'
    /**
     * @param  array<string,string>  $params
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

<<<<<<< HEAD
        for ($i = 0; $i <= $n; $i++) {
            $tmp[] = 'container'.$i;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
        for ($i = 0; $i <= $n; $i++) {
            $tmp[] = 'container'.$i;
=======
        for ($i = 0; $i <= $n; ++$i) {
<<<<<<< HEAD
            $tmp[] = 'container' . $i;
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
        for ($i = 0; $i <= $n; ++$i) {
            $tmp[] = 'container' . $i;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            $tmp[] = 'container' . $i;
=======
            $tmp[] = 'container'.$i;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $tmp[] = 'container' . $i;
>>>>>>> b93ef594b4 (.)
=======
            $tmp[] = 'container'.$i;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        for ($i = 0; $i <= $n; ++$i) {
            $tmp[] = 'container' . $i;
>>>>>>> 5a14301c (.)
=======
=======
            $tmp[] = 'container'.$i;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $tmp[] = 'container' . $i;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            $tmp[] = 'container'.$i;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $tmp[] = 'container' . $i;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> f1d4085 (.)
=======
            $tmp[] = 'container' . $i;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        }

        $tmp[] = $act;

        return implode('.', $tmp);
    }

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
     * dddx([
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    /**
     * @param  array<string,string>  $params
     */
    public static function urlLang(array $params = []): string
    {
        extract($params);

        return '?';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

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
<<<<<<< HEAD
=======
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    }

    /**
     * Function getAct.
     *
     * @throws Exception
     */
    public static function getAct(): string
    {
        $route_action = Route::currentRouteAction();
        if ($route_action === null) {
            throw new Exception('$route_action is null');
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
     * @throws Exception
     */
    public static function getModuleName(): string
    {
        $route_action = Route::currentRouteAction();
        if ($route_action === null) {
            throw new Exception('$route_action is null');
        }

        return Str::between($route_action, 'Modules\\', '\Http');
    }

    /**
     * Function.
     *
     * @throws Exception
     */
    public static function getControllerName(): string
    {
        $route_action = Route::currentRouteAction();
        if ($route_action === null) {
            throw new Exception('$route_action is null');
        }

        return Str::between($route_action, 'Http\Controllers\\', 'Controller');
    }

    public static function getView(): string
    {
        $controllerName = self::getControllerName();
        $tmp_arr = explode('\\', $controllerName);

        $params = getRouteParameters();
        [$containers] = params2ContainerItem($params);

        $params['containers'] = implode('.', $containers);

        return collect($tmp_arr)
<<<<<<< HEAD
            ->filter(static fn ($item): bool => ! \in_array($item, ['Module', 'Item'], false))
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
            ->filter(static fn ($item): bool => ! \in_array($item, ['Module', 'Item'], false))
=======
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
            ->filter(static fn($item): bool => !\in_array($item, ['Module', 'Item'], false))
>>>>>>> 5a14301c (.)
=======
            ->filter(static fn($item): bool => !\in_array($item, ['Module', 'Item'], false))
>>>>>>> 5a14301c (.)
=======
            ->filter(static fn ($item): bool => ! \in_array($item, ['Module', 'Item'], false))
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            ->filter(static fn($item): bool => !\in_array($item, ['Module', 'Item'], false))
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            ->map(static function ($item) use ($params) {
                $item = Str::snake($item);

                return $params[$item] ?? $item;
            })
            ->implode('.');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            ->filter(
                static fn ($item): bool => ! \in_array($item, ['Module', 'Item'], false)
            )
            ->map(
                static function ($item) use ($params) {
                    $item = Str::snake($item);

                    return $params[$item] ?? $item;
                }
            )->implode('.');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    }
}
