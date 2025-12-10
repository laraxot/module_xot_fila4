<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
=======
=======
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

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
}
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
