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
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
<?php

declare(strict_types=1);

?>
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
{{-- Vista per il widget AppointmentOverviewWidget --}}
<x-filament-widgets::widget>
        {{-- Grid responsive per gli stati degli appuntamenti (ottimizzato per 17 stati) --}}
        <div class="grid gap-2" style="grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); max-width: 100%;">
            @forelse($states as $state)
                <div class="bg-white dark:bg-gray-800 rounded-lg p-2 shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-200">
                    {{-- Icona e colore dello stato --}}
                    <div class="flex items-center justify-center mb-1">
                        <div class="p-1.5 rounded-full" style="background-color: {{ $state['color'] }}20;">
                            @svg('heroicon-o-' . $state['icon'], 'w-4 h-4', ['style' => 'color: ' . $state['color']])
                        </div>
                    </div>
                    
                    {{-- Conteggio --}}
                    <div class="text-center">
                        <p class="text-lg font-bold text-gray-900 dark:text-gray-100">
                            {{ number_format($state['count']) }}
                        </p>
                        <p class="text-xs font-medium text-gray-600 dark:text-gray-400 mt-0.5 leading-tight">
                            {{ $state['label'] }}
                        </p>
                    </div>
                </div>
            @empty
                {{-- Stato vuoto --}}
                <div class="col-span-full text-center py-8">
                    <div class="text-gray-400 dark:text-gray-600">
                        <x-heroicon-o-calendar class="w-12 h-12 mx-auto mb-2" />
                        <p class="text-sm">{{ __('<nome modulo>::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('<nome modulo>::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                        <p class="text-sm">{{ __('salutemo::widgets.appointment_overview.empty_state') }}</p>
                    </div>
                </div>
            @endforelse
        </div>

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
</x-filament-widgets::widget>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</x-filament-widgets::widget>
</x-filament-widgets::widget>
</x-filament-widgets::widget>
</x-filament-widgets::widget>
=======
=======
</x-filament-widgets::widget>
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
</x-filament-widgets::widget>
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
</x-filament-widgets::widget>
>>>>>>> 358ba79a7 (.)
=======
</x-filament-widgets::widget>
>>>>>>> f8f76a284 (.)
=======
</x-filament-widgets::widget>
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</x-filament-widgets::widget>
=======
</x-filament-widgets::widget>
>>>>>>> a12f125f4a (.)
=======
</x-filament-widgets::widget>
>>>>>>> b93ef594b4 (.)
=======
</x-filament-widgets::widget>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
</x-filament-widgets::widget>
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
</x-filament-widgets::widget>
=======
</x-filament-widgets::widget>
>>>>>>> f1d4085 (.)
=======
</x-filament-widgets::widget>
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
</x-filament-widgets::widget>
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
</x-filament-widgets::widget>
=======
</x-filament-widgets::widget>
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
</x-filament-widgets::widget>
>>>>>>> aba62c408 (.)
=======
</x-filament-widgets::widget>
=======
</x-filament-widgets::widget>
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
</x-filament-widgets::widget>
>>>>>>> 5cb992cc6 (.)
=======
</x-filament-widgets::widget>
=======
</x-filament-widgets::widget>
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
</x-filament-widgets::widget>
>>>>>>> 3c8d62b79 (.)
