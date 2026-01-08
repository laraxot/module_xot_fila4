<?php

declare(strict_types=1);

namespace Modules\Xot\States;

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
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Spatie\ModelStates\State;

/**
 * Abstract base class for appointment state management.
 *
 * Defines the state machine configuration and required methods
 * that must be implemented by each concrete state class.
 *
<<<<<<< HEAD
 * @property string $name Il nome dello stato
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
>>>>>>> 8b18e4bff (.)
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
 * @property string $name  Il nome dello stato
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
 * @property string $name Il nome dello stato
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
 * @property string $name  Il nome dello stato
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
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
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public function label(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[Override]
    public function label(): string
    {
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        return static::transClass(static::class, 'states.'.static::getName().'.label');
<<<<<<< HEAD
=======
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
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        // return 'Annullato';
    }

<<<<<<< HEAD
    #[Override]
    public function color(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    #[Override]
    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');
<<<<<<< HEAD
=======
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
    public function color(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.color');
    }

    public function bgColor(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        // return 'info';
    }

<<<<<<< HEAD
    #[Override]
    public function icon(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.icon');
<<<<<<< HEAD
=======
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
    public function icon(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.icon');
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        // return 'heroicon-o-x-circle';
    }

<<<<<<< HEAD
    #[Override]
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
<<<<<<< HEAD
=======
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
    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        // return 'Annulla Appuntamento';
    }

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    public function modalDescription(): string
    {
        // $appointment non utilizzata - rimossa

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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)

=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> f1d4085 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // return 'Sei sicuro di voler annullare questo appuntamento?';
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
     * @return array<string, Component>
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> 5a14301c (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
    #[Override]
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        ];
    }

    /**
     * Fill form data for modal.
     *
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
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
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
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
     *
>>>>>>> 73eab74 (.)
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
    #[Override]
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    public function modalFillFormByRecord(Model $record): array
    {
        return [];
    }

    /**
     * Execute modal action.
     *
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
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
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     */
    public function modalAction(array $arguments, array $data): void
    {
        $this->processStateAction($arguments, $data);
    }

    /**
     * Process state action.
     *
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
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
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        $record = $this->getModel();
        /* @phpstan-ignore-next-line */
        $record->state->transitionTo($stateClass, $message);
    }

    /**
     * Execute modal action by record.
     *
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     * @param  array<string, mixed>  $data
     */
<<<<<<< HEAD
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
     * @param  array<string, mixed>  $data
     */
>>>>>>> f1d4085 (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    public function modalActionByRecord(Model $record, array $data): void
    {
        $this->processStateActionByRecord($record, $data);
    }

    /**
     * Process state action by record.
     *
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
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
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
     * @param array<string, mixed> $data
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<string, mixed>  $data
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
     * @param array<string, mixed> $data
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
>>>>>>> 285375c74 (.)
            static::class,
<<<<<<< HEAD
            'states.'.(is_string($state) ? $state : (string) $state).'.label',
<<<<<<< HEAD
        ));
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
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
        ));
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
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
>>>>>>> 8b18e4bff (.)

        return $states;
    }
}
