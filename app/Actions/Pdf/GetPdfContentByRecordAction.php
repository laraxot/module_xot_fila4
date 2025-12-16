<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

use Exception;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Log;
=======
<<<<<<< HEAD
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Log;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;

/**
 * Action to generate PDF content as binary data from a specific Eloquent record.
 *
 * This action generates PDF content from an Eloquent model using automatic view
 * convention discovery. It's designed for email attachments, storage operations,
 * and other use cases requiring binary PDF content.
 */
class GetPdfContentByRecordAction
{
    use QueueableAction;

    /**
     * PDF engine configuration.
     */
    public PdfEngineEnum $engine = PdfEngineEnum::SPIPU;

    /**
     * Genera contenuto PDF binario da un record Eloquent.
     *
     * @param  Model  $record  Record Eloquent da cui generare il PDF
     * @param  string|null  $filename  Nome file PDF personalizzato (opzionale)
     * @return string Contenuto binario del PDF
     *
     * @throws Exception Se la vista non esiste o si verificano errori di generazione
     */
<<<<<<< HEAD
    public function execute(Model $record, ?string $filename = null): string
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
     * @param Model       $record   Record Eloquent da cui generare il PDF
     * @param string|null $filename Nome file PDF personalizzato (opzionale)
     *
     * @throws Exception Se la vista non esiste o si verificano errori di generazione
     *
     * @return string Contenuto binario del PDF
     */
    public function execute(Model $record, null|string $filename = null): string
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $record, ?string $filename = null): string
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $record, null|string $filename = null): string
=======
>>>>>>> 2f3197ab (.)
    public function execute(Model $record, ?string $filename = null): string
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
    public function execute(Model $record, null|string $filename = null): string
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ce6fc085 (.)
    public function execute(Model $record, ?string $filename = null): string
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function execute(Model $record, null|string $filename = null): string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function execute(Model $record, ?string $filename = null): string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(Model $record, null|string $filename = null): string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(Model $record, ?string $filename = null): string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, ?string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, ?string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
<<<<<<< HEAD
    public function execute(Model $record, ?string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, ?string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, ?string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, ?string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function execute(Model $record, ?string $filename = null): string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function execute(Model $record, null|string $filename = null): string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $record, null|string $filename = null): string
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
    public function execute(Model $record, null|string $filename = null): string
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public function execute(Model $record, null|string $filename = null): string
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        // Generate view name following Laraxot conventions
        $viewName = $this->generateViewName($record);

        // Prepare view parameters
        $viewParams = $this->prepareViewParameters($record, $viewName);

        // Validate view existence
<<<<<<< HEAD
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".$record::class);
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
<<<<<<< HEAD
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".$record::class);
=======
>>>>>>> 2f3197ab (.)
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
=======
>>>>>>> ed734516 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 5cf46378 (.)
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
<<<<<<< HEAD
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 7468a7d2 (.)
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
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
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".$record::class);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        }

        // Render view to HTML
        $html = view($viewName, $viewParams)->render();

        // Validate HTML content
        Assert::string($html, 'Generated HTML content must be a valid string');

        if (empty(trim($html))) {
            throw new Exception("Generated HTML content is empty for view '{$viewName}'");
        }

        // Generate filename if not provided
