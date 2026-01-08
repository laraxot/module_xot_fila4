<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/contracts/model-contact-contract.md
========
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>>> 27c94d185 (.):docs/archive/contracts/model-contact-contract.md
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
# ModelContactContract

## Descrizione
Questa interfaccia estende `ModelContract` aggiungendo funzionalità specifiche per i modelli che rappresentano contatti nel sistema Laraxot.

## Struttura
```php
interface ModelContactContract extends ModelContract
{
    public function getEmail(): ?string;
    public function getPhone(): ?string;
    public function getAddress(): ?string;
    public function getCity(): ?string;
    public function getCountry(): ?string;
    public function getZipCode(): ?string;
    public function getFullName(): string;
    public function getFirstName(): ?string;
    public function getLastName(): ?string;
}
```

## Funzionalità
1. Gestione delle informazioni di contatto
2. Supporto per:
   - Email
   - Telefono
   - Indirizzo completo
   - Dati anagrafici
3. Integrazione con:
   - Sistema di notifiche
   - Gestione utenti
   - CRM

## Implementazioni
- `Contact`: Modello base per i contatti
- `Customer`: Estensione per i clienti
- `Supplier`: Estensione per i fornitori
- Altri modelli specifici per i contatti

## Best Practices Implementate
1. Utilizzo di strict types
2. Documentazione PHPDoc completa
3. Supporto per PHPStan livello 9
4. Conforme alle convenzioni Laraxot/<nome progetto>
5. Gestione null-safety

## Collegamenti
- [Model Guidelines](../models/README.md)
- [Contact Management](../features/CONTACT-MANAGEMENT.md)
<<<<<<<< HEAD:docs/contracts/model-contact-contract.md
========
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
=======
>>>>>>>> 6342a02fe (.):docs/archive/contracts/model-contact-contract.md
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
<<<<<<< HEAD:docs/contracts/model-contact-contract.md
- [Contracts Overview](./README.md) 
=======
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> c35986f4 (.)
- [Contracts Overview](./README.md) 
=======
>>>>>>> cc7fb225 (.)
<<<<<<<< HEAD:docs/contracts/model-contact-contract.md
>>>>>>> dc2130a7c (.):docs/archive/contracts/model-contact-contract.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD:docs/contracts/model-contact-contract.md
>>>>>>>> 6342a02fe (.):docs/archive/contracts/model-contact-contract.md
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<<< HEAD:docs/contracts/model-contact-contract.md
>>>>>>> 285375c74 (.):docs/archive/contracts/model-contact-contract.md
========
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 5bd842e3 (.)
>>>>>>>> 27c94d185 (.):docs/archive/contracts/model-contact-contract.md
