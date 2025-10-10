<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
use Exception;
use Illuminate\Foundation\Configuration\Exceptions;
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Configuration\Exceptions;
=======
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Foundation\Configuration\Exceptions;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Modules\Xot\Actions\View\GetViewPathAction;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
=======
=======
>>>>>>> origin/develop
use Illuminate\Foundation\Configuration\Exceptions;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
=======
        
        $exceptions->render(function (HttpException $e,Request $request) {
            $status_code=$e->getStatusCode();
>>>>>>> a12f125f4a (.)
=======
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
>>>>>>> b93ef594b4 (.)
=======
        
        $exceptions->render(function (HttpException $e,Request $request) {
            $status_code=$e->getStatusCode();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], $status_code);
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            $view = 'pub_theme::errors.' . $status_code;
            if (!view()->exists($view)) {
                throw new Exception(
                    'view not found: [' . $view . '] view path:' . app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];
<<<<<<< HEAD
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
            

            $view='pub_theme::errors.'.$status_code;
            if(!view()->exists($view)){
                throw new \Exception('view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view));    
                
            }
            $view_params=['exception'=>$e];
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return response()->view($view, $view_params, $status_code);
        });
    }
}
