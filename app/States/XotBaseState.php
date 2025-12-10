<?php

declare(strict_types=1);

namespace Modules\Xot\States;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
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
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> ab8cc3f3 (.)
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components;
=======
use Filament\Forms\Components\Textarea;
>>>>>>> 551c768c4 (.)
=======
use Filament\Forms\Components\Textarea;
>>>>>>> 414a4ffcb (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Traits\TransTrait;
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
 * @property string $name Il nome dello stato
 * @property string $name Il nome dello stato
<<<<<<< HEAD
<<<<<<< HEAD
 * @extends State<\Illuminate\Database\Eloquent\Model>
 *
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
 * @property string $name Il nome dello stato
=======
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
 * @property string $name Il nome dello stato
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
 * @extends State<\Illuminate\Database\Eloquent\Model>
 *
 * @property string $name Il nome dello stato
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
<<<<<<< HEAD
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name Il nome dello stato
 * @property string $name  Il nome dello stato
 * @property string $name  Il nome dello stato
=======
>>>>>>> ca9324a4 (.)
=======
 * @property string $name  Il nome dello stato
=======
 * @property string $name Il nome dello stato
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
 * @property string $name  Il nome dello stato
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
 * @property string $name Il nome dello stato
>>>>>>> 551c768c4 (.)
=======
 * @property string $name Il nome dello stato
>>>>>>> 414a4ffcb (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    #[Override]
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 551c768c4 (.)
    #[Override]
    public function label(): string
    {
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.label');

        // return 'Annullato';
    }

    #[Override]
    public function color(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    #[Override]
    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');

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

    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public function label(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
<<<<<<< HEAD
=======
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
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

        // return 'Annullato';
    }

<<<<<<< HEAD
    #[Override]
    public function color(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
    }

    #[Override]
    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
<<<<<<< HEAD
=======
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
    public function color(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

        // return 'info';
    }

<<<<<<< HEAD
    #[Override]
    public function icon(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
<<<<<<< HEAD
=======
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
    public function icon(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.icon');
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

        // return 'heroicon-o-x-circle';
    }

<<<<<<< HEAD
    #[Override]
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
<<<<<<< HEAD
=======
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
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

        // return 'Annulla Appuntamento';
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function label(): string
    {
=======
>>>>>>> 414a4ffcb (.)
        return static::transClass(static::class, 'states.'.static::getName().'.label');

        // return 'Annullato';
    }

    #[Override]
    public function color(): string
    {
<<<<<<< HEAD
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
    }

    #[Override]
    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
        // return 'Annullato';
    }

    public function color(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');

        // return 'info';
    }

        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
    public function icon(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.icon');
    #[Override]
    public function icon(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');

        // return 'heroicon-o-x-circle';
    }

        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
    #[Override]
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');

        // return 'Annulla Appuntamento';
    }

    #[Override]
    #[Override]
=======
=======
>>>>>>> 218dfed3 (.)
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');
        // return 'Annullato';
    }

    public function color(): string
    {
=======
>>>>>>> 414a4ffcb (.)
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    #[Override]
    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');

        // return 'info';
    }

    #[Override]
    public function icon(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.icon');

        // return 'heroicon-o-x-circle';
    }

    #[Override]
<<<<<<< HEAD
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');

=======
=======
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');
>>>>>>> 2f3197ab (.)
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

=======
>>>>>>> 414a4ffcb (.)
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
<<<<<<< HEAD

        // return 'Annulla Appuntamento';
    }

<<<<<<< HEAD
        // return 'Annulla Appuntamento';
    }

=======
        // return 'Annulla Appuntamento';
    }

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
    #[Override]
>>>>>>> 414a4ffcb (.)
    public function modalDescription(): string
    {
        $appointment = $this->getModel();

<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
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
>>>>>>> 5cf46378 (.)
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> 551c768c4 (.)

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
=======
=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> a6ef6dc7 (.)

=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        // return 'Sei sicuro di voler annullare questo appuntamento?';
    }

<<<<<<< HEAD
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
     * @return array<string, Component>
     */
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5cf46378 (.)
    /**
     * @return array<string, Component>
     */
    /**
     * @return array<string, Component>
     */
    #[Override]
    #[Override]
    /**
     * @return array<string, Component>
     */
    #[Override]
    #[Override]
    /**
     * @return array<string, Component>
     */
=======

        // return 'Sei sicuro di voler annullare questo appuntamento?';
    }

