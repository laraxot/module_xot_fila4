<?php

declare(strict_types=1);

namespace Modules\Xot\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class RecordMail
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
 * Mailable per l'invio di dati di record via email.
 */
class RecordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array<string, mixed>
     */
    public array $recordData;

    /**
     * Crea una nuova istanza del mailable.
     *
     * @param array<string, mixed> $data I dati del record
     * @param array<string, mixed> $data I dati del record
     * @param array<string, mixed> $data I dati del record
     * @param array<string, mixed> $data I dati del record
     * @param array<string, mixed> $data I dati del record
     */
    public function __construct(array $data)
    {
        $this->recordData = $data;
    }

    /**
     * Costruisce il messaggio.
     *
     * @return $this
     */
    public function build(): self
    {
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
>>>>>>> ce6fc085 (.)
        return $this->view('xot::emails.record')
                    ->with(['data' => $this->recordData]);
    }
} 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        return $this->view('xot::emails.record')
                    ->with(['data' => $this->recordData]);
    }
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
