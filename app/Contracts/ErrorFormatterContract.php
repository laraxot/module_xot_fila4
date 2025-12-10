<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
use Throwable;

=======
<<<<<<< HEAD
use Throwable;

=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
use Throwable;

>>>>>>> 091f883c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
use Throwable;

>>>>>>> aba62c408 (.)
=======
>>>>>>> f8f76a284 (.)
=======
use Throwable;

>>>>>>> 5cb992cc6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
    public function __construct(Throwable $exception);
=======
<<<<<<< HEAD
    public function __construct(Throwable $exception);
=======
    public function __construct(\Throwable $exception);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
    public function __construct(Throwable $exception);
>>>>>>> 091f883c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
    public function __construct(Throwable $exception);
>>>>>>> aba62c408 (.)
=======
>>>>>>> f8f76a284 (.)
=======
    public function __construct(Throwable $exception);
>>>>>>> 5cb992cc6 (.)

    /**
     * Formatta l'eccezione in un array strutturato.
     *
     * @return array<string, mixed>
     */
    public function format(): array;
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
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
} 
=======
=======
} 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
}
>>>>>>> 358ba79a7 (.)
=======
}
>>>>>>> f8f76a284 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
}
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
}
=======
} 
>>>>>>> f1d4085 (.)
=======
}
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
}
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
}
>>>>>>> aba62c408 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
}
>>>>>>> 5cb992cc6 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
