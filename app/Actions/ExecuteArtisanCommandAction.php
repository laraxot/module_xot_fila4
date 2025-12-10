<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Process;
use RuntimeException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
use RuntimeException;
use Throwable;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Process;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Classe per eseguire comandi Artisan in modo sicuro.
 */
class ExecuteArtisanCommandAction
{
    use QueueableAction;

    /**
     * Lista dei comandi consentiti per motivi di sicurezza.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * 
=======
=======
     * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
     * @var array<int, string>
     */
    private array $allowedCommands = [
        'migrate',
        'filament:upgrade',
        'filament:optimize',
        'view:cache',
        'config:cache',
        'route:cache',
        'event:cache',
        'queue:restart',
    ];

    /**
     * Esegue un comando Artisan e restituisce i risultati.
     *
     * @param string $command Il comando Artisan da eseguire (senza "php artisan")
     * @return array{
     *     command: string,
     *     output: array<int, string>,
     *     status: 'completed'|'failed',
     *     exitCode: int
     * } Array con informazioni sull'esecuzione del comando
     */
    public function execute(string $command): array
    {
        Assert::stringNotEmpty($command, 'Il comando non può essere vuoto');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->isCommandAllowed($command)) {
        if (!$this->isCommandAllowed($command)) {
        
        if (! $this->isCommandAllowed($command)) {
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->isCommandAllowed($command)) {
=======
        if (!$this->isCommandAllowed($command)) {
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
        if (!$this->isCommandAllowed($command)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!$this->isCommandAllowed($command)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
        
        if (! $this->isCommandAllowed($command)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

        if (!$this->isCommandAllowed($command)) {
=======
>>>>>>> 88ea7103 (.)
=======

        if (!$this->isCommandAllowed($command)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 218dfed3 (.)
        if (!$this->isCommandAllowed($command)) {
<<<<<<< HEAD
        if (!$this->isCommandAllowed($command)) {


        if (!$this->isCommandAllowed($command)) {
        if (!$this->isCommandAllowed($command)) {
        if (!$this->isCommandAllowed($command)) {
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
            throw new RuntimeException("Comando non consentito: {$command}");

        if (!$this->isCommandAllowed($command)) {
            throw new RuntimeException("Comando non consentito: {$command}");
        
        if (! $this->isCommandAllowed($command)) {
            throw new \RuntimeException("Comando non consentito: {$command}");
        }

        /** @var array<int, string> $output */
        $output = [];
        $status = 'running';

        Event::dispatch('artisan-command.started', [$command]);

        try {
            $process = Process::path(base_path())
                ->command("php artisan {$command}")
                ->timeout(300)
                ->start();

            // Cattura l'output in tempo reale
            while ($process->running()) {
                $data = $process->latestOutput();
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> a67e542f (.)
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
<<<<<<< HEAD
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
=======
>>>>>>> 218dfed3 (.)
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
=======
<<<<<<< HEAD
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
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
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 399f46d3 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 17684f52 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> ed734516 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 7131bd09 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 218dfed3 (.)
>>>>>>> ed734516 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 7131bd09 (.)
=======
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> 2f3197ab (.)
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
<<<<<<< HEAD
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
<<<<<<< HEAD
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
                        $output[] = $formattedData;
                        Event::dispatch('artisan-command.output', [$command, $formattedData]);
                    }
                }

                $errorData = $process->latestErrorOutput();
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
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
                if (!empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (!empty($formattedError)) {
                        $output[] = '[ERROR] ' . $formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $formattedError]);
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
                if (! empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (! empty($formattedError)) {
                        $output[] = '[ERROR] '.$formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$formattedError]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
>>>>>>> 2f3197ab (.)
                if (!empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (!empty($formattedError)) {
                        $output[] = '[ERROR] ' . $formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $formattedError]);
                if (! empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (! empty($formattedError)) {
                        $output[] = '[ERROR] '.$formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$formattedError]);
                if (!empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (!empty($formattedError)) {
                        $output[] = '[ERROR] ' . $formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $formattedError]);
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
                    }
                }

                usleep(50000); // 50ms di pausa per evitare sovraccarico della CPU
            }

            $result = $process->wait();

            // Cattura qualsiasi output residuo
            $finalOutput = trim($result->output());
<<<<<<< HEAD
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (! empty($finalOutput)) {
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            if (! empty($finalOutput)) {
            if (! empty($finalOutput)) {
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            if (!empty($finalOutput)) {
>>>>>>> ca9324a4 (.)
=======
            if (!empty($finalOutput)) {
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
            if (!empty($finalOutput)) {
=======
            if (! empty($finalOutput)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
<<<<<<< HEAD
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (! empty($finalOutput)) {
            if (!empty($finalOutput)) {
            if (!empty($finalOutput)) {
=======
>>>>>>> ca9324a4 (.)
=======
            if (!empty($finalOutput)) {
=======
            if (! empty($finalOutput)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            if (!empty($finalOutput)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (!empty($finalOutput)) {
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
                $output[] = $finalOutput;
                Event::dispatch('artisan-command.output', [$command, $finalOutput]);
            }

            $finalErrorOutput = trim($result->errorOutput());
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> a67e542f (.)
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
<<<<<<< HEAD
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
=======
>>>>>>> 218dfed3 (.)
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
=======
<<<<<<< HEAD
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
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
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 399f46d3 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 17684f52 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> ed734516 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 7131bd09 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 218dfed3 (.)
>>>>>>> ed734516 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 7131bd09 (.)
=======
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> 2f3197ab (.)
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
<<<<<<< HEAD
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
<<<<<<< HEAD
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
            }

            if ($result->successful()) {
                $status = 'completed';
                Event::dispatch('artisan-command.completed', [$command]);
            } else {
                $status = 'failed';
                Event::dispatch('artisan-command.failed', [$command, $finalErrorOutput]);
            }

            return [
                'command' => $command,
                'output' => $output,
                'status' => $status,
                'exitCode' => $result->exitCode() ?? 0,
            ];
        } catch (Throwable $e) {
            Event::dispatch('artisan-command.error', [$command, $e->getMessage()]);
            throw new RuntimeException(
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
<<<<<<< HEAD
<<<<<<< HEAD
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
        } catch (\Throwable $e) {
            Event::dispatch('artisan-command.error', [$command, $e->getMessage()]);
            throw new \RuntimeException(
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}", 
                (int) $e->getCode(), 
                $e
=======
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}", 
                (int) $e->getCode(), 
                $e
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
            );
        }
    }

    /**
     * Verifica se un comando è presente nella lista dei comandi consentiti.
     *
     * @param string $command Il comando da verificare
     * @param string $command Il comando da verificare
     * @param string $command Il comando da verificare
     * @param string $command Il comando da verificare
     * @param string $command Il comando da verificare
     * @return bool True se il comando è consentito, false altrimenti
     */
    private function isCommandAllowed(string $command): bool
    {
        Assert::stringNotEmpty($command, 'Il comando non può essere vuoto');
        return in_array($command, $this->allowedCommands, true);
    }
}
