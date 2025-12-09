<?php

declare(strict_types=1);

/**
 * @see https://laravel.com/docs/11.x/urls#default-values
 */

namespace Modules\Xot\Http\Middleware;

use Closure;
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
     * @param Closure(Request):Response $next
>>>>>>> 5a14301c (.)
=======
     * @param Closure(Request):Response $next
>>>>>>> 5a14301c (.)
=======
     * @param Closure(Request):Response $next
>>>>>>> 5a14301c (.)
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $lang = app()->getLocale();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($user !== null) {
=======
        if (null !== $user) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $user) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $user) {
>>>>>>> 5a14301c (.)
            $lang = $user->lang ?? app()->getLocale();
        }

        URL::defaults(['lang' => $lang]);

        return $next($request);
    }
}
