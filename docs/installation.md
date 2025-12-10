<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
# Installazione

## Requisiti di Sistema

### 1. Software Richiesto
- PHP 8.2 o superiore
- Composer 2.0 o superiore
- Node.js 18 o superiore
- NPM 9 o superiore
- MySQL 8.0 o superiore

### 2. Estensioni PHP
- BCMath
- Ctype
- cURL
- DOM
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PDO
- Tokenizer
- XML

## Installazione

### 1. Clonare il Repository
```bash
git clone https://github.com/your-organization/<nome progetto>.git
cd <nome progetto>
```

### 2. Installare le Dipendenze
```bash

# Installare le dipendenze PHP
composer install

# Installare le dipendenze NPM
npm install
```

### 3. Configurazione
```bash

# Copiare il file di ambiente
cp .env.example .env

# Generare la chiave dell'applicazione
php artisan key:generate

# Configurare il database nel file .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<nome progetto>
DB_USERNAME=root
DB_PASSWORD=password
```

### 4. Migrazione del Database
```bash

# Eseguire le migrazioni
php artisan migrate

# Popolare il database con i dati di esempio
php artisan db:seed
```

### 5. Compilazione degli Assets
```bash

# Compilare gli assets
npm run build
```

## Configurazione dei Moduli

### 1. Attivare i Moduli
```bash

# Attivare il modulo Xot
php artisan module:enable Xot

# Attivare altri moduli necessari
php artisan module:enable Cms
```

### 2. Configurare i Temi
```bash

# Pubblicare gli assets del tema
php artisan vendor:publish --tag=theme-one-assets

# Compilare gli assets del tema
npm run theme:build
```

## Verifica dell'Installazione

### 1. Avviare il Server di Sviluppo
```bash
php artisan serve
```

### 2. Verificare l'Accesso
- Aprire http://localhost:8000 nel browser
- Verificare che l'applicazione carichi correttamente
- Controllare che tutti i moduli siano attivi

## Troubleshooting

### 1. Problemi Comuni
- **Errori di Permessi**: Verificare i permessi delle directory
- **Errori di Database**: Controllare le credenziali nel .env
- **Errori di Compilazione**: Verificare le versioni di Node.js e NPM

### 2. Log
- Controllare `storage/logs/laravel.log` per errori
- Verificare i log del server web
- Controllare i log del database

## Collegamenti

- [Configurazione](configuration.md)
- [Troubleshooting](troubleshooting.md)
- [Regole di Documentazione](documentation-rules.md)

## Collegamenti tra versioni di installation.md
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
>>>>>>> e769883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
=======
<<<<<<< HEAD
>>>>>>> efbf15eba (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
<<<<<<< HEAD
>>>>>>> e769883c (.)
=======
=======
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 099ab7a0 (.)
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 96276392 (.)
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
=======
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
>>>>>>> efbf15eba (.)
* [installation.md](../../../Xot/docs/filament/installation.md)
* [installation.md](../../../Xot/docs/installation.md)
* [installation.md](../../../Xot/docs/base/installation.md)
* [installation.md](../../../User/docs/installation.md)
* [installation.md](../../../Lang/docs/installation.md)
* [installation.md](../../../Cms/docs/installation.md)
* [installation.md](../../../../Themes/One/docs/installation.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)
<<<<<<< HEAD
<<<<<<< HEAD

* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)

* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)

* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)

* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)

* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)








=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> cc1bbf15 (.)
=======
>>>>>>> e769883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)
>>>>>>> f1d4085 (.)

>>>>>>> 6d1255a8 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 96276392 (.)
=======
* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

>>>>>>> 099ab7a0 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 1c4bb8cf (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
>>>>>>> 5ca118c34 (.)

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
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)

=======
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
* [installation.md](../../../Xot/project_docs/filament/installation.md)
* [installation.md](../../../Xot/project_docs/installation.md)
* [installation.md](../../../Xot/project_docs/base/installation.md)
* [installation.md](../../../User/project_docs/installation.md)
* [installation.md](../../../Lang/project_docs/installation.md)
* [installation.md](../../../Cms/project_docs/installation.md)
* [installation.md](../../../../Themes/One/project_docs/installation.md)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
>>>>>>> e769883c (.)

>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======

>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======

>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
