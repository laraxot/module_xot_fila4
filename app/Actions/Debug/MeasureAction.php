<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Debug;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Closure;
=======
<<<<<<< HEAD
use Closure;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use Closure;
>>>>>>> 091f883c (.)
use Filament\Notifications\Notification;
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Log;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Log;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Log;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Log;
use Webmozart\Assert\Assert;
=======
>>>>>>> 551c768c4 (.)

/**
 * Classe per misurare le performance di esecuzione di un blocco di codice.
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
 * @template T
 */
class MeasureAction
{
    /**
     * Esegue una closure misurando il tempo di esecuzione e l'utilizzo di memoria.
     *
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
     * @param  Closure():T  $closure  La closure da eseguire e misurare
     * @param  string  $label  Etichetta opzionale per identificare la misurazione
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
=======
     * @param  Closure():T  $closure  La closure da eseguire e misurare
     * @param  string  $label  Etichetta opzionale per identificare la misurazione
>>>>>>> 551c768c4 (.)
     * @return T Il risultato dell'esecuzione della closure
     */
    public function execute(Closure $closure, string $label = ''): mixed
    {
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

>>>>>>> 5cf46378 (.)
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 2f3197ab (.)
     * @param \Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     * 
     * @return T Il risultato dell'esecuzione della closure
     */
    public function execute(\Closure $closure, string $label = ''): mixed
    {
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');
        
<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');

        
<<<<<<< HEAD
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
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');

>>>>>>> 5a14301c (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)

        

        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');

        

<<<<<<< HEAD
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');

        

        




        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');

        

        



        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');

        

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
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        $start = microtime(true);
        $memory_start = memory_get_usage();

        // Eseguiamo la closure e otteniamo il risultato
        $result = $closure();

        $end = microtime(true);
        $memory_end = memory_get_usage();

        // Calcoliamo le metriche di performance
        $execution_time = ($end - $start) * 1000; // Conversione in millisecondi
        $memory_usage = ($memory_end - $memory_start) / 1024; // Conversione in KB

        $metrics = [
            'label' => $label,
<<<<<<< HEAD
<<<<<<< HEAD
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
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
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
<<<<<<< HEAD
<<<<<<< HEAD
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 5a14301c (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 3fbbf1f5 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 399f46d3 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 17684f52 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 399f46d3 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
=======
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> b93ef594b4 (.)
=======
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 218dfed3 (.)
>>>>>>> ca9324a4 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 7131bd09 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> ed734516 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 7131bd09 (.)
=======
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
=======
>>>>>>> ca9324a4 (.)
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
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
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
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
>>>>>>> 551c768c4 (.)
            // 'peak_memory' => round(memory_get_peak_usage() / 1024 / 1024, 2).' MB',
        ];

        // Mostriamo una notifica con le metriche
        Notification::make()
<<<<<<< HEAD
<<<<<<< HEAD
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
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
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
<<<<<<< HEAD
<<<<<<< HEAD
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 5a14301c (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 3fbbf1f5 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 399f46d3 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 17684f52 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 399f46d3 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
=======
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> b93ef594b4 (.)
=======
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 218dfed3 (.)
>>>>>>> ca9324a4 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 7131bd09 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> ed734516 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 7131bd09 (.)
=======
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
=======
>>>>>>> ca9324a4 (.)
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
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
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
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
>>>>>>> 551c768c4 (.)
            ->success()
            ->persistent()
            ->send();

        // Log::debug('Performance Metrics', $metrics);

        /** @var T $result */
        return $result;
    }
}
