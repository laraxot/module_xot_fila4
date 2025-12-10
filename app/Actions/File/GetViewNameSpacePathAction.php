<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Facades\View;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;

class GetViewNameSpacePathAction
{
    use QueueableAction;

    /**
     * Ottiene il percorso di un namespace di vista.
     *
     * @param  string  $ns  Il namespace della vista
     * @return string|null Il percorso del namespace o null se non trovato
     */
    public function execute(string $ns): ?string
     * @param string $ns Il namespace della vista
     *
     * @return string|null Il percorso del namespace o null se non trovato
     */
    public function execute(string $ns): null|string
<<<<<<< HEAD
=======
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $ns): null|string
=======
>>>>>>> 2f3197ab (.)
    public function execute(string $ns): ?string
    public function execute(string $ns): ?string
    public function execute(string $ns): null|string
    public function execute(string $ns): ?string
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(string $ns): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function execute(string $ns): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function execute(string $ns): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(string $ns): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function execute(string $ns): ?string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public function execute(string $ns): null|string
    public function execute(string $ns): ?string
    public function execute(string $ns): null|string
<<<<<<< HEAD
    public function execute(string $ns): ?string
    public function execute(string $ns): null|string
    public function execute(string $ns): ?string
    public function execute(string $ns): null|string
    public function execute(string $ns): null|string
    public function execute(string $ns): null|string
    public function execute(string $ns): null|string
    public function execute(string $ns): ?string
    public function execute(string $ns): null|string
    public function execute(string $ns): ?string
    public function execute(string $ns): null|string
    public function execute(string $ns): null|string
    public function execute(string $ns): ?string
    public function execute(string $ns): null|string
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function execute(string $ns): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function execute(string $ns): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
    {
        $xot = XotData::make();

        // Utilizziamo il facade View direttamente per accedere ai view hints
        $viewFactory = View::getFacadeRoot();
        $viewHints = [];

        // Verifichiamo che viewFactory sia un oggetto e che abbia il metodo getViewFinder
        if (is_object($viewFactory) && method_exists($viewFactory, 'getViewFinder')) {
            $finder = $viewFactory->getViewFinder();

            // Verifichiamo che finder sia un oggetto e che abbia il metodo getHints
            if (is_object($finder) && method_exists($finder, 'getHints')) {
                $viewHints = $finder->getHints();
            }
        }

        // Verifichiamo che $viewHints sia un array e che contenga la chiave $ns
        if (is_array($viewHints) && isset($viewHints[$ns])) {
            $paths = $viewHints[$ns];
            // Verifichiamo che $paths sia un array e che contenga almeno un elemento
            if (is_array($paths) && isset($paths[0]) && is_string($paths[0])) {
                return $paths[0];
            }
        }

        // Se non abbiamo trovato il namespace nelle view hints, proviamo a usare il tema
        $theme_name = $xot->{$ns} ?? null;

        if (! is_string($theme_name)) {
            return null; // Restituiamo null se il tema non è una stringa
        }

        return base_path('Themes/'.$theme_name);
        if (!is_string($theme_name)) {
            return null; // Restituiamo null se il tema non è una stringa
        }

        return base_path('Themes/' . $theme_name);
<<<<<<< HEAD
=======
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return base_path('Themes/' . $theme_name);
=======
>>>>>>> 2f3197ab (.)
        return base_path('Themes/'.$theme_name);
        return base_path('Themes/'.$theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/'.$theme_name);
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        return base_path('Themes/'.$theme_name);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return base_path('Themes/' . $theme_name);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        return base_path('Themes/'.$theme_name);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return base_path('Themes/' . $theme_name);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        return base_path('Themes/'.$theme_name);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/'.$theme_name);
        return base_path('Themes/' . $theme_name);
<<<<<<< HEAD
        return base_path('Themes/'.$theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/'.$theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/'.$theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/'.$theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/' . $theme_name);
        return base_path('Themes/'.$theme_name);
        return base_path('Themes/' . $theme_name);
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        return base_path('Themes/'.$theme_name);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return base_path('Themes/' . $theme_name);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
    }
}
