<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PdfByHtmlAction
{
    use QueueableAction;

    public function execute(
        string $html,
        string $filename = 'my_doc.pdf',
        string $disk = 'cache',
        string $out = 'download',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        string $orientation = 'L',
    ): string|BinaryFileResponse {
        $html2pdf = new Html2Pdf($orientation, 'A4', 'it');
=======
    ): string|BinaryFileResponse {
        $html2pdf = new Html2Pdf('L', 'A4', 'it');
>>>>>>> 5a14301c (.)
=======
    ): string|BinaryFileResponse {
        $html2pdf = new Html2Pdf('L', 'A4', 'it');
>>>>>>> 5a14301c (.)
=======
    ): string|BinaryFileResponse {
        $html2pdf = new Html2Pdf('L', 'A4', 'it');
>>>>>>> 5a14301c (.)
        $html2pdf->setTestTdInOnePage(false);
        $html2pdf->writeHTML($html);
        $path = Storage::disk($disk)->path($filename);
        $html2pdf->output($path, 'F');

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return match ($out) {
            'download' => response()->download($path, $filename, $headers),
<<<<<<< HEAD
            'content' => $html2pdf->output($path, 'S'), // D
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'content' => $html2pdf->output($path, 'S'), // D
=======
            'content' => $html2pdf->output($path, 'S'),  // D
>>>>>>> a12f125f4a (.)
=======
            'content' => $html2pdf->output($path, 'S'), // D
>>>>>>> b93ef594b4 (.)
=======
            'content' => $html2pdf->output($path, 'S'),  // D
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            default => $path,
        };
    }
}
