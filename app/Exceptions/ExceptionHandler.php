<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

use Exception;
<<<<<<< HEAD
use Illuminate\Foundation\Configuration\Exceptions;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Configuration\Exceptions;
=======
>>>>>>> f1d4085 (.)
=======
use Illuminate\Foundation\Configuration\Exceptions;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use Illuminate\Http\Request;
use Modules\Xot\Actions\View\GetViewPathAction;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
=======
use Illuminate\Foundation\Configuration\Exceptions;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler 
>>>>>>> f1d4085 (.)
=======
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
{
    /**
     * Configura la gestione delle eccezioni.
     *
     * @param  Exceptions  $exceptions  Configuratore eccezioni Laravel
     */
    public static function handles(Exceptions $exceptions): void
    {
<<<<<<< HEAD
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
=======
        
        $exceptions->render(function (HttpException $e,Request $request) {
            $status_code=$e->getStatusCode();
>>>>>>> f1d4085 (.)
=======
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], $status_code);
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

            $view = 'pub_theme::errors.'.$status_code;
            if (! view()->exists($view)) {
                throw new Exception(
                    'view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];
<<<<<<< HEAD

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
            $view = 'pub_theme::errors.' . $status_code;
            if (!view()->exists($view)) {
                throw new Exception(
                    'view not found: [' . $view . '] view path:' . app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
            
=======
>>>>>>> b93ef594b4 (.)

            $view = 'pub_theme::errors.' . $status_code;
            if (!view()->exists($view)) {
                throw new Exception(
                    'view not found: [' . $view . '] view path:' . app(GetViewPathAction::class)->execute($view),
                );
            }
<<<<<<< HEAD
            $view_params=['exception'=>$e];
>>>>>>> a12f125f4a (.)
=======
            $view_params = ['exception' => $e];
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
            

            $view='pub_theme::errors.'.$status_code;
            if(!view()->exists($view)){
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
                throw new \Exception('view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view));    
                
            }
            $view_params=['exception'=>$e];
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
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
                throw new Exception('view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view));    
                
            }
            $view_params=['exception'=>$e];
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            return response()->view($view, $view_params, $status_code);
        });
    }
}
