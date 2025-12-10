<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
use Filament\Schemas\Components\Component;
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
use Filament\Schemas\Components\Component;
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Component>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, \Filament\Forms\Components\Component>
=======
=======
     * @return array<string, \Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     * @return array<string, Component>
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
     * @return array<string, Component>
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Component>
=======
     * @return array<string, \Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
=======
     * @return array<string, Component>
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
     * @return array<string, Component>
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
     * @return array<string, Component>
=======
     * @return array<string, \Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
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
