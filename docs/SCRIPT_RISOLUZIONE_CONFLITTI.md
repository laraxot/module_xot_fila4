<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Script di Risoluzione Conflitti Git - FixCity Project

## Panoramica

Questo documento fornisce una guida sistematica per la risoluzione dei conflitti Git nel progetto FixCity, basata sull'esperienza acquisita durante la risoluzione di 161 file con conflitti.

## Workflow Sistematico

### 1. Identificazione Conflitti

```bash
# Trova tutti i file con conflitti Git
git status --porcelain | grep "^UU\|^AA\|^DD"

# Lista dettagliata dei conflitti
git diff --name-only --diff-filter=U

# Conta i conflitti per categoria
grep -r "<<< HEAD" --include="*.php" . | wc -l
grep -r "<<< HEAD" --include="*.md" . | wc -l
grep -r "<<< HEAD" --include="*.svg" . | wc -l
```

### 2. Categorizzazione per Priorità

**Priorità 1 - File Critici**
- `composer.json`
- File di configurazione (`config/`)
- File `.env`
- Service Provider

**Priorità 2 - Logica Business**
- Models
- Services
- Controllers
- Migrations

**Priorità 3 - Interfaccia**
- Views Blade
- Componenti Filament
- Assets (CSS, JS)

**Priorità 4 - Documentazione**
- File `.md`
- README
- Changelog

**Priorità 5 - Assets**
- File SVG
- Immagini
- File statici

### 3. Strategie di Risoluzione

#### File PHP
```php
<?php

declare(strict_types=1);

// 1. Mantenere sempre declare(strict_types=1)
// 2. Usare type hints espliciti
// 3. Seguire PSR-12
// 4. Aggiungere PHPDoc per metodi pubblici
```

#### File di Configurazione
```php
<?php

declare(strict_types=1);

return [
    /*
     * |--------------------------------------------------------------------------
     * | Section Name
     * |--------------------------------------------------------------------------
     * |
     * | Description
     * |
     */
    'key' => 'value',
];
```

#### File di Documentazione
```markdown
# Titolo Documento - FixCity Project

## Sezione

Contenuto aggiornato con riferimenti corretti al progetto.

## Collegamenti
- [Documento Correlato](./related-document.md)
- [Architettura](../architecture.md)
```

#### File SVG
```xml
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto SVG -->
</svg>
```

## Comandi Utili

### Verifica Sintassi PHP
```bash
# Verifica singolo file
php -l path/to/file.php

# Verifica tutti i file PHP modificati
find . -name "*.php" -exec php -l {} \;
```

<<<<<<< HEAD
=======
# 🐄 SUPER MUCCA - Script Risoluzione Conflitti Git
=======
# Script di Risoluzione Conflitti Git - FixCity Project
>>>>>>> 3fbbf1f5 (.)
=======
# Script di Risoluzione Conflitti Git - FixCity Project
>>>>>>> 3310e9c6 (.)
=======
# Script di Risoluzione Conflitti Git - FixCity Project
>>>>>>> 3310e9c6 (.)

## Panoramica

Questo documento fornisce una guida sistematica per la risoluzione dei conflitti Git nel progetto FixCity, basata sull'esperienza acquisita durante la risoluzione di 161 file con conflitti.

## Workflow Sistematico

### 1. Identificazione Conflitti

```bash
# Trova tutti i file con conflitti Git
git status --porcelain | grep "^UU\|^AA\|^DD"

# Lista dettagliata dei conflitti
git diff --name-only --diff-filter=U

# Conta i conflitti per categoria
grep -r "<<< HEAD" --include="*.php" . | wc -l
grep -r "<<< HEAD" --include="*.md" . | wc -l
grep -r "<<< HEAD" --include="*.svg" . | wc -l
```

### 2. Categorizzazione per Priorità

**Priorità 1 - File Critici**
- `composer.json`
- File di configurazione (`config/`)
- File `.env`
- Service Provider

