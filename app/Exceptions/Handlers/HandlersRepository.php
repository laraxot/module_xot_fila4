<?php

declare(strict_types=1);

namespace Modules\Xot\Exceptions\Handlers;

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
>>>>>>> ce6fc085 (.)
use Closure;
use ReflectionClass;
use ReflectionFunction;
use Throwable;
<<<<<<< HEAD
=======
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
    public function getReportersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
        return array_filter(
            $this->reporters,
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
    public function getReportersByException(\Throwable $e): array
    {
        return array_filter($this->reporters, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
        return array_filter($this->reporters, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    }

    /**
     * Retrieve all renderers handling the given exception.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function getRenderersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
        return array_filter(
            $this->renderers,
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
    public function getRenderersByException(\Throwable $e): array
    {
        return array_filter($this->renderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
        return array_filter($this->renderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    }

    /**
     * Retrieve all console renderers handling the given exception.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function getConsoleRenderersByException(Throwable $e): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
        return array_filter(
            $this->consoleRenderers,
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
    public function getConsoleRenderersByException(\Throwable $e): array
    {
        return array_filter($this->consoleRenderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
        return array_filter($this->consoleRenderers, function (mixed $handler) use ($e): bool {
            return is_callable($handler) && $this->handlesException($handler, $e);
        });
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
        if (! ($params = $reflection->getParameters())) {
            return false;
        }

        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        if (!($params = $reflection->getParameters())) {
            return false;
        }

        return ($params[0]->getClass() instanceof ReflectionClass) ? $params[0]->getClass()->isInstance($e) : true;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> 2f3197ab (.)
    protected function handlesException(callable $handler, \Throwable $e): bool
    {
        if ($handler instanceof \Closure) {
            $reflection = new \ReflectionFunction($handler);
        } else {
            $reflection = new \ReflectionFunction(\Closure::fromCallable($handler));
        }

<<<<<<< HEAD
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        if (! $params = $reflection->getParameters()) {
            return false;
        }

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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        if (!($params = $reflection->getParameters())) {
            return false;
        }

        return ($params[0]->getClass() instanceof ReflectionClass) ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof \ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ce6fc085 (.)
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 218dfed3 (.)
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
<<<<<<< HEAD
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    }
}
