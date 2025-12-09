<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Blade;
use Spatie\QueueableAction\QueueableAction;

class RenderContextNavigation
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Render context navigation hooks for Filament sidebar.
     *
     * @param string $module Module name
     * @param string $_context Context (unused but kept for compatibility)
=======
     * Undocumented function.
>>>>>>> 5a14301c (.)
     */
<<<<<<< HEAD
    public function execute(string $module, string $_context): void
    {
        Filament::registerRenderHook(
            'sidebar.start',
<<<<<<< HEAD
            static fn (): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">'.
=======
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
>>>>>>> 5a14301c (.)
                sprintf('%s Module</div>', $module)),
        );
        Filament::registerRenderHook(
            'sidebar.end',
<<<<<<< HEAD
            static fn (): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="'.
            route('filament.pages.dashboard').
=======
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
>>>>>>> 5a14301c (.)
                '"><x-heroicon-o-arrow-left class="w-5"/> Main Module</a>'),
        );

        /* -- esiste in filament 3
         * Filament::registerRenderHook(
         * 'user-menu.start',
         * fn (): string => Blade::render('@livewire(\'switchable-team\')'),
         * );
         */
=======
    public function execute(string $module, string $context): void
    {
        Filament::registerRenderHook(
            'sidebar.start',
            static fn (): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">'.sprintf('%s Module</div>', $module))
        );
        Filament::registerRenderHook(
            'sidebar.end',
            static fn (): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="'.route('filament.pages.dashboard').'"><x-heroicon-o-arrow-left class="w-5"/> Main Module</a>')
        );
        /* -- esiste in filament 3
        Filament::registerRenderHook(
            'user-menu.start',
            fn (): string => Blade::render('@livewire(\'switchable-team\')'),
        );
        */
>>>>>>> f1d4085 (.)
    }
}
