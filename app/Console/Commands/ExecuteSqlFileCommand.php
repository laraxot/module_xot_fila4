<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;

use function Safe\file_get_contents;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)

class ExecuteSqlFileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:execute-sql';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Esegue un file .sql su un database specifico';

    /**
     * Execute the console command.
     */
<<<<<<< HEAD
    public function handle(): int
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function handle()
>>>>>>> 0e51323 (.)
=======
    public function handle()
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
    {
        // Chiedi il percorso del file .sql
        $filePath = $this->ask('Inserisci il percorso del file .sql');
        Assert::string($filePath, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        if (! file_exists($filePath)) {
            $this->error('Il file specificato non esiste.');

            return Command::FAILURE;
        }

        // Leggi il contenuto del file
        $sql = file_get_contents($filePath);

        // Chiedi i dettagli del database
        $host = $this->ask('Inserisci l\'host del database', '127.0.0.1');
        $port = $this->ask('Inserisci la porta del database', '3306');
        $database = $this->ask('Inserisci il nome del database');
        $username = $this->ask('Inserisci l\'utente del database');
        $password = $this->secret('Inserisci la password del database');

        // Configura una connessione temporanea
        config([
            'database.connections.temp' => [
                'driver' => 'mysql',
                'host' => $host,
                'port' => $port,
                'database' => $database,
                'username' => $username,
                'password' => $password,
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
            ],
        ]);

        try {
            // Connessione al database - $sql è sempre string grazie a Safe\file_get_contents
            DB::connection('temp')->unprepared($sql);
            $this->info('File .sql eseguito con successo!');
        } catch (Exception $e) {
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());

            return Command::FAILURE;
        } finally {
            // Rimuovi la connessione temporanea
            config(['database.connections.temp' => null]);
        }

        return Command::SUCCESS;
    }
}
