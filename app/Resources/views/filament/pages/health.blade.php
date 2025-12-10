<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8cf76e7 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 8cf76e7 (.)
<x-filament-panels::page>


    @if ($lastRanAt)
        <div
            class="{{ $lastRanAt->diffInMinutes() > 5 ? 'text-red-500' : 'text-gray-400 dark:text-gray-200' }} text-md text-center font-medium">
            {{ __('Check') }}
            {{ $lastRanAt->diffForHumans() }}
        </div>
    @endif

</x-filament-panels::page>
