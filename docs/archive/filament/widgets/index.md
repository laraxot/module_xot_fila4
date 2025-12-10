# Filament Widgets

## Panoramica

Questa sezione documenta l'implementazione e l'utilizzo dei widget Filament nel progetto. I widget forniscono componenti riutilizzabili per dashboard e interfacce amministrative.

## Struttura

Il sistema di widget è organizzato attorno a classi base che forniscono funzionalità comuni e standardizzano l'implementazione.

## Widget Disponibili

### Widget Base

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
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 85cdef688 (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 6ca989d8 (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/project_docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 091f883c (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 67be6ac0 (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/project_docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 59259b43 (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 88ee35c4e (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/project_docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> aba62c408 (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 92cca5ade (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/project_docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [XotBaseWidget](/var/www/html/base_generic/laravel/Modules/Xot/docs/filament/widgets/xotbasewidget.md) - Classe base per tutti i widget
>>>>>>> 5cb992cc6 (.)

## Best Practices

1. **Estendere sempre XotBaseWidget** per mantenere coerenza
2. **Implementare autorizzazioni** appropriate per ogni widget
3. **Utilizzare caching** per widget con dati pesanti
4. **Seguire convenzioni di naming** per view e classi

## Esempi di Implementazione

```php
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class DashboardStatsWidget extends XotBaseWidget
{
    protected static string $view = 'dashboard::widgets.stats';
    
    protected function getData(): array
    {
        return [
            'totalUsers' => User::count(),
            'activeUsers' => User::where('active', true)->count(),
        ];
    }
}
``` 
