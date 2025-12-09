<?php

/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

// use Filament\Forms\Commands\Concerns\CanGenerateForms; // Non disponibile in Filament v4
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
use Filament\Resources\Resource;
>>>>>>> 5a14301c (.)
=======
use Filament\Resources\Resource;
>>>>>>> 5a14301c (.)
use Filament\Support\Commands\Concerns\CanReadModelSchemas;
// use Filament\Tables\Commands\Concerns\CanGenerateTables; // Non disponibile in Filament v4
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File as LaravelFile;
use Illuminate\Support\Str;
use Modules\Xot\Actions\ModelClass\GetMethodBodyAction;
use Modules\Xot\Actions\String\GetStrBetweenStartsWithAction;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Finder\SplFileInfo as File;
use Webmozart\Assert\Assert;

class GenerateTableColumnsByFileAction
{
    // use CanGenerateForms; // Non disponibile in Filament v4

    // use CanGenerateImporterColumns;
    // use CanGenerateTables; // Non disponibile in Filament v4
    use CanReadModelSchemas;
    use QueueableAction;

    /**
     * Genera colonne per tabelle e form Filament basate su un file di risorsa.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  File  $file  Il file della risorsa Filament
     */
    public function execute(File $file): void
    {
        if (! $file->isFile()) {
            return;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
=======
=======
>>>>>>> 5a14301c (.)
     * @param File $file Il file della risorsa Filament
     *
     * @return void
     */
    public function execute(File $file): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param File $file Il file della risorsa Filament
     *
     * @return void
     */
    public function execute(File $file): void
    {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
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
        if (!$file->isFile()) {
            return;
        }
        if (!\in_array($file->getExtension(), ['php'], false)) {
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
        if (! $file->isFile()) {
            return;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!$file->isFile()) {
            return;
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
            return;
        }
        $filename = $file->getPathname();
        $class_name = Str::replace(base_path('Modules/'), 'Modules/', $filename);
        Assert::string(
            $class_name = Str::replace('/', '\\', $class_name),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 3fbbf1f5 (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
        );
        $class_name = Str::substr($class_name, 0, -4);

        // Verifichiamo che la classe esista
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

        // Verifichiamo che il metodo getModel esista
        if (!method_exists($resourceInstance, 'getModel')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return;
        }

        /** @var string $modelClass */
        $modelClass = $resourceInstance->getModel();

        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);

        /** @var Model $modelInstance */
        $modelInstance = app($modelClass);

        // ------------------- TABLE -------------------
        // *
        $body = app(GetMethodBodyAction::class)->execute($class_name, 'table');
        $body1 = app(GetStrBetweenStartsWithAction::class)->execute($body, '->columns(', '(', ')');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $body_new = '->columns(['.chr(13).'// TODO: Generate table columns'.chr(13).'])';
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
>>>>>>> 5a14301c (.)
=======
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
>>>>>>> 3fbbf1f5 (.)
=======
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
>>>>>>> 5a14301c (.)
        $body_up = Str::of($body)->replace($body1, $body_new)->toString();
        $content_new = Str::of($file->getContents())->replace($body, $body_up)->toString();
        LaravelFile::put($filename, $content_new);
        // -------------------- FORM ------------------------------
        $body = app(GetMethodBodyAction::class)->execute($class_name, 'form');
        $body1 = app(GetStrBetweenStartsWithAction::class)->execute($body, '->schema(', '(', ')');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $body_new = '->schema(['.chr(13).'// TODO: Generate form schema'.chr(13).'])';
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
>>>>>>> 5a14301c (.)
=======
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
>>>>>>> 3fbbf1f5 (.)
=======
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
>>>>>>> 5a14301c (.)
        $body_up = Str::of($body)->replace($body1, $body_new)->toString();
        $content_new = Str::of($file->getContents())->replace($body, $body_up)->toString();
        LaravelFile::put($filename, $content_new);
        // -----------------------------------------------------

        // Verifichiamo che il metodo getFillable esista
        if (method_exists($modelInstance, 'getFillable')) {
            $fillable = $modelInstance->getFillable();

            // Verifichiamo che $fillable sia un array e contenga 'anno'
            if (is_array($fillable) && in_array('anno', $fillable, strict: true)) {
                $body = app(GetMethodBodyAction::class)->execute($class_name, 'table');
                $body1 = app(GetStrBetweenStartsWithAction::class)->execute($body, '->filters(', '(', ')');
                $body_new = "->filters([
                        app(\Modules\Xot\Actions\Filament\Filter\GetYearFilter::class)->execute('anno',intval(date('Y')) - 3,intval(date('Y'))),
                    ],layout: \Filament\Tables\Enums\FiltersLayout::AboveContent)
                    ->persistFiltersInSession()";
                $body_up = Str::of($body)->replace($body1, $body_new)->toString();
                $content_new = Str::of($file->getContents())->replace($body, $body_up)->toString();
                LaravelFile::put($filename, $content_new);
            }
        }

        // */
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
     *
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
