<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
# CRITICAL: Filament Resource-Model Alignment Rules

## 🚨 ERRORE CRITICO IDENTIFICATO E RISOLTO

### Problema Sistematico Grave
Nel modulo Progressioni sono stati identificati errori critici dove le risorse Filament NON riflettevano correttamente i campi dei modelli e delle migrazioni corrispondenti.

## Regole Critiche per Allineamento Model-Resource

### 1. Verifica Obbligatoria Prima di Ogni Commit
- ✅ **SEMPRE** verificare che i campi in `getFormSchema()` corrispondano ai campi `$fillable` del modello
- ✅ **SEMPRE** verificare che i campi corrispondano alla struttura della migrazione
- ✅ **SEMPRE** includere tutti i campi fillable del modello
- ✅ **SEMPRE** rispettare i tipi di dato definiti nella migrazione

### 2. Processo di Verifica Sistematica
1. **Analizzare il modello**: Controllare proprietà `$fillable`, `$casts`, PHPDoc, relazioni
2. **Analizzare la migrazione**: Controllare struttura tabella, tipi colonne, vincoli
3. **Verificare la risorsa**: Controllare che `getFormSchema()` includa tutti i campi necessari
4. **Testare funzionalità**: Verificare che create/edit funzionino correttamente

### 3. Campi Standard da Includere
- **Tutti i campi `$fillable`** del modello (obbligatorio)
- **Campo ID** (solitamente disabled)
- **Campi timestamp** se necessari per l'interfaccia
- **Campi di relazione** (foreign keys) con Select appropriati
- **Campi enum** con opzioni corrette

### 4. Tipi di Input Appropriati
```php
// Esempi di tipi corretti
TextInput::make('id')->disabled(),                    // ID sempre disabled
TextInput::make('name')->required(),                  // String obbligatorio
TextInput::make('description')->maxLength(255),       // String con lunghezza
TextInput::make('quantity')->numeric(),               // Numerico
Select::make('status')->options([...]),               // Enum/Select
Toggle::make('is_active'),                           // Boolean
DatePicker::make('date_field'),                      // Date
```

## Esempi di Errori Critici Identificati

### ❌ ERRORE: Campi Completamente Sbagliati
```php
// MODELLO: CategoriaPropro.php
protected $fillable = ['id', 'categoria', 'lista_propro', 'lista_propro_sup', 'posti', 'anno'];

// RISORSA SBAGLIATA (PRIMA):
public static function getFormSchema(): array
{
    return [
        TextInput::make('id')->disabled(),
        TextInput::make('ente'),           // ❌ Campo non esistente!
        TextInput::make('matr'),           // ❌ Campo non esistente!
        TextInput::make('cognome'),        // ❌ Campo non esistente!
        // ... 30+ campi sbagliati copiati e incollati
    ];
}
```

### ✅ CORREZIONE: Campi Allineati al Modello
```php
// RISORSA CORRETTA (DOPO):
public static function getFormSchema(): array
{
    return [
        TextInput::make('id')->disabled(),
        TextInput::make('categoria')->maxLength(255),
        TextInput::make('lista_propro')->maxLength(255),
        TextInput::make('lista_propro_sup')->maxLength(255),
        TextInput::make('posti')->numeric(),
        TextInput::make('anno')->numeric(),
    ];
}
```

## Impatto dell'Errore

### Conseguenze Gravi
- **Funzionalità Completamente Rotte**: Create/Edit non funzionano
- **Dati Persi**: Campi non salvati nel database
- **UX Compromessa**: Utenti non possono inserire/modificare dati corretti
- **Integrità Dati**: Inconsistenze e corruzione del database
- **Errori di Produzione**: Applicazione inutilizzabile

### Costi di Risoluzione
- **Tempo di Debug**: Ore per identificare il problema
- **Refactoring Massivo**: Correzione di tutte le risorse
- **Test di Regressione**: Verifica di tutte le funzionalità
- **Documentazione**: Aggiornamento completo

## Processo di Verifica per Nuove Risorse

### Checklist Obbligatoria
- [ ] Analizzato modello: campi `$fillable`, `$casts`, relazioni
- [ ] Analizzata migrazione: struttura tabella, tipi colonne
- [ ] Verificata risorsa: `getFormSchema()` include tutti i campi fillable
- [ ] Testata funzionalità: create/edit funzionano correttamente
- [ ] Documentata verifica: aggiornato piano di verifica

