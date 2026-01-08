<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Regole per i Percorsi Relativi nella Documentazione

> **Collegamenti correlati**
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
=======
>>>>>>> 399f46d3 (.)
> - [README.md documentazione generale](../../../../project_docs/README.md)
> - [Struttura dei Prompt](./prompts.md)
> - [Regole per i Prompt](./PROMPT_RULES.md)
> - [README.md toolkit bashscripts](../../../../bashscripts/project_docs/README.md)
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
> - [README.md documentazione generale](../../../../docs/README.md)
> - [Struttura dei Prompt](./prompts.md)
> - [Regole per i Prompt](./PROMPT_RULES.md)
> - [README.md toolkit bashscripts](../../../../bashscripts/docs/README.md)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)

=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
# Regole per i Percorsi Relativi nella Documentazione

> **Collegamenti correlati**
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
> - [README.md documentazione generale](../../../../project_docs/README.md)
> - [Struttura dei Prompt](./prompts.md)
> - [Regole per i Prompt](./PROMPT_RULES.md)
> - [README.md toolkit bashscripts](../../../../bashscripts/project_docs/README.md)

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 43d67f21 (.)
=======

>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
> - [README.md documentazione generale](../../../../project_docs/README.md)
> - [Struttura dei Prompt](./prompts.md)
> - [Regole per i Prompt](./PROMPT_RULES.md)
> - [README.md toolkit bashscripts](../../../../bashscripts/project_docs/README.md)

>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
> - [README.md documentazione generale](../../../../project_docs/README.md)
> - [Struttura dei Prompt](./prompts.md)
> - [Regole per i Prompt](./PROMPT_RULES.md)
> - [README.md toolkit bashscripts](../../../../bashscripts/project_docs/README.md)

>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
## Regola Fondamentale

**MAI UTILIZZARE PERCORSI ASSOLUTI NEI LINK DELLA DOCUMENTAZIONE. SEMPRE UTILIZZARE PERCORSI RELATIVI.**

Questa regola è fondamentale per garantire la portabilità della documentazione e il corretto funzionamento dei link indipendentemente dall'ambiente di installazione.

## Percorsi Corretti

### Da un file nella root del progetto verso un modulo

```markdown
<<<<<<< HEAD
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
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
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
=======
[Modulo Xot](./laravel/Modules/Xot/docs/README.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
[Modulo Xot](./laravel/Modules/Xot/docs/README.md)
>>>>>>> 5a14301c (.)
=======
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
>>>>>>> b7ea1cd1 (.)
=======
[Modulo Xot](./laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
```

### Da un file in un modulo verso un altro modulo

```markdown
<<<<<<< HEAD
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
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
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
=======
[Altro Modulo](../../../AltroModulo/docs/README.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
[Altro Modulo](../../../AltroModulo/docs/README.md)
>>>>>>> 5a14301c (.)
=======
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
>>>>>>> b7ea1cd1 (.)
=======
[Altro Modulo](../../../AltroModulo/project_docs/README.md)
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
```

### Da un file in un modulo verso la root

```markdown
<<<<<<< HEAD
[Documentazione Root](../../../../project_docs/README.md)
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
[Documentazione Root](../../../../project_docs/README.md)
=======
[Documentazione Root](../../../../docs/README.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
[Documentazione Root](../../../../project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
[Documentazione Root](../../../../project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
[Documentazione Root](../../../../docs/README.md)
>>>>>>> 5a14301c (.)
=======
[Documentazione Root](../../../../project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
[Documentazione Root](../../../../project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
[Documentazione Root](../../../../project_docs/README.md)
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
[Documentazione Root](../../../../project_docs/README.md)
>>>>>>> b7ea1cd1 (.)
=======
[Documentazione Root](../../../../project_docs/README.md)
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
```

## Errori Comuni da Evitare

1. **MAI utilizzare percorsi assoluti** come:
   ```markdown
<<<<<<< HEAD
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/project_docs/README.md)
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
   [ERRATO](/var/www/html/<nome progetto>/laravel/Modules/Xot/project_docs/README.md)
=======
   [ERRATO](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/README.md)
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/docs/README.md)
   [ERRATO](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/README.md)
>>>>>>> 5a14301c (.)
=======
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
[ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/docs/README.md)

=======
   [ERRATO](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/README.md)
   [ERRATO](/var/www/html/<nome progetto>/laravel/Modules/Xot/docs/README.md)
   [ERRATO](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/README.md)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
   [ERRATO](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/README.md)
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/docs/README.md)
   [ERRATO](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/README.md)
>>>>>>> 5a14301c (.)
=======
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> b7ea1cd1 (.)
=======
   [ERRATO](/var/www/html/saluteora/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
   ```

