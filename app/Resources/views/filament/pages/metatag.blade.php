<<<<<<< HEAD
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
<x-filament-panels::page>
    <x-filament-schemas::form wire:submit="save">
        {{ $this->form }}

        <x-filament::actions
            :actions="$this->getFormActions()"
        />

    </x-filament-panels::form>
    </x-filament-schemas::form>
=======
=======
>>>>>>> 2f3197ab (.)
<x-filament-panels::page>
    <x-filament-panels::form wire:submit="save">
        {{ $this->form }}

        <x-filament-panels::form.actions
            :actions="$this->getFormActions()"
        />

    </x-filament-panels::form>
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
</x-filament-panels::page>
