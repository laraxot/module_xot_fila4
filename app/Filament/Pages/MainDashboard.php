<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Panel;
use Filament\Facades\Filament;
<<<<<<< HEAD
use Filament\Panel;
=======
>>>>>>> f1d4085 (.)
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Panel;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
 * Class Modules\Xot\Filament\Pages\MainDashboard.
 */
class MainDashboard extends XotBaseDashboard
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';

    // protected static string $routePath = 'main';

<<<<<<< HEAD
    protected static ?string $title = 'Main Dashboard';

    protected static ?int $navigationSort = 1;
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
    protected static ?string $title = 'Main Dashboard';

    protected static ?int $navigationSort = 1;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> 2f3197ab (.)
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static ?string $title = 'Main Dashboard';

    protected static ?int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;

    /**
     * Use the canonical slug so Filament resolves the home link to this page
     * at route name `filament.{panel}.pages.dashboard`.
     */
    public static function getSlug(?Panel $panel = null): string
    {
        return 'dashboard';
    }

    public function mount(): void
    {
        Assert::notNull($user = auth()->user(), '['.__LINE__.']['.class_basename($this).']');
        $modules = $user->roles->filter(static fn ($item) => Str::endsWith($item->name, '::admin'));

        if ($modules->count() === 1) {
            Assert::notNull($module_first = $modules->first(), '['.__LINE__.']['.class_basename($this).']');
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/'.$module_name.'/admin';
        Assert::notNull($user = auth()->user(), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $modules = $user->roles->filter(static fn($item) => Str::endsWith($item->name, '::admin'));

        if (1 === $modules->count()) {
            Assert::notNull($module_first = $modules->first(), '[' . __LINE__ . '][' . class_basename($this) . ']');
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/' . $module_name . '/admin';
            redirect($url);
        }

        // Solo se non ha accesso a nessun modulo, redirect alla home locale
        if ($modules->count() === 0) {
            $url = '/'.app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
        if ($modules->count() === 0) {
            $url = '/'.app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
            redirect($url);
        }

        // In tutti gli altri casi, mostra il dashboard con i link ai moduli
    }

    /**
     * Ottiene i widget da visualizzare nella dashboard.
     *
     * @return array<int, string>
     */
    public function getWidgets(): array
    {
        return [
            // Widget per mostrare i moduli disponibili
            // Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
            // Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
        ];
    }

    /**
     * Ottiene il numero di colonne per i widget.
     *
     * @return int|array<string, int|string|null>
     */
    public function getColumns(): int|array
    {
        return 1;
<<<<<<< HEAD

    protected static null|int $navigationSort = 1;

    /**
     * Use the canonical slug so Filament resolves the home link to this page
     * at route name `filament.{panel}.pages.dashboard`.
     */
    public static function getSlug(?Panel $panel = null): string
    {
        return 'dashboard';
    }

    public function mount(): void
    {
        Assert::notNull($user = auth()->user(), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $modules = $user->roles->filter(static fn($item) => Str::endsWith($item->name, '::admin'));

        if (1 === $modules->count()) {
            Assert::notNull($module_first = $modules->first(), '[' . __LINE__ . '][' . class_basename($this) . ']');
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/' . $module_name . '/admin';
            redirect($url);
        }

        // Solo se non ha accesso a nessun modulo, redirect alla home locale
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
            redirect($url);
        }

        // In tutti gli altri casi, mostra il dashboard con i link ai moduli
    }

    /**
     * Ottiene i widget da visualizzare nella dashboard.
     *
     * @return array<int, string>
     */
    public function getWidgets(): array
    {
        return [
            // Widget per mostrare i moduli disponibili
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
        ];
    }

    /**
     * Ottiene il numero di colonne per i widget.
     *
     * @return int|array<string, int|string|null>
     */
    public function getColumns(): int|array
    {
        return 1;
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'xot::filament.pages.dashboard';

    // protected static string $routePath = 'main';

=======
=======
>>>>>>> 2f3197ab (.)
    protected static ?string $title = 'Main Dashboard';

    protected static ?int $navigationSort = 1;

    public function mount(): void
    {
        
        Assert::notNull($user = auth()->user(), '['.__LINE__.']['.class_basename($this).']');
        $modules = $user->roles->filter(
            static function ($item) {
                return Str::endsWith($item->name, '::admin');
            }
        );
        
        if (1 === $modules->count()) {
            Assert::notNull($module_first = $modules->first(), '['.__LINE__.']['.class_basename($this).']');
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/'.$module_name.'/admin';
            redirect($url);
        }

        if (0 === $modules->count()) {
            $url = '/'.app()->getLocale();
            redirect($url);
        }
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    }
}
