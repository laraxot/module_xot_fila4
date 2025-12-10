<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

use Exception;
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
    public function execute(Model $record, ?string $filename = null): string
     * @param Model       $record   Record Eloquent da cui generare il PDF
     * @param string|null $filename Nome file PDF personalizzato (opzionale)
     *
     * @throws Exception Se la vista non esiste o si verificano errori di generazione
     *
     * @return string Contenuto binario del PDF
     */
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $record, null|string $filename = null): string
=======
>>>>>>> 2f3197ab (.)
    public function execute(Model $record, ?string $filename = null): string
    public function execute(Model $record, null|string $filename = null): string
    public function execute(Model $record, ?string $filename = null): string
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
>>>>>>> 2f3197ab (.)
    {
        // Generate view name following Laraxot conventions
        $viewName = $this->generateViewName($record);

        // Prepare view parameters
        $viewParams = $this->prepareViewParameters($record, $viewName);

        // Validate view existence
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
        if (! view()->exists($viewName)) {
            throw new Exception("View '{$viewName}' not found for model ".get_class($record));
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
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
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
        }

        // Render view to HTML
        $html = view($viewName, $viewParams)->render();

        // Validate HTML content
        Assert::string($html, 'Generated HTML content must be a valid string');

        if (empty(trim($html))) {
            throw new Exception("Generated HTML content is empty for view '{$viewName}'");
        }

        // Generate filename if not provided
        if (null === $filename) {
        if (null === $filename) {
        if (null === $filename) {
        if (null === $filename) {
        if (null === $filename) {
            $filename = $this->generateFilename($record);
        }

        // Generate PDF using spipu/html2pdf
        return $this->generatePdfContent($html, $filename);
    }

    /**
     * Metodo di convenienza per generare PDF da record con nome file personalizzato.
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
     * @param Model  $record   Record Eloquent
     * @param string $filename Nome file personalizzato
     *
     * @return string Contenuto binario del PDF
     */
    public function fromRecord(Model $record, string $filename): string
    {
        return $this->execute($record, $filename);
    }

    /**
     * Genera il nome della vista seguendo le convenzioni Laraxot.
     *
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
     * @return string Nome della vista nel formato {module}::{model-kebab}.show.pdf
     */
    protected function generateViewName(Model $record): string
    {
        $modelClass = $record::class;
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
        $modelClass = get_class($record);
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
=======
>>>>>>> 2f3197ab (.)
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
        return mb_strtolower($module) . '::' . Str::kebab($modelName) . '.show.pdf';
        return mb_strtolower($module).'::'.Str::kebab($modelName).'.show.pdf';
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
>>>>>>> 2f3197ab (.)
    }

    /**
     * Prepara i parametri standard per la vista.
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
     * @param Model  $record   Record Eloquent
     * @param string $viewName Nome della vista
     *
     * @return array<string, mixed> Parametri per la vista
     */
    protected function prepareViewParameters(Model $record, string $viewName): array
    {
        $modelClass = get_class($record);
        $modelClass = get_class($record);
        $modelClass = get_class($record);
        $modelClass = get_class($record);
        $modelClass = get_class($record);
        $modelName = class_basename($modelClass);
        $module = Str::between($modelClass, 'Modules\\', '\\Models');

        $params = [
            'view' => $viewName,
            'row' => $record,
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
>>>>>>> 2f3197ab (.)
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
            'transKey' => mb_strtolower($module) . '::' . Str::plural(mb_strtolower($modelName)) . '.fields',
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
=======
            'transKey' => mb_strtolower($module).'::'.Str::plural(mb_strtolower($modelName)).'.fields',
        ];

        // Add specific relationship data if available
        if (method_exists($record, 'valutatore') && $record->relationLoaded('valutatore')) {
            $valutatore = $record->valutatore;
            if (null !== $valutatore) {
                $params['firma'] = $valutatore->nome_diri ?? null;
>>>>>>> f1d4085 (.)
            }
        }

        return $params;
    }

    /**
     * Genera nome file automatico basato sul record.
     *
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
     * @return string Nome file generato
     */
    protected function generateFilename(Model $record): string
    {
        $modelName = class_basename(get_class($record));
<<<<<<< HEAD
        $recordKey = $record->getKey();
        $baseFilename = mb_strtolower($modelName) . '_' . ((string) ($recordKey ?? 'unknown'));

        // Enhanced filename for records with identification fields
        if (isset($record->matr, $record->cognome, $record->nome)) {
            $matr = is_string($record->matr) ? $record->matr : 'unknown';
            $cognome = is_string($record->cognome) ? $record->cognome : 'unknown';
            $nome = is_string($record->nome) ? $record->nome : 'unknown';

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
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
            return $baseFilename . '_' . Str::slug($record->name) . '.pdf';
        }

        // Default filename pattern
        return $baseFilename . '.pdf';
=======
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
>>>>>>> 2f3197ab (.)
    }

    /**
     * Genera contenuto PDF binario utilizzando spipu/html2pdf.
     *
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome file per riferimento
     * @return string Contenuto binario del PDF
     *
     * @throws Exception Se si verificano errori durante la generazione PDF
     * @param string $html     Contenuto HTML da convertire
     * @param string $filename Nome file per riferimento
     *
     * @throws Exception Se si verificano errori durante la generazione PDF
     *
     * @return string Contenuto binario del PDF
     */
    protected function generatePdfContent(string $html, string $filename): string
    {
        try {
            // Create Html2Pdf instance with standard configuration
            $html2pdf = new Html2Pdf(
<<<<<<< HEAD
                orientation: 'P', // Portrait
                format: 'A4', // A4 format
                lang: 'it', // Italian language
                unicode: true, // Unicode support
                encoding: 'UTF-8', // UTF-8 encoding
                margins: [10, 10, 10, 10], // 10mm margins on all sides
=======
                orientation: 'P',        // Portrait
                format: 'A4',           // A4 format
                lang: 'it',             // Italian language
                unicode: true,          // Unicode support
                encoding: 'UTF-8',      // UTF-8 encoding
                margins: [10, 10, 10, 10] // 10mm margins on all sides
>>>>>>> f1d4085 (.)
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
                'record_type' => get_class($record ?? null),
                'record_id' => $record->getKey() ?? null,
>>>>>>> f1d4085 (.)
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

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
            throw new Exception('Failed to generate PDF content: '.$e->getMessage(), 0, $e);
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
>>>>>>> 2f3197ab (.)
        }
    }
}
