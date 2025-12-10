<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class ApplicationException extends Exception
{
    abstract public function status(): int;

    abstract public function help(): string;

    abstract public function error(): string;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(Request $_request): Response
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(Request $request): Response
=======
=======
    public function render(Request $request): Response
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function render(Request $_request): Response
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(Request $_request): Response
=======
    public function render(Request $request): Response
>>>>>>> a12f125f4a (.)
=======
    public function render(Request $_request): Response
>>>>>>> b93ef594b4 (.)
=======
    public function render(Request $request): Response
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
    public function render(Request $_request): Response
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(Request $_request): Response
=======
    public function render(Request $request): Response
>>>>>>> f1d4085 (.)
=======
    public function render(Request $_request): Response
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    public function render(Request $_request): Response
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
    public function render(Request $_request): Response
=======
    public function render(Request $request): Response
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
    {
        $applicationError = new ApplicationError($this->help(), $this->error());

        return response($applicationError->toArray(), $this->status());
    }
}
