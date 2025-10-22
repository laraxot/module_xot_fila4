<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Tables\Actions;

<<<<<<< HEAD
use Closure;
use Filament\Actions\Action;
=======
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
=======
>>>>>>> f1d4085 (.)
=======
use Closure;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use Illuminate\Database\Eloquent\Model;

/**
 * @property ?Model $record
 *
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function getRecord(bool $withDefault = true): null|Model
>>>>>>> d2b0a27 (.)
    {
        if ($this->record instanceof Closure) {
            return null;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function getRecord(): ?Model
    {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        return $this->record;
    }
}
