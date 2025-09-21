<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
=======
use Spipu\Html2Pdf\Html2Pdf;
=======
>>>>>>> b93ef594b4 (.)
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
>>>>>>> b93ef594b4 (.)
use Webmozart\Assert\Assert;
=======
use Spipu\Html2Pdf\Html2Pdf;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

class StreamDownloadPdfAction
{
    use QueueableAction;

    public PdfEngineEnum $engine;

    /**
     * Genera un PDF dall'HTML fornito.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
     * @param  string|null  $html  Contenuto HTML da convertire
     * @param  string|null  $view  Nome della vista Blade
     * @param  array<mixed, mixed>|null  $data  Dati da passare alla vista
     * @param  string  $filename  Nome del file PDF
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
        $html2pdf = new Html2Pdf('P', 'A4', 'it', true, 'UTF-8', [10, 10, 10, 10]);
        $html2pdf->writeHTML($html);

        // Genera e scarica il PDF
<<<<<<< HEAD
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
=======
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
        return response()->streamDownload(
            function () use ($html2pdf) {
                $html2pdf->output();
            },
<<<<<<< HEAD
            'report-'.$filename
        );
>>>>>>> a12f125f4a (.)
=======
        return response()->streamDownload(function () use ($html2pdf) {
            $html2pdf->output();
        }, 'report-' . $filename);
>>>>>>> b93ef594b4 (.)
=======
            'report-' . $filename
        );
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
