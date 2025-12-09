<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
# Risoluzione Conflitto: XotBaseServiceProvider

## Contesto
`XotBaseServiceProvider` è la classe base per i Service Provider dei moduli Xot. Gestisce la registrazione di risorse, provider, componenti Blade/Livewire e icone SVG. Un recente conflitto git ha evidenziato due approcci:

- **HEAD**: approccio tradizionale, meno dipendenze, meno flessibile.
- **Branch**: uso di azioni dedicate, maggiore modularità, robustezza tramite Assert, registrazione dinamica delle risorse.

## Decisione Architetturale
Si è scelto di integrare le migliorie del branch:
- Uso di azioni dedicate per path e risorse (es. `GetModulePathByGeneratorAction`)
- Registrazione dinamica delle icone SVG tramite `BladeUI\Icons\Factory`
- Uso di `Webmozart\Assert\Assert` per robustezza
- Retrocompatibilità ove possibile

### Motivazione
Questa scelta garantisce:
- Maggiore modularità e testabilità
- Facilità di estensione per i moduli figli
- Allineamento con la filosofia Laraxot e PSR
- Migliore mantenibilità futura

## Impatti
- Tutti i moduli Xot dovranno estendere la nuova base
- Possibile refactor per la registrazione di risorse custom

## Collegamenti
- [Struttura moduli Xot](./MODULE_NAMESPACE_RULES.md)
- [Best Practices Provider](./BEST-PRACTICES.md)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
- [docs/links.md globale](../../../../docs/links.md)

## Backlink
- [docs/links.md](../../../../docs/links.md)
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
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
>>>>>>> b7ea1cd1 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
>>>>>>> b7ea1cd1 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
>>>>>>> 76bec91a (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
>>>>>>> 55fe1822 (.)
- [docs/MODULE_NAMESPACE_RULES.md](./MODULE_NAMESPACE_RULES.md)
- [docs/BEST-PRACTICES.md](./BEST-PRACTICES.md)
<<<<<<< HEAD
=======
=======
- [docs/MODULE_NAMESPACE_RULES.md](./MODULE_NAMESPACE_RULES.md)
- [docs/BEST-PRACTICES.md](./BEST-PRACTICES.md)
=======
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
- [docs/links.md globale](../../../../project_docs/links.md)

## Backlink
- [docs/links.md](../../../../project_docs/links.md)
- [docs/MODULE_NAMESPACE_RULES.md](./MODULE_NAMESPACE_RULES.md)
- [docs/BEST-PRACTICES.md](./BEST-PRACTICES.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
- [docs/MODULE_NAMESPACE_RULES.md](./MODULE_NAMESPACE_RULES.md)
- [docs/BEST-PRACTICES.md](./BEST-PRACTICES.md)
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
- [docs/MODULE_NAMESPACE_RULES.md](./MODULE_NAMESPACE_RULES.md)
- [docs/BEST-PRACTICES.md](./BEST-PRACTICES.md)
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
- [docs/MODULE_NAMESPACE_RULES.md](./MODULE_NAMESPACE_RULES.md)
- [docs/BEST-PRACTICES.md](./BEST-PRACTICES.md)
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
