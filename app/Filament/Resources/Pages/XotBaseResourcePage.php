<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
use Filament\Resources\Pages\Concerns\HasRelationManagers;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page as FilamentResourcePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Resources\Pages\Concerns\HasRelationManagers;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page as FilamentResourcePage;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Resources\Pages\Concerns\HasRelationManagers;

use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page as FilamentResourcePage;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop

abstract class XotBaseResourcePage extends FilamentResourcePage
{
    use HasRelationManagers;
    use InteractsWithRecord;
    use NavigationLabelTrait;
}
