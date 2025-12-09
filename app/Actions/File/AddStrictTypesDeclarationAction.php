<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

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
use Illuminate\Support\Facades\File;
use InvalidArgumentException;
use RuntimeException;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use InvalidArgumentException;
use RuntimeException;
use Illuminate\Support\Facades\File;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use RuntimeException;
use Illuminate\Support\Facades\File;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use RuntimeException;
use Illuminate\Support\Facades\File;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use RuntimeException;
use Illuminate\Support\Facades\File;
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;

/**
 * Aggiunge la dichiarazione strict_types ai file PHP che ne sono sprovvisti.
 */
class AddStrictTypesDeclarationAction
{
    use QueueableAction;

    /**
     * Aggiunge la dichiarazione strict_types a un file PHP.
     */
    public function execute(string $filePath): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! File::exists($filePath)) {
=======
        if (!File::exists($filePath)) {
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!File::exists($filePath)) {
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
        if (!File::exists($filePath)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!File::exists($filePath)) {
>>>>>>> 5a14301c (.)
            throw new InvalidArgumentException("Il file {$filePath} non esiste");
        }

        $content = File::get($filePath);

        // Se il file ha già la dichiarazione strict_types, non fare nulla
        if (str_contains($content, 'declare(strict_types=1)')) {
            return;
        }

        // Trova la posizione del tag di apertura PHP
        $phpTagPos = strpos($content, '<?php');
        if ($phpTagPos === false) {
            throw new RuntimeException("Il file {$filePath} non ha un tag di apertura PHP valido");
        }

        // Trova la prima riga non vuota dopo il tag PHP
        $lines = explode("\n", $content);
        $firstNonEmptyLine = 0;
        foreach ($lines as $i => $line) {
            if ($i === 0) {
                continue; // Salta la prima riga che contiene <?php
            }
            $trimmedLine = trim($line);
            if ($trimmedLine !== '') {
                $firstNonEmptyLine = $i;
                break;
            }
        }

        // Inserisci la dichiarazione strict_types dopo il tag PHP e una riga vuota
        array_splice($lines, $firstNonEmptyLine, 0, ['declare(strict_types=1);', '']);

        // Salva il file modificato
        File::put($filePath, implode("\n", $lines));
    }
}
