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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $transKey;
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
    public null|string $transKey;
>>>>>>> 3fbbf1f5 (.)
=======
    public null|string $transKey;
=======
    public null|string $transKey;
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> 17684f52 (.)
=======
    public null|string $transKey;
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> 17684f52 (.)
=======
    public null|string $transKey;
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
    public ?string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public ?string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public ?string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public ?string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|string $transKey;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public null|string $transKey;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public null|string $transKey;
>>>>>>> 9db27d12 (.)
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|string $transKey;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|string $transKey;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public null|string $transKey;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public null|string $transKey;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public ?string $transKey;
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public null|string $transKey;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public ?string $transKey;
>>>>>>> 71586de2 (.)
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|string $transKey;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public null|string $transKey;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public null|string $transKey;
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public ?string $transKey;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public ?string $transKey;
>>>>>>> 71586de2 (.)

    /**
     * Esegue la traduzione di una collezione.
     *
     * @param  Collection<int|string, mixed>  $collection
     *
     * @return Collection<int|string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Collection $collection, ?string $transKey): Collection
=======
    public function execute(Collection $collection, null|string $transKey): Collection
>>>>>>> 5a14301c (.)
=======
    public function execute(Collection $collection, null|string $transKey): Collection
>>>>>>> 5a14301c (.)
=======
    public function execute(Collection $collection, null|string $transKey): Collection
>>>>>>> 5a14301c (.)
=======
    public function execute(Collection $collection, null|string $transKey): Collection
>>>>>>> 5a14301c (.)
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
     *
     * @return string L'elemento tradotto o l'elemento originale se la traduzione non esiste
     */
    public function trans(mixed $item): string
    {
        // Converte l'item in stringa se non lo è già
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
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!\is_string($item)) {
>>>>>>> 5a14301c (.)
=======
        if (!\is_string($item)) {
>>>>>>> 5a14301c (.)
=======
        if (!\is_string($item)) {
>>>>>>> 5a14301c (.)
=======
        if (!\is_string($item)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! \is_string($item)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! \is_string($item)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! \is_string($item)) {
=======
=======
        if (! \is_string($item)) {
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 300ef70 (.)
        if (!\is_string($item)) {
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
        if (! \is_string($item)) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! \is_string($item)) {
>>>>>>> 71586de2 (.)
=======
        if (!\is_string($item)) {
>>>>>>> 5a14301c (.)
=======
        if (!\is_string($item)) {
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
        if (! \is_string($item)) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! \is_string($item)) {
>>>>>>> 71586de2 (.)
            $item = SafeStringCastAction::cast($item);
        }

        if (empty($item) || $this->transKey === null) {
            return $item;
        }

        // Prima prova la traduzione diretta
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $this->transKey.'.'.$item;
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 5a14301c (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3fbbf1f5 (.)
=======
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 17684f52 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 17684f52 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $key = $this->transKey.'.'.$item;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $key = $this->transKey.'.'.$item;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $key = $this->transKey.'.'.$item;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $key = $this->transKey.'.'.$item;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> ca9324a4 (.)
=======
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 9db27d12 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 5a14301c (.)
=======
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> ca9324a4 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 5a14301c (.)
=======
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> ca9324a4 (.)
=======
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> 71586de2 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 5a14301c (.)
=======
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> ca9324a4 (.)
=======
        $key = $this->transKey . '.' . $item;
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $key = $this->transKey.'.'.$item;
>>>>>>> 71586de2 (.)
        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = str_replace('.', '_', $item);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 5a14301c (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3fbbf1f5 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 17684f52 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 17684f52 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> ca9324a4 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 9db27d12 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 5a14301c (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> ca9324a4 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 5a14301c (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> ca9324a4 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> 71586de2 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 5a14301c (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> ca9324a4 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> 71586de2 (.)
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
        return $item;
    }
}
