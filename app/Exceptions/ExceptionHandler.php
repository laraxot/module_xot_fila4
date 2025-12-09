<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

use Exception;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
>>>>>>> 5a14301c (.)
use Modules\Xot\Actions\View\GetViewPathAction;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionHandler
{
    /**
     * Configura la gestione delle eccezioni.
     *
<<<<<<< HEAD
     * @param  Exceptions  $exceptions  Configuratore eccezioni Laravel
=======
     * @param Exceptions $exceptions Configuratore eccezioni Laravel
     * @return void
>>>>>>> 5a14301c (.)
     */
    public static function handles(Exceptions $exceptions): void
    {
        $exceptions->render(function (HttpException $e, Request $request) {
            $status_code = $e->getStatusCode();
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], $status_code);
            }

<<<<<<< HEAD
            $view = 'pub_theme::errors.'.$status_code;
            if (! view()->exists($view)) {
                throw new Exception(
                    'view not found: ['.$view.'] view path:'.app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];

=======
            $view = 'pub_theme::errors.' . $status_code;
            if (!view()->exists($view)) {
                throw new Exception(
                    'view not found: [' . $view . '] view path:' . app(GetViewPathAction::class)->execute($view),
                );
            }
            $view_params = ['exception' => $e];
>>>>>>> 5a14301c (.)
            return response()->view($view, $view_params, $status_code);
        });
    }
}
