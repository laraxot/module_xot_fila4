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
        $package->name('cool-modules');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $package->name('cool-modules');
=======
        $package
            ->name('cool-modules');
>>>>>>> a12f125f4a (.)
=======
        $package->name('cool-modules');
>>>>>>> b93ef594b4 (.)
=======
        $package
            ->name('cool-modules');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function register(): void
    {
        $this->app->register(LaravelModulesServiceProvider::class);

        $this->app->afterResolving('filament', function (): void {
            $panels = Filament::getPanels();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            foreach ($panels as $panel) {
                $id = Str::of($panel->getId());
                $panelId = $panel->getId();

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
           
            foreach ($panels as $panel) {
                $id = Str::of($panel->getId());
                $panelId = $panel->getId();
                
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            foreach ($panels as $panel) {
                $id = Str::of($panel->getId());
                $panelId = $panel->getId();

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                // Controlla se questo panel è già stato processato
                if (isset(self::$processedPanels[$panelId])) {
                    continue;
                }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

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
                                        <svg class="fi-icon fi-size-lg fi-sidebar-item-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
                                      </a>
                                     '),
                    );

<<<<<<< HEAD
=======
=======
                
=======

>>>>>>> b93ef594b4 (.)
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
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
<<<<<<< HEAD
=======
                
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
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                        </svg>
                                        Main Panel
>>>>>>> origin/develop
                                      </a>'
                            ),
                        );
                    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                                      </a>
                                     '),
                    );

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                    // Marca questo panel come processato
                    self::$processedPanels[$panelId] = true;
                }
            }
        });

        parent::register();
    }
}
