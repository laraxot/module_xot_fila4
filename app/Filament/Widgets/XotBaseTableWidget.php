<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Widgets\TableWidget as FilamentTableWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Modules\Xot\Filament\Traits\TransTrait;

abstract class XotBaseTableWidget extends FilamentTableWidget
{
    use TransTrait;
    use InteractsWithPageFilters;
}
