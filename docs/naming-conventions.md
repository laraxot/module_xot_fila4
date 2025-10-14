# Naming Conventions - Modulo Xot

## Regola Fondamentale per File di Test

**CRITICO**: I file di test DEVONO seguire **PascalCase**, mai lowercase.

### ✅ CORRETTO
```
tests/Feature/FixStructureTest.pest.php
tests/Feature/ModuleServiceIntegrationTest.php
tests/Unit/HasExtraTraitTest.php
```

### ❌ SBAGLIATO (DA ELIMINARE)
```
tests/Feature/fixstructuretest.pest.php          # lowercase - ELIMINARE
tests/Feature/fix_structure_test.pest.php         # snake_case - ELIMINARE
```

## Motivazione

1. **Consistenza**: PascalCase è lo standard PHP
2. **Case Sensitivity**: Evita problemi cross-platform (Linux case-sensitive, Windows/Mac case-insensitive)
3. **Duplicazioni**: Previene file duplicati con diverse capitalizzazioni
4. **Autoload PSR-4**: Richiede nomi file = nomi classi

## Azione Correttiva

Quando trovi duplicati con diverse capitalizzazioni:

1. **Mantieni PascalCase**: `FixStructureTest.pest.php` ✅
2. **Elimina lowercase**: `fixstructuretest.pest.php` ❌

```bash
# Rimuovere duplicato lowercase
rm tests/Feature/fixstructuretest.pest.php

# Verificare che PascalCase esista
ls tests/Feature/FixStructureTest.pest.php
```

## Pattern di Naming Completo

### Test Files
- Feature tests: `{FeatureName}Test.pest.php`
- Integration tests: `{ServiceName}IntegrationTest.php`
- Unit tests: `{TraitName}Test.php`

### Models, Services, Actions
- Models: `PascalCase` (User.php, Module.php)
- Services: `PascalCase + Service` (ModuleService.php)
- Actions: `PascalCase + Action` (SafeStringCastAction.php)
- Traits: `PascalCase + Trait` (HasExtraTrait.php)

### Variables & Methods
- Variables: `camelCase` ($moduleName, $isEnabled)
- Methods: `camelCase` (getModels(), setName())
- Constants: `UPPER_SNAKE_CASE` (MAX_RETRIES)

### Directories
- Sempre PascalCase per namespace: `app/Models/`, `app/Services/`
- Mai lowercase: `app/models/` ❌

## Verifica Duplicati

```bash
# Trova duplicati case-insensitive
find tests/ -iname "fixstructuretest*"

# Trova file test non PascalCase
find tests/ -name "*test.php" -o -name "*Test.php" | grep -v "[A-Z]"
```

## Checklist Pre-Commit

- [ ] Tutti i file test sono PascalCase?
- [ ] Nessun duplicato con diverse capitalizzazioni?
- [ ] Namespace corrispondono ai path?
- [ ] PHPStan passa senza errori?

---

**Regola d'oro**: File duplicati? **Mantieni PascalCase, elimina tutto il resto.**

**Data**: Ottobre 2025
