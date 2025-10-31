<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use ZipArchive;

class DownloadZipByPathsDiskAction
{
    use QueueableAction;

    /**
     * Crea un file ZIP dai percorsi forniti e lo restituisce come download.
     *
     * @param  array<string>  $attachments  Array di percorsi file
     * @param  string  $disk  Nome del disco di storage
     * @return BinaryFileResponse|null Risposta di download o null se fallisce
     */
<<<<<<< HEAD
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function execute(array $attachments, string $disk): null|BinaryFileResponse
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
    {
        $zipFileName = 'temp_zip_'.uniqid().'.zip';
        $zipPath = 'temp/'.$zipFileName;

        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive;
        $tempFilePath = storage_path('app/'.$zipPath);

        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');

        if ($zip->open($tempFilePath, ZipArchive::CREATE) === true) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
    {
        $zipFileName = 'temp_zip_' .uniqid() . '.zip';
        $zipPath = 'temp/' . $zipFileName;
        
        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive();
        $tempFilePath = storage_path('app/' . $zipPath);
        
        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');
        
        if ($zip->open($tempFilePath, ZipArchive::CREATE) === TRUE) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            foreach ($attachments as $attachment) {
                $filePath = $attachment;

                if (Storage::disk($disk)->exists($filePath)) {
                    $fileContent = Storage::disk($disk)->get($filePath);
                    if ($fileContent !== null) {
                        $zip->addFromString($attachment.'.pdf', $fileContent);
                    }
                } else {
                    dddx(['filePath' => $filePath]);
                }
            }
            $zip->close();

            $downloadFileName = 'attachments_'.uniqid().'.zip';

            // Usa response()->download() per il download
            return response()->download($tempFilePath, $downloadFileName, [
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
                'Content-Type' => 'application/zip',
            ]); // ->deleteFileAfterSend(true);
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                'Content-Type' => 'application/zip'
            ]);//->deleteFileAfterSend(true);
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return null;
    }
}
