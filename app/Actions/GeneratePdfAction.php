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
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
<<<<<<< HEAD
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
=======
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
<<<<<<< HEAD
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
=======
>>>>>>> ca9324a4 (.)
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
=======
                'content' => $html2pdf->Output($filename.'.pdf', 'S'),
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                'content' => $html2pdf->Output($filename . '.pdf', 'S'),
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
