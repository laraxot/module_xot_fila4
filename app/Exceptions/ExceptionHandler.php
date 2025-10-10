<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Configuration\Exceptions;
=======
>>>>>>> f1d4085 (.)
=======
use Illuminate\Foundation\Configuration\Exceptions;
>>>>>>> 73eab74 (.)
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Modules\Xot\Actions\View\GetViewPathAction;
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
{
    /**
     * Configura la gestione delle eccezioni.
     *
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
     */
    public static function handles(Exceptions $exceptions): void
    {
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
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], $status_code);
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

            $view = 'pub_theme::errors.' . $status_code;
            if (!view()->exists($view)) {
                throw new Exception(
                    'view not found: [' . $view . '] view path:' . app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];
<<<<<<< HEAD
=======
            

            $view='pub_theme::errors.'.$status_code;
            if(!view()->exists($view)){
                throw new Exception('view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view));    
                
            }
            $view_params=['exception'=>$e];
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            return response()->view($view, $view_params, $status_code);
        });
    }
}
