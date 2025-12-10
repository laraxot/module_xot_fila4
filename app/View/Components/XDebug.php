<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use RuntimeException;
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
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
=======
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
<<<<<<< HEAD
use RuntimeException;
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
use Safe\filter;

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
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {
    }
=======
=======
    ) {
    }
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> a12f125f4a (.)
=======
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    ) {
    }
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)

    public function render(): View
    {
        /** @var view-string $view */
        $view = app(GetViewAction::class)->execute($this->tpl);
        /** @var array<string, string> $view_params */
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);
        $view_params = [
            'html' => $this->debugStack(),
        ];

        dddx($view_params);
        dddx($view_params);
        dddx($view_params);
        dddx($view_params);
        dddx($view_params);

        return view($view, $view_params);
    }

    public function debugStack(): string
    {
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
<<<<<<< HEAD
        if (! extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (! extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
        if (!extension_loaded('xdebug')) {
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
        if (!extension_loaded('xdebug')) {
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
            throw new RuntimeException('XDebug must be installed to use this function');
<<<<<<< HEAD
        if (!extension_loaded('xdebug')) {
            throw new RuntimeException('XDebug must be installed to use this function');
        if (! extension_loaded('xdebug')) {
            throw new \RuntimeException('XDebug must be installed to use this function');
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!extension_loaded('xdebug')) {
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> a12f125f4a (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> b93ef594b4 (.)
            throw new RuntimeException('XDebug must be installed to use this function');
=======
        if (! extension_loaded('xdebug')) {
            throw new \RuntimeException('XDebug must be installed to use this function');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
        return \is_string($out1) ? $out1 : ((string) $out1);
=======
>>>>>>> 2f3197ab (.)
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
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
>>>>>>> ce6fc085 (.)
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
<<<<<<< HEAD
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : ((string) $out1);
=======
>>>>>>> ca9324a4 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
=======
        return is_string($out1) ? $out1 : (string) $out1;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    }
}
