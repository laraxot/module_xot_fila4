<?php

declare(strict_types=1);

namespace Modules\Xot\Http\Middleware;

<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Http\Response;
=======
use Illuminate\Http\Response;
=======
<<<<<<< HEAD
use Closure;
use Illuminate\Http\Response;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Http\Request;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Http\Response;
use Illuminate\Http\Request;
>>>>>>> 5a14301c (.)

class Cors
{
    /**
     * Handle an incoming request.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function handle(Request $request, Closure $next): Response
=======
=======
>>>>>>> 5a14301c (.)
     *
<<<<<<< HEAD
     * @return Response
     */
    public function handle(Request $request, Closure $next)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
     * @return Response
     */
    public function handle(Request $request, Closure $next)
=======
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, \Closure $next)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
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
