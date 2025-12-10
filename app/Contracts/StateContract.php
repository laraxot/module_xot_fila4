<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
use Filament\Schemas\Components\Component;
>>>>>>> 300ef70 (.)
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
     * @return array<string, Component>
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
=======
     * @return array<string, Component>
>>>>>>> 300ef70 (.)
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
