<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

trait HasCsrfToken
{
    /**
     * CSRF token for the current request.
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
     */
    public string $_token;

    /**
     * Mount the component and set the CSRF token.
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
     */
    public function mount(): void
    {
        $this->_token = App::make('session')->token();
    }

    /**
     * Get the CSRF token.
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
     */
    public function getCsrfToken(): string
    {
        return $this->_token;
    }

    /**
     * Verify if the CSRF token is valid.
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
     */
    public function verifyCsrfToken(): bool
    {
        return Session::token() === $this->_token;
    }
}
