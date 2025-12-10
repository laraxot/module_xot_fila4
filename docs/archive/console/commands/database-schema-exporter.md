# DatabaseSchemaExporter Command Documentation

## Overview
Il comando `database:schema-exporter` esporta lo schema del database, fornendo una panoramica completa della struttura del database.

## Caratteristiche

### Funzionalità Principali
- Estrazione elenco tabelle dal database
- Supporto per connessione MySQL
- Gestione errori robusta
- Output formattato per la console

### Parametri
```bash
php artisan database:schema-exporter
```

### Output
- Lista delle tabelle trovate
- Messaggi di errore dettagliati in caso di problemi
- Codici di ritorno standard di Laravel (SUCCESS/FAILURE)

## Implementazione

### Metodi Principali
- `handle()`: Punto di ingresso del comando
- `getTables()`: Recupera l'elenco delle tabelle
  - Validazione configurazione database
  - Query sicura per elenco tabelle
  - Mappatura risultati

### Sicurezza
- Validazione stringhe con Assert
- Gestione eccezioni
- Controlli configurazione database

## Utilizzo
```bash

# Esportazione schema database
php artisan database:schema-exporter

# Output esempio
Tabelle trovate: users, migrations, password_resets
```

## Recent Changes
- Rimossi conflitti di merge
- Migliorata la gestione degli errori
- Aggiunta validazione input
- Ottimizzata la query di estrazione tabelle 

## Collegamenti tra versioni di database-schema-exporter.md
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
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 85cdef688 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 6ca989d8 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 2bad128c (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 358ba79a7 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> f8f76a284 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 5e6e0d054 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 0117b849c (.)
=======
* [database-schema-exporter.md](../../../Xot/project_docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/project_docs/console/commands/database-schema-exporter.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 091f883c (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 59259b43 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> aba62c408 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 5cb992cc6 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 3c8d62b79 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 60f0a1820 (.)

