<?php

/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use ReflectionClass;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use ReflectionClass;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======

use function Safe\file;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use function Safe\file;

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Finder\SplFileInfo as File;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
use function Safe\file;

=======
>>>>>>> f1d4085 (.)
class GenerateFormByFileAction
{
    use QueueableAction;

    /**
     * Genera un form Filament basato su un file di risorsa.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  File  $file  Il file della risorsa Filament
=======
     * @param File $file Il file della risorsa Filament
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @param File $file Il file della risorsa Filament
     *
>>>>>>> 5a14301c (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
     * @return int Numero di input aggiunti
     */
    public function execute(File $file): int
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $file->isFile()) {
            return 0;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
        if (!$file->isFile()) {
            return 0;
        }
        if (!\in_array($file->getExtension(), ['php'], false)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
        if (! $file->isFile()) {
            return 0;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!$file->isFile()) {
            return 0;
        }
        if (!\in_array($file->getExtension(), ['php'], false)) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
            return 0;
        }

        $class_name = Str::replace(base_path('Modules/'), 'Modules/', $file->getPathname());
<<<<<<< HEAD
        Assert::string(
            $class_name = Str::replace('/', '\\', $class_name),
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
        );
        $class_name = Str::substr($class_name, 0, -4);

        // Verifichiamo che la classe esista e sia una risorsa Filament
        Assert::classExists($class_name);

<<<<<<< HEAD
<<<<<<< HEAD
        /** @var object $resourceInstance */
        $resourceInstance = app($class_name);

        // Verifichiamo che il metodo getModel esista
        if (! method_exists($resourceInstance, 'getModel')) {
=======
=======
>>>>>>> 5a14301c (.)
        /** @var Resource $resourceInstance */
        $resourceInstance = app($class_name);

=======
        Assert::string($class_name = Str::replace('/', '\\', $class_name), '['.__LINE__.']['.class_basename($this).']');
        $class_name = Str::substr($class_name, 0, -4);
        
        // Verifichiamo che la classe esista e sia una risorsa Filament
        Assert::classExists($class_name);
        
        /** @var Resource $resourceInstance */
        $resourceInstance = app($class_name);
        
>>>>>>> f1d4085 (.)
        // Verifichiamo che il metodo getModel esista
        if (!method_exists($resourceInstance, 'getModel')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return 0;
        }
<<<<<<< HEAD

        /** @var string $modelClass */
        $modelClass = $resourceInstance->getModel();

        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);

        /** @var Model $modelInstance */
        $modelInstance = app($modelClass);

=======
        
        /** @var string $modelClass */
        $modelClass = $resourceInstance->getModel();
        
        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);
        
        /** @var Model $modelInstance */
        $modelInstance = app($modelClass);
        
>>>>>>> f1d4085 (.)
        // Verifichiamo che il metodo getFillable esista
