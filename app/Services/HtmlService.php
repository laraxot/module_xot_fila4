<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

// use Maatwebsite\Excel\Facades\Excel;
// use PHPExcel;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// use Mpdf\Mpdf;
use Illuminate\Support\Facades\Storage;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

/*
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
 * ExceptionFormatter
 * HtmlParsingException
 * ImageException
 * LocaleException
 * LongSentenceException
 * TableException
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
ExceptionFormatter
HtmlParsingException
ImageException
LocaleException
LongSentenceException
TableException
*/
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

/**
 * Class HtmlService.
 */
class HtmlService
{
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
    public static function toPdf(
        string $html,
        string $out = 'show',
        string $pdforientation = 'L',
        string $filename = '',
    ): string {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public static function toPdf(string $html, string $out = 'show', string $pdforientation = 'L', string $filename = ''): string
    {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        // dddx($params);

        // include_once __DIR__.'/vendor/autoload.php';
        // $pdforientation = 'L'; // default;
        // $out = 'show';
        if ($filename === '') {
            $filename = Storage::disk('local')->path('test.pdf');
        }
        /*
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
         * extract($params);
         * if (! isset($html)) {
         * throw new \Exception('err html is missing');
         * }
         */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        extract($params);
        if (! isset($html)) {
            throw new \Exception('err html is missing');
        }
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        if (request('debug', false)) {
            return $html;
        }

        try {
            $html2pdf = new Html2Pdf($pdforientation, 'A4', 'it');
            $html2pdf->setTestTdInOnePage(false);
            $html2pdf->WriteHTML($html);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            if ($out === 'content_PDF') {
                return $html2pdf->Output($filename.'.pdf', 'S');
=======
            if ('content_PDF' === $out) {
                return $html2pdf->Output($filename . '.pdf', 'S');
=======
>>>>>>> 285375c74 (.)
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
            if ($out === 'content_PDF') {
                return $html2pdf->Output($filename.'.pdf', 'S');
=======
<<<<<<< HEAD
            if ($out === 'content_PDF') {
                return $html2pdf->Output($filename.'.pdf', 'S');
=======
            if ('content_PDF' === $out) {
                return $html2pdf->Output($filename . '.pdf', 'S');
<<<<<<< HEAD
=======
                return $html2pdf->Output($filename.'.pdf', 'S');
>>>>>>> f1d4085 (.)
=======
                return $html2pdf->Output($filename . '.pdf', 'S');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            }

            if ($out === 'file') {
                $html2pdf->Output($filename, 'F');

                return $filename;
            }

            return $html2pdf->Output();
        } catch (Html2PdfException $html2PdfException) {
            $html2pdf->clean();

            $formatter = new ExceptionFormatter($html2PdfException);
            dddx($formatter->getHtmlMessage());
            echo $formatter->getHtmlMessage();
        }

        // } catch (HTML2PDF_exception $e) {
        // } catch (Html2PdfException $e) {
        //    echo '<pre>';
        //    \print_r($e);
        //    echo '</pre>';
        // }
        return $filename;
    }

    /*
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
     * public static function toMpdf($html): string {
     * require_once __DIR__.'/vendor/autoload.php';
     *
     * $mpdf = new Mpdf();
     * $mpdf->WriteHTML($html);
     *
     * return $mpdf->Output();
     * }
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public static function toMpdf($html): string {
        require_once __DIR__.'/vendor/autoload.php';

        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);

        return $mpdf->Output();
    }
    */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
}
