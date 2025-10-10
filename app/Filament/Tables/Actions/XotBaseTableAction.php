<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Tables\Actions;

use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
=======
>>>>>>> f1d4085 (.)
=======
use Closure;
>>>>>>> 73eab74 (.)
use Illuminate\Database\Eloquent\Model;

/**
 * @property ?Model $record
 * @method ?Model getRecord()
 */
abstract class XotBaseTableAction extends Action
{
    /**
     * @return Model|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function getRecord(bool $withDefault = true): null|Model
    {
        if ($this->record instanceof Closure) {
            return null;
        }

<<<<<<< HEAD
=======
    public function getRecord(): ?Model
    {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        return $this->record;
    }
}
