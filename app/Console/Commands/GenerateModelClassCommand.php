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
        return realpath(__DIR__.'/../stubs/model.stub');
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        return realpath(__DIR__.'/../stubs/model.stub');
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return realpath(__DIR__ . '/../stubs/model.stub');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
        return realpath(__DIR__.'/../stubs/model.stub');
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    protected function getDefaultNamespace($rootNamespace)
    {
<<<<<<< HEAD
        return $rootNamespace.'\Models';
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        return $rootNamespace.'\Models';
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        return $rootNamespace . '\Models';
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return $rootNamespace . '\Models';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
        return $rootNamespace.'\Models';
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    protected function replaceClass($stub, $name)
    {
<<<<<<< HEAD
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        // Do string replacement
        return str_replace('{{service_name}}', $class, $stub);
    }
}
