# Roadmap for Xot Module

**Last Updated**: 2025-12-05
**Status**: Prioritized Action Plan

This roadmap outlines the necessary steps to improve the quality, security, and stability of the `Xot` module, based on the findings from the [Code Quality Analysis](./CODE_QUALITY_ANALYSIS.md).

---

## 🗺️ Prioritized Tasks

### 🟥 Priority 1: Critical Security Fix
- **Task**: Patch CVE-2025-64500 Vulnerability.
- **Details**: The `symfony/http-foundation` dependency has a known vulnerability. This must be resolved immediately to protect the application from potential authorization bypasses.
- **Action**:
    - [ ] Run `composer update symfony/http-foundation --with-all-dependencies` to get the latest secure version.
    - [ ] Verify that the update does not introduce breaking changes by running the project's test suite.
- **Status**:  bloqueo (BLOCKING)

---

### 🟨 Priority 2: Code Style & Automated Cleanup
- **Task**: Enforce consistent code style and fix minor violations.
- **Details**: The analysis revealed hundreds of minor style inconsistencies (line length, braces, import order) and unused imports. While not critical, they create noise and hinder maintenance.
- **Action**:
    - [ ] Run the project's configured code style fixer (likely `vendor/bin/pint` or `php-cs-fixer`) on the `Modules/Xot` directory to automatically fix as many issues as possible.
    - [ ] Manually review and fix any remaining line-length issues, especially in `lang` files where automatic wrapping might break strings.
    - [ ] Manually remove the unused `use` statements identified by PHPInsights.
- **Status**:  pendiente (PENDING)

---

### 🟦 Priority 3: Minor Refactoring & Investigation
- **Task**: Address specific code smells and warnings.
- **Details**: These are non-critical but important for long-term code health.
- **Action**:
    - [ ] **Method Naming**: Rename the method `dynamic_route` in `app/Services/RouteDynService.php` to `dynamicRoute` to adhere to camelCase standards.
    - [ ] **Trait Collision**: Investigate the PHPMD warning: `Trait method trans has not been applied, because there are collisions with other trait methods on Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`. Determine the source of the conflict and apply a proper fix (e.g., using `as` for aliasing or choosing one trait's implementation).
- **Status**: pendiente (PENDING)

---

## 💡 Future Goals (Post-Fixes)

- **CI/CD Integration**:
    - [ ] Add a step to the CI/CD pipeline to automatically run PHPStan, PHPMD, and PHPInsights on every pull request to prevent new issues from being introduced.
- **Test Coverage**:
    - [ ] Although not analyzed yet, a future goal should be to measure test coverage and write new tests for any critical but untested parts of the `Xot` module.
- **Documentation Review**:
    - [ ] The folder structure of the `docs` directory is very complex. A future task should be to consolidate and simplify the documentation structure for easier navigation.
