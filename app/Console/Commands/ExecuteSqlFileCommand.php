<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;
=======
use Webmozart\Assert\Assert;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
use Webmozart\Assert\Assert;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
     *
     * @return int
     */
    public function handle(): int
    {
        // Chiedi il percorso del file .sql
        $filePath = $this->ask('Inserisci il percorso del file .sql');
<<<<<<< HEAD
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
=======
        Assert::string($filePath);
        if (! file_exists($filePath)) {
>>>>>>> a12f125f4a (.)
=======
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($filePath);
        if (! file_exists($filePath)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
        } catch (Exception $e) {
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
=======
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> a12f125f4a (.)
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
        } catch (\Exception $e) {
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return Command::FAILURE;
        } finally {
            // Rimuovi la connessione temporanea
            config(['database.connections.temp' => null]);
        }

        return Command::SUCCESS;
    }
}
