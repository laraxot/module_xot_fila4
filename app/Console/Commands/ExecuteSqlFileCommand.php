<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;
=======
use Webmozart\Assert\Assert;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
>>>>>>> f1d4085 (.)
=======
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;
>>>>>>> 300ef70 (.)

use function Safe\file_get_contents;

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
    public function handle()
>>>>>>> 0218cd5 (.)
    {
        // Chiedi il percorso del file .sql
        $filePath = $this->ask('Inserisci il percorso del file .sql');
<<<<<<< HEAD
        Assert::string($filePath, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        if (! file_exists($filePath)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($filePath, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        if (! file_exists($filePath)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
=======
        Assert::string($filePath);
        if (! file_exists($filePath)) {
>>>>>>> f1d4085 (.)
=======
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
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
            // Connessione al database
            DB::connection('temp')->unprepared($sql);
            $this->info('File .sql eseguito con successo!');
        } catch (Exception $e) {
<<<<<<< HEAD
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> f1d4085 (.)
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

            return Command::FAILURE;
        } finally {
            // Rimuovi la connessione temporanea
            config(['database.connections.temp' => null]);
        }

        return Command::SUCCESS;
    }
}
