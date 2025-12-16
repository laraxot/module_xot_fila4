<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Filament\Support\Facades\FilamentView;
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * Render context navigation hooks for Filament sidebar.
     *
     * @param string $module Module name
     * @param string $_context Context (unused but kept for compatibility)
<<<<<<< HEAD
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 851793957 (.)
     * Undocumented function.
     * Undocumented function.
     * Undocumented function.
<<<<<<< HEAD
     * Undocumented function.
     * Undocumented function.
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 28fc70fe (.)
=======
>>>>>>> 551c768c4 (.)
     */
>>>>>>> 851793957 (.)
>>>>>>> 38b70c7ba (.)
    public function execute(string $module, string $_context): void
    {
        FilamentView::registerRenderHook(
            'sidebar.start',
<<<<<<< HEAD
            static fn (): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">'.
=======
<<<<<<< HEAD
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
            static fn(): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">' .
=======
            static fn (): string => Blade::render('<div class="p-2 px-6 bg-primary-100 font-black w-full">'.
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                sprintf('%s Module</div>', $module)),
        );
        FilamentView::registerRenderHook(
            'sidebar.end',
<<<<<<< HEAD
            static fn (): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="'.
            route('filament.pages.dashboard').
=======
<<<<<<< HEAD
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
            static fn(): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="' .
            route('filament.pages.dashboard') .
=======
            static fn (): string => Blade::render('<a class="p-2 px-6 bg-primary-100 font-black w-full inline-flex space-x-2" href="'.
            route('filament.pages.dashboard').
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
=======
    public function execute(string $module, string $context): void
=======
    public function execute(string $module, string $_context): void
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
        /* -- esiste in filament 3
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
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
=======
=======
>>>>>>> dbce41cec (.)
=======
        /* -- esiste in filament 3
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
        /* -- esiste in filament 3
<<<<<<< HEAD
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
        /* -- esiste in filament 3
<<<<<<< HEAD
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
        /* -- esiste in filament 3
<<<<<<< HEAD
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        /* -- esiste in filament 3
=======
        /* -- esiste in filament 3
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
        /* -- esiste in filament 3
>>>>>>> 7468a7d2 (.)
=======
        /* -- esiste in filament 3
>>>>>>> 5cf46378 (.)
=======
        /* -- esiste in filament 3
>>>>>>> dbce41cec (.)
=======
        /* -- esiste in filament 3
>>>>>>> origin/develop
>>>>>>> 358ba79a7 (.)
=======
        /* -- esiste in filament 3
>>>>>>> 5400be3e2 (.)
=======
        /* -- esiste in filament 3
>>>>>>> origin/develop
>>>>>>> f8f76a284 (.)
=======
        /* -- esiste in filament 3
>>>>>>> aa96bb619 (.)
=======
        /* -- esiste in filament 3
>>>>>>> origin/develop
>>>>>>> 5e6e0d054 (.)
=======
        /* -- esiste in filament 3
>>>>>>> efbf15eba (.)
=======
        /* -- esiste in filament 3
>>>>>>> origin/develop
>>>>>>> 0117b849c (.)
=======
        /* -- esiste in filament 3
>>>>>>> f2dd5676b (.)
        Filament::registerRenderHook(
            'user-menu.start',
            fn (): string => Blade::render('@livewire(\'switchable-team\')'),
        );
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
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 0117b849c (.)
         * Filament::registerRenderHook(
         * 'user-menu.start',
         * fn (): string => Blade::render('@livewire(\'switchable-team\')'),
         * );
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
>>>>>>> 38b70c7ba (.)
    }
}
