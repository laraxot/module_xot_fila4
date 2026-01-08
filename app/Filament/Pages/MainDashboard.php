<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
use Nwidart\Modules\Laravel\Module;
=======
use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Role;
>>>>>>> 8ab8fd81a (.)
use Filament\Panel;
use Illuminate\Support\Arr;
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
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';

    // protected static string $routePath = 'main';

    protected static ?string $title = 'Main Dashboard';

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
            $panel_name = $module_first->name;
            Assert::string($panel_name);
            $module_name = Str::before($panel_name, '::admin');
            Assert::string($module_name);
            $url = '/'.$module_name.'/admin';
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
    }
}
