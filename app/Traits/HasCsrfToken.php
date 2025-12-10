<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
=======
=======
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
>>>>>>> dbce41cec (.)
=======
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)

trait HasCsrfToken
{
    /**
     * CSRF token for the current request.
     *
     * @var string
     *
     * @var string
     *
     * @var string
     *
     * @var string
     *
     * @var string
     *
     * @var string
     *
     * @var string
     *
     * @var string
     *
     * @var string
     */
    public string $_token;

    /**
     * Mount the component and set the CSRF token.
     *
     * @return void
     *
     * @return void
     *
     * @return void
     *
     * @return void
     *
     * @return void
     *
     * @return void
     *
     * @return void
     *
     * @return void
     *
     * @return void
     */
    public function mount(): void
    {
        $this->_token = App::make('session')->token();
    }

    /**
     * Get the CSRF token.
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     */
    public function getCsrfToken(): string
    {
        return $this->_token;
    }

    /**
     * Verify if the CSRF token is valid.
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     */
    public function verifyCsrfToken(): bool
    {
        return Session::token() === $this->_token;
    }
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
}
}
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
}
=======
} 
>>>>>>> f1d4085 (.)
=======
}
>>>>>>> 73eab74 (.)
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