**Priorità 2 - Logica Business**
- Models
- Services
- Controllers
- Migrations

**Priorità 3 - Interfaccia**
- Views Blade
- Componenti Filament
- Assets (CSS, JS)

**Priorità 4 - Documentazione**
- File `.md`
- README
- Changelog

**Priorità 5 - Assets**
- File SVG
- Immagini
- File statici

### 3. Strategie di Risoluzione

#### File PHP
```php
<?php

declare(strict_types=1);

// 1. Mantenere sempre declare(strict_types=1)
// 2. Usare type hints espliciti
// 3. Seguire PSR-12
// 4. Aggiungere PHPDoc per metodi pubblici
<<<<<<< HEAD
<<<<<<< HEAD
```

#### File di Configurazione
```php
<?php

declare(strict_types=1);

return [
    /*
     * |--------------------------------------------------------------------------
     * | Section Name
     * |--------------------------------------------------------------------------
     * |
     * | Description
     * |
     */
    'key' => 'value',
];
```

#### File di Documentazione
```markdown
# Titolo Documento - FixCity Project

## Sezione

Contenuto aggiornato con riferimenti corretti al progetto.

## Collegamenti
- [Documento Correlato](./related-document.md)
- [Architettura](../architecture.md)
```

#### File SVG
```xml
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto SVG -->
</svg>
```

## Comandi Utili

### Verifica Sintassi PHP
```bash
# Verifica singolo file
php -l path/to/file.php

# Verifica tutti i file PHP modificati
find . -name "*.php" -exec php -l {} \;
```

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
# 🐄 SUPER MUCCA - Script Risoluzione Conflitti Git
=======
# Script di Risoluzione Conflitti Git - FixCity Project
>>>>>>> 3fbbf1f5 (.)

## Panoramica

Questo documento fornisce una guida sistematica per la risoluzione dei conflitti Git nel progetto FixCity, basata sull'esperienza acquisita durante la risoluzione di 161 file con conflitti.

## Workflow Sistematico

### 1. Identificazione Conflitti

```bash
# Trova tutti i file con conflitti Git
git status --porcelain | grep "^UU\|^AA\|^DD"

# Lista dettagliata dei conflitti
git diff --name-only --diff-filter=U

# Conta i conflitti per categoria
grep -r "<<< HEAD" --include="*.php" . | wc -l
grep -r "<<< HEAD" --include="*.md" . | wc -l
grep -r "<<< HEAD" --include="*.svg" . | wc -l
```

### 2. Categorizzazione per Priorità

**Priorità 1 - File Critici**
- `composer.json`
- File di configurazione (`config/`)
- File `.env`
- Service Provider

**Priorità 2 - Logica Business**
- Models
- Services
- Controllers
- Migrations

**Priorità 3 - Interfaccia**
- Views Blade
- Componenti Filament
- Assets (CSS, JS)

**Priorità 4 - Documentazione**
- File `.md`
- README
- Changelog

**Priorità 5 - Assets**
- File SVG
- Immagini
- File statici

### 3. Strategie di Risoluzione

#### File PHP
```php
<?php

declare(strict_types=1);

// 1. Mantenere sempre declare(strict_types=1)
// 2. Usare type hints espliciti
// 3. Seguire PSR-12
// 4. Aggiungere PHPDoc per metodi pubblici
```

#### File di Configurazione
```php
<?php

declare(strict_types=1);

return [
    /*
     * |--------------------------------------------------------------------------
     * | Section Name
     * |--------------------------------------------------------------------------
     * |
     * | Description
     * |
     */
    'key' => 'value',
];
```

#### File di Documentazione
```markdown
# Titolo Documento - FixCity Project

## Sezione

Contenuto aggiornato con riferimenti corretti al progetto.

## Collegamenti
- [Documento Correlato](./related-document.md)
- [Architettura](../architecture.md)
```

