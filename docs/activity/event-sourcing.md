<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
---
title: Event Sourcing
description: Event Sourcing
extends: _layouts.documentation
section: content
---

# Video
https://www.youtube.com/watch?v=_8daXQAlzd4

# Aggregato {#aggregato}

Cluster di oggetti gestiti dall'app come un unica entità logica a livello di business,   
con uno stato che varia nel tempo.  
(Esempio un ordine di ecommerce, formato da un indirizzo, da degli item acquistabili, dallo stato del conto dell'utente)

# Comandi diventano Eventi {#comando-diventano-eventi}

...cioè diventano qualcosa che è già successo.  
Prima di diventare un evento ci può essere un controllo che il comando sia andato a buon fine oppure rigettato (validazione),  
eventualmente dividere il comando il più eventi (se questo ci rende la vita più facile dopo).

Si può anche generare un altro evento (magari di correzione), nel caso qualcosa sia andato storto.

# Event Sourcing {#event-sourcing}
Noi non aggiorniamo mai i dati cambiando quindi lo stato di esso, noi accodiamo tutto quello che succede (anche cose sbagliate).  


Grazie a questo filosofia, abbiamo:  
la storia di tutto ciò che è successo in passato, quindi si può interrogare  
quindi si può ricostruire uno stato delle cose ad un certo punto nel tempo  
avere un controllo su un eventuale corruzione dei dati (bug, malicius, errore umano), in modo da poter correggere

### Versione HEAD


## Collegamenti tra versioni di event-sourcing.md
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
<<<<<<< HEAD
<<<<<<< HEAD
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 21348520 (.)
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
=======
* [event-sourcing.md](../../../Xot/project_docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/project_docs/it/config/event-sourcing.md)
>>>>>>> f1d4085 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 6dcebf8a (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
=======
* [event-sourcing.md](../../../Xot/project_docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/project_docs/it/config/event-sourcing.md)
>>>>>>> f1d4085 (.)
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> b3cc10f7 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
=======
* [event-sourcing.md](../../../Xot/project_docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/project_docs/it/config/event-sourcing.md)
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> cafe8bed (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 5bd842e3 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
=======
* [event-sourcing.md](../../../Xot/project_docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/project_docs/it/config/event-sourcing.md)
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 5cd593a5 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 03ceeac3 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
=======
* [event-sourcing.md](../../../Xot/project_docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/project_docs/it/config/event-sourcing.md)
>>>>>>> f1d4085 (.)
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 96276392 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 3baa48bd (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
=======
* [event-sourcing.md](../../../Xot/project_docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/project_docs/it/config/event-sourcing.md)
>>>>>>> f1d4085 (.)
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 5b07d268 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 5a14301c (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
=======
* [event-sourcing.md](../../../Xot/project_docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/project_docs/it/config/event-sourcing.md)
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
* [event-sourcing.md](../../../Xot/docs/activity/event-sourcing.md)
* [event-sourcing.md](../../../Tenant/docs/it/config/event-sourcing.md)
>>>>>>> 3fbbf1f5 (.)


### Versione Incoming


---

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
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
