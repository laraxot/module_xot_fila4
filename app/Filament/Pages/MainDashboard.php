<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Laravel\Module;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Facades\Filament;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
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
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
use Filament\Panel;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
use Filament\Pages\Dashboard;
>>>>>>> ab8cc3f3 (.)
use Filament\Panel;
>>>>>>> 48515e368 (.)
=======
use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Role;
>>>>>>> 8ab8fd81a (.)
use Filament\Panel;
use Illuminate\Support\Arr;
=======
use Filament\Panel;
>>>>>>> 50c0e1043 (.)
use Illuminate\Support\Str;
use Modules\User\Models\User;
use Webmozart\Assert\Assert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Modules\Xot\Filament\Pages\MainDashboard.
 */
class MainDashboard extends XotBaseDashboard
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';

    // protected static string $routePath = 'main';

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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
    protected static ?string $title = 'Main Dashboard';
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    protected static null|string $title = 'Main Dashboard';
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 50c0e1043 (.)
    protected static ?string $title = 'Main Dashboard';
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $title = 'Main Dashboard';
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    protected static null|string $title = 'Main Dashboard';
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)

    protected static ?int $navigationSort = 1;

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
        $user = Auth::user();
        Assert::notNull($user, '['.__LINE__.']['.class_basename($this).']');
        // Usa roles() come metodo invece della magic property per type safety
        $modules = $user->getModules();

        if (count($modules) === 0) {
=======
        $user = auth()->user();
        Assert::notNull($user, '['.__LINE__.']['.class_basename($this).']');

        // Usa roles() come metodo invece della magic property per type safety
        /** @var Collection<int, Role> $roles */
        $roles = $user->roles()->get();

        $modules = $roles->filter(function ($item): bool {
             // $item è già tipizzato come Role dalla collection
             $name = $item->name;
             Assert::string($name);
             return Str::endsWith($name, '::admin');
        });

        if ($modules->count() === 1) {
            $module_first = $modules->first();
            Assert::notNull($module_first);
=======
<<<<<<< HEAD
=======
>>>>>>> 50c0e1043 (.)
        Assert::notNull($user = auth()->user(), '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
        $modules = $user->roles->filter(static fn ($item) => Str::endsWith($item->name, '::admin'));

        if ($modules->count() === 1) {
            Assert::notNull($module_first = $modules->first(), '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
=======
        /** @var \Modules\Xot\Contracts\UserContract $user */
        $user = $user;
        /** @var \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles */
        $roles = $user->roles;
        $modules = $roles->filter(static fn (\Modules\User\Models\Role $item) => Str::endsWith($item->name, '::admin'));

        if ($modules->count() === 1) {
            Assert::notNull($module_first = $modules->first(), '['.__LINE__.']['.class_basename($this).']');
            /** @var \Modules\User\Models\Role $module_first */
            $module_first = $module_first;
>>>>>>> a6ef6dc7 (.)
=======
        /** @var \Modules\Fixcity\Models\User $user */
        $user = $user;
        /** @var \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles */
        $roles = $user->roles;
        $modules = $roles->filter(static fn (\Modules\User\Models\Role $item) => Str::endsWith($item->name, '::admin'));

        if ($modules->count() === 1) {
            Assert::notNull($module_first = $modules->first(), '['.__LINE__.']['.class_basename($this).']');
            /** @var \Modules\User\Models\Role $module_first */
            $module_first = $module_first;
>>>>>>> 80ef814d9 (.)
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/'.$module_name.'/admin';
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
        Assert::notNull($user = auth()->user(), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $modules = $user->roles->filter(static fn($item) => Str::endsWith($item->name, '::admin'));

        if (1 === $modules->count()) {
            Assert::notNull($module_first = $modules->first(), '[' . __LINE__ . '][' . class_basename($this) . ']');
            $panel_name = $module_first->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/' . $module_name . '/admin';
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
            /** @var \Modules\User\Models\Role $module_first */
            $module_first = $module_first;
>>>>>>> 0516d3de0 (.)
=======
>>>>>>> 285375c74 (.)
            $panel_name = $module_first->name;
            Assert::string($panel_name);
            $module_name = Str::before($panel_name, '::admin');
            Assert::string($module_name);
            $url = '/'.$module_name.'/admin';
=======
>>>>>>> 50c0e1043 (.)
            redirect($url);
        }

        // Solo se non ha accesso a nessun modulo, redirect alla home locale
        if ($modules->count() === 0) {
>>>>>>> 8ab8fd81a (.)
            $url = '/'.app()->getLocale();
            redirect($url);

            return;
        }

        if (count($modules) === 1) {
            $module_first = Arr::first($modules);
            Assert::isInstanceOf($module_first, Module::class);
            $module_name = $module_first->getLowerName();
            $url = '/'.$module_name.'/admin';
            redirect($url);

            return;
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
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    }
}
