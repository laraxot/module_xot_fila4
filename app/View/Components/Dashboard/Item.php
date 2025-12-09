<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components\Dashboard;

<<<<<<< HEAD
use Illuminate\Contracts\View\View;
=======
use Illuminate\Contracts\Support\Renderable;
>>>>>>> 5a14301c (.)
use Illuminate\View\Component;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * Class Field.
 */
class Item extends Component
{
<<<<<<< HEAD
    public function render(): View
    {
        /** @var view-string $view */
        $view = 'xot::components.dashboard.item';
        /** @var array<string, string> $view_params */
=======
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'xot::components.dashboard.item';
>>>>>>> 5a14301c (.)
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
