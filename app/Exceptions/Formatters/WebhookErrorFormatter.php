<?php

declare(strict_types=1);

namespace Modules\Xot\Exceptions\Formatters;

<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Throwable;
=======
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Throwable;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use Throwable;
use Illuminate\Support\Facades\Auth;
use Throwable;
use Illuminate\Support\Facades\Auth;
use Throwable;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Throwable;
use Illuminate\Support\Facades\Auth;

use function Safe\json_encode;

use function Safe\json_encode;
use Throwable;
use Illuminate\Support\Facades\Auth;

use function Safe\json_encode;
use Throwable;
use Illuminate\Support\Facades\Auth;

use function Safe\json_encode;
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======

use function Safe\json_encode;
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

use function Safe\json_encode;

class WebhookErrorFormatter
{
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        private Throwable $exception,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        private \Throwable $exception
=======
=======
        private Throwable $exception
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        private Throwable $exception,
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        private Throwable $exception,
=======
        private Throwable $exception
>>>>>>> a12f125f4a (.)
=======
        private Throwable $exception,
>>>>>>> b93ef594b4 (.)
=======
        private \Throwable $exception
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
        private Throwable $exception,
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
        private Throwable $exception,
=======
        private Throwable $exception
>>>>>>> f1d4085 (.)
=======
        private Throwable $exception,
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        private Throwable $exception,
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
        private Throwable $exception,
=======
        private Throwable $exception
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
        private Throwable $exception,
=======
        private Throwable $exception
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
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
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 5400be3e2 (.)
            'exception' => sprintf(
                '`%s` (Code `%s`)',
                get_class($this->exception),
                $this->exception->getCode()
            ),
            'thrown_in' => sprintf(
                '`%s`:%d',
                $this->exception->getFile(),
                $this->exception->getLine()
            ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'user' => sprintf('%d <%s>', Auth::id() ?? 0, $email),
            'ip' => request()->ip(),
<<<<<<< HEAD
            'thrown_while_calling' => sprintf('[%s] %s', request()->getMethod(), request()->fullUrl()),
=======
=======
<<<<<<< HEAD
=======
            'exception' => sprintf('`%s` (Code `%s`)', get_class($this->exception), $this->exception->getCode()),
            'thrown_in' => sprintf('`%s`:%d', $this->exception->getFile(), $this->exception->getLine()),
>>>>>>> b93ef594b4 (.)
            'user' => sprintf('%d <%s>', Auth::id() ?? 0, $email),
            'ip' => request()->ip(),
            'thrown_while_calling' => sprintf('[%s] %s', request()->getMethod(), request()->fullUrl()),
            'url_previous' => url()->previous(),
            /*
<<<<<<< HEAD
=======
            'user' => sprintf('%d <%s>', Auth::id() ?? 0, $email),
            'ip' => request()->ip(),
>>>>>>> ce6fc085 (.)
=======
            'user' => sprintf('%d <%s>', Auth::id() ?? 0, $email),
            'ip' => request()->ip(),
>>>>>>> 7468a7d2 (.)
=======
            'user' => sprintf('%d <%s>', Auth::id() ?? 0, $email),
            'ip' => request()->ip(),
>>>>>>> 5cf46378 (.)
=======
            'user' => sprintf('%d <%s>', Auth::id() ?? 0, $email),
            'ip' => request()->ip(),
>>>>>>> dbce41cec (.)
=======
            'user' => sprintf('%d <%s>', Auth::id() ?? 0, $email),
            'ip' => request()->ip(),
>>>>>>> 5400be3e2 (.)
            'thrown_while_calling' => sprintf(
                '[%s] %s',
                request()->getMethod(),
                request()->fullUrl()
            ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            'url_previous' => url()->previous(),
            /*
=======
            'url_previous' => url()->previous(),
            /*
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
            'url_previous' => url()->previous(),
            /*
>>>>>>> 7468a7d2 (.)
=======
            'url_previous' => url()->previous(),
            /*
>>>>>>> 5cf46378 (.)
=======
            'url_previous' => url()->previous(),
            /*
>>>>>>> dbce41cec (.)
=======
            'url_previous' => url()->previous(),
            /*
>>>>>>> 5400be3e2 (.)
            'exception_details' => sprintf(
                "Trace:\n```json \n %s \n ```\n\n Previous: \n `%s`",
                json_encode($this->exception->getTrace(), JSON_PRETTY_PRINT),
                $this->exception->getPrevious() ? ('`' . get_class($this->exception->getPrevious()) . '`') : 'None'
            ),
            */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
             * 'exception_details' => sprintf(
             * "Trace:\n```json \n %s \n ```\n\n Previous: \n `%s`",
             * json_encode($this->exception->getTrace(), JSON_PRETTY_PRINT),
             * $this->exception->getPrevious() ? ('`' . get_class($this->exception->getPrevious()) . '`') : 'None'
             * ),
             */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
        ];
    }
}
