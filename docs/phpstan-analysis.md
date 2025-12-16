<<<<<<< HEAD
# PHPStan Analysis Report - 2025-11-18
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> 551c768c4 (.)
## stato analisi phpstan
>>>>>>> 38b70c7ba (.)

## Executive Summary

<<<<<<< HEAD
### osservazioni operative
- mantenere le classi base allineate ai pattern Laraxot (`XotBase*`, trait condivisi);
- proseguire con la normalizzazione dei file in `docs/` (evitare duplicati e nomi non conformi);
- verificare dopo ogni refactor che gli helper condivisi rispettino la tipizzazione stretta.
<<<<<<< HEAD
=======
**Analysis Date:** 2025-11-18
**PHPStan Level:** Maximum (Level 10)
**Total Errors Found:** 744
**Files Analyzed:** 3,945
**Status:** ❌ **CRITICAL ISSUES IDENTIFIED**
=======
<<<<<<< HEAD
# PHPStan Analysis Report - 18 Agosto 2025
>>>>>>> 38b70c7ba (.)

## Key Findings

<<<<<<< HEAD
### 1. Critical Issues by Module
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
>>>>>>> 62cc8443 (.)
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
<<<<<<< HEAD
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_<nome progetto>/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
=======
>>>>>>> d86d643a (.)
=======
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
>>>>>>> 472bd9dc (.)
=======
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
>>>>>>> cf971011 (.)
=======
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_<nome progetto>/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
<<<<<<< HEAD
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
**NON è stato modificato** `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
>>>>>>> 88e745db5 (.)
>>>>>>> 38b70c7ba (.)

#### Chart Module (Most Critical)
- **Errors:** ~200+ across chart export actions
- **Main Issues:**
  - Type safety violations (`mixed` type usage)
  - Unsafe function usage (missing `Safe\` functions)
  - Array access on mixed types
  - Invalid binary operations

#### <nome progetto> Module (Complex Issues)
- **Errors:** ~500+ across chart export and quantum actions
- **Main Issues:**
  - Missing class definitions (quantum-related classes)
  - Type mismatches in DTOs
  - Invalid array operations
  - Unreachable code

#### UI Module (Minor Issues)
- **Errors:** 1
- **Main Issues:** Unused return type in RadioBadge component

### 2. Common Pattern Issues

#### Type Safety Violations
```php
// ❌ Common issue: Accessing offset on mixed type
Cannot access offset 'datasets' on mixed.
Cannot access offset 'labels' on mixed.

// ❌ Common issue: Invalid binary operations
Binary operation "." between non-falsy-string and mixed results in an error.
```

#### Unsafe Function Usage
```php
// ❌ Missing Safe functions
Function base64_decode is unsafe to use. Please add 'use function Safe\base64_decode;'
Function json_encode is unsafe to use. Please add 'use function Safe\json_encode;'
Function preg_replace is unsafe to use. Please add 'use function Safe\preg_replace;'
```

#### Missing Class Definitions
```php
// ❌ Quantum-related classes not found
Class Modules\<nome progetto>\Actions\Charts\Quantum\GenerateConsciousChartAction
implements unknown interface Spatie\Queable\Contracts\Queable.
Class Modules\<nome progetto>\Actions\Charts\Quantum\GenerateConsciousChartAction
uses unknown trait Spatie\Queable\QueableAction.
```

### 3. Module-Specific Analysis

#### Chart Module Issues
**Primary Files:**
- `Chart/app/Actions/ChartJs/ExportToSvgAction.php` (40+ errors)
- `Chart/app/Actions/ExportChartToPngAction.php` (20+ errors)
- `Chart/app/Actions/ExportChartToSvgAction.php` (15+ errors)

**Key Problems:**
1. **Type Safety**: Extensive use of `mixed` without proper type checking
2. **Array Access**: Accessing array offsets without validation
3. **Function Safety**: Missing Safe library imports
4. **Return Types**: Incorrect PHPDoc return types

#### <nome progetto> Module Issues
**Primary Files:**
- `<nome progetto>/app/Actions/Charts/Export/ExportFilamentWidgetToPngAction.php` (100+ errors)
- `<nome progetto>/app/Actions/Charts/Export/ExportFilamentWidgetToSvgAction.php` (150+ errors)
- `<nome progetto>/app/Actions/Charts/Quantum/GenerateConsciousChartAction.php` (200+ errors)

**Key Problems:**
1. **Missing Classes**: Quantum architecture classes not implemented
2. **Type Mismatches**: Property type assignments incorrect
3. **Complex Logic**: Mathematical operations on mixed types
4. **Unreachable Code**: Dead code paths identified

### 4. Priority Classification

#### 🔴 CRITICAL (Immediate Fix Required)
1. **Missing Class Definitions** - Quantum architecture
2. **Type Safety Violations** - Mixed type usage
3. **Unsafe Function Calls** - Missing Safe library

#### 🟡 HIGH (Fix Within 1 Week)
1. **Array Access Issues** - Offset validation
2. **Return Type Mismatches** - PHPDoc corrections
3. **Binary Operation Errors** - Type validation

#### 🟢 MEDIUM (Fix Within 2 Weeks)
1. **Unused Code** - Dead code removal
2. **Minor Type Issues** - Non-critical type fixes
3. **Code Quality** - Style improvements

### 5. Recommended Solutions

#### Immediate Actions
1. **Implement Missing Quantum Classes**
   - Create the quantum architecture classes
   - Remove or implement the quantum features

2. **Add Safe Library Functions**
   ```php
   use function Safe\base64_decode;
   use function Safe\json_encode;
   use function Safe\preg_replace;
   // ... etc
   ```

3. **Type Safety Improvements**
   ```php
   // Before:
   $data['datasets'] // mixed type

   // After:
   /** @var array $data */
   $data['datasets'] // array type
   ```

#### Medium-Term Actions
1. **Refactor Chart Export Logic**
   - Implement proper type validation
   - Add array access guards
   - Improve error handling

2. **Code Quality Improvements**
   - Remove unreachable code
   - Fix PHPDoc annotations
   - Standardize return types

### 6. Success Metrics

- **Target**: Reduce errors from 744 to <50
- **Phase 1**: Fix critical issues (target: <200 errors)
- **Phase 2**: Fix high-priority issues (target: <100 errors)
- **Phase 3**: Fix medium-priority issues (target: <50 errors)

### 7. Next Steps

1. **Create Implementation Plan** for missing quantum classes
2. **Batch Fix Safe Function Issues** across all modules
3. **Prioritize Chart Module** as most critical
4. **Schedule Code Review** for complex fixes
5. **Update Documentation** with fixed patterns

---

<<<<<<< HEAD
**Analysis Generated**: 2025-11-18
**Next Review Date**: 2025-11-25
**Target Completion**: 2025-12-02
>>>>>>> b018eb3b5 (.)
=======
**Stato**: 🔄 Analisi Completata - Correzioni in Corso  
**phpstan.neon**: ✅ INTOCCATO  
**Approccio**: DRY + KISS + Type Safety
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 76bec91a (.)
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
