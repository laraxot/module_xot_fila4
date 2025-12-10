<?php

declare(strict_types=1);

namespace Modules\Xot\States;

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
>>>>>>> 2f3197ab (.)
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Traits\TransTrait;
use Override;
use Override;
use Spatie\ModelStates\State;

/**
 * Abstract base class for appointment state management.
 *
 * Defines the state machine configuration and required methods
 * that must be implemented by each concrete state class.
 *
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
>>>>>>> 2f3197ab (.)
 * @property string $name Il nome dello stato
 * @property string $name Il nome dello stato
 * @extends State<\Illuminate\Database\Eloquent\Model>
 *
 * @property string $name Il nome dello stato
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
>>>>>>> 2f3197ab (.)
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
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
    public function label(): string
    {
    #[Override]
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');
    #[Override]
    public function label(): string
    {
        return static::transClass(static::class, 'states.' . static::getName() . '.label');

        // return 'Annullato';
    }

        return static::transClass(static::class, 'states.' . static::getName() . '.color');
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
    #[Override]
    public function color(): string
    {
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
    public function label(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.label');
        // return 'Annullato';
    }

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

    #[Override]
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

    public function modalHeading(): string
    {
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
<<<<<<< HEAD

        // return 'Annulla Appuntamento';
    }

        // return 'Annulla Appuntamento';
    }

=======
        // return 'Annulla Appuntamento';
    }

>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    public function modalDescription(): string
    {
        $appointment = $this->getModel();

<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
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
>>>>>>> 2f3197ab (.)
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

<<<<<<< HEAD
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
=======
=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        // return 'Sei sicuro di voler annullare questo appuntamento?';
    }

    /**
<<<<<<< HEAD
     * @return array<string, Component>
     */
    /**
     * @return array<string, Component>
     */
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
    #[Override]
    public function modalFormSchema(): array
    {
        return [
            'message' => Textarea::make('message')->required()->maxLength(255),
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
     * @return array<string, \Filament\Schemas\Components\Component>
>>>>>>> 2f3197ab (.)
     */
    public function modalFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'message' => Components\Textarea::make('message')
                ->required()
                ->maxLength(255),
=======
            'message' => Textarea::make('message')
                ->required()
                ->maxLength(255),
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        ];
    }

    /**
     * Fill form data for modal.
     *
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
>>>>>>> 2f3197ab (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
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
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
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
>>>>>>> 2f3197ab (.)
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
    #[Override]
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    public function modalFillFormByRecord(Model $record): array
    {
        return [];
    }

    /**
     * Execute modal action.
     *
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
>>>>>>> 2f3197ab (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
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
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
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
>>>>>>> 2f3197ab (.)
     */
    public function modalAction(array $arguments, array $data): void
    {
        $this->processStateAction($arguments, $data);
    }

    /**
     * Process state action.
     *
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
>>>>>>> 2f3197ab (.)
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
<<<<<<< HEAD
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
=======
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
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
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
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
>>>>>>> 2f3197ab (.)
     */
    public function processStateAction(array $arguments, array $data): void
    {
        $message = Arr::get($data, 'message');
        $stateClass = static::class;
        /*
<<<<<<< HEAD
         *
         * $appointmentId = $arguments['appointment'];
         * $appointment = Appointment::firstWhere('id',$appointmentId);
         *
         * $appointment?->state->transitionTo($stateClass,$message);
         */
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)

        $appointmentId = $arguments['appointment'];
        $appointment = Appointment::firstWhere('id',$appointmentId);

        $appointment?->state->transitionTo($stateClass,$message);
        */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        $record = $this->getModel();
        /* @phpstan-ignore-next-line */
        $record->state->transitionTo($stateClass, $message);
    }

    /**
     * Execute modal action by record.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
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
>>>>>>> 2f3197ab (.)
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
     */
    #[Override]
=======
     * @param  array<string, mixed>  $data
     */
>>>>>>> f1d4085 (.)
    public function modalActionByRecord(Model $record, array $data): void
    {
        $this->processStateActionByRecord($record, $data);
    }

    /**
     * Process state action by record.
     *
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
>>>>>>> 2f3197ab (.)
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $data
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
>>>>>>> 2f3197ab (.)
     */
    public function processStateActionByRecord(Model $record, array $data): void
    {
        $message = Arr::get($data, 'message');
        $stateClass = static::class;
        /*
<<<<<<< HEAD
         *
         * $appointmentId = $arguments['appointment'];
         * $appointment = Appointment::firstWhere('id',$appointmentId);
         *
         * $appointment?->state->transitionTo($stateClass,$message);
         */
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)

        $appointmentId = $arguments['appointment'];
        $appointment = Appointment::firstWhere('id',$appointmentId);

        $appointment?->state->transitionTo($stateClass,$message);
        */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
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
>>>>>>> 2f3197ab (.)
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
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
>>>>>>> 2f3197ab (.)
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
        ));
<<<<<<< HEAD
        $states = Arr::map($states, function ($stateClass, $state) {
            return static::transClass(static::class, 'states.'.$state.'.label');
        });
=======
=======
        $states = Arr::map($states, function ($stateClass, $state) {
            $stateStr = is_string($state) ? $state : (string) $state;

            return static::transClass(static::class, 'states.'.$stateStr.'.label');
        });
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

        return $states;
    }
}
