<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

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
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use RuntimeException;
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
=======
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
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 9db27d12 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 9db27d12 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 9db27d12 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
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
=======
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class FakeSeederAction
{
    use QueueableAction;

    private const MAX_RECORDS = 200;

    private const CHUNK_SIZE = 50;

    /**
     * Execute the fake data seeding process.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  class-string<Model>  $modelClass  The fully qualified model class name
     * @param  int<1, max>  $qty  Number of records to generate
=======
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
>>>>>>> 5a14301c (.)
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     * @throws InvalidArgumentException When model class is invalid
     */
    public function execute(string $modelClass, int $qty): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        if (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ! class_exists($modelClass) ||
                ! is_subclass_of($modelClass, Model::class) ||
                ! in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
=======
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
>>>>>>> 5a14301c (.)
=======
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
>>>>>>> 5a14301c (.)
=======
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
>>>>>>> 5a14301c (.)
=======
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
>>>>>>> 5a14301c (.)
=======
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
>>>>>>> 5a14301c (.)
=======
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
>>>>>>> 5a14301c (.)
        ) {
<<<<<<< HEAD
            throw new InvalidArgumentException("Invalid model class or missing HasFactory trait: {$modelClass}");
=======
<<<<<<< HEAD
=======
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
            throw new InvalidArgumentException("Invalid model class or missing HasFactory trait: {$modelClass}");
=======
     * @throws \InvalidArgumentException When model class is invalid
     */
    public function execute(string $modelClass, int $qty): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
            throw new \InvalidArgumentException("Invalid model class or missing HasFactory trait: {$modelClass}");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        $qtyToDo = min($qty, self::MAX_RECORDS);

        $factory = $this->getModelFactory($modelClass);
        /** @var Collection<int, Model> $rows */
        $rows = $factory->count($qtyToDo)->make();

        /** @var Collection<int, Collection> $chunks */
        $chunks = $rows->chunk(self::CHUNK_SIZE);

        $chunks->each(function (Collection $chunk) use ($modelClass): void {
            /** @var array<int, array<string, mixed>> $data */
            $data = $chunk->map(function ($item) {
                assert($item instanceof Model);

                return $item->getAttributes();
            })->all();
            $modelClass::insert($data);
        });

        $this->sendNotification($modelClass, $qtyToDo);

        if ($qty > self::MAX_RECORDS) {
            $this->queueRemainingRecords($modelClass, $qty);
        }
    }

    /**
     * Get the model factory.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  class-string<Model>  $modelClass
=======
     * @param class-string<Model> $modelClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
>>>>>>> 5a14301c (.)
     *
<<<<<<< HEAD
     * @throws RuntimeException
=======
<<<<<<< HEAD
     * @throws RuntimeException
=======
     * @throws \RuntimeException
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    private function getModelFactory(string $modelClass): Factory
    {
        if (method_exists($modelClass, 'factory')) {
            return $modelClass::factory();
        }

<<<<<<< HEAD
        throw new RuntimeException("Unable to create factory for model: {$modelClass}");
=======
<<<<<<< HEAD
        throw new RuntimeException("Unable to create factory for model: {$modelClass}");
=======
        throw new \RuntimeException("Unable to create factory for model: {$modelClass}");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Send a notification about the seeding completion.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  class-string<Model>  $modelClass
     * @param  int<1, max>  $count
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
>>>>>>> 5a14301c (.)
     */
    private function sendNotification(string $modelClass, int $count): void
    {
        $title = sprintf('Created %d %s !', $count, $modelClass);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Notification::make()
            ->title($title)
            ->success()
            ->send();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Queue remaining records for processing.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  class-string<Model>  $modelClass
     * @param  int<1, max>  $qty
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
>>>>>>> 5a14301c (.)
     */
    private function queueRemainingRecords(string $modelClass, int $qty): void
    {
        if ($qty <= self::MAX_RECORDS) {
            return;
        }
<<<<<<< HEAD
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
=======
        app(self::class)
            ->onQueue()
            ->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> a12f125f4a (.)
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> b93ef594b4 (.)
=======
        app(self::class)
            ->onQueue()
            ->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    private function getTableName(string $modelClass): string
    {
        Assert::classExists($modelClass, 'La classe del modello deve esistere');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        /** @var Model */
        $model = app($modelClass);

<<<<<<< HEAD
=======
=======
        
        /** @var Model */
        $model = app($modelClass);
        
>>>>>>> a12f125f4a (.)
=======

        /** @var Model */
        $model = app($modelClass);

>>>>>>> b93ef594b4 (.)
=======
        
        /** @var \Illuminate\Database\Eloquent\Model */
        $model = app($modelClass);
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $model->getTable();
    }
}
