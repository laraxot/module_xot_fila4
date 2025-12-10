<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Debug;

use Filament\Notifications\Notification;
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

/**
 * Classe per misurare le performance di esecuzione di un blocco di codice.
<<<<<<< HEAD
 *
<<<<<<< HEAD
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
 * @template T
 */
class MeasureAction
{
    /**
     * Esegue una closure misurando il tempo di esecuzione e l'utilizzo di memoria.
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @param Closure():T $closure La closure da eseguire e misurare
     * @param string $label Etichetta opzionale per identificare la misurazione
     *
     * @return T Il risultato dell'esecuzione della closure
     */
    public function execute(Closure $closure, string $label = ''): mixed
    {
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
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
        
        Assert::isCallable($closure, 'Il parametro $closure deve essere una funzione chiamabile');

        

        

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
>>>>>>> 2f3197ab (.)
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
            'execution_time' => round($execution_time, 2).' ms',
            'memory_usage' => round($memory_usage, 2).' KB',
=======
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
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
            'execution_time' => round($execution_time, 2) . ' ms',
            'memory_usage' => round($memory_usage, 2) . ' KB',
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
            // 'peak_memory' => round(memory_get_peak_usage() / 1024 / 1024, 2).' MB',
        ];

        // Mostriamo una notifica con le metriche
        Notification::make()
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
            ->title('Performance Metrics '.($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'].'  '.$metrics['memory_usage'])
=======
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
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
            ->title('Performance Metrics ' . ($label !== '' ? $label : 'Unnamed'))
            ->body($metrics['execution_time'] . '  ' . $metrics['memory_usage'])
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
            ->success()
            ->persistent()
            ->send();

        // Log::debug('Performance Metrics', $metrics);

        /** @var T $result */
        return $result;
    }
}
