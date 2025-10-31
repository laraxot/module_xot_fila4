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
     *
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
        $package->name('cool-modules');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $package->name('cool-modules');
=======
        $package
            ->name('cool-modules');
>>>>>>> f1d4085 (.)
=======
        $package->name('cool-modules');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $package->name('cool-modules');
>>>>>>> 300ef70 (.)
    }

    public function register()
    {
        $this->app->register(LaravelModulesServiceProvider::class);

        $this->app->afterResolving('filament', function () {
            $panels = Filament::getPanels();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

            foreach ($panels as $panel) {
                $id = Str::of($panel->getId());
                $panelId = $panel->getId();

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
           
            foreach ($panels as $panel) {
                $id = Str::of($panel->getId());
                $panelId = $panel->getId();
                
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
                // Controlla se questo panel è già stato processato
                if (isset(self::$processedPanels[$panelId])) {
                    continue;
                }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

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
<<<<<<< HEAD
=======
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
                                      </a>'
                            ),
                        );
                    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
                    // Marca questo panel come processato
                    self::$processedPanels[$panelId] = true;
                }
            }
        });

        parent::register();
    }
}
