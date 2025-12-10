<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
use Filament\Resources\Pages\Concerns\HasRelationManagers;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page as FilamentResourcePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
use Filament\Resources\Pages\Concerns\HasRelationManagers;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page as FilamentResourcePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
=======
>>>>>>> 2f3197ab (.)
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Resources\Pages\Concerns\HasRelationManagers;

use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page as FilamentResourcePage;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

abstract class XotBaseResourcePage extends FilamentResourcePage
{
    use HasRelationManagers;
    use InteractsWithRecord;
    use NavigationLabelTrait;
}
