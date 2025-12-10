# Convenzione Naming Campi Utente: `first_name` e `last_name`

## Regola Fondamentale
In tutto il progetto, **usare SEMPRE** i campi `first_name` e `last_name` per rappresentare nome e cognome di una persona. **Non usare mai** `name`, `surname` o altre varianti.

## Motivazione
- **Internazionalizzazione**: `first_name` e `last_name` sono standard nelle API internazionali e nelle integrazioni con servizi esterni.
- **Coerenza Database e API**: Evita ambiguità tra nome completo e singolo campo, facilita mapping e sincronizzazione.
- **Compatibilità**: I principali framework, piattaforme e servizi (OAuth, CRM, ecc.) usano questi nomi.
- **Best Practice PSR-12/PHP Moderno**: Segue le convenzioni di naming dei progetti PHP moderni.
- **Evitare Errori di Traduzione**: `name` e `surname` sono ambigui e spesso tradotti/scambiati erroneamente.

## Implementazione
- Tutti i modelli devono usare `first_name` e `last_name`.
- Tutti i form, API e migrazioni devono accettare e restituire questi campi.
- Le traduzioni devono mappare correttamente questi campi nelle varie lingue.

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
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 85cdef688 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 6ca989d8 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
=======
- [Errore e regola nel modulo Patient](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 091f883c (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 67be6ac0 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
=======
- [Errore e regola nel modulo Patient](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 59259b43 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 88ee35c4e (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
=======
- [Errore e regola nel modulo Patient](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> aba62c408 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 92cca5ade (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
=======
- [Errore e regola nel modulo Patient](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 5cb992cc6 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 6a52563d6 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
=======
- [Errore e regola nel modulo Patient](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 3c8d62b79 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 317b552da (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
=======
- [Errore e regola nel modulo Patient](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 60f0a1820 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 80bc07e81 (.)
=======
- [Errore e regola nel modulo Patient](../../Patient/docs/naming-user-fields.md)
>>>>>>> 414a4ffcb (.)

**Questa regola è trasversale e vincolante per tutti i moduli del progetto.**

## Collegamenti tra versioni di naming-user-fields.md
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
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 85cdef688 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 6ca989d8 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
=======
* [naming-user-fields.md](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 091f883c (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 67be6ac0 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
=======
* [naming-user-fields.md](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 59259b43 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 88ee35c4e (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
=======
* [naming-user-fields.md](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> aba62c408 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 92cca5ade (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
=======
* [naming-user-fields.md](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 5cb992cc6 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 6a52563d6 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
=======
* [naming-user-fields.md](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 3c8d62b79 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 317b552da (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
=======
* [naming-user-fields.md](../../Patient/project_docs/naming-user-fields.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 60f0a1820 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 80bc07e81 (.)
=======
* [naming-user-fields.md](../../Patient/docs/naming-user-fields.md)
>>>>>>> 414a4ffcb (.)

