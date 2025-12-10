<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Log;
=======
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
=======
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
=======
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
=======
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
=======
use Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent da cui generare il PDF
     * @param  string|null  $filename  Nome file PDF personalizzato (opzionale)
     * @return string Contenuto binario del PDF
     *
     * @throws Exception Se la vista non esiste o si verificano errori di generazione
     */
    public function execute(Model $record, ?string $filename = null): string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param Model       $record   Record Eloquent da cui generare il PDF
     * @param string|null $filename Nome file PDF personalizzato (opzionale)
     *
     * @throws Exception Se la vista non esiste o si verificano errori di generazione
     *
     * @return string Contenuto binario del PDF
     */
    public function execute(Model $record, null|string $filename = null): string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
    public function execute(Model $record, null|string $filename = null): string
=======
    public function execute(Model $record, ?string $filename = null): string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
    public function execute(Model $record, null|string $filename = null): string
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function execute(Model $record, ?string $filename = null): string
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
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(Model $record, ?string $filename = null): string
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $record, null|string $filename = null): string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(Model $record, ?string $filename = null): string
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function execute(Model $record, null|string $filename = null): string
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
    {
        // Generate view name following Laraxot conventions
        $viewName = $this->generateViewName($record);

        // Prepare view parameters
        $viewParams = $this->prepareViewParameters($record, $viewName);

        // Validate view existence
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 5a14301c (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 3fbbf1f5 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
>>>>>>> a12f125f4a (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> ca9324a4 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 7131bd09 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> ed734516 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> ed734516 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> ed734516 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        if (!view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model " . get_class($record));
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
>>>>>>> 71586de2 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
>>>>>>> 53d6a6ba (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($filename === null) {
=======
        if (null === $filename) {
>>>>>>> 5a14301c (.)
=======
        if (null === $filename) {
>>>>>>> 5a14301c (.)
=======
        if (null === $filename) {
>>>>>>> 5a14301c (.)
=======
        if (null === $filename) {
>>>>>>> 5a14301c (.)
=======
        if (null === $filename) {
>>>>>>> 5a14301c (.)
            $filename = $this->generateFilename($record);
        }

        // Generate PDF using spipu/html2pdf
        return $this->generatePdfContent($html, $filename);
    }

    /**
     * Metodo di convenienza per generare PDF da record con nome file personalizzato.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent
     * @param  string  $filename  Nome file personalizzato
=======
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
     * @return string Nome della vista nel formato {module}::{model-kebab}.show.pdf
     */
    protected function generateViewName(Model $record): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $modelClass = $record::class;
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $modelClass = get_class($record);
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
=======
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
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
>>>>>>> 5a14301c (.)
=======
=======
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> f1d4085 (.)
=======
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
    }

    /**
     * Prepara i parametri standard per la vista.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent
     * @param  string  $viewName  Nome della vista
=======
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
>>>>>>> 5a14301c (.)
     * @return array<string, mixed> Parametri per la vista
     */
    protected function prepareViewParameters(Model $record, string $viewName): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $modelClass = $record::class;
=======
        $modelClass = get_class($record);
>>>>>>> 5a14301c (.)
=======
        $modelClass = get_class($record);
>>>>>>> 5a14301c (.)
=======
        $modelClass = get_class($record);
>>>>>>> 5a14301c (.)
=======
        $modelClass = get_class($record);
>>>>>>> 5a14301c (.)
=======
        $modelClass = get_class($record);
>>>>>>> 5a14301c (.)
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

        $params = [
            'view' => $viewName,
            'row' => $record,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
>>>>>>> 5a14301c (.)
=======
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
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
=======
>>>>>>> 6dcebf8a (.)
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
=======
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
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
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
>>>>>>> 71586de2 (.)
=======
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
>>>>>>> 5a14301c (.)
=======
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
>>>>>>> 53d6a6ba (.)
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
            }
        }

        return $params;
    }

    /**
     * Genera nome file automatico basato sul record.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $record  Record Eloquent
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
=======
     * @param Model $record Record Eloquent
     *
>>>>>>> 5a14301c (.)
     * @return string Nome file generato
     */
    protected function generateFilename(Model $record): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $modelName = class_basename($record::class);
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName).'_'.(string) ($recordKey ?? 'unknown');
=======
=======
>>>>>>> 3fbbf1f5 (.)
        $modelName = class_basename(get_class($record));
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
>>>>>>> 5a14301c (.)

        // Enhanced filename for records with identification fields
        if (isset($record->matr, $record->cognome, $record->nome)) {
            $matr = is_string($record->matr) ? $record->matr : 'unknown';
            $cognome = is_string($record->cognome) ? $record->cognome : 'unknown';
            $nome = is_string($record->nome) ? $record->nome : 'unknown';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return 'scheda_'.(string) ($recordKey ?? 'unknown').'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
=======
            return (
                'scheda_' . ((string) ($recordKey ?? 'unknown')) . '_' . $matr . '_' . $cognome . '_' . $nome . '.pdf'
            );
>>>>>>> 5a14301c (.)
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
=======
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
>>>>>>> 71586de2 (.)
=======
            return
                'scheda_'.((string) ($recordKey ?? 'unknown')).'_'.$matr.'_'.$cognome.'_'.$nome.'.pdf';
>>>>>>> 53d6a6ba (.)
        }

        // Enhanced filename for records with name field
        if (isset($record->name) && is_string($record->name)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
        return $baseFilename . '.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
            return $baseFilename.'_'.Str::slug($record->name).'.pdf';
        }

        // Default filename pattern
        return $baseFilename.'.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        }

        // Enhanced filename for records with name field
        if (isset($record->name) && is_string($record->name)) {
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $baseFilename.'.pdf';
>>>>>>> a12f125f4a (.)
=======
        return $baseFilename . '.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $baseFilename = mb_strtolower($modelName).'_'.$record->getKey();

        // Enhanced filename for records with identification fields
        if (isset($record->matr) && isset($record->cognome) && isset($record->nome)) {
            return 'scheda_'.$record->getKey().'_'.$record->matr.'_'.
                   $record->cognome.'_'.$record->nome.'.pdf';
        }

        // Enhanced filename for records with name field
        if (isset($record->name)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
            return $baseFilename.'_'.Str::slug($record->name).'.pdf';
        }

        // Default filename pattern
        return $baseFilename.'.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
        $baseFilename = mb_strtolower($modelName).'_'.$record->getKey();
=======
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));
>>>>>>> b93ef594b4 (.)

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
<<<<<<< HEAD
        return $baseFilename.'.pdf';
>>>>>>> a12f125f4a (.)
=======
        return $baseFilename . '.pdf';
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return $baseFilename . '.pdf';
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
        return $baseFilename . '.pdf';
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
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
=======
        return $baseFilename . '.pdf';
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
    }

    /**
     * Genera contenuto PDF binario utilizzando spipu/html2pdf.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome file per riferimento
     * @return string Contenuto binario del PDF
     *
     * @throws Exception Se si verificano errori durante la generazione PDF
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param string $html     Contenuto HTML da convertire
     * @param string $filename Nome file per riferimento
     *
     * @throws Exception Se si verificano errori durante la generazione PDF
     *
     * @return string Contenuto binario del PDF
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    protected function generatePdfContent(string $html, string $filename): string
    {
        try {
            // Create Html2Pdf instance with standard configuration
            $html2pdf = new Html2Pdf(
                orientation: 'P', // Portrait
                format: 'A4', // A4 format
                lang: 'it', // Italian language
                unicode: true, // Unicode support
                encoding: 'UTF-8', // UTF-8 encoding
                margins: [10, 10, 10, 10], // 10mm margins on all sides
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
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
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
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
>>>>>>> 17684f52 (.)
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 9db27d12 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 5a14301c (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 5a14301c (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> f1d4085 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> 71586de2 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 5a14301c (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
            throw new Exception('Failed to generate PDF content: ' . $e->getMessage(), 0, $e);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
>>>>>>> 53d6a6ba (.)
        }
    }
}
