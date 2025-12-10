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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 399f46d3 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 17684f52 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 399f46d3 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 399f46d3 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 17684f52 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        return realpath(__DIR__.'/../stubs/model.stub');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return realpath(__DIR__.'/../stubs/model.stub');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> ca9324a4 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 9db27d12 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 5a14301c (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> ca9324a4 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 5a14301c (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> ca9324a4 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> 53d6a6ba (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> 71586de2 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 5a14301c (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> ca9324a4 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3310e9c6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return $rootNamespace . '\Models';
>>>>>>> 399f46d3 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 17684f52 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 399f46d3 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 399f46d3 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 17684f52 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        return $rootNamespace.'\Models';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return $rootNamespace.'\Models';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> ca9324a4 (.)
=======
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 9db27d12 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 5a14301c (.)
=======
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> ca9324a4 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 5a14301c (.)
=======
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> ca9324a4 (.)
=======
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $rootNamespace.'\Models';
>>>>>>> 53d6a6ba (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        return $rootNamespace.'\Models';
>>>>>>> 71586de2 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 5a14301c (.)
=======
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> ca9324a4 (.)
=======
        return $rootNamespace . '\Models';
=======
        return $rootNamespace.'\Models';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 3310e9c6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 399f46d3 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 17684f52 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 399f46d3 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 399f46d3 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 17684f52 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> ca9324a4 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 9db27d12 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 5a14301c (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> ca9324a4 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 5a14301c (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> ca9324a4 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> 53d6a6ba (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> 71586de2 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 5a14301c (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> ca9324a4 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3310e9c6 (.)

        // Do string replacement
        return str_replace('{{service_name}}', $class, $stub);
    }
}
