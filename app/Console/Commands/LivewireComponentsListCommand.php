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
<<<<<<< HEAD
<<<<<<< HEAD
     */
=======
=======
>>>>>>> 5a14301c (.)
     *
     * @return void
     */
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Call to undefined method Livewire\LivewireManager::getComponents()
        // $registeredComponents = Livewire::getComponents();
<<<<<<< HEAD
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
=======
=======
>>>>>>> origin/develop

        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // dddx(get_class_methods(app(ComponentRegistry::class)));
        // $manifest = app(\Livewire\LivewireComponentsFinder::class)->getManifest();
        // dddx($manifest);
        // dddx(get_class_methods(app(HandleComponents::class)));
        // Ottieni tutti i componenti registrati
        // $registeredComponents = LivewireManager::getAliases();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Stampa o manipola l'array di componenti come desiderato
        // print_r($registeredComponents);
        // dddx(get_class_methods(app(LivewireManager::class)));
    }
}
