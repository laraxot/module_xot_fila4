<?php

declare(strict_types=1);

namespace Modules\Xot\Exceptions\Handlers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Throwable;
use Closure;
use ReflectionFunction;
use ReflectionClass;

<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * The handlers repository.
 */
class HandlersRepository
{
    /**
     * The custom handlers reporting exceptions.
     */
    protected array $reporters = [];

    /**
     * The custom handlers rendering exceptions.
     */
    protected array $renderers = [];

    /**
     * The custom handlers rendering exceptions in console.
     */
    protected array $consoleRenderers = [];

    /**
     * Register a custom handler to report exceptions.
     */
    public function addReporter(callable $reporter): int
    {
        return array_unshift($this->reporters, $reporter);
    }

    /**
     * Register a custom handler to render exceptions.
     */
    public function addRenderer(callable $renderer): int
    {
        return array_unshift($this->renderers, $renderer);
    }

    /**
     * Register a custom handler to render exceptions in console.
     */
    public function addConsoleRenderer(callable $renderer): int
    {
        return array_unshift($this->consoleRenderers, $renderer);
    }

    /**
     * Retrieve all reporters handling the given exception.
     */
<<<<<<< HEAD
    public function getReportersByException(Throwable $e): array
    {
=======
<<<<<<< HEAD
    public function getReportersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        return array_filter(
            $this->reporters,
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_filter($this->reporters, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function getReportersByException(\Throwable $e): array
    {
        return array_filter($this->reporters, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Retrieve all renderers handling the given exception.
     */
<<<<<<< HEAD
    public function getRenderersByException(Throwable $e): array
    {
=======
<<<<<<< HEAD
    public function getRenderersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        return array_filter(
            $this->renderers,
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_filter($this->renderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function getRenderersByException(\Throwable $e): array
    {
        return array_filter($this->renderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Retrieve all console renderers handling the given exception.
     */
<<<<<<< HEAD
    public function getConsoleRenderersByException(Throwable $e): array
    {
=======
<<<<<<< HEAD
    public function getConsoleRenderersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        return array_filter(
            $this->consoleRenderers,
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_filter($this->consoleRenderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function getConsoleRenderersByException(\Throwable $e): array
    {
        return array_filter($this->consoleRenderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Determine whether the given handler can handle the provided exception.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    protected function handlesException(callable $handler, Throwable $e): bool
    {
        if ($handler instanceof Closure) {
            $reflection = new ReflectionFunction($handler);
        } else {
            $reflection = new ReflectionFunction(Closure::fromCallable($handler));
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        if (!($params = $reflection->getParameters())) {
            return false;
        }

        return ($params[0]->getClass() instanceof ReflectionClass) ? $params[0]->getClass()->isInstance($e) : true;
<<<<<<< HEAD
=======
=======
=======
    protected function handlesException(callable $handler, \Throwable $e): bool
    {
        if ($handler instanceof \Closure) {
            $reflection = new \ReflectionFunction($handler);
        } else {
            $reflection = new \ReflectionFunction(\Closure::fromCallable($handler));
        }

>>>>>>> origin/develop
        if (! $params = $reflection->getParameters()) {
            return false;
        }

<<<<<<< HEAD
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> a12f125f4a (.)
=======
        if (!($params = $reflection->getParameters())) {
            return false;
        }

        return ($params[0]->getClass() instanceof ReflectionClass) ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> b93ef594b4 (.)
=======
        return $params[0]->getClass() instanceof \ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
