<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
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
use Exception;
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
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
=======
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;

/**
 * Action to generate PDF content as binary data for email attachments.
<<<<<<< HEAD
 *
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action to generate PDF content as binary data for email attachments.
 * 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
        string $_filename = 'my_doc.pdf',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
        ?string $html = null,
        ?string $view = null,
        ?array $data = null,
        string $filename = 'my_doc.pdf'
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    ): string {
        // Generate HTML content if view is provided
        if ($html === null && $view !== null) {
            if (! view()->exists($view)) {
                throw new Exception('View '.$view.' not found');
            }
            if (! is_array($data)) {
            if (!view()->exists($view)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
                throw new Exception('View ' . $view . ' not found');
=======
<<<<<<< HEAD
                throw new Exception('View ' . $view . ' not found');
=======
                throw new \Exception('View ' . $view . ' not found');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
            }
            if (!is_array($data)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
        
        // Validate that we have HTML content
        Assert::string($html, 'HTML content must be provided either directly or via view rendering');
        
        // Create HTML2PDF instance with same configuration as StreamDownloadPdfAction
        $html2pdf = new Html2Pdf(
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
            orientation: 'P',     // Portrait
            format: 'A4',         // A4 format
            lang: 'it',           // Italian language
            unicode: true,        // Unicode support
            encoding: 'UTF-8',    // UTF-8 encoding
            margins: [10, 10, 10, 10] // 10mm margins on all sides
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
    
    /**
     * Genera contenuto PDF da una vista con dati specifici.
     * 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)

    /**
     * Genera contenuto PDF da una vista con dati specifici.
     *
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
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
>>>>>>> ce6fc085 (.)
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
=======
=======
>>>>>>> origin/develop
    public function fromView(
        string $view,
        array $data = [],
        string $filename = 'document.pdf'
    ): string {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function fromView(string $view, array $data = [], string $filename = 'document.pdf'): string
    {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
            filename: $filename
=======
            _filename: $filename,
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        );
    }

    /**
     * Genera contenuto PDF da HTML diretto.
<<<<<<< HEAD
     *
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
            filename: $filename
        );
    }
    
    /**
     * Genera contenuto PDF da HTML diretto.
     * 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function fromHtml(
        string $html,
        string $filename = 'document.pdf'
    ): string {
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
            _filename: $filename,
        );
    }
}
=======
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
>>>>>>> ce6fc085 (.)
            filename: $filename
        );
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
