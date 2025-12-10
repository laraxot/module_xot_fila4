<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class ApplicationException extends Exception
<<<<<<< HEAD
=======
=======
use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class ApplicationException extends \Exception
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
{
    abstract public function status(): int;

    abstract public function help(): string;

    abstract public function error(): string;

<<<<<<< HEAD
    public function render(Request $_request): Response
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
    {
        $applicationError = new ApplicationError($this->help(), $this->error());

        return response($applicationError->toArray(), $this->status());
    }
}
