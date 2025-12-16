<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;
=======
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;
<<<<<<< HEAD
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
<<<<<<< HEAD
    final public function infolist(Schema $schema): Schema
    {
        return $schema->components($this->getInfolistSchema());
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\Component;
use Filament\Infolists\Infolist;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\Component;
use Filament\Infolists\Infolist;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
    // Aggiungi qui eventuali metodi o proprietà comuni a tutte le pagine di visualizzazione
=======
>>>>>>> 551c768c4 (.)
    final public function infolist(Schema $schema): Schema
    {
        return $schema->components($this->getInfolistSchema());
    final public function infolist(Schema $schema): Schema
    {
        return $schema->components($this->getInfolistSchema());
    final public function infolist(Schema $schema): Schema
    {
        return $schema->components($this->getInfolistSchema());
        return $schema->components($this->getInfolistSchema());
    final public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema($this->getInfolistSchema());
>>>>>>> 38b70c7ba (.)
    }

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     * Questo metodo deve sempre restituire un array con chiavi di tipo stringa.
     *
     * @return array<int|string, Component>
=======
     * @return array<int|string, Component>
>>>>>>> 551c768c4 (.)
     */
    abstract protected function getInfolistSchema(): array;
<<<<<<< HEAD
=======
     * @return array<string|int, \Filament\Support\Components\Component>
     * @return array<int|string, Component>
     * @return array<int|string, Component>
     * @return array<int|string, Component>
     * @return array<int|string, Component>
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
     * @return array<int|string, Component>
     */
    abstract protected function getInfolistSchema(): array;
     * @return array<int|string, \Filament\Infolists\Components\Component>
     */
    abstract protected function getInfolistSchema(): array;
    
>>>>>>> 38b70c7ba (.)
}
