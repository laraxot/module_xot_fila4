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
>>>>>>> 2f3197ab (.)
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__.'/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
        return realpath(__DIR__ . '/../stubs/model.stub');
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    }

    protected function getDefaultNamespace($rootNamespace)
    {
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
>>>>>>> 2f3197ab (.)
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace.'\Models';
        return $rootNamespace . '\Models';
        return $rootNamespace . '\Models';
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    }

    protected function replaceClass($stub, $name)
    {
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
>>>>>>> 2f3197ab (.)
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

        // Do string replacement
        return str_replace('{{service_name}}', $class, $stub);
    }
}
