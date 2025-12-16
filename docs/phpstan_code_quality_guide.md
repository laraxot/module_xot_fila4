<<<<<<< HEAD
# PHPStan Code Quality Guide - Laraxot

**Ultimo aggiornamento**: 2025-01-10  
**Principi**: DRY + KISS + SOLID + Robust  
**Stack**: Laravel 12 + Filament 4 + PHP 8.3 + Laraxot  
**Obiettivo**: 0 errori PHPStan Level 10 + Complexity < 10 + Quality > 80%
=======
# PHPStan Code Quality Guide - base_ptvx_fila4_mono

**Principi**: DRY + KISS + SOLID + Robust  
**Stack**: Laravel 12 + Filament 4 + PHP 8.3 + Laraxot  
**Obiettivo**: 0 errori PHPStan Level 10 + Complexity < 10 + Quality > 90%
>>>>>>> 533c4fc00 (.)

---

## 📑 Indice

1. [Regole Assolute](#-regole-assolute)
2. [Quick Reference - Comandi](#-quick-reference---comandi-essenziali)
3. [Workflow Operativo](#-workflow-operativo)
4. [Regole Architetturali](#-regole-architetturali)
5. [Patterns di Correzione](#-patterns-di-correzione)
6. [Complexity Reduction](#-complexity-reduction-patterns)
7. [Widget Best Practices](#-widget-best-practices)
8. [Code Quality Tools](#-code-quality-tools)
9. [Commenti e TODO](#-commenti-e-todo)
10. [Filament Class Extensions](#-filament-class-extension-rules)
11. [Anti-Pattern da Evitare](#-anti-pattern-da-evitare)
12. [Checklist e Mantra](#-checklist-e-mantra-finale)

---

## 🚨 Regole Assolute

### Mai Modificare Configurazione
- **NON modificare MAI** `laravel/phpstan.neon`
- **NON creare baseline** - tutti gli errori vanno corretti
- **NON ignorare errori** - approccio "fix, don't ignore"
- **NON usare** `@phpstan-ignore` (eccezione: solo per bug noti di PHPStan con issue aperta)

### Filosofia Fondamentale
- **Docs come Bibbia**: Studia `Modules/{Modulo}/docs/` prima di ogni correzione
- **Link sempre relativi**: Mai path assoluti nei file .md
- **Naming files**: Minuscolo, no date, solo README.md può essere maiuscolo
- **Property exists**: NON funziona con magic attributes Eloquent - usa `isset()`
- **Complexity target**: Ogni metodo < 10 cyclomatic complexity
- **Function length**: Ogni metodo < 20 righe (target), max 50 righe

---

## 📋 Quick Reference - Comandi Essenziali

```bash
# Analisi PHPStan completa
<<<<<<< HEAD
cd /var/www/_bases/base_laravelpizza/laravel
=======
cd /var/www/_bases/base_ptvx_fila4_mono/laravel
>>>>>>> 533c4fc00 (.)
./vendor/bin/phpstan analyse Modules --memory-limit=-1

# Analisi singolo modulo
./vendor/bin/phpstan analyse Modules/{ModuleName} --memory-limit=-1

# Analisi file specifico
./vendor/bin/phpstan analyse Modules/{Module}/app/path/to/File.php --level=10 --error-format=table

# Verifica autoload
composer dump-autoload && php artisan config:clear && php artisan cache:clear

# Code Quality Tools
./vendor/bin/pint --dirty                    # Format changed files
./vendor/bin/phpmd path/to/file text cleancode,codesize,design,naming
./vendor/bin/phpinsights analyse Modules/{Module} --format=table

# Complexity Analysis
./vendor/bin/phpmd Modules/{Module} text codesize --reportfile /tmp/complexity.txt
```

---

<<<<<<< HEAD
## 🎯 Workflow Operativo - Metodologia "Super Mucca"

### Fase 0: SCELTA PRIORITÀ 🎯

**REGOLA FONDAMENTALE**: L'AI Assistant DEVE SEMPRE scegliere autonomamente la priorità dei task.

**Criteri di Priorità**:
1. **CRITICO**: Conflitti Git, errori PHPStan L10, bug sicurezza, errori sintassi
2. **ALTO**: Refactoring architetturale, documentazione critica, performance issues
3. **MEDIO**: Miglioramenti codice, documentazione generale, test coverage
4. **BASSO**: Code style, commenti, ottimizzazioni minori

**Output**: Priorità chiara e motivata

### Fase 1: ANALISI PROFONDA 🔍

**Obiettivo**: Capire il PERCHÉ, non solo il COSA

1. **Aumenta confidenza**: Studia architettura e business logic
2. **Studia docs**: Leggi `Modules/{Modulo}/docs/` e `Themes/{Tema}/docs/`
3. **Comprendi filosofia**: Logica, politica, business logic, scopo del progetto
4. **Identifica problemi**: Elenca tutti i problemi identificati

**Domande da Porsi**:
- 🤔 Qual è la **business logic** di questo codice?
- 🎯 Qual è lo **scopo** di questa funzionalità?
- 🧘 Qual è la **filosofia** architettuale?
- 📊 Quali sono le **dipendenze** e gli **impatti**?
- 🔗 Come si **integra** con altri moduli?

**Output**: Comprensione profonda del contesto

### Fase 2: AGGIORNA E STUDIA DOCS 📚

**Obiettivo**: Mantenere la documentazione come "memoria viva" del progetto

1. **Verifica esistenza**: Prima di creare un nuovo file `.md`, controlla che non esista già un documento sullo stesso argomento.
2. **Naming files**: Nomi dei file `.md` in minuscolo, senza date, eccetto `README.md` e `CHANGELOG.md`.
3. **Posizione**: Crea file `.md` **solo** dentro le cartelle `docs` esistenti (`Modules/{ModuleName}/docs/` o `Themes/{ThemeName}/docs/`). NON creare nuove cartelle `docs`.
4. **Contenuto**: Documenta ciò che stai per fare, le decisioni prese, i pattern applicati, i bugfix, le analisi delle pagine.
5. **Link relativi**: Usa sempre link relativi nei file `.md`.

**Output**: Documentazione aggiornata e conforme alle regole

### Fase 3: LITIGA FURIOSAMENTE CON TE STESSO (Ragionamento) 🧠

**Obiettivo**: Trovare la soluzione più Laraxot-compliant, DRY, KISS, SOLID, Robust

1. **Brainstorming**: Genera diverse soluzioni possibili.
2. **Valutazione**: Analizza ogni soluzione rispetto ai principi Laraxot e agli obiettivi del progetto.
3. **Conflitto Interno**: Metti in discussione le tue ipotesi, cerca i punti deboli.
4. **Decisione**: Scegli la soluzione migliore e giustificala.

**Output**: Decisione chiara sulla soluzione da implementare e motivazioni

### Fase 4: IMPLEMENTA 💻

**Obiettivo**: Scrivere codice pulito, efficiente e conforme agli standard

1. **Scrivi codice**: Implementa la soluzione scelta.
2. **Type Safety**: Usa `declare(strict_types=1);`, type hints rigorosi, gestisci nullable values, array con strutture definite.
3. **Webmozart Assert**: Usa `Webmozart\Assert\Assert` per validazioni robuste.
4. **TheCodingMachine Safe**: Usa `TheCodingMachine\Safe` per funzioni PHP sicure.
5. **Complexity Reduction**: Applica pattern come "Extract Method", "Guard Clauses", "Template Method", "Strategy Pattern", "Single Responsibility Principle".
6. **Filament Class Extensions**: Estendi sempre classi `XotBase` (vedi sezione [Filament Class Extensions](#-filament-class-extension-rules)).
7. **Traduzioni**: NON usare `->label()`, `->placeholder()`, `->tooltip()` direttamente; usa file di traduzione.
8. **Actions vs Services**: Preferisci `Spatie\QueueableAction\QueueableAction` per la business logic.
9. **Eloquent Magic Properties**: Usa `isset()` invece di `property_exists()` per gli attributi magici dei modelli Eloquent.
10. **Filament Methods Return Types**: Assicurati che metodi come `getTableColumns`, `getFormSchema`, `getTableBulkActions`, `getTableActions`, `getTableFilters`, `getHeaderActions` restituiscano `array<string, mixed>` (array associativi).

**Output**: Codice implementato

### Fase 5: CONTROLLA E CORREGGI (Verifica Incrementale) ✅

**Obiettivo**: Garantire 0 errori PHPStan L10, complexity < 10, quality > 80%

1. **PHPStan Level 10**: Esegui `./vendor/bin/phpstan analyse --level=10 path/to/file.php`. Corregge **TUTTI** gli errori. NON procedere se ci sono errori.
2. **PHPMD**: Esegui `./vendor/bin/phpmd path/to/file.php text path/to/phpmd.ruleset.xml`. Risolvi code smells.
3. **PHPInsights**: Esegui `./vendor/bin/phpinsights analyse path/to/file.php`. Verifica qualità complessiva.
4. **Pint**: Esegui `./vendor/bin/pint --dirty` per formattare il codice.
5. **Autoload**: `composer dump-autoload && php artisan config:clear && php artisan cache:clear`.
6. **Applicazione si avvia**: Verifica che l'applicazione si avvii senza errori.

**Output**: Codice verificato e corretto, pronto per il miglioramento

**Output**: Codice corretto e verificato

### Fase 6: CONTROLLA (Triple Check) ✅

**Obiettivo**: Zero errori, massima qualità

```bash
# 1. PHPStan Level 10
./vendor/bin/phpstan analyse path/to/File.php --level=10 --error-format=table

# 2. PHPMD (Complexity)
./vendor/bin/phpmd path/to/File.php text codesize,cleancode

# 3. PHP Insights (Quality Score)
./vendor/bin/phpinsights analyse path/to/File.php --format=table

# 4. Pint (Formatting)
./vendor/bin/pint path/to/File.php
```

**Thresholds Obbligatori**:
- ✅ PHPStan: 0 errori Level 10
- ✅ Complexity: < 10 per metodo
- ✅ Function Length: < 20 righe (target), max 50
- ✅ Quality Score: > 80%

**Se NON passa**: Torna a Fase 2 (Litiga) e ripensa l'approccio

### Fase 7: VERIFICA 🧪

**Obiettivo**: Conferma funzionamento completo

```bash
# 1. Autoload
composer dump-autoload

# 2. Cache clear
php artisan config:clear
php artisan cache:clear

# 3. Test (se esistono)
php artisan test --filter={TestName}

# 4. PHPStan finale
./vendor/bin/phpstan analyse Modules/{ModuleName} --level=10
```

**Checklist Verifica**:
- [ ] Composer autoload OK?
- [ ] PHPStan 0 errori?
- [ ] PHPMD complexity OK?
- [ ] PHP Insights quality OK?
- [ ] Test passano (se esistono)?
- [ ] Runtime funziona?

**Output**: Verifica completa del funzionamento

### Fase 8: MIGLIORA 🚀

**Obiettivo**: Eccellenza oltre la compliance

**Domande per Miglioramento**:
- 💡 Posso ridurre ulteriormente la complexity?
- 💡 Posso estrarre metodi per maggiore chiarezza?
- 💡 Posso migliorare i nomi di variabili/metodi?
- 💡 Posso aggiungere PHPDoc più descrittivi?
- 💡 Ci sono pattern riutilizzabili da estrarre?

**Output**: Codice migliorato e ottimizzato

### Fase 9: AGGIORNA DOCS (DOPO) 📝

**Obiettivo**: Conoscenza permanente per il team

1. **Finalizza documentazione**: Dettagli dell'implementazione
2. **Documenta decisioni**: Motivazioni e scelte architetturali
3. **Aggiorna collegamenti**: Link bidirezionali con altre docs

**Output**: Documentazione completa e aggiornata

=======
## 🎯 Workflow Operativo

### Fase 1: Preparazione
1. **Aumenta confidenza**: Studia architettura e business logic
2. **Studia docs**: Leggi `Modules/{Modulo}/docs/` e `Themes/{Tema}/docs/`
3. **Aggiorna docs**: Mantieni documentazione sempre aggiornata

### Fase 2: Analisi
```bash
cd laravel
./vendor/bin/phpstan analyse Modules --memory-limit=-1 > /tmp/phpstan-report.txt
./vendor/bin/phpinsights analyse Modules/{Module} > /tmp/insights-report.txt
```

### Fase 3: Correzione Sistematica
1. **Scegli modulo**: Inizia da moduli con meno errori (quick wins)
2. **Categorizza errori**: Raggruppa per tipo (argument.type, return.type, ecc.)
3. **Correggi batch**: Pattern simili insieme
4. **Verifica incrementale**: Riesegui PHPStan dopo ogni batch
5. **Aggiorna docs**: Documenta modifiche e pattern applicati
6. **Quality check**: Verifica complexity e PHP Insights

### Fase 4: Verifica Finale
```bash
./vendor/bin/phpstan analyse Modules --memory-limit=-1
./vendor/bin/pint --dirty
./vendor/bin/phpinsights analyse Modules/{Module}
composer dump-autoload
php artisan config:clear
php artisan cache:clear
```

>>>>>>> 533c4fc00 (.)
---

## 🏗️ Regole Architetturali

### Struttura Modulare
- Ogni modulo è **completamente indipendente**
- Namespace: `Modules\{ModuleName}\` (MAI con prefisso "app")
- Autoload indipendente per ogni modulo
- Ogni modulo ha proprio `composer.json`

### Estensione Classi Filament
**MAI estendere classi Filament direttamente** - sempre XotBase:
- `Filament\Resources\Resource` → `Modules\Xot\Filament\Resources\XotBaseResource`
- `Filament\Resources\Pages\CreateRecord` → `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord`
- `Filament\Resources\Pages\EditRecord` → `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord`
- `Filament\Resources\Pages\ListRecords` → `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`
- `Filament\Widgets\Widget` → `Modules\Xot\Filament\Widgets\XotBaseWidget`
- `Filament\Widgets\TableWidget` → `Modules\Xot\Filament\Widgets\XotBaseTableWidget`
- `Filament\Widgets\ChartWidget` → `Modules\Xot\Filament\Widgets\XotBaseChartWidget`
- `Filament\Widgets\StatsOverviewWidget` → `Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget`
- `Illuminate\Support\ServiceProvider` → `Modules\Xot\Providers\XotBaseServiceProvider`

### Metodi Resource Filament
- Chi estende `XotBaseResource` **NON deve avere** `getTableColumns()`
<<<<<<< HEAD
- `getTableActions()` e `getTableBulkActions()` devono restituire `array<string, Action>` e `array<string, BulkAction>` rispettivamente
=======
- `getTableActions()` e `getTableBulkActions()` devono restituire `array<string, mixed>`
>>>>>>> 533c4fc00 (.)
- Se solo azioni standard → **rimuovile completamente**
- Se azioni personalizzate → includi `...parent::getTableActions()`

### Metodi Page Filament
Chi estende `XotBasePage` **NON deve avere**:
- `protected static ?string $navigationIcon`
- `protected static ?string $title`
- `protected static ?string $navigationLabel`

### Gestione Traduzioni
- **NON usare MAI**: `->label()`, `->placeholder()`, `->tooltip()`
- Tutte le etichette tramite file di traduzione nei moduli
- Usa `LangServiceProvider` per gestione automatica
- Struttura chiavi: `modulo::risorsa.fields.campo.label`

### Type Safety
- **Type hints rigorosi** per tutti i parametri e return types
- Gestisci **nullable values** (`?string`, `?int`)
- Evita `mixed` types salvo necessità documentate
- Array con **strutture definite** (`array<string, mixed>`)
- Usa `declare(strict_types=1);` in tutti i file PHP
- Usa **Webmozart Assert** per validazioni robuste
- Usa **TheCodingMachine Safe** per funzioni PHP sicure

---

## 🔧 Patterns di Correzione

### 1. Carbon createFromFormat (Carbon|null vs Carbon|false)
```php
// ✅ CORRETTO - L'estensione Carbon restituisce Carbon|null
$targetMonth = Carbon::createFromFormat('Y-m', $month);
if ($targetMonth === null) {
    $targetMonth = now()->startOfMonth();
} else {
    $targetMonth = $targetMonth->startOfMonth();
}
```

### 2. Type Narrowing con Assert
```php
use Webmozart\Assert\Assert;

// ✅ CORRETTO
if (is_array($data)) {
    Assert::isArray($data);
    $value = $data['key'] ?? null;
}
```

### 3. Cast Actions Centralizzate
```php
use Modules\Xot\Actions\Cast\SafeArrayCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;

// ✅ CORRETTO
$data = SafeArrayCastAction::cast($input);
$title = SafeStringCastAction::cast($mod->title);
```

<<<<<<< HEAD
### 4. Array Associativi Filament - Chiavi Sempre Stringhe

**REGOLA CRITICA**: I metodi Filament restituiscono sempre `array<string, ...>` - le chiavi DEVONO essere stringhe esplicite, NON mixed, NON int.

```php
// ❌ ERRORE - array<int, Action> (chiavi numeriche) - VIETATO
=======
### 4. Array Associativi Filament
```php
// ❌ ERRORE - array<int, Action>
>>>>>>> 533c4fc00 (.)
public function getTableActions(): array
{
    return [EditAction::make(), DeleteAction::make()];
}

<<<<<<< HEAD
// ❌ ERRORE - array<mixed, Action> (chiavi mixed) - VIETATO
/**
 * @return array<mixed, Action>
 */
public function getTableActions(): array
{
    return [...];
}

// ✅ CORRETTO - array<string, Action> (chiavi stringhe esplicite) - OBBLIGATORIO
=======
// ✅ CORRETTO - array<string, mixed>
>>>>>>> 533c4fc00 (.)
/**
 * @return array<string, Action>
 */
public function getTableActions(): array
{
    return [
        'edit' => EditAction::make(),
        'delete' => DeleteAction::make(),
    ];
}
```

<<<<<<< HEAD
**Metodi che DEVONO restituire `array<string, ...>` con chiavi stringhe esplicite**:
- `getTableColumns()` → `array<string, Column>` (chiavi string obbligatorie)
- `getFormSchema()` → `array<string, Component>` (chiavi string obbligatorie)
- `getTableActions()` → `array<string, Action>` (chiavi string obbligatorie)
- `getTableBulkActions()` → `array<string, BulkAction>` (chiavi string obbligatorie)
- `getTableFilters()` → `array<string, Filter>` (chiavi string obbligatorie)
- `getHeaderActions()` → `array<string, Action>` (chiavi string obbligatorie)

**REGOLA ASSOLUTA**: Le chiavi degli array DEVONO essere sempre string esplicite.

**MIXED come tipo valore è consentito SOLO come ultima spiaggia e deve essere documentato con PHPDoc.**

**❌ VIETATO**: Array con chiavi numeriche (`array<int, ...>`) o chiavi mixed (`array<mixed, ...>`).

### 5. Property Access su Mixed (Eloquent) - property_exists() NON Funziona

**REGOLA CRITICA**: `property_exists()` NON funziona con magic attributes Eloquent. Usa SEMPRE `isset()`.

```php
// ❌ ERRORE - property_exists() NON funziona con magic attributes Eloquent
if (property_exists($model, 'attribute')) {
    $value = $model->attribute; // PHPStan: Cannot access property on mixed
=======
### 5. Property Access su Mixed (Eloquent)
```php
// ❌ ERRORE - property_exists() NON funziona con magic attributes
if (property_exists($model, 'attribute')) {
    $value = $model->attribute;
>>>>>>> 533c4fc00 (.)
}

// ✅ CORRETTO - usa isset() per magic attributes
if (isset($model->attribute)) {
    $value = $model->attribute;
}

<<<<<<< HEAD
// ✅ ANCHE CORRETTO - validazione multipla con type narrowing
if (is_object($model) && isset($model->attribute)) {
    $value = $model->attribute;
}

// ✅ CORRETTO - con Assert per type safety
use Webmozart\Assert\Assert;

if (is_object($model)) {
    Assert::isObject($model);
    if (isset($model->attribute)) {
        $value = $model->attribute;
    }
}
```

**Perché `property_exists()` non funziona**:
- Eloquent usa magic attributes (`__get()`, `__set()`)
- `property_exists()` controlla solo proprietà reali della classe
- `isset()` funziona con magic attributes perché chiama `__isset()`

**Pattern Consigliato**:
```php
// ✅ Pattern completo per accesso sicuro a proprietà dinamiche
if (is_object($model) && isset($model->attribute)) {
    /** @var mixed $value */
    $value = $model->attribute;
    // Usa SafeCastActions per convertire se necessario
    $stringValue = SafeStringCastAction::cast($value);
}
=======
// ✅ ANCHE CORRETTO - validazione multipla
if (is_object($model) && isset($model->attribute)) {
    $value = $model->attribute;
}
>>>>>>> 533c4fc00 (.)
```

### 6. Casts Completi per Properties
```php
// ✅ CORRETTO - Tutte le properties usate DEVONO essere nei casts()
protected function casts(): array
{
    return [
        'auto_cleanup_num' => 'integer',
        'auto_cleanup_type' => 'string',
        'notification_email_address' => 'string',
    ];
}
```

### 7. HasXotFactory NON è Generico
```php
// ❌ ERRORE - HasXotFactory NON accetta generics
/** @use HasXotFactory<TFactory> */
use HasXotFactory;

// ✅ CORRETTO - Rimuovi generics
use HasXotFactory;
```

### 8. Notification via() Return Type
```php
// ❌ ERRORE - list<string>
public function via($notifiable): array
{
    return ['mail', 'nexmo'];
}

// ✅ CORRETTO - array<string, mixed>
/**
 * @return array<string, mixed>
 */
public function via($notifiable): array
{
    return [
        'mail' => 'mail',
        'nexmo' => 'nexmo',
    ];
}
```

### 9. Relazioni Eloquent con Generics
```php
// ✅ CORRETTO - Generics solo in PHPDoc
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @return HasMany<Post>
 */
public function posts(): HasMany
{
    return $this->hasMany(Post::class);
}
```

### 10. Factory Typing
```php
// ✅ CORRETTO
/**
 * @var \Illuminate\Database\Eloquent\Factories\Factory<Model> $factory
 */
$factory = Model::factory();
Assert::object($factory);
Assert::methodExists($factory, 'create');
$result = $factory->create($data);
```

### 11. Builder Type Hints con PHPDoc
```php
// ✅ CORRETTO - Type hint per query builder
/**
 * @param  \Illuminate\Database\Eloquent\Builder<\Modules\Limesurvey\Models\SurveyResponse>  $query
 */
private function applyFilters(\Illuminate\Database\Eloquent\Builder $query): void
{
    $query->where('status', 'active');
}

// ✅ ANCHE CORRETTO - PHPDoc per variabile
/** @var \Illuminate\Database\Eloquent\Builder<\Modules\User\Models\User> $query */
$query = User::query()->where('active', true);
```

---

## 🎯 Complexity Reduction Patterns

### Extract Method Pattern

**Problema**: Funzione troppo lunga (> 20 righe) o complessa (cyclomatic complexity > 10)

**Soluzione**: Estrarre logica in metodi privati focalizzati

#### Esempio Reale: QuestionChartStatsOverviewWidget

```php
// ❌ PRIMA - 104 righe, complexity 15
protected function getStats(): array
{
    if ($this->record === null) {
        return [
            Stat::make(__('quaeris::question_chart_stats_overview.stats.total_responses.label'), '0')
                ->description(__('quaeris::question_chart_stats_overview.messages.no_data_available'))
                ->color('gray'),
        ];
    }

    $record = $this->record;
    $filters = $this->pageFilters ?? [];

    // ... 90 righe di logica complessa ...
}

// ✅ DOPO - 5 righe, complexity 2
protected function getStats(): array
{
    if (! $this->isRecordValid()) {
        return $this->getEmptyStats();
    }

    /** @var object $record */
    $record = $this->record;

    $qid = $this->extractQuestionId($record);
    if ($qid === null) {
        return $this->getInvalidQuestionStats();
    }

    $stats = $this->fetchStatsFromDatabase($record, $qid);

    if ($stats === null) {
        return $this->getEmptyStats();
    }

    return $this->buildStatsArray($stats);
}

// Metodi estratti (ognuno < 25 righe, complexity < 3)
private function isRecordValid(): bool
{
    if ($this->record === null) {
        return false;
    }

    return isset($this->record->surveyId, $this->record->field_name);
}

private function extractQuestionId(object $record): mixed
{
    return $record->parent_qid ?? $record->question ?? null;
}

private function fetchStatsFromDatabase(object $record, mixed $qid): ?object
{
    if (! isset($record->field_name, $record->surveyId)) {
        return null;
    }

    $fieldName = (string) $record->field_name;
    $filters = $this->pageFilters ?? [];

    /** @phpstan-ignore-next-line */
    $baseQuery = SurveyResponse::getResponsesForSurvey($record->surveyId);

    /** @var \Illuminate\Database\Eloquent\Builder<\Modules\Limesurvey\Models\SurveyResponse> $query */
    $query = $baseQuery
        /* @phpstan-ignore-next-line */
        ->withAnswersLabel($qid, $fieldName)
        ->select($this->getStatsColumns($fieldName))
        ->whereNotNull('submitdate');

    $this->applyFiltersToQuery($query, $filters, $record);

    /** @phpstan-ignore-next-line */
    return $query->first();
}

private function buildStatsArray(object $stats): array
{
    /* @phpstan-ignore-next-line */
    $totalResponses = (int) ($stats->total_responses ?? 0);
    /* @phpstan-ignore-next-line */
    $completedResponses = (int) ($stats->completed_responses ?? 0);
    /* @phpstan-ignore-next-line */
    $uniqueResponses = (int) ($stats->unique_responses ?? 0);
    $completionRate = $this->calculateCompletionRate($totalResponses, $completedResponses);

    return [
        $this->createTotalResponsesStat($totalResponses),
        $this->createCompletedResponsesStat($completedResponses),
        $this->createCompletionRateStat($completionRate),
        $this->createUniqueResponsesStat($uniqueResponses),
    ];
}
```

**Risultato**: Complexity 15 → 2 (-87%), 104 righe → 5 righe (-95%)

### Guard Clauses Pattern

**Problema**: Nesting profondo, difficile da seguire

**Soluzione**: Early returns per validazione

```php
// ❌ PRIMA
public function process($data)
{
    if ($data !== null) {
        if (is_array($data)) {
            if (isset($data['key'])) {
                $value = $data['key'];
                if ($value !== '') {
                    return $this->handle($value);
                }
            }
        }
    }
    return null;
}

// ✅ DOPO
public function process($data)
{
    if ($data === null) {
        return null;
    }

    if (! is_array($data)) {
        return null;
    }

    if (! isset($data['key'])) {
        return null;
    }

    $value = $data['key'];
    if ($value === '') {
        return null;
    }

    return $this->handle($value);
}
```

### Template Method Pattern

**Problema**: Duplicazione logica simile in metodi diversi

**Soluzione**: Metodo template che chiama hook methods

```php
// ❌ PRIMA - Duplicazione
public function mount(): void
{
    if (! isset($this->stats['tot'])) {
        $this->tot = 0.0;
        return;
    }
    $stat = $this->stats['tot'];
    if (! is_array($stat) || ! isset($stat[0])) {
        $this->tot = 0.0;
        return;
    }
    $this->tot = (float) $stat[0];
}

// ✅ DOPO - Template method
public function mount(): void
{
    $this->tot = $this->extractStat('tot');
    $this->sms = $this->extractStat('sms');
    $this->emails = $this->extractStat('emails');
}

private function extractStat(string $key): float
{
    if (! isset($this->stats[$key])) {
        return 0.0;
    }
    $stat = $this->stats[$key];
    if (! is_array($stat) || ! isset($stat[0])) {
        return 0.0;
    }
    return (float) $stat[0];
}
```

### Strategy Pattern per Fallback

**Problema**: Logica di fallback duplicata

**Soluzione**: Metodo strategia condiviso

```php
// ✅ CORRETTO
public function getFormSchema(): array
{
    $action = $this->getActionName(__FUNCTION__);

    if (! $this->isActionValid($action)) {
        return $this->getFallbackFormSchema();
    }

    return $this->executeAction($action);
}

private function getFallbackFormSchema(): array
{
    return [
        TextInput::make('title'),
        Grid::make()
            ->schema([
                DateTimePicker::make('starts_at'),
                DateTimePicker::make('ends_at'),
            ]),
    ];
}
```

### Single Responsibility Principle

**Ogni metodo deve fare UNA sola cosa**

```php
// ❌ SBAGLIATO - Fa troppe cose
public function processUser($data)
{
    // Validazione
    if (! isset($data['email'])) {
        throw new Exception('Email required');
    }

    // Business logic
    $user = User::create($data);

    // Notifiche
    Mail::to($user)->send(new Welcome($user));

    // Logging
    Log::info('User created', ['id' => $user->id]);

    return $user;
}

// ✅ CORRETTO - Responsabilità separate
public function processUser(array $data): User
{
    $this->validateUserData($data);
    $user = $this->createUser($data);
    $this->notifyUser($user);
    $this->logUserCreation($user);

    return $user;
}

private function validateUserData(array $data): void
{
    if (! isset($data['email'])) {
        throw new ValidationException('Email required');
    }
}

private function createUser(array $data): User
{
    return User::create($data);
}

private function notifyUser(User $user): void
{
    Mail::to($user)->send(new Welcome($user));
}

private function logUserCreation(User $user): void
{
    Log::info('User created', ['id' => $user->id]);
}
```

---

## 🎨 Widget Best Practices

### Estensione Base Widgets

```php
// ✅ CORRETTO - Sempre estendere XotBase widgets
use Modules\Xot\Filament\Widgets\XotBaseTableWidget;

class MyTableWidget extends XotBaseTableWidget
{
    // Auto-managed properties from parent
}

// Altri base widgets disponibili:
// - XotBaseWidget (generic widget)
// - XotBaseTableWidget (table display)
// - XotBaseChartWidget (charts)
// - XotBaseStatsOverviewWidget (stats cards)
```

### Widget con Filtri

```php
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Livewire\Attributes\On;

class MyWidget extends XotBaseTableWidget
{
    use InteractsWithPageFilters;

    /**
     * Ascolta evento di aggiornamento filtri
     *
     * @param  array<string, mixed>  $_filters  Parametro non usato direttamente
     */
    #[On('filterUpdate')]
    public function updateFilters(array $_filters): void
    {
        // Filters are automatically handled by InteractsWithPageFilters
        // Force table refresh when filters change
        $this->resetTable();
    }

    protected function getTableQuery(): Builder
    {
        /** @var array<string, mixed> $filters */
        $filters = $this->pageFilters ?? [];

        $query = MyModel::query();

        $this->applyFilters($query, $filters);

        return $query;
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<MyModel>  $query
     * @param  array<string, mixed>  $filters
     */
    private function applyFilters(\Illuminate\Database\Eloquent\Builder $query, array $filters): void
    {
        if (isset($filters['date_from']) && $filters['date_from']) {
            $query->whereDate('created_at', '>=', $filters['date_from']);
        }

        if (isset($filters['date_to']) && $filters['date_to']) {
            $query->whereDate('created_at', '<=', $filters['date_to']);
        }
    }
}
```

### Widget con Record Key Univoca

```php
/**
 * Restituisce una chiave univoca per ogni record.
 *
 * IMPORTANTE: Non usare mai chiavi hardcoded, altrimenti Livewire
 * pensa che tutti i record siano lo stesso e mostra duplicati.
 */
public function getTableRecordKey(\Illuminate\Database\Eloquent\Model|array $record): string
{
    if (\is_array($record)) {
        return (string) ($record['id'] ?? $record['_id'] ?? '');
    }

    return (string) ($record->id ?? $record->_id ?? '');
}
```

### Widget Stats con Complessità Ridotta

```php
// ✅ PATTERN - Factory methods per stats
private function createTotalResponsesStat(int $count): Stat
{
    return Stat::make(
        __('quaeris::question_chart_stats_overview.stats.total_responses.label'),
        number_format((float) $count)
    )
        ->description(__('quaeris::question_chart_stats_overview.stats.total_responses.description'))
        ->color($count > 0 ? 'success' : 'gray')
        ->icon('heroicon-o-document-text');
}

private function createCompletionRateStat(float $rate): Stat
{
    return Stat::make(
        __('quaeris::question_chart_stats_overview.stats.completion_rate.label'),
        $rate.'%'
    )
        ->description(__('quaeris::question_chart_stats_overview.stats.completion_rate.description'))
        ->color($rate >= 75 ? 'success' : ($rate >= 50 ? 'warning' : 'danger'))
        ->icon('heroicon-o-chart-bar');
}
```

---

## 🛠️ Code Quality Tools

### Laravel Pint (Code Formatting)

```bash
# Format tutti i file modificati (git)
./vendor/bin/pint --dirty

# Format file specifico
./vendor/bin/pint path/to/File.php

# Test senza modificare
./vendor/bin/pint --test

# Format con preset specifico
./vendor/bin/pint --preset laravel
```

### PHPMD (Mess Detector)

```bash
# Analisi completa
./vendor/bin/phpmd Modules/{Module} text cleancode,codesize,controversial,design,naming,unusedcode

# Solo complexity
./vendor/bin/phpmd Modules/{Module} text codesize

# Output su file
./vendor/bin/phpmd Modules/{Module} text codesize > /tmp/phpmd-report.txt
```

**Thresholds PHPMD**:
- Cyclomatic Complexity: < 10
- NPath Complexity: < 200
- Function Length: < 20 righe (raccomandato), max 50

### PHP Insights (Architettura + Quality)

```bash
# Analisi modulo
./vendor/bin/phpinsights analyse Modules/{Module} --format=table

# Analisi con min-quality
./vendor/bin/phpinsights analyse Modules/{Module} --min-quality=80

# Fix automatico dove possibile
./vendor/bin/phpinsights analyse Modules/{Module} --fix
```

**PHP Insights Scores**:
- Code: > 90%
- Complexity: > 70% (target: 80%)
- Architecture: > 90%
- Style: > 95%

### Workflow Combinato

```bash
# 1. Fix code style
./vendor/bin/pint --dirty

# 2. Analizza PHPStan
./vendor/bin/phpstan analyse Modules/{Module} --level=10

# 3. Controlla complexity
./vendor/bin/phpmd Modules/{Module} text codesize

# 4. Quality overview
./vendor/bin/phpinsights analyse Modules/{Module}
```

---

## 💬 Commenti e TODO

### Regole per Commenti

```php
// ❌ SBAGLIATO - Commento ovvio
// Get the user
$user = User::find($id);

// ❌ SBAGLIATO - Commento obsoleto
// TODO: Fix this later (scritto 2 anni fa)

// ❌ SBAGLIATO - Codice commentato
/*
protected function oldMethod()
{
    return 'old logic';
}
*/

// ✅ CORRETTO - Spiega il "perché", non il "cosa"
// PHPStan L10: Type narrowing required for magic attributes
if (is_object($model) && isset($model->attribute)) {
    $value = $model->attribute;
}

// ✅ CORRETTO - Documenta decisione architetturale
/**
 * Usa isset() invece di property_exists() perché Eloquent usa magic attributes
 * che non sono rilevati da property_exists()
 */
private function hasAttribute(object $model, string $attribute): bool
{
    return isset($model->{$attribute});
}

// ✅ CORRETTO - Placeholder per implementazione futura
public function onDateSelect(string $_start, ?string $_end): void
{
    // Placeholder for future date selection implementation
}
```

### Gestione TODO

**REGOLA ASSOLUTA**: NON lasciare TODO nel codice production

```php
// ❌ SBAGLIATO
public function process()
{
    // TODO: Implement validation
    return $this->data;
}

// ✅ OPZIONE 1 - Implementa subito
public function process()
{
    $this->validateData();
    return $this->data;
}

// ✅ OPZIONE 2 - Placeholder professionale
public function process()
{
    // Validation will be implemented in next iteration (TICKET-123)
    return $this->data;
}

// ✅ OPZIONE 3 - Rimuovi metodo se non implementato
// (Se il metodo non è usato, eliminalo completamente)
```

### Codice Commentato

**REGOLA**: ZERO codice commentato nel repository

```php
// ❌ SBAGLIATO
class MyWidget extends Widget
{
    /*
    protected function modalActions(): array
    {
        return [
            \Saade\FilamentFullCalendar\Actions\EditAction::make(),
            \Saade\FilamentFullCalendar\Actions\DeleteAction::make(),
        ];
    }
    */
}

// ✅ CORRETTO - Rimuovi completamente
class MyWidget extends Widget
{
    // Se il metodo sarà necessario, verrà ripristinato da git history
}
```

### Import Commentati

```php
// ❌ SBAGLIATO
// use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Filament\Widgets\Widget;

// ✅ CORRETTO - Rimuovi import non usato
use Filament\Widgets\Widget;
```

---

<<<<<<< HEAD
## 📚 Filament Class Extension Rules

**Principio Fondamentale**: Mai estendere classi Filament direttamente - sempre usare classi XotBase

### 🚨 Regola Assoluta

**NON estendere MAI classi Filament direttamente**

Sempre estendere classi astratte con prefisso `XotBase` che rispettano il vecchio percorso.

### 📋 Mapping Classi Filament → XotBase

#### Resources Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Pages\CreateRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `Filament\Resources\Pages\EditRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `Filament\Resources\Pages\ListRecords` | `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `Filament\Resources\Pages\Page` | `Modules\Xot\Filament\Resources\Pages\XotBasePage` |

#### Resources

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Resource` | `Modules\Xot\Filament\Resources\XotBaseResource` |

#### Standalone Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Pages\Page` | `Modules\Xot\Filament\Pages\XotBasePage` |

#### Widgets

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Widgets\Widget` | `Modules\Xot\Filament\Widgets\XotBaseWidget` |
| `Filament\Widgets\TableWidget` | `Modules\Xot\Filament\Widgets\XotBaseTableWidget` |
| `Filament\Widgets\ChartWidget` | `Modules\Xot\Filament\Widgets\XotBaseChartWidget` |
| `Filament\Widgets\StatsOverviewWidget` | `Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget` |

#### Service Providers

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Illuminate\Support\ServiceProvider` | `Modules\Xot\Providers\XotBaseServiceProvider` |

### ⚠️ Regole Specifiche per XotBaseResource

#### Metodo getTableColumns NON Richiesto

Chi estende `XotBaseResource` **NON deve avere** il metodo `getTableColumns()`.

```php
// ❌ SBAGLIATO
class UserResource extends XotBaseResource
{
    public static function getTableColumns(): array
    {
        return [/* ... */];
    }
}

// ✅ CORRETTO
class UserResource extends XotBaseResource
{
    // getTableColumns() gestito automaticamente da XotBaseResource
}
```

#### Metodi Standard NON Richiesti

Non implementare questi metodi se restituiscono solo valori standard:

- `getPages()` - se contiene solo route standard
- `getRelations()` - se restituisce array vuoto
- `getTableActions()` - se contiene solo azioni standard
- `getTableBulkActions()` - se contiene solo azioni standard

### ⚠️ Regole Specifiche per XotBasePage

#### Proprietà NON Consentite

Chi estende `Modules\Xot\Filament\Pages\XotBasePage` **NON deve avere**:

```php
// ❌ SBAGLIATO
class MyPage extends XotBasePage
{
    protected static ?string $navigationIcon;
    protected static ?string $title;
    protected static ?string $navigationLabel;
}

// ✅ CORRETTO
class MyPage extends XotBasePage
{
    // Queste proprietà sono gestite automaticamente dalla classe base
}
```

### 🔧 Pattern per Modelli

#### Estensione BaseModel

```php
// ❌ SBAGLIATO
class Team extends Model implements TeamContract

// ✅ CORRETTO
class Team extends BaseTeam
```

#### Estensione Modelli di Terze Parti

```php
// ❌ SBAGLIATO - laravel/Modules/User/app/Models/Permission.php
class Permission extends Model

// ✅ CORRETTO
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
```

#### Non Replicare Metodi

**Regola**: Non replicare metodi della classe estesa se non ci sono differenze.

```php
// ❌ SBAGLIATO - Metodo identico alla classe base
class MyModel extends BaseModel
{
    public function getName(): string
    {
        return $this->name; // Identico alla classe base
    }
}

// ✅ CORRETTO - Rimuovi il metodo, usa quello della classe base
class MyModel extends BaseModel
{
    // Metodo getName() ereditato da BaseModel
}
```

### 🚫 Deprecazioni

#### BadgeColumn Deprecato

```php
// ❌ DEPRECATO
use Filament\Tables\Columns\BadgeColumn;

BadgeColumn::make('status')

// ✅ CORRETTO - Usa TextColumn con badge()
use Filament\Tables\Columns\TextColumn;

TextColumn::make('status')->badge()
```

#### protected $casts Deprecato (Laravel 11+)

```php
// ❌ DEPRECATO - Laravel 10 e precedenti
class User extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];
}

// ✅ CORRETTO - Laravel 11+ (metodo casts())
class User extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'is_admin' => 'boolean',
        ];
    }
}
```

**IMPORTANTE**: Se un modello ha ENTRAMBI `protected $casts` E `casts()`, rimuovi `protected $casts` (è deprecato e ignorato).

### 🌐 Gestione Traduzioni

#### NON Usare Metodi Diretti

```php
// ❌ SBAGLIATO
TextInput::make('name')
    ->label('Nome')
    ->placeholder('Inserisci nome')
    ->tooltip('Il nome dell\'utente')

// ✅ CORRETTO - Usa file di traduzione
TextInput::make('name')
// Le traduzioni sono gestite automaticamente da LangServiceProvider
```

**Struttura file traduzione**:
```
Modules/{ModuleName}/lang/{locale}/{resource}.php

// Esempio: Modules/User/lang/it/user.php
return [
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci nome',
            'tooltip' => 'Il nome dell\'utente',
        ],
    ],
];
```

### 🔄 Actions invece di Services

#### Usa Spatie Queueable Actions

```php
// ❌ SBAGLIATO - Service tradizionale
class UserService
{
    public function createUser(array $data): User
    {
        // ...
    }
}

// ✅ CORRETTO - Queueable Action
use Spatie\QueueableAction\QueueableAction;

class CreateUserAction
{
    use QueueableAction;

    public function execute(array $data): User
    {
        // ...
    }
}

// Uso
app(CreateUserAction::class)->execute($data);
```

**Risorsa**: https://github.com/spatie/laravel-queueable-action

### 📚 Esempi Completi

#### Resource Completa

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\User\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\EmailInput;

class UserResource extends XotBaseResource
{
    protected static ?string $model = User::class;

    /**
     * @return array<string, \Filament\Schemas\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required(),
            'email' => EmailInput::make('email')->required(),
        ];
    }

    // getTableColumns() NON necessario - gestito da XotBaseResource
    // getPages() NON necessario se standard
    // getTableActions() NON necessario se standard
}
```

**NOTA CRITICA**: 
- `getFormSchema()` restituisce `array<string, Component>` - chiavi SEMPRE stringhe
- `getTableColumns()` restituisce `array<string, Column>` - chiavi SEMPRE stringhe
- `getTableActions()` restituisce `array<string, Action>` - chiavi SEMPRE stringhe
- `getTableBulkActions()` restituisce `array<string, BulkAction>` - chiavi SEMPRE stringhe
- `getTableFilters()` restituisce `array<string, Filter>` - chiavi SEMPRE stringhe
- `getHeaderActions()` restituisce `array<string, Action>` - chiavi SEMPRE stringhe

**MAI usare chiavi numeriche o `mixed` come tipo chiave!**

#### Page Completa

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;

class DashboardPage extends XotBasePage
{
    // $navigationIcon NON necessario
    // $title NON necessario
    // $navigationLabel NON necessario
    // Gestiti automaticamente da XotBasePage
}
```

#### Widget Completo

```php
<?php

declare(strict_types=1);

namespace Modules\Meetup\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseTableWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class MyTableWidget extends XotBaseTableWidget
{
    use InteractsWithPageFilters;

    protected static ?int $sort = 1;

    public function getTableRecordKey(\Illuminate\Database\Eloquent\Model|array $record): string
    {
        if (\is_array($record)) {
            return (string) ($record['id'] ?? '');
        }

        return (string) ($record->id ?? '');
    }

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return MyModel::query();
    }

    /**
     * @return array<string, \Filament\Tables\Columns\Column>
     */
    protected function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable(),
            'name' => TextColumn::make('name')->sortable()->searchable(),
        ];
    }
}
```

### ✅ Checklist Pre-Implementazione

Prima di creare una nuova classe Filament:

- [ ] Ho verificato quale classe XotBase estendere?
- [ ] Non sto estendendo direttamente classi Filament?
- [ ] Non sto replicando metodi della classe base?
- [ ] Sto usando file di traduzione invece di ->label()?
- [ ] Sto usando Actions invece di Services?
- [ ] Ho rimosso BadgeColumn deprecato?
- [ ] Ho migrato da `protected $casts` a `casts()`?
- [ ] Ho verificato che il metodo non sia troppo complesso?
- [ ] Ho rimosso TODO e codice commentato?
- [ ] **I metodi array restituiscono `array<string, ...>` con chiavi stringhe?**
- [ ] **Sto usando `isset()` invece di `property_exists()` per modelli Eloquent?**
- [ ] **Sto evitando `mixed` come tipo chiave array?**

### 🔗 Collegamenti Utili

- [XotBase Extension Rules](./xotbase_extension_rules.md)
- [Filament Best Practices](./filament-best-practices.md)
- [Spatie Queueable Actions](https://github.com/spatie/laravel-queueable-action)
- [Filament v4 Documentation](https://filamentphp.com/docs/4.x)

### 💡 Ricorda Sempre

1. **Mai estendere Filament direttamente** - sempre XotBase
2. **Non replicare metodi** se identici alla classe base
3. **Usa traduzioni** invece di ->label() diretto
4. **Usa Actions** invece di Services
5. **Rispetta deprecazioni** (BadgeColumn, $casts)
6. **Mantieni complexity < 10** in tutti i metodi
7. **Rimuovi TODO e codice commentato** prima del commit
8. **Aggiorna docs** dopo ogni implementazione
9. **Array con chiavi stringhe** - `array<string, ...>` NON `array<int, ...>` o `array<mixed, ...>`
10. **Usa `isset()` per modelli** - `property_exists()` NON funziona con magic attributes
11. **Evita `mixed`** - usa solo come ultima spiaggia, preferisci tipi specifici

**Filosofia**: DRY + KISS - Non duplicare, non complicare, usa sempre le classi base.

**Quality Target**: PHPStan Level 10 + Complexity < 10 + Quality > 90%

**Regole Critiche Array**:
- `getTableColumns()` → `array<string, Column>`
- `getFormSchema()` → `array<string, Component>`
- `getTableActions()` → `array<string, Action>`
- `getTableBulkActions()` → `array<string, BulkAction>`
- `getTableFilters()` → `array<string, Filter>`
- `getHeaderActions()` → `array<string, Action>`

**Regola Critica Property Access**:
- ❌ `property_exists($model, 'attribute')` - NON funziona con magic attributes
- ✅ `isset($model->attribute)` - Funziona con magic attributes Eloquent

---

=======
>>>>>>> 533c4fc00 (.)
## 📚 Risorse Filament v4

Studia costantemente:
- [Filament v4 Upgrade Guide](https://filamentphp.com/docs/4.x/upgrade-guide)
- [What's New in Filament v4](https://filamentphp.com/content/leandrocfe-whats-new-in-filament-v4)
- [Filament v4 Forms Overview](https://filamentphp.com/docs/4.x/forms/overview)
- [Filament v4 Tables](https://filamentphp.com/docs/4.x/tables/overview)
- [Filament v4 Widgets](https://filamentphp.com/docs/4.x/widgets/overview)

---

## ✅ Checklist Pre-Correzione

Prima di correggere un errore:
- [ ] Ho letto la documentazione del modulo in `docs/`?
- [ ] Ho compreso la causa radice dell'errore?
- [ ] Ho valutato l'impatto architetturale?
- [ ] La soluzione rispetta i pattern esistenti?
- [ ] La soluzione usa classi XotBase quando necessario?
- [ ] La soluzione usa Cast Actions centralizzate?
- [ ] Ho verificato la complexity del metodo (< 10)?
- [ ] Ho verificato la lunghezza del metodo (< 20 righe)?

---

## ✅ Checklist Post-Correzione

Dopo aver corretto un batch:
- [ ] PHPStan Level 10 non segnala nuovi errori?
- [ ] Il numero totale di errori è diminuito?
- [ ] Pint ha formattato correttamente il codice?
- [ ] PHPMD non segnala complexity > 10?
- [ ] PHP Insights score è migliorato?
- [ ] L'autoload funziona correttamente?
- [ ] L'applicazione si avvia senza errori?
- [ ] La documentazione è aggiornata?
- [ ] TODO e codice commentato rimossi?

---

## 🎯 Strategia Ottimale

1. **Analisi per Modulo**: Eseguire PHPStan su singolo modulo
2. **Pattern Recognition**: Identificare errori ricorrenti
3. **Batch Fixes**: Correggere pattern simili insieme
4. **Complexity Check**: Verificare e ridurre complexity dopo ogni batch
5. **Documentazione Parallela**: Aggiornare docs durante correzioni
6. **Verifica Incrementale**: Riesegui tutti i tool dopo ogni batch

**Quick Wins**: Inizia da moduli con meno errori per massimizzare impatto.

---

## 🔍 Errori Più Comuni

### 1. Property Access su Mixed
```php
// ERRORE: Cannot access property $state on mixed
$record->state->transitionTo($newState);

// SOLUZIONE
if (method_exists($record, 'getState')) {
    $state = $record->getState();
    Assert::notNull($state);
    if (method_exists($state, 'transitionTo')) {
        $state->transitionTo($newState);
    }
}
```

### 2. Array Access su Mixed
```php
// ERRORE: Cannot access offset on mixed
$value = $data['key'];

// SOLUZIONE
$data = SafeArrayCastAction::cast($data);
$value = $data['key'] ?? null;
```

### 3. Return Type Mismatch
```php
// ERRORE: Method should return array but returns mixed
public function getData(): array {
    return $this->data;
}

// SOLUZIONE
public function getData(): array {
    Assert::isArray($this->data);
    return $this->data;
}
```

---

## 📖 Documentazione

### Struttura
- **Modulo**: `Modules/{ModuleName}/docs/` - Documentazione tecnica approfondita
- **Root**: `docs/` - Indici e collegamenti bidirezionali
- **Tema**: `Themes/{ThemeName}/docs/` - Documentazione tema

### Aggiornamento
- **Prima di correggere**: Studia docs del modulo
- **Dopo correzione**: Aggiorna docs con modifiche e pattern
- **Link relativi**: Mai path assoluti nei file .md
- **Naming**: Minuscolo, no date, solo README.md maiuscolo

---

## 🚫 Anti-Pattern da Evitare

### ❌ Ignorare Errori
```php
// SBAGLIATO
/** @phpstan-ignore-next-line */
$value = $data['key'];
```

### ❌ Modificare Configurazione
```php
// SBAGLIATO - Modificare phpstan.neon
parameters:
    ignoreErrors:
        - '#Cannot access property#'
```

### ❌ Cast Non Sicuri
```php
// SBAGLIATO
$array = (array) $data;
$string = (string) $value;
```

### ✅ Pattern Corretti
```php
// CORRETTO - Cast Actions
$array = SafeArrayCastAction::cast($data);
$string = SafeStringCastAction::cast($value);
```

---

## 💡 Regole Speciali

### Lock Files
Prima di modificare un file:
1. Crea file `.lock` con stesso nome nella stessa locazione
2. Se `.lock` esiste → vai a fare altro
3. Dopo modifica → cancella `.lock`

### Verifica Post-Modifica
Dopo ogni modifica file:
- [ ] PHPStan Level 10
- [ ] PHPMD (complexity < 10)
- [ ] PHP Insights (quality > 80%)
- [ ] Pint formatting
- [ ] Aggiorna docs moduli/temi

### Git
- **MAI tornare indietro** di versione
- Solo avanti, mai backward

### Property Exists vs Isset
- **property_exists()** NON funziona con magic attributes Eloquent
- Usa sempre **isset()** per proprietà dinamiche modelli

---

## 🎓 Mantra Finale

**DRY + KISS + SOLID + Robust + Laravel 12 + Filament 4 + PHP 8.3 + Laraxot**

**Filosofia Zen**: "Non avrai altro path all'infuori del relativo"

**Poteri Supermucca**: Massima confidenza, zero compromessi, correzione completa

**Approccio**: Fix, don't ignore - tutti gli errori vanno corretti, nessuno ignorato

**Quality Mantra**: Complexity < 10, Functions < 20 lines, Quality > 80%

---

## 📝 Note Operative

- **Lavora dentro** `laravel/` directory
- **Esegui PHPStan** da dentro `laravel/`
- **Non usiamo controller**: Backoffice = Filament, Frontoffice = Folio + Volt
- **Test**: Tutti i test in Pest
- **Architettura**: Capisci logica, politica, business logic prima di implementare
- **Complexity**: Ogni correzione PHPStan deve anche ridurre complexity se > 10
- **Documentazione**: Ogni pattern applicato va documentato in `docs/`

---

**Ricorda**: Le cartelle docs sono la tua bibbia. Studiale, rispettale, aggiornale costantemente.

---

## 🔗 Collegamenti Utili

- [XotBase Extension Rules](./xotbase_extension_rules.md)
- [Filament Best Practices](./filament-best-practices.md)
- [Code Quality Standards](./code_quality_standards.md)
- [Autonomous Priority Rule](./autonomous-priority-rule.md)
- [Super Mucca Methodology](./super-mucca-methodology.md)

<<<<<<< HEAD

=======
>>>>>>> 533c4fc00 (.)
