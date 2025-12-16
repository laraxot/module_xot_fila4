<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

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
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Process;
use RuntimeException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
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
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use RuntimeException;
use Throwable;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Process;
use Spatie\QueueableAction\QueueableAction;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
     *
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
     *
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
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
     * @param  string  $command  Il comando Artisan da eseguire (senza "php artisan")
=======
<<<<<<< HEAD
     * @param string $command Il comando Artisan da eseguire (senza "php artisan")
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 091f883c (.)
     *
     * @throws RuntimeException Se il comando non è consentito o si verifica un errore
     *
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
=======
     * @param  string  $command  Il comando Artisan da eseguire (senza "php artisan")
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * @return array{
     *     command: string,
     *     output: array<int, string>,
     *     status: 'completed'|'failed',
     *     exitCode: int
     * } Array con informazioni sull'esecuzione del comando
<<<<<<< HEAD
     *
     * @throws RuntimeException Se il comando non è consentito o si verifica un errore
=======
<<<<<<< HEAD
=======
     *
     * @throws RuntimeException Se il comando non è consentito o si verifica un errore
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     */
    public function execute(string $command): array
    {
        Assert::stringNotEmpty($command, 'Il comando non può essere vuoto');
<<<<<<< HEAD

        if (! $this->isCommandAllowed($command)) {
            throw new RuntimeException("Comando non consentito: {$command}");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)

        if (! $this->isCommandAllowed($command)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======

        if (!$this->isCommandAllowed($command)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
            throw new RuntimeException("Comando non consentito: {$command}");
<<<<<<< HEAD
<<<<<<< HEAD

        if (!$this->isCommandAllowed($command)) {
            throw new RuntimeException("Comando non consentito: {$command}");
        
        if (! $this->isCommandAllowed($command)) {
            throw new \RuntimeException("Comando non consentito: {$command}");
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        if (!$this->isCommandAllowed($command)) {
=======
        
        if (! $this->isCommandAllowed($command)) {
>>>>>>> a12f125f4a (.)
=======

        if (!$this->isCommandAllowed($command)) {
>>>>>>> b93ef594b4 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======

<<<<<<< HEAD
        if (! $this->isCommandAllowed($command)) {
=======
        if (!$this->isCommandAllowed($command)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======

        if (!$this->isCommandAllowed($command)) {
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
            throw new RuntimeException("Comando non consentito: {$command}");
=======
        
        if (! $this->isCommandAllowed($command)) {
            throw new \RuntimeException("Comando non consentito: {$command}");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
>>>>>>> 38b70c7ba (.)
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
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
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
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 17684f52 (.)
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
<<<<<<< HEAD
<<<<<<< HEAD
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> b7afadf9 (.)
=======
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 9db27d12 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
                if (!empty($data)) {
                    $formattedData = trim($data);
                    if (!empty($formattedData)) {
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
                if (! empty($data)) {
                    $formattedData = trim($data);
                    if (! empty($formattedData)) {
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                        $output[] = $formattedData;
                        Event::dispatch('artisan-command.output', [$command, $formattedData]);
                    }
                }

                $errorData = $process->latestErrorOutput();
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
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                if (! empty($errorData)) {
                    $formattedError = trim($errorData);
                    if (! empty($formattedError)) {
                        $output[] = '[ERROR] '.$formattedError;
                        Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$formattedError]);
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                    }
                }

                usleep(50000); // 50ms di pausa per evitare sovraccarico della CPU
            }

            $result = $process->wait();

            // Cattura qualsiasi output residuo
            $finalOutput = trim($result->output());
<<<<<<< HEAD
            if (! empty($finalOutput)) {
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            if (! empty($finalOutput)) {
            if (! empty($finalOutput)) {
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
            if (!empty($finalOutput)) {
>>>>>>> 399f46d3 (.)
=======
            if (!empty($finalOutput)) {
>>>>>>> 17684f52 (.)
=======
            if (!empty($finalOutput)) {
>>>>>>> 399f46d3 (.)
=======
            if (!empty($finalOutput)) {
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
            if (! empty($finalOutput)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            if (! empty($finalOutput)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            if (!empty($finalOutput)) {
=======
            if (! empty($finalOutput)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
            if (!empty($finalOutput)) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
            if (!empty($finalOutput)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            if (!empty($finalOutput)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            if (! empty($finalOutput)) {
>>>>>>> 53d6a6ba (.)
=======
=======
            if (!empty($finalOutput)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            if (! empty($finalOutput)) {
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                $output[] = $finalOutput;
                Event::dispatch('artisan-command.output', [$command, $finalOutput]);
            }

            $finalErrorOutput = trim($result->errorOutput());
<<<<<<< HEAD
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
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
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 17684f52 (.)
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
<<<<<<< HEAD
<<<<<<< HEAD
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> b7afadf9 (.)
=======
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 9db27d12 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
            if (!empty($finalErrorOutput)) {
                $output[] = '[ERROR] ' . $finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] ' . $finalErrorOutput]);
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            if (! empty($finalErrorOutput)) {
                $output[] = '[ERROR] '.$finalErrorOutput;
                Event::dispatch('artisan-command.output', [$command, '[ERROR] '.$finalErrorOutput]);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
=======
<<<<<<< HEAD
<<<<<<< HEAD
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
        } catch (Throwable $e) {
            Event::dispatch('artisan-command.error', [$command, $e->getMessage()]);
            throw new RuntimeException(
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}", 
                (int) $e->getCode(), 
                $e
>>>>>>> a12f125f4a (.)
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        } catch (\Throwable $e) {
            Event::dispatch('artisan-command.error', [$command, $e->getMessage()]);
            throw new \RuntimeException(
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}", 
                (int) $e->getCode(), 
                $e
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}", 
                (int) $e->getCode(), 
                $e
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
                "Errore durante l'esecuzione del comando {$command}: {$e->getMessage()}",
                (int) $e->getCode(),
                $e,
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
            );
        }
    }

    /**
     * Verifica se un comando è presente nella lista dei comandi consentiti.
     *
<<<<<<< HEAD
     * @param  string  $command  Il comando da verificare
=======
<<<<<<< HEAD
     * @param string $command Il comando da verificare
     * @param string $command Il comando da verificare
     * @param string $command Il comando da verificare
     * @param string $command Il comando da verificare
     * @param string $command Il comando da verificare
=======
     * @param  string  $command  Il comando da verificare
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * @return bool True se il comando è consentito, false altrimenti
     */
    private function isCommandAllowed(string $command): bool
    {
        Assert::stringNotEmpty($command, 'Il comando non può essere vuoto');
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        return in_array($command, $this->allowedCommands, true);
    }
}
