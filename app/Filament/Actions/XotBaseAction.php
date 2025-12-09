<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action as FilamentAction;
=======
use Filament\Actions\Action;
>>>>>>> 5a14301c (.)
=======
use Filament\Actions\Action;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;

/**
 * Base class for Filament actions.
 *
 * @property ?Model $record The associated record for this action
 *
 * @method static static make(?string $name = null) Create a new instance of the action
 */
<<<<<<< HEAD
<<<<<<< HEAD
abstract class XotBaseAction extends FilamentAction {}
=======
abstract class XotBaseAction extends Action
{
}
>>>>>>> 5a14301c (.)
=======
abstract class XotBaseAction extends Action
{
}
>>>>>>> 5a14301c (.)
