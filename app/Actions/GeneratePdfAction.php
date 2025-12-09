<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

final class GeneratePdfAction
{
    use QueueableAction;

    public function execute(
        string $html,
        string $filename,
        string $orientation = 'P',
        string $outputMode = 'download',
    ): string {
        $html2pdf = new Html2Pdf($orientation, 'A4', 'it');
        $html2pdf->setTestTdInOnePage(false);

        try {
            $html2pdf->WriteHTML($html);

            return match ($outputMode) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 5a14301c (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 3fbbf1f5 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 399f46d3 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
=======
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
>>>>>>> a12f125f4a (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> b93ef594b4 (.)
=======
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> ca9324a4 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
=======
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> ca9324a4 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
=======
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 9db27d12 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 5a14301c (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
=======
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                'file' => $this->saveToFile($html2pdf, $filename),
                default => $html2pdf->Output(),
            };
        } catch (Html2PdfException $exception) {
            $html2pdf->clean();
            throw $exception;
        }
    }

    private function saveToFile(Html2Pdf $pdf, string $filename): string
    {
        $pdf->Output($filename, 'F');

        return $filename;
    }
}