2. **MAI utilizzare percorsi che iniziano con /**:
   ```markdown
<<<<<<< HEAD
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
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
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
=======
   [ERRATO](/docs/README.md)
   [ERRATO](/laravel/Modules/Xot/docs/README.md)
>>>>>>> 5a14301c (.)
=======
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
[ERRATO](/docs/README.md)
   [ERRATO](/laravel/Modules/Xot/docs/README.md)

=======
   [ERRATO](/docs/README.md)
   [ERRATO](/laravel/Modules/Xot/docs/README.md)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
   [ERRATO](/docs/README.md)
   [ERRATO](/laravel/Modules/Xot/docs/README.md)
>>>>>>> 5a14301c (.)
=======
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 43d67f21 (.)
=======
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> b7ea1cd1 (.)
=======
   [ERRATO](/project_docs/README.md)
   [ERRATO](/laravel/Modules/Xot/project_docs/README.md)
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
   ```

3. **MAI utilizzare percorsi che non tengono conto della posizione relativa del file sorgente**:
   ```markdown
<<<<<<< HEAD
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
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
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
=======
   [ERRATO](Modules/Xot/docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> 5a14301c (.)
=======
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
[ERRATO](Modules/Xot/docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->

=======
   [ERRATO](Modules/Xot/docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> 43d67f21 (.)
=======
   [ERRATO](Modules/Xot/docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> 5a14301c (.)
=======
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> 43d67f21 (.)
=======
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> b7ea1cd1 (.)
=======
   [ERRATO](Modules/Xot/project_docs/README.md) <!-- Da un file nella root -->
   [ERRATO](../Xot/project_docs/README.md) <!-- Da un file in un modulo, senza contare correttamente i livelli -->
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
   ```

## Come Calcolare Correttamente i Percorsi Relativi

1. **Identifica la posizione del file sorgente** (il file che contiene il link)
2. **Identifica la posizione del file destinazione** (il file a cui vuoi linkare)
3. **Calcola il percorso relativo** contando i livelli di directory da attraversare:
   - Usa `../` per salire di un livello
   - Concatena i nomi delle directory da attraversare

### Esempi Pratici

| Posizione File Sorgente | Posizione File Destinazione | Percorso Relativo Corretto |
|-------------------------|------------------------------|----------------------------|
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
| `/project_docs/README.md` | `/laravel/Modules/Xot/project_docs/README.md` | `./laravel/Modules/Xot/project_docs/README.md` |
| `/laravel/Modules/Xot/project_docs/README.md` | `/project_docs/README.md` | `../../../../project_docs/README.md` |
| `/laravel/Modules/Xot/project_docs/README.md` | `/laravel/Modules/User/project_docs/README.md` | `../../../User/project_docs/README.md` |
| `/laravel/Modules/Xot/project_docs/structure.md` | `/laravel/Modules/Xot/project_docs/README.md` | `./README.md` |
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
=======
>>>>>>> 5a14301c (.)
| `/docs/README.md` | `/laravel/Modules/Xot/docs/README.md` | `./laravel/Modules/Xot/docs/README.md` |
| `/laravel/Modules/Xot/docs/README.md` | `/docs/README.md` | `../../../../docs/README.md` |
| `/laravel/Modules/Xot/docs/README.md` | `/laravel/Modules/User/docs/README.md` | `../../../User/docs/README.md` |
| `/laravel/Modules/Xot/docs/structure.md` | `/laravel/Modules/Xot/docs/README.md` | `./README.md` |
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)

=======
>>>>>>> a5dccfe (.)
=======

>>>>>>> 43d67f21 (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======

>>>>>>> b7ea1cd1 (.)
=======

>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
## Verifica dei Link

Prima di committare modifiche alla documentazione:

1. **Verifica manualmente** che i link relativi siano corretti
2. **Conta attentamente i livelli di directory** quando crei link tra moduli
3. **Testa i link** in un ambiente locale per assicurarti che funzionino correttamente

## Importanza della Portabilità

L'uso di percorsi relativi garantisce che la documentazione funzioni correttamente:
- In ambienti di sviluppo diversi
- In installazioni con path di base diversi
- In repository clonati in posizioni diverse
- In sistemi operativi diversi

## Riferimenti

- [Markdown Link Syntax](https://www.markdownguide.org/basic-syntax/#links)
- [Relative vs Absolute URLs](https://www.w3.org/TR/WD-html40-970917/htmlweb.html#h-5.1.2)
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
