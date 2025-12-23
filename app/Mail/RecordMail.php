<?php

declare(strict_types=1);

namespace Modules\Xot\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class RecordMail
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
 *
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
>>>>>>> laraxot/develop
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
     * @param  array<string, mixed>  $data  I dati del record
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
<<<<<<< HEAD
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
<<<<<<< HEAD
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
        return $this->view('xot::emails.record')
                    ->with(['data' => $this->recordData]);
    }
} 
>>>>>>> a12f125f4a (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
>>>>>>> b93ef594b4 (.)
=======
        return $this->view('xot::emails.record')
                    ->with(['data' => $this->recordData]);
    }
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
