<?php

declare(strict_types=1);

namespace Modules\Xot\Exceptions\Handlers;

<<<<<<< HEAD
<<<<<<< HEAD
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
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
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
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Throwable;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Throwable;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Throwable;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Throwable;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Throwable;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
=======
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Throwable;
>>>>>>> 551c768c4 (.)

class HandlerDecorator implements ExceptionHandler
{
    protected HandlersRepository $repository;

    public function __construct(
        protected ExceptionHandler $defaultHandler,
        HandlersRepository $repository,
    ) {
        $this->repository = $repository;
    }

    public function __call(string $name, array $parameters): mixed
    {
        /** @var callable */
        $callable = [$this->defaultHandler, $name];

        return \call_user_func_array($callable, $parameters);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function report(Throwable $e): void
=======
<<<<<<< HEAD
    public function report(Throwable $e): void
=======
    public function report(\Throwable $e): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
    public function report(Throwable $e): void
>>>>>>> 091f883c (.)
    {
        foreach ($this->repository->getReportersByException($e) as $reporter) {
            if (is_callable($reporter)) {
                $reporter($e);
            }
        }

        $this->defaultHandler->report($e);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function render($request, Throwable $e): SymfonyResponse
=======
<<<<<<< HEAD
    public function render($request, Throwable $e): SymfonyResponse
=======
    public function render($request, \Throwable $e): SymfonyResponse
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
    public function render($request, Throwable $e): SymfonyResponse
>>>>>>> 091f883c (.)
    {
        foreach ($this->repository->getRenderersByException($e) as $renderer) {
            if (is_callable($renderer)) {
                $response = $renderer($e, $request);
                if ($response instanceof SymfonyResponse) {
                    return $response;
                }
            }
        }

        return $this->defaultHandler->render($request, $e);
    }

    /**
     * @phpstan-ignore-next-line
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function renderForConsole($output, Throwable $e): void
=======
<<<<<<< HEAD
    public function renderForConsole($output, Throwable $e): void
=======
    public function renderForConsole($output, \Throwable $e): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
    public function renderForConsole($output, Throwable $e): void
>>>>>>> 091f883c (.)
    {
        foreach ($this->repository->getConsoleRenderersByException($e) as $renderer) {
            if (is_callable($renderer)) {
                $renderer($e, $output);
            }
        }

        /** @phpstan-ignore-next-line */
        $this->defaultHandler->renderForConsole($output, $e);
    }

    public function reporter(callable $reporter): int
    {
        return $this->repository->addReporter($reporter);
    }

    public function renderer(callable $renderer): int
    {
        return $this->repository->addRenderer($renderer);
    }

    public function consoleRenderer(callable $renderer): int
    {
        return $this->repository->addConsoleRenderer($renderer);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function shouldReport(Throwable $e): bool
=======
<<<<<<< HEAD
    public function shouldReport(Throwable $e): bool
=======
    public function shouldReport(\Throwable $e): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
    public function shouldReport(Throwable $e): bool
>>>>>>> 091f883c (.)
    {
        return $this->defaultHandler->shouldReport($e);
    }
}
