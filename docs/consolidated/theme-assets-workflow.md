<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
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
>>>>>>> ce6fc085 (.)
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
<<<<<<< HEAD
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_<nome progetto>/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
=======
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
<<<<<<< HEAD
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/One
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
=======
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
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
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/One
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> e7da37af (.)
>>>>>>> 7e4835b8e (.)
npm install          # Prima volta
npm run build        # Compila Sass/JS
npm run copy         # Copia in /public/
```

### Tema Two
```bash
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
>>>>>>> ce6fc085 (.)
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
<<<<<<< HEAD
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_<nome progetto>/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
=======
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
<<<<<<< HEAD
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Themes/Two  
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
=======
>>>>>>> 43d67f21 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
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
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel/Themes/Two  
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> e7da37af (.)
>>>>>>> 7e4835b8e (.)
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
>>>>>>> ce6fc085 (.)
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
<<<<<<< HEAD
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
=======
>>>>>>> f8f76a284 (.)
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
=======
>>>>>>> 358ba79a7 (.)
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
=======
>>>>>>> 2bad128c (.)
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
=======
>>>>>>> 399f46d3 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
**⚠️ RICORDA**: Il workflow dei temi è DIVERSO dal normale workflow Laravel. Sempre theme → build → copy → public!
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
