<?php

declare(strict_types=1);

namespace Modules\Xot\States;

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
=======
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Filament\Forms\Components\Textarea;
>>>>>>> b7afadf9 (.)
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 300ef70 (.)
=======
>>>>>>> 53d6a6ba (.)
use Filament\Forms\Components\Textarea;
>>>>>>> ab8cc3f3 (.)
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
=======
>>>>>>> 71586de2 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 3310e9c6 (.)
use Filament\Forms\Components\Textarea;
>>>>>>> b7afadf9 (.)
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
use Filament\Forms\Components\Textarea;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
>>>>>>> 3310e9c6 (.)
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
=======
>>>>>>> 3310e9c6 (.)
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
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components;
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 53d6a6ba (.)
use Spatie\ModelStates\State;

/**
 * Abstract base class for appointment state management.
 *
 * Defines the state machine configuration and required methods
 * that must be implemented by each concrete state class.
 *
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
 * @property string $name Il nome dello stato
=======
 * @property string $name  Il nome dello stato
>>>>>>> 5a14301c (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3fbbf1f5 (.)
=======
 * @property string $name  Il nome dello stato
=======
 * @property string $name  Il nome dello stato
>>>>>>> 399f46d3 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 399f46d3 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 399f46d3 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> a12f125f4a (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> b93ef594b4 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> ca9324a4 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
 * @property string $name Il nome dello stato
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
 * @property string $name Il nome dello stato
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
 * @extends State<\Illuminate\Database\Eloquent\Model>
 *
 * @property string $name Il nome dello stato
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> ca9324a4 (.)
=======
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3310e9c6 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 5a14301c (.)
=======
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> ca9324a4 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 5a14301c (.)
=======
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> ca9324a4 (.)
=======
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
 * @property string $name Il nome dello stato
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
 * @property string $name Il nome dello stato
>>>>>>> 71586de2 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 5a14301c (.)
=======
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> ca9324a4 (.)
=======
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
 * @property string $name Il nome dello stato
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
 * @property string $value Il valore dello stato nel database
 */
abstract class XotBaseState extends State implements StateContract
{
    use TransTrait;

    public static string $name;

    public static function getName(): string
    {
        /* @phpstan-ignore-next-line */
        return static::$name ?? Str::of(class_basename(static::class))->snake()->toString();
    }

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
    #[Override]
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
    #[Override]
    public function label(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.label');

        // return 'Annullato';
    }

    #[Override]
    public function color(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
    }

    #[Override]
    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');

