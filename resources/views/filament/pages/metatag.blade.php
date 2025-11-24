<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8cf76e7 (.)
<?php

declare(strict_types=1);

?>
<x-filament-panels::page>
    <x-filament-schemas::form wire:submit="save">
        {{ $this->form }}

        <x-filament::actions
            :actions="$this->getFormActions()"
        />

    </x-filament-schemas::form>
<<<<<<< HEAD
=======
<x-filament-panels::page>
    <x-filament-panels::form wire:submit="save">
        {{ $this->form }}

        <x-filament-panels::form.actions
            :actions="$this->getFormActions()"
        />

    </x-filament-panels::form>
>>>>>>> f1d4085 (.)
=======
>>>>>>> 8cf76e7 (.)
</x-filament-panels::page>
