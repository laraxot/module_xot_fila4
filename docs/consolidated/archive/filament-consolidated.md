# Filament - Guida Completa Consolidata

**Ultimo aggiornamento**: 2025-01-06  
**Principi**: DRY + KISS  
**Status**: ✅ CONSOLIDATO  

## 🎯 Panoramica

Questa guida consolidata raccoglie tutte le informazioni Filament frammentate in un unico documento completo, seguendo i principi **DRY** e **KISS** per eliminare duplicazioni e semplificare la manutenzione.

## 🏗️ Architettura Filament

### Principi Fondamentali
- **NON estendere MAI direttamente le classi Filament**
- **SEMPRE usare le classi base XotBase**
- **Mantenere separazione tra logica e presentazione**

### Classi Base Obbligatorie
```php
// ✅ CORRETTO - Estensioni XotBase
class UserResource extends XotBaseResource
class UserPage extends XotBasePage
class UserWidget extends XotBaseWidget

// ❌ ERRATO - Estensioni dirette
class UserResource extends Resource
class UserPage extends Page
class UserWidget extends Widget
```

## 📦 Componenti Filament

### Resources
```php
<?php

declare(strict_types=1);

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
namespace Modules\<nome progetto>\Filament\Resources;
=======
namespace Modules\<nome modulo>\Filament\Resources;
>>>>>>> ce6fc085 (.)
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\<nome modulo>\Filament\Resources;
namespace Modules\<nome modulo>\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\<nome modulo>\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\<nome modulo>\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
<<<<<<< HEAD
namespace Modules\<nome modulo>\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\<nome modulo>\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\<nome modulo>\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
namespace Modules\SaluteOra\Filament\Resources;
=======
>>>>>>> 43d67f21 (.)
=======
namespace Modules\SaluteOra\Filament\Resources;
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

use Modules\Xot\Filament\Resources\XotBaseResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class PatientResource extends XotBaseResource
{
    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required(),
            DatePicker::make('birth_date'),
        ];
    }
    
    /**
     * @return array<string, \Filament\Tables\Columns\Column>
     */
    public static function getTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id'),
            'name' => Tables\Columns\TextColumn::make('name'),
            'birth_date' => Tables\Columns\TextColumn::make('birth_date'),
        ];
    }
}
```

### Pages
```php
<?php

declare(strict_types=1);

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
namespace Modules\<nome progetto>\Filament\Pages;
=======
namespace Modules\<nome modulo>\Filament\Pages;
>>>>>>> ce6fc085 (.)
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
<<<<<<< HEAD
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
=======
>>>>>>> 43d67f21 (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

use Modules\Xot\Filament\Pages\XotBasePage;

class DashboardPage extends XotBasePage
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
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
    protected static string $view = '<nome progetto>::filament.pages.dashboard';
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = '<nome progetto>::filament.pages.dashboard';
    protected static string $view = '<nome progetto>::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = '<nome progetto>::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = '<nome progetto>::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
<<<<<<< HEAD
    protected static string $view = '<nome progetto>::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = '<nome progetto>::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = '<nome progetto>::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
    protected static string $view = 'saluteora::filament.pages.dashboard';
=======
>>>>>>> 43d67f21 (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard';
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

    /**
     * @return array<class-string>
     */
    protected function getHeaderWidgets(): array
    {
        return [
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
            \Modules\<nome progetto>\Filament\Widgets\StatsWidget::class,
=======
            \Modules\<nome modulo>\Filament\Widgets\StatsWidget::class,
>>>>>>> ce6fc085 (.)
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\<nome modulo>\Filament\Widgets\StatsWidget::class,
            \Modules\<nome modulo>\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\<nome modulo>\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\<nome modulo>\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
<<<<<<< HEAD
            \Modules\<nome modulo>\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\<nome modulo>\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\<nome modulo>\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
=======
>>>>>>> 43d67f21 (.)
=======
            \Modules\SaluteOra\Filament\Widgets\StatsWidget::class,
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        ];
    }
}
```

