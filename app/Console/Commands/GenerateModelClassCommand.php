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
    }

    protected function getDefaultNamespace($rootNamespace)
    {
<<<<<<< HEAD
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
    }

    protected function replaceClass($stub, $name)
    {
<<<<<<< HEAD
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

        // Do string replacement
        return str_replace('{{service_name}}', $class, $stub);
    }
}
