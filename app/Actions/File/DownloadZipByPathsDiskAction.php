<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use ZipArchive;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use ZipArchive;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class DownloadZipByPathsDiskAction
{
    use QueueableAction;

    /**
     * Crea un file ZIP dai percorsi forniti e lo restituisce come download.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string>  $attachments  Array di percorsi file
     * @param  string  $disk  Nome del disco di storage
     * @return BinaryFileResponse|null Risposta di download o null se fallisce
     */
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
    {
        $zipFileName = 'temp_zip_'.uniqid().'.zip';
        $zipPath = 'temp/'.$zipFileName;

        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive;
        $tempFilePath = storage_path('app/'.$zipPath);
=======
=======
>>>>>>> 5a14301c (.)
     * @param array<string> $attachments Array di percorsi file
     * @param string $disk Nome del disco di storage
     * @return BinaryFileResponse|null Risposta di download o null se fallisce
     */
    public function execute(array $attachments, string $disk): null|BinaryFileResponse
    {
        $zipFileName = 'temp_zip_' . uniqid() . '.zip';
        $zipPath = 'temp/' . $zipFileName;

        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive();
        $tempFilePath = storage_path('app/' . $zipPath);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');

        if ($zip->open($tempFilePath, ZipArchive::CREATE) === true) {
            foreach ($attachments as $attachment) {
                $filePath = $attachment;

                if (Storage::disk($disk)->exists($filePath)) {
                    $fileContent = Storage::disk($disk)->get($filePath);
                    if ($fileContent !== null) {
<<<<<<< HEAD
<<<<<<< HEAD
                        $zip->addFromString($attachment.'.pdf', $fileContent);
=======
                        $zip->addFromString($attachment . '.pdf', $fileContent);
>>>>>>> 5a14301c (.)
=======
                        $zip->addFromString($attachment . '.pdf', $fileContent);
>>>>>>> 5a14301c (.)
                    }
                } else {
                    dddx(['filePath' => $filePath]);
                }
            }
            $zip->close();

<<<<<<< HEAD
<<<<<<< HEAD
            $downloadFileName = 'attachments_'.uniqid().'.zip';
=======
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
>>>>>>> 5a14301c (.)
=======
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
>>>>>>> 5a14301c (.)

            // Usa response()->download() per il download
            return response()->download($tempFilePath, $downloadFileName, [
                'Content-Type' => 'application/zip',
<<<<<<< HEAD
<<<<<<< HEAD
            ]); // ->deleteFileAfterSend(true);
=======
            ]); //->deleteFileAfterSend(true);
>>>>>>> 5a14301c (.)
=======
            ]); //->deleteFileAfterSend(true);
>>>>>>> 5a14301c (.)
        }

        return null;
    }
}
