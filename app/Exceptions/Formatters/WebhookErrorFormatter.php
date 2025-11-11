<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace \Filament\Forms\Formatters;
=======
namespace Modules\Xot\Exceptions\Formatters;
>>>>>>> 518e053 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
use Illuminate\Support\Facades\Auth;
use Throwable;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Throwable;
use Illuminate\Support\Facades\Auth;
>>>>>>> 5a14301c (.)
=======
use Throwable;
use Illuminate\Support\Facades\Auth;
>>>>>>> 5a14301c (.)
=======
use Throwable;
use Illuminate\Support\Facades\Auth;
>>>>>>> 5a14301c (.)
=======
use Throwable;
use Illuminate\Support\Facades\Auth;
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======

use function Safe\json_encode;
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)

use function Safe\json_encode;
=======
>>>>>>> 71586de2 (.)

class WebhookErrorFormatter
{
    public function __construct(
        private Throwable $exception,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function format(): array
    {
        $user = Auth::user();
        $email = $user->email ?? 'CLI User';

        return [
            'message' => $this->exception->getMessage(),
            'file' => $this->exception->getFile(),
            'line' => $this->exception->getLine(),
            'trace' => $this->exception->getTraceAsString(),
            'exception' => sprintf('`%s` (Code `%s`)', get_class($this->exception), $this->exception->getCode()),
            'thrown_in' => sprintf('`%s`:%d', $this->exception->getFile(), $this->exception->getLine()),
            'user' => sprintf('%d <%s>', Auth::id() ?? 0, $email),
            'ip' => request()->ip(),
            'thrown_while_calling' => sprintf('[%s] %s', request()->getMethod(), request()->fullUrl()),
            'url_previous' => url()->previous(),
            /*
             * 'exception_details' => sprintf(
             * "Trace:\n```json \n %s \n ```\n\n Previous: \n `%s`",
             * json_encode($this->exception->getTrace(), JSON_PRETTY_PRINT),
             * $this->exception->getPrevious() ? ('`' . get_class($this->exception->getPrevious()) . '`') : 'None'
             * ),
             */
        ];
    }
}
