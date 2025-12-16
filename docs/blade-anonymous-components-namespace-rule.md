# Regola Componenti Blade Anonimi con Namespace

## Data
2025-11-30

## ⚠️ REGOLA CRITICA

**I componenti anonimi registrati con `Blade::anonymousComponentPath()` NON supportano la sintassi namespace esplicita.**

## Problema Identificato

Quando si usa `<x-pub_theme::components.layouts.main>`, Laravel cerca:
1. Una classe componente `pub_theme::components.layouts.main`
2. Una view `pub_theme::components.layouts.main`

Ma i **componenti anonimi** registrati con `anonymousComponentPath()` non funzionano con questa sintassi.

## Soluzione

### ❌ ERRATO

```blade
<x-pub_theme::components.layouts.main>
    {{ $slot }}
</x-pub_theme::components.layouts.main>
```

### ✅ CORRETTO

```blade
<x-layouts.main>
    {{ $slot }}
</x-layouts.main>
```

## Come Funziona

### Registrazione Componenti Anonimi

`CmsServiceProvider::registerNamespaces()` registra:

```php
$componentViewPath = base_path($resource_path.'/views/components');
Blade::anonymousComponentPath($componentViewPath);
```

Questo rende accessibili i componenti in `Themes/Meetup/resources/views/components/` con sintassi semplice.

### Path Risoluzione

- File: `Themes/Meetup/resources/views/components/layouts/main.blade.php`
- Sintassi: `<x-layouts.main>` ✅
- Sintassi: `<x-pub_theme::components.layouts.main>` ❌

## Quando Usare Namespace Esplicito

Il namespace esplicito `pub_theme::` funziona per:
- **View namespace**: `@include('pub_theme::components.blocks.hero.main')`
- **Class componenti**: Se registrati con `Blade::componentNamespace()`

**NON funziona per**:
- **Componenti anonimi**: Registrati con `Blade::anonymousComponentPath()`

## Riferimenti

- `CmsServiceProvider::registerNamespaces()` - Registrazione namespace e componenti
- `Themes/Meetup/docs/pub-theme-component-namespace-error-analysis.md`
- `Modules/Meetup/docs/pub-theme-component-namespace-error-analysis.md`

## Checklist

- [x] Documentata regola critica
- [x] Spiegato perché (componenti anonimi vs namespace)
- [x] Forniti esempi corretti/errati
- [x] Documentato come funziona la registrazione
- [x] Spiegato quando usare namespace esplicito