### Widgets
```php
<?php

declare(strict_types=1);

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
namespace Modules\<nome progetto>\Filament\Widgets;
=======
namespace Modules\<nome modulo>\Filament\Widgets;
>>>>>>> ce6fc085 (.)
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\<nome modulo>\Filament\Widgets;
namespace Modules\<nome modulo>\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\<nome modulo>\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\<nome modulo>\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
<<<<<<< HEAD
namespace Modules\<nome modulo>\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\<nome modulo>\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\<nome modulo>\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
namespace Modules\SaluteOra\Filament\Widgets;
=======
>>>>>>> 43d67f21 (.)
=======
namespace Modules\SaluteOra\Filament\Widgets;
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

use Modules\Xot\Filament\Widgets\XotBaseWidget;

class StatsWidget extends XotBaseWidget
{
    protected static ?string $heading = 'Statistiche';

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'total_patients' => Patient::count(),
            'total_appointments' => Appointment::count(),
        ];
    }
}
```

## 🎨 Form Components

### Text Input
```php
TextInput::make('name')
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
    ->label(__('<nome progetto>::fields.name.label'))
    ->placeholder(__('<nome progetto>::fields.name.placeholder'))
    ->helperText(__('<nome progetto>::fields.name.help'))
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->placeholder(__('<nome progetto>::fields.name.placeholder'))
    ->helperText(__('<nome progetto>::fields.name.help'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->placeholder(__('<nome progetto>::fields.name.placeholder'))
    ->helperText(__('<nome progetto>::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->placeholder(__('<nome progetto>::fields.name.placeholder'))
    ->helperText(__('<nome progetto>::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
<<<<<<< HEAD
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
=======
>>>>>>> 43d67f21 (.)
=======
    ->label(__('saluteora::fields.name.label'))
    ->placeholder(__('saluteora::fields.name.placeholder'))
    ->helperText(__('saluteora::fields.name.help'))
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->required()
    ->maxLength(255);
```

### Select
```php
Select::make('status')
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
    ->label(__('<nome progetto>::fields.status.label'))
    ->options([
        'active' => __('<nome progetto>::fields.status.options.active'),
        'inactive' => __('<nome progetto>::fields.status.options.inactive'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::fields.status.label'))
    ->options([
        'active' => __('saluteora::fields.status.options.active'),
        'inactive' => __('saluteora::fields.status.options.inactive'),
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ce6fc085 (.)
    ->label(__('<nome progetto>::fields.status.label'))
    ->options([
        'active' => __('<nome progetto>::fields.status.options.active'),
        'inactive' => __('<nome progetto>::fields.status.options.inactive'),
    ->label(__('<nome progetto>::fields.status.label'))
    ->options([
        'active' => __('<nome progetto>::fields.status.options.active'),
        'inactive' => __('<nome progetto>::fields.status.options.inactive'),
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ])
    ->required();
```

### Date Picker
```php
DatePicker::make('appointment_date')
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
    ->label(__('<nome progetto>::fields.appointment_date.label'))
    ->placeholder(__('<nome progetto>::fields.appointment_date.placeholder'))
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('<nome progetto>::fields.appointment_date.label'))
    ->placeholder(__('<nome progetto>::fields.appointment_date.placeholder'))
    ->label(__('<nome progetto>::fields.appointment_date.label'))
    ->placeholder(__('<nome progetto>::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('<nome progetto>::fields.appointment_date.label'))
    ->placeholder(__('<nome progetto>::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
<<<<<<< HEAD
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
=======
>>>>>>> 43d67f21 (.)
=======
    ->label(__('saluteora::fields.appointment_date.label'))
    ->placeholder(__('saluteora::fields.appointment_date.placeholder'))
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->required()
    ->minDate(now());
```

## 📊 Table Components

### Text Column
```php
Tables\Columns\TextColumn::make('name')
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
    ->label(__('<nome progetto>::fields.name.label'))
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
<<<<<<< HEAD
    ->label(__('<nome progetto>::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('<nome progetto>::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
    ->label(__('saluteora::fields.name.label'))
=======
>>>>>>> 43d67f21 (.)
=======
    ->label(__('saluteora::fields.name.label'))
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->searchable()
    ->sortable();
```

### Badge Column
```php
Tables\Columns\BadgeColumn::make('status')
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
    ->label(__('<nome progetto>::fields.status.label'))
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('<nome progetto>::fields.status.label'))
    ->label(__('<nome progetto>::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('<nome progetto>::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('<nome progetto>::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
<<<<<<< HEAD
    ->label(__('<nome progetto>::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('<nome progetto>::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('<nome progetto>::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
    ->label(__('saluteora::fields.status.label'))
=======
>>>>>>> 43d67f21 (.)
=======
    ->label(__('saluteora::fields.status.label'))
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->colors([
        'success' => 'active',
        'danger' => 'inactive',
    ]);
```

