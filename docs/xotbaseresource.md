<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
final public static function form(Form $form): Form
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
final public static function form(Form $form): Form
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
>>>>>>> e769883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
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
<<<<<<< HEAD
>>>>>>> e769883c (.)
=======
=======
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 099ab7a0 (.)
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 96276392 (.)
>>>>>>> f7e6113c6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> e769883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
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
<<<<<<< HEAD
>>>>>>> e769883c (.)
=======
>>>>>>> 5e58b29b (.)
=======
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> a62d7646 (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> d79d36e0 (.)
=======
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> f7e6113c6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> e769883c (.)
=======
=======
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 099ab7a0 (.)
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 96276392 (.)
>>>>>>> f7e6113c6 (.)

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
=======
>>>>>>> 92cca5ade (.)
5. Seguire le convenzioni di Filament 
=======
>>>>>>> 88ee35c4e (.)
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
5. Seguire le convenzioni di Filament 
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
5. Seguire le convenzioni di Filament 
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
