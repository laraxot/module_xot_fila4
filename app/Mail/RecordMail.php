<?php

declare(strict_types=1);

namespace Modules\Xot\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class RecordMail
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
 *
<<<<<<< HEAD
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
 *
>>>>>>> 358ba79a7 (.)
=======
 *
>>>>>>> f8f76a284 (.)
=======
 *
>>>>>>> 5e6e0d054 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
 *
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
 *
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
 *
>>>>>>> aba62c408 (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
 *
>>>>>>> 5cb992cc6 (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
 *
>>>>>>> 3c8d62b79 (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
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
>>>>>>> 6be8834c2 (.)
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
<<<<<<< HEAD
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
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
>>>>>>> 5cf46378 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
=======
>>>>>>> efbf15eba (.)
        return $this->view('xot::emails.record')
                    ->with(['data' => $this->recordData]);
    }
} 
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 5e6e0d054 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 5e6e0d054 (.)
        return $this->view('xot::emails.record')
                    ->with(['data' => $this->recordData]);
    }
} 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
        return $this->view('xot::emails.record')->with(['data' => $this->recordData]);
    }
}
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