#### File SVG
```xml
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto SVG -->
</svg>
```

## Comandi Utili

### Verifica Sintassi PHP
```bash
# Verifica singolo file
php -l path/to/file.php

# Verifica tutti i file PHP modificati
find . -name "*.php" -exec php -l {} \;
```

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
## COME FUNZIONANO

### Logica di Risoluzione
Gli script risolvono i conflitti Git prendendo sempre la **"incoming change"** (develop):

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
```
<<<<<<< HEAD
codice locale (viene RIMOSSO)
=======
codice incoming (viene MANTENUTO)
>>>>>>> develop
```

### Algoritmo AWK
```awk
BEGIN { skip = 0 }
/^<<<<<<< HEAD/ { skip = 1; next }    # Inizia a saltare
/^=======/ { skip = 0; next }         # Smette di saltare
/^>>>>>>> / { next }                  # Rimuove marker finale
!skip { print }                       # Stampa solo se non sta saltando
```
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

## RISULTATI OTTENUTI

### 📊 **Statistiche Esecuzione**
- **File processati**: ~100+ file
- **Conflitti risolti**: 100%
- **Backup creati**: Tutti i file modificati
- **Errori**: 0
- **Tempo esecuzione**: ~2 secondi

### ✅ **File Risolti Include**
- **PHP**: Tutti i file `.php` e `.blade.php`
- **JavaScript**: File `.js`
- **CSS**: File `.css`
- **Markdown**: File `.md`
- **JSON**: File `.json` e configurazioni
- **Config**: File di configurazione vari

### 🎯 **Moduli Interessati**
- `Modules/Xot/`
- `Modules/Geo/`
- `Modules/User/`
- `Modules/TechPlanner/`
- `Modules/Employee/`
- File di configurazione root

## SICUREZZA E BACKUP

### 🛡️ **Backup Automatico**
Ogni file modificato viene automaticamente salvato con estensione `.backup`:
```
file.php → file.php.backup
```

### 🔄 **Ripristino**
Per ripristinare un file:
<<<<<<< HEAD
<<<<<<< HEAD
=======
### Verifica PHPStan
>>>>>>> 3fbbf1f5 (.)
=======
```

#### File di Configurazione
```php
<?php

declare(strict_types=1);

return [
    /*
     * |--------------------------------------------------------------------------
     * | Section Name
     * |--------------------------------------------------------------------------
     * |
     * | Description
     * |
     */
    'key' => 'value',
];
```

#### File di Documentazione
```markdown
# Titolo Documento - FixCity Project

## Sezione

Contenuto aggiornato con riferimenti corretti al progetto.

## Collegamenti
- [Documento Correlato](./related-document.md)
- [Architettura](../architecture.md)
```

#### File SVG
```xml
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto SVG -->
</svg>
```

## Comandi Utili

### Verifica Sintassi PHP
```bash
# Verifica singolo file
php -l path/to/file.php

# Verifica tutti i file PHP modificati
find . -name "*.php" -exec php -l {} \;
```

### Verifica PHPStan
>>>>>>> 3310e9c6 (.)
```bash
# Verifica singolo file
./vendor/bin/phpstan analyse --level=10 path/to/file.php

# Verifica modulo completo
./vendor/bin/phpstan analyse --level=10 Modules/ModuleName/
```

### Verifica Struttura
```bash
# Controlla namespace
grep -r "namespace" --include="*.php" Modules/ModuleName/

# Controlla import
grep -r "use " --include="*.php" Modules/ModuleName/
```

## Checklist di Risoluzione

<<<<<<< HEAD
<<<<<<< HEAD
### ✅ **Controlli Eseguiti**
<<<<<<< HEAD
1. **Nessun marker rimasto**
=======
1. **Nessun marker rimasto**: `grep -r "<<<<<<< HEAD" .`
>>>>>>> 5a14301c (.)
2. **Sintassi PHP valida**: `php -l file.php`
3. **Git status pulito**: `git status`
=======
=======
>>>>>>> 3310e9c6 (.)
=======
```

