<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ModuleResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
=======
=======
>>>>>>> 399f46d3 (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 5a14301c (.)

class CreateModule extends XotBaseCreateRecord
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Xot\Filament\Resources\ModuleResource;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

=======
=======
use Modules\Xot\Filament\Resources\ModuleResource;
>>>>>>> origin/develop




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

>>>>>>> b93ef594b4 (.)
class CreateModule extends XotBaseCreateRecord
=======
class CreateModule extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
{
    protected static string $resource = ModuleResource::class;
}
