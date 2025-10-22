<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

use Illuminate\Contracts\Support\Renderable;
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
>>>>>>> 300ef70 (.)

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
<<<<<<< HEAD
        if (! extension_loaded('xdebug')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!extension_loaded('xdebug')) {
=======
        if (! extension_loaded('xdebug')) {
>>>>>>> f1d4085 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (!extension_loaded('xdebug')) {
>>>>>>> 300ef70 (.)
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
        return is_string($out1) ? $out1 : ((string) $out1);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return is_string($out1) ? $out1 : ((string) $out1);
=======
        return is_string($out1) ? $out1 : (string) $out1;
>>>>>>> f1d4085 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return is_string($out1) ? $out1 : ((string) $out1);
>>>>>>> 300ef70 (.)
    }
}
