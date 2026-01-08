<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Tables\Actions;

<<<<<<< HEAD
use Closure;
use Filament\Actions\Action;
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
use Closure;
use Filament\Actions\Action;
>>>>>>> ab8cc3f3 (.)
=======
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
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
=======
use Filament\Actions\Action;
use Closure;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
use Closure;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getRecord(bool $withDefault = true): ?Model
=======
=======
>>>>>>> 5a14301c (.)
    /**
     * @return Model|null
     */
    public function getRecord(bool $withDefault = true): null|Model
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
