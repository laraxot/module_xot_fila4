<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
# XotBaseResource

## Panoramica

XotBaseResource è la classe base astratta per tutte le risorse Filament nel sistema. Estende `Filament\Resources\Resource` e implementa funzionalità comuni per la gestione delle risorse.

## Caratteristiche Principali

### Metodi Final

Alcuni metodi sono marcati come `final` e non possono essere sovrascritti nelle classi figlie:

```php
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
final public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
>>>>>>> 6ca989d8 (.)
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
<<<<<<< HEAD
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
final public static function form(Form $form): Form
=======
>>>>>>> 71f31700 (.)
=======
final public static function form(Form $form): Form
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
final public static function form(Form $form): Form
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
>>>>>>> e769883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
>>>>>>> e769883c (.)
- [Architettura Filament](../../../docs/architecture/filament.md)
- [Gestione Risorse](../../../docs/architecture/resources.md)
- [Regole XotBaseResource](../../../docs/regole/xotbaseresource-rules.md)

### Collegamenti ai Moduli
- [Notify Resource](../../Notify/docs/filament-resources.md)
- [User Resource](../../User/docs/filament-resources.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> e769883c (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6a1fe786 (.)
=======
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> e769883c (.)
- [Architettura Filament](../../../project_docs/architecture/filament.md)
- [Gestione Risorse](../../../project_docs/architecture/resources.md)
- [Regole XotBaseResource](../../../project_docs/regole/xotbaseresource-rules.md)

### Collegamenti ai Moduli
- [Notify Resource](../../Notify/project_docs/filament-resources.md)
- [User Resource](../../User/project_docs/filament-resources.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
>>>>>>> e769883c (.)

## Note Importanti

1. Non sovrascrivere mai metodi marcati come `final`
2. Implementare sempre i metodi astratti richiesti
3. Utilizzare i file di traduzione per le label
4. Evitare override non necessari di metodi
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
>>>>>>> 6ca989d8 (.)
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
5. Seguire le convenzioni di Filament 
=======
>>>>>>> 71f31700 (.)
=======
5. Seguire le convenzioni di Filament 
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
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
>>>>>>> cc7fb225 (.)
=======
5. Seguire le convenzioni di Filament 
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
