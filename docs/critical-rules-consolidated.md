# Regole Critiche Consolidate - Laraxot

## Data
2025-11-30

## ⚠️ REGOLE CRITICHE OBBLIGATORIE

### 1. Frontend Asset Management (CSS/JS)

**REGOLA**: Ogni modifica a `resources/css/app.css` o `resources/js/app.js` richiede `npm run build && npm run copy`.

**Comando**:
```bash
cd /var/www/_bases/base_laravelpizza/laravel/Themes/Meetup
npm run build && npm run copy
```

**Perché**:
- Vite compila i file source in asset ottimizzati
- Gli asset devono essere copiati in `public_html/themes/Meetup/` per essere accessibili via web
- Senza build e copy, le modifiche NON sono visibili nel browser

**Quando**:
- ✅ Dopo modifiche CSS/JS
- ✅ Prima di testare nel browser
- ✅ Prima di commitare modifiche frontend
- ❌ NON serve durante `npm run dev` (hot reload automatico)

**Riferimenti**:
- `Themes/Meetup/docs/development-workflow-css-js-changes.md`
- `Modules/Meetup/docs/development-workflow-css-js-changes.md`

---

### 2. Componenti Blade Anonimi con Namespace

**REGOLA**: I componenti anonimi registrati con `Blade::anonymousComponentPath()` NON supportano la sintassi namespace esplicita.

**❌ ERRATO**:
```blade
<x-pub_theme::components.layouts.main>
    {{ $slot }}
</x-pub_theme::components.layouts.main>
```

**✅ CORRETTO**:
```blade
<x-layouts.main>
    {{ $slot }}
</x-layouts.main>
```

**Perché**:
- `CmsServiceProvider::registerNamespaces()` registra componenti anonimi con `Blade::anonymousComponentPath()`
- I componenti anonimi funzionano solo con sintassi semplice `<x-component-name>`
- La sintassi namespace esplicita cerca classi componenti o view namespace, non componenti anonimi

**Riferimenti**:
- `Themes/Meetup/docs/pub-theme-component-namespace-error-analysis.md`
- `Modules/Meetup/docs/pub-theme-component-namespace-error-analysis.md`

---

### 3. Filosofia Migrazioni Laraxot

**REGOLA ASSOLUTA**: Una Tabella = Una Migrazione

**Per modificare una tabella esistente**:
1. **MODIFICARE** direttamente la migrazione originale
2. **AGGIORNARE** il timestamp nel nome del file
3. **NON creare** mai nuove migrazioni separate

**❌ VIETATO**:
- Creare `add_column_to_table.php` per aggiungere colonne
- Creare `update_table.php` per modifiche
- Creare più migrazioni per la stessa tabella

**✅ CORRETTO**:
- Modificare `create_table.php` originale
- Aggiungere colonne nella sezione `tableUpdate()` con controlli `hasColumn()`
- Aggiornare timestamp: `2025_05_16_221811_create_table.php`

**Principi**:
- **Single Source of Truth**: Una sola fonte di verità per struttura tabella
- **Evoluzione Organica**: La migrazione "cresce" nel tempo
- **Anti-Frammentazione**: Evita esplosione di micro-migrazioni
- **Coerenza Temporale**: Timestamp riflette ultima modifica significativa

**Riferimenti**:
- `Modules/User/docs/laraxot-migration-philosophy.md`
- `Modules/Geo/docs_project/archive/principi_migrazioni_laraxot_uuid_polimorfismo.md`
- `Modules/Xot/docs/migration-update-rules.md`

---

### 4. Architettura Frontoffice (Folio + Volt)

**REGOLA CRITICA**: Nel frontoffice NON usare controller né scrivere rotte in `web.php` o `api.php`.

**✅ OBBLIGATORIO**:
- **Folio** per routing file-based: `resources/views/pages/*.blade.php` = rotte automatiche
- **Volt** per interattività: `@volt('component-name')` direttamente nelle pagine
- **Filament** SOLO per admin panel (backend)
- **Actions** chiamate da componenti Volt, non da controller

**Pattern Architetturale**:
```
Request → Folio (routing) → Blade Page → Volt Component → Action → Service/Model
```

**Riferimenti**:
- `Modules/Meetup/docs/architecture-reference.md`
- `Modules/Meetup/docs/folio-volt-repositories-analysis.md`

---

### 5. Documentazione Markdown

**REGOLA**: File `.md` SOLO dentro cartelle `docs` esistenti.

**✅ OBBLIGATORIO**:
- File `.md` dentro `Modules/{ModuleName}/docs/` o `Themes/{ThemeName}/docs/`
- Nomi file minuscoli (eccetto `README.md` e `CHANGELOG.md`)
- NON creare nuove cartelle `docs`

**❌ VIETATO**:
- Creare file `.md` fuori dalle cartelle `docs`
- Creare nuove cartelle `docs`
- Usare caratteri maiuscoli nei nomi file (tranne README.md e CHANGELOG.md)

**Riferimenti**:
- Regole repository specifiche

---

### 6. Controlli Qualità Codice

**REGOLA**: Ogni modifica a file PHP richiede controlli qualità.

**Comandi**:
```bash
# PHPStan livello 10
./vendor/bin/phpstan analyse --level=10 path/to/file.php

# PHPMD (se disponibile)
./vendor/bin/phpmd path/to/file.php text path/to/phpmd.ruleset.xml

# PHPInsights (se disponibile)
./vendor/bin/phpinsights analyse path/to/file.php
```

**Workflow**:
1. Modifica file
2. Esegui PHPStan livello 10
3. Corregge TUTTI gli errori
4. Esegui PHPMD e PHPInsights
5. Commit solo se tutti i controlli passano

**Riferimenti**:
- Regole repository specifiche

---

## Checklist Regole Critiche

- [x] Frontend Asset Management (build e copy)
- [x] Componenti Blade Anonimi (sintassi corretta)
- [x] Filosofia Migrazioni Laraxot (una tabella = una migrazione)
- [x] Architettura Frontoffice (Folio + Volt)
- [x] Documentazione Markdown (solo in docs esistenti)
- [x] Controlli Qualità Codice (PHPStan livello 10)

## Aggiornamenti Recenti

- **2025-11-30**: Aggiunta regola Frontend Asset Management
- **2025-11-30**: Aggiunta regola Componenti Blade Anonimi
- **2025-11-30**: Consolidata Filosofia Migrazioni Laraxot
- **2025-11-30**: Consolidata Architettura Frontoffice