#### File di Configurazione
```php
<?php

declare(strict_types=1);

return [
    /*
     * |--------------------------------------------------------------------------
     * | Section Name
     * |--------------------------------------------------------------------------
     * |
     * | Description
     * |
     */
    'key' => 'value',
];
```

#### File di Documentazione
```markdown
# Titolo Documento - FixCity Project

## Sezione

Contenuto aggiornato con riferimenti corretti al progetto.

## Collegamenti
- [Documento Correlato](./related-document.md)
- [Architettura](../architecture.md)
```

#### File SVG
```xml
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto SVG -->
</svg>
```

## Comandi Utili

### Verifica Sintassi PHP
```bash
# Verifica singolo file
php -l path/to/file.php

# Verifica tutti i file PHP modificati
find . -name "*.php" -exec php -l {} \;
```

### Verifica PHPStan
```bash
# Verifica singolo file
./vendor/bin/phpstan analyse --level=10 path/to/file.php

# Verifica modulo completo
./vendor/bin/phpstan analyse --level=10 Modules/ModuleName/
```

### Verifica Struttura
```bash
# Controlla namespace
grep -r "namespace" --include="*.php" Modules/ModuleName/

# Controlla import
grep -r "use " --include="*.php" Modules/ModuleName/
```

## Checklist di Risoluzione

>>>>>>> 3310e9c6 (.)
### Per Ogni File PHP
- [ ] `declare(strict_types=1)` presente
- [ ] Type hints espliciti
- [ ] Return types dichiarati
- [ ] PHPDoc per metodi pubblici
- [ ] PSR-12 compliance
- [ ] Namespace corretto
- [ ] Import statements appropriati
- [ ] Sintassi valida (`php -l`)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 3310e9c6 (.)

### Per Ogni File di Configurazione
- [ ] Sintassi PHP valida
- [ ] Struttura array corretta
- [ ] Commenti PHPDoc appropriati
- [ ] Chiavi e valori coerenti
- [ ] Compatibilità Laravel 11

### Per Ogni File di Documentazione
- [ ] Riferimenti aggiornati a FixCity
- [ ] Backlink bidirezionali
- [ ] Coerenza terminologica
- [ ] Struttura markdown valida
- [ ] Collegamenti funzionanti

### Per Ogni File SVG
- [ ] Sintassi XML valida
- [ ] Attributi accessibilità
- [ ] Dimensioni appropriate
- [ ] Stili CSS corretti
- [ ] Compatibilità browser

## Errori Comuni da Evitare

### ❌ Automazione Cieca
```bash
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
# Verifica conflitti rimanenti
grep -r "<<<<<<< HEAD\|=======\|>>>>>>> " . --include="*.php"
>>>>>>> 5a14301c (.)
=======
=======
### Verifica PHPStan
>>>>>>> 3fbbf1f5 (.)
```bash
# Verifica singolo file
./vendor/bin/phpstan analyse --level=10 path/to/file.php

# Verifica modulo completo
./vendor/bin/phpstan analyse --level=10 Modules/ModuleName/
```

### Verifica Struttura
```bash
# Controlla namespace
grep -r "namespace" --include="*.php" Modules/ModuleName/