### Action Column
```php
Tables\Columns\TextColumn::make('actions')
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
    ->label(__('<nome progetto>::actions.label'))
    ->actions([
        Tables\Actions\EditAction::make()
            ->label(__('<nome progetto>::actions.edit.label')),
        Tables\Actions\DeleteAction::make()
            ->label(__('<nome progetto>::actions.delete.label')),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::actions.label'))
    ->actions([
        Tables\Actions\EditAction::make()
            ->label(__('saluteora::actions.edit.label')),
        Tables\Actions\DeleteAction::make()
            ->label(__('saluteora::actions.delete.label')),
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ce6fc085 (.)
    ->label(__('<nome progetto>::actions.label'))
    ->actions([
        Tables\Actions\EditAction::make()
            ->label(__('<nome progetto>::actions.edit.label')),
        Tables\Actions\DeleteAction::make()
            ->label(__('<nome progetto>::actions.delete.label')),
    ->label(__('<nome progetto>::actions.label'))
    ->actions([
        Tables\Actions\EditAction::make()
            ->label(__('<nome progetto>::actions.edit.label')),
        Tables\Actions\DeleteAction::make()
            ->label(__('<nome progetto>::actions.delete.label')),
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ]);
```

## 🔧 Actions

### Create Action
```php
Tables\Actions\CreateAction::make()
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
    ->label(__('<nome progetto>::actions.create.label'))
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('<nome progetto>::actions.create.label'))
    ->label(__('<nome progetto>::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('<nome progetto>::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('<nome progetto>::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
<<<<<<< HEAD
    ->label(__('<nome progetto>::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('<nome progetto>::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('<nome progetto>::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
    ->label(__('saluteora::actions.create.label'))
=======
>>>>>>> 43d67f21 (.)
=======
    ->label(__('saluteora::actions.create.label'))
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->icon('heroicon-o-plus')
    ->color('primary');
```

### Edit Action
```php
Tables\Actions\EditAction::make()
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
    ->label(__('<nome progetto>::actions.edit.label'))
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('<nome progetto>::actions.edit.label'))
    ->label(__('<nome progetto>::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('<nome progetto>::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('<nome progetto>::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
<<<<<<< HEAD
    ->label(__('<nome progetto>::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('<nome progetto>::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('<nome progetto>::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
    ->label(__('saluteora::actions.edit.label'))
=======
>>>>>>> 43d67f21 (.)
=======
    ->label(__('saluteora::actions.edit.label'))
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->icon('heroicon-o-pencil')
    ->color('warning');
```

### Delete Action
```php
Tables\Actions\DeleteAction::make()
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
    ->label(__('<nome progetto>::actions.delete.label'))
    ->icon('heroicon-o-trash')
    ->color('danger')
    ->requiresConfirmation()
    ->modalHeading(__('<nome progetto>::actions.delete.modal_heading'))
    ->modalDescription(__('<nome progetto>::actions.delete.modal_description'));
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    ->label(__('saluteora::actions.delete.label'))
    ->icon('heroicon-o-trash')
    ->color('danger')
    ->requiresConfirmation()
    ->modalHeading(__('saluteora::actions.delete.modal_heading'))
    ->modalDescription(__('saluteora::actions.delete.modal_description'));
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ce6fc085 (.)
    ->label(__('<nome progetto>::actions.delete.label'))
    ->icon('heroicon-o-trash')
    ->color('danger')
    ->requiresConfirmation()
    ->modalHeading(__('<nome progetto>::actions.delete.modal_heading'))
    ->modalDescription(__('<nome progetto>::actions.delete.modal_description'));
    ->label(__('<nome progetto>::actions.delete.label'))
    ->icon('heroicon-o-trash')
    ->color('danger')
    ->requiresConfirmation()
    ->modalHeading(__('<nome progetto>::actions.delete.modal_heading'))
    ->modalDescription(__('<nome progetto>::actions.delete.modal_description'));
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
```

## 🎯 Best Practices

### 1. Traduzioni
```php
// ✅ CORRETTO - Usare file di traduzione
TextInput::make('name')  // Traduzione automatica

// ❌ ERRATO - Stringhe hardcoded
TextInput::make('name')->label('Nome')
```

