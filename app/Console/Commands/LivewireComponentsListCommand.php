<?php

declare(strict_types=1);

/**
 * get all registered livewire components.
 *
 * @see ---
 */

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;

class LivewireComponentsListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:livewire-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = ' rilevare tutti i componenti registrati di Livewire';

    /**
     * Create a new command instance.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
    public function __construct()
    {
        parent::__construct();
    }
>>>>>>> f1d4085 (.)
=======
    
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    
>>>>>>> 300ef70 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Call to undefined method Livewire\LivewireManager::getComponents()
        // $registeredComponents = Livewire::getComponents();
<<<<<<< HEAD
<<<<<<< HEAD
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
=======

        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);

>>>>>>> f1d4085 (.)
=======
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
>>>>>>> 300ef70 (.)
        // dddx(get_class_methods(app(ComponentRegistry::class)));
        // $manifest = app(\Livewire\LivewireComponentsFinder::class)->getManifest();
        // dddx($manifest);
        // dddx(get_class_methods(app(HandleComponents::class)));
        // Ottieni tutti i componenti registrati
        // $registeredComponents = LivewireManager::getAliases();
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
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
        // dddx(get_class_methods(app(LivewireManager::class)));
    }
}
