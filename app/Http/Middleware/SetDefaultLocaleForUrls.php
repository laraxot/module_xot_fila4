<?php

declare(strict_types=1);

/**
 * @see https://laravel.com/docs/11.x/urls#default-values
 */

namespace Modules\Xot\Http\Middleware;

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetDefaultLocaleForUrls
{
    /**
     * Handle an incoming request.
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
>>>>>>> ce6fc085 (.)
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
     * @param Closure(Request):Response $next
     */
    public function handle(Request $request, Closure $next): Response
=======
<<<<<<< HEAD
     * @param Closure(Request):Response $next
     */
    public function handle(Request $request, Closure $next): Response
=======
     * @param \Closure(Request): (Response) $next
     */
    public function handle(Request $request, \Closure $next): Response
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        $user = $request->user();
        $lang = app()->getLocale();
        if (null !== $user) {
        if (null !== $user) {
        if (null !== $user) {
        if (null !== $user) {
        if (null !== $user) {
            $lang = $user->lang ?? app()->getLocale();
        }

        URL::defaults(['lang' => $lang]);

        return $next($request);
    }
}
