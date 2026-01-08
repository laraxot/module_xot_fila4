<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
use RuntimeException;

use function Safe\ob_end_clean;
use function Safe\ob_start;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
class XDebug extends Component
{
    public function __construct(
        // public Post $article,
        // public bool $showAuthor = false,
        public string $tpl = 'v1',
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> f1d4085 (.)
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    ) {}
>>>>>>> 285375c74 (.)

    public function render(): View
    {
        /** @var string $view */
        $view = app(GetViewAction::class)->execute($this->tpl);

        if (! ViewFacade::exists($view)) {
            throw new RuntimeException("View [{$view}] does not exist.");
        }

        /** @var view-string $view */

        /** @var array<string, string> $view_params */
        $view_params = [
            'html' => $this->debugStack(),
        ];

        return view($view, $view_params);
    }

    public function debugStack(): string
    {
<<<<<<< HEAD
        if (! \extension_loaded('xdebug')) {
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
        if (! \extension_loaded('xdebug')) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        if (!extension_loaded('xdebug')) {
>>>>>>> 5a14301c (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        if (!extension_loaded('xdebug')) {
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 3fbbf1f5 (.)
=======
=======
        if (! extension_loaded('xdebug')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        if (!extension_loaded('xdebug')) {
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 7131bd09 (.)
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 3310e9c6 (.)
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
            throw new RuntimeException('XDebug must be installed to use this function');
        }

        ob_start();

        echo 'Hello ';

        // xdebug_set_filter(
        //     XDEBUG_FILTER_TRACING,
        //     XDEBUG_PATH_EXCLUDE,
        //     [LARAVEL_DIR.'/vendor/']
        //     // [__DIR__.'/../../vendor/']
        // );

        // xdebug_print_function_stack();

        $out1 = ob_get_contents();
        ob_end_clean();

<<<<<<< HEAD
        return \is_string($out1) ? $out1 : ((string) $out1);
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
        return \is_string($out1) ? $out1 : ((string) $out1);
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 5a14301c (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 3fbbf1f5 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 399f46d3 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return is_string($out1) ? $out1 : ((string) $out1);
=======
        return is_string($out1) ? $out1 : (string) $out1;
>>>>>>> a12f125f4a (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> b93ef594b4 (.)
=======
        return is_string($out1) ? $out1 : (string) $out1;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> ca9324a4 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        return is_string($out1) ? $out1 : ((string) $out1);
=======
        return is_string($out1) ? $out1 : (string) $out1;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> ca9324a4 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
=======
        return is_string($out1) ? $out1 : (string) $out1;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 9db27d12 (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
    }
}
