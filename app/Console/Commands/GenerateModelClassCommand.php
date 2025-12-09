<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\GeneratorCommand;

use function Safe\realpath;

class GenerateModelClassCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:generate-model-class {model_class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ModelClass.';

    protected function getStub()
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return realpath(__DIR__.'/../stubs/model.stub');
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 5a14301c (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3fbbf1f5 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> a12f125f4a (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> b93ef594b4 (.)
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> ca9324a4 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3fbbf1f5 (.)
    }

    protected function getDefaultNamespace($rootNamespace)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $rootNamespace.'\Models';
=======
        return $rootNamespace . '\Models';
>>>>>>> 5a14301c (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 3fbbf1f5 (.)
=======
        return $rootNamespace . '\Models';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> a12f125f4a (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> b93ef594b4 (.)
=======
        return $rootNamespace.'\Models';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> ca9324a4 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 3fbbf1f5 (.)
    }

    protected function replaceClass($stub, $name)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 5a14301c (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3fbbf1f5 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> a12f125f4a (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> b93ef594b4 (.)
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> ca9324a4 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3fbbf1f5 (.)

        // Do string replacement
        return str_replace('{{service_name}}', $class, $stub);
    }
}
