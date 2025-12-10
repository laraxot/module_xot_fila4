<?php

declare(strict_types=1);

namespace Modules\Xot\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
// use Modules\Xot\Datas\PdfData;
// use Modules\Xot\Datas\PdfData;
=======
=======
>>>>>>> 53d6a6ba (.)
=======
// use Modules\Xot\Datas\PdfData;
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
// use Modules\Xot\Datas\PdfData;
//use Modules\Xot\Datas\PdfData;
//use Modules\Xot\Datas\PdfData;
//use Modules\Xot\Datas\PdfData;
//use Modules\Xot\Datas\PdfData;
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 2f3197ab (.)
//use Modules\Xot\Datas\PdfData;
//use Modules\Xot\Datas\PdfData;
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
=======
// use Modules\Xot\Datas\PdfData;
>>>>>>> 551c768c4 (.)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
//use Modules\Xot\Datas\PdfData;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
=======
//use Modules\Xot\Datas\PdfData;
>>>>>>> a6ef6dc7 (.)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> f1d4085 (.)
=======
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
