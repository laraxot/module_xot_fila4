<?php

declare(strict_types=1);

namespace Modules\Xot\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Modules\Xot\Actions\Panel\ApplyMetatagToPanelAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
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
use Filament\Panel;
use Filament\PanelProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Modules\Xot\Actions\Panel\ApplyMetatagToPanelAction;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
=======
=======
use Filament\Http\Middleware\Authenticate;
>>>>>>> ed734516 (.)
=======
=======
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
>>>>>>> 399f46d3 (.)
=======
=======
use Filament\Http\Middleware\Authenticate;
>>>>>>> 7131bd09 (.)
=======
=======
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
>>>>>>> 17684f52 (.)
=======
=======
use Filament\Http\Middleware\Authenticate;
>>>>>>> ed734516 (.)
=======
=======
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
>>>>>>> 399f46d3 (.)
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
use Modules\Xot\Actions\Panel\ApplyMetatagToPanelAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)

abstract class XotBasePanelProvider extends PanelProvider
{
    protected string $module;

    protected bool $topNavigation = false;

    protected bool $globalSearch = false;

    protected bool $navigation = true;

    public function panel(Panel $panel): Panel
    {
        $moduleNamespace = $this->getModuleNamespace();
        $moduleLow = Str::lower($this->module);
        $metatag = MetatagData::make();

        $main_module = Str::lower(XotData::make()->main_module);
        $default = $main_module === $moduleLow;

        $panel = $panel
            ->default($default)
            // ->login()
            // ->registration()
            ->passwordReset()
            // ->emailVerification()
            // ->profile()
            ->sidebarFullyCollapsibleOnDesktop();

        app(ApplyMetatagToPanelAction::class)->execute(panel: $panel);
        // ---------------------
        $panel
            ->maxContentWidth('full')
            ->topNavigation($this->topNavigation)
            ->globalSearch($this->globalSearch)
            ->readOnlyRelationManagersOnResourceViewPagesByDefault(false)
            ->navigation($this->navigation)
            // ->tenant($teamClass)
            // ->tenant($teamClass,ownershipRelationship:'users')
            // ->tenant($teamClass)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->id($moduleLow.'::admin')
            ->path($moduleLow.'/admin')
            // Configure Filament discovery for module components (unconditional; dirs are expected to exist)
            ->discoverResources(
                in: base_path('Modules/'.$this->module.'/app/Filament/Resources'),
                for: sprintf('%s\\Filament\\Resources', $moduleNamespace),
            )
            ->discoverPages(
                in: base_path('Modules/'.$this->module.'/app/Filament/Pages'),
                for: sprintf('%s\\Filament\\Pages', $moduleNamespace),
            )
            ->discoverWidgets(
                in: base_path('Modules/'.$this->module.'/app/Filament/Widgets'),
                for: sprintf('%s\\Filament\\Widgets', $moduleNamespace),
            )
            ->discoverClusters(
                in: base_path('Modules/'.$this->module.'/app/Filament/Clusters'),
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
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
            ->id($moduleLow . '::admin')
            ->path($moduleLow . '/admin')
            // Configure Filament discovery for module components (unconditional; dirs are expected to exist)
            ->discoverResources(
                in: base_path('Modules/' . $this->module . '/app/Filament/Resources'),
                for: sprintf('%s\\Filament\\Resources', $moduleNamespace),
            )
            ->discoverPages(
                in: base_path('Modules/' . $this->module . '/app/Filament/Pages'),
                for: sprintf('%s\\Filament\\Pages', $moduleNamespace),
            )
            ->discoverWidgets(
                in: base_path('Modules/' . $this->module . '/app/Filament/Widgets'),
                for: sprintf('%s\\Filament\\Widgets', $moduleNamespace),
            )
            ->discoverClusters(
                in: base_path('Modules/' . $this->module . '/app/Filament/Clusters'),
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                for: sprintf('%s\\Filament\\Clusters', $moduleNamespace),
            )
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
       

>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->id($moduleLow.'::admin')
            ->path($moduleLow.'/admin')
            ->discoverResources(
                in: base_path('Modules/'.$this->module.'/app/Filament/Resources'),
                for: sprintf('%s\Filament\Resources', $moduleNamespace)
            )
            ->discoverPages(
                in: base_path('Modules/'.$this->module.'/app/Filament/Pages'),
                for: sprintf('%s\Filament\Pages', $moduleNamespace)
            )
            ->pages(
                [
                    // Dashboard::class,
                ]
            )
            ->discoverWidgets(
                in: base_path('Modules/'.$this->module.'/app/Filament/Widgets'),
                for: sprintf('%s\Filament\Widgets', $moduleNamespace)
            )
            ->widgets(
                [
                    // Widgets\AccountWidget::class,
                    // Widgets\FilamentInfoWidget::class,
                ]
            )
            ->discoverClusters(
                in: base_path('Modules/'.$this->module.'/app/Filament/Clusters'),
                for: sprintf('%s\Filament\Clusters', $moduleNamespace)
            )
            /*
            $panel->discoverLivewireComponents(
                in: $module->appPath('Livewire'),
                for: $module->appNamespace('\\Livewire')
            )
            */
            ->discoverLivewireComponents(
                in: base_path('Modules/'.$this->module.'/app/Http/Livewire'),
                for: sprintf('%s\Http\Livewire', $moduleNamespace)
            )
            ->middleware(
                [
                    EncryptCookies::class,
                    AddQueuedCookiesToResponse::class,
                    StartSession::class,
                    AuthenticateSession::class,
                    ShareErrorsFromSession::class,
                    VerifyCsrfToken::class,
                    SubstituteBindings::class,
                    DisableBladeIconComponents::class,
                    DispatchServingFilamentEvent::class,
                ]
            )
            ->authMiddleware(
                [
                    Authenticate::class,
                ]
            );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
       

>>>>>>> 5a14301c (.)
=======

       
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

       
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
       

>>>>>>> 5a14301c (.)
=======

       
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        return $panel;
    }

    protected function getModuleNamespace(): string
    {
        Assert::string($ns = config('modules.namespace'));

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $ns.'\\'.$this->module;
=======
        return $ns . '\\' . $this->module;
>>>>>>> 5a14301c (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> 3fbbf1f5 (.)
=======
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> ca9324a4 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $ns . '\\' . $this->module;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> 3fbbf1f5 (.)
=======
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> ca9324a4 (.)
=======
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return $ns . '\\' . $this->module;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> 3310e9c6 (.)
=======
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> 9db27d12 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> 5a14301c (.)
=======
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $ns . '\\' . $this->module;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> 3fbbf1f5 (.)
=======
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return $ns . '\\' . $this->module;
>>>>>>> ca9324a4 (.)
    }
}
