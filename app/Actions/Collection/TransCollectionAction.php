<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Collection;

// use Modules\Xot\Services\ArrayService;

use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per la traduzione di elementi di una collezione.
 */
class TransCollectionAction
{
    use QueueableAction;

<<<<<<< HEAD
    public ?string $transKey;
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)

    /**
     * Esegue la traduzione di una collezione.
     *
     * @param  Collection<int|string, mixed>  $collection
     * @return Collection<int|string, string>
     */
<<<<<<< HEAD
    public function execute(Collection $collection, ?string $transKey): Collection
=======
    public function execute(Collection $collection, null|string $transKey): Collection
>>>>>>> 5a14301c (.)
    {
        if ($transKey === null) {
            return $collection->map(SafeStringCastAction::cast(...));
        }

        $this->transKey = $transKey;

        return $collection->map($this->trans(...));
    }

    /**
     * Traduce un singolo elemento.
     *
     * @param  mixed  $item  L'elemento da tradurre
     * @return string L'elemento tradotto o l'elemento originale se la traduzione non esiste
     */
    public function trans(mixed $item): string
    {
        // Converte l'item in stringa se non lo è già
<<<<<<< HEAD
        if (! \is_string($item)) {
=======
        if (!\is_string($item)) {
>>>>>>> 5a14301c (.)
            $item = SafeStringCastAction::cast($item);
        }

        if (empty($item) || $this->transKey === null) {
            return $item;
        }

        // Prima prova la traduzione diretta
<<<<<<< HEAD
        $key = $this->transKey.'.'.$item;
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 5a14301c (.)
        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = str_replace('.', '_', $item);
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 5a14301c (.)
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
        return $item;
    }
}
