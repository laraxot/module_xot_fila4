<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
>>>>>>> 73eab74 (.)
use Filament\Schemas\Schema;
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
    // Aggiungi qui eventuali metodi o proprietà comuni a tutte le pagine di visualizzazione
    final public function infolist(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getInfolistSchema());
=======
        return $infolist->schema($this->getInfolistSchema());
>>>>>>> f1d4085 (.)
=======
        return $schema->components($this->getInfolistSchema());
>>>>>>> 73eab74 (.)
    }

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     * Questo metodo deve sempre restituire un array con chiavi di tipo stringa.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
=======
     * @return array<int|string, \Filament\Schemas\Components\Component>
     */
    abstract protected function getInfolistSchema(): array;
    
>>>>>>> f1d4085 (.)
=======
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
>>>>>>> 73eab74 (.)
}
