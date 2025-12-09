<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

use RuntimeException;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
=======
=======
=======
<<<<<<< HEAD
use RuntimeException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
use Safe\filter;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

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
    ) {
    }
>>>>>>> f1d4085 (.)
=======
    ) {}
>>>>>>> 73eab74 (.)

<<<<<<< HEAD
<<<<<<< HEAD
    public function render(): View
    {
        /** @var view-string $view */
        $view = app(GetViewAction::class)->execute($this->tpl);
        /** @var array<string, string> $view_params */
=======
=======
>>>>>>> 5a14301c (.)
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $view_params = [
            'html' => $this->debugStack(),
        ];

<<<<<<< HEAD
<<<<<<< HEAD
        \dddx($view_params);
=======
        dddx($view_params);
>>>>>>> 5a14301c (.)
=======
        dddx($view_params);
>>>>>>> 5a14301c (.)

        return view($view, $view_params);
    }

    public function debugStack(): string
    {
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
        if (!extension_loaded('xdebug')) {
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
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
        return is_string($out1) ? $out1 : ((string) $out1);
=======
        return is_string($out1) ? $out1 : (string) $out1;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    }
}