# Controlla import
grep -r "use " --include="*.php" Modules/ModuleName/
```

## Checklist di Risoluzione

### Per Ogni File PHP
- [ ] `declare(strict_types=1)` presente
- [ ] Type hints espliciti
- [ ] Return types dichiarati
- [ ] PHPDoc per metodi pubblici
- [ ] PSR-12 compliance
- [ ] Namespace corretto
- [ ] Import statements appropriati
- [ ] Sintassi valida (`php -l`)

### Per Ogni File di Configurazione
- [ ] Sintassi PHP valida
- [ ] Struttura array corretta
- [ ] Commenti PHPDoc appropriati
- [ ] Chiavi e valori coerenti
- [ ] Compatibilità Laravel 11

### Per Ogni File di Documentazione
- [ ] Riferimenti aggiornati a FixCity
- [ ] Backlink bidirezionali
- [ ] Coerenza terminologica
- [ ] Struttura markdown valida
- [ ] Collegamenti funzionanti

### Per Ogni File SVG
- [ ] Sintassi XML valida
- [ ] Attributi accessibilità
- [ ] Dimensioni appropriate
- [ ] Stili CSS corretti
- [ ] Compatibilità browser

## Errori Comuni da Evitare

### ❌ Automazione Cieca
```bash
<<<<<<< HEAD
# Verifica conflitti rimanenti
grep -r "<<<<<<< HEAD\|=======\|>>>>>>> " . --include="*.php"
>>>>>>> 5a14301c (.)
=======
=======
### Verifica PHPStan
>>>>>>> 3fbbf1f5 (.)
```bash
# Verifica singolo file
./vendor/bin/phpstan analyse --level=10 path/to/file.php

# Verifica modulo completo
./vendor/bin/phpstan analyse --level=10 Modules/ModuleName/
```

### Verifica Struttura
```bash
# Controlla namespace
grep -r "namespace" --include="*.php" Modules/ModuleName/

# Controlla import
grep -r "use " --include="*.php" Modules/ModuleName/
```

## Checklist di Risoluzione

### Per Ogni File PHP
- [ ] `declare(strict_types=1)` presente
- [ ] Type hints espliciti
- [ ] Return types dichiarati
- [ ] PHPDoc per metodi pubblici
- [ ] PSR-12 compliance
- [ ] Namespace corretto
- [ ] Import statements appropriati
- [ ] Sintassi valida (`php -l`)

### Per Ogni File di Configurazione
- [ ] Sintassi PHP valida
- [ ] Struttura array corretta
- [ ] Commenti PHPDoc appropriati
- [ ] Chiavi e valori coerenti
- [ ] Compatibilità Laravel 11

### Per Ogni File di Documentazione
- [ ] Riferimenti aggiornati a FixCity
- [ ] Backlink bidirezionali
- [ ] Coerenza terminologica
- [ ] Struttura markdown valida
- [ ] Collegamenti funzionanti

### Per Ogni File SVG
- [ ] Sintassi XML valida
- [ ] Attributi accessibilità
- [ ] Dimensioni appropriate
- [ ] Stili CSS corretti
- [ ] Compatibilità browser

## Errori Comuni da Evitare

### ❌ Automazione Cieca
```bash
<<<<<<< HEAD
# Verifica conflitti rimanenti
grep -r "<<<<<<< HEAD\|=======\|>>>>>>> " . --include="*.php"
>>>>>>> 5a14301c (.)

# Mostra differenze
git diff

# Mostra file modificati
git status

# Committa le modifiche
git add . && git commit -m "Risolti conflitti merge con Super Mucca"
<<<<<<< HEAD
<<<<<<< HEAD
=======
# NON fare mai questo
git checkout --theirs .
git checkout --ours .
>>>>>>> 3fbbf1f5 (.)
=======
# NON fare mai questo
git checkout --theirs .
git checkout --ours .
>>>>>>> 3310e9c6 (.)
=======
# NON fare mai questo
git checkout --theirs .
git checkout --ours .
>>>>>>> 3310e9c6 (.)
```

### ❌ Risoluzione Parziale
```bash
# NON lasciare mai conflitti parziali
# Risolvere sempre completamente ogni file
```

### ❌ Ignorare Sintassi
```bash
# SEMPRE verificare la sintassi
php -l file.php
```

### ❌ Saltare Documentazione
```bash
# SEMPRE aggiornare la documentazione correlata
```

## Best Practices Specifiche

