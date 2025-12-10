<?php

declare(strict_types=1);

namespace Modules\Xot\Providers\Filament;

<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
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
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
<<<<<<< HEAD
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\Authenticate;
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
=======
>>>>>>> 399f46d3 (.)
=======
=======
use Filament\Http\Middleware\Authenticate;
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
use Modules\Xot\Actions\Panel\ApplyMetatagToPanelAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

abstract class XotBasePanelProvider extends PanelProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
=======
        $moduleNamespace = $this->getModuleNamespace();
        $moduleLow = Str::lower($this->module);
        $metatag = MetatagData::make();

        $main_module = Str::lower(XotData::make()->main_module);
<<<<<<< HEAD
        $default = $main_module === $moduleLow;
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $default = ($main_module === $moduleLow);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        $default = $main_module === $moduleLow;
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
        $default = ($main_module === $moduleLow);
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
        $panel
            ->maxContentWidth('full')
=======
        $panel->maxContentWidth('full')
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        $panel
            ->maxContentWidth('full')
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
        $panel
            ->maxContentWidth('full')
>>>>>>> a67e542f (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
            ->topNavigation($this->topNavigation)
            ->globalSearch($this->globalSearch)
            ->readOnlyRelationManagersOnResourceViewPagesByDefault(false)
            ->navigation($this->navigation)
            // ->tenant($teamClass)
            // ->tenant($teamClass,ownershipRelationship:'users')
            // ->tenant($teamClass)
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
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
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
       


       

       
       


       
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 218dfed3 (.)
       


       

       

       
       


       

       
       


       
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
=======

       
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        return $panel;
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
<<<<<<< HEAD
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
<<<<<<< HEAD
=======
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
=======
>>>>>>> 88ea7103 (.)
        return $ns . '\\' . $this->module;
=======
>>>>>>> 218dfed3 (.)
        return $ns.'\\'.$this->module;
        return $ns.'\\'.$this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns . '\\' . $this->module;
        return $ns.'\\'.$this->module;
=======
>>>>>>> ca9324a4 (.)
=======
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return $ns . '\\' . $this->module;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return $ns . '\\' . $this->module;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
        return $ns . '\\' . $this->module;
=======
        return $ns.'\\'.$this->module;
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    }
}
