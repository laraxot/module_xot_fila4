<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
use Filament\Panel;
=======
use Filament\Facades\Filament;
<<<<<<< HEAD
use Filament\Panel;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Panel;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Panel;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Pages\Dashboard;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
 * Class Modules\Xot\Filament\Pages\MainDashboard.
 */
class MainDashboard extends XotBaseDashboard
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';

    // protected static string $routePath = 'main';

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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
        Assert::notNull($user = auth()->user(), '['.__LINE__.']['.class_basename($this).']');
        $modules = $user->roles->filter(static fn ($item) => Str::endsWith($item->name, '::admin'));

        if ($modules->count() === 1) {
            Assert::notNull($module_first = $modules->first(), '['.__LINE__.']['.class_basename($this).']');
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/'.$module_name.'/admin';
=======
        Assert::notNull($user = auth()->user(), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $modules = $user->roles->filter(static fn($item) => Str::endsWith($item->name, '::admin'));

        if (1 === $modules->count()) {
            Assert::notNull($module_first = $modules->first(), '[' . __LINE__ . '][' . class_basename($this) . ']');
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/' . $module_name . '/admin';
>>>>>>> 5a14301c (.)
            redirect($url);
        }

        // Solo se non ha accesso a nessun modulo, redirect alla home locale
<<<<<<< HEAD
        if ($modules->count() === 0) {
            $url = '/'.app()->getLocale();
=======
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
            // Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
=======
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
>>>>>>> 5a14301c (.)
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
=======
=======
    protected static ?string $title = 'Main Dashboard';
=======
    protected static null|string $title = 'Main Dashboard';
>>>>>>> b93ef594b4 (.)

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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

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
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'xot::filament.pages.dashboard';

    // protected static string $routePath = 'main';

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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
