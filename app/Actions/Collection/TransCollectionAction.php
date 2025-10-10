<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Collection;

// use Modules\Xot\Services\ArrayService;

<<<<<<< HEAD
use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;
=======

>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b93ef594b4 (.)
=======
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

/**
 * Action per la traduzione di elementi di una collezione.
 */
class TransCollectionAction
{
    use QueueableAction;

<<<<<<< HEAD
    public null|string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> a12f125f4a (.)
=======
    public null|string $transKey;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $transKey;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Esegue la traduzione di una collezione.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     * @param  Collection<int|string, mixed>  $collection
     * @return Collection<int|string, string>
     */
    public function execute(Collection $collection, null|string $transKey): Collection
    {
        if ($transKey === null) {
            return $collection->map(SafeStringCastAction::cast(...));
<<<<<<< HEAD
=======
=======
=======
     * @param Collection<int|string, mixed> $collection
     * @param string|null $transKey
     *
>>>>>>> origin/develop
     * @return Collection<int|string, string>
     */
    public function execute(
        Collection $collection,
        ?string $transKey,
    ): Collection {
<<<<<<< HEAD
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
>>>>>>> a12f125f4a (.)
=======
     * @param  Collection<int|string, mixed>  $collection
     * @return Collection<int|string, string>
     */
    public function execute(Collection $collection, null|string $transKey): Collection
    {
        if ($transKey === null) {
            return $collection->map(SafeStringCastAction::cast(...));
>>>>>>> b93ef594b4 (.)
=======
        if (null === $transKey) {
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        $this->transKey = $transKey;

<<<<<<< HEAD
        return $collection->map($this->trans(...));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $collection->map($this->trans(...));
=======
        return $collection->map(fn (mixed $item): string => $this->trans($item));
>>>>>>> a12f125f4a (.)
=======
        return $collection->map($this->trans(...));
>>>>>>> b93ef594b4 (.)
=======
        return $collection->map(fn (mixed $item): string => $this->trans($item));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Traduce un singolo elemento.
     *
<<<<<<< HEAD
     * @param  mixed  $item  L'elemento da tradurre
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $item  L'elemento da tradurre
=======
>>>>>>> a12f125f4a (.)
=======
     * @param  mixed  $item  L'elemento da tradurre
>>>>>>> b93ef594b4 (.)
=======
     * @param mixed $item L'elemento da tradurre
     *
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return string L'elemento tradotto o l'elemento originale se la traduzione non esiste
     */
    public function trans(mixed $item): string
    {
        // Converte l'item in stringa se non lo è già
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        if (!\is_string($item)) {
            $item = SafeStringCastAction::cast($item);
        }

<<<<<<< HEAD
        if (empty($item) || $this->transKey === null) {
=======
<<<<<<< HEAD
        if (empty($item) || $this->transKey === null) {
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if (empty($item) || null === $this->transKey) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return $item;
        }

        // Prima prova la traduzione diretta
<<<<<<< HEAD
        $key = $this->transKey . '.' . $item;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> a12f125f4a (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> b93ef594b4 (.)
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = str_replace('.', '_', $item);
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> a12f125f4a (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> b93ef594b4 (.)
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
        return $item;
    }
}
