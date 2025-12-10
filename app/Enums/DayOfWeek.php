<?php

declare(strict_types=1);

namespace Modules\Xot\Enums;

use Carbon\Carbon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Collection;

/**
 * Enum per la gestione dei giorni della settimana.
 *
 * Questo enum fornisce funzionalità per:
 * - Rappresentare i giorni della settimana
 * - Ottenere etichette localizzate
 * - Gestire giorni lavorativi e weekend
 * - Calcolare giorni successivi
 * - Integrazione con Filament UI
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
enum DayOfWeek: int implements HasColor, HasDescription, HasIcon, HasLabel
=======
enum DayOfWeek: int implements HasLabel, HasColor, HasIcon, HasDescription
>>>>>>> 5a14301c (.)
=======
enum DayOfWeek: int implements HasLabel, HasColor, HasIcon, HasDescription
>>>>>>> 5a14301c (.)
=======
enum DayOfWeek: int implements HasLabel, HasColor, HasIcon, HasDescription
>>>>>>> 5a14301c (.)
=======
enum DayOfWeek: int implements HasLabel, HasColor, HasIcon, HasDescription
>>>>>>> 5a14301c (.)
=======
enum DayOfWeek: int implements HasLabel, HasColor, HasIcon, HasDescription
>>>>>>> 5a14301c (.)
=======
enum DayOfWeek: int implements HasLabel, HasColor, HasIcon, HasDescription
>>>>>>> 5a14301c (.)
{
    case MONDAY = 1;
    case TUESDAY = 2;
    case WEDNESDAY = 3;
    case THURSDAY = 4;
    case FRIDAY = 5;
    case SATURDAY = 6;
    case SUNDAY = 7;

    /**
     * Restituisce l'etichetta localizzata per questo giorno della settimana.
     * Implementazione dell'interfaccia HasLabel di Filament.
     */
    public function getLabel(): string
    {
        $carbon = Carbon::now()->startOfWeek()->addDays($this->value - 1);
        $carbon->locale('it');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return (string) $carbon->isoFormat('dddd');
    }

    /**
     * Restituisce il colore associato a questo giorno della settimana.
     * Implementazione dell'interfaccia HasColor di Filament.
     */
    public function getColor(): string
    {
<<<<<<< HEAD
        return match ($this) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> a12f125f4a (.)
=======
        return match ($this) {
>>>>>>> b93ef594b4 (.)
=======
        return match($this) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            self::MONDAY => 'primary',
            self::TUESDAY => 'success',
            self::WEDNESDAY => 'warning',
            self::THURSDAY => 'danger',
            self::FRIDAY => 'info',
            self::SATURDAY => 'gray',
            self::SUNDAY => 'gray',
        };
    }

    /**
     * Restituisce l'icona associata a questo giorno della settimana.
     * Implementazione dell'interfaccia HasIcon di Filament.
     */
    public function getIcon(): string
    {
<<<<<<< HEAD
        return match ($this) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> a12f125f4a (.)
=======
        return match ($this) {
>>>>>>> b93ef594b4 (.)
=======
        return match($this) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            self::MONDAY => 'heroicon-o-calendar',
            self::TUESDAY => 'heroicon-o-calendar',
            self::WEDNESDAY => 'heroicon-o-calendar',
            self::THURSDAY => 'heroicon-o-calendar',
            self::FRIDAY => 'heroicon-o-calendar',
            self::SATURDAY => 'heroicon-o-calendar',
            self::SUNDAY => 'heroicon-o-calendar',
        };
    }
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
    /**
     * Restituisce la descrizione dettagliata di questo giorno della settimana.
     * Implementazione dell'interfaccia HasDescription di Filament.
     */
    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        return match ($this) {
            self::MONDAY => __('<nome progetto>::common.days.description.monday'),
            self::TUESDAY => __('<nome progetto>::common.days.description.tuesday'),
            self::WEDNESDAY => __('<nome progetto>::common.days.description.wednesday'),
            self::THURSDAY => __('<nome progetto>::common.days.description.thursday'),
            self::FRIDAY => __('<nome progetto>::common.days.description.friday'),
            self::SATURDAY => __('<nome progetto>::common.days.description.saturday'),
            self::SUNDAY => __('<nome progetto>::common.days.description.sunday'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        return match ($this) {
            self::MONDAY => __('<nome progetto>::common.days.description.monday'),
            self::TUESDAY => __('<nome progetto>::common.days.description.tuesday'),
            self::WEDNESDAY => __('<nome progetto>::common.days.description.wednesday'),
            self::THURSDAY => __('<nome progetto>::common.days.description.thursday'),
            self::FRIDAY => __('<nome progetto>::common.days.description.friday'),
            self::SATURDAY => __('<nome progetto>::common.days.description.saturday'),
            self::SUNDAY => __('<nome progetto>::common.days.description.sunday'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        return match ($this) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            self::MONDAY => 'Lunedì - Inizio della settimana lavorativa',
            self::TUESDAY => 'Martedì - Secondo giorno lavorativo',
            self::WEDNESDAY => 'Mercoledì - Metà settimana',
            self::THURSDAY => 'Giovedì - Penultimo giorno lavorativo',
            self::FRIDAY => 'Venerdì - Ultimo giorno lavorativo',
            self::SATURDAY => 'Sabato - Primo giorno del weekend',
            self::SUNDAY => 'Domenica - Giorno di riposo',
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
<<<<<<< HEAD
=======
            self::MONDAY => __('<nome progetto>::common.days.description.monday'),
            self::TUESDAY => __('<nome progetto>::common.days.description.tuesday'),
            self::WEDNESDAY => __('<nome progetto>::common.days.description.wednesday'),
            self::THURSDAY => __('<nome progetto>::common.days.description.thursday'),
            self::FRIDAY => __('<nome progetto>::common.days.description.friday'),
            self::SATURDAY => __('<nome progetto>::common.days.description.saturday'),
            self::SUNDAY => __('<nome progetto>::common.days.description.sunday'),
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return match ($this) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return match ($this) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
        return match ($this) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        return match ($this) {
>>>>>>> b93ef594b4 (.)
=======
        return match($this) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
=======
        return match($this) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return match ($this) {
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
        return match($this) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return match ($this) {
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
        return match($this) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return match ($this) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        return match($this) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return match ($this) {
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
        return match($this) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return match ($this) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 300ef70 (.)
=======
>>>>>>> 53d6a6ba (.)
        return match ($this) {
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        return match ($this) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 21348520 (.)
        return match ($this) {
=======
        return match($this) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 300ef70 (.)
=======
>>>>>>> 53d6a6ba (.)
        return match ($this) {
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return match ($this) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return match ($this) {
>>>>>>> ca9324a4 (.)
=======
        return match ($this) {
=======
        return match($this) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return match ($this) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return match ($this) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return match ($this) {
>>>>>>> 9db27d12 (.)
=======
=======
        return match ($this) {
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        return match ($this) {
>>>>>>> 5a14301c (.)
=======
        return match ($this) {
=======
        return match($this) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return match ($this) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return match ($this) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
            self::MONDAY => __('saluteora::common.days.description.monday'),
            self::TUESDAY => __('saluteora::common.days.description.tuesday'),
            self::WEDNESDAY => __('saluteora::common.days.description.wednesday'),
            self::THURSDAY => __('saluteora::common.days.description.thursday'),
            self::FRIDAY => __('saluteora::common.days.description.friday'),
            self::SATURDAY => __('saluteora::common.days.description.saturday'),
            self::SUNDAY => __('saluteora::common.days.description.sunday'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
        };
    }

    /**
     * Restituisce l'etichetta abbreviata per questo giorno della settimana.
     */
    public function shortLabel(): string
    {
        $carbon = Carbon::now()->startOfWeek()->addDays($this->value - 1);
        $carbon->locale('it');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return (string) $carbon->isoFormat('ddd');
    }

    /**
     * Converte tutti i casi dell'enum in un array associativo per l'uso nei componenti select.
     *
     * @return array<int, string>
     */
    public static function toArray(): array
    {
        $result = [];
        foreach (self::cases() as $case) {
            $result[$case->value] = $case->getLabel();
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return $result;
    }

    /**
     * Restituisce una collezione dei giorni lavorativi (lunedì-venerdì).
     *
     * @return Collection<int, self>
     */
    public static function workingDays(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<int, self> $result */
        $result = collect(self::cases())->filter(static fn (self $day): bool => $day->value <= 5);

        return $result;
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value <= 5);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value <= 5);

<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
=======
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value <= 5);
>>>>>>> f1d4085 (.)
=======
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
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
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
<<<<<<< HEAD
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
=======
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value <= 5);
>>>>>>> a12f125f4a (.)
=======
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
>>>>>>> b93ef594b4 (.)
=======
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value <= 5);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value <= 5);
        return $filtered;
>>>>>>> 5a14301c (.)
    }

    /**
     * Restituisce una collezione dei giorni del weekend (sabato-domenica).
     *
     * @return Collection<int, self>
     */
    public static function weekendDays(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Collection<int, self> $result */
        $result = collect(self::cases())->filter(static fn (self $day): bool => $day->value > 5);

        return $result;
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value > 5);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value > 5);

<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
=======
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value > 5);
>>>>>>> f1d4085 (.)
=======
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
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
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
<<<<<<< HEAD
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
=======
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value > 5);
>>>>>>> a12f125f4a (.)
=======
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
>>>>>>> b93ef594b4 (.)
=======
        $filtered = collect(self::cases())->filter(fn (self $day): bool => $day->value > 5);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
        return $filtered;
>>>>>>> 5a14301c (.)
=======
        /** @var Collection<int, self> $filtered */
        $filtered = collect(self::cases())->filter(fn(self $day): bool => $day->value > 5);
        return $filtered;
>>>>>>> 5a14301c (.)
    }

    /**
     * Determina se questo giorno è un giorno del weekend.
     */
    public function isWeekend(): bool
    {
        return $this->value > 5;
    }

    /**
     * Ottiene il giorno successivo della settimana.
     */
    public function next(): self
    {
<<<<<<< HEAD
        return match ($this) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> a12f125f4a (.)
=======
        return match ($this) {
>>>>>>> b93ef594b4 (.)
=======
        return match($this) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            self::MONDAY => self::TUESDAY,
            self::TUESDAY => self::WEDNESDAY,
            self::WEDNESDAY => self::THURSDAY,
            self::THURSDAY => self::FRIDAY,
            self::FRIDAY => self::SATURDAY,
            self::SATURDAY => self::SUNDAY,
            self::SUNDAY => self::MONDAY,
        };
    }
}
