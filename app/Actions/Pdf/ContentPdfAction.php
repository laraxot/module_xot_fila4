<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;

/**
 * Action to generate PDF content as binary data for email attachments.
 *
 * This action is similar to StreamDownloadPdfAction but returns raw PDF content
 * instead of a download response, making it suitable for email attachments.
 */
class ContentPdfAction
{
    use QueueableAction;

    public PdfEngineEnum $engine;

    /**
     * Genera contenuto PDF dall'HTML fornito.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade da renderizzare
     * @param  array<string, mixed>|null  $data  Dati da passare alla vista
     * @param  string  $_filename  Nome del file PDF (per riferimento, attualmente non utilizzato)
     * @return string Contenuto binario del PDF
     *
     * @throws Exception Se la vista non esiste
     */
    public function execute(
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param string|null $html Contenuto HTML da convertire
     * @param string|null $view Nome della vista Blade da renderizzare
     * @param array<string, mixed>|null $data Dati da passare alla vista
     * @param string $_filename Nome del file PDF (per riferimento, attualmente non utilizzato)
     * @return string Contenuto binario del PDF
     * @throws Exception Se la vista non esiste
     */
    public function execute(
        null|string $html = null,
        null|string $view = null,
        null|array $data = null,
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
        string $_filename = 'my_doc.pdf',
    ): string {
        // Generate HTML content if view is provided
        if ($html === null && $view !== null) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! view()->exists($view)) {
                throw new Exception('View '.$view.' not found');
            }
            if (! is_array($data)) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            if (!view()->exists($view)) {
                throw new Exception('View ' . $view . ' not found');
            }
            if (!is_array($data)) {
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
                $data = [];
            }
            $html = view($view, $data)->render();
        }

        // Validate that we have HTML content
        Assert::string($html, 'HTML content must be provided either directly or via view rendering');

        // Create HTML2PDF instance with same configuration as StreamDownloadPdfAction
        $html2pdf = new Html2Pdf(
            orientation: 'P', // Portrait
            format: 'A4', // A4 format
            lang: 'it', // Italian language
            unicode: true, // Unicode support
            encoding: 'UTF-8', // UTF-8 encoding
            margins: [10, 10, 10, 10], // 10mm margins on all sides
        );

        // Write HTML content to PDF
        $html2pdf->writeHTML($html);

        // Generate and return PDF content as binary string
        return $html2pdf->output('', 'S'); // 'S' returns string content
    }

    /**
     * Genera contenuto PDF da una vista con dati specifici.
     *
     * Metodo di convenienza per generare PDF da viste Blade.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $view  Nome della vista Blade
     * @param  array  $data  Dati da passare alla vista
     * @param  string  $filename  Nome del file PDF (per riferimento)
     * @return string Contenuto binario del PDF
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param  array<string, mixed>  $data
     */
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param string $view Nome della vista Blade
     * @param array $data Dati da passare alla vista
     * @param string $filename Nome del file PDF (per riferimento)
     * @return string Contenuto binario del PDF
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
>>>>>>> 5a14301c (.)
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
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
<<<<<<< HEAD
=======
        /** @var array<string, mixed> $data */
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
    public function fromView(
        string $view,
        array $data = [],
        string $filename = 'document.pdf'
    ): string {
>>>>>>> f1d4085 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 53d6a6ba (.)
        return $this->execute(
            html: null,
            view: $view,
            data: $data,
            _filename: $filename,
        );
    }

    /**
     * Genera contenuto PDF da HTML diretto.
     *
     * Metodo di convenienza per generare PDF da contenuto HTML.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $html  Contenuto HTML
     * @param  string  $filename  Nome del file PDF (per riferimento)
=======
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
>>>>>>> 5a14301c (.)
=======
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
>>>>>>> 5a14301c (.)
=======
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
>>>>>>> 5a14301c (.)
=======
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
>>>>>>> 5a14301c (.)
     * @return string Contenuto binario del PDF
     */
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
        return $this->execute(
            html: $html,
            view: null,
            data: null,
            _filename: $filename,
        );
    }
}
