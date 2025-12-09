# Modulo Xot - Documentazione

## Panoramica
Il modulo Xot fornisce le classi base e i componenti fondamentali per l'architettura Laraxot, seguendo il principio di **mai estendere classi Filament direttamente**.

## Componenti Principali

### XotBasePage
Classe base per tutte le pagine personalizzate dell'applicazione.

**Caratteristiche:**
- Estende `Filament\Resources\Pages\Page` invece di classi Filament direttamente
- Fornisce funzionalità comuni per pagine personalizzate
- Gestione automatica delle traduzioni
- Schema form configurabile

**Utilizzo:**
```php
class MiaPagina extends XotBasePage
{
    protected static ?string $model = MiaModel::class;
    
    protected function getFormSchema(): array
    {
        return [
            // Componenti del form
        ];
    }
}
```

## Fix e Correzioni

### getModel() Method Fix
- **Problema**: Errore di sovrascrittura static/non-static
- **Soluzione**: Correzione della dichiarazione del metodo per compatibilità con Filament
- **Documentazione**: [xotbasepage-getmodel-fix.md](./xotbasepage-getmodel-fix.md)

### Filament Resource Creation Fix
- **Problema**: Errori di compatibilità con comandi `make:filament-resource` e `filament:generate-resources`
- **Soluzione**: Corretti errori di compatibilità, registrato comando personalizzato, rimossi file di test problematici
- **Documentazione**: [filament-resource-creation-fix.md](./filament-resource-creation-fix.md)

## Principi Architetturali

### Regola Fondamentale
> **MAI estendere classi Filament direttamente - sempre estendere classi XotBase**

### Regole Critiche Laraxot - DA SEGUIRE SEMPRE

#### 🚫 **Estensioni Classi Filament Vietate**
**MAI estendere direttamente:**
- ❌ `Filament\Resources\Pages\CreateRecord`
- ❌ `Filament\Resources\Pages\EditRecord`
- ❌ `Filament\Resources\Pages\ListRecords`
- ❌ `Filament\Resources\Pages\Page`
- ❌ `Filament\Actions\Action`
- ❌ `Filament\Forms\Components\*`
- ❌ `Filament\Tables\Columns\*`

**✅ SEMPRE estendere le classi XotBase:**
- ✅ `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord`
- ✅ `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord`
- ✅ `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`
- ✅ `Modules\Xot\Filament\Pages\XotBasePage`
- ✅ `Modules\Xot\Filament\Actions\XotBaseAction`
- ✅ `Modules\Xot\Filament\Components\XotBaseComponent`

#### 🚫 **Proprietà Vietate in XotBasePage**
**Chi estende `XotBasePage` NON DEVE avere:**
```php
// ❌ VIETATO
protected static ?string $navigationIcon = 'heroicon-o-home';
protected static ?string $title = 'Titolo';
protected static ?string $navigationLabel = 'Etichetta';
```

#### 🚫 **Label e Traduzioni Hardcoded**
**MAI usare metodi hardcoded:**
```php
// ❌ VIETATO
TextInput::make('name')->label('Nome')
TextColumn::make('status')->placeholder('Stato')
Action::make('edit')->tooltip('Modifica')
```

**✅ Traduzioni gestite automaticamente via LangServiceProvider:**
```php
// ✅ CORRETTO
TextInput::make('name')
TextColumn::make('status')
Action::make('edit')
```

#### 🚫 **BadgeColumn Deprecato**
**NON usare più BadgeColumn:**
```php
// ❌ DEPRECATO
BadgeColumn::make('status')

// ✅ CORRETTO
TextColumn::make('status')->badge()
```

#### 🚫 **Servizi Tradizionali**
**NON usare Services, ma Spatie QueueableAction:**
```php
// ❌ VIETATO
class UserService
{
    public function process(array $data) { /* ... */ }
}

// ✅ CORRETTO
class ProcessUserAction
{
    use QueueableAction;

    public function execute(UserData $data): UserData
    {
        // Logica business
    }
}
```

#### 🚫 **getTableColumns() in XotBaseResource**
**Chi estende `XotBaseResource` NON DEVE implementare `getTableColumns()`:**
- ❌ `getTableColumns()` → VIETATO
- ✅ Usa `getTableColumns()` se necessario (ereditato da base)

### Vantaggi
1. **Controllo**: Override locale delle funzionalità
2. **Coerenza**: Comportamento uniforme tra moduli
3. **Manutenibilità**: Modifiche centralizzate
4. **Compatibilità**: Rispetto delle convenzioni PHP
5. **Traduzioni Automatiche**: Gestione centralizzata via LangServiceProvider
6. **Type Safety**: PHPDoc e tipizzazione rigorosa

## Sistema Service Provider

Il modulo Xot fornisce `XotBaseServiceProvider`, la classe base per tutti i ServiceProvider modulari.

**Caratteristiche**:
- Registrazione automatica di view, traduzioni, config, componenti
- Approccio DRY: configurazione minimale richiesta
- Sistema di view namespace resolution integrato
- Discovery automatico moduli

**Documentazione completa**: [Service Provider Architecture](./service-provider-architecture.md)

### Errori Comuni

**"No hint path defined for [namespace]"**  
Quando un view namespace non è registrato correttamente. Vedere:
- [Activity Module - Errore No Hint Path](../activity/docs/errori/no-hint-path-defined.md)

## Collegamenti Interni

### Architettura Fondamentale
- [XotBase Architecture Complete](./xotbase-architecture-complete.md) ⭐ **MASTER DOC**
- [Service Provider Architecture](./service-provider-architecture.md)
- [Standalone vs Resource Pages](./filament/standalone-vs-resource-pages.md) ⚠️ **IMPORTANTE**

### Errori Critici
- [Mai Estendere Filament Direttamente](./errori-critici/mai-estendere-filament-direttamente.md) ⚠️ **CRITICO**
- [Differenza Due XotBasePage](./filament/standalone-vs-resource-pages.md) ⚠️ **CRITICO**

### Fix Specifici
- [XotBasePage getModel() Fix](./xotbasepage-getmodel-fix.md)
- [Filament Resource Creation Fix](./filament-resource-creation-fix.md)

## Collegamenti Moduli
- [Activity Module](../activity/docs/README.md)
- [IndennitaResponsabilita Module](../indennitaresponsabilita/docs/README.md)
- [UI Module](../ui/docs/README.md)

## Collegamenti Root
- [Laraxot Conventions](../../../README.md)

*Ultimo aggiornamento: Sistema di documentazione automatica*
