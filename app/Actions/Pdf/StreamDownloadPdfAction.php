<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\QueueableAction\QueueableAction;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class StreamDownloadPdfAction
{
    use QueueableAction;

    public PdfEngineEnum $engine;

    /**
     * Genera un PDF dall'HTML fornito.
     *
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome del file PDF
     * @param  string  $html  Contenuto HTML da convertire
     * @param string $html Contenuto HTML da convertire
     * @param string $filename Nome del file PDF
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome del file PDF
     * @return StreamedResponse
     */
    public function execute(
        null|string $html = null,
        null|string $view = null,
        null|array $data = null,
        string $filename = 'my_doc.pdf',
    ) {
        if ($html === null && $view !== null) {
            if (!view()->exists($view)) {
                throw new Exception('View ' . $view . ' not found');
            }
            if (!is_array($data)) {
                $data = [];
            }
            $html = view($view, $data)->render();
        }
        Assert::string($html, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome del file PDF
     */
    public function execute(
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $filename = 'my_doc.pdf',
    ): StreamedResponse {
        if ($html === null && $view !== null) {
            if (! view()->exists($view)) {
                throw new Exception('View '.$view.' not found');
            }
            /** @var array<string, mixed> $viewData */
            $viewData = is_array($data) ? $data : [];
            $html = view($view, $viewData)->render();
        }
        Assert::string($html, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
     * @param string $html Contenuto HTML da convertire
     * @param string $filename Nome del file PDF
     * @return StreamedResponse
     */
    public function execute(
        null|string $html = null,
        null|string $view = null,
        null|array $data = null,
        string $filename = 'my_doc.pdf',
    ) {
        if ($html === null && $view !== null) {
            if (!view()->exists($view)) {
                throw new Exception('View ' . $view . ' not found');
            }
            if (!is_array($data)) {
                $data = [];
            }
            $html = view($view, $data)->render();
        }
        Assert::string($html, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade
     * @param  array<mixed, mixed>|null  $data  Dati da passare alla vista
     * @param  string  $filename  Nome del file PDF
     * @param string $html Contenuto HTML da convertire
     * @param string $filename Nome del file PDF
     * @return StreamedResponse
     */
    public function execute(
        null|string $html = null,
        null|string $view = null,
        null|array $data = null,
        string $filename = 'my_doc.pdf',
    ) {
        if ($html === null && $view !== null) {
            if (!view()->exists($view)) {
                throw new Exception('View ' . $view . ' not found');
            }
            if (!is_array($data)) {
                $data = [];
            }
            $html = view($view, $data)->render();
        }
        Assert::string($html, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
     * @return StreamedResponse
     */
    public function execute(
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $filename = 'my_doc.pdf'
    ) {
        if ($html == null && $view != null) {
            if (! view()->exists($view)) {
                throw new Exception('View '.$view.' not found');
            }
            if (! is_array($data)) {
                $data = [];
            }

            // Assicura che $data sia type-safe per view()
            /** @var array<string, mixed> $viewData */
            $viewData = [];
            foreach ($data as $key => $value) {
                $viewData[(string) $key] = $value;
            }

            $html = view($view, $viewData)->render();
        }
            $html = view($view, $data)->render();
        }
        Assert::string($html, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($html, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade
     * @param  array<mixed, mixed>|null  $data  Dati da passare alla vista
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome del file PDF
     * @return StreamedResponse
     */
    public function execute(
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $filename = 'my_doc.pdf',
    ) {
        if ($html === null && $view !== null) {
            if (! view()->exists($view)) {
                throw new Exception('View '.$view.' not found');
            }
            if (! is_array($data)) {
                $data = [];
            }
            $html = view($view, $data)->render();
        }
        Assert::string($html, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
     * @param  string  $filename  Nome del file PDF
     * @return StreamedResponse
     */
    public function execute(
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $filename = 'my_doc.pdf',
    ) {
        if ($html === null && $view !== null) {
            if (! view()->exists($view)) {
                throw new Exception('View '.$view.' not found');
            }
            if (! is_array($data)) {
                $data = [];
            }
            /** @var array<string, mixed> $viewData */
            $viewData = $data;
            $html = view($view, $viewData)->render();
        }
        Assert::string($html);
        Assert::string($html);
        Assert::string($html);
        Assert::string($html);
        $html2pdf = new Html2Pdf('P', 'A4', 'it', true, 'UTF-8', [10, 10, 10, 10]);
        $html2pdf->writeHTML($html);

        // Genera e scarica il PDF
        return response()->streamDownload(function () use ($html2pdf): void {
            $html2pdf->output();
        }, 'report-'.$filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
     * @param string $html Contenuto HTML da convertire
     * @param string $filename Nome del file PDF
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function execute(
        ?string $html=null,
        ?string $view=null,
        ?array $data=null,
        string $filename = 'my_doc.pdf',
        
    ){

        if($html==null && $view!=null){
            if(!view()->exists($view)){
                throw new \Exception('View '.$view.' not found');
            }
            if(!is_array($data)){
                $data = [];
            }
            $html = view($view, $data)->render();
        }
        Assert::string($html);
        $html2pdf = new \Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'it', true, 'UTF-8', [10, 10, 10, 10]);
        $html2pdf->writeHTML($html);
        
        // Genera e scarica il PDF
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(
            function () use ($html2pdf) {
                $html2pdf->output();
            },
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
            'report-' . $filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
            'report-'.$filename
        );
            'report-'.$filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
            'report-'.$filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
            'report-'.$filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
            'report-'.$filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
            'report-'.$filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-'.$filename);
        return response()->streamDownload(function () use ($html2pdf): void {
            $html2pdf->output();
        }, 'report-'.$filename);
        return response()->streamDownload(function () use ($html2pdf): void {
            $html2pdf->output();
        }, 'report-'.$filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(
            function () use ($html2pdf) {
                $html2pdf->output();
            },
            'report-'.$filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-'.$filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-'.$filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-'.$filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
    }
}
