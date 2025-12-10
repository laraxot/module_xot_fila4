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
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

<<<<<<< HEAD
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> b3cc10f7 (.)
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

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
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)

>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
