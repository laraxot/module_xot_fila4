<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
use Throwable;

=======
<<<<<<< HEAD
use Throwable;

=======
<<<<<<< HEAD
use Throwable;

=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
/**
 * Contratto per i formattatori di errori.
 * Definisce l'interfaccia standard per la formattazione degli errori nel sistema.
 */
interface ErrorFormatterContract
{
    /**
     * Costruttore che accetta l'eccezione da formattare.
     */
<<<<<<< HEAD
    public function __construct(Throwable $exception);
=======
<<<<<<< HEAD
    public function __construct(Throwable $exception);
=======
<<<<<<< HEAD
    public function __construct(Throwable $exception);
=======
    public function __construct(\Throwable $exception);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop

    /**
     * Formatta l'eccezione in un array strutturato.
     *
     * @return array<string, mixed>
     */
    public function format(): array;
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
