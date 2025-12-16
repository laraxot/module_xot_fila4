# Regola Frontend Asset Management

## Data
2025-11-30

## ⚠️ REGOLA CRITICA

**OGNI VOLTA che modifichi file CSS (`resources/css/app.css`) o JavaScript (`resources/js/app.js`), DEVI eseguire `npm run build && npm run copy` per vedere le modifiche nel browser.**

## Comando Obbligatorio

```bash
cd /var/www/_bases/base_laravelpizza/laravel/Themes/Meetup
npm run build && npm run copy
```

## Perché?

### 1. Vite Compilation

I file CSS e JS sono **source files** che devono essere compilati:
- `resources/css/app.css` → Vite compila Tailwind CSS e genera CSS ottimizzato
- `resources/js/app.js` → Vite bundle JavaScript e genera JS ottimizzato

**Senza build**: Le modifiche ai file source NON sono visibili nel browser.

### 2. Asset Distribution

Dopo la compilazione, gli asset devono essere copiati nella directory pubblica:
- `public/assets/app-[hash].css` → `public_html/themes/Meetup/assets/app-[hash].css`
- `public/assets/app-[hash].js` → `public_html/themes/Meetup/assets/app-[hash].js`

**Senza copy**: Gli asset compilati NON sono accessibili via web.

## Quando Eseguire

### ✅ SEMPRE Eseguire

- Dopo modifiche a `resources/css/app.css`
- Dopo modifiche a `resources/js/app.js`
- Dopo modifiche a `tailwind.config.js`
- Dopo modifiche a `vite.config.js`
- Prima di testare nel browser (`http://127.0.0.1:8000/it`)
- Prima di commitare modifiche CSS/JS

### ❌ NON Serve

- Durante `npm run dev` (hot reload automatico)
- Per modifiche a file Blade (`.blade.php`)
- Per modifiche a file PHP
- Per modifiche a file di configurazione Laravel

## Workflow Completo

1. **Modifica i file source**:
   ```bash
   vim resources/css/app.css
   ```

2. **Build e Copy** (OBBLIGATORIO):
   ```bash
   cd /var/www/_bases/base_laravelpizza/laravel/Themes/Meetup
   npm run build && npm run copy
   ```

3. **Verifica nel browser**:
   - Apri `http://127.0.0.1:8000/it`
   - Hard refresh (Ctrl+Shift+R) per pulire cache browser

## Dev Mode vs Production

### Dev Mode (Sviluppo con Hot Reload)

```bash
npm run dev
```

- Avvia Vite dev server con hot reload
- Le modifiche CSS/JS sono visibili automaticamente
- **NON serve** `npm run copy` in dev mode

### Production (Build e Copy)

```bash
npm run build && npm run copy
```

- Compila TypeScript (`tsc`)
- Compila CSS con Tailwind (`vite build`)
- Genera `public/assets/app-[hash].css` e `public/assets/app-[hash].js`
- Copia `public/*` → `public_html/themes/Meetup/`

## Riferimenti

- `Themes/Meetup/docs/development-workflow-css-js-changes.md`
- `Modules/Meetup/docs/development-workflow-css-js-changes.md`
- `Themes/Meetup/docs/build-and-copy-workflow.md`
- `Themes/Meetup/docs/vite-build-output-directory.md`

## Checklist

- [x] Documentata regola critica (build e copy obbligatori)
- [x] Spiegato perché (Vite compilation, asset distribution)
- [x] Documentato workflow completo
- [x] Distinto dev mode vs production
- [x] Aggiunto troubleshooting


