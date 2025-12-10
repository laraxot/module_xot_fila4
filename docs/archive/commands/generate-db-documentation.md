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
=======
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 6e7c1905 (.)
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
>>>>>>> 334816e8 (.)
<<<<<<< HEAD
>>>>>>> 317b552da (.)
=======
=======
>>>>>>> 9e42a036 (.)
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> 551c768c4 (.)
# GenerateDbDocumentationCommand

## Descrizione
Questo comando genera documentazione dettagliata dello schema del database in formato Markdown.

## Utilizzo
```bash
php artisan xot:generate-db-documentation {schema_file} {output_dir?}
```

### Parametri
- `schema_file`: Percorso del file schema JSON (obbligatorio)
- `output_dir`: Directory di output per i file markdown (opzionale, default: docs/database)

## Funzionalità
1. Genera documentazione completa del database
2. Crea file markdown per ogni tabella
3. Genera diagrammi ER usando Mermaid
4. Documenta relazioni tra tabelle
5. Supporta indici e chiavi esterne

## Output
- `README.md`: Indice principale con panoramica del database
- File separati per ogni tabella con:
  - Struttura delle colonne
  - Chiavi primarie
  - Indici
  - Relazioni
  - Statistiche

## Best Practices
1. Utilizzo di strict types
2. Gestione errori robusta
3. Documentazione PHPDoc completa
4. Supporto per PHPStan livello 9
5. Conforme alle convenzioni Laraxot/<nome progetto>

## Collegamenti
- [Database Guidelines](../DATABASE-GUIDELINES.md)
- [Documentation Guidelines](../DOCUMENTATION-GUIDELINES.md)
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 6e7c1905 (.)
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 334816e8 (.)
<<<<<<< HEAD
>>>>>>> 317b552da (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 9e42a036 (.)
>>>>>>> 80bc07e81 (.)
=======
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 551c768c4 (.)
=======
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 414a4ffcb (.)
