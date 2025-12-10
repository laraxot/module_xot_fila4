<?php

declare(strict_types=1);

namespace Modules\Xot\Http\Middleware;

/*
 * https://laravel.com/docs/8.x/urls#default-values
 */
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
use Filament\Facades\Filament;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;

/**
 * Class SetDefaultTenantForUrlsMiddleware.
 */
class SetDefaultTenantForUrlsMiddleware
{
    /**
     * Handle the incoming request.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
    public function handle(
        Request $request,
        Closure $next,
    ): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response {
        URL::defaults([
            'tenant' => Filament::getTenant(),
            // 'referrer' => url()->previous(),
        ]);
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
>>>>>>> 218dfed3 (.)
=======
    public function handle(Request $request, Closure $next): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
    public function handle(Request $request, Closure $next): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function handle(Request $request, \Closure $next): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
=======
    public function handle(Request $request, Closure $next): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
>>>>>>> dbce41cec (.)
    {
        URL::defaults(
            [
                'tenant' => Filament::getTenant(),
                // 'referrer' => url()->previous(),
            ]
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)

        // @phpstan-ignore return.type
        return $next($request);
    }
}
