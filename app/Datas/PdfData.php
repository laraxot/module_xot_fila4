<?php

/*
 * @see https://github.com/masterix21/laravel-html2pdf/blob/master/src/PDF.php
 */

declare(strict_types=1);

namespace Modules\Xot\Datas;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Exception;
>>>>>>> 414a4ffcb (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Xot\Enums\PdfEngineEnum;
use Spatie\LaravelData\Data;
<<<<<<< HEAD
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Enums\Orientation;
use Spatie\LaravelPdf\Enums\Unit;
use Spatie\LaravelPdf\Facades\Pdf;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Database\Eloquent\Model;
=======
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
>>>>>>> 551c768c4 (.)
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Xot\Enums\PdfEngineEnum;
use Spatie\LaravelData\Data;
<<<<<<< HEAD
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Enums\Orientation;
use Spatie\LaravelPdf\Enums\Unit;
use Spatie\LaravelPdf\Facades\Pdf;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Spipu\Html2Pdf\Exception\HtmlParsingException;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
use Spatie\LaravelData\Data;
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Spatie\LaravelPdf\Enums\Unit;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\LaravelPdf\Enums\Format;
use Modules\Xot\Enums\PdfEngineEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Xot\Enums\PdfEngineEnum;
use Spatie\LaravelData\Data;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Enums\Orientation;
use Spatie\LaravelPdf\Enums\Unit;
use Spatie\LaravelPdf\Facades\Pdf;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelPdf\Enums\Orientation;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

/**
 * Undocumented class.
 */
class PdfData extends Data
{
    /**
     * @var non-falsy-string
     */
    public string $filename = 'my_doc.pdf';

    public string $disk = 'cache';

    public string $out = 'download';

    // -- per costruttore
    public string $orientation = 'P';

    public string $format = 'A4';

    public string $lang = 'it';

    public bool $unicode = true;

    public string $encoding = 'UTF-8';

    public array $margins = [5, 5, 5, 8];

    public bool $pdfa = false;

    public string $dest = 'F';
    /*
     * Dest can be :
     * I : send the file inline to the browser (default). The plug-in is used if available. The name given by name is used when one selects the "Save as" option on the link generating the PDF.
     * D : send to the browser and force a file download with the name given by name.
     * F : save to a local server file with the name given by name.
     * S : return the document as a string (name is ignored).
     * FI: equivalent to F + I option
     * FD: equivalent to F + D option
     * E : return the document as base64 mime multi-part email attachment
     */

    // public static function make(Model $model = null, string $html = null): self

    public PdfEngineEnum $engine = PdfEngineEnum::SPIPU;

    public string $html = '';

    public static function make(): self
    {
        return self::from([]);
    }

    public function getPath(): string
    {
        return Storage::disk($this->disk)->path($this->filename);
    }

    public function download(): BinaryFileResponse
    {
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($this->getPath(), $this->filename, $headers);
    }

    public function fromHtml(string $html): self
    {
        switch ($this->engine) {
            case PdfEngineEnum::SPIPU:
                try {
                    $html2pdf = new Html2Pdf($this->orientation, $this->format, $this->lang);
                    $html2pdf->writeHTML($html);
                    $html2pdf->output($this->getPath(), $this->dest);
<<<<<<< HEAD
=======

>>>>>>> a6ef6dc7 (.)
                } catch (HtmlParsingException $e) {
                    File::put($this->getPath().'.html', $html);
                }
                break;

                /*
                 * case PdfEngineEnum::SPATIE:
                 * Pdf::html($this->html)
                 * ->orientation(Orientation::Portrait)
                 * ->format(Format::A4)
                 * ->margins(10, 10, 20, 0, Unit::Pixel)
                 * // ->name(str_slug($project->nome).'-REPORT.pdf')
                 * ->save($this->getPath());
                 * ;
                 *
                 * break;
                 */
<<<<<<< HEAD
<<<<<<< HEAD
                $html2pdf = new Html2Pdf($this->orientation, $this->format, $this->lang);
                $html2pdf->writeHTML($html);
                $html2pdf->output($this->getPath(), $this->dest);
                break;

            /*
             * case PdfEngineEnum::SPATIE:
             * Pdf::html($this->html)
             * ->orientation(Orientation::Portrait)
             * ->format(Format::A4)
             * ->margins(10, 10, 20, 0, Unit::Pixel)
             * // ->name(str_slug($project->nome).'-REPORT.pdf')
             * ->save($this->getPath());
             * ;
             *
             * break;
             */
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        }

        $this->html = $html;
        // $this->engine->build($this);

        return $this;
    }

    public function fromModel(Model $model): self
    {
        $model_class = $model::class;
        $model_name = class_basename($model_class);
        $module = Str::between($model_class, '\Modules\\', '\Models');
        /**
         * @var non-falsy-string&view-string
         */
<<<<<<< HEAD
<<<<<<< HEAD
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> 551c768c4 (.)
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> 414a4ffcb (.)
        $view_params = [
            'view' => $view_name,
            'row' => $model,
        ];
        $view = view($view_name, $view_params);
        $html = $view->render();

        return $this->fromHtml($html);
    }

    public function getContent(): string
    {
        Assert::notNull(
            $res = Storage::disk($this->disk)->get($this->filename),
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

        return $res;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param  array<string, mixed>  $params
     */
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
    /**
     * @param  array<string, mixed>  $params
     */
=======
>>>>>>> 53d6a6ba (.)
=======
    /**
     * @param  array<string, mixed>  $params
     */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
    /**
     * @param  array<string, mixed>  $params
     */
>>>>>>> 551c768c4 (.)
    public function view(string $view, array $params = []): self
    {
        if (! view()->exists($view)) {
            throw new Exception('View '.$view.' not found');
        }
        /** @var array<string, mixed> $typedParams */
        $typedParams = $params;
        $out = view($view, $typedParams);
        $this->html = $out->render();

<<<<<<< HEAD
<<<<<<< HEAD
    public function view(string $view, array $params = []): self
    {
        if (!view()->exists($view)) {
            throw new Exception('View ' . $view . ' not found');
    public function view(string $view, array $params = []): self
    {
        if (!view()->exists($view)) {
            throw new Exception('View ' . $view . ' not found');
    public function view(string $view, array $params=[]): self
    {
        if(!view()->exists($view)){
            throw new \Exception('View '.$view.' not found');
        }
        $out = view($view, $params);
        $this->html = $out->render();
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        return $this->fromHtml($this->html);
    }

    public function setEngine(PdfEngineEnum $engine): self
    {
        $this->engine = $engine;
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 551c768c4 (.)
=======

>>>>>>> 414a4ffcb (.)
        return $this;
    }
}