        // return 'info';
    }

    #[Override]
    public function icon(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');

        // return 'heroicon-o-x-circle';
    }

    #[Override]
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');

        // return 'Annulla Appuntamento';
    }

    #[Override]
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public function label(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[Override]
    public function label(): string
    {
>>>>>>> 53d6a6ba (.)
        return static::transClass(static::class, 'states.'.static::getName().'.label');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
>>>>>>> 3fbbf1f5 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
    public function label(): string
    {
=======
    #[Override]
    public function label(): string
    {
>>>>>>> 53d6a6ba (.)
        return static::transClass(static::class, 'states.'.static::getName().'.label');
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
=======
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
    public function label(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
>>>>>>> 399f46d3 (.)

        // return 'Annullato';
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    public function color(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.color');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
>>>>>>> 3fbbf1f5 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
>>>>>>> 5a14301c (.)
=======
    #[Override]
    public function color(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
>>>>>>> 399f46d3 (.)
    }

    #[Override]
    public function bgColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
>>>>>>> 3fbbf1f5 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
>>>>>>> 5a14301c (.)
=======
=======
        // return 'Annullato';
    }

>>>>>>> ed734516 (.)
    public function color(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
>>>>>>> 399f46d3 (.)

        // return 'info';
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    public function icon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.icon');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
>>>>>>> 3fbbf1f5 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
>>>>>>> 5a14301c (.)
=======
    public function icon(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.icon');
>>>>>>> b7afadf9 (.)
=======
    #[Override]
    public function icon(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
>>>>>>> 399f46d3 (.)

        // return 'heroicon-o-x-circle';
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    public function modalHeading(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
>>>>>>> 3fbbf1f5 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
>>>>>>> 5a14301c (.)
=======
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
>>>>>>> b7afadf9 (.)
=======
    #[Override]
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
>>>>>>> 399f46d3 (.)

        // return 'Annulla Appuntamento';
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');
        // return 'Annullato';
    }

=======
    #[Override]
>>>>>>> 53d6a6ba (.)
    public function color(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    #[Override]
    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
        // return 'info';
    }

    #[Override]
    public function icon(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.icon');
        // return 'heroicon-o-x-circle';
    }

    #[Override]
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
        // return 'Annulla Appuntamento';
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');

        // return 'Annullato';
    }

    public function color(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');

        // return 'info';
    }

    public function icon(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.icon');

        // return 'heroicon-o-x-circle';
    }

    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');

        // return 'Annulla Appuntamento';
    }

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
    public function modalDescription(): string
    {
        $appointment = $this->getModel();

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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
>>>>>>> 3310e9c6 (.)
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
=======
>>>>>>> 3310e9c6 (.)
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
=======
>>>>>>> 3310e9c6 (.)
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> 3fbbf1f5 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> 5a14301c (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> a6ef6dc7 (.)

=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> f1d4085 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

>>>>>>> 300ef70 (.)
        // return 'Sei sicuro di voler annullare questo appuntamento?';
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
    /**
     * @return array<string, Component>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> 5a14301c (.)
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> 5a14301c (.)
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
    #[Override]
=======
>>>>>>> b7afadf9 (.)
=======
    #[Override]
>>>>>>> 71586de2 (.)
=======
    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
     * @return array<string, Component>
     */
<<<<<<< HEAD
    #[Override]
>>>>>>> 5a14301c (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function modalFormSchema(): array
    {
        return [
            'message' => Textarea::make('message')->required()->maxLength(255),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * @return array<string, \Filament\Schemas\Components\Component>
     */
    public function modalFormSchema(): array
    {
        return [
            'message' => Textarea::make('message')
                ->required()
                ->maxLength(255),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        ];
    }

    /**
     * Fill form data for modal.
     *
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
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 7131bd09 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 7131bd09 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 73eab74 (.)
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
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 3310e9c6 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 71586de2 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
     * @return array<string, mixed>
     */
    public function modalFillForm(array $arguments, array $data): array
    {
        return $data;
    }

    /**
     * Fill form data for modal by record.
     *
     * @return array<string, mixed>
     */
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
=======
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
=======
    #[Override]
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
    #[Override]
>>>>>>> 71586de2 (.)
=======
    #[Override]
>>>>>>> 5a14301c (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
    #[Override]
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    #[Override]
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> ca9324a4 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    #[Override]
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
    public function modalFillFormByRecord(Model $record): array
    {
        return [];
    }

    /**
     * Execute modal action.
     *
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
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 7131bd09 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 7131bd09 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 7131bd09 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
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
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 71586de2 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
     */
    public function modalAction(array $arguments, array $data): void
    {
        $this->processStateAction($arguments, $data);
    }

    /**
     * Process state action.
     *
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
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 7131bd09 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 7131bd09 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 7131bd09 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
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
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 71586de2 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
     */
    public function processStateAction(array $arguments, array $data): void
    {
        $message = Arr::get($data, 'message');
        $stateClass = static::class;
        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
         *
         * $appointmentId = $arguments['appointment'];
         * $appointment = Appointment::firstWhere('id',$appointmentId);
         *
         * $appointment?->state->transitionTo($stateClass,$message);
         */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

        $appointmentId = $arguments['appointment'];
        $appointment = Appointment::firstWhere('id',$appointmentId);

        $appointment?->state->transitionTo($stateClass,$message);
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        $record = $this->getModel();
        /* @phpstan-ignore-next-line */
        $record->state->transitionTo($stateClass, $message);
    }

    /**
     * Execute modal action by record.
     *
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
     * @param  array<string, mixed>  $data
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
>>>>>>> 3310e9c6 (.)
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
=======
>>>>>>> 3310e9c6 (.)
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
     * @param array<string, mixed> $data
     */
    #[Override]
<<<<<<< HEAD
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 7131bd09 (.)
=======
     * @param  array<string, mixed>  $data
     */
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
     * @param  array<string, mixed>  $data
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
     * @param array<string, mixed> $data
     */
    #[Override]
=======
     * @param  array<string, mixed>  $data
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string, mixed> $data
     */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $data
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
>>>>>>> a6ef6dc7 (.)
     */
    #[Override]
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
     * @param  array<string, mixed>  $data
     */
>>>>>>> f1d4085 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
    public function modalActionByRecord(Model $record, array $data): void
    {
        $this->processStateActionByRecord($record, $data);
    }

    /**
     * Process state action by record.
     *
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
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
     * @param array<string, mixed> $data
=======
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> a12f125f4a (.)
=======
     * @param array<string, mixed> $data
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
     * @param  array<string, mixed>  $data
>>>>>>> 71586de2 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
     */
    public function processStateActionByRecord(Model $record, array $data): void
    {
        $message = Arr::get($data, 'message');
        $stateClass = static::class;
        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
         *
         * $appointmentId = $arguments['appointment'];
         * $appointment = Appointment::firstWhere('id',$appointmentId);
         *
         * $appointment?->state->transitionTo($stateClass,$message);
         */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

        $appointmentId = $arguments['appointment'];
        $appointment = Appointment::firstWhere('id',$appointmentId);

        $appointment?->state->transitionTo($stateClass,$message);
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        /* @phpstan-ignore-next-line */
        $record->state->transitionTo($stateClass, $message);
    }

    public function isMessageRequired(): bool
    {
        return false;
    }

    public static function getOptions(): array
    {
        $states = static::getStateMapping()->toArray();

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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
>>>>>>> d2b0a27 (.)
            static::class,
<<<<<<< HEAD
            'states.'.(is_string($state) ? $state : (string) $state).'.label',
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
>>>>>>> 5a14301c (.)
=======
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
>>>>>>> 5a14301c (.)
=======
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
>>>>>>> 5a14301c (.)
=======
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
>>>>>>> 5a14301c (.)
=======
            'states.'.$state.'.label',
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
            static::class,
<<<<<<< HEAD
            'states.'.(is_string($state) ? $state : (string) $state).'.label',
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
>>>>>>> 5a14301c (.)
=======
            'states.'.$state.'.label',
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
>>>>>>> d2b0a27 (.)
            static::class,
            'states.'.(is_string($state) ? $state : (string) $state).'.label',
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
        ));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $states = Arr::map($states, function ($stateClass, $state) {
            $stateStr = is_string($state) ? $state : (string) $state;

            return static::transClass(static::class, 'states.'.$stateStr.'.label');
        });
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        return $states;
    }
}
