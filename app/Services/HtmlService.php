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
>>>>>>> 73eab74 (.)
 * ExceptionFormatter
 * HtmlParsingException
 * ImageException
 * LocaleException
 * LongSentenceException
 * TableException
 */
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
ExceptionFormatter
HtmlParsingException
ImageException
LocaleException
LongSentenceException
TableException
*/
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

/**
 * Class HtmlService.
 */
class HtmlService
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public static function toPdf(
        string $html,
        string $out = 'show',
        string $pdforientation = 'L',
        string $filename = '',
    ): string {
<<<<<<< HEAD
<<<<<<< HEAD
    public static function toPdf(string $html, string $out = 'show', string $pdforientation = 'L', string $filename = ''): string
    {
=======
=======
>>>>>>> 218dfed3 (.)
=======
    public static function toPdf(string $html, string $out = 'show', string $pdforientation = 'L', string $filename = ''): string
    {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        // dddx($params);

        // include_once __DIR__.'/vendor/autoload.php';
        // $pdforientation = 'L'; // default;
        // $out = 'show';
        if ($filename === '') {
        if ('' === $filename) {
        if ('' === $filename) {
        if ('' === $filename) {
        if ('' === $filename) {
            $filename = Storage::disk('local')->path('test.pdf');
        }
        /*
        if ($filename === '') {
        if ('' === $filename) {
        if ('' === $filename) {
        if ('' === $filename) {
        if ('' === $filename) {
        if ('' === $filename) {
            $filename = Storage::disk('local')->path('test.pdf');
        }
        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
         * extract($params);
         * if (! isset($html)) {
         * throw new \Exception('err html is missing');
         * }
         */
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        extract($params);
        if (! isset($html)) {
            throw new \Exception('err html is missing');
        }
        */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        if (request('debug', false)) {
            return $html;
        }

        try {
            $html2pdf = new Html2Pdf($pdforientation, 'A4', 'it');
            $html2pdf->setTestTdInOnePage(false);
            $html2pdf->WriteHTML($html);
            if ($out === 'content_PDF') {
                return $html2pdf->Output($filename.'.pdf', 'S');
            }

            if ($out === 'file') {
            if ('content_PDF' === $out) {
<<<<<<< HEAD
<<<<<<< HEAD
                return $html2pdf->Output($filename . '.pdf', 'S');
=======
                return $html2pdf->Output($filename.'.pdf', 'S');
>>>>>>> f1d4085 (.)
=======
                return $html2pdf->Output($filename . '.pdf', 'S');
>>>>>>> 73eab74 (.)
            }

            if ('file' === $out) {
            if ('content_PDF' === $out) {
                return $html2pdf->Output($filename . '.pdf', 'S');
                return $html2pdf->Output($filename . '.pdf', 'S');
                return $html2pdf->Output($filename . '.pdf', 'S');
                return $html2pdf->Output($filename.'.pdf', 'S');
            }

            if ('file' === $out) {
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
>>>>>>> 73eab74 (.)
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
=======
=======
>>>>>>> 2f3197ab (.)
    public static function toMpdf($html): string {
        require_once __DIR__.'/vendor/autoload.php';

        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);

        return $mpdf->Output();
    }
    */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
}
