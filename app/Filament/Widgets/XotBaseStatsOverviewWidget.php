<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\StatsOverviewWidget as FilamentStatsOverviewWidget;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Filament\Actions\Action;
use Filament\Widgets\StatsOverviewWidget as FilamentStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
>>>>>>> 5a14301c (.)
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Widgets\StatsOverviewWidget as FilamentStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Actions\Action;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Filament\Actions\Action;
use Filament\Widgets\StatsOverviewWidget as FilamentStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Filament\Traits\TransTrait;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

/**
 * Classe base per i widget StatsOverview del sistema Xot.
 *
 * Fornisce funzionalità comuni per tutti i widget di statistiche overview.
 * Estende Filament\Widgets\StatsOverviewWidget e aggiunge funzionalità specifiche del progetto.
<<<<<<< HEAD
=======
 *
 * @package Modules\Xot\Filament\Widgets
>>>>>>> 5a14301c (.)
 */
abstract class XotBaseStatsOverviewWidget extends FilamentStatsOverviewWidget
{
    use TransTrait;
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======

   
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======

   
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
