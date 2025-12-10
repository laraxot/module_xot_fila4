<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

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
=======
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 17684f52 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
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
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
     * @param class-string<Model> $modelClass The fully qualified model class name
     * @param int<1, max>         $qty        Number of records to generate
     *
     * @throws InvalidArgumentException When model class is invalid
     */
    public function execute(string $modelClass, int $qty): void
    {
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
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> efbf15eba (.)
        if (
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
            !class_exists($modelClass) ||
                !is_subclass_of($modelClass, Model::class) ||
                !in_array(HasFactory::class, class_uses_recursive($modelClass), strict: true)
        ) {
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
=======
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
=======
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
            throw new InvalidArgumentException("Invalid model class or missing HasFactory trait: {$modelClass}");
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
            throw new InvalidArgumentException("Invalid model class or missing HasFactory trait: {$modelClass}");
=======
>>>>>>> ce6fc085 (.)
     * @throws \InvalidArgumentException When model class is invalid
     */
    public function execute(string $modelClass, int $qty): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class) || ! in_array(HasFactory::class, class_uses_recursive($modelClass))) {
            throw new \InvalidArgumentException("Invalid model class or missing HasFactory trait: {$modelClass}");
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
     * @param class-string<Model> $modelClass
     * @param class-string<Model> $modelClass
     * @param class-string<Model> $modelClass
     * @param class-string<Model> $modelClass
     * @param class-string<Model> $modelClass
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws RuntimeException
=======
<<<<<<< HEAD
     * @throws RuntimeException
=======
     * @throws \RuntimeException
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @throws RuntimeException
>>>>>>> 091f883c (.)
     */
    private function getModelFactory(string $modelClass): Factory
    {
        if (method_exists($modelClass, 'factory')) {
            return $modelClass::factory();
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        throw new RuntimeException("Unable to create factory for model: {$modelClass}");
=======
<<<<<<< HEAD
        throw new RuntimeException("Unable to create factory for model: {$modelClass}");
=======
        throw new \RuntimeException("Unable to create factory for model: {$modelClass}");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        throw new RuntimeException("Unable to create factory for model: {$modelClass}");
>>>>>>> 091f883c (.)
    }

    /**
     * Send a notification about the seeding completion.
     *
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $count
     */
    private function sendNotification(string $modelClass, int $count): void
    {
        $title = sprintf('Created %d %s !', $count, $modelClass);
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
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> efbf15eba (.)
        Notification::make()
            ->title($title)
            ->success()
            ->send();
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
        Notification::make()->title($title)->success()->send();
=======
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
=======
        Notification::make()->title($title)->success()->send();
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
    }

    /**
     * Queue remaining records for processing.
     *
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
     * @param class-string<Model> $modelClass
     * @param int<1, max>         $qty
     */
    private function queueRemainingRecords(string $modelClass, int $qty): void
    {
        if ($qty <= self::MAX_RECORDS) {
            return;
        }
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
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        app(self::class)
            ->onQueue()
            ->execute($modelClass, $qty - self::MAX_RECORDS);
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> dbce41cec (.)
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> 5400be3e2 (.)
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> aa96bb619 (.)
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> efbf15eba (.)
=======
        app(self::class)
            ->onQueue()
            ->execute($modelClass, $qty - self::MAX_RECORDS);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
        app(self::class)->onQueue()->execute($modelClass, $qty - self::MAX_RECORDS);
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
    }

    private function getTableName(string $modelClass): string
    {
        Assert::classExists($modelClass, 'La classe del modello deve esistere');
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
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> efbf15eba (.)

        /** @var Model */
        $model = app($modelClass);

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
=======
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
        
        /** @var Model */
        $model = app($modelClass);
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)

        /** @var Model */
        $model = app($modelClass);

<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        
        /** @var \Illuminate\Database\Eloquent\Model */
        $model = app($modelClass);
        
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
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
=======
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> efbf15eba (.)
        
        /** @var Model */
        $model = app($modelClass);
        
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> efbf15eba (.)
        return $model->getTable();
    }
}
