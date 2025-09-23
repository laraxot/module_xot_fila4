<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
use Filament\Forms\Components\Component;
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> 54cbe5d (.)
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
    // Aggiungi qui eventuali metodi o proprietà comuni a tutte le pagine di visualizzazione
<<<<<<< HEAD
=======
    final public function infolist(Schema $schema): Schema
    {
        return $schema->components($this->getInfolistSchema());
    }
>>>>>>> 54cbe5d (.)

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     * Questo metodo deve sempre restituire un array con chiavi di tipo stringa.
     *
<<<<<<< HEAD
     * @return array<string|int, \Filament\Support\Components\Component>
=======
     * @return array<int|string, Component>
>>>>>>> 54cbe5d (.)
     */
    abstract protected function getInfolistSchema(): array;
}
