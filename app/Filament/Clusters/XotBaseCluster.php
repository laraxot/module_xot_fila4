<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Clusters;

use Filament\Clusters\Cluster as FilamentCluster;
use Illuminate\Contracts\Support\Htmlable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Lang;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\Lang;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Clusters\Cluster as FilamentCluster;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Lang;
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Clusters\Cluster as FilamentCluster;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Clusters\Cluster as FilamentCluster;
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
use Filament\Clusters\Cluster as FilamentCluster;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Lang;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Clusters\Cluster as FilamentCluster;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
use Illuminate\Support\Facades\Lang;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
use Filament\Clusters\Cluster as FilamentCluster;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Lang;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class XotBaseCluster extends FilamentCluster
{
    use NavigationLabelTrait;

    /*
     * public static function getNavigationGroup(): ?string
     * {
     *
     * return 'ZZZZZZZZZZZZZZZZZZ';
     * }
     */

    public function getTitle(): Htmlable|string
    {
        $key = static::getKeyTransFunc(__FUNCTION__);
        $res = static::transFunc(__FUNCTION__);
        dddx([
            'key' => $key,
            'res' => $res,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

        // return Lang::get('broker::cliente.navigation_group');
=======
        //return Lang::get('broker::cliente.navigation_group');
>>>>>>> 5a14301c (.)
=======
        //return Lang::get('broker::cliente.navigation_group');
>>>>>>> 5a14301c (.)
        return 'AAAAAAAAA';
    }

    /*
     * protected static ?string $navigationIcon = 'heroicon-o-users';
     *
     * public static function getNavigationLabel(): string
     * {
     * //return Lang::get('broker::cliente.cluster.label');
     * return 'ZZZZZZZZZZZZZZZZZZ';
     * }
     *
     *
     *
     * public static function getNavigationSort(): ?int
     * {
     * //return (int) Lang::get('broker::cliente.navigation_sort');
     * return 1;
     * }
     *
     * public static function getNavigationBadge(): ?string
     * {
     * return null;
     * }
     *
     * public static function getPages(): array
     * {
     * return [
     * 'index' => Pages\ListClientes::route('/'),
     * 'brain' => Pages\ListaBrain::route('/brain'),
     * ];
     * }
     */
}
