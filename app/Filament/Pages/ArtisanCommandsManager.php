<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
=======
use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
<<<<<<< HEAD
>>>>>>> 38b70c7ba (.)
use Exception;
use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
<<<<<<< HEAD
=======
use Filament\Pages\Page;
use Filament\Pages\Page;
use Filament\Pages\Page;
use Filament\Pages\Page;
use Filament\Pages\Page;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Filament\Support\Enums\IconPosition;
use Livewire\Attributes\On;
use Modules\Xot\Actions\ExecuteArtisanCommandAction;

/**
 * ---.
 */
class ArtisanCommandsManager extends XotBasePage
{
    public array $output = [];

    public string $currentCommand = '';

    public string $status = '';

    public bool $isRunning = false;

    /**
     * Livewire event listeners for this component.
<<<<<<< HEAD
     *
     * @var array<string, string>
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
     * @var array<string, string>
     *
<<<<<<< HEAD
     *
     *
     *
     * 
=======
=======
     *
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
     * @var array<string, string>
     *
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * @phpstan-var array<string, string>
     */
    protected $listeners = [
        'refresh-component' => '$refresh',
        'artisan-command.started' => 'handleCommandStarted',
        'artisan-command.output' => 'handleCommandOutput',
        'artisan-command.completed' => 'handleCommandCompleted',
        'artisan-command.failed' => 'handleCommandFailed',
        'artisan-command.error' => 'handleCommandError',
    ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
    protected function getHeaderActions(): array
    {
        return [
            Action::make('migrate')
                ->label(__('xot::artisan-commands-manager.commands.migrate.label'))
                ->icon('heroicon-o-circle-stack')
                ->color('primary')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
>>>>>>> 5cf46378 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Action::make('filament_upgrade')
                ->label(__('xot::artisan-commands-manager.commands.filament_upgrade.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('warning')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
>>>>>>> 5cf46378 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Action::make('filament_optimize')
                ->label(__('xot::artisan-commands-manager.commands.filament_optimize.label'))
                ->icon('heroicon-o-sparkles')
                ->color('success')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
>>>>>>> 5cf46378 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Action::make('view_cache')
                ->label(__('xot::artisan-commands-manager.commands.view_cache.label'))
                ->icon('heroicon-o-eye')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
>>>>>>> 5cf46378 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Action::make('config_cache')
                ->label(__('xot::artisan-commands-manager.commands.config_cache.label'))
                ->icon('heroicon-o-cog-6-tooth')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
>>>>>>> 5cf46378 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Action::make('route_cache')
                ->label(__('xot::artisan-commands-manager.commands.route_cache.label'))
                ->icon('heroicon-o-map')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
>>>>>>> 5cf46378 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Action::make('event_cache')
                ->label(__('xot::artisan-commands-manager.commands.event_cache.label'))
                ->icon('heroicon-o-bell')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
>>>>>>> 5cf46378 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Action::make('queue_restart')
                ->label(__('xot::artisan-commands-manager.commands.queue_restart.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
=======
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        ];
    }

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
        ];
    }

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
        ];
    }

                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
=======
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        ];
    }

=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    public function executeCommand(string $command): void
    {
        $this->reset(['output', 'status']);
        $this->currentCommand = $command;
        $this->isRunning = true;

        try {
            app(ExecuteArtisanCommandAction::class)->execute($command);
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (Exception $e) {
        } catch (Exception $e) {
=======
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
>>>>>>> 38b70c7ba (.)
            Notification::make()
                ->title((string) __('xot::artisan-commands-manager.notifications.error'))
                ->body($e->getMessage())
                ->danger()
                ->send();

            $this->isRunning = false;
        }
    }

    #[On('artisan-command.started')]
    public function handleCommandStarted(string $command): void
    {
        $this->isRunning = true;
    }

    #[On('artisan-command.output')]
    public function handleCommandOutput(string $command, string $output): void
    {
        $this->output[] = $output;
        $this->dispatch('terminal-update');
    }

    #[On('artisan-command.completed')]
    public function handleCommandCompleted(string $command): void
    {
        $this->status = 'completed';
        $this->isRunning = false;

        Notification::make()
            ->title((string) __('xot::artisan-commands-manager.notifications.success'))
            ->success()
            ->send();
    }

    #[On('artisan-command.failed')]
    public function handleCommandFailed(string $command, string $error): void
    {
        $this->status = 'failed';
        $this->isRunning = false;
        $this->output[] = "[ERROR] {$error}";

        Notification::make()
            ->title((string) __('xot::artisan-commands-manager.notifications.error'))
            ->body($error)
            ->danger()
            ->send();
    }

    #[On('artisan-command.error')]
    public function handleCommandError(string $command, string $error): void
    {
        $this->status = 'failed';
        $this->isRunning = false;
        $this->output[] = "[ERROR] {$error}";

        Notification::make()
            ->title((string) __('xot::artisan-commands-manager.notifications.error'))
            ->body($error)
            ->danger()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('migrate')
                ->label((string) __('xot::artisan-commands-manager.commands.migrate.label'))
                ->icon('heroicon-o-circle-stack')
                ->color('primary')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
            Action::make('filament_upgrade')
                ->label((string) __('xot::artisan-commands-manager.commands.filament_upgrade.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('warning')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
            Action::make('filament_optimize')
                ->label((string) __('xot::artisan-commands-manager.commands.filament_optimize.label'))
                ->icon('heroicon-o-sparkles')
                ->color('success')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
            Action::make('view_cache')
                ->label((string) __('xot::artisan-commands-manager.commands.view_cache.label'))
                ->icon('heroicon-o-eye')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
            Action::make('config_cache')
                ->label((string) __('xot::artisan-commands-manager.commands.config_cache.label'))
                ->icon('heroicon-o-cog-6-tooth')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
            Action::make('route_cache')
                ->label((string) __('xot::artisan-commands-manager.commands.route_cache.label'))
                ->icon('heroicon-o-map')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
            Action::make('event_cache')
                ->label((string) __('xot::artisan-commands-manager.commands.event_cache.label'))
                ->icon('heroicon-o-bell')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
            Action::make('queue_restart')
                ->label((string) __('xot::artisan-commands-manager.commands.queue_restart.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
        ];
    }
}
