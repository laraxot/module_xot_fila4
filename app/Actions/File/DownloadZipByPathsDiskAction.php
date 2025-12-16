<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use ZipArchive;
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use ZipArchive;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use ZipArchive;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

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
        $zip = new ZipArchive;
        $tempFilePath = storage_path('app/'.$zipPath);
<<<<<<< HEAD
=======
<<<<<<< HEAD
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

        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');

        if ($zip->open($tempFilePath, ZipArchive::CREATE) === true) {
    {
        $zipFileName = 'temp_zip_' . uniqid() . '.zip';
        $zipPath = 'temp/' . $zipFileName;

        // Crea un file temporaneo per lo ZIP usando Storage
        $zip = new ZipArchive();
        $tempFilePath = storage_path('app/' . $zipPath);
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        // Assicurati che la directory temp esista
        Storage::disk('local')->makeDirectory('temp');

        if ($zip->open($tempFilePath, ZipArchive::CREATE) === true) {
            foreach ($attachments as $attachment) {
                $filePath = $attachment;

<<<<<<< HEAD
                if (Storage::disk($disk)->exists($filePath)) {
                    $fileContent = Storage::disk($disk)->get($filePath);
                    if ($fileContent !== null) {
                        $zip->addFromString($attachment.'.pdf', $fileContent);
=======
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
                if (Storage::disk($disk)->exists($filePath)) {
                    $fileContent = Storage::disk($disk)->get($filePath);
                    if ($fileContent !== null) {
<<<<<<< HEAD
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                        $zip->addFromString($attachment . '.pdf', $fileContent);
                        $zip->addFromString($attachment . '.pdf', $fileContent);
=======
                        $zip->addFromString($attachment.'.pdf', $fileContent);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                    }
                } else {
                    dddx(['filePath' => $filePath]);
                }
            }
            $zip->close();

<<<<<<< HEAD
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
            $downloadFileName = 'attachments_' . uniqid() . '.zip';
=======
            $downloadFileName = 'attachments_'.uniqid().'.zip';
<<<<<<< HEAD
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

            // Usa response()->download() per il download
            return response()->download($tempFilePath, $downloadFileName, [
                'Content-Type' => 'application/zip',
<<<<<<< HEAD
            ]); // ->deleteFileAfterSend(true);
        }

=======
<<<<<<< HEAD
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
=======
            ]); // ->deleteFileAfterSend(true);
>>>>>>> 551c768c4 (.)
        }

>>>>>>> 38b70c7ba (.)
        return null;
    }
}
