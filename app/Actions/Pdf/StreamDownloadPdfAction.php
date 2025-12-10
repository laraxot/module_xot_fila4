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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
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
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
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
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
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
>>>>>>> 6dcebf8a (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
use Webmozart\Assert\Assert;

class StreamDownloadPdfAction
{
    use QueueableAction;

    public PdfEngineEnum $engine;

    /**
     * Genera un PDF dall'HTML fornito.
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
     * @param  string  $html  Contenuto HTML da convertire
=======
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome del file PDF
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $html  Contenuto HTML da convertire
>>>>>>> b7afadf9 (.)
=======
=======
     * @param  string  $html  Contenuto HTML da convertire
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
     * @param string $html Contenuto HTML da convertire
     * @param string $filename Nome del file PDF
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome del file PDF
>>>>>>> 71586de2 (.)
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
<<<<<<< HEAD
=======
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade
     * @param  array<mixed, mixed>|null  $data  Dati da passare alla vista
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
     * @param  string  $html  Contenuto HTML da convertire
>>>>>>> 53d6a6ba (.)
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
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade
     * @param  array<mixed, mixed>|null  $data  Dati da passare alla vista
     * @param  string  $filename  Nome del file PDF
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
     * @param string $html Contenuto HTML da convertire
     * @param string $filename Nome del file PDF
>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
        Assert::string($html);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($html, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)

            // Assicura che $data sia type-safe per view()
            /** @var array<string, mixed> $viewData */
            $viewData = [];
            foreach ($data as $key => $value) {
                $viewData[(string) $key] = $value;
            }

            $html = view($view, $viewData)->render();
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($html);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
        Assert::string($html, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($html);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            $html = view($view, $data)->render();
        }
        Assert::string($html, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
        Assert::string($html, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade
     * @param  array<mixed, mixed>|null  $data  Dati da passare alla vista
>>>>>>> d2b0a27 (.)
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
<<<<<<< HEAD
        Assert::string($html, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($html);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
        Assert::string($html);
>>>>>>> f1d4085 (.)
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
        Assert::string($html);
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
        $html2pdf = new Html2Pdf('P', 'A4', 'it', true, 'UTF-8', [10, 10, 10, 10]);
        $html2pdf->writeHTML($html);

        // Genera e scarica il PDF
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ab8cc3f3 (.)
        return response()->streamDownload(function () use ($html2pdf): void {
            $html2pdf->output();
        }, 'report-'.$filename);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 17684f52 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
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
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
        return response()->streamDownload(
            function () use ($html2pdf) {
                $html2pdf->output();
            },
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
            'report-'.$filename
        );
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
            'report-'.$filename
        );
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
            'report-'.$filename
        );
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
            'report-'.$filename
        );
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
            'report-'.$filename
        );
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
            'report-'.$filename
        );
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> ca9324a4 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 5a14301c (.)
=======
            'report-'.$filename
        );
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> ca9324a4 (.)
=======
            'report-'.$filename
        );
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 9db27d12 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 5a14301c (.)
=======
            'report-'.$filename
        );
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> ca9324a4 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 5a14301c (.)
=======
            'report-'.$filename
        );
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> ca9324a4 (.)
=======
            'report-'.$filename
        );
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-'.$filename);
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 6dcebf8a (.)
        return response()->streamDownload(function () use ($html2pdf): void {
            $html2pdf->output();
        }, 'report-'.$filename);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
<<<<<<< HEAD
        }, 'report-'.$filename);
=======
        }, 'report-' . $filename);
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> ed734516 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
        return response()->streamDownload(
            function () use ($html2pdf) {
                $html2pdf->output();
            },
            'report-'.$filename
        );
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-'.$filename);
>>>>>>> 71586de2 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
    }
}
