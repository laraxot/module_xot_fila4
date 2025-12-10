<?php

declare(strict_types=1);

namespace Modules\Xot\Http\Middleware;

/*
 * https://laravel.com/docs/8.x/urls#default-values
 */
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
=======
>>>>>>> 73eab74 (.)
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
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public function handle(Request $request, Closure $next): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
>>>>>>> 2f3197ab (.)
    {
        URL::defaults(
            [
                'tenant' => Filament::getTenant(),
                // 'referrer' => url()->previous(),
            ]
        );
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

        // @phpstan-ignore return.type
        return $next($request);
    }
}
