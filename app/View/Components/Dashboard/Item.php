<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components\Dashboard;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\View\View;
=======
use Illuminate\Contracts\Support\Renderable;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Contracts\Support\Renderable;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(): View
    {
        /** @var view-string $view */
        $view = 'xot::components.dashboard.item';
        /** @var array<string, string> $view_params */
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'xot::components.dashboard.item';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
