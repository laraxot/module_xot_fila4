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
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
# 🎨 Theme Assets Workflow - CSS/JS Frontend

**⚠️ REGOLA CRITICA**: Per modifiche CSS/JS del frontend, lavorare SEMPRE nella cartella del tema, NON nella root Laravel.

## 📁 Struttura Corretta

### Directory Temi
```
/Themes/
├── One/           # Tema principale
│   ├── resources/ # Sorgenti CSS/JS/Sass
│   └── public/    # Assets compilati
└── Two/           # Tema alternativo
```

### Workflow Corretto
```bash
# 🚨 SEMPRE lavorare nella cartella del tema
cd /Themes/One/

# 1. Modifica i file sorgente in:
# - resources/css/
# - resources/js/
# - resources/sass/

# 2. Compila gli assets
npm run build

# 3. Copia nella directory pubblica Laravel
npm run copy
```

## ⚠️ NON Fare Mai
❌ **NON modificare** `/public/css/` o `/public/js/` direttamente  
❌ **NON usare** `npm run build` dalla root Laravel  
❌ **NON dimenticare** il comando `npm run copy`  

## ✅ Processo Corretto
1. **Modifica sorgenti** in `/Themes/[Theme]/resources/`
2. **Build assets** con `npm run build` dalla cartella tema
3. **Copy assets** con `npm run copy` dalla cartella tema
4. **Verifica risultato** nel browser

## 🔄 Comandi di Build per Tema

### Tema One
```bash
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
cd /var/www/html/_bases/base_<nome progetto>/laravel/Themes/One
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 399f46d3 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 3bf39332 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> cf971011 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> e7da37af (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 3bf39332 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_<nome progetto>/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> b7ea1cd1 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> b7ea1cd1 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 76bec91a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 55fe1822 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> b7ea1cd1 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> e0b8ebe3 (.)
npm install          # Prima volta
npm run build        # Compila Sass/JS
npm run copy         # Copia in /public/
```

### Tema Two
```bash
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
cd /var/www/html/_bases/base_<nome progetto>/laravel/Themes/Two  
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 399f46d3 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 3bf39332 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> cf971011 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> e7da37af (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 3bf39332 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_<nome progetto>/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> b7ea1cd1 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> b7ea1cd1 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 76bec91a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 55fe1822 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
>>>>>>> 5a14301c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> b7ea1cd1 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> e0b8ebe3 (.)
npm install
npm run build
npm run copy
```

## 🎯 File di Configurazione

### package.json (Tema)
```json
{
  "scripts": {
    "build": "vite build",
    "copy": "cp -r public/* ../../public/"
  }
}
```

### vite.config.js (Tema)
```javascript
export default defineConfig({
  build: {
    outDir: 'public'
  }
});
```

## 🐛 Troubleshooting

### Modifiche Non Visibili?
1. Verificare di aver eseguito `npm run build`
2. Verificare di aver eseguito `npm run copy`  
3. Svuotare cache browser (Ctrl+F5)
4. Verificare path corretti in vite.config.js

### Errori di Build?
1. `npm install` nella cartella tema
2. Verificare versioni Node/npm
3. Controllare sintassi Sass/JS
4. Verificare dipendenze in package.json

---

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
<<<<<<< HEAD
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 5a14301c (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 399f46d3 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 5a14301c (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 399f46d3 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 17684f52 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 5a14301c (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 399f46d3 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 5a14301c (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 399f46d3 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 17684f52 (.)
=======
>>>>>>> cc7fb225 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> e0b8ebe3 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> cc52d333 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 5a14301c (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 399f46d3 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 17684f52 (.)
=======
>>>>>>> cc7fb225 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> e0b8ebe3 (.)
