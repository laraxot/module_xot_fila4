<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
=======
>>>>>>> ab8cc3f3 (.)
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
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
use Webmozart\Assert\Assert;
use Spipu\Html2Pdf\Html2Pdf;
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
use Spipu\Html2Pdf\Html2Pdf;
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
>>>>>>> b93ef594b4 (.)
use Webmozart\Assert\Assert;
=======
>>>>>>> ce6fc085 (.)
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

class StreamDownloadPdfAction
{
    use QueueableAction;

    public PdfEngineEnum $engine;

    /**
     * Genera un PDF dall'HTML fornito.
     *
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della view da renderizzare
     * @param  array<string, mixed>|null  $data  Dati da passare alla view
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     * @param  string  $html  Contenuto HTML da convertire
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
=======
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade
     * @param  array<mixed, mixed>|null  $data  Dati da passare alla vista
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade
     * @param  array<mixed, mixed>|null  $data  Dati da passare alla vista
     * @param  string  $filename  Nome del file PDF
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
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
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
        Assert::string($html);
        Assert::string($html);
        Assert::string($html);
        Assert::string($html);
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
        Assert::string($html, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($html);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        $html2pdf = new Html2Pdf('P', 'A4', 'it', true, 'UTF-8', [10, 10, 10, 10]);
        $html2pdf->writeHTML($html);

        // Genera e scarica il PDF
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        return response()->streamDownload(function () use ($html2pdf): void {
            $html2pdf->output();
        }, 'report-'.$filename);
=======
=======
>>>>>>> ab8cc3f3 (.)
        return response()->streamDownload(function () use ($html2pdf): void {
            $html2pdf->output();
        }, 'report-'.$filename);
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
<<<<<<< HEAD
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        return response()->streamDownload(
            function () use ($html2pdf) {
                $html2pdf->output();
            },
<<<<<<< HEAD
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
            'report-'.$filename
        );
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
>>>>>>> 7468a7d2 (.)
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
>>>>>>> 2f3197ab (.)
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
=======
>>>>>>> ce6fc085 (.)
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
            'report-'.$filename
        );
<<<<<<< HEAD
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
            'report-' . $filename
        );
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
            'report-'.$filename
        );
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
=======
            'report-' . $filename
        );
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
            'report-'.$filename
        );
<<<<<<< HEAD
            'report-'.$filename
        );
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 88ea7103 (.)
=======
            'report-'.$filename
        );
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
            'report-'.$filename
        );
>>>>>>> f1d4085 (.)
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
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    }
}
