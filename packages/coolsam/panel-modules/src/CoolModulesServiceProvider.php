<?php

declare(strict_types=1);

namespace Coolsam\FilamentModules;

use Filament\Facades\Filament;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Nwidart\Modules\LaravelModulesServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CoolModulesServiceProvider extends PackageServiceProvider
{
    /**
     * Traccia i panel che hanno già gli hook registrati.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     *
     *
     * 
=======
=======
     * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
     *
>>>>>>> 358ba79a7 (.)
=======
     *
>>>>>>> f8f76a284 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
     *
>>>>>>> aba62c408 (.)
=======
     *
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
     *
>>>>>>> 5cb992cc6 (.)
=======
     *
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
     * @var array<string, bool>
     */
    private static array $processedPanels = [];

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
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
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
        $package->name('cool-modules');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
        $package->name('cool-modules');
=======
        $package
            ->name('cool-modules');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======
        $package->name('cool-modules');
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
        $package->name('cool-modules');
>>>>>>> b93ef594b4 (.)
=======
        $package
            ->name('cool-modules');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
        $package->name('cool-modules');
>>>>>>> 5cb992cc6 (.)
=======
        $package->name('cool-modules');
=======
        $package
            ->name('cool-modules');
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
    }

        $package->name('cool-modules');
        $package->name('cool-modules');
        $package->name('cool-modules');
        $package
            ->name('cool-modules');
=======
=======
        $package->name('cool-modules');
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 5ca118c34 (.)
        $package->name('cool-modules');
=======
        $package
            ->name('cool-modules');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> a12f125f4a (.)
=======
        $package->name('cool-modules');
>>>>>>> b93ef594b4 (.)
=======
        $package
            ->name('cool-modules');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
        $package->name('cool-modules');
>>>>>>> aba62c408 (.)
=======
        $package->name('cool-modules');
=======
        $package
            ->name('cool-modules');
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
        $package->name('cool-modules');
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
    }

    public function register(): void
    {
        $this->app->register(LaravelModulesServiceProvider::class);

        $this->app->afterResolving('filament', function (): void {
            $panels = Filament::getPanels();
        $this->app->afterResolving('filament', function (): void {
    public function register()
    {
        $this->app->register(LaravelModulesServiceProvider::class);

        $this->app->afterResolving('filament', function () {
        $this->app->afterResolving('filament', function () {
            $panels = Filament::getPanels();
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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

            foreach ($panels as $panel) {
                $id = Str::of($panel->getId());
                $panelId = $panel->getId();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
           
            foreach ($panels as $panel) {
                $id = Str::of($panel->getId());
                $panelId = $panel->getId();
                
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

            foreach ($panels as $panel) {
                $id = Str::of($panel->getId());
                $panelId = $panel->getId();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
                // Controlla se questo panel è già stato processato
                if (isset(self::$processedPanels[$panelId])) {
                    continue;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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

                if ($id->contains('::')) {
                    $title = $id->replace(['::', '-'], [' ', ' '])->title()->toString();
                    $panel->renderHook(
                        'panels::sidebar.nav.start',
                        fn () => new HtmlString("<h2 class='m-2 p-2 font-black text-xl'>{$title}</h2>"),
                    )->renderHook(
                        'panels::sidebar.nav.end',
                        fn () => new HtmlString('<a href="'.
                        url('/admin').
                        '" class="fi-sidebar-item-btn">
                        fn() => new HtmlString("<h2 class='m-2 p-2 font-black text-xl'>{$title}</h2>"),
                    )->renderHook(
                        'panels::sidebar.nav.end',
                        fn() => new HtmlString('<a href="' .
                        url('/admin') .
                            '" class="fi-sidebar-item-btn">
                                        <svg class="fi-icon fi-size-lg fi-sidebar-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
                                      </a>
                                     '),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                
=======

>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
                if ($id->contains('::')) {
                    $title = $id->replace(['::', '-'], [' ', ' '])->title()->toString();
                    $panel->renderHook(
                        'panels::sidebar.nav.start',
                        fn() => new HtmlString("<h2 class='m-2 p-2 font-black text-xl'>{$title}</h2>"),
                    )->renderHook(
                        'panels::sidebar.nav.end',
                        fn() => new HtmlString('<a href="' .
                        url('/admin') .
                            '" class="fi-sidebar-item-btn">
                                        <svg class="fi-icon fi-size-lg fi-sidebar-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
                
                if ($id->contains('::')) {
                    $title = $id->replace(['::', '-'], [' ', ' '])->title()->toString();
                    $panel
                   
                        ->renderHook(
                            'panels::sidebar.nav.start',
                            fn () => new HtmlString("<h2 class='m-2 p-2 font-black text-xl'>$title</h2>"),
                        )
                            
                        ->renderHook(
                            'panels::sidebar.nav.end',
                            fn () => new HtmlString(
                                '<a href="'.url('/admin').'" class="m-2 p-2 mt-4 inline-flex gap-2 block rounded-lg font-bold bg-gray-500/10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
>>>>>>> 7468a7d2 (.)
=======
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
>>>>>>> 5cf46378 (.)
=======
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
=======
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
>>>>>>> aa96bb619 (.)
                                      </a>'
                            ),
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
                                      </a>
                                     '),
                    );

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
                    // Marca questo panel come processato
                    self::$processedPanels[$panelId] = true;
                }
            }
        });

        parent::register();
    }
}
