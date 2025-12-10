<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Pdf;

<<<<<<< HEAD
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
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
use Spipu\Html2Pdf\Html2Pdf;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
use Spipu\Html2Pdf\Html2Pdf;
use Modules\Xot\Datas\PdfData;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Datas\PdfData;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
     * @param string $html Contenuto HTML da convertire
     * @param string $filename Nome del file PDF
     * @param string $disk Disco di storage
     * @param string $out Tipo di output (download, path, etc.)
     * @param string $orientation Orientamento (P=Portrait, L=Landscape)
     * @param PdfEngineEnum $engine Engine da utilizzare
     * @return string|BinaryFileResponse
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
>>>>>>> 73eab74 (.)

        // Genera il PDF utilizzando PdfData
        $data->fromHtml($html);

<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        
        // Genera il PDF utilizzando PdfData
        $data->fromHtml($html);
        
<<<<<<< HEAD

        // Genera il PDF utilizzando PdfData
        $data->fromHtml($html);

=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        // Restituisce il risultato in base al tipo di output richiesto
        return match ($out) {
            'download' => $data->download(),
            'path' => $data->getPath(),
            default => $data->getPath(),
        };
    }
}
