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
    public function render(Request $_request): Response
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
=======
    public function render(Request $_request): Response
>>>>>>> 300ef70 (.)
    {
        $applicationError = new ApplicationError($this->help(), $this->error());

        return response($applicationError->toArray(), $this->status());
    }
}
