<?php

declare(strict_types=1);

namespace Modules\Xot\Enums;

//use Modules\Xot\Datas\PdfData;
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> a12f125f4a (.)
=======
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Support\Contracts\HasLabel;

enum PdfEngineEnum: string implements HasColor, HasIcon, HasLabel
{
    case SPIPU = 'spipu';
    case SPATIE = 'spatie';

    // public function build(PdfData $data): void
    // {
    //     return match ($this) {
    //         self::SPIPU => $this->spipubuild($data),
    //         self::SPATIE => $this->spatiebuild($data),
    //     };
    // }

    public function getLabel(): string
    {
        return match ($this) {
            self::SPIPU => 'Spipu',
            self::SPATIE => 'Spatie',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::SPIPU => 'danger',
            self::SPATIE => 'info',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::SPIPU => 'fas-female',
            self::SPATIE => 'fas-male',
        };
    }
}