### Script di Verifica Automatica
```bash

# Verifica che tutti i campi fillable siano presenti nella risorsa
grep -r "protected \$fillable" Modules/*/app/Models/ | while read line; do
    # Estrai modello e campi
    # Verifica risorsa corrispondente
    # Segnala discrepanze
done
```

## Esempi di Correzioni Applicate

### 1. AssenzeResource ✅ CORRETTO
- **Prima**: 35+ campi sbagliati copiati da altro modello
- **Dopo**: 7 campi corretti allineati al modello Assenze
- **Risultato**: Funzionalità create/edit ripristinate

### 2. CategoriaProproResource ✅ CORRETTO
- **Prima**: 35+ campi sbagliati copiati da altro modello
- **Dopo**: 6 campi corretti allineati al modello CategoriaPropro
- **Risultato**: Funzionalità create/edit ripristinate

### 3. CriteriPrecedenzaResource ✅ GIÀ CORRETTO
- **Stato**: Già allineato perfettamente con il modello
- **Campi**: 9 campi corretti con tipi appropriati
- **Risultato**: Nessuna correzione necessaria

## Prevenzione Futura

### 1. Code Review Obbligatorio
- Verificare allineamento model-resource in ogni PR
- Utilizzare checklist di verifica
- Test automatici per validare corrispondenza

### 2. Template Standardizzati
- Creare template per nuove risorse Filament
- Generatori automatici che leggono il modello
- Validazione automatica in fase di build

### 3. Documentazione Aggiornata
- Mantenere piano di verifica aggiornato
- Documentare ogni modifica ai modelli
- Collegamenti bidirezionali tra docs

## Riferimenti e Collegamenti

<<<<<<< HEAD
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
=======
<<<<<<< HEAD
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
=======
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
>>>>>>> 34579462 (.)
<<<<<<< HEAD
>>>>>>> e769883c (.)
=======
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 099ab7a0 (.)
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 96276392 (.)
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
=======
=======
>>>>>>> 6d1255a8 (.)
<<<<<<< HEAD
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 3ae5e299 (.)
<<<<<<< HEAD
>>>>>>> 9f27fc9a6 (.)
=======
=======
>>>>>>> 44948f13 (.)
<<<<<<< HEAD
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 0ae90b17 (.)
>>>>>>> 8fd88dd43 (.)
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Modules/Progressioni/project_docs/plan.md](../../Progressioni/project_docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/project_docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/project_docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 44948f13 (.)
- [Modules/Progressioni/project_docs/plan.md](../../Progressioni/project_docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/project_docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/project_docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> f1d4085 (.)
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
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> cc1bbf15 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 34579462 (.)
>>>>>>> e769883c (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 0ae90b17 (.)
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> e769883c (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
>>>>>>> 34579462 (.)
<<<<<<< HEAD
>>>>>>> e769883c (.)
=======
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> cafe8bed (.)
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
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
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> 5cd593a5 (.)
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
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
>>>>>>> 96276392 (.)
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
=======
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
<<<<<<< HEAD
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 3ae5e299 (.)
<<<<<<< HEAD
>>>>>>> 9f27fc9a6 (.)
=======
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> 5b07d268 (.)
=======
>>>>>>> 44948f13 (.)
<<<<<<< HEAD
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 0ae90b17 (.)
<<<<<<< HEAD
>>>>>>> 8fd88dd43 (.)
=======
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)
=======
- [Modules/Progressioni/docs/plan.md](../../Progressioni/docs/plan.md) - Piano di verifica sistematica
- [Modules/Xot/docs/filament/resources/architecture/forbidden-methods.md](resources/architecture/forbidden-methods.md) - Metodi vietati in XotBaseResource
- [Modules/Xot/docs/filament_best_practices.md](../filament_best_practices.md) - Best practices Filament
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
- [/.windsurf/rules/filament-resource-model-alignment.mdc](../../../../.windsurf/rules/filament-resource-model-alignment.mdc) - Regole Windsurf
- [/.cursor/rules/filament-resource-model-alignment.mdc](../../../../.cursor/rules/filament-resource-model-alignment.mdc) - Regole Cursor

*Ultimo aggiornamento: Luglio 2025 - Dopo correzione errori critici modulo Progressioni*
<<<<<<< HEAD
=======
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
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
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
