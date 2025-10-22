<?php

declare(strict_types=1);

namespace Modules\Xot\Exceptions\Handlers;

use Closure;
use ReflectionClass;
use ReflectionFunction;
use Throwable;

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
    public function getReportersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return array_filter(
            $this->reporters,
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_filter($this->reporters, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }

    /**
     * Retrieve all renderers handling the given exception.
     */
    public function getRenderersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return array_filter(
            $this->renderers,
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_filter($this->renderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }

    /**
     * Retrieve all console renderers handling the given exception.
     */
    public function getConsoleRenderersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return array_filter(
            $this->consoleRenderers,
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_filter($this->consoleRenderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }

    /**
     * Determine whether the given handler can handle the provided exception.
     */
    protected function handlesException(callable $handler, Throwable $e): bool
    {
        if ($handler instanceof Closure) {
            $reflection = new ReflectionFunction($handler);
        } else {
            $reflection = new ReflectionFunction(Closure::fromCallable($handler));
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($params = $reflection->getParameters())) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        if (!($params = $reflection->getParameters())) {
>>>>>>> d2b0a27 (.)
            return false;
        }

        return ($params[0]->getClass() instanceof ReflectionClass) ? $params[0]->getClass()->isInstance($e) : true;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (! $params = $reflection->getParameters()) {
            return false;
        }

        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}
