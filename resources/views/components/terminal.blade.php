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
<?php

declare(strict_types=1);

?>
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
<div
    x-data="{
        output: @entangle('output'),
        autoScroll: true,
        init() {
            this.$watch('output', () => {
                if (this.autoScroll) {
                    this.$nextTick(() => {
                        this.$refs.terminal.scrollTop = this.$refs.terminal.scrollHeight;
                    });
                }
            });
        }
    }"
    class="relative"
>
    <div
        x-ref="terminal"
        class="bg-gray-900 text-green-400 font-mono p-4 rounded-lg h-96 overflow-y-auto"
        style="font-family: 'Fira Code', monospace;"
    >
        <template x-for="(line, index) in output" :key="index">
            <div class="whitespace-pre-wrap" x-text="line"></div>
        </template>
        
        <div x-show="$wire.isRunning" class="animate-pulse">
            <span class="text-green-400"</span>
            <span class="animate-blink">_</span>
        </div>
    </div>

    <div class="absolute bottom-4 right-4 flex space-x-2">
        <button
            @click="autoScroll = !autoScroll"
            class="px-3 py-1 text-sm rounded-md"
            :class="autoScroll ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
        >
            Auto-scroll: <span x-text="autoScroll ? 'ON' : 'OFF'"></span>
        </button>
        
        <button
            @click="$refs.terminal.scrollTop = $refs.terminal.scrollHeight"
            class="px-3 py-1 text-sm bg-gray-700 text-gray-300 rounded-md hover:bg-gray-600"
        >
            Scroll to Bottom
        </button>
    </div>
</div>

<style>
@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

.animate-blink {
    animation: blink 1s infinite;
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</style>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</style>
</style>
</style>
</style> 
=======
=======
</style> 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
</style>
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
</style>
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</style>
=======
</style> 
>>>>>>> a12f125f4a (.)
=======
</style>
>>>>>>> b93ef594b4 (.)
=======
</style> 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
</style>
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
</style>
=======
</style> 
>>>>>>> f1d4085 (.)
=======
</style>
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
</style>
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
</style>
=======
</style> 
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
