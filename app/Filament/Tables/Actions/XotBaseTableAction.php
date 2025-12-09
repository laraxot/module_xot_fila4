<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Tables\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
use Filament\Actions\Action;
<<<<<<< HEAD
=======
use Filament\Actions\Action;
<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
use Closure;
>>>>>>> 3fbbf1f5 (.)
=======
use Filament\Actions\Action;
use Closure;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
=======
>>>>>>> a12f125f4a (.)
=======
use Closure;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Filament\Actions\Action;
use Closure;
>>>>>>> ca9324a4 (.)
=======
use Filament\Actions\Action;
use Closure;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
use Illuminate\Database\Eloquent\Model;

/**
 * @property ?Model $record
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @method ?Model getRecord()
 */
abstract class XotBaseTableAction extends Action
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function getRecord(bool $withDefault = true): ?Model
=======
=======
>>>>>>> 5a14301c (.)
    /**
     * @return Model|null
     */
<<<<<<< HEAD
    public function getRecord(bool $withDefault = true): null|Model
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    {
        if ($this->record instanceof Closure) {
            return null;
        }

=======
    public function getRecord(): ?Model
    {
>>>>>>> f1d4085 (.)
        return $this->record;
    }
}
