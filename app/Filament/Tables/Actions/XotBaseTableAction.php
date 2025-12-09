<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Tables\Actions;

<<<<<<< HEAD
use Closure;
use Filament\Actions\Action;
=======
use Filament\Actions\Action;
use Closure;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;

/**
 * @property ?Model $record
<<<<<<< HEAD
 *
=======
>>>>>>> 5a14301c (.)
 * @method ?Model getRecord()
 */
abstract class XotBaseTableAction extends Action
{
<<<<<<< HEAD
    public function getRecord(bool $withDefault = true): ?Model
=======
    /**
     * @return Model|null
     */
    public function getRecord(bool $withDefault = true): null|Model
>>>>>>> 5a14301c (.)
    {
        if ($this->record instanceof Closure) {
            return null;
        }

        return $this->record;
    }
}
