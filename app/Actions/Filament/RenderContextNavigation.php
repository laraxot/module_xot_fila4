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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * Render context navigation hooks for Filament sidebar.
     *
     * @param string $module Module name
     * @param string $_context Context (unused but kept for compatibility)
<<<<<<< HEAD
     * Undocumented function.
     * Undocumented function.
     * Undocumented function.
     * Undocumented function.
     */
=======
=======
     * Undocumented function.
>>>>>>> 5a14301c (.)
=======
     * Undocumented function.
>>>>>>> 5a14301c (.)
=======
     * Undocumented function.
>>>>>>> 5a14301c (.)
=======
     * Undocumented function.
>>>>>>> 5a14301c (.)
=======
     * Undocumented function.
>>>>>>> 5a14301c (.)
=======
     * Undocumented function.
>>>>>>> 5a14301c (.)
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    public function execute(string $module, string $_context): void
    {
        Filament::registerRenderHook(
            'sidebar.start',
<<<<<<< HEAD
            static fn (): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">'.
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            static fn (): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">'.
=======
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                sprintf('%s Module</div>', $module)),
        );
        Filament::registerRenderHook(
            'sidebar.end',
<<<<<<< HEAD
            static fn (): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="'.
            route('filament.pages.dashboard').
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            static fn (): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="'.
            route('filament.pages.dashboard').
=======
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
>>>>>>> 5a14301c (.)
=======
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                '"><x-heroicon-o-arrow-left class="w-5"/> Main Module</a>'),
        );

        /* -- esiste in filament 3
         * Filament::registerRenderHook(
         * 'user-menu.start',
         * fn (): string => Blade::render('@livewire(\'switchable-team\')'),
         * );
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    public function execute(string $module, string $context): void
=======
    public function execute(string $module, string $_context): void
>>>>>>> b93ef594b4 (.)
    {
        Filament::registerRenderHook(
            'sidebar.start',
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
                sprintf('%s Module</div>', $module)),
        );
        Filament::registerRenderHook(
            'sidebar.end',
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
                '"><x-heroicon-o-arrow-left class="w-5"/> Main Module</a>'),
        );

        /* -- esiste in filament 3
<<<<<<< HEAD
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
>>>>>>> origin/develop
        Filament::registerRenderHook(
            'user-menu.start',
            fn (): string => Blade::render('@livewire(\'switchable-team\')'),
        );
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
         * Filament::registerRenderHook(
         * 'user-menu.start',
         * fn (): string => Blade::render('@livewire(\'switchable-team\')'),
         * );
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    }
}
