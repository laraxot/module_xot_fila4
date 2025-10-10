<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

<<<<<<< HEAD
use RuntimeException;
=======
<<<<<<< HEAD
use RuntimeException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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

        return view($view, $view_params);
    }

    public function debugStack(): string
    {
<<<<<<< HEAD
        if (!extension_loaded('xdebug')) {
            throw new RuntimeException('XDebug must be installed to use this function');
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
    }
}
