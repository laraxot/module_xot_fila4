<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Debug;

use Closure;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Webmozart\Assert\Assert;

/**
 * Classe per misurare le performance di esecuzione di un blocco di codice.
<<<<<<< HEAD
<<<<<<< HEAD
 *
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
=======
 *
>>>>>>> 300ef70 (.)
 * @template T
 */
class MeasureAction
{
    /**
     * Esegue una closure misurando il tempo di esecuzione e l'utilizzo di memoria.
     *
     * @param  Closure():T  $closure  La closure da eseguire e misurare
     * @param  string  $label  Etichetta opzionale per identificare la misurazione
     * @return T Il risultato dell'esecuzione della closure
     */
    public function execute(Closure $closure, string $label = ''): mixed
    {
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
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
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
=======
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
>>>>>>> f1d4085 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
>>>>>>> 300ef70 (.)
            // 'peak_memory' => round(memory_get_peak_usage() / 1024 / 1024, 2).' MB',
        ];

        // Mostriamo una notifica con le metriche
        Notification::make()
<<<<<<< HEAD
<<<<<<< HEAD
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
=======
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
>>>>>>> f1d4085 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
>>>>>>> 300ef70 (.)
            ->success()
            ->persistent()
            ->send();

        // Log::debug('Performance Metrics', $metrics);

        /** @var T $result */
        return $result;
    }
}
