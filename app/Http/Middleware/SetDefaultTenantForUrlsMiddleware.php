<?php

declare(strict_types=1);

namespace Modules\Xot\Http\Middleware;

/*
 * https://laravel.com/docs/8.x/urls#default-values
 */
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public function handle(Request $request, Closure $next): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
    public function handle(Request $request, Closure $next): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
=======
    public function handle(Request $request, \Closure $next): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    {
        URL::defaults(
            [
                'tenant' => Filament::getTenant(),
                // 'referrer' => url()->previous(),
            ]
        );
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

        // @phpstan-ignore return.type
        return $next($request);
    }
}
