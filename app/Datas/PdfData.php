<?php

/*
 * @see https://github.com/masterix21/laravel-html2pdf/blob/master/src/PDF.php
 */

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 249a0067 (.)
=======
>>>>>>> 249a0067 (.)
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Facades\Storage;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3a08b27 (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 249a0067 (.)
use Illuminate\Support\Str;
use Modules\Xot\Enums\PdfEngineEnum;
use Spatie\LaravelData\Data;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spipu\Html2Pdf\Exception\HtmlParsingException;
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Enums\Orientation;
use Spatie\LaravelPdf\Enums\Unit;
use Spatie\LaravelPdf\Facades\Pdf;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
=======
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
=======
<<<<<<< HEAD
use Exception;
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2850177 (.)
>>>>>>> 3a08b27 (.)
=======
>>>>>>> 21348520 (.)
=======
use Spipu\Html2Pdf\Exception\HtmlParsingException;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
use Illuminate\Support\Str;
use Spatie\LaravelData\Data;
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Spatie\LaravelPdf\Enums\Unit;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\LaravelPdf\Enums\Format;
use Modules\Xot\Enums\PdfEngineEnum;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelPdf\Enums\Orientation;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;
>>>>>>> 249a0067 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                try {
                    $html2pdf = new Html2Pdf($this->orientation, $this->format, $this->lang);
                    $html2pdf->writeHTML($html);
                    $html2pdf->output($this->getPath(), $this->dest);
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3fbbf1f5 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 399f46d3 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 399f46d3 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 399f46d3 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> a12f125f4a (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> b93ef594b4 (.)
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> ca9324a4 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> ca9324a4 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> ca9324a4 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> ca9324a4 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> ca9324a4 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = mb_strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $view_name = mb_strtolower($module) . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3fbbf1f5 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
        );

        return $res;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    /**
     * @param array<string, mixed> $params
>>>>>>> 249a0067 (.)
=======
    /**
     * @param array<string, mixed> $params
>>>>>>> 249a0067 (.)
     */
=======
>>>>>>> 53d6a6ba (.)
=======
    /**
     * @param  array<string, mixed>  $params
     */
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
    /**
     * @param  array<string, mixed>  $params
     */
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
    public function view(string $view, array $params = []): self
    {
        if (! view()->exists($view)) {
            throw new Exception('View '.$view.' not found');
        }
        $out = view($view, $params);
        $this->html = $out->render();

=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
    public function view(string $view, array $params = []): self
    {
        if (!view()->exists($view)) {
            throw new Exception('View ' . $view . ' not found');
        }
        $out = view($view, $params);
        $this->html = $out->render();
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
        return $this->fromHtml($this->html);
    }

    public function setEngine(PdfEngineEnum $engine): self
    {
        $this->engine = $engine;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return $this;
    }
}
