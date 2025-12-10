<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
# DatabaseSchemaExporterCommand

## Descrizione
Questo comando esporta lo schema del database in formato JSON, includendo dettagli su tabelle, colonne, indici e relazioni.

## Utilizzo
```bash
php artisan xot:export-db-schema {output_file?} {--tables=*}
```

### Parametri
- `output_file`: Percorso del file di output JSON (opzionale, default: database/schema.json)
- `--tables`: Filtra l'esportazione per tabelle specifiche (opzionale)

## Funzionalità
1. Esportazione dello schema completo del database
2. Supporto per filtri su tabelle specifiche
3. Documentazione di:
   - Struttura delle tabelle
   - Tipi di colonne
   - Indici e chiavi
   - Relazioni tra tabelle
4. Formato JSON strutturato e leggibile

## Output
Il file JSON generato contiene:
```json
{
    "database": "nome_database",
    "connection": "mysql",
    "tables": {
        "nome_tabella": {
            "columns": {},
            "indexes": {},
            "foreign_keys": {},
            "record_count": 0
        }
    },
    "relationships": []
}
```

## Best Practices
1. Utilizzo di strict types
2. Gestione errori robusta
3. Query ottimizzate per performance
4. Supporto per PHPStan livello 9
5. Conforme alle convenzioni Laraxot/<nome progetto>

## Collegamenti
- [Database Guidelines](../DATABASE-GUIDELINES.md)
- [Schema Documentation](../DIRECTORY-STRUCTURE-GUIDE.md)
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
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
=======
>>>>>>> 6ca989d8 (.)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
<<<<<<< HEAD
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
=======
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
## Collegamenti tra versioni di database-schema-exporter.md
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
=======
* [database-schema-exporter.md](../../../Xot/project_docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/project_docs/console/commands/database-schema-exporter.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 091f883c (.)
=======
>>>>>>> 2bad128c (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> 59259b43 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [database-schema-exporter.md](../../../Xot/docs/commands/database-schema-exporter.md)
* [database-schema-exporter.md](../../../Xot/docs/console/commands/database-schema-exporter.md)
>>>>>>> aba62c408 (.)
=======
>>>>>>> f8f76a284 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
