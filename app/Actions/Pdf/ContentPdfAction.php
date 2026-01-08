<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

use Exception;
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
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;

/**
 * Action to generate PDF content as binary data for email attachments.
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action to generate PDF content as binary data for email attachments.
 * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade da renderizzare
     * @param  array<string, mixed>|null  $data  Dati da passare alla vista
     * @param  string  $_filename  Nome del file PDF (per riferimento, attualmente non utilizzato)
<<<<<<< HEAD
=======
=======
     * @param string|null $html Contenuto HTML da convertire
     * @param string|null $view Nome della vista Blade da renderizzare
     * @param array<string, mixed>|null $data Dati da passare alla vista
     * @param string $_filename Nome del file PDF (per riferimento, attualmente non utilizzato)
<<<<<<< HEAD
=======
     * @param array|null $data Dati da passare alla vista
     * @param string $filename Nome del file PDF (per riferimento)
>>>>>>> f1d4085 (.)
=======
     * @param array<string, mixed>|null $data Dati da passare alla vista
     * @param string $_filename Nome del file PDF (per riferimento, attualmente non utilizzato)
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
     * @return string Contenuto binario del PDF
     *
     * @throws Exception Se la vista non esiste
     */
    public function execute(
<<<<<<< HEAD
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $_filename = 'my_doc.pdf',
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        null|string $html = null,
        null|string $view = null,
        null|array $data = null,
>>>>>>> a6ef6dc7 (.)
        string $_filename = 'my_doc.pdf',
<<<<<<< HEAD
<<<<<<< HEAD
=======
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $filename = 'my_doc.pdf'
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    ): string {
        // Generate HTML content if view is provided
        if ($html === null && $view !== null) {
            if (! view()->exists($view)) {
                throw new Exception('View '.$view.' not found');
            }
            if (! is_array($data)) {
                $data = [];
            }
            $html = view($view, $data)->render();
        }

        // Validate that we have HTML content
        Assert::string($html, 'HTML content must be provided either directly or via view rendering');

        // Create HTML2PDF instance with same configuration as StreamDownloadPdfAction
        $html2pdf = new Html2Pdf(
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            orientation: 'P', // Portrait
            format: 'A4', // A4 format
            lang: 'it', // Italian language
            unicode: true, // Unicode support
            encoding: 'UTF-8', // UTF-8 encoding
            margins: [10, 10, 10, 10], // 10mm margins on all sides
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            orientation: 'P',     // Portrait
            format: 'A4',         // A4 format
            lang: 'it',           // Italian language
            unicode: true,        // Unicode support
            encoding: 'UTF-8',    // UTF-8 encoding
            margins: [10, 10, 10, 10] // 10mm margins on all sides
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        );

        // Write HTML content to PDF
        $html2pdf->writeHTML($html);

        // Generate and return PDF content as binary string
        return $html2pdf->output('', 'S'); // 'S' returns string content
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

    /**
     * Genera contenuto PDF da una vista con dati specifici.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
    /**
     * Genera contenuto PDF da una vista con dati specifici.
     * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
     * Metodo di convenienza per generare PDF da viste Blade.
     *
     * @param  string  $view  Nome della vista Blade
     * @param  array  $data  Dati da passare alla vista
     * @param  string  $filename  Nome del file PDF (per riferimento)
     * @return string Contenuto binario del PDF
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
<<<<<<< HEAD
=======
=======
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        return $this->execute(
            html: null,
            view: $view,
            data: $data,
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            _filename: $filename,
        );
    }

    /**
     * Genera contenuto PDF da HTML diretto.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            filename: $filename
        );
    }
    
    /**
     * Genera contenuto PDF da HTML diretto.
     * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
     * Metodo di convenienza per generare PDF da contenuto HTML.
     *
     * @param  string  $html  Contenuto HTML
     * @param  string  $filename  Nome del file PDF (per riferimento)
     * @return string Contenuto binario del PDF
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
=======
    public function fromHtml(
        string $html,
        string $filename = 'document.pdf'
    ): string {
>>>>>>> f1d4085 (.)
=======
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
>>>>>>> 300ef70 (.)
        return $this->execute(
            html: $html,
            view: null,
            data: null,
<<<<<<< HEAD
<<<<<<< HEAD
            _filename: $filename,
=======
<<<<<<< HEAD
<<<<<<< HEAD
            _filename: $filename,
=======
            filename: $filename
>>>>>>> f1d4085 (.)
=======
            _filename: $filename,
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            _filename: $filename,
>>>>>>> 300ef70 (.)
        );
    }
}
