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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
        return realpath(__DIR__.'/../stubs/model.stub');
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
        return $rootNamespace.'\Models';
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)

        // Do string replacement
        return str_replace('{{service_name}}', $class, $stub);
    }
}