<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($modelInstance, 'getFillable')) {
=======
        if (!method_exists($modelInstance, 'getFillable')) {
>>>>>>> 5a14301c (.)
=======
        if (!method_exists($modelInstance, 'getFillable')) {
>>>>>>> 5a14301c (.)
            return 0;
        }
<<<<<<< HEAD

        $fillable = $modelInstance->getFillable();

        $reflection_class = new ReflectionClass($class_name);

=======
        
        $fillable = $modelInstance->getFillable();
        
        $reflection_class = new ReflectionClass($class_name);
        
>>>>>>> f1d4085 (.)
        // Verifichiamo che il metodo form esista
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $reflection_class->hasMethod('form')) {
=======
        if (!$reflection_class->hasMethod('form')) {
>>>>>>> 5a14301c (.)
=======
        if (!$reflection_class->hasMethod('form')) {
>>>>>>> 5a14301c (.)
            return 0;
        }
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
        $form_method = $reflection_class->getMethod('form');
        $start_line = $form_method->getStartLine() - 1;
        // it's actually - 1, otherwise you wont get the function() block
        $end_line = $form_method->getEndLine();
        $length = $end_line - $start_line;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($file_name = $form_method->getFileName(), '['.__LINE__.']['.class_basename($this).']');
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
        Assert::string($file_name = $form_method->getFileName(), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::string($file_name = $form_method->getFileName(), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($file_name = $form_method->getFileName(), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
        // $contents= $file->getContents();
        $source = file($file_name);
        $body = implode('', \array_slice($source, $start_line, $length));

        // Otteniamo i metodi della classe risorsa
        $resourceMethods = get_class_methods($resourceInstance);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        \Illuminate\Support\Facades\Log::debug('GenerateFormByFileAction', [
            'line' => __LINE__,
            'method' => __METHOD__,
            'fillable' => $fillable,
        ]);

        // Contiamo gli input aggiunti
        $inputCount = 0;
        foreach ($fillable as $field) {
            if (in_array($field, $resourceMethods)) {
                $inputCount++;
            }
        }

        return $inputCount;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
        Assert::string($file_name = $form_method->getFileName(), '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::string($file_name = $form_method->getFileName(), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
        // $contents= $file->getContents();
        $source = file($file_name);
        $body = implode('', \array_slice($source, $start_line, $length));

        // Otteniamo i metodi della classe risorsa
        $resourceMethods = get_class_methods($resourceInstance);
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
        Assert::string($file_name = $form_method->getFileName(), '['.__LINE__.']['.class_basename($this).']');
        // $contents= $file->getContents();
        $source = file($file_name);
        $body = implode('', \array_slice($source, $start_line, $length));
        
        // Otteniamo i metodi della classe risorsa
        $resourceMethods = get_class_methods($resourceInstance);
        
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
        dd([
            'class_name' => $class_name,
            'model_name' => $modelClass,
            'fillable' => $fillable,
            // 't1'=>app($class_name)->form(app(\Filament\Forms\Form::class)),
            'methods' => $resourceMethods,
            'form_method' => $form_method,
            'form_method_methods' => get_class_methods($form_method),
            'body' => $body,
        ]);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    }

    /**
     * Mostra informazioni di debug su un file.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  File  $file  Il file da analizzare
     */
    public function ddFile(File $file): void
    {
        // Debug information - commented out for production
        /*
=======
=======
>>>>>>> 5a14301c (.)
     * @param File $file Il file da analizzare
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
     * @return void
     */
    public function ddFile(File $file): void
    {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        dd([
            'getRelativePath' => $file->getRelativePath(), // =  ""
            'getRelativePathname' => $file->getRelativePathname(), //  AssenzeResource.php
            'getFilenameWithoutExtension' => $file->getFilenameWithoutExtension(), // AssenzeResource
            // 'getContents' => $file->getContents(),
<<<<<<< HEAD
<<<<<<< HEAD
            'getPath' => $file->getPath(),
            'getFilename' => $file->getFilename(), // = AssenzeResource.php
            'getExtension' => $file->getExtension(), // php
            'getBasename' => $file->getBasename(), // AssenzeResource.php
            'getPathname' => $file->getPathname(),
            'isFile' => $file->isFile(), // true
            'getRealPath' => $file->getRealPath(),
=======
=======
>>>>>>> 5a14301c (.)
            'getPath' => $file->getPath(), // = /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources
            'getFilename' => $file->getFilename(), // = AssenzeResource.php
            'getExtension' => $file->getExtension(), // php
            'getBasename' => $file->getBasename(), // AssenzeResource.php
            'getPathname' => $file->getPathname(), // "/var/www/html/ptvx/laravel/Modules/Progressioni/Filament/resources/AssenzeResource.php
            'isFile' => $file->isFile(), // true
            'getRealPath' => $file->getRealPath(), // /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/resources/AssenzeResource.php
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            // 'getFileInfo' => $file->getFileInfo(),
            // 'getPathInfo' => $file->getPathInfo(),
            'methods' => get_class_methods($file),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
        */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    }
}
