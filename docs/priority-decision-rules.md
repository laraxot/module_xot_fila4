# Priority Decision Rules - Super Mucca

**Data Creazione**: 16 Dicembre 2025  
**Status**: ✅ Regola Fondamentale

---

## 🎯 Regola Fondamentale

**L'AI Assistant DEVE SEMPRE scegliere autonomamente la priorità dei task.**

Non aspettare istruzioni esplicite dall'utente su cosa fare prima. Analizza il contesto, identifica i problemi critici, e procedi con la priorità più alta.

---

## 📋 Criteri di Priorità

### Livello CRITICO (Priorità Massima)

1. **Conflitti Git**: Risolvere immediatamente tutti i conflitti Git presenti nel codebase
   - Marker `<<<<<<< HEAD`, `=======`, `>>>>>>>` devono essere rimossi
   - Seguire sempre "fix forward" - MAI tornare a versioni precedenti
   - Verificare PHPStan L10 dopo ogni risoluzione

2. **Errori PHPStan Level 10**: Tutti gli errori PHPStan devono essere risolti immediatamente
   - MAI usare `@phpstan-ignore-next-line` senza analisi approfondita
   - Analizzare sempre la causa root prima di fixare

3. **Bug di Sicurezza**: Vulnerabilità di sicurezza devono essere fixate immediatamente

4. **Errori di Sintassi**: Parse errors, syntax errors bloccano tutto

### Livello ALTO

1. **Refactoring Architetturale**: Miglioramenti strutturali importanti
   - Estrazione logica in Actions (pattern Spatie QueueableAction)
   - Riduzione complessità ciclomatica
   - Miglioramento separazione responsabilità

2. **Documentazione Critica**: Docs mancanti per funzionalità core
   - Business logic non documentata
   - Pattern architetturali non spiegati

3. **Performance Issues**: Problemi di performance che impattano UX

### Livello MEDIO

1. **Miglioramenti Codice**: Refactoring non critici
   - Riduzione duplicazione codice
   - Miglioramento naming
   - Ottimizzazioni minori

2. **Documentazione Generale**: Docs per funzionalità secondarie
   - Guide utente
   - Esempi d'uso

3. **Test Coverage**: Aumento coverage test

### Livello BASSO

1. **Code Style**: Formattazione, spaziature
2. **Commenti**: Miglioramento commenti inline
3. **Ottimizzazioni Minori**: Micro-ottimizzazioni non critiche

---

## 🔄 Workflow Decisionale

### Quando Ricevo una Richiesta

1. **Analizza il Contesto**:
   - Cosa c'è nel diff?
   - Ci sono conflitti Git?
   - Ci sono errori PHPStan?
   - Quali sono i problemi più critici?

2. **Identifica Priorità**:
   - Usa i criteri sopra per determinare priorità
   - Se ci sono conflitti Git → CRITICO
   - Se ci sono errori PHPStan → CRITICO
   - Se la richiesta è generica → Analizza e scegli

3. **Procedi Autonomamente**:
   - NON aspettare conferma per task critici
   - Procedi con fix immediati
   - Documenta le decisioni prese

4. **Comunica le Priorità**:
   - Spiega perché hai scelto quella priorità
   - Mostra cosa hai fatto e perché
   - Chiedi conferma solo se davvero necessario

---

## 📝 Esempi Pratici

### Esempio 1: Conflitti Git nel Diff

**Situazione**: Diff mostra molti conflitti Git (`<<<<<<< HEAD`)

**Decisione**: **CRITICO** - Risolvere immediatamente tutti i conflitti

**Azione**:
1. Identificare tutti i file con conflitti
2. Risolvere ogni conflitto mantenendo versione corretta
3. Verificare PHPStan L10 dopo ogni fix
4. Documentare le risoluzioni

**Risultato**: Codebase pulito, nessun conflitto, PHPStan L10 compliant

---

### Esempio 2: Richiesta Generica "Fai qualcosa"

**Situazione**: Utente dice "scegli sempre te la priorità"

**Decisione**: Analizzare codebase e identificare problemi critici

**Azione**:
1. Cercare conflitti Git
2. Cercare errori PHPStan
3. Identificare pattern da migliorare
4. Procedere con priorità più alta

**Risultato**: Fix proattivi dei problemi più critici

---

### Esempio 3: Bug Report + Conflitti Git

**Situazione**: Bug report + diff mostra conflitti Git

**Decisione**: **CRITICO** - Risolvere conflitti PRIMA del bug

**Azione**:
1. Risolvere tutti i conflitti Git
2. Verificare che il bug esista ancora dopo risoluzione conflitti
3. Fixare il bug
4. Verificare PHPStan L10

**Risultato**: Codebase pulito, bug fixato, tutto verificato

---

## 🎯 Principi Fondamentali

1. **Autonomia**: Scegli sempre la priorità senza aspettare istruzioni
2. **Proattività**: Identifica e risolvi problemi prima che vengano segnalati
3. **Sistematicità**: Segui sempre un approccio metodico (Super Mucca)
4. **Documentazione**: Documenta sempre le decisioni prese
5. **Verifica**: Verifica sempre con PHPStan L10 dopo ogni modifica

---

## 🔗 Collegamenti

- [Super Mucca Workflow](./super-mucca-workflow.md)
- [Git Conflict Resolution Guide](./git-conflict-resolution.md)
- [PHP Quality Guide](./php_quality_guide.md)

---

**Regola Fondamentale**: L'AI Assistant è responsabile di scegliere autonomamente le priorità. Non aspettare istruzioni esplicite. Analizza, identifica, procedi.

*"La priorità non è una scelta, è una responsabilità."* - Super Mucca Zen

