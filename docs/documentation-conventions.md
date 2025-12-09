# Convenzioni per la documentazione in Laraxot PTVX

## Convenzioni di naming

### Regole fondamentali per file di documentazione (.md)
1. **Nomi file in minuscolo**: Tutti i file nelle cartelle `docs` DEVONO avere nomi in minuscolo
   - ❌ ERRATO: `phpstan_fixes.md`, `SERVICE_PROVIDER.md`, `PHPStanFixes.md`
   - ✅ CORRETTO: `phpstan-fixes.md`, `service-provider.md`

2. **Unica eccezione**: L'unico file di documentazione che può contenere maiuscole è `README.md`

3. **Nomi cartelle in minuscolo**: Tutte le sottocartelle nelle directory `docs` DEVONO avere nomi in minuscolo
   - ❌ ERRATO: `PHPStan`, `Models`, `UI_COMPONENTS`
   - ✅ CORRETTO: `phpstan`, `models`, `ui_components`

4. **No date nei nomi file**: I nomi dei file .md NON devono contenere date
   - ❌ ERRATO: `phpstan-fixes-2025-01-10.md`, `report_2025.md`
   - ✅ CORRETTO: `phpstan-fixes.md`, `report.md`

### Regole fondamentali per file PHP

1. **Classi e interfacce**: DEVONO usare PascalCase secondo PSR-4
   - ❌ ERRATO: `userModel.php`, `user_model.php`, `USERMODEL.php`
   - ✅ CORRETTO: `UserModel.php`, `ArticleResource.php`, `HasXotTable.php`

2. **File di test**: DEVONO usare PascalCase con suffisso `Test.php` o `.pest.php`
   - ❌ ERRATO: `usertest.php`, `user_test.php`, `userTest.php`, `fixstructuretest.pest.php`
   - ✅ CORRETTO: `UserTest.php`, `UserModelTest.php`, `FixStructureTest.pest.php`

3. **NO file duplicati con case diverso**: Se esistono file con stesso nome ma case diverso, eliminare quello lowercase
   - ❌ ERRATO: Avere sia `fixstructuretest.pest.php` che `FixStructureTest.pest.php`
   - ✅ CORRETTO: Solo `FixStructureTest.pest.php` (eliminare `fixstructuretest.pest.php`)

4. **Test Pest**: Il nome del file deve corrispondere al nome della classe o funzionalità testata
   - ❌ ERRATO: `test1.pest.php`, `mytest.pest.php`
   - ✅ CORRETTO: `ArticleResourceTest.pest.php`, `UserModelTest.pest.php`

### Regola generale per il progetto

**I file di documentazione (.md) usano lowercase, i file PHP usano PascalCase (PSR-4).**

Questa distinzione è fondamentale per:
- Portabilità cross-platform (sistemi case-sensitive vs case-insensitive)
- Conformità con standard PSR-4 per autoload
- Evitare conflitti di naming
- Mantenere consistenza nel codebase

### Struttura dei file di documentazione
1. **Intestazione**: Ogni file di documentazione deve iniziare con un'intestazione che includa:
   - Titolo del documento
   - Breve descrizione
   - Data di ultima modifica
   - Autore/i (opzionale)

2. **Struttura dei contenuti**: Utilizzare titoli e sottotitoli organizzati in modo gerarchico:
   ```markdown
   # Titolo principale
   
   ## Sezione 1
   
   ### Sottosezione 1.1
   
   ### Sottosezione 1.2
   
   ## Sezione 2
   ```

3. **Esempi di codice**: Utilizzare blocchi di codice con indicazione del linguaggio:
   ```markdown
   ```php
   // Codice PHP qui
   ```
   ```

4. **Note e avvertimenti**: Utilizzare un formato standard per note e avvertimenti:
   ```markdown
   > **Nota**: Informazione importante.
   
   > **Attenzione**: Avvertimento critico.
   ```

## Organizzazione della documentazione

### Posizionamento
1. **Regole generali**: Le regole e documentazione generali vanno nella cartella `docs` del modulo Xot

2. **Documentazione specifica**: La documentazione specifica di un modulo va nella cartella `docs` del modulo corrispondente

3. **Documentazione di funzionalità**: La documentazione di funzionalità specifiche va in sottocartelle appropriate

### Collegamenti bidirezionali
1. **Da modulo a root**: Ogni documento in un modulo deve linkare alla documentazione root correlata:
   ```markdown
   Vedi anche: [Documentazione generale](/docs/nome_documento.md)
   ```

2. **Da root a modulo**: La documentazione root deve linkare ai documenti specifici dei moduli:
   ```markdown
   Vedi anche: [Implementazione nel modulo Xot](/laravel/Modules/Xot/docs/nome_documento.md)
   ```

## Manutenzione della documentazione

### Quando aggiornare la documentazione
1. Quando si aggiunge una nuova funzionalità
2. Quando si corregge un bug
3. Quando si modifica un comportamento esistente
4. Quando si identificano pattern o anti-pattern
5. Quando si aggiornano dipendenze che influenzano il comportamento

### Come aggiornare la documentazione
1. Modificare il documento esistente se le modifiche sono minori
2. Creare un nuovo documento se l'argomento è nuovo o se le modifiche sono sostanziali
3. Aggiornare i collegamenti bidirezionali
4. Aggiornare la data di ultima modifica

### Script di utilità
Gli script di utilità per la manutenzione della documentazione devono essere posizionati nella cartella `bashscripts` e devono avere nomi descrittivi in minuscolo con estensione `.sh`.

## Verifiche di qualità

### Verifica periodica
1. Verificare che tutti i file e le cartelle seguano le convenzioni di naming
2. Verificare che i collegamenti bidirezionali siano aggiornati
3. Verificare che la documentazione sia aggiornata con le ultime modifiche

### Automazione
Utilizzare script nella cartella `bashscripts` per automatizzare le verifiche e le correzioni:
- `check_docs_naming.sh`: Verificare le convenzioni di naming
- `update_doc_links.sh`: Aggiornare i collegamenti bidirezionali
- `rename_docs_files.sh`: Rinominare file e cartelle secondo le convenzioni

## Collegamenti a documentazione correlata

- [Documentazione generale](../../../docs/documentation_rules.md)
- [Convenzioni di naming in generale](../../../docs/naming_conventions.md)
- [Regole per ServiceProvider](../../IndennitaCondizioniLavoro/docs/service_provider.md)
- [Regole per file di traduzione](../../../.cursor/rules/translation_files_rules.mdc)

*Ultimo aggiornamento: Giugno 2025*