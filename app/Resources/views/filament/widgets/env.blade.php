<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
<x-filament-widgets::widget>
    <x-filament::section>
        {{-- Widget content

        <x-filament::button wire:click="begin">Start/Stop</x-filament::button>

        <h1>Time: <span wire:stream="count">{{ $time }}</span></h1>
        --}}
         <form wire:submit.prevent="submit">
        {{ $this->form }}

        <x-filament::button type="submit" class="mt-4">
            Save <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="submit"/>
        </x-filament::button>
    </form>

    </x-filament::section>
</x-filament-widgets::widget>
