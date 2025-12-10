<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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
>>>>>>> laraxot/develop

trait HasCsrfToken
{
    /**
     * CSRF token for the current request.
<<<<<<< HEAD
     *
     * @var string
     *
     * @var string
     *
     * @var string
     *
     * @var string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 5a14301c (.)
=======
     *
     * @var string
>>>>>>> 5a14301c (.)
=======
     *
     * @var string
>>>>>>> 5a14301c (.)
=======
     *
     * @var string
>>>>>>> 5a14301c (.)
=======
     *
     * @var string
>>>>>>> 5a14301c (.)
=======
     *
     * @var string
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     */
    public string $_token;

    /**
     * Mount the component and set the CSRF token.
<<<<<<< HEAD
     *
     * @return void
     *
     * @return void
     *
     * @return void
     *
     * @return void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     */
    public function mount(): void
    {
        $this->_token = App::make('session')->token();
    }

    /**
     * Get the CSRF token.
<<<<<<< HEAD
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     */
    public function getCsrfToken(): string
    {
        return $this->_token;
    }

    /**
     * Verify if the CSRF token is valid.
<<<<<<< HEAD
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 5a14301c (.)
=======
     *
     * @return bool
>>>>>>> 5a14301c (.)
=======
     *
     * @return bool
>>>>>>> 5a14301c (.)
=======
     *
     * @return bool
>>>>>>> 5a14301c (.)
=======
     *
     * @return bool
>>>>>>> 5a14301c (.)
=======
     *
     * @return bool
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     */
    public function verifyCsrfToken(): bool
    {
        return Session::token() === $this->_token;
    }
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
