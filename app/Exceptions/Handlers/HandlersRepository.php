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
>>>>>>> laraxot/develop
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
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
use Throwable;
use Closure;
use ReflectionFunction;
use ReflectionClass;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
        return array_filter(
            $this->reporters,
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 3fbbf1f5 (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
    }

    /**
     * Retrieve all renderers handling the given exception.
     */
<<<<<<< HEAD
    public function getRenderersByException(Throwable $e): array
    {
        return array_filter(
            $this->renderers,
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 3fbbf1f5 (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
    }

    /**
     * Retrieve all console renderers handling the given exception.
     */
<<<<<<< HEAD
    public function getConsoleRenderersByException(Throwable $e): array
    {
        return array_filter(
            $this->consoleRenderers,
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
        );
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            fn (mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 3fbbf1f5 (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
=======
            fn(mixed $handler) => is_callable($handler) && $this->handlesException($handler, $e),
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the given handler can handle the provided exception.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> laraxot/develop
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
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        if (! $params = $reflection->getParameters()) {
            return false;
        }

<<<<<<< HEAD
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> laraxot/develop
        if (!($params = $reflection->getParameters())) {
            return false;
        }

        return ($params[0]->getClass() instanceof ReflectionClass) ? $params[0]->getClass()->isInstance($e) : true;
<<<<<<< HEAD
        return $params[0]->getClass() instanceof \ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
=======
>>>>>>> b93ef594b4 (.)
=======
        return $params[0]->getClass() instanceof \ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> f1d4085 (.)
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
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
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
>>>>>>> 5a14301c (.)
=======
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
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
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
        return $params[0]->getClass() instanceof ReflectionClass ? $params[0]->getClass()->isInstance($e) : true;
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
>>>>>>> laraxot/develop
    }
}
