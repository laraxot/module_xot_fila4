<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf\Engine;

use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class SpipuPdfByHtmlAction
{
    use QueueableAction;

    public function execute(
        string $html,
        string $filename = 'my_doc.pdf',
        string $disk = 'cache',
        string $out = 'download',
        string $orientation = 'P',
    ): string|BinaryFileResponse {
        $html2pdf = new Html2Pdf($orientation, 'A4', 'it');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'content' => $html2pdf->output($path, 'S'), // D
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'content' => $html2pdf->output($path, 'S'),  // D
=======
=======
            'content' => $html2pdf->output($path, 'S'),  // D
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            'content' => $html2pdf->output($path, 'S'), // D
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
            'content' => $html2pdf->output($path, 'S'), // D
>>>>>>> 358ba79a7 (.)
=======
            'content' => $html2pdf->output($path, 'S'), // D
>>>>>>> f8f76a284 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
            'content' => $html2pdf->output($path, 'S'), // D
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
            'content' => $html2pdf->output($path, 'S'), // D
=======
            'content' => $html2pdf->output($path, 'S'),  // D
>>>>>>> f1d4085 (.)
=======
            'content' => $html2pdf->output($path, 'S'), // D
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            'content' => $html2pdf->output($path, 'S'), // D
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
            'content' => $html2pdf->output($path, 'S'), // D
=======
            'content' => $html2pdf->output($path, 'S'),  // D
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
            'content' => $html2pdf->output($path, 'S'), // D
>>>>>>> aba62c408 (.)
=======
            'content' => $html2pdf->output($path, 'S'), // D
=======
            'content' => $html2pdf->output($path, 'S'),  // D
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
            default => $path,
        };
    }
}
