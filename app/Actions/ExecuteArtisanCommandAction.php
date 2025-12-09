<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Process;
use RuntimeException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use RuntimeException;
use Throwable;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Process;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Webmozart\Assert\Assert;

/**
 * Classe per eseguire comandi Artisan in modo sicuro.
 */
class ExecuteArtisanCommandAction
{
    use QueueableAction;

    /**
     * Lista dei comandi consentiti per motivi di sicurezza.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $command  Il comando Artisan da eseguire (senza "php artisan")
=======
=======
>>>>>>> 5a14301c (.)
     * @param string $command Il comando Artisan da eseguire (senza "php artisan")
     *
     * @throws RuntimeException Se il comando non è consentito o si verifica un errore
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
     *
     * @throws RuntimeException Se il comando non è consentito o si verifica un errore
     *
=======
     * 
     * @throws \RuntimeException Se il comando non è consentito o si verifica un errore
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
     * @return array{
     *     command: string,
     *     output: array<int, string>,
     *     status: 'completed'|'failed',
     *     exitCode: int
     * } Array con informazioni sull'esecuzione del comando
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @throws RuntimeException Se il comando non è consentito o si verifica un errore
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function execute(string $command): array
    {
        Assert::stringNotEmpty($command, 'Il comando non può essere vuoto');
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->isCommandAllowed($command)) {
=======
        if (!$this->isCommandAllowed($command)) {
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
        
        if (! $this->isCommandAllowed($command)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======

        if (!$this->isCommandAllowed($command)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
            throw new RuntimeException("Comando non consentito: {$command}");
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
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
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> ed734516 (.)
=======
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> ca9324a4 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                        $output[] = $formattedData;
                        Event::dispatch('artisan-command.output', [$command, $formattedData]);
                    }
                }

                $errorData = $process->latestErrorOutput();
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
                if (!empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (!empty($formattedError)) {
                        $output[] = '[ERROR] ' . $formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $formattedError]);
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
                if (! empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (! empty($formattedError)) {
                        $output[] = '[ERROR] '.$formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$formattedError]);
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
                if (!empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (!empty($formattedError)) {
                        $output[] = '[ERROR] ' . $formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $formattedError]);
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
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
                if (! empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (! empty($formattedError)) {
                        $output[] = '[ERROR] '.$formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$formattedError]);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                if (!empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (!empty($formattedError)) {
                        $output[] = '[ERROR] ' . $formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $formattedError]);
>>>>>>> b93ef594b4 (.)
=======
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                    }
                }

                usleep(50000); // 50ms di pausa per evitare sovraccarico della CPU
            }

            $result = $process->wait();

            // Cattura qualsiasi output residuo
            $finalOutput = trim($result->output());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! empty($finalOutput)) {
=======
            if (!empty($finalOutput)) {
>>>>>>> 5a14301c (.)
=======
            if (!empty($finalOutput)) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!empty($finalOutput)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!empty($finalOutput)) {
=======
            if (! empty($finalOutput)) {
>>>>>>> a12f125f4a (.)
=======
            if (!empty($finalOutput)) {
>>>>>>> b93ef594b4 (.)
=======
            if (! empty($finalOutput)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
            if (!empty($finalOutput)) {
=======
            if (! empty($finalOutput)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (!empty($finalOutput)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                $output[] = $finalOutput;
                Event::dispatch('artisan-command.output', [$command, $finalOutput]);
            }

            $finalErrorOutput = trim($result->errorOutput());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
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
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> ed734516 (.)
=======
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> ca9324a4 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}", 
                (int) $e->getCode(), 
                $e
>>>>>>> f1d4085 (.)
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
>>>>>>> 73eab74 (.)
            );
        }
    }

    /**
     * Verifica se un comando è presente nella lista dei comandi consentiti.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $command  Il comando da verificare
=======
     * @param string $command Il comando da verificare
>>>>>>> 5a14301c (.)
=======
     * @param string $command Il comando da verificare
>>>>>>> 5a14301c (.)
     * @return bool True se il comando è consentito, false altrimenti
     */
    private function isCommandAllowed(string $command): bool
    {
        Assert::stringNotEmpty($command, 'Il comando non può essere vuoto');
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return in_array($command, $this->allowedCommands, true);
    }
}
