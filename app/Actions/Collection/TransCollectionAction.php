<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Collection;

// use Modules\Xot\Services\ArrayService;

<<<<<<< HEAD
use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)

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
=======
>>>>>>> a67e542f (.)
    public ?string $transKey;
    public ?string $transKey;
=======
=======
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

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
    public function execute(Collection $collection, null|string $transKey): Collection
    public function execute(Collection $collection, null|string $transKey): Collection
    public function execute(Collection $collection, null|string $transKey): Collection
    public function execute(Collection $collection, null|string $transKey): Collection
    {
        if ($transKey === null) {
            return $collection->map(SafeStringCastAction::cast(...));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
     * @param Collection<int|string, mixed> $collection
     * @param string|null $transKey
     *
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
     * @return Collection<int|string, string>
     */
    public function execute(
        Collection $collection,
        ?string $transKey,
    ): Collection {
<<<<<<< HEAD
<<<<<<< HEAD
=======
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
     * @param  Collection<int|string, mixed>  $collection
     * @return Collection<int|string, string>
     */
    public function execute(Collection $collection, null|string $transKey): Collection
    {
        if ($transKey === null) {
            return $collection->map(SafeStringCastAction::cast(...));
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if (null === $transKey) {
            return $collection->map(fn (mixed $item): string => SafeStringCastAction::cast($item));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        }

        $this->transKey = $transKey;

<<<<<<< HEAD
        return $collection->map($this->trans(...));
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
    }

    /**
     * Traduce un singolo elemento.
     *
<<<<<<< HEAD
     * @param  mixed  $item  L'elemento da tradurre
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
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
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
        if (empty($item) || null === $this->transKey) {
=======
        if (empty($item) || $this->transKey === null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
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
=======
>>>>>>> a67e542f (.)
        $key = $this->transKey.'.'.$item;
        $key = $this->transKey.'.'.$item;
=======
=======
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $key = $this->transKey . '.' . $item;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
=======
>>>>>>> a67e542f (.)
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
=======
=======
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
        return $item;
    }
}
