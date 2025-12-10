# Linee Guida per la Documentazione

## Principi Fondamentali

1. **Struttura Modulare**
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
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 85cdef688 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 6ca989d8 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 2bad128c (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 358ba79a7 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> f8f76a284 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/project_docs/`
   - Le regole generali sono in `/Modules/Xot/project_docs/`
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 091f883c (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 59259b43 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> aba62c408 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
   - Ogni modulo ha la sua documentazione in `/Modules/{ModuleName}/docs/`
   - Le regole generali sono in `/Modules/Xot/docs/`
>>>>>>> 5cb992cc6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
   Modules/Xot/docs/
>>>>>>> 85cdef688 (.)
=======
   Modules/Xot/docs/
>>>>>>> 6ca989d8 (.)
=======
   Modules/Xot/docs/
=======
   Modules/Xot/project_docs/
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
   Modules/Xot/docs/
>>>>>>> 091f883c (.)
=======
   Modules/Xot/docs/
>>>>>>> 67be6ac0 (.)
=======
   Modules/Xot/docs/
=======
   Modules/Xot/project_docs/
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
   Modules/Xot/docs/
>>>>>>> 59259b43 (.)
=======
   Modules/Xot/docs/
>>>>>>> 88ee35c4e (.)
=======
   Modules/Xot/docs/
=======
   Modules/Xot/project_docs/
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
   Modules/Xot/docs/
>>>>>>> aba62c408 (.)
=======
   Modules/Xot/docs/
>>>>>>> 92cca5ade (.)
=======
   Modules/Xot/docs/
=======
   Modules/Xot/project_docs/
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
   Modules/Xot/docs/
>>>>>>> 5cb992cc6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
Modules/{ModuleName}/docs/
>>>>>>> 85cdef688 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 6ca989d8 (.)
=======
Modules/{ModuleName}/docs/
=======
Modules/{ModuleName}/project_docs/
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 091f883c (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 67be6ac0 (.)
=======
Modules/{ModuleName}/docs/
=======
Modules/{ModuleName}/project_docs/
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 59259b43 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 88ee35c4e (.)
=======
Modules/{ModuleName}/docs/
=======
Modules/{ModuleName}/project_docs/
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> aba62c408 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 92cca5ade (.)
=======
Modules/{ModuleName}/docs/
=======
Modules/{ModuleName}/project_docs/
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
Modules/{ModuleName}/docs/
>>>>>>> 5cb992cc6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 85cdef688 (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 6ca989d8 (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 2bad128c (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 358ba79a7 (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> f8f76a284 (.)
=======
* [documentation.md](../../../Xot/project_docs/documentation.md)
* [documentation.md](../../../Xot/project_docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/project_docs/roadmap/features/documentation.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 091f883c (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 59259b43 (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> aba62c408 (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [documentation.md](../../../Xot/docs/documentation.md)
* [documentation.md](../../../Xot/docs/guidelines/documentation.md)
* [documentation.md](../../../Cms/docs/roadmap/features/documentation.md)
>>>>>>> 5cb992cc6 (.)