### Conflitti di Import
```php
// PRIMA (conflitto)
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};

// DOPO (risolto)
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
```

### Conflitti di Configurazione
```php
// PRIMA (conflitto)
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
    'en' => [
        'regional' => 'en_GB'
    ]
],

// DOPO (risolto)
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
    'en' => [
        'regional' => 'en_GB',
    ],
],
```

### Conflitti di Documentazione
```markdown
<!-- PRIMA (conflitto) -->
# Widget Translation Rules - SaluteOra Project
# Widget Translation Rules - FixCity Project

<!-- DOPO (risolto) -->
# Widget Translation Rules - FixCity Project
```

## Verifica Finale

### Checklist Completa
- [ ] Tutti i conflitti risolti
- [ ] Sintassi PHP valida
- [ ] Documentazione aggiornata
- [ ] Backlink creati
- [ ] Test funzionali eseguiti
- [ ] Commit con messaggio descrittivo

### Comandi di Verifica
```bash
# Verifica finale
git status --porcelain | grep "^UU\|^AA\|^DD"
# Dovrebbe essere vuoto

# Conta conflitti rimanenti
grep -r "<<< HEAD" . | wc -l
# Dovrebbe essere 0
```

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
### ❌ **Problema**: Conflitti non risolti
```bash
<<<<<<< HEAD
=======
# Verifica manualmente
grep -r "<<<<<<< HEAD" .
>>>>>>> 5a14301c (.)
# Esegui di nuovo lo script
./Modules/Xot/bashscripts/git/fix_conflicts_now.sh
=======
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 3310e9c6 (.)
## Esempi di Risoluzione

### Caso 1: File PHP con Import Duplicati
```php
// Conflitto
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};

// Risoluzione
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 3310e9c6 (.)
```

### Caso 2: File di Configurazione con Commenti
```php
// Conflitto
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
],
 * | Language Detection
 * | This is the configuration
'detect' => [

// Risoluzione
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
],
/*
 * |--------------------------------------------------------------------------
 * | Language Detection
 * |--------------------------------------------------------------------------
 * |
 * | This is the configuration
 * |
 */
