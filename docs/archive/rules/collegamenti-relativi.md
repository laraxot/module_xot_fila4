# Regole per i Collegamenti nella Documentazione

## Utilizzo Esclusivo di Collegamenti Relativi

Nella documentazione di il progetto, **tutti i collegamenti devono essere relativi** e mai assoluti. Questo è un requisito fondamentale per garantire la portabilità e la manutenibilità della documentazione.

### Motivazione

1. **Portabilità**: I collegamenti relativi funzionano indipendentemente dall'ambiente in cui la documentazione viene distribuita (localhost, server di sviluppo, produzione)
2. **Manutenibilità**: Se il dominio o la struttura dei percorsi cambia, i collegamenti relativi rimangono validi
3. **Compatibilità**: I collegamenti relativi funzionano correttamente in tutti i contesti (GitHub, GitLab, documentazione offline)
4. **Indipendenza dall'ambiente**: Non si fa affidamento su URL basati su dominio che potrebbero cambiare nel tempo

### Formati Corretti

#### Per Documenti nello Stesso Livello

```markdown
[Documento di esempio](altro-documento.md)
```

#### Per Documenti in una Sottodirectory

```markdown
[Documento in sottodirectory](sottodirectory/documento.md)
```

#### Per Documenti in una Directory Superiore

```markdown
[Documento in directory superiore](../documento.md)
```

#### Per Documenti in Altre Parti del Progetto

```markdown
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
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 85cdef688 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 6ca989d8 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
=======
[Documento in altro modulo](../../laravel/Modules/User/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 091f883c (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 67be6ac0 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
=======
[Documento in altro modulo](../../laravel/Modules/User/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 59259b43 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 88ee35c4e (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
=======
[Documento in altro modulo](../../laravel/Modules/User/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> aba62c408 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 92cca5ade (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
=======
[Documento in altro modulo](../../laravel/Modules/User/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 5cb992cc6 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 6a52563d6 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
=======
[Documento in altro modulo](../../laravel/Modules/User/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 3c8d62b79 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 317b552da (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
=======
[Documento in altro modulo](../../laravel/Modules/User/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 60f0a1820 (.)
=======
[Documento in altro modulo](../../laravel/Modules/User/docs/documento.md)
>>>>>>> 80bc07e81 (.)
```

### Formati Errati da Evitare

❌ **Collegamenti assoluti basati su dominio**:
```markdown
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
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 85cdef688 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 6ca989d8 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
=======
[Documento errato](https://<nome progetto>.org/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 091f883c (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 67be6ac0 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
=======
[Documento errato](https://<nome progetto>.org/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 59259b43 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 88ee35c4e (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
=======
[Documento errato](https://<nome progetto>.org/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> aba62c408 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 92cca5ade (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
=======
[Documento errato](https://<nome progetto>.org/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 5cb992cc6 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 6a52563d6 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
=======
[Documento errato](https://<nome progetto>.org/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 3c8d62b79 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 317b552da (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
=======
[Documento errato](https://<nome progetto>.org/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 60f0a1820 (.)
=======
[Documento errato](https://<nome progetto>.org/docs/documento.md)
>>>>>>> 80bc07e81 (.)
```

❌ **Collegamenti assoluti basati su percorso**:
```markdown
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
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 85cdef688 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 6ca989d8 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
=======
[Documento errato](/var/www/html/<nome progetto>/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 091f883c (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 67be6ac0 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
=======
[Documento errato](/var/www/html/<nome progetto>/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 59259b43 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 88ee35c4e (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
=======
[Documento errato](/var/www/html/<nome progetto>/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> aba62c408 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 92cca5ade (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
=======
[Documento errato](/var/www/html/<nome progetto>/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 5cb992cc6 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 6a52563d6 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
=======
[Documento errato](/var/www/html/<nome progetto>/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 3c8d62b79 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 317b552da (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
=======
[Documento errato](/var/www/html/<nome progetto>/project_docs/documento.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 60f0a1820 (.)
=======
[Documento errato](/var/www/html/<nome progetto>/docs/documento.md)
>>>>>>> 80bc07e81 (.)
```

❌ **Collegamenti senza estensione**:
```markdown
[Documento errato](documento)
```

### Risorse e Immagini

Anche per le risorse e le immagini, è necessario utilizzare percorsi relativi:

```markdown
![Logo](../assets/images/logo.png)
```

### Verifica dei Collegamenti

È consigliabile verificare regolarmente che tutti i collegamenti relativi siano validi utilizzando strumenti di controllo dei link come `markdown-link-check` o validatori integrati negli editor Markdown.

## Integrazione con il Sistema di Documentazione

Questa regola si integra con il sistema di documentazione centralizzato descritto in [Collegamenti alla Documentazione](../collegamenti-documentazione.md), che fornisce una mappa dei collegamenti tra i vari documenti e moduli del progetto. 

## Collegamenti tra versioni di collegamenti-relativi.md
* [collegamenti-relativi.md](docs/regole/collegamenti-relativi.md)
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
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 85cdef688 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 6ca989d8 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
=======
* [collegamenti-relativi.md](../../../Xot/project_docs/rules/collegamenti-relativi.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 091f883c (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 67be6ac0 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
=======
* [collegamenti-relativi.md](../../../Xot/project_docs/rules/collegamenti-relativi.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 59259b43 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 88ee35c4e (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
=======
* [collegamenti-relativi.md](../../../Xot/project_docs/rules/collegamenti-relativi.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> aba62c408 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 92cca5ade (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
=======
* [collegamenti-relativi.md](../../../Xot/project_docs/rules/collegamenti-relativi.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 5cb992cc6 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 6a52563d6 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
=======
* [collegamenti-relativi.md](../../../Xot/project_docs/rules/collegamenti-relativi.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 3c8d62b79 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 317b552da (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
=======
* [collegamenti-relativi.md](../../../Xot/project_docs/rules/collegamenti-relativi.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 60f0a1820 (.)
=======
* [collegamenti-relativi.md](../../../Xot/docs/rules/collegamenti-relativi.md)
>>>>>>> 80bc07e81 (.)

