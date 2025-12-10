<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

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
>>>>>>> 6d05deed (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======

=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;

use function Safe\file_get_contents;
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
>>>>>>> 6d05deed (.)
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
<<<<<<< HEAD
<<<<<<< HEAD
    {
        // Chiedi il percorso del file .sql
        $filePath = $this->ask('Inserisci il percorso del file .sql');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($filePath, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        if (! file_exists($filePath)) {
=======
     *
     * @return int
     */
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
    public function handle(): int
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
<<<<<<< HEAD
     *
     * @return int
     */
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
    public function handle()
>>>>>>> 5a14301c (.)
=======
    public function handle(): int
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
=======
<<<<<<< HEAD
>>>>>>> e7da37af (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public function handle()
>>>>>>> 0e51323 (.)
=======
    public function handle()
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
    public function handle(): int
>>>>>>> 43d67f21 (.)
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public function handle(): int
>>>>>>> b7ea1cd1 (.)
=======
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
     *
     * @return int
     */
<<<<<<< HEAD
    public function handle()
>>>>>>> 5a14301c (.)
=======
    public function handle(): int
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public function handle(): int
>>>>>>> 43d67f21 (.)
=======
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
     *
     * @return int
     */
<<<<<<< HEAD
    public function handle()
>>>>>>> 5a14301c (.)
=======
    public function handle(): int
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public function handle(): int
>>>>>>> 43d67f21 (.)
=======
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public function handle(): int
>>>>>>> b7ea1cd1 (.)
=======
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
     *
     * @return int
     */
<<<<<<< HEAD
    public function handle()
>>>>>>> 5a14301c (.)
=======
    public function handle(): int
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public function handle(): int
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public function handle(): int
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public function handle(): int
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public function handle(): int
>>>>>>> 16dc7ab0 (.)
    {
        // Chiedi il percorso del file .sql
        $filePath = $this->ask('Inserisci il percorso del file .sql');
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
        Assert::string($filePath, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        if (! file_exists($filePath)) {
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
=======
        Assert::string($filePath);
        if (! file_exists($filePath)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
        Assert::string($filePath);
        if (! file_exists($filePath)) {
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
     */
<<<<<<< HEAD
    public function handle(): int
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function handle()
>>>>>>> 0218cd5 (.)
=======
>>>>>>> cf971011 (.)
=======
    public function handle(): int
>>>>>>> 76bec91a (.)
=======
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
    public function handle(): int
>>>>>>> 55fe1822 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function handle()
>>>>>>> 0e51323 (.)
=======
    public function handle()
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
    public function handle(): int
>>>>>>> 43d67f21 (.)
=======
    public function handle(): int
>>>>>>> b7ea1cd1 (.)
=======
    public function handle(): int
>>>>>>> 53d6a6ba (.)
=======
=======
    public function handle()
>>>>>>> 0218cd5 (.)
>>>>>>> b7afadf9 (.)
=======
    public function handle(): int
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
    public function handle(): int
>>>>>>> 76bec91a (.)
=======
    public function handle(): int
=======
    public function handle()
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
    {
        // Chiedi il percorso del file .sql
        $filePath = $this->ask('Inserisci il percorso del file .sql');
        Assert::string($filePath, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        if (! file_exists($filePath)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($filePath, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        if (! file_exists($filePath)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> d2b0a27 (.)
=======
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        Assert::string($filePath, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!file_exists($filePath)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // Connessione al database - $sql è sempre string grazie a Safe\file_get_contents
            DB::connection('temp')->unprepared($sql);
            $this->info('File .sql eseguito con successo!');
        } catch (Exception $e) {
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            // Connessione al database
            DB::connection('temp')->unprepared($sql);
            $this->info('File .sql eseguito con successo!');
        } catch (Exception $e) {
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
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
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
        } catch (Exception $e) {
>>>>>>> 399f46d3 (.)
=======
=======
<<<<<<< HEAD
        } catch (Exception $e) {
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
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
>>>>>>> a12f125f4a (.)
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
        } catch (\Exception $e) {
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
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
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
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
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
            $this->error("Errore durante l'esecuzione del file: " . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)

            return Command::FAILURE;
        } finally {
            // Rimuovi la connessione temporanea
            config(['database.connections.temp' => null]);
        }

        return Command::SUCCESS;
    }
}
