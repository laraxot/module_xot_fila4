<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components\Dashboard;

<<<<<<< HEAD
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Renderable;
=======
use Illuminate\Contracts\View\View;
>>>>>>> 551c768c4 (.)
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
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'xot::components.dashboard.item';
=======
>>>>>>> 551c768c4 (.)
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