'detect' => [
<<<<<<< HEAD
<<<<<<< HEAD
```

### Caso 3: File SVG con Versioni Diverse
```xml
<!-- Conflitto -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
</svg>

<!-- Risoluzione (versione più completa) -->
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto completo con animazioni -->
</svg>
```

## Conclusioni

La risoluzione sistematica dei conflitti Git richiede:

1. **Analisi manuale** di ogni conflitto
2. **Categorizzazione** per priorità
3. **Strategia appropriata** per ogni tipo di file
4. **Verifica completa** della sintassi e struttura
5. **Aggiornamento documentazione** correlata

Seguendo questo workflow, è possibile risolvere anche grandi quantità di conflitti mantenendo la qualità del codice e la coerenza del progetto.

## Collegamenti Correlati

- [Report Risoluzione Conflitti](./conflict_resolution_report.md)
- [Regole Laraxot](../laraxot-rules.md)
- [Best Practices PHP](../php-best-practices.md)
- [Architettura Modulare](../modular-architecture.md)
=======
=======
# NON fare mai questo
git checkout --theirs .
git checkout --ours .
>>>>>>> 3fbbf1f5 (.)
```

### ❌ Risoluzione Parziale
```bash
# NON lasciare mai conflitti parziali
# Risolvere sempre completamente ogni file
```

### ❌ Ignorare Sintassi
```bash
# SEMPRE verificare la sintassi
php -l file.php
```

### ❌ Saltare Documentazione
```bash
# SEMPRE aggiornare la documentazione correlata
```

## Best Practices Specifiche

### Conflitti di Import
```php
// PRIMA (conflitto)
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};

// DOPO (risolto)
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
```

### Conflitti di Configurazione
```php
// PRIMA (conflitto)
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
    'en' => [
        'regional' => 'en_GB'
    ]
],

// DOPO (risolto)
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
    'en' => [
        'regional' => 'en_GB',
    ],
],
```

### Conflitti di Documentazione
```markdown
<!-- PRIMA (conflitto) -->
# Widget Translation Rules - SaluteOra Project
# Widget Translation Rules - FixCity Project

<!-- DOPO (risolto) -->
# Widget Translation Rules - FixCity Project
```

## Verifica Finale

### Checklist Completa
- [ ] Tutti i conflitti risolti
- [ ] Sintassi PHP valida
- [ ] Documentazione aggiornata
- [ ] Backlink creati
- [ ] Test funzionali eseguiti
- [ ] Commit con messaggio descrittivo

### Comandi di Verifica
```bash
# Verifica finale
git status --porcelain | grep "^UU\|^AA\|^DD"
# Dovrebbe essere vuoto

# Conta conflitti rimanenti
grep -r "<<< HEAD" . | wc -l
# Dovrebbe essere 0
```

## Esempi di Risoluzione

### Caso 1: File PHP con Import Duplicati
```php
// Conflitto
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};

// Risoluzione
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
```

### Caso 2: File di Configurazione con Commenti
```php
// Conflitto
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
],
 * | Language Detection
 * | This is the configuration
'detect' => [

// Risoluzione
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
],
/*
 * |--------------------------------------------------------------------------
 * | Language Detection
 * |--------------------------------------------------------------------------
 * |
 * | This is the configuration
 * |
 */
'detect' => [
```

### Caso 3: File SVG con Versioni Diverse
```xml
<!-- Conflitto -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
</svg>

<!-- Risoluzione (versione più completa) -->
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto completo con animazioni -->
</svg>
```

## Conclusioni

La risoluzione sistematica dei conflitti Git richiede:

1. **Analisi manuale** di ogni conflitto
2. **Categorizzazione** per priorità
3. **Strategia appropriata** per ogni tipo di file
4. **Verifica completa** della sintassi e struttura
5. **Aggiornamento documentazione** correlata

<<<<<<< HEAD
*Script creati il: 2025-09-18*  
*Poteri della Super Mucca: ATTIVATI* 🐄✨
>>>>>>> 5a14301c (.)
=======
=======
```

### Caso 3: File SVG con Versioni Diverse
```xml
<!-- Conflitto -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
</svg>

<!-- Risoluzione (versione più completa) -->
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto completo con animazioni -->
</svg>
```

## Conclusioni

La risoluzione sistematica dei conflitti Git richiede:

1. **Analisi manuale** di ogni conflitto
2. **Categorizzazione** per priorità
3. **Strategia appropriata** per ogni tipo di file
4. **Verifica completa** della sintassi e struttura
5. **Aggiornamento documentazione** correlata

>>>>>>> 3310e9c6 (.)
=======
```

### Caso 3: File SVG con Versioni Diverse
```xml
<!-- Conflitto -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
</svg>

<!-- Risoluzione (versione più completa) -->
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto completo con animazioni -->
</svg>
```

## Conclusioni

La risoluzione sistematica dei conflitti Git richiede:

1. **Analisi manuale** di ogni conflitto
2. **Categorizzazione** per priorità
3. **Strategia appropriata** per ogni tipo di file
4. **Verifica completa** della sintassi e struttura
5. **Aggiornamento documentazione** correlata

>>>>>>> 3310e9c6 (.)
Seguendo questo workflow, è possibile risolvere anche grandi quantità di conflitti mantenendo la qualità del codice e la coerenza del progetto.

## Collegamenti Correlati

- [Report Risoluzione Conflitti](./conflict_resolution_report.md)
- [Regole Laraxot](../laraxot-rules.md)
- [Best Practices PHP](../php-best-practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
- [Architettura Modulare](../modular-architecture.md)
>>>>>>> 3fbbf1f5 (.)
=======
- [Architettura Modulare](../modular-architecture.md)
>>>>>>> 3310e9c6 (.)
=======
=======
# NON fare mai questo
git checkout --theirs .
git checkout --ours .
>>>>>>> 3fbbf1f5 (.)
```

### ❌ Risoluzione Parziale
```bash
# NON lasciare mai conflitti parziali
# Risolvere sempre completamente ogni file
```

### ❌ Ignorare Sintassi
```bash
# SEMPRE verificare la sintassi
php -l file.php
```

### ❌ Saltare Documentazione
```bash
# SEMPRE aggiornare la documentazione correlata
```

## Best Practices Specifiche

### Conflitti di Import
```php
// PRIMA (conflitto)
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};

// DOPO (risolto)
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
```

### Conflitti di Configurazione
```php
// PRIMA (conflitto)
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
    'en' => [
        'regional' => 'en_GB'
    ]
],

