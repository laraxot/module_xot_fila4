<?php

/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

<<<<<<< HEAD
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use ReflectionClass;
=======
use ReflectionClass;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
>>>>>>> 54cbe5d (.)
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Finder\SplFileInfo as File;
use Webmozart\Assert\Assert;

use function Safe\file;

class GenerateFormByFileAction
{
    use QueueableAction;

    /**
     * Genera un form Filament basato su un file di risorsa.
     *
<<<<<<< HEAD
     * @param  File  $file  Il file della risorsa Filament
=======
     * @param File $file Il file della risorsa Filament
     *
>>>>>>> 54cbe5d (.)
     * @return int Numero di input aggiunti
     */
    public function execute(File $file): int
    {
<<<<<<< HEAD
        if (! $file->isFile()) {
            return 0;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
=======
        if (!$file->isFile()) {
            return 0;
        }
        if (!\in_array($file->getExtension(), ['php'], false)) {
>>>>>>> 54cbe5d (.)
            return 0;
        }

        $class_name = Str::replace(base_path('Modules/'), 'Modules/', $file->getPathname());
        Assert::string(
            $class_name = Str::replace('/', '\\', $class_name),
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 54cbe5d (.)
        );
        $class_name = Str::substr($class_name, 0, -4);

        // Verifichiamo che la classe esista e sia una risorsa Filament
        Assert::classExists($class_name);

<<<<<<< HEAD
        /** @var resource $resourceInstance */
        $resourceInstance = app($class_name);

        // Verifichiamo che il metodo getModel esista
        if (! method_exists($resourceInstance, 'getModel')) {
=======
        /** @var Resource $resourceInstance */
        $resourceInstance = app($class_name);

        // Verifichiamo che il metodo getModel esista
        if (!method_exists($resourceInstance, 'getModel')) {
>>>>>>> 54cbe5d (.)
            return 0;
        }

        /** @var string $modelClass */
        $modelClass = $resourceInstance->getModel();

        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);

        /** @var Model $modelInstance */
        $modelInstance = app($modelClass);

        // Verifichiamo che il metodo getFillable esista
<<<<<<< HEAD
        if (! method_exists($modelInstance, 'getFillable')) {
=======
        if (!method_exists($modelInstance, 'getFillable')) {
>>>>>>> 54cbe5d (.)
            return 0;
        }

        $fillable = $modelInstance->getFillable();

        $reflection_class = new ReflectionClass($class_name);

        // Verifichiamo che il metodo form esista
<<<<<<< HEAD
        if (! $reflection_class->hasMethod('form')) {
=======
        if (!$reflection_class->hasMethod('form')) {
>>>>>>> 54cbe5d (.)
            return 0;
        }

        $form_method = $reflection_class->getMethod('form');
        $start_line = $form_method->getStartLine() - 1;
        // it's actually - 1, otherwise you wont get the function() block
        $end_line = $form_method->getEndLine();
        $length = $end_line - $start_line;
<<<<<<< HEAD
        Assert::string($file_name = $form_method->getFileName(), '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::string($file_name = $form_method->getFileName(), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 54cbe5d (.)
        // $contents= $file->getContents();
        $source = file($file_name);
        $body = implode('', \array_slice($source, $start_line, $length));

        // Otteniamo i metodi della classe risorsa
        $resourceMethods = get_class_methods($resourceInstance);

        dd([
            'class_name' => $class_name,
            'model_name' => $modelClass,
            'fillable' => $fillable,
<<<<<<< HEAD
            // 't1'=>app($class_name)->form(app(\Filament\Schemas\Schema::class)),
=======
            // 't1'=>app($class_name)->form(app(\Filament\Forms\Form::class)),
>>>>>>> 54cbe5d (.)
            'methods' => $resourceMethods,
            'form_method' => $form_method,
            'form_method_methods' => get_class_methods($form_method),
            'body' => $body,
        ]);
    }

    /**
     * Mostra informazioni di debug su un file.
     *
<<<<<<< HEAD
     * @param  File  $file  Il file da analizzare
=======
     * @param File $file Il file da analizzare
     *
     * @return void
>>>>>>> 54cbe5d (.)
     */
    public function ddFile(File $file): void
    {
        dd([
            'getRelativePath' => $file->getRelativePath(), // =  ""
            'getRelativePathname' => $file->getRelativePathname(), //  AssenzeResource.php
            'getFilenameWithoutExtension' => $file->getFilenameWithoutExtension(), // AssenzeResource
            // 'getContents' => $file->getContents(),
<<<<<<< HEAD
            'getPath' => $file->getPath(),
            'getFilename' => $file->getFilename(), // = AssenzeResource.php
            'getExtension' => $file->getExtension(), // php
            'getBasename' => $file->getBasename(), // AssenzeResource.php
            'getPathname' => $file->getPathname(),
            'isFile' => $file->isFile(), // true
            'getRealPath' => $file->getRealPath(),
=======
            'getPath' => $file->getPath(), // = /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources
            'getFilename' => $file->getFilename(), // = AssenzeResource.php
            'getExtension' => $file->getExtension(), // php
            'getBasename' => $file->getBasename(), // AssenzeResource.php
            'getPathname' => $file->getPathname(), // "/var/www/html/ptvx/laravel/Modules/Progressioni/Filament/resources/AssenzeResource.php
            'isFile' => $file->isFile(), // true
            'getRealPath' => $file->getRealPath(), // /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/resources/AssenzeResource.php
>>>>>>> 54cbe5d (.)
            // 'getFileInfo' => $file->getFileInfo(),
            // 'getPathInfo' => $file->getPathInfo(),
            'methods' => get_class_methods($file),
        ]);
    }
}
