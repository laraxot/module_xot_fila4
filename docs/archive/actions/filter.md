# Correzione e miglioramento: GetYearFilter.php (2025-04-16)

## Contesto
Il file `GetYearFilter.php` presentava marker di conflitto (``) e duplicazioni dovute a merge errati.

## Azioni svolte
- Rimozione completa dei marker di conflitto e delle duplicazioni di codice.
- Uniformazione della logica: ora la funzione costruisce l'array delle opzioni anno in modo sicuro e tipizzato.
- Miglioramento della gestione dei tipi secondo le regole Laraxot/<nome progetto> e PHPStan livello 9.
- Validazione con PHPStan livello 9.
- Aggiornamento della documentazione e creazione di collegamento bidirezionale con la doc root.

## Dettaglio correzione
- Eliminati tutti i blocchi duplicati generati dal merge.
- Utilizzata la conversione sicura a stringa per le chiavi dell'array.
- Verificata la compatibilità del codice con PHPStan livello 9.

## Collegamenti
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
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 85cdef688 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 6ca989d8 (.)
=======
- [Doc root Xot](/docs/index.md)
=======
- [Doc root Xot](/project_docs/index.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 091f883c (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 67be6ac0 (.)
=======
- [Doc root Xot](/docs/index.md)
=======
- [Doc root Xot](/project_docs/index.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 59259b43 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 88ee35c4e (.)
=======
- [Doc root Xot](/docs/index.md)
=======
- [Doc root Xot](/project_docs/index.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> aba62c408 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 92cca5ade (.)
=======
- [Doc root Xot](/docs/index.md)
=======
- [Doc root Xot](/project_docs/index.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 5cb992cc6 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 6a52563d6 (.)
=======
- [Doc root Xot](/docs/index.md)
=======
- [Doc root Xot](/project_docs/index.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 3c8d62b79 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 317b552da (.)
=======
- [Doc root Xot](/docs/index.md)
=======
- [Doc root Xot](/project_docs/index.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 60f0a1820 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 80bc07e81 (.)
=======
- [Doc root Xot](/docs/index.md)
>>>>>>> 414a4ffcb (.)

---

*Ultimo aggiornamento: 2025-04-16*

## Collegamenti tra versioni di filter.md
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
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 85cdef688 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 6ca989d8 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 2bad128c (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 358ba79a7 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> f8f76a284 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 5e6e0d054 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 0117b849c (.)
=======
* [filter.md](../../../Xot/project_docs/actions/filter.md)
* [filter.md](../../../Xot/project_docs/links/filter.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 091f883c (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 59259b43 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> aba62c408 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 5cb992cc6 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 3c8d62b79 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 60f0a1820 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 80bc07e81 (.)
=======
* [filter.md](../../../Xot/docs/actions/filter.md)
* [filter.md](../../../Xot/docs/links/filter.md)
>>>>>>> 414a4ffcb (.)

