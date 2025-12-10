<?php

declare(strict_types=1);

/**
 * @see https://laravel.com/docs/11.x/urls#default-values
 */

namespace Modules\Xot\Http\Middleware;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Closure;
=======
<<<<<<< HEAD
use Closure;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use Closure;
>>>>>>> 091f883c (.)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetDefaultLocaleForUrls
{
    /**
     * Handle an incoming request.
     *
<<<<<<< HEAD
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
     * @param  Closure(Request):Response  $next
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
=======
     * @param  Closure(Request):Response  $next
>>>>>>> 551c768c4 (.)
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $lang = app()->getLocale();
<<<<<<< HEAD
        if (null !== $user) {
        if (null !== $user) {
        if (null !== $user) {
        if (null !== $user) {
        if (null !== $user) {
=======
        if ($user !== null) {
>>>>>>> 551c768c4 (.)
            $lang = $user->lang ?? app()->getLocale();
        }

        URL::defaults(['lang' => $lang]);

        return $next($request);
    }
}
