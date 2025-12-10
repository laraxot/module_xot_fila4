<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Collection;

// use Modules\Xot\Services\ArrayService;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
=======
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

/**
 * Action per la traduzione di elementi di una collezione.
 */
class TransCollectionAction
{
    use QueueableAction;

<<<<<<< HEAD
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public ?string $transKey;
<<<<<<< HEAD
    public ?string $transKey;
    public ?string $transKey;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
<<<<<<< HEAD
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
=======
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)

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
    public function execute(Collection $collection, null|string $transKey): Collection
    public function execute(Collection $collection, null|string $transKey): Collection
    public function execute(Collection $collection, null|string $transKey): Collection
    public function execute(Collection $collection, null|string $transKey): Collection
    {
        if ($transKey === null) {
            return $collection->map(SafeStringCastAction::cast(...));
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
     * @return Collection<int|string, string>
     */
    public function execute(
        Collection $collection,
        ?string $transKey,
    ): Collection {
<<<<<<< HEAD
     * @param  Collection<int|string, mixed>  $collection
     * @return Collection<int|string, string>
     */
    public function execute(Collection $collection, null|string $transKey): Collection
    {
        if ($transKey === null) {
            return $collection->map(SafeStringCastAction::cast(...));
        if (null === $transKey) {
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
=======
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        }

        $this->transKey = $transKey;

<<<<<<< HEAD
<<<<<<< HEAD
        return $collection->map($this->trans(...));
<<<<<<< HEAD
        return $collection->map(fn (mixed $item): string => $this->trans($item));
=======
=======
        return $collection->map(fn (mixed $item): string => $this->trans($item));
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        return $collection->map($this->trans(...));
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    }

    /**
     * Traduce un singolo elemento.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $item  L'elemento da tradurre
<<<<<<< HEAD
     * @param mixed $item L'elemento da tradurre
     *
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     * @param  mixed  $item  L'elemento da tradurre
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
     * @return string L'elemento tradotto o l'elemento originale se la traduzione non esiste
     */
    public function trans(mixed $item): string
    {
        // Converte l'item in stringa se non lo è già
<<<<<<< HEAD
        if (!\is_string($item)) {
        if (!\is_string($item)) {
        if (!\is_string($item)) {
        if (!\is_string($item)) {
        if (! \is_string($item)) {
        if (! \is_string($item)) {
        if (! \is_string($item)) {
        if (! \is_string($item)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
        if (! \is_string($item)) {
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        if (!\is_string($item)) {
        if (! \is_string($item)) {
        if (! \is_string($item)) {
        if (!\is_string($item)) {
        if (!\is_string($item)) {
        if (! \is_string($item)) {
        if (! \is_string($item)) {
        if (!\is_string($item)) {
            $item = SafeStringCastAction::cast($item);
        }

<<<<<<< HEAD
        if (empty($item) || null === $this->transKey) {
=======
        if (empty($item) || $this->transKey === null) {
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            return $item;
        }

        // Prima prova la traduzione diretta
<<<<<<< HEAD
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey.'.'.$item;
<<<<<<< HEAD
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey.'.'.$item;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> ca9324a4 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
<<<<<<< HEAD
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey . '.' . $item;
        $key = $this->transKey . '.' . $item;
=======
>>>>>>> ca9324a4 (.)
=======
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = str_replace('.', '_', $item);
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> ca9324a4 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
>>>>>>> ca9324a4 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
        return $item;
    }
}
