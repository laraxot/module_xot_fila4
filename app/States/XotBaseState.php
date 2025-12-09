<?php

declare(strict_types=1);

namespace Modules\Xot\States;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Textarea;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\Textarea;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\Textarea;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Forms\Components;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
use Override;
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 399f46d3 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    #[Override]
    public function label(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.label');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.label');
>>>>>>> 3fbbf1f5 (.)

        // return 'Annullato';
    }

    #[Override]
    public function color(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.color');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.color');
>>>>>>> 3fbbf1f5 (.)
    }

    #[Override]
    public function bgColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.bg_color');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.bg_color');
>>>>>>> 3fbbf1f5 (.)

        // return 'info';
    }

    #[Override]
    public function icon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.icon');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.icon');
>>>>>>> 3fbbf1f5 (.)

        // return 'heroicon-o-x-circle';
    }

    #[Override]
    public function modalHeading(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.modal_heading');
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_heading');
>>>>>>> 3fbbf1f5 (.)

        // return 'Annulla Appuntamento';
    }

    #[Override]
<<<<<<< HEAD
=======
=======
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
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

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
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

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function modalDescription(): string
    {
        $appointment = $this->getModel();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
=======
=======
>>>>>>> 399f46d3 (.)
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> 5a14301c (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');
>>>>>>> 3fbbf1f5 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> a12f125f4a (.)
=======
        return static::transClass(static::class, 'states.' . static::getName() . '.modal_description');

>>>>>>> b93ef594b4 (.)
=======
        return static::transClass(static::class, 'states.'.static::getName().'.modal_description');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // return 'Sei sicuro di voler annullare questo appuntamento?';
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     * @return array<string, Component>
     */
>>>>>>> 5a14301c (.)
    #[Override]
    public function modalFormSchema(): array
    {
        return [
            'message' => Textarea::make('message')->required()->maxLength(255),
<<<<<<< HEAD
=======
=======
     * @return array<string, \Filament\Schemas\Components\Component>
=======
     * @return array<string, Component>
>>>>>>> b93ef594b4 (.)
     */
    #[Override]
    public function modalFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'message' => Textarea::make('message')
                ->required()
                ->maxLength(255),
>>>>>>> a12f125f4a (.)
=======
            'message' => Textarea::make('message')->required()->maxLength(255),
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, Components\Component>
     */
    public function modalFormSchema(): array
    {
        return [
            'message' => Components\Textarea::make('message')
                ->required()
                ->maxLength(255),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }

    /**
     * Fill form data for modal.
     *
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
     *
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
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
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $arguments
     * @param array<string, mixed> $data
=======
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $data
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
>>>>>>> 399f46d3 (.)
     */
    public function processStateAction(array $arguments, array $data): void
    {
        $message = Arr::get($data, 'message');
        $stateClass = static::class;
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         *
         * $appointmentId = $arguments['appointment'];
         * $appointment = Appointment::firstWhere('id',$appointmentId);
         *
         * $appointment?->state->transitionTo($stateClass,$message);
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop

        $appointmentId = $arguments['appointment'];
        $appointment = Appointment::firstWhere('id',$appointmentId);

        $appointment?->state->transitionTo($stateClass,$message);
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
     * @param  array<string, mixed>  $data
=======
=======
>>>>>>> 399f46d3 (.)
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $data
>>>>>>> 3fbbf1f5 (.)
     */
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
     */
    #[Override]
=======
     * @param  array<string, mixed>  $data
     */
>>>>>>> a12f125f4a (.)
=======
     * @param array<string, mixed> $data
     */
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string, mixed> $data
     */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 399f46d3 (.)
     */
    public function processStateActionByRecord(Model $record, array $data): void
    {
        $message = Arr::get($data, 'message');
        $stateClass = static::class;
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         *
         * $appointmentId = $arguments['appointment'];
         * $appointment = Appointment::firstWhere('id',$appointmentId);
         *
         * $appointment?->state->transitionTo($stateClass,$message);
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop

        $appointmentId = $arguments['appointment'];
        $appointment = Appointment::firstWhere('id',$appointmentId);

        $appointment?->state->transitionTo($stateClass,$message);
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        $states = Arr::map($states, fn ($_stateClass, $state) => static::transClass(
            static::class,
            'states.'.(is_string($state) ? $state : (string) $state).'.label',
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        $states = Arr::map($states, fn($_stateClass, $state) => static::transClass(
            static::class,
            'states.' . $state . '.label',
>>>>>>> 5a14301c (.)
        ));
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $states = Arr::map($states, function ($stateClass, $state) {
            $stateStr = is_string($state) ? $state : (string) $state;

            return static::transClass(static::class, 'states.'.$stateStr.'.label');
        });
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $states = Arr::map($states, function ($stateClass, $state) {
            return static::transClass(static::class, 'states.'.$state.'.label');
        });
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        return $states;
    }
}
