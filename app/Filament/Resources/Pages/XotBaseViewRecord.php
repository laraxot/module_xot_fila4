<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
=======
use Filament\Schemas\Components\Component;
=======
use Filament\Schemas\Components\Component;
>>>>>>> 3fbbf1f5 (.)
use Filament\Schemas\Schema;
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
    // Aggiungi qui eventuali metodi o proprietà comuni a tutte le pagine di visualizzazione
>>>>>>> 5a14301c (.)
    final public function infolist(Schema $schema): Schema
    {
        return $schema->components($this->getInfolistSchema());
    }

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     * Questo metodo deve sempre restituire un array con chiavi di tipo stringa.
     *
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
}
