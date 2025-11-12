# Modulo Xot - Documentazione

> **Versione**: 1.2  
> **Ultimo aggiornamento**: Novembre 2025  
> **Changelog**: [CHANGELOG.md](./CHANGELOG.md)

## Panoramica

Il modulo **Xot** è il core framework di Laraxot PTVX. Fornisce:
- Classi base (`XotBase*`) per Resources, Widgets, Actions, Blocks
- Pattern architetturali condivisi (Accessors, Traits, Delegation)
- Strumenti comuni (XotData, MetatagData, Navigation, Trans)
- Automazioni git/bash (cartella `bashscripts/`)

Laraxot PTVX è un ecosistema modulare basato su **Laravel 12**, Filament 4, Livewire 3, PHPStan livello 10 e PHP 8.3.

## 🔧 Correzioni Recenti

### Fix Critici (Novembre 2025)

1. **Merge Conflict Cleanup**
   - Risolti 18 file con duplicazioni  dovute a merge automatici
   - Focus su `HasXotTable.php`, `XotBaseChartWidget.php`, `MetatagData.php`

2. **Script Git Conflicts**
   - `resolve_conflicts_current_change_v6.sh` aggiornato alla v6.1
   - Bug fixati: cleanup temp, stat detection, exit code robusto

3. **Documentazione**
   - Guide conflitti riscritta (v2.0) con approccio filosofico
   - Documenti di bugfix e analisi inseriti in docs/Xot

**Dettagli**: vedi [bugfix-hasxottable-duplicate-if.md](./bugfix-hasxottable-duplicate-if.md) e [syntax-errors-mass-fix.md](./syntax-errors-mass-fix.md)

---

## Architettura Modulare

### Principi Fondamentali
- **Modularità**: 36 moduli indipendenti
- **Coerenza**: Convenzioni namespace, file system uniforme
- **Estensibilità**: Classi base estendibili
- **Manutenibilità**: Strumenti comuni, automazioni

### Componenti Chiave Xot
- `app/Filament` → Classi base per Resources/Pages/Widgets
- `app/Datas` → Metatag, XotData, Navigation
- `app/Providers` → ServiceProvider condivisi
- `bashscripts/` → Automazioni git, merge, maintenance

---

## Strumenti Principali

| Componente | Descrizione |
|------------|-------------|
| `XotData` | Accesso centralizzato a config e dati cross-modulo |
| `MetatagData` | Gestione SEO/meta per front-end |
| `HasXotTable` | Trait avanzato per Filament tables |
| `TransTrait` | Traduzioni dinamiche e prefissi |
| `XotBaseRouteServiceProvider` | Routing modulare |

---

## Testing & Qualità

- **PHPStan**: Livello 10 (config in `phpstan.neon`)
- **Pest**: Test business logic moduli core
- **Laravel Pint**: PSR-12 + convenzioni Laraxot
- **Automazioni**: script in `bashscripts/test/`

```bash
./vendor/bin/phpstan analyse Modules/Xot --level=max
./vendor/bin/pest Modules/Xot/tests
```

---

## Roadmap

1. Consolidamento documentazione (500 → 120 file)
2. Automatizzare script di merge (PSR-4 + syntax pre-commit)
3. Portare test coverage > 90%
4. Introdurre dashboard health check moduli

---

## Link Utili

- [CHANGELOG](./CHANGELOG.md)
- [Bugfix HasXotTable](./bugfix-hasxottable-duplicate-if.md)
- [Mass Syntax Fix](./syntax-errors-mass-fix.md)
- [Git Conflict Guide](../../../bashscripts/docs/git-conflict-resolution-guide.md)
- [Namespace Conventions](./namespace_conventions.md)
- [Testing Guidelines](./testing.md)

---

**Nota**: Xot è comune a tutti i moduli. Ogni modifica deve essere documentata, testata e compatibile multi-progetto.
