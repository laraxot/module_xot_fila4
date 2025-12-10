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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
 * ExceptionFormatter
 * HtmlParsingException
 * ImageException
 * LocaleException
 * LongSentenceException
 * TableException
 */
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
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
ExceptionFormatter
HtmlParsingException
ImageException
LocaleException
LongSentenceException
TableException
*/
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

/**
 * Class HtmlService.
 */
class HtmlService
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public static function toPdf(
        string $html,
        string $out = 'show',
        string $pdforientation = 'L',
        string $filename = '',
    ): string {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
    public static function toPdf(string $html, string $out = 'show', string $pdforientation = 'L', string $filename = ''): string
    {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public static function toPdf(string $html, string $out = 'show', string $pdforientation = 'L', string $filename = ''): string
    {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * extract($params);
         * if (! isset($html)) {
         * throw new \Exception('err html is missing');
         * }
         */
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
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        extract($params);
        if (! isset($html)) {
            throw new \Exception('err html is missing');
        }
        */
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
                return $html2pdf->Output($filename . '.pdf', 'S');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                return $html2pdf->Output($filename . '.pdf', 'S');
=======
                return $html2pdf->Output($filename.'.pdf', 'S');
>>>>>>> a12f125f4a (.)
=======
                return $html2pdf->Output($filename . '.pdf', 'S');
>>>>>>> b93ef594b4 (.)
=======
                return $html2pdf->Output($filename.'.pdf', 'S');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    public static function toMpdf($html): string {
        require_once __DIR__.'/vendor/autoload.php';

        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);

        return $mpdf->Output();
    }
    */
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
}
