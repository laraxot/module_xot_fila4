<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

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
>>>>>>> ce6fc085 (.)
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use ZipArchive;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
use ZipArchive;
=======
<<<<<<< HEAD
use ZipArchive;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
    {
        $zipFileName = 'temp_zip_'.uniqid().'.zip';
        $zipPath = 'temp/'.$zipFileName;

        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive();
        $tempFilePath = storage_path('app/'.$zipPath);
     * @param array<string> $attachments Array di percorsi file
     * @param string $disk Nome del disco di storage
     * @return BinaryFileResponse|null Risposta di download o null se fallisce
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function execute(array $attachments, string $disk): null|BinaryFileResponse
    {
        $zipFileName = 'temp_zip_' . uniqid() . '.zip';
        $zipPath = 'temp/' . $zipFileName;

        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive();
        $tempFilePath = storage_path('app/' . $zipPath);

        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');

        if ($zip->open($tempFilePath, ZipArchive::CREATE) === true) {
    {
        $zipFileName = 'temp_zip_' . uniqid() . '.zip';
        $zipPath = 'temp/' . $zipFileName;

        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive();
        $tempFilePath = storage_path('app/' . $zipPath);

        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');

        if ($zip->open($tempFilePath, ZipArchive::CREATE) === true) {
<<<<<<< HEAD
            foreach ($attachments as $attachment) {
                $filePath = $attachment;

<<<<<<< HEAD
=======
=======
=======
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
=======
    public function execute(array $attachments, string $disk): null|BinaryFileResponse
>>>>>>> b93ef594b4 (.)
    {
        $zipFileName = 'temp_zip_' . uniqid() . '.zip';
        $zipPath = 'temp/' . $zipFileName;

        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive();
        $tempFilePath = storage_path('app/' . $zipPath);

        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');
<<<<<<< HEAD
        
        if ($zip->open($tempFilePath, ZipArchive::CREATE) === TRUE) {
>>>>>>> a12f125f4a (.)
=======

        if ($zip->open($tempFilePath, ZipArchive::CREATE) === true) {
>>>>>>> b93ef594b4 (.)
            foreach ($attachments as $attachment) {
                $filePath = $attachment;

=======
>>>>>>> ce6fc085 (.)
    public function execute(array $attachments, string $disk): ?BinaryFileResponse
    {
        $zipFileName = 'temp_zip_' .uniqid() . '.zip';
        $zipPath = 'temp/' . $zipFileName;
        
        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new \ZipArchive();
        $tempFilePath = storage_path('app/' . $zipPath);
        
        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');
        
        if ($zip->open($tempFilePath, \ZipArchive::CREATE) === TRUE) {
            foreach ($attachments as $attachment) {
                $filePath = $attachment;
                
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
                if (Storage::disk($disk)->exists($filePath)) {
                    $fileContent = Storage::disk($disk)->get($filePath);
                    if ($fileContent !== null) {
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                    }
                } else {
                    dddx(['filePath' => $filePath]);
                }
            }
            $zip->close();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            $downloadFileName = 'attachments_' . uniqid() . '.zip';

            // Usa response()->download() per il download
            return response()->download($tempFilePath, $downloadFileName, [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                'Content-Type' => 'application/zip',
            ]); //->deleteFileAfterSend(true);
            ]); //->deleteFileAfterSend(true);
            ]); //->deleteFileAfterSend(true);
            ]); //->deleteFileAfterSend(true);
            ]); //->deleteFileAfterSend(true);
        }

                'Content-Type' => 'application/zip'
            ]);//->deleteFileAfterSend(true);
        }
        
                'Content-Type' => 'application/zip',
            ]); //->deleteFileAfterSend(true);
        }

<<<<<<< HEAD
=======
=======
=======
            
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            
            // Usa response()->download() per il download
            return response()->download($tempFilePath, $downloadFileName, [
>>>>>>> origin/develop
                'Content-Type' => 'application/zip'
            ]);//->deleteFileAfterSend(true);
        }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                'Content-Type' => 'application/zip',
            ]); //->deleteFileAfterSend(true);
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return null;
    }
}
