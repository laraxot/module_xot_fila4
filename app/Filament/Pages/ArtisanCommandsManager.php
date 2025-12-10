<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Pages\Page;
use Filament\Pages\Page;
use Filament\Pages\Page;
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Actions\Action;
use Filament\Notifications\Notification;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Pages\Page;
>>>>>>> 5a14301c (.)
=======
use Filament\Pages\Page;
>>>>>>> 5a14301c (.)
=======
use Filament\Pages\Page;
>>>>>>> 5a14301c (.)
=======
use Filament\Pages\Page;
>>>>>>> 5a14301c (.)
=======
use Filament\Pages\Page;
>>>>>>> 5a14301c (.)
=======
use Filament\Pages\Page;
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @var array<string, string>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
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
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
>>>>>>> ed734516 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
>>>>>>> 7131bd09 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
>>>>>>> ab8cc3f3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
>>>>>>> ed734516 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 3fbbf1f5 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('migrate')),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            Action::make('filament_upgrade')
                ->label(__('xot::artisan-commands-manager.commands.filament_upgrade.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('warning')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
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
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
>>>>>>> ed734516 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
>>>>>>> 7131bd09 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
>>>>>>> ab8cc3f3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
>>>>>>> ed734516 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 3fbbf1f5 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:upgrade')),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            Action::make('filament_optimize')
                ->label(__('xot::artisan-commands-manager.commands.filament_optimize.label'))
                ->icon('heroicon-o-sparkles')
                ->color('success')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
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
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
>>>>>>> ed734516 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
>>>>>>> 7131bd09 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
>>>>>>> ab8cc3f3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
>>>>>>> ed734516 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 3fbbf1f5 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('filament:optimize')),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            Action::make('view_cache')
                ->label(__('xot::artisan-commands-manager.commands.view_cache.label'))
                ->icon('heroicon-o-eye')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
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
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
>>>>>>> ed734516 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
>>>>>>> 7131bd09 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
>>>>>>> ab8cc3f3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
>>>>>>> ed734516 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 3fbbf1f5 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('view:cache')),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            Action::make('config_cache')
                ->label(__('xot::artisan-commands-manager.commands.config_cache.label'))
                ->icon('heroicon-o-cog-6-tooth')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
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
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
>>>>>>> ed734516 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
>>>>>>> 7131bd09 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
>>>>>>> ab8cc3f3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
>>>>>>> ed734516 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 3fbbf1f5 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('config:cache')),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            Action::make('route_cache')
                ->label(__('xot::artisan-commands-manager.commands.route_cache.label'))
                ->icon('heroicon-o-map')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
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
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
>>>>>>> ed734516 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
>>>>>>> 7131bd09 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
>>>>>>> ab8cc3f3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
>>>>>>> ed734516 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 3fbbf1f5 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('route:cache')),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            Action::make('event_cache')
                ->label(__('xot::artisan-commands-manager.commands.event_cache.label'))
                ->icon('heroicon-o-bell')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
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
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
>>>>>>> ed734516 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
>>>>>>> 7131bd09 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
>>>>>>> ab8cc3f3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
>>>>>>> ed734516 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 3fbbf1f5 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
>>>>>>> 71586de2 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('event:cache')),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            Action::make('queue_restart')
                ->label(__('xot::artisan-commands-manager.commands.queue_restart.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
<<<<<<< HEAD
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
        ];
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
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
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
>>>>>>> f1d4085 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
>>>>>>> 71586de2 (.)
        ];
    }

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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn() => $this->isRunning)
                ->action(fn() => $this->executeCommand('queue:restart')),
=======
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
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
        ];
    }

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            Notification::make()
                ->title(__('xot::artisan-commands-manager.notifications.error'))
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
            ->title(__('xot::artisan-commands-manager.notifications.success'))
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
            ->title(__('xot::artisan-commands-manager.notifications.error'))
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
            ->title(__('xot::artisan-commands-manager.notifications.error'))
            ->body($error)
            ->danger()
            ->send();
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop

    protected function getHeaderActions(): array
    {
        return [
            Action::make('migrate')
                ->label(__('xot::artisan-commands-manager.commands.migrate.label'))
                ->icon('heroicon-o-circle-stack')
                ->color('primary')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('migrate')),
            Action::make('filament_upgrade')
                ->label(__('xot::artisan-commands-manager.commands.filament_upgrade.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('warning')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:upgrade')),
            Action::make('filament_optimize')
                ->label(__('xot::artisan-commands-manager.commands.filament_optimize.label'))
                ->icon('heroicon-o-sparkles')
                ->color('success')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('filament:optimize')),
            Action::make('view_cache')
                ->label(__('xot::artisan-commands-manager.commands.view_cache.label'))
                ->icon('heroicon-o-eye')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('view:cache')),
            Action::make('config_cache')
                ->label(__('xot::artisan-commands-manager.commands.config_cache.label'))
                ->icon('heroicon-o-cog-6-tooth')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('config:cache')),
            Action::make('route_cache')
                ->label(__('xot::artisan-commands-manager.commands.route_cache.label'))
                ->icon('heroicon-o-map')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('route:cache')),
            Action::make('event_cache')
                ->label(__('xot::artisan-commands-manager.commands.event_cache.label'))
                ->icon('heroicon-o-bell')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('event:cache')),
            Action::make('queue_restart')
                ->label(__('xot::artisan-commands-manager.commands.queue_restart.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('gray')
                ->size('lg')
                ->iconPosition(IconPosition::Before)
                ->disabled(fn () => $this->isRunning)
                ->action(fn () => $this->executeCommand('queue:restart')),
        ];
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
}
