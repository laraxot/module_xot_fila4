<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Debug;

<<<<<<< HEAD
use Closure;
=======
<<<<<<< HEAD
use Closure;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Notifications\Notification;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Log;
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)

/**
 * Classe per misurare le performance di esecuzione di un blocco di codice.
<<<<<<< HEAD
 *
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
 * @template T
 */
class MeasureAction
{
    /**
     * Esegue una closure misurando il tempo di esecuzione e l'utilizzo di memoria.
     *
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
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
>>>>>>> 5a14301c (.)
     * @return T Il risultato dell'esecuzione della closure
     */
    public function execute(Closure $closure, string $label = ''): mixed
    {
<<<<<<< HEAD
=======
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
     * @param \Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     * 
     * @return T Il risultato dell'esecuzione della closure
     */
    public function execute(\Closure $closure, string $label = ''): mixed
    {
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
=======
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
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
>>>>>>> 399f46d3 (.)
            // 'peak_memory' => round(memory_get_peak_usage() / 1024 / 1024, 2).' MB',
        ];

        // Mostriamo una notifica con le metriche
        Notification::make()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
=======
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
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
>>>>>>> 399f46d3 (.)
            ->success()
            ->persistent()
            ->send();

        // Log::debug('Performance Metrics', $metrics);

        /** @var T $result */
        return $result;
    }
}
