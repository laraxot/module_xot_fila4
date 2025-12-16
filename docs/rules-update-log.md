# Log Aggiornamenti Regole Critiche

## Data
2025-11-30

## Aggiornamenti Recenti

### 2025-11-30 - Session Consolidation

#### Nuove Regole Aggiunte

1. **Frontend Asset Management**
   - Regola: `npm run build && npm run copy` dopo modifiche CSS/JS
   - Documentazione: `frontend-asset-management-rule.md`
   - File consolidati: `critical-rules-consolidated.md`

2. **Componenti Blade Anonimi con Namespace**
   - Regola: Usare `<x-component-name>` non `<x-namespace::component-name>`
   - Documentazione: `blade-anonymous-components-namespace-rule.md`
   - File consolidati: `critical-rules-consolidated.md`

3. **Filosofia Migrazioni Laraxot**
   - Regola: Una Tabella = Una Migrazione
   - Case Study: Teams Migration Violation
   - Documentazione: `migration-update-rules.md`, `migration-teams-violation-case-study.md`

#### File Creati/Aggiornati

**Xot Module**:
- `Modules/Xot/docs/critical-rules-consolidated.md` - Nuovo
- `Modules/Xot/docs/frontend-asset-management-rule.md` - Nuovo
- `Modules/Xot/docs/blade-anonymous-components-namespace-rule.md` - Nuovo
- `Modules/Xot/docs/migration-update-rules.md` - Aggiornato
- `Modules/Xot/docs/laraxot-architecture-rules.md` - Aggiornato
- `Modules/Xot/docs/rules-index.md` - Nuovo
- `Modules/Xot/docs/rules-update-log.md` - Questo file

**Meetup Module**:
- `Modules/Meetup/docs/critical-rules-consolidated.md` - Nuovo
- `Modules/Meetup/docs/rules-index.md` - Nuovo
- `Modules/Meetup/docs/development-workflow-css-js-changes.md` - Già esistente
- `Modules/Meetup/docs/pub-theme-component-namespace-error-analysis.md` - Già esistente

**Meetup Theme**:
- `Themes/Meetup/docs/critical-rules-consolidated.md` - Nuovo
- `Themes/Meetup/docs/rules-index.md` - Nuovo
- `Themes/Meetup/docs/development-workflow-css-js-changes.md` - Già esistente
- `Themes/Meetup/docs/pub-theme-component-namespace-error-analysis.md` - Già esistente

**User Module**:
- `Modules/User/docs/migration-teams-owner-id-violation-analysis.md` - Nuovo
- `Modules/User/docs/laraxot-migration-philosophy.md` - Già esistente

**Root**:
- `.cursorrules` - Aggiornato con nuove regole critiche

## Riepilogo Regole Critiche Attive

1. ✅ Architettura Frontoffice (Folio + Volt)
2. ✅ Gestione File Markdown
3. ✅ Controlli Qualità Codice (PHPStan livello 10)
4. ✅ Frontend Asset Management (build e copy)
5. ✅ Componenti Blade Anonimi (sintassi corretta)
6. ✅ Filosofia Migrazioni Laraxot (una tabella = una migrazione)

## Prossimi Aggiornamenti

- Monitorare nuove regole emergenti
- Consolidare regole simili
- Aggiornare esempi pratici
- Mantenere sincronizzazione tra moduli e temi


