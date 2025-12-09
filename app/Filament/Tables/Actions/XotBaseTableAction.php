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
use Closure;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
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
use Filament\Actions\Action;
use Closure;
>>>>>>> 399f46d3 (.)
=======
use Filament\Actions\Action;
use Closure;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
use Filament\Actions\Action;
use Closure;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
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
use Filament\Actions\Action;
use Closure;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
use Illuminate\Database\Eloquent\Model;

/**
 * @property ?Model $record
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function getRecord(bool $withDefault = true): ?Model
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    /**
     * @return Model|null
     */
<<<<<<< HEAD
    public function getRecord(bool $withDefault = true): null|Model
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
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
