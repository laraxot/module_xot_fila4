<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Xot\Contracts\SateContract.
 *
 * @property string $name
 */
interface StateContract
{
    public function label(): string;

    public function color(): string;

    public function bgColor(): string;

    public function icon(): string;

    public function modalHeading(): string;

    public function modalDescription(): string;

    /**
     * Get the modal form schema.
     *
<<<<<<< HEAD
     * @return array<string, Component>
=======
<<<<<<< HEAD
     * @return array<string, Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Component>
=======
     * @return array<string, \Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string, Component>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, \Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
     */
    public function modalFormSchema(): array;

    /**
     * Fill form data by record.
     *
     * @return array<string, mixed>
     */
    public function modalFillFormByRecord(Model $record): array;

    /**
     * Execute modal action by record.
     *
     * @param  array<string, mixed>  $data
     */
    public function modalActionByRecord(Model $record, array $data): void;
}
