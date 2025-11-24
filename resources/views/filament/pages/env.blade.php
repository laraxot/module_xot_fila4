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
     <form wire:submit.prevent="submit">
        {{ $this->form }}

        <x-filament::button type="submit" class="mt-4">
            Save <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="submit"/>
        </x-filament::button>
    </form>
</x-filament-panels::page>
