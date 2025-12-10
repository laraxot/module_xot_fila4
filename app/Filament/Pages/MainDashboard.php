<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Facades\Filament;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Panel;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Panel;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use Filament\Pages\Dashboard;
>>>>>>> ab8cc3f3 (.)
use Filament\Panel;
=======
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
>>>>>>> 5a14301c (.)
=======
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
>>>>>>> 5a14301c (.)
=======
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
>>>>>>> 5a14301c (.)
=======
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
>>>>>>> 5a14301c (.)
=======
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Pages\Dashboard;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
 * Class Modules\Xot\Filament\Pages\MainDashboard.
 */
class MainDashboard extends XotBaseDashboard
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';

    // protected static string $routePath = 'main';

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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
    protected static ?string $title = 'Main Dashboard';
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    protected static null|string $title = 'Main Dashboard';
>>>>>>> d2b0a27 (.)

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
>>>>>>> 5a14301c (.)
=======
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
>>>>>>> 5a14301c (.)
=======
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
>>>>>>> 5a14301c (.)
=======
    protected static null|string $title = 'Main Dashboard';

    protected static null|int $navigationSort = 1;
>>>>>>> 5a14301c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::notNull($user = auth()->user(), '['.__LINE__.']['.class_basename($this).']');
        /** @var \Modules\Xot\Contracts\UserContract $user */
        $user = $user;
        /** @var \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles */
        $roles = $user->roles;
        $modules = $roles->filter(static fn (\Modules\User\Models\Role $item) => Str::endsWith($item->name, '::admin'));

        if ($modules->count() === 1) {
            Assert::notNull($module_first = $modules->first(), '['.__LINE__.']['.class_basename($this).']');
            /** @var \Modules\User\Models\Role $module_first */
            $module_first = $module_first;
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/'.$module_name.'/admin';
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        Assert::notNull($user = auth()->user(), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $modules = $user->roles->filter(static fn($item) => Str::endsWith($item->name, '::admin'));

        if (1 === $modules->count()) {
            Assert::notNull($module_first = $modules->first(), '[' . __LINE__ . '][' . class_basename($this) . ']');
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/' . $module_name . '/admin';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            redirect($url);
        }

        // Solo se non ha accesso a nessun modulo, redirect alla home locale
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($modules->count() === 0) {
            $url = '/'.app()->getLocale();
=======
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
>>>>>>> 5a14301c (.)
=======
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
>>>>>>> 5a14301c (.)
=======
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
>>>>>>> 5a14301c (.)
=======
        if (0 === $modules->count()) {
            $url = '/' . app()->getLocale();
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
=======
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
>>>>>>> 5a14301c (.)
=======
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
>>>>>>> 5a14301c (.)
=======
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
>>>>>>> 5a14301c (.)
=======
           //Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class,
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
=======
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    }
}
