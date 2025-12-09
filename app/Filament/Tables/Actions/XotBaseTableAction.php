<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Tables\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
use Filament\Actions\Action;
<<<<<<< HEAD
=======
use Filament\Actions\Action;
use Closure;
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
<<<<<<< HEAD
     * @return Model|null
     */
=======
<<<<<<< HEAD
     * @return Model|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function getRecord(bool $withDefault = true): null|Model
>>>>>>> 5a14301c (.)
    {
        if ($this->record instanceof Closure) {
            return null;
        }

<<<<<<< HEAD
=======
=======
    public function getRecord(): ?Model
    {
>>>>>>> a12f125f4a (.)
=======
    public function getRecord(bool $withDefault = true): null|Model
    {
        if ($this->record instanceof Closure) {
            return null;
        }

>>>>>>> b93ef594b4 (.)
=======
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function getRecord(): ?Model
    {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $this->record;
    }
}
