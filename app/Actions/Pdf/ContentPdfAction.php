<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

<<<<<<< HEAD
=======
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
use Exception;
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
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;

/**
 * Action to generate PDF content as binary data for email attachments.
 *
<<<<<<< HEAD
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;

/**
 * Action to generate PDF content as binary data for email attachments.
 *
=======
=======
>>>>>>> 2f3197ab (.)
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action to generate PDF content as binary data for email attachments.
 * 
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
     * @param string|null $html Contenuto HTML da convertire
     * @param string|null $view Nome della vista Blade da renderizzare
<<<<<<< HEAD
     * @param array<string, mixed>|null $data Dati da passare alla vista
     * @param string $_filename Nome del file PDF (per riferimento, attualmente non utilizzato)
=======
     * @param array|null $data Dati da passare alla vista
     * @param string $filename Nome del file PDF (per riferimento)
>>>>>>> f1d4085 (.)
     * @return string Contenuto binario del PDF
     * @throws Exception Se la vista non esiste
     */
    public function execute(
<<<<<<< HEAD
        null|string $html = null,
        null|string $view = null,
        null|array $data = null,
        string $_filename = 'my_doc.pdf',
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $filename = 'my_doc.pdf'
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    ): string {
        // Generate HTML content if view is provided
        if ($html === null && $view !== null) {
            if (! view()->exists($view)) {
                throw new Exception('View '.$view.' not found');
            }
            if (! is_array($data)) {
            if (!view()->exists($view)) {
            }
            if (!is_array($data)) {
                $data = [];
            }
            $html = view($view, $data)->render();
        }

        // Validate that we have HTML content
        Assert::string($html, 'HTML content must be provided either directly or via view rendering');

        // Create HTML2PDF instance with same configuration as StreamDownloadPdfAction
        $html2pdf = new Html2Pdf(
<<<<<<< HEAD
            orientation: 'P', // Portrait
            format: 'A4', // A4 format
            lang: 'it', // Italian language
            unicode: true, // Unicode support
            encoding: 'UTF-8', // UTF-8 encoding
            margins: [10, 10, 10, 10], // 10mm margins on all sides
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
            orientation: 'P',     // Portrait
            format: 'A4',         // A4 format
            lang: 'it',           // Italian language
            unicode: true,        // Unicode support
            encoding: 'UTF-8',    // UTF-8 encoding
            margins: [10, 10, 10, 10] // 10mm margins on all sides
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        );

        // Write HTML content to PDF
        $html2pdf->writeHTML($html);

        // Generate and return PDF content as binary string
        return $html2pdf->output('', 'S'); // 'S' returns string content
    }
<<<<<<< HEAD

    /**
     * Genera contenuto PDF da una vista con dati specifici.
     *
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
    
    /**
     * Genera contenuto PDF da una vista con dati specifici.
     * 
<<<<<<< HEAD

    /**
     * Genera contenuto PDF da una vista con dati specifici.
     *
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
     * Metodo di convenienza per generare PDF da viste Blade.
     *
     * @param  string  $view  Nome della vista Blade
     * @param  array  $data  Dati da passare alla vista
     * @param  string  $filename  Nome del file PDF (per riferimento)
     * @return string Contenuto binario del PDF
     */
     * @param string $view Nome della vista Blade
     * @param array $data Dati da passare alla vista
     * @param string $filename Nome del file PDF (per riferimento)
     * @return string Contenuto binario del PDF
     */
<<<<<<< HEAD
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
        /** @var array<string, mixed> $data */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
        /** @var array<string, mixed> $data */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(
        string $view,
        array $data = [],
        string $filename = 'document.pdf'
    ): string {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
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
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
    public function fromView(
        string $view,
        array $data = [],
        string $filename = 'document.pdf'
    ): string {
>>>>>>> f1d4085 (.)
        return $this->execute(
            html: null,
            view: $view,
            data: $data,
<<<<<<< HEAD
            _filename: $filename,
        );
    }

    /**
     * Genera contenuto PDF da HTML diretto.
     *
<<<<<<< HEAD
        );
    }

    /**
     * Genera contenuto PDF da HTML diretto.
     *
=======
=======
>>>>>>> 2f3197ab (.)
            filename: $filename
        );
    }
    
    /**
     * Genera contenuto PDF da HTML diretto.
     * 
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
     * Metodo di convenienza per generare PDF da contenuto HTML.
     *
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
     * @param string $html Contenuto HTML
     * @param string $filename Nome del file PDF (per riferimento)
     * @return string Contenuto binario del PDF
     */
<<<<<<< HEAD
    public function fromHtml(
        string $html,
        string $filename = 'document.pdf'
    ): string {
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
=======
    public function fromHtml(
        string $html,
        string $filename = 'document.pdf'
    ): string {
>>>>>>> f1d4085 (.)
        return $this->execute(
            html: $html,
            view: null,
            data: null,
<<<<<<< HEAD
            _filename: $filename,
=======
            filename: $filename
>>>>>>> f1d4085 (.)
        );
    }
}
            _filename: $filename,
        );
    }
}
            filename: $filename
        );
    }
}
