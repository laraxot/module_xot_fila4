<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 091f883c (.)
use RuntimeException;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
use Safe\filter;
=======
>>>>>>> 551c768c4 (.)
=======
use RuntimeException;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
>>>>>>> 414a4ffcb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {
    }
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
>>>>>>> 7468a7d2 (.)
=======
    ) {
    }
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
    ) {}
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    ) {}
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)

    public function render(): View
    {
        /** @var view-string $view */
        $view = app(GetViewAction::class)->execute($this->tpl);
        /** @var array<string, string> $view_params */
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        $view_params = [
            'html' => $this->debugStack(),
        ];

<<<<<<< HEAD
<<<<<<< HEAD
        dddx($view_params);
        dddx($view_params);
        dddx($view_params);
        dddx($view_params);
        dddx($view_params);
=======
        \dddx($view_params);
>>>>>>> 551c768c4 (.)
=======
        \dddx($view_params);
>>>>>>> 414a4ffcb (.)

        return view($view, $view_params);
    }

    public function debugStack(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
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
=======
        if (! extension_loaded('xdebug')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! extension_loaded('xdebug')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (!extension_loaded('xdebug')) {
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
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
        if (!extension_loaded('xdebug')) {
>>>>>>> 5a14301c (.)
=======
        if (!extension_loaded('xdebug')) {
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
            throw new RuntimeException('XDebug must be installed to use this function');
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            throw new RuntimeException('XDebug must be installed to use this function');
=======
        if (! extension_loaded('xdebug')) {
            throw new \RuntimeException('XDebug must be installed to use this function');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
        if (! \extension_loaded('xdebug')) {
            throw new RuntimeException('XDebug must be installed to use this function');
>>>>>>> 551c768c4 (.)
=======
        if (! \extension_loaded('xdebug')) {
            throw new RuntimeException('XDebug must be installed to use this function');
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        return is_string($out1) ? $out1 : ((string) $out1);
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        return is_string($out1) ? $out1 : ((string) $out1);
        return is_string($out1) ? $out1 : (string) $out1;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 53d6a6ba (.)
=======
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        return \is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 551c768c4 (.)
=======
        return \is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 414a4ffcb (.)
    }
}
