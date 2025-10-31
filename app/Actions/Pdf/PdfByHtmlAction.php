<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
=======
use Spipu\Html2Pdf\Html2Pdf;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Spipu\Html2Pdf\Html2Pdf;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PdfByHtmlAction
{
    use QueueableAction;

    public PdfEngineEnum $engine;

    /**
     * Genera un PDF dall'HTML fornito.
     *
     * @param  string  $html  Contenuto HTML da convertire
     * @param  string  $filename  Nome del file PDF
     * @param  string  $disk  Disco di storage
     * @param  string  $out  Tipo di output (download, path, etc.)
     * @param  string  $orientation  Orientamento (P=Portrait, L=Landscape)
     * @param  PdfEngineEnum  $engine  Engine da utilizzare
     */
    public function execute(
        string $html,
        string $filename = 'my_doc.pdf',
        string $disk = 'cache',
        string $out = 'download',
        string $orientation = 'P',
        PdfEngineEnum $engine = PdfEngineEnum::SPIPU,
    ): string|BinaryFileResponse {
        $data = PdfData::from([
            'html' => $html,
            'filename' => $filename,
            'disk' => $disk,
            'out' => $out,
            'orientation' => $orientation,
            'engine' => $engine,
        ]);
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

        // Genera il PDF utilizzando PdfData
        $data->fromHtml($html);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        // Genera il PDF utilizzando PdfData
        $data->fromHtml($html);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        // Restituisce il risultato in base al tipo di output richiesto
        return match ($out) {
            'download' => $data->download(),
            'path' => $data->getPath(),
            default => $data->getPath(),
        };
    }
}
