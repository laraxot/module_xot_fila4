<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Modules\Xot\Actions\View\GetViewPathAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Configuration\Exceptions;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler 
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
{
    /**
     * Configura la gestione delle eccezioni.
     *
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
     */
    public static function handles(Exceptions $exceptions): void
    {
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
        $exceptions->render(function (HttpException $e,Request $request) {
            $status_code=$e->getStatusCode();
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
>>>>>>> ce6fc085 (.)
=======
        
        $exceptions->render(function (HttpException $e,Request $request) {
            $status_code=$e->getStatusCode();
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], $status_code);
            }

            $view = 'pub_theme::errors.'.$status_code;
            if (! view()->exists($view)) {
                throw new Exception(
                    'view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];

            $view = 'pub_theme::errors.' . $status_code;
            if (!view()->exists($view)) {
                throw new Exception(
                    'view not found: [' . $view . '] view path:' . app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];
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
>>>>>>> 21348520 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 2f3197ab (.)
            

            $view = 'pub_theme::errors.' . $status_code;
            if (!view()->exists($view)) {
                throw new Exception(
                    'view not found: [' . $view . '] view path:' . app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            

            $view='pub_theme::errors.'.$status_code;
            if(!view()->exists($view)){
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
                throw new \Exception('view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view));    
                
            }
            $view_params=['exception'=>$e];
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
                throw new Exception('view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view));    
                
            }
            $view_params=['exception'=>$e];
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
            return response()->view($view, $view_params, $status_code);
        });
    }
}