### 2. Namespace
```php
// ✅ CORRETTO - Namespace senza 'App'
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
>>>>>>> ce6fc085 (.)
namespace Modules\<nome progetto>\Filament\Resources;

// ❌ ERRATO - Namespace con 'App'
namespace Modules\<nome progetto>\App\Filament\Resources;
namespace Modules\<nome modulo>\Filament\Resources;

// ❌ ERRATO - Namespace con 'App'
namespace Modules\<nome modulo>\App\Filament\Resources;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
namespace Modules\SaluteOra\Filament\Resources;

// ❌ ERRATO - Namespace con 'App'
namespace Modules\SaluteOra\App\Filament\Resources;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ce6fc085 (.)
namespace Modules\<nome modulo>\Filament\Resources;

// ❌ ERRATO - Namespace con 'App'
namespace Modules\<nome modulo>\App\Filament\Resources;
namespace Modules\<nome modulo>\Filament\Resources;

// ❌ ERRATO - Namespace con 'App'
namespace Modules\<nome modulo>\App\Filament\Resources;
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
```

### 3. Ereditarietà
```php
// ✅ CORRETTO - Estendere XotBase
class PatientResource extends XotBaseResource

// ❌ ERRATO - Estendere direttamente
class PatientResource extends Resource
```

### 4. Service Providers
```php
// ✅ CORRETTO - Estendere XotBaseServiceProvider
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
>>>>>>> ce6fc085 (.)
class <nome progetto>ServiceProvider extends XotBaseServiceProvider
{
    protected string $module_name = '<nome progetto>';
}

// ❌ ERRATO - Estendere direttamente
class <nome progetto>ServiceProvider extends ServiceProvider
class ServiceProvider extends XotBaseServiceProvider
{
    protected string $module_name = '';
}

// ❌ ERRATO - Estendere direttamente
class ServiceProvider extends ServiceProvider
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
class SaluteOraServiceProvider extends XotBaseServiceProvider
{
    protected string $module_name = 'SaluteOra';
}

// ❌ ERRATO - Estendere direttamente
class SaluteOraServiceProvider extends ServiceProvider
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ce6fc085 (.)
class ServiceProvider extends XotBaseServiceProvider
{
    protected string $module_name = '';
}

// ❌ ERRATO - Estendere direttamente
class ServiceProvider extends ServiceProvider
class <nome progetto>ServiceProvider extends XotBaseServiceProvider
{
    protected string $module_name = '<nome progetto>';
}

// ❌ ERRATO - Estendere direttamente
class <nome progetto>ServiceProvider extends ServiceProvider
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
```

## 🚨 Errori Comuni

### 1. Estensione Diretta
```php
// ❌ ERRATO
use Filament\Resources\Resource;
class PatientResource extends Resource

// ✅ CORRETTO
use Modules\Xot\Filament\Resources\XotBaseResource;
class PatientResource extends XotBaseResource
```

### 2. Traduzioni Hardcoded
```php
// ❌ ERRATO
TextInput::make('name')->label('Nome')

// ✅ CORRETTO
TextInput::make('name')  // Traduzione automatica
```

### 3. Namespace Errato
```php
// ❌ ERRATO
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
>>>>>>> ce6fc085 (.)
namespace Modules\<nome progetto>\App\Filament\Resources;

// ✅ CORRETTO
namespace Modules\<nome progetto>\Filament\Resources;
namespace Modules\<nome modulo>\App\Filament\Resources;

// ✅ CORRETTO
namespace Modules\<nome modulo>\Filament\Resources;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
namespace Modules\SaluteOra\App\Filament\Resources;

// ✅ CORRETTO
namespace Modules\SaluteOra\Filament\Resources;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ce6fc085 (.)
namespace Modules\<nome modulo>\App\Filament\Resources;

// ✅ CORRETTO
namespace Modules\<nome modulo>\Filament\Resources;
namespace Modules\<nome modulo>\App\Filament\Resources;

// ✅ CORRETTO
namespace Modules\<nome modulo>\Filament\Resources;
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
```

## 📋 Checklist Pre-Commit

- [ ] Nessuna classe estende direttamente una classe Filament
- [ ] Tutte le classi Filament estendono la corrispondente XotBase
- [ ] Import inutili rimossi
- [ ] Naming conforme
- [ ] Traduzioni da file (no hardcoded)
- [ ] Namespace senza segmento 'App'
- [ ] Documentazione aggiornata e linkata

## 🔗 Collegamenti

### Documentazione Ufficiale
- [Filament Documentation](https://filamentphp.com/docs)
- [Laravel Documentation](https://laravel.com/docs)

### Documentazione Interna
- [XotBase Classes](xot-base-classes.md)
- [Service Providers](service-providers.md)
- [Translation System](translation-system.md)

---

*Guida consolidata che elimina duplicazioni e semplifica la manutenzione della documentazione Filament.*
