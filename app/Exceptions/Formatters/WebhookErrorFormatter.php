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

class WebhookErrorFormatter
{
    public function __construct(
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
<<<<<<< HEAD
        private Throwable $exception,
=======
        private Throwable $exception
>>>>>>> f1d4085 (.)
=======
        private Throwable $exception,
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
            'thrown_while_calling' => sprintf(
                '[%s] %s',
                request()->getMethod(),
                request()->fullUrl()
            ),
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
            'exception_details' => sprintf(
                "Trace:\n```json \n %s \n ```\n\n Previous: \n `%s`",
                json_encode($this->exception->getTrace(), JSON_PRETTY_PRINT),
                $this->exception->getPrevious() ? ('`' . get_class($this->exception->getPrevious()) . '`') : 'None'
            ),
            */
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        ];
    }
}
