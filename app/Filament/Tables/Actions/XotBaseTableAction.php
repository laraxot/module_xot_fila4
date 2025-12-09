<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Tables\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
use Closure;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
use Filament\Actions\Action;
use Closure;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
>>>>>>> 399f46d3 (.)
=======
use Filament\Actions\Action;
use Closure;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
>>>>>>> 17684f52 (.)
=======
>>>>>>> a12f125f4a (.)
=======
use Closure;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
use Closure;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Filament\Actions\Action;
use Closure;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
use Closure;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
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
