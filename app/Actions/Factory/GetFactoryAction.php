<?php

declare(strict_types=1);

/**
 * @see https://github.com/TheDoctor0/laravel-factory-generator. 24 days ago
 * @see https://github.com/mpociot/laravel-test-factory-helper  on 2 Mar 2020.
 * @see https://github.com/laravel-shift/factory-generator on 10 Aug.
 * @see https://dev.to/marcosgad/make-factory-more-organized-laravel-3c19.
 * @see https://medium.com/@yohan7788/seeders-and-faker-in-laravel-6806084a0c7.
 */

namespace Modules\Xot\Actions\Factory;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 091f883c (.)
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use InvalidArgumentException;
<<<<<<< HEAD
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
=======
>>>>>>> 551c768c4 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * @see https://github.com/mpociot/laravel-test-factory-helper/blob/master/src/Console/GenerateCommand.php#L213
 */
class GetFactoryAction
{
    use QueueableAction;

    /**
     * Execute the function with the given model class.
     *
<<<<<<< HEAD
     * @param string $model_class the class name of the model
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
=======
<<<<<<< HEAD
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
=======
     * @throws \Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
>>>>>>> 091f883c (.)
     *
     * @return Factory
=======
     * @param  string  $model_class  the class name of the model
     *
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
>>>>>>> 551c768c4 (.)
     */
    public function execute(string $model_class): Factory
    {
        Assert::stringNotEmpty($model_class, 'Model class non può essere vuota');
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        Assert::classExists($model_class, "La classe del modello {$model_class} non esiste");

        $factory_class = $this->getFactoryClass($model_class);

        if (class_exists($factory_class)) {
            /** @var Factory $factory */
            $factory = $factory_class::new();

            // Verifichiamo che il risultato sia effettivamente un'istanza di Factory
            Assert::isInstanceOf(
                $factory,
                Factory::class,
                "La classe {$factory_class}::new() non ha restituito un'istanza di Factory",
            );

            return $factory;
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
        Assert::classExists($model_class, "La classe del modello $model_class non esiste");
        
=======
        Assert::classExists($model_class, "La classe del modello {$model_class} non esiste");

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        $factory_class = $this->getFactoryClass($model_class);

        if (class_exists($factory_class)) {
            /** @var Factory $factory */
            $factory = $factory_class::new();

            // Verifichiamo che il risultato sia effettivamente un'istanza di Factory
            Assert::isInstanceOf(
                $factory,
                Factory::class,
                "La classe {$factory_class}::new() non ha restituito un'istanza di Factory",
            );

            return $factory;
        }
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8fd88dd43 (.)
=======
        Assert::classExists($model_class, "La classe del modello $model_class non esiste");
        
        $factory_class = $this->getFactoryClass($model_class);
        
        
        if (class_exists($factory_class)) {
            /** @var Factory $factory */
            $factory = $factory_class::new();
            
            // Verifichiamo che il risultato sia effettivamente un'istanza di Factory
            Assert::isInstanceOf($factory, Factory::class, 
                "La classe $factory_class::new() non ha restituito un'istanza di Factory");
                
            return $factory;
        }
        
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
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        $this->createFactory($model_class);

        // Lancia un'eccezione con informazioni specifiche
        throw new Exception(sprintf(
            'Generating Factory [%s] press [F5] to refresh page [%d][%s]',
            $factory_class,
            __LINE__,
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
            class_basename($this),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
            class_basename($this),
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            class_basename($this),
=======
            class_basename($this)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            class_basename($this),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        Assert::classExists($model_class, "La classe del modello $model_class non esiste");
        
        $factory_class = $this->getFactoryClass($model_class);
        
        
        if (class_exists($factory_class)) {
            /** @var Factory $factory */
            $factory = $factory_class::new();
            
            // Verifichiamo che il risultato sia effettivamente un'istanza di Factory
            Assert::isInstanceOf($factory, Factory::class, 
                "La classe $factory_class::new() non ha restituito un'istanza di Factory");
                
            return $factory;
        }
        
        $this->createFactory($model_class);

        // Lancia un'eccezione con informazioni specifiche
        throw new \Exception(sprintf(
            'Generating Factory [%s] press [F5] to refresh page [%d][%s]',
            $factory_class,
            __LINE__,
            class_basename($this)
<<<<<<< HEAD
=======
=======
            class_basename($this)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            class_basename($this),
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
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
            class_basename($this),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            class_basename($this),
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
            class_basename($this),
=======
            class_basename($this)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
            class_basename($this),
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
            class_basename($this),
=======
            class_basename($this)
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
            class_basename($this),
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
            class_basename($this),
=======
            class_basename($this)
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
            class_basename($this),
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
            class_basename($this),
=======
            class_basename($this)
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
            class_basename($this),
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
            class_basename($this),
=======
            class_basename($this)
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
            class_basename($this),
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
            class_basename($this),
>>>>>>> 851793957 (.)
        ));
    }

    /**
     * Get the factory class name for a model class.
     *
<<<<<<< HEAD
     * @param string $model_class The model class name
     * @param string $model_class The model class name
     * @param string $model_class The model class name
     * @param string $model_class The model class name
     * @param string $model_class The model class name
=======
     * @param  string  $model_class  The model class name
>>>>>>> 551c768c4 (.)
     * @return string The fully qualified factory class name
     */
    public function getFactoryClass(string $model_class): string
    {
        Assert::stringNotEmpty($model_class, 'Model class non può essere vuota');
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

        $model_name = class_basename($model_class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
        $model_name = class_basename($model_class);
        
=======
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)

        $model_name = class_basename($model_class);

=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD

        $model_name = class_basename($model_class);

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======

        $model_name = class_basename($model_class);

>>>>>>> dbce41cec (.)
=======

        $model_name = class_basename($model_class);

>>>>>>> 5400be3e2 (.)
=======

        $model_name = class_basename($model_class);

>>>>>>> aa96bb619 (.)
=======

        $model_name = class_basename($model_class);

>>>>>>> efbf15eba (.)
=======

        $model_name = class_basename($model_class);

>>>>>>> f2dd5676b (.)
=======
        
        $model_name = class_basename($model_class);
        
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
=======

        $model_name = class_basename($model_class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        $model_name = class_basename($model_class);
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

        $model_name = class_basename($model_class);

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======

        $model_name = class_basename($model_class);

>>>>>>> 851793957 (.)
        // Costruiamo il nome della classe factory seguendo le convenzioni di Laravel
        $factory_class = Str::of($model_class)
            ->before('\Models\\')
            ->append('\Database\Factories\\')
            ->append($model_name)
            ->append('Factory')
            ->toString();
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

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            
        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');
        
=======
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

>>>>>>> dbce41cec (.)
=======

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

>>>>>>> 5400be3e2 (.)
=======

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

>>>>>>> aa96bb619 (.)
=======

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

>>>>>>> efbf15eba (.)
=======

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

>>>>>>> f2dd5676b (.)
=======
            
        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');
        
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
=======

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            
        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======

        Assert::stringNotEmpty($factory_class, 'Factory class non può essere vuota');

>>>>>>> 851793957 (.)
        return $factory_class;
    }

    /**
     * Create a factory for the given model class.
     *
<<<<<<< HEAD
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> 551c768c4 (.)
     */
    public function createFactory(string $model_class): void
    {
        Assert::stringNotEmpty($model_class, 'Model class non può essere vuota');
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        Assert::classExists($model_class, "La classe del modello {$model_class} non esiste");

        $model_name = class_basename($model_class);

        // Estraiamo il nome del modulo dal namespace della classe
        $module_parts = Str::of($model_class)->between('Modules\\', '\Models\\');

        if ($module_parts === '') {
            throw new InvalidArgumentException(
                "Impossibile determinare il nome del modulo dal namespace {$model_class}",
            );
        }

        $module_name = is_string($module_parts) ? $module_parts : ((string) $module_parts);

        // Eseguiamo il comando Artisan per generare la factory
        $artisan_cmd = 'module:make-factory';
        $artisan_params = ['name' => $model_name, 'module' => $module_name];

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
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
=======
        Assert::classExists($model_class, "La classe del modello $model_class non esiste");
        
=======
        Assert::classExists($model_class, "La classe del modello {$model_class} non esiste");

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        $model_name = class_basename($model_class);

        // Estraiamo il nome del modulo dal namespace della classe
        $module_parts = Str::of($model_class)->between('Modules\\', '\Models\\');

        if ($module_parts === '') {
            throw new InvalidArgumentException(
                "Impossibile determinare il nome del modulo dal namespace {$model_class}",
            );
        }

        $module_name = is_string($module_parts) ? $module_parts : ((string) $module_parts);

        // Eseguiamo il comando Artisan per generare la factory
        $artisan_cmd = 'module:make-factory';
        $artisan_params = ['name' => $model_name, 'module' => $module_name];
<<<<<<< HEAD

=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
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
=======
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> f2dd5676b (.)
        Assert::classExists($model_class, "La classe del modello $model_class non esiste");
        
        $model_name = class_basename($model_class);
        
        // Estraiamo il nome del modulo dal namespace della classe
        $module_parts = Str::of($model_class)->between('Modules\\', '\Models\\');
        
        if ($module_parts === '') {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \InvalidArgumentException(
=======
            throw new InvalidArgumentException(
>>>>>>> 2f3197ab (.)
=======
            throw new \InvalidArgumentException(
>>>>>>> ce6fc085 (.)
=======
            throw new InvalidArgumentException(
>>>>>>> 7468a7d2 (.)
=======
            throw new InvalidArgumentException(
>>>>>>> 5cf46378 (.)
=======
            throw new InvalidArgumentException(
>>>>>>> dbce41cec (.)
=======
            throw new InvalidArgumentException(
>>>>>>> 5400be3e2 (.)
=======
            throw new InvalidArgumentException(
>>>>>>> aa96bb619 (.)
=======
            throw new InvalidArgumentException(
>>>>>>> efbf15eba (.)
=======
            throw new InvalidArgumentException(
>>>>>>> f2dd5676b (.)
                "Impossibile determinare il nome del modulo dal namespace $model_class"
            );
        }
        
        $module_name = is_string($module_parts) ? $module_parts : (string) $module_parts;
        
        // Eseguiamo il comando Artisan per generare la factory
        $artisan_cmd = 'module:make-factory';
        $artisan_params = ['name' => $model_name, 'module' => $module_name];
        
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
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        Artisan::call($artisan_cmd, $artisan_params);
    }
}
