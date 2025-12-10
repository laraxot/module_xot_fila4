# Lessons Learned – Consolidated Rules (2025-08-25)

This document consolidates recurring fixes and rules applied across modules. Keep files lowercase (README.md excepted).

## 1. Filament Translations
- Never use `->label()` in form/table components. Labels come from LangServiceProvider.
- Use expanded translation structure: label, placeholder, tooltip, helper_text, description, icon, color.
- Widget view paths must be `module::filament.widgets.name`.

## 2. Namespaces & Structure
- Always `Modules\\<Module>\\...` (no `App` segment inside modules).
- HTTP classes in `app/Http/` and Livewire in `app/Http/Livewire`.
- Widgets under `Modules/<Module>/Filament/Widgets`.

## 3. Models & Typing
- Models extend the module’s `BaseModel` only.
- Use `protected function casts(): array` (not `$casts`).
- Annotate `$fillable`, `$hidden`, `$dates`, `$with` as `/** @var list<string> */`.
- Add PHPDoc for properties and relationships.
- Prefer Xot cast Actions in `Modules/Xot/app/Actions/Cast/` for safe casting.

## 4. Migrations
- Extend `XotBaseMigration`, never implement `down()`.
- "One file per table" via `tableCreate`/`tableUpdate`; guard with `hasTable/hasColumn`.

## 5. FullCalendar
- Use `config()` (never `options()`), return `WidgetConfiguration` when using the factory, or make dedicated class extending `FullCalendarWidget`.
- Centralize plugins, locale, timezone, business rules in AdminPanelProvider.
- Respect patient/doctor/admin separation and permissions.

## 6. Documentation Policy
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
>>>>>>> ecd5ec32 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/docs/` (module).
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 62cc8443 (.)
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
<<<<<<< HEAD
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).

- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/docs/` (module).
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
=======
>>>>>>> 43d67f21 (.)
=======
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
- No root `docs/`. Use `docs_project/` (global) and `Modules/<Module>/project_docs/` (module).
>>>>>>> b7ea1cd1 (.)
>>>>>>> ecd5ec32 (.)
- All docs filenames lowercase except `README.md`.

## 7. PHPStan
- Do not modify `laravel/phpstan.neon`.
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
- Use CLI flags for scope/limits; target level 10+. Keep array key/value types explicit.
=======
>>>>>>> ce6fc085 (.)
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
<<<<<<< HEAD
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
=======
>>>>>>> 399f46d3 (.)
=======
- Use CLI flags for scope/limits; target level 9+. Keep array key/value types explicit.
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

## 8. Testing
- No `RefreshDatabase`.
- Tests validate observable business behavior, not internals like `$fillable`.

## 9. URL Localization & Frontoffice
- URLs prefixed by locale: `/{locale}/...`; get locale via `app()->getLocale()`.
- Homepage blade: `Themes/One/resources/views/pages/index.blade.php` (`pub_theme::pages.index`).
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Content from `config/local/<nome progetto>/database/content/pages/home.json`. Root `/` redirects to `/{locale}`.

<<<<<<< HEAD
## 10. Icons & Assets (<nome progetto>)
- SVG in `laravel/Modules/<nome progetto>/resources/svg/`, kebab-case; reference as `<nome progetto>-{name}`.
=======
## 10. Icons & Assets ()
- SVG in `laravel/Modules//resources/svg/`, kebab-case; reference as `<nome progetto>-{name}`.
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
- Content from `config/local/<nome progetto>/database/content/pages/home.json`. Root `/` redirects to `/{locale}`.

## 10. Icons & Assets ()
- SVG in `laravel/Modules//resources/svg/`, kebab-case; reference as `<nome progetto>-{name}`.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
>>>>>>> ecd5ec32 (.)
- Content from `config/local/saluteora/database/content/pages/home.json`. Root `/` redirects to `/{locale}`.

## 10. Icons & Assets (SaluteOra)
- SVG in `laravel/Modules/SaluteOra/resources/svg/`, kebab-case; reference as `saluteora-{name}`.
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 62cc8443 (.)
- Content from `config/local/<nome progetto>/database/content/pages/home.json`. Root `/` redirects to `/{locale}`.

## 10. Icons & Assets ()
- SVG in `laravel/Modules//resources/svg/`, kebab-case; reference as `<nome progetto>-{name}`.
- Content from `config/local/<nome progetto>/database/content/pages/home.json`. Root `/` redirects to `/{locale}`.

## 10. Icons & Assets (<nome progetto>)
- SVG in `laravel/Modules/<nome progetto>/resources/svg/`, kebab-case; reference as `<nome progetto>-{name}`.
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
>>>>>>> ecd5ec32 (.)

## 11. Translation Hygiene
- Never remove keys/content; only add.
- If `helper_text` equals the key name, set it to empty string `''`.
- Fix non-Italian translations containing Italian text.

## 12. Architecture Boundaries
- Base modules (User, UI, Xot) must not depend on domain-specific modules; use contracts or move features to specific modules.

## 13. Filament Base Classes & Arrays
- Extend `XotBaseResource`, `XotBasePage`, `XotBaseListRecords`.
- `getFormSchema()`, `getTableColumns()`, `getTableActions()`, `getTableFilters()`, `getTableBulkActions()` return associative arrays with string keys.

## 14. FullCalendar Security Hooks
- Enforce locale/timezone, business hours, drag/select constraints, emergency styling.
- Add JS callbacks: `eventDidMount`, `eventClassNames`, `selectAllow`, `eventAllow`.

---
<<<<<<< HEAD
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Backlinks: see `Modules/<nome modulo>/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
=======
>>>>>>> ce6fc085 (.)
- Backlinks: see `Modules/SaluteMo/docs/translation-rules-consolidated.md`, `Modules/Xot/docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 62cc8443 (.)
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/docs/translation-rules-consolidated.md`, `Modules/Xot/docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/docs/translation-rules-consolidated.md`, `Modules/Xot/docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
<<<<<<< HEAD
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/docs/translation-rules-consolidated.md`, `Modules/Xot/docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.

- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/docs/translation-rules-consolidated.md`, `Modules/Xot/docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
=======
>>>>>>> 43d67f21 (.)
=======
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
- Backlinks: see `Modules/SaluteMo/project_docs/translation-rules-consolidated.md`, `Modules/Xot/project_docs/translation-structure-expanded.md`, `.windsurf/rules/full_calendar*.mdc`.
>>>>>>> b7ea1cd1 (.)
>>>>>>> ecd5ec32 (.)