// DOPO (risolto)
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
    'en' => [
        'regional' => 'en_GB',
    ],
],
```

### Conflitti di Documentazione
```markdown
<!-- PRIMA (conflitto) -->
# Widget Translation Rules - SaluteOra Project
# Widget Translation Rules - FixCity Project

<!-- DOPO (risolto) -->
# Widget Translation Rules - FixCity Project
```

## Verifica Finale

### Checklist Completa
- [ ] Tutti i conflitti risolti
- [ ] Sintassi PHP valida
- [ ] Documentazione aggiornata
- [ ] Backlink creati
- [ ] Test funzionali eseguiti
- [ ] Commit con messaggio descrittivo

### Comandi di Verifica
```bash
# Verifica finale
git status --porcelain | grep "^UU\|^AA\|^DD"
# Dovrebbe essere vuoto

# Conta conflitti rimanenti
grep -r "<<< HEAD" . | wc -l
# Dovrebbe essere 0
```

## Esempi di Risoluzione

### Caso 1: File PHP con Import Duplicati
```php
// Conflitto
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};

// Risoluzione
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
```

### Caso 2: File di Configurazione con Commenti
```php
// Conflitto
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
],
 * | Language Detection
 * | This is the configuration
'detect' => [

// Risoluzione
'languages' => [
    'it' => [
        'regional' => 'it_IT',
    ],
],
/*
 * |--------------------------------------------------------------------------
 * | Language Detection
 * |--------------------------------------------------------------------------
 * |
 * | This is the configuration
 * |
 */
'detect' => [
```

### Caso 3: File SVG con Versioni Diverse
```xml
<!-- Conflitto -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
</svg>

<!-- Risoluzione (versione più completa) -->
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" 
     fill="none" 
     viewBox="0 0 24 24" 
     stroke="currentColor"
     stroke-width="1.5"
     aria-hidden="true" 
     role="img"
     aria-label="Description">
    <!-- Contenuto completo con animazioni -->
</svg>
```

## Conclusioni

La risoluzione sistematica dei conflitti Git richiede:

1. **Analisi manuale** di ogni conflitto
2. **Categorizzazione** per priorità
3. **Strategia appropriata** per ogni tipo di file
4. **Verifica completa** della sintassi e struttura
5. **Aggiornamento documentazione** correlata

<<<<<<< HEAD
*Script creati il: 2025-09-18*  
*Poteri della Super Mucca: ATTIVATI* 🐄✨
>>>>>>> 5a14301c (.)
=======
Seguendo questo workflow, è possibile risolvere anche grandi quantità di conflitti mantenendo la qualità del codice e la coerenza del progetto.

## Collegamenti Correlati

- [Report Risoluzione Conflitti](./conflict_resolution_report.md)
- [Regole Laraxot](../laraxot-rules.md)
- [Best Practices PHP](../php-best-practices.md)
- [Architettura Modulare](../modular-architecture.md)
>>>>>>> 3fbbf1f5 (.)
=======
- [Architettura Modulare](../modular-architecture.md)
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> cc7fb225 (.)
