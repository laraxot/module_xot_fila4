# Quality Tools Standalone Installation - PHPMD e PHPInsights

**Ultimo aggiornamento**: 2025-01-10  
**Tipo**: Installazione standalone .phar  
**Posizione**: `/var/www/_bases/base_laravelpizza/laravel/`

---

## 📦 PHPMD (PHP Mess Detector)

### Installazione Standalone

PHPMD è disponibile come file `.phar` standalone e può essere scaricato direttamente:

```bash
cd /var/www/_bases/base_laravelpizza/laravel
curl -sSL https://phpmd.org/static/latest/phpmd.phar -o phpmd.phar
chmod +x phpmd.phar
```

### Verifica Installazione

```bash
./phpmd.phar --version
# Output atteso: PHPMD 2.15.0snapshot202312110823 (o versione più recente)
```

### Utilizzo

```bash
# Analisi singolo file
./phpmd.phar path/to/file.php text cleancode,codesize,controversial,design,naming,unusedcode

# Analisi modulo completo
./phpmd.phar Modules/Meetup text cleancode,codesize,design

# Analisi con report file
./phpmd.phar Modules/Meetup text codesize --reportfile /tmp/phpmd-report.txt
```

### Regole Disponibili

- **cleancode**: Violazioni di clean code principles
- **codesize**: Complessità e dimensioni del codice
- **controversial**: Pattern controversi (superglobals, camelCase, etc.)
- **design**: Problemi di design (coupling, cohesion)
- **naming**: Convenzioni di naming
- **unusedcode**: Codice non utilizzato

### Esempi Pratici

```bash
# Analisi completa con tutte le regole
./phpmd.phar Modules/Meetup/app/Providers/MeetupServiceProvider.php text cleancode,codesize,controversial,design,naming,unusedcode

# Solo complessità
./phpmd.phar Modules/Meetup text codesize

# Solo design issues
./phpmd.phar Modules/Meetup text design
```

---

## 📊 PHPInsights

### Installazione Standalone

**NOTA**: PHPInsights **NON** ha un file `.phar` standalone ufficiale disponibile. Deve essere installato via Composer:

```bash
cd /var/www/_bases/base_laravelpizza/laravel
composer require --dev nunomaduro/phpinsights
```

### Utilizzo dopo installazione Composer

```bash
# Analisi modulo
./vendor/bin/phpinsights analyse Modules/Meetup --format=table

# Analisi con qualità minima
./vendor/bin/phpinsights analyse Modules/Meetup --min-quality=80

# Auto-fix problemi
./vendor/bin/phpinsights analyse Modules/Meetup --fix

# Analisi singolo file
./vendor/bin/phpinsights analyse Modules/Meetup/app/Providers/MeetupServiceProvider.php
```

### Configurazione

PHPInsights può essere configurato tramite file `phpinsights.php` nella root del modulo:

```php
<?php

return [
    'preset' => 'laravel',
    'exclude' => [
        'vendor',
        'node_modules',
        'storage',
        'bootstrap/cache',
        'tests',
    ],
    'add' => [
        // Additional insights
    ],
    'remove' => [
        // Insights to remove
    ],
];
```

---

## 🔄 Workflow Completo con Tool Standalone

### Sequenza di Verifica Qualità

```bash
cd /var/www/_bases/base_laravelpizza/laravel

# 1. PHPStan (già installato via Composer)
./vendor/bin/phpstan analyse Modules/Meetup --level=10

# 2. PHPMD (standalone .phar)
./phpmd.phar Modules/Meetup/app/Providers/MeetupServiceProvider.php text cleancode,codesize,design

# 3. PHPInsights (via Composer)
./vendor/bin/phpinsights analyse Modules/Meetup/app/Providers/MeetupServiceProvider.php --format=table

# 4. Laravel Pint (formattazione)
./vendor/bin/pint Modules/Meetup/app/Providers/MeetupServiceProvider.php
```

---

## 📋 Checklist Pre-Commit

Prima di ogni commit, eseguire:

```bash
# 1. PHPStan Level 10
./vendor/bin/phpstan analyse path/to/file.php --level=10
# ✅ DEVE essere: [OK] No errors

# 2. PHPMD
./phpmd.phar path/to/file.php text cleancode,codesize,design
# ✅ Verificare output, documentare warnings se accettabili

# 3. PHPInsights (per file critici)
./vendor/bin/phpinsights analyse path/to/file.php --format=table
# ✅ Target: >80 score

# 4. Pint (formattazione)
./vendor/bin/pint path/to/file.php
```

---

## 🎯 Integrazione con Metodologia "Super Mucca"

### Fase 4: IMPLEMENTA
Dopo aver implementato le modifiche:

```bash
# Verifica qualità
./vendor/bin/phpstan analyse path/to/file.php --level=10
./phpmd.phar path/to/file.php text cleancode,codesize,design
./vendor/bin/phpinsights analyse path/to/file.php
```

### Fase 5: VERIFICA
Tutti i tool devono passare prima di procedere:

- ✅ PHPStan: 0 errori
- ✅ PHPMD: Warnings documentati se accettabili
- ✅ PHPInsights: Score > 80%

---

## 📁 Struttura File

```
laravel/
├── phpmd.phar                    # PHPMD standalone
├── vendor/
│   └── bin/
│       ├── phpstan               # PHPStan (via Composer)
│       ├── phpinsights           # PHPInsights (via Composer)
│       └── pint                  # Laravel Pint (via Composer)
└── Modules/
    └── {Module}/
        └── phpinsights.php       # Config PHPInsights (opzionale)
```

---

## 🔗 Collegamenti

- [PHPStan Code Quality Guide](./phpstan_code_quality_guide.md)
- [Code Quality Mandatory Checks](./code-quality-mandatory-checks.md)
- [Quality Tools Philosophy](./quality-tools-philosophy.md)

---

## ⚠️ Note Importanti

1. **PHPMD**: Disponibile come `.phar` standalone ✅
2. **PHPInsights**: **NON** disponibile come `.phar` standalone, richiede Composer ❌
3. **PHPStan**: Già installato via Composer ✅
4. **Laravel Pint**: Già installato via Composer ✅

### Alternativa PHPInsights

Se si desidera evitare Composer per PHPInsights, è possibile:
- Usare solo PHPMD per code smells
- Usare PHPStan per static analysis
- PHPInsights può essere opzionale per analisi approfondite

---

**Ultimo aggiornamento**: 2025-01-10  
**Status**: ✅ PHPMD installato, PHPInsights richiede Composer

