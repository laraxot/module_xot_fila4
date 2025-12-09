# XotBaseResource

## Panoramica

XotBaseResource è la classe base astratta per tutte le risorse Filament nel sistema. Estende `Filament\Resources\Resource` e implementa funzionalità comuni per la gestione delle risorse.

## Caratteristiche Principali

### Metodi Final

Alcuni metodi sono marcati come `final` e non possono essere sovrascritti nelle classi figlie:

```php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
final public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
final public static function form(Form $form): Form
>>>>>>> 5a14301c (.)
=======
final public static function form(Form $form): Form
>>>>>>> 71f31700 (.)
=======
final public static function form(Form $form): Form
>>>>>>> 5a14301c (.)
=======
final public static function form(Form $form): Form
>>>>>>> 71f31700 (.)
=======
final public static function form(Form $form): Form
>>>>>>> c35986f4 (.)
=======
final public static function form(Form $form): Form
>>>>>>> 5a14301c (.)
{
    return $form->schema(static::getFormSchema());
}
```

Questo significa che:
- Non è possibile sovrascrivere il metodo `form()`
- Si deve invece implementare `getFormSchema()`
- Tentare di sovrascrivere un metodo `final` causerà un errore

### Metodi Astratti

```php
abstract public static function getFormSchema(): array;
```

Questo metodo DEVE essere implementato nelle classi figlie e deve restituire un array di componenti del form.

## Best Practices

1. **Non Sovrascrivere Metodi Final**
   - Non tentare di sovrascrivere `form()`
   - Implementare invece `getFormSchema()`
   - Rispettare la struttura definita nella classe base

2. **Gestione delle Table Actions**
   - Se `getTableActions()` restituisce solo ViewAction, EditAction e DeleteAction, rimuoverlo
   - Se presente, deve includere `...parent::getTableActions()`
   - Se `getTableBulkActions()` restituisce solo DeleteBulkAction, rimuoverlo

3. **Label e Traduzioni**
   - Non utilizzare mai `->label('')` direttamente
   - Gestire le label tramite file di traduzione
   - Utilizzare il trait `NavigationLabelTrait`

## Esempio di Implementazione Corretta

```php
namespace Modules\Notify\Filament\Resources;

use Modules\Xot\Filament\Resources\XotBaseResource;
use Filament\Forms;

class NotificationResource extends XotBaseResource
{
    protected static ?string $model = 'Modules\Notify\Models\Notification';

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                // Non usare ->label() direttamente
                // Le label sono gestite via file di traduzione
        ];
    }

    // Non sovrascrivere form() perché è final
    // Non definire getTableActions() se restituisce solo azioni standard
}
```

## Collegamenti Bidirezionali

### Collegamenti nella Root
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
- [Architettura Filament](../../../docs/architecture/filament.md)
- [Gestione Risorse](../../../docs/architecture/resources.md)
- [Regole XotBaseResource](../../../docs/regole/xotbaseresource-rules.md)

### Collegamenti ai Moduli
- [Notify Resource](../../Notify/docs/filament-resources.md)
- [User Resource](../../User/docs/filament-resources.md)
<<<<<<< HEAD
=======
- [Architettura Filament](../../../project_docs/architecture/filament.md)
- [Gestione Risorse](../../../project_docs/architecture/resources.md)
- [Regole XotBaseResource](../../../project_docs/regole/xotbaseresource-rules.md)

### Collegamenti ai Moduli
- [Notify Resource](../../Notify/project_docs/filament-resources.md)
- [User Resource](../../User/project_docs/filament-resources.md)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

## Note Importanti

1. Non sovrascrivere mai metodi marcati come `final`
2. Implementare sempre i metodi astratti richiesti
3. Utilizzare i file di traduzione per le label
4. Evitare override non necessari di metodi
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
5. Seguire le convenzioni di Filament 
=======
=======
5. Seguire le convenzioni di Filament 
>>>>>>> 5a14301c (.)
=======
5. Seguire le convenzioni di Filament 
>>>>>>> 71f31700 (.)
=======
5. Seguire le convenzioni di Filament 
>>>>>>> 5a14301c (.)
=======
5. Seguire le convenzioni di Filament 
>>>>>>> 71f31700 (.)
=======
5. Seguire le convenzioni di Filament 
>>>>>>> c35986f4 (.)
=======
5. Seguire le convenzioni di Filament 
>>>>>>> 5a14301c (.)
