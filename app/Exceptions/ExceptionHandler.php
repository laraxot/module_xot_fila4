<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
use Exception;
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
use Modules\Xot\Actions\View\GetViewPathAction;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
{
    /**
     * Configura la gestione delle eccezioni.
     *
<<<<<<< HEAD
     * @param  Exceptions  $exceptions  Configuratore eccezioni Laravel
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Exceptions  $exceptions  Configuratore eccezioni Laravel
=======
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
>>>>>>> 5a14301c (.)
=======
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
>>>>>>> 5a14301c (.)
=======
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
>>>>>>> 5a14301c (.)
=======
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
>>>>>>> 5a14301c (.)
=======
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
>>>>>>> 5a14301c (.)
=======
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], $status_code);
            }
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
            $view = 'pub_theme::errors.'.$status_code;
            if (! view()->exists($view)) {
                throw new Exception(
                    'view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view),
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
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
            
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> laraxot/develop

            $view = 'pub_theme::errors.' . $status_code;
            if (!view()->exists($view)) {
                throw new Exception(
                    'view not found: [' . $view . '] view path:' . app(GetViewPathAction::class)->execute($view),
                );
            }
<<<<<<< HEAD
            $view_params=['exception'=>$e];
            $view_params = ['exception' => $e];

=======
<<<<<<< HEAD
            $view_params=['exception'=>$e];
>>>>>>> a12f125f4a (.)
=======
            $view_params = ['exception' => $e];
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
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
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            

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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> laraxot/develop
            return response()->view($view, $view_params, $status_code);
        });
    }
}
