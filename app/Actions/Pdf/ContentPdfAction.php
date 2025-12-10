<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 300ef70 (.)
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;

/**
 * Action to generate PDF content as binary data for email attachments.
 *
<<<<<<< HEAD
=======
=======
=======
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b93ef594b4 (.)
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;

/**
 * Action to generate PDF content as binary data for email attachments.
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action to generate PDF content as binary data for email attachments.
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param string|null $html Contenuto HTML da convertire
     * @param string|null $view Nome della vista Blade da renderizzare
<<<<<<< HEAD
     * @param array<string, mixed>|null $data Dati da passare alla vista
     * @param string $_filename Nome del file PDF (per riferimento, attualmente non utilizzato)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed>|null $data Dati da passare alla vista
     * @param string $_filename Nome del file PDF (per riferimento, attualmente non utilizzato)
=======
     * @param array|null $data Dati da passare alla vista
     * @param string $filename Nome del file PDF (per riferimento)
>>>>>>> a12f125f4a (.)
=======
     * @param array<string, mixed>|null $data Dati da passare alla vista
     * @param string $_filename Nome del file PDF (per riferimento, attualmente non utilizzato)
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
     * @return string Contenuto binario del PDF
     * @throws Exception Se la vista non esiste
     */
    public function execute(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        null|string $html = null,
        null|string $view = null,
        null|array $data = null,
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
        string $_filename = 'my_doc.pdf',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
     * @param array|null $data Dati da passare alla vista
     * @param string $filename Nome del file PDF (per riferimento)
     * @return string Contenuto binario del PDF
     * @throws \Exception Se la vista non esiste
     */
    public function execute(
>>>>>>> origin/develop
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $filename = 'my_doc.pdf'
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    ): string {
        // Generate HTML content if view is provided
        if ($html === null && $view !== null) {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            if (!view()->exists($view)) {
<<<<<<< HEAD
                throw new Exception('View ' . $view . ' not found');
=======
<<<<<<< HEAD
                throw new Exception('View ' . $view . ' not found');
=======
                throw new \Exception('View ' . $view . ' not found');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            }
            if (!is_array($data)) {
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
                $data = [];
            }
            $html = view($view, $data)->render();
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Validate that we have HTML content
        Assert::string($html, 'HTML content must be provided either directly or via view rendering');

        // Create HTML2PDF instance with same configuration as StreamDownloadPdfAction
        $html2pdf = new Html2Pdf(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            orientation: 'P', // Portrait
            format: 'A4', // A4 format
            lang: 'it', // Italian language
            unicode: true, // Unicode support
            encoding: 'UTF-8', // UTF-8 encoding
            margins: [10, 10, 10, 10], // 10mm margins on all sides
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        
        // Validate that we have HTML content
        Assert::string($html, 'HTML content must be provided either directly or via view rendering');
        
        // Create HTML2PDF instance with same configuration as StreamDownloadPdfAction
        $html2pdf = new Html2Pdf(
>>>>>>> origin/develop
            orientation: 'P',     // Portrait
            format: 'A4',         // A4 format
            lang: 'it',           // Italian language
            unicode: true,        // Unicode support
            encoding: 'UTF-8',    // UTF-8 encoding
            margins: [10, 10, 10, 10] // 10mm margins on all sides
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        );

        // Write HTML content to PDF
        $html2pdf->writeHTML($html);

        // Generate and return PDF content as binary string
        return $html2pdf->output('', 'S'); // 'S' returns string content
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    /**
     * Genera contenuto PDF da una vista con dati specifici.
     *
<<<<<<< HEAD
=======
=======
=======
        );
        
        // Write HTML content to PDF
        $html2pdf->writeHTML($html);
        
        // Generate and return PDF content as binary string
        return $html2pdf->output('', 'S'); // 'S' returns string content
    }
>>>>>>> origin/develop
    
    /**
     * Genera contenuto PDF da una vista con dati specifici.
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    /**
     * Genera contenuto PDF da una vista con dati specifici.
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * Metodo di convenienza per generare PDF da viste Blade.
     *
<<<<<<< HEAD
<<<<<<< HEAD
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
     * @param  array<string, mixed>  $data
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> b7afadf9 (.)
        /** @var array<string, mixed> $data */
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
=======
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
        /** @var array<string, mixed> $data */
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
>>>>>>> ed734516 (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
    public function fromView(
        string $view,
        array $data = [],
        string $filename = 'document.pdf'
    ): string {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 71586de2 (.)
=======
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 249a0067 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 71586de2 (.)
=======
    /**
     * @param  array<string, mixed>  $data
     */
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 249a0067 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        return $this->execute(
            html: null,
            view: $view,
            data: $data,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            _filename: $filename,
        );
    }

    /**
     * Genera contenuto PDF da HTML diretto.
     *
<<<<<<< HEAD
=======
=======
            filename: $filename
=======
            _filename: $filename,
>>>>>>> b93ef594b4 (.)
        );
    }

    /**
     * Genera contenuto PDF da HTML diretto.
<<<<<<< HEAD
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
            filename: $filename
        );
    }
    
    /**
     * Genera contenuto PDF da HTML diretto.
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * Metodo di convenienza per generare PDF da contenuto HTML.
     *
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
=======
=======
>>>>>>> origin/develop
    public function fromHtml(
        string $html,
        string $filename = 'document.pdf'
    ): string {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function fromHtml(string $html, string $filename = 'document.pdf'): string
    {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $this->execute(
            html: $html,
            view: null,
            data: null,
<<<<<<< HEAD
            _filename: $filename,
        );
    }
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            _filename: $filename,
=======
            filename: $filename
>>>>>>> a12f125f4a (.)
=======
            _filename: $filename,
>>>>>>> b93ef594b4 (.)
        );
    }
}
=======
            filename: $filename
        );
    }
}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
