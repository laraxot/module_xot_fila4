<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
# Linee Guida per la Documentazione

## Principi Fondamentali

1. **Struttura Modulare**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 34579462 (.)
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/project_docs/`
   - Le regole generali sono in `/Modules/Xot/project_docs/`
>>>>>>> f1d4085 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 6dcebf8a (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/project_docs/`
   - Le regole generali sono in `/Modules/Xot/project_docs/`
>>>>>>> f1d4085 (.)
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> b3cc10f7 (.)
   - La root `/docs` contiene solo indici e collegamenti

2. **Collegamenti Bidirezionali**
   - Ogni documento deve essere referenziato nell'indice appropriato
   - I collegamenti devono essere mantenuti aggiornati
   - Usare percorsi relativi alla root del progetto

3. **Organizzazione dei Contenuti**
   ```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   Modules/Xot/docs/
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 34579462 (.)
   Modules/Xot/docs/
=======
   Modules/Xot/project_docs/
>>>>>>> f1d4085 (.)
=======
   Modules/Xot/docs/
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
   Modules/Xot/docs/
>>>>>>> 6dcebf8a (.)
=======
   Modules/Xot/docs/
=======
   Modules/Xot/project_docs/
>>>>>>> f1d4085 (.)
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
   Modules/Xot/docs/
>>>>>>> b3cc10f7 (.)
   ├── guidelines/           # Linee guida generali
   ├── conventions/          # Convenzioni di codice
   ├── architecture/         # Architettura del framework
   └── best-practices/       # Best practices generali
   ```

## Formato dei Documenti

### 1. Intestazione
```markdown

# Titolo del Documento

Breve descrizione dello scopo del documento (1-2 frasi).

## Indice dei Contenuti
- [Sezione 1](#sezione-1)
- [Sezione 2](#sezione-2)
```

### 2. Struttura delle Sezioni
```markdown

## Nome Sezione

### Sottosezione
Contenuto...

#### Dettagli
Contenuto dettagliato...
```

### 3. Esempi di Codice
```markdown
```php
// Esempio di codice PHP
public function example(): void
{
    // ...
}
```
```

## Regole di Scrittura

1. **Lingua**
   - Documentazione primaria in italiano
   - Commenti nel codice in inglese
   - Nomi delle variabili e funzioni in inglese

2. **Formattazione**
   - Usare Markdown per tutti i documenti
   - Mantenere una larghezza massima di 120 caratteri
   - Usare liste puntate per elenchi brevi
   - Usare liste numerate per procedure

3. **Collegamenti**
   - Usare percorsi relativi alla root
   - Verificare i collegamenti prima del commit
   - Mantenere una sezione "Vedi anche" alla fine

## Documentazione dei Moduli

### 1. Struttura Base
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Modules/{ModuleName}/docs/
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 34579462 (.)
Modules/{ModuleName}/docs/
=======
Modules/{ModuleName}/project_docs/
>>>>>>> f1d4085 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 6dcebf8a (.)
=======
Modules/{ModuleName}/docs/
=======
Modules/{ModuleName}/project_docs/
>>>>>>> f1d4085 (.)
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> b3cc10f7 (.)
├── README.md              # Panoramica del modulo
├── installation.md        # Istruzioni di installazione
├── configuration.md       # Configurazione
├── usage/                 # Guide all'uso
├── api/                   # Documentazione API
└── examples/              # Esempi pratici
```

### 2. File README.md
```markdown

# Nome Modulo

Breve descrizione...

## Installazione
[Istruzioni di installazione](installation.md)

## Configurazione
[Configurazione](configuration.md)

## Utilizzo
[Guide all'uso](usage/README.md)
```

## Manutenzione

1. **Aggiornamenti**
   - Revisione periodica dei contenuti
   - Verifica dei collegamenti
   - Aggiornamento esempi di codice

2. **Versionamento**
   - Indicare la versione del framework
   - Segnalare breaking changes
   - Mantenere un changelog

3. **Review**
   - Review della documentazione nei PR
   - Verifica ortografica
   - Validazione dei collegamenti

## Testing della Documentazione

```bash

# Verifica collegamenti
markdown-link-check **/*.md

# Validazione markdown
markdownlint **/*.md

# Generazione documentazione API
php artisan api:generate
```

## Best Practices

1. **Contenuti**
   - Mantenere la documentazione concisa
   - Usare esempi pratici
   - Includere casi d'uso comuni
   - Documentare le eccezioni

2. **Struttura**
   - Un argomento per file
   - Massimo 3 livelli di heading
   - Usare template consistenti
   - Includere sezione troubleshooting

3. **Manutenibilità**
   - Evitare duplicazione
   - Usare riferimenti incrociati
   - Mantenere una struttura coerente
   - Documentare le assunzioni

## Collegamenti

- [Convenzioni di Codice](../conventions/README.md)
- [Architettura](../architecture/README.md)
- [Best Practices](../best-practices/README.md)
- [Markdown Guide](https://www.markdownguide.org) 

## Collegamenti tra versioni di documentation.md
* [documentation.md](docs/rules/documentation.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)

<<<<<<< HEAD
=======
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
>>>>>>> cc7fb225 (.)
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
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
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)

>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
