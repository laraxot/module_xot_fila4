<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<x-filament::page>
    <div class="space-y-6">
        <div class="p-6 bg-white rounded-xl shadow dark:bg-gray-800">
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-medium">
                        @if($isRunning)
                            {{ __('xot::artisan-commands-manager.running', ['command' => $currentCommand]) }}
                        @else
                            {{ __('xot::artisan-commands-manager.select_command') }}
                        @endif
                    </h2>
                    
                    @if($isRunning)
                        <div class="flex items-center space-x-2">
                            <div class="animate-spin rounded-full h-4 w-4 border-b-2 border-primary-500"></div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">
                                {{ __('xot::artisan-commands-manager.executing') }}
                            </span>
                        </div>
                    @endif
                </div>

                <x-xot::terminal />
            </div>
        </div>
    </div>
{{--
    @script
    <script>
        setInterval(() => {
            if (@js($isRunning)) {
                $wire.$refresh()
            }
        }, @js($pollInterval))
    </script>
    @endscript
    --}}
<<<<<<< HEAD
</x-filament::page>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</x-filament::page>
</x-filament::page>
</x-filament::page>
</x-filament::page> 
=======
=======
</x-filament::page> 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
</x-filament::page>
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</x-filament::page>
=======
</x-filament::page> 
>>>>>>> a12f125f4a (.)
=======
</x-filament::page>
>>>>>>> b93ef594b4 (.)
=======
</x-filament::page> 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
</x-filament::page>
=======
</x-filament::page> 
>>>>>>> f1d4085 (.)
=======
</x-filament::page>
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