<<<<<<< HEAD
        if ($filename === null) {
=======
<<<<<<< HEAD
        if (null === $filename) {
        if (null === $filename) {
        if (null === $filename) {
        if (null === $filename) {
        if (null === $filename) {
=======
        if ($filename === null) {
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
            $filename = $this->generateFilename($record);
        }

        // Generate PDF using spipu/html2pdf
        return $this->generatePdfContent($html, $filename);
    }

    /**
     * Metodo di convenienza per generare PDF da record con nome file personalizzato.
     *
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent
     * @param  string  $filename  Nome file personalizzato
=======
<<<<<<< HEAD
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
=======
     * @param  Model  $record  Record Eloquent
     * @param  string  $filename  Nome file personalizzato
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * @return string Contenuto binario del PDF
     */
    public function fromRecord(Model $record, string $filename): string
    {
        return $this->execute($record, $filename);
    }

    /**
     * Genera il nome della vista seguendo le convenzioni Laraxot.
     *
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent
=======
<<<<<<< HEAD
     * @param Model $record Record Eloquent
     *
     * @param Model $record Record Eloquent
     *
     * @param Model $record Record Eloquent
     *
     * @param Model $record Record Eloquent
     *
     * @param Model $record Record Eloquent
     *
=======
     * @param  Model  $record  Record Eloquent
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * @return string Nome della vista nel formato {module}::{model-kebab}.show.pdf
     */
    protected function generateViewName(Model $record): string
    {
        $modelClass = $record::class;
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

<<<<<<< HEAD
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
        $modelClass = get_class($record);
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
=======
>>>>>>> 2f3197ab (.)
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ce6fc085 (.)
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
<<<<<<< HEAD
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
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
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    /**
     * Prepara i parametri standard per la vista.
     *
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent
     * @param  string  $viewName  Nome della vista
=======
<<<<<<< HEAD
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
=======
     * @param  Model  $record  Record Eloquent
     * @param  string  $viewName  Nome della vista
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * @return array<string, mixed> Parametri per la vista
     */
    protected function prepareViewParameters(Model $record, string $viewName): array
    {
<<<<<<< HEAD
        $modelClass = $record::class;
=======
<<<<<<< HEAD
        $modelClass = get_class($record);
        $modelClass = get_class($record);
        $modelClass = get_class($record);
        $modelClass = get_class($record);
        $modelClass = get_class($record);
=======
        $modelClass = $record::class;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

        $params = [
            'view' => $viewName,
            'row' => $record,
<<<<<<< HEAD
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
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
<<<<<<< HEAD
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
<<<<<<< HEAD
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
<<<<<<< HEAD
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
=======
>>>>>>> 5a14301c (.)
=======
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
>>>>>>> 5a14301c (.)
=======
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
>>>>>>> 551c768c4 (.)
        ];

        // Add specific relationship data if available
        if (
            method_exists($record, 'valutatore') &&
                $record->relationLoaded('valutatore') &&
                isset($record->valutatore)
        ) {
            $valutatore = $record->valutatore;
            if (is_object($valutatore) && isset($valutatore->nome_diri)) {
                $params['firma'] = $valutatore->nome_diri;
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
>>>>>>> 38b70c7ba (.)
        ];

        // Add specific relationship data if available
        if (
            method_exists($record, 'valutatore') &&
                $record->relationLoaded('valutatore') &&
                isset($record->valutatore)
        ) {
            $valutatore = $record->valutatore;
            if (is_object($valutatore) && isset($valutatore->nome_diri)) {
                $params['firma'] = $valutatore->nome_diri;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
        ];

        // Add specific relationship data if available
        if (method_exists($record, 'valutatore') && $record->relationLoaded('valutatore')) {
            $valutatore = $record->valutatore;
            if (null !== $valutatore) {
                $params['firma'] = $valutatore->nome_diri ?? null;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
            }
        }

        return $params;
    }

    /**
     * Genera nome file automatico basato sul record.
     *
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent
=======
<<<<<<< HEAD
     * @param Model $record Record Eloquent
     *
     * @param Model $record Record Eloquent
     *
     * @param Model $record Record Eloquent
     *
     * @param Model $record Record Eloquent
     *
     * @param Model $record Record Eloquent
     *
=======
     * @param  Model  $record  Record Eloquent
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * @return string Nome file generato
     */
    protected function generateFilename(Model $record): string
    {
<<<<<<< HEAD
        $modelName = class_basename($record::class);
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName).'_'.(string) ($recordKey ?? 'unknown');
=======
<<<<<<< HEAD
        $modelName = class_basename(get_class($record));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
=======
        $modelName = class_basename($record::class);
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName).'_'.(string) ($recordKey ?? 'unknown');
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        // Enhanced filename for records with identification fields
        if (isset($record->matr, $record->cognome, $record->nome)) {
            $matr = is_string($record->matr) ? $record->matr : 'unknown';
            $cognome = is_string($record->cognome) ? $record->cognome : 'unknown';
            $nome = is_string($record->nome) ? $record->nome : 'unknown';

<<<<<<< HEAD
            return 'scheda_'.(string) ($recordKey ?? 'unknown').'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
            return 'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
            return 'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return 'scheda_'.(string) ($recordKey ?? 'unknown').'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
=======
            return (
                'scheda_' . ((string) ($recordKey ?? 'unknown')) . '_' . $matr . '_' . $cognome . '_' . $nome . '.pdf'
            );
>>>>>>> 5a14301c (.)
<<<<<<< HEAD
=======
=======
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
>>>>>>> 53d6a6ba (.)
=======
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
=======
            return 'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            return 'scheda_'.(string) ($recordKey ?? 'unknown').'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        }

        // Enhanced filename for records with name field
        if (isset($record->name) && is_string($record->name)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
        return $baseFilename . '.pdf';
<<<<<<< HEAD
=======
        $baseFilename = mb_strtolower($modelName).'_'.$record->getKey();

        // Enhanced filename for records with identification fields
        if (isset($record->matr) && isset($record->cognome) && isset($record->nome)) {
            return 'scheda_'.$record->getKey().'_'.$record->matr.'_'.
                   $record->cognome.'_'.$record->nome.'.pdf';
        }

        // Enhanced filename for records with name field
        if (isset($record->name)) {
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
            return $baseFilename.'_'.Str::slug($record->name).'.pdf';
        }

        // Default filename pattern
        return $baseFilename.'.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
        return $baseFilename . '.pdf';
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
        $baseFilename = mb_strtolower($modelName).'_'.$record->getKey();
=======
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
>>>>>>> b93ef594b4 (.)
=======
        $modelName = class_basename(get_class($record));
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
>>>>>>> 5a14301c (.)
=======
        $modelName = class_basename(get_class($record));
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
>>>>>>> 5a14301c (.)

        // Enhanced filename for records with identification fields
        if (isset($record->matr, $record->cognome, $record->nome)) {
            $matr = is_string($record->matr) ? $record->matr : 'unknown';
            $cognome = is_string($record->cognome) ? $record->cognome : 'unknown';
            $nome = is_string($record->nome) ? $record->nome : 'unknown';

            return (
                'scheda_' . ((string) ($recordKey ?? 'unknown')) . '_' . $matr . '_' . $cognome . '_' . $nome . '.pdf'
            );
>>>>>>> 7468a7d2 (.)
        }

        // Enhanced filename for records with name field
        if (isset($record->name) && is_string($record->name)) {
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
        return $baseFilename . '.pdf';
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
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return $baseFilename . '.pdf';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        $baseFilename = mb_strtolower($modelName).'_'.$record->getKey();

        // Enhanced filename for records with identification fields
        if (isset($record->matr) && isset($record->cognome) && isset($record->nome)) {
            return 'scheda_'.$record->getKey().'_'.$record->matr.'_'.
                   $record->cognome.'_'.$record->nome.'.pdf';
        }

        // Enhanced filename for records with name field
        if (isset($record->name)) {
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 38b70c7ba (.)
            return $baseFilename.'_'.Str::slug($record->name).'.pdf';
        }

        // Default filename pattern
        return $baseFilename.'.pdf';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
        return $baseFilename . '.pdf';
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
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
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 2f3197ab (.)
        $baseFilename = mb_strtolower($modelName).'_'.$record->getKey();
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
        $modelName = class_basename(get_class($record));
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
        $modelName = class_basename(get_class($record));
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
        $modelName = class_basename(get_class($record));
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
        $modelName = class_basename(get_class($record));
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
        $modelName = class_basename(get_class($record));
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));

        // Enhanced filename for records with identification fields
        if (isset($record->matr, $record->cognome, $record->nome)) {
            $matr = is_string($record->matr) ? $record->matr : 'unknown';
            $cognome = is_string($record->cognome) ? $record->cognome : 'unknown';
            $nome = is_string($record->nome) ? $record->nome : 'unknown';

            return (
                'scheda_' . ((string) ($recordKey ?? 'unknown')) . '_' . $matr . '_' . $cognome . '_' . $nome . '.pdf'
            );
        }

        // Enhanced filename for records with name field
        if (isset($record->name) && is_string($record->name)) {
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
        return $baseFilename . '.pdf';
        return $baseFilename . '.pdf';
        $baseFilename = mb_strtolower($modelName).'_'.$record->getKey();

        // Enhanced filename for records with identification fields
        if (isset($record->matr) && isset($record->cognome) && isset($record->nome)) {
            return 'scheda_'.$record->getKey().'_'.$record->matr.'_'.
                   $record->cognome.'_'.$record->nome.'.pdf';
        }

        // Enhanced filename for records with name field
        if (isset($record->name)) {
            return $baseFilename.'_'.Str::slug($record->name).'.pdf';
        }

        // Default filename pattern
        return $baseFilename.'.pdf';
        $baseFilename = mb_strtolower($modelName).'_'.$record->getKey();
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));

        // Enhanced filename for records with identification fields
        if (isset($record->matr, $record->cognome, $record->nome)) {
            $matr = is_string($record->matr) ? $record->matr : 'unknown';
            $cognome = is_string($record->cognome) ? $record->cognome : 'unknown';
            $nome = is_string($record->nome) ? $record->nome : 'unknown';

            return (
                'scheda_' . ((string) ($recordKey ?? 'unknown')) . '_' . $matr . '_' . $cognome . '_' . $nome . '.pdf'
            );
        }

        // Enhanced filename for records with name field
        if (isset($record->name) && is_string($record->name)) {
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
        return $baseFilename . '.pdf';
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ce6fc085 (.)
        return $baseFilename . '.pdf';
        return $baseFilename . '.pdf';
        return $baseFilename . '.pdf';
        return $baseFilename . '.pdf';
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
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
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    /**
     * Genera contenuto PDF binario utilizzando spipu/html2pdf.
     *
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome file per riferimento
     * @return string Contenuto binario del PDF
     *
     * @throws Exception Se si verificano errori durante la generazione PDF
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @param string $html     Contenuto HTML da convertire
     * @param string $filename Nome file per riferimento
     *
     * @throws Exception Se si verificano errori durante la generazione PDF
     *
     * @return string Contenuto binario del PDF
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     */
    protected function generatePdfContent(string $html, string $filename): string
    {
        try {
            // Create Html2Pdf instance with standard configuration
            $html2pdf = new Html2Pdf(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
                orientation: 'P', // Portrait
                format: 'A4', // A4 format
                lang: 'it', // Italian language
                unicode: true, // Unicode support
                encoding: 'UTF-8', // UTF-8 encoding
                margins: [10, 10, 10, 10], // 10mm margins on all sides
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
                orientation: 'P',        // Portrait
                format: 'A4',           // A4 format
                lang: 'it',             // Italian language
                unicode: true,          // Unicode support
                encoding: 'UTF-8',      // UTF-8 encoding
                margins: [10, 10, 10, 10] // 10mm margins on all sides
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
            );

            // Configure additional settings
            $html2pdf->setTestTdInOnePage(false);

            // Write HTML content to PDF
            $html2pdf->writeHTML($html);

            // Generate and return PDF content as binary string
            return $html2pdf->output('', 'S'); // 'S' returns string content
        } catch (Exception $e) {
            Log::error('PDF generation failed in GetPdfContentByRecordAction', [
                'filename' => $filename,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'record_type' => get_class($record ?? null),
                'record_id' => $record->getKey() ?? null,
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

<<<<<<< HEAD
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
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
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 5a14301c (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 3fbbf1f5 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 17684f52 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 17684f52 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
=======
>>>>>>> ab8cc3f3 (.)
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
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
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
<<<<<<< HEAD
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
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
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
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
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> 53d6a6ba (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        }
    }
}
