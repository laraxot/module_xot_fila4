<?php

/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

// use Filament\Forms\Commands\Concerns\CanGenerateForms; // Non disponibile in Filament v4
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Resources\Resource;
use Filament\Resources\Resource;
use Filament\Resources\Resource;
use Filament\Resources\Resource;
use Filament\Resources\Resource;
use Filament\Resources\Resource;
use Filament\Support\Commands\Concerns\CanReadModelSchemas;
// use Filament\Tables\Commands\Concerns\CanGenerateTables; // Non disponibile in Filament v4
use Filament\Forms\Commands\Concerns\CanGenerateForms;
use Filament\Resources\Resource;
use Filament\Support\Commands\Concerns\CanReadModelSchemas;
use Filament\Tables\Commands\Concerns\CanGenerateTables;
// use Filament\Forms\Commands\Concerns\CanGenerateForms; // Non disponibile in Filament v4
use Filament\Resources\Resource;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
     * @param  File  $file  Il file della risorsa Filament
     */
    public function execute(File $file): void
    {
        if (! $file->isFile()) {
            return;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
<<<<<<< HEAD
<<<<<<< HEAD
     * @param File $file Il file della risorsa Filament
     *
     * 
     * @return void
     */
    public function execute(File $file): void
    {
     * @param File $file Il file della risorsa Filament
     *
     * @return void
     */
    public function execute(File $file): void
    {
        if (!$file->isFile()) {
            return;
        }
        if (!\in_array($file->getExtension(), ['php'], false)) {
        if (! $file->isFile()) {
            return;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
        if (!$file->isFile()) {
            return;
        }
        if (!\in_array($file->getExtension(), ['php'], false)) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            return;
        }
        $filename = $file->getPathname();
        $class_name = Str::replace(base_path('Modules/'), 'Modules/', $filename);
        Assert::string(
            $class_name = Str::replace('/', '\\', $class_name),
<<<<<<< HEAD
<<<<<<< HEAD
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
=======
            '['.__LINE__.']['.class_basename($this).']',
>>>>>>> 551c768c4 (.)
=======
            '['.__LINE__.']['.class_basename($this).']',
>>>>>>> 414a4ffcb (.)
        );
        $class_name = Str::substr($class_name, 0, -4);

        // Verifichiamo che la classe esista
        Assert::classExists($class_name);

        /** @var object $resourceInstance */
        $resourceInstance = app($class_name);

        // Verifichiamo che il metodo getModel esista
        if (! method_exists($resourceInstance, 'getModel')) {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Resource $resourceInstance */
        $resourceInstance = app($class_name);

        // Verifichiamo che il metodo getModel esista
        if (!method_exists($resourceInstance, 'getModel')) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
        $body_up = Str::of($body)->replace($body1, $body_new)->toString();
        $body_new = '->columns(['.chr(13).$this->getResourceTableColumns($modelClass).chr(13).'])';
        $body_up = Str::of($body)
            ->replace($body1, $body_new)
            ->toString();
        $body_new = '->columns([' . chr(13) . '// TODO: Generate table columns' . chr(13) . '])';
=======
        $body_new = '->columns(['.chr(13).'// TODO: Generate table columns'.chr(13).'])';
>>>>>>> 551c768c4 (.)
=======
        $body_new = '->columns(['.chr(13).'// TODO: Generate table columns'.chr(13).'])';
>>>>>>> 414a4ffcb (.)
        $body_up = Str::of($body)->replace($body1, $body_new)->toString();
        $content_new = Str::of($file->getContents())->replace($body, $body_up)->toString();
        LaravelFile::put($filename, $content_new);
        // -------------------- FORM ------------------------------
        $body = app(GetMethodBodyAction::class)->execute($class_name, 'form');
        $body1 = app(GetStrBetweenStartsWithAction::class)->execute($body, '->schema(', '(', ')');
<<<<<<< HEAD
<<<<<<< HEAD
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
        $body_up = Str::of($body)->replace($body1, $body_new)->toString();
        $body_new = '->schema(['.chr(13).$this->getResourceFormSchema($modelClass).chr(13).'])';
        $body_up = Str::of($body)
            ->replace($body1, $body_new)
            ->toString();
        $body_new = '->schema([' . chr(13) . '// TODO: Generate form schema' . chr(13) . '])';
=======
        $body_new = '->schema(['.chr(13).'// TODO: Generate form schema'.chr(13).'])';
>>>>>>> 551c768c4 (.)
=======
        $body_new = '->schema(['.chr(13).'// TODO: Generate form schema'.chr(13).'])';
>>>>>>> 414a4ffcb (.)
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
     * @param  File  $file  Il file da analizzare
     */
    public function ddFile(File $file): void
    {
        // Debug information - commented out for production
        /*
<<<<<<< HEAD
<<<<<<< HEAD
     * @param File $file Il file da analizzare
     *
     * 
     * @return void
     */
    public function ddFile(File $file): void
    {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        dd([
            'getRelativePath' => $file->getRelativePath(), // =  ""
            'getRelativePathname' => $file->getRelativePathname(), //  AssenzeResource.php
            'getFilenameWithoutExtension' => $file->getFilenameWithoutExtension(), // AssenzeResource
            // 'getContents' => $file->getContents(),
            'getPath' => $file->getPath(),
            'getFilename' => $file->getFilename(), // = AssenzeResource.php
            'getExtension' => $file->getExtension(), // php
            'getBasename' => $file->getBasename(), // AssenzeResource.php
            'getPathname' => $file->getPathname(),
            'isFile' => $file->isFile(), // true
            'getRealPath' => $file->getRealPath(),
<<<<<<< HEAD
<<<<<<< HEAD
            'getPath' => $file->getPath(), // = /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources
            'getFilename' => $file->getFilename(), // = AssenzeResource.php
            'getExtension' => $file->getExtension(), // php
            'getBasename' => $file->getBasename(), // AssenzeResource.php
            'getPathname' => $file->getPathname(), // "/var/www/html/ptvx/laravel/Modules/Progressioni/Filament/resources/AssenzeResource.php
            'isFile' => $file->isFile(), // true
            'getRealPath' => $file->getRealPath(), // /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/resources/AssenzeResource.php
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            // 'getFileInfo' => $file->getFileInfo(),
            // 'getPathInfo' => $file->getPathInfo(),
            'methods' => get_class_methods($file),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
        */
>>>>>>> 551c768c4 (.)
=======
        */
>>>>>>> 414a4ffcb (.)
    }
}
