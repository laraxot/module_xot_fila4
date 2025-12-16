# Code Quality Tools Setup - base_laravelpizza

**Ultimo aggiornamento**: 2025-01-10  
**Principi**: DRY + KISS + SOLID + Robust  
**Stack**: Laravel 12 + Filament 4 + PHP 8.3 + Laraxot

---

## 📋 Strumenti Disponibili

### PHPStan (Static Analysis)
- **Tipo**: Composer dependency
- **Percorso**: `./vendor/bin/phpstan`
- **Versione**: Installata via Composer
- **Uso**: `./vendor/bin/phpstan analyse --level=10 path/to/file.php`

### PHPMD (PHP Mess Detector)
- **Tipo**: File .phar standalone
- **Percorso**: `laravel/phpmd.phar`
- **Versione**: 2.15.0 (snapshot)
- **Uso**: `php phpmd.phar path/to/file.php text cleancode,codesize,design,naming`

### PHP Insights
- **Tipo**: Composer dependency (NON disponibile come .phar standalone)
- **Percorso**: `./vendor/bin/phpinsights`
- **Installazione**: `composer require --dev nunomaduro/phpinsights`
- **Uso**: `./vendor/bin/phpinsights analyse path/to/file.php` oppure `php artisan insights`

---

## 🔧 Installazione e Setup

### PHPStan
PHPStan è già installato via Composer. Nessuna azione necessaria.

### PHPMD
Il file `.phar` standalone è già presente in `laravel/phpmd.phar`.

**Verifica funzionamento**:
```bash
cd /var/www/_bases/base_laravelpizza/laravel
php phpmd.phar --version
```

**Output atteso**: `PHPMD 2.15.0snapshot202312110823`

### PHP Insights
PHP Insights deve essere installato via Composer (non esiste file .phar standalone).

**Installazione**:
```bash
cd /var/www/_bases/base_laravelpizza/laravel
composer require --dev nunomaduro/phpinsights
```

**Pubblicazione configurazione** (opzionale):
```bash
php artisan vendor:publish --provider="NunoMaduro\PhpInsights\Application\Adapters\Laravel\InsightsServiceProvider"
```

---

## 📝 Comandi Quick Reference

### PHPStan
```bash
# Analisi completa moduli
./vendor/bin/phpstan analyse Modules --memory-limit=-1

# Analisi singolo modulo
./vendor/bin/phpstan analyse Modules/{ModuleName} --memory-limit=-1

# Analisi file specifico
./vendor/bin/phpstan analyse --level=10 path/to/file.php
```

### PHPMD
```bash
# Analisi completa modulo
php phpmd.phar Modules/{ModuleName} text cleancode,codesize,design,naming

# Analisi file specifico
php phpmd.phar path/to/file.php text cleancode,codesize,design,naming

# Solo complexity
php phpmd.phar Modules/{ModuleName} text codesize

# Output su file
php phpmd.phar Modules/{ModuleName} text codesize > /tmp/phpmd-report.txt
```

### PHP Insights
```bash
# Analisi modulo
./vendor/bin/phpinsights analyse Modules/{ModuleName} --format=table

# Analisi con min-quality
./vendor/bin/phpinsights analyse Modules/{ModuleName} --min-quality=80

# Fix automatico
./vendor/bin/phpinsights analyse Modules/{ModuleName} --fix

# Alternativa via artisan
php artisan insights
```

---

## 🎯 Workflow Completo

### Dopo ogni modifica file PHP:

```bash
cd /var/www/_bases/base_laravelpizza/laravel

# 1. PHPStan Level 10
./vendor/bin/phpstan analyse --level=10 path/to/file.php

# 2. PHPMD (complexity check)
php phpmd.phar path/to/file.php text codesize

# 3. PHP Insights (quality check)
./vendor/bin/phpinsights analyse path/to/file.php

# 4. Pint (formatting)
./vendor/bin/pint --dirty
```

### Workflow Batch (tutti i moduli):

```bash
cd /var/www/_bases/base_laravelpizza/laravel

# 1. PHPStan
./vendor/bin/phpstan analyse Modules --memory-limit=-1

# 2. PHPMD
php phpmd.phar Modules text cleancode,codesize,design,naming

# 3. PHP Insights
./vendor/bin/phpinsights analyse Modules --format=table

# 4. Pint
./vendor/bin/pint --dirty
```

---

## 📊 Thresholds e Target

### PHPStan
- **Livello**: 10 (massimo)
- **Obiettivo**: 0 errori

### PHPMD
- **Cyclomatic Complexity**: < 10
- **NPath Complexity**: < 200
- **Function Length**: < 20 righe (target), max 50

### PHP Insights
- **Code**: > 90%
- **Complexity**: > 70% (target: 80%)
- **Architecture**: > 90%
- **Style**: > 95%

---

## 🔄 Aggiornamento File .phar

### PHPMD
Per aggiornare `phpmd.phar`:

```bash
cd /var/www/_bases/base_laravelpizza/laravel
curl -L -o phpmd.phar https://github.com/phpmd/phpmd/releases/latest/download/phpmd.phar
chmod +x phpmd.phar
php phpmd.phar --version
```

### PHP Insights
PHP Insights non ha file .phar standalone. Aggiorna via Composer:

```bash
composer update nunomaduro/phpinsights --dev
```

---

## 📚 Documentazione Correlata

- [PHPStan Code Quality Guide](./phpstan_code_quality_guide.md)
- [Code Quality Mandatory Checks](./code-quality-mandatory-checks.md)
- [Filament Methods Return Types](./filament-methods-return-types.md)
- [Eloquent Magic Properties Rule](./eloquent-magic-properties-rule.md)

---

## ✅ Checklist Setup

- [x] PHPStan installato via Composer
- [x] PHPMD .phar presente in `laravel/phpmd.phar` (versione 2.15.0, 3.1M)
- [ ] PHP Insights installato via Composer (opzionale, installare se necessario)
- [x] File .phar eseguibili (`chmod +x`)
- [x] Documentazione aggiornata

## 📝 Note Importanti

### PHPMD
- **File .phar**: `laravel/phpmd.phar` (3.1M, versione 2.15.0)
- **Comando**: `php phpmd.phar path/to/file.php text cleancode,codesize,design,naming`
- **Funzionamento**: ✅ Verificato e funzionante
- **Esempio output**: Rileva `StaticAccess` warnings per Facades (normale in Laravel)

### PHP Insights
- **NON disponibile come .phar standalone** (non esiste nelle release GitHub)
- **Installazione**: `composer require --dev nunomaduro/phpinsights`
- **Comando**: `./vendor/bin/phpinsights analyse path/to/file.php` oppure `php artisan insights`
- **Stato**: Non installato (installare se necessario)
- **Nota**: PHP Insights richiede Composer, non può essere usato come file .phar standalone

---

**Filosofia**: DRY + KISS - Strumenti standalone quando possibile, Composer quando necessario.

**Quality Target**: PHPStan Level 10 + PHPMD Complexity < 10 + PHP Insights Quality > 80%

