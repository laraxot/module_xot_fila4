<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> ed734516 (.)
use Filament\Schemas\Components\Component;
=======
>>>>>>> f1d4085 (.)
use Filament\Schemas\Schema;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
=======
use Filament\Schemas\Components\Component;
=======
use Filament\Schemas\Components\Component;
>>>>>>> 3fbbf1f5 (.)
use Filament\Schemas\Schema;
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> 399f46d3 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> ca9324a4 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> ca9324a4 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> ca9324a4 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> 5a14301c (.)
use Filament\Resources\Pages\ViewRecord as FilamentViewRecord;

abstract class XotBaseViewRecord extends FilamentViewRecord
{
    // Aggiungi qui eventuali metodi o proprietà comuni a tutte le pagine di visualizzazione
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
    final public function infolist(Schema $schema): Schema
    {
<<<<<<< HEAD
        return $schema->components($this->getInfolistSchema());
=======
        return $infolist->schema($this->getInfolistSchema());
>>>>>>> f1d4085 (.)
    }

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     * Questo metodo deve sempre restituire un array con chiavi di tipo stringa.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string|int, \Filament\Support\Components\Component>
=======
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
     * @return array<int|string, Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<int|string, Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<int|string, Component>
>>>>>>> 5a14301c (.)
     */
    abstract protected function getInfolistSchema(): array;
=======
     * @return array<int|string, \Filament\Schemas\Components\Component>
     */
    abstract protected function getInfolistSchema(): array;
    
>>>>>>> f1d4085 (.)
}
