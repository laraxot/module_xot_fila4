<?php

declare(strict_types=1);

namespace Modules\Xot\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Http\Response;
=======
use Illuminate\Http\Response;
use Illuminate\Http\Request;
>>>>>>> 5a14301c (.)

class Cors
{
    /**
     * Handle an incoming request.
<<<<<<< HEAD
     */
    public function handle(Request $request, Closure $next): Response
=======
     *
     * @return Response
     */
    public function handle(Request $request, Closure $next)
>>>>>>> 5a14301c (.)
    {
        $response = $next($request);

        // @phpstan-ignore property.nonObject
        $headers = $response->headers;

        // @phpstan-ignore method.nonObject
        $headers->set('Access-Control-Allow-Origin', '*');
        // @phpstan-ignore method.nonObject
        $headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
        // @phpstan-ignore method.nonObject
        $headers->set('Access-Control-Allow-Headers', 'Content-Type, X-Auth-Token, Origin, Authorization');

        // @phpstan-ignore return.type
        return $response;
    }
}
