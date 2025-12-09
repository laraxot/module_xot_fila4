<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\StatsOverviewWidget as FilamentStatsOverviewWidget;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
use Filament\Actions\Action;
use Filament\Widgets\StatsOverviewWidget as FilamentStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Classe base per i widget StatsOverview del sistema Xot.
 *
 * Fornisce funzionalità comuni per tutti i widget di statistiche overview.
 * Estende Filament\Widgets\StatsOverviewWidget e aggiunge funzionalità specifiche del progetto.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
 * @package Modules\Xot\Filament\Widgets
>>>>>>> 5a14301c (.)
=======
 *
 * @package Modules\Xot\Filament\Widgets
>>>>>>> 5a14301c (.)
=======
 *
 * @package Modules\Xot\Filament\Widgets
>>>>>>> 5a14301c (.)
 */
abstract class XotBaseStatsOverviewWidget extends FilamentStatsOverviewWidget
{
    use TransTrait;
}
