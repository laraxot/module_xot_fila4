<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Filament\Schemas\Components\Component;
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
     * @return array<string, Component>
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
