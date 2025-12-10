<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components\Dashboard;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Renderable;
=======
use Illuminate\Contracts\View\View;
>>>>>>> 551c768c4 (.)
=======
use Illuminate\Contracts\View\View;
>>>>>>> 414a4ffcb (.)
use Illuminate\View\Component;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * Class Field.
 */
class Item extends Component
{
    public function render(): View
    {
        /** @var view-string $view */
        $view = 'xot::components.dashboard.item';
        /** @var array<string, string> $view_params */
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'xot::components.dashboard.item';
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
