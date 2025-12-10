---
title: Url Not Found
description: Url Not Found
extends: _layouts.documentation
section: content
---

# Url Not Found {#url-not-found}

###  Errore

#### Not Found
The requested URL was not found on this server.
Apache/2.4.54 (Ubuntu) Server at virtualhost.local Port 80


###  Soluzione

Abilitare **rewrite** nei Modulo della configurazione globale di Apache Webserver su Webmin  

### Altra possibile soluzione  

Se si verifica in locale, dopo aver creato la giunzione, è possibile che la giunzione punti alla cartella public e non a public_html  

La soluzione è andare nella cartella dove è si trovano tutte le configurazioni delle giunzioni di laragon  

"laragon\etc\apache2\sites-enabled"

aprire il file .conf relativo alla giunzione non funzionante e modificare la riga che definisce la ROOT, facendola puntare a public_html  

esempio:  
da  
define ROOT "C:/var/www/nome_giunzione/public"  
a  
define ROOT "C:/var/www/nome_giunzione/public_html"  

### Versione HEAD

**NB**: dopo aver fatto questa modifica, riavviare laragon
## Collegamenti tra versioni di url-not-found.md
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
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 85cdef688 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 6ca989d8 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 2bad128c (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 358ba79a7 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> f8f76a284 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 5e6e0d054 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 0117b849c (.)
=======
* [url-not-found.md](../../../Xot/project_docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/project_docs/errors/url-not-found.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 091f883c (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 59259b43 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> aba62c408 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 5cb992cc6 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 3c8d62b79 (.)
=======
* [url-not-found.md](../../../Xot/docs/base/url-not-found.md)
* [url-not-found.md](../../../Xot/docs/errors/url-not-found.md)
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)


### Versione Incoming

**NB**: dopo aver fatto questa modifica, riavviare laragon

---