>>>>>>> 414a4ffcb (.)
    #[Override]
=======
>>>>>>> b7afadf9 (.)
=======
    #[Override]
>>>>>>> 551c768c4 (.)
    public function modalFormSchema(): array
    {
        return [
            'message' => Textarea::make('message')->required()->maxLength(255),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    #[Override]
    public function modalFormSchema(): array
    {
        return [
            'message' => Textarea::make('message')->required()->maxLength(255),
     * @return array<string, Components\Component>
=======
=======
>>>>>>> 218dfed3 (.)
=======
     * @return array<string, \Filament\Schemas\Components\Component>
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
     * @return array<string, \Filament\Schemas\Components\Component>
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
     */
    public function modalFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'message' => Components\Textarea::make('message')
                ->required()
                ->maxLength(255),
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
            'message' => Textarea::make('message')
                ->required()
                ->maxLength(255),
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        ];
    }

    /**
     * Fill form data for modal.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
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
>>>>>>> 2f3197ab (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 7468a7d2 (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 551c768c4 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 414a4ffcb (.)
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
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
    #[Override]
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
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
>>>>>>> 2f3197ab (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 7468a7d2 (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 551c768c4 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 414a4ffcb (.)
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
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
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
>>>>>>> 2f3197ab (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 7468a7d2 (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 551c768c4 (.)
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> 414a4ffcb (.)
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
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
         *
         * $appointmentId = $arguments['appointment'];
         * $appointment = Appointment::firstWhere('id',$appointmentId);
         *
         * $appointment?->state->transitionTo($stateClass,$message);
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)

        $appointmentId = $arguments['appointment'];
        $appointment = Appointment::firstWhere('id',$appointmentId);

        $appointment?->state->transitionTo($stateClass,$message);
        */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        $record = $this->getModel();
        /* @phpstan-ignore-next-line */
        $record->state->transitionTo($stateClass, $message);
    }

    /**
     * Execute modal action by record.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     */
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param  array<string, mixed>  $data
     */
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param  array<string, mixed>  $data
     */
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param  array<string, mixed>  $data
     */
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param  array<string, mixed>  $data
     */
    #[Override]
     * @param  array<string, mixed>  $data
     */
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
     */
    #[Override]
     * @param array<string, mixed> $data
=======
>>>>>>> 414a4ffcb (.)
     */
<<<<<<< HEAD
    #[Override]
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
>>>>>>> a6ef6dc7 (.)
     */
    #[Override]
=======
=======
>>>>>>> 551c768c4 (.)
     * @param  array<string, mixed>  $data
     */
    #[Override]
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
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
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
     * @param  array<string, mixed>  $data
=======
>>>>>>> 218dfed3 (.)
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
     * @param  array<string, mixed>  $data
=======
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
<<<<<<< HEAD
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $data
     * @param array<string, mixed> $data
=======
>>>>>>> ca9324a4 (.)
=======
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
     * @param  array<string, mixed>  $data
>>>>>>> 551c768c4 (.)
=======
     * @param  array<string, mixed>  $data
>>>>>>> 414a4ffcb (.)
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
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
         *
         * $appointmentId = $arguments['appointment'];
         * $appointment = Appointment::firstWhere('id',$appointmentId);
         *
         * $appointment?->state->transitionTo($stateClass,$message);
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)

        $appointmentId = $arguments['appointment'];
        $appointment = Appointment::firstWhere('id',$appointmentId);

        $appointment?->state->transitionTo($stateClass,$message);
        */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
<<<<<<< HEAD
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
            'states.'.$state.'.label',
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
>>>>>>> d2b0a27 (.)
            static::class,
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
            'states.'.$state.'.label',
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.'.(is_string($state) ? $state : (string) $state).'.label',
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
<<<<<<< HEAD
        ));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $states = Arr::map($states, function ($stateClass, $state) {
            return static::transClass(static::class, 'states.'.$state.'.label');
        });
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
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
=======
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
            static::class,
            'states.'.(is_string($state) ? $state : (string) $state).'.label',
>>>>>>> 551c768c4 (.)
        ));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        $states = Arr::map($states, function ($stateClass, $state) {
            $stateStr = is_string($state) ? $state : (string) $state;

            return static::transClass(static::class, 'states.'.$stateStr.'.label');
        });
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
            static::class,
            'states.'.(is_string($state) ? $state : (string) $state).'.label',
        ));
>>>>>>> 414a4ffcb (.)

        return $states;
    }
}
