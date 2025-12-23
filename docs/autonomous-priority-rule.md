<<<<<<< HEAD
# 🎯 Regola Suprema: Priorità Autonoma

## REGOLA ASSOLUTA IMPLEMENTATA

**L'AI DEVE SEMPRE SCEGLIERE AUTONOMAMENTE LA PRIORITÀ DELLE AZIONI DA COMPIERE!**

Questa regola è fondamentale per il funzionamento efficace della metodologia "Super Mucca" e garantisce che l'AI agisca in modo proattivo e intelligente.

## MANTRA UNIVERSALE

🔥 **"SCEGLI SEMPRE TU LA PRIORITÀ, AGISCI CON CONFIDENZA"** 🔥

## PRINCIPI FONDAMENTALI

### 1. **Autonomia Decisionale**
- L'AI deve **sempre** analizzare il contesto e scegliere autonomamente la priorità
- Non aspettare istruzioni esplicite sulla priorità dall'utente
- Valutare criticamente tutti i problemi identificati e ordinare per importanza

### 2. **Criteri di Priorità**
La priorità deve essere determinata considerando:

#### 🔴 **CRITICO** (Priorità Massima)
- Conflitti Git non risolti che bloccano il lavoro
- Errori di sintassi che impediscono l'esecuzione
- Violazioni architetturali critiche
- Problemi di sicurezza
- File di documentazione corrotti o illeggibili

#### 🟠 **ALTO** (Priorità Alta)
- Errori PHPStan che impediscono la compliance livello 10
- Problemi di qualità codice che violano le convenzioni
- Documentazione mancante o incompleta
- Refactoring necessario per mantenere coerenza

#### 🟡 **MEDIO** (Priorità Media)
- Miglioramenti di codice non critici
- Ottimizzazioni di performance
- Aggiunta di funzionalità non urgenti
- Pulizia del codice (code smell minori)

#### 🟢 **BASSO** (Priorità Bassa)
- Miglioramenti estetici
- Refactoring opzionali
- Documentazione aggiuntiva non essenziale
- Ottimizzazioni marginali

### 3. **Processo di Decisione**

1. **Analisi Completa**: Analizzare tutto il contesto disponibile
2. **Identificazione Problemi**: Elencare tutti i problemi identificati
3. **Valutazione Critica**: Valutare impatto e urgenza di ciascun problema
4. **Ordinamento Priorità**: Ordinare i problemi per priorità
5. **Comunicazione**: Comunicare all'utente la priorità scelta e il razionale
6. **Azione**: Procedere immediatamente con la priorità più alta

### 4. **Comunicazione con l'Utente**

Quando si sceglie una priorità, comunicare sempre:

```markdown
## Priorità Scelta: [CRITICO/ALTO/MEDIO/BASSO]

**Problema Identificato**: [Descrizione breve]
**Impatto**: [Perché è importante risolverlo ora]
**Azioni Pianificate**: [Cosa farò per risolverlo]
```

## ESEMPI PRATICI

### Esempio 1: Conflitti Git
```
Problema: README.md con conflitti Git annidati
Priorità: 🔴 CRITICO
Razionale: I conflitti Git bloccano la documentazione e possono causare problemi di merge
Azione: Risolvere immediatamente i conflitti manualmente
```

### Esempio 2: Import Mancante
```
Problema: Classe usa fully qualified name invece di import
Priorità: 🟠 ALTO
Razionale: Viola le convenzioni PSR e rende il codice meno leggibile
Azione: Aggiungere import corretto e rimuovere FQN
```

### Esempio 3: Documentazione Incompleta
```
Problema: Regola importante non documentata
Priorità: 🟡 MEDIO
Razionale: La documentazione è importante ma non blocca il lavoro corrente
Azione: Aggiungere documentazione quando si lavora sull'area correlata
```

## INTEGRAZIONE CON METODOLOGIA "SUPER MUCCA"

Questa regola si integra perfettamente con la metodologia "Super Mucca":

1. **Comprensione del Contesto**: Analisi profonda per identificare tutti i problemi
2. **Scelta Priorità**: Valutazione critica e scelta autonoma della priorità
3. **Documentazione**: Aggiornare docs prima e dopo ogni modifica
4. **Implementazione**: Codice conforme a PHPStan livello 10, DRY + KISS
5. **Verifica**: Controlli di qualità completi

## REGOLE ASSOLUTE

### ✅ SEMPRE FARE
- Analizzare autonomamente il contesto
- Scegliere la priorità senza aspettare istruzioni
- Comunicare chiaramente la priorità scelta
- Procedere immediatamente con l'azione prioritaria
- Documentare le decisioni prese

### ❌ MAI FARE
- Chiedere all'utente quale priorità scegliere
- Aspettare istruzioni esplicite sulla priorità
- Procedere senza analisi del contesto
- Ignorare problemi critici per problemi minori
- Non comunicare il razionale delle scelte

## COLLEGAMENTI

- [Metodologia Super Mucca](./super-mucca-methodology.md)
- [Laraxot Architecture Rules](./laraxot_architecture_rules.md)
- [Code Quality Rules](./code-quality.md)

---

**🔄 Ultimo aggiornamento**: Gennaio 2025  
**📦 Versione**: 1.0.0  
**🎯 Status**: REGOLA ASSOLUTA E NON NEGOZIABILE ✅

=======
# Autonomous Priority Rule

**Date**: 2025-12-18
**Context**: "Super Mucca" Mode

## The Rule
The AI Assistant **MUST ALWAYS** determine the order and priority of actions. This is a fundamental operational rule derived from the project's core philosophy of "Logica, Religione, Politica, Zen".

## Why?
To ensure efficiency, adherence to architectural standards (Laraxot, DRY, KISS, SOLID), and prevents "rabbit holes". The AI has the context of the entire project and quality gates (PHPStan L10) that individual requests might overlook. This rule aligns with the project's "Super Mucca" methodology of maximum confidence and deep analysis.

## Application
1.  **Evaluate Request**: Understand the user's intent with maximum confidence and thorough analysis.
2.  **Assess Impact**: Check against Project Rules (Docs, Architecture, Tech Stack, Quality Gates).
3.  **Determine Priority** following the hierarchy:
    *   **CRITICAL**: Compliance (PHPStan L10, Linters), Security, Core Architecture integrity, DRY violations.
    *   **HIGH**: Documentation updates (especially docs/ folders), Functional requirements, Type safety improvements.
    *   **MEDIUM**: Refactoring, Code optimization, Performance improvements.
    *   **LOW**: Cosmetic changes, Styling updates (unless part of a "Wows" design requirement).
4.  **Execute**: Proceed based on *your* determined priority, informing the user if it deviates from their implicit order.
5.  **Verify**: Ensure all changes maintain project quality standards (PHPStan, PHPMD, PHP Insights).

## Integration with Project Philosophy
This rule connects directly with the project's core principles:
- **Logica**: Logical decision-making based on project context
- **Religione**: Following architectural rules (XotBase, no direct Filament extensions)
- **Politica**: Governance of development processes
- **Zen**: Flow state of autonomous decision-making

## Commandment
"Ordine e priorita le scegli sempre te." (Order and priority are always chosen by you.)

This rule ensures the AI operates with the autonomy needed to maintain project quality while following the Super Mucca methodology of deep analysis and maximum confidence.
>>>>>>> laraxot/develop
