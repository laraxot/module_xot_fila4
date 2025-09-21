<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
>>>>>>> b93ef594b4 (.)
use Filament\Schemas\Schema;
=======
use Filament\Infolists\Components\Component;
use Filament\Infolists\Infolist;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
    // Aggiungi qui eventuali metodi o proprietà comuni a tutte le pagine di visualizzazione
<<<<<<< HEAD
    final public function infolist(Schema $schema): Schema
    {
        return $schema->components($this->getInfolistSchema());
=======
<<<<<<< HEAD
    final public function infolist(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getInfolistSchema());
=======
        return $infolist->schema($this->getInfolistSchema());
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getInfolistSchema());
>>>>>>> b93ef594b4 (.)
=======
    final public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema($this->getInfolistSchema());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     * Questo metodo deve sempre restituire un array con chiavi di tipo stringa.
     *
<<<<<<< HEAD
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
=======
     * @return array<int|string, \Filament\Schemas\Components\Component>
     */
    abstract protected function getInfolistSchema(): array;
    
>>>>>>> a12f125f4a (.)
=======
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
>>>>>>> b93ef594b4 (.)
=======
     * @return array<int|string, \Filament\Infolists\Components\Component>
     */
    abstract protected function getInfolistSchema(): array;
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
}
