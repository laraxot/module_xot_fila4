<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\TableWidget as FilamentTableWidget;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
namespace Modules\Xot\Filament\Widgets;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Widgets\TableWidget as FilamentTableWidget;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

abstract class XotBaseTableWidget extends FilamentTableWidget
{
    use InteractsWithPageFilters;
    use TransTrait;
}
