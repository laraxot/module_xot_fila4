<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Collection;

// use Modules\Xot\Services\ArrayService;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;
=======

>>>>>>> f1d4085 (.)
=======
use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)

/**
 * Action per la traduzione di elementi di una collezione.
 */
class TransCollectionAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)

    /**
     * Esegue la traduzione di una collezione.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
     * @param  Collection<int|string, mixed>  $collection
     * @return Collection<int|string, string>
     */
    public function execute(Collection $collection, null|string $transKey): Collection
    {
        if ($transKey === null) {
            return $collection->map(SafeStringCastAction::cast(...));
<<<<<<< HEAD
=======
     * @return Collection<int|string, string>
     */
    public function execute(
        Collection $collection,
        ?string $transKey,
    ): Collection {
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        }

        $this->transKey = $transKey;

<<<<<<< HEAD
<<<<<<< HEAD
        return $collection->map($this->trans(...));
=======
        return $collection->map(fn (mixed $item): string => $this->trans($item));
>>>>>>> f1d4085 (.)
=======
        return $collection->map($this->trans(...));
>>>>>>> 73eab74 (.)
    }

    /**
     * Traduce un singolo elemento.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $item  L'elemento da tradurre
=======
>>>>>>> f1d4085 (.)
=======
     * @param  mixed  $item  L'elemento da tradurre
>>>>>>> 73eab74 (.)
     * @return string L'elemento tradotto o l'elemento originale se la traduzione non esiste
     */
    public function trans(mixed $item): string
    {
        // Converte l'item in stringa se non lo è già
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!\is_string($item)) {
            $item = SafeStringCastAction::cast($item);
        }

        if (empty($item) || $this->transKey === null) {
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            return $item;
        }

        // Prima prova la traduzione diretta
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = str_replace('.', '_', $item);
<<<<<<< HEAD
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
        return $item;
    }
}
