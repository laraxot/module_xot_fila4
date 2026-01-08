<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Clusters;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
use Filament\Clusters\Cluster as FilamentCluster;
use Illuminate\Contracts\Support\Htmlable;
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Clusters\Cluster as FilamentCluster;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Lang;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Clusters\Cluster as FilamentCluster;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Clusters\Cluster as FilamentCluster;
>>>>>>> 399f46d3 (.)
=======
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Clusters\Cluster as FilamentCluster;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Clusters\Cluster as FilamentCluster;
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
use Filament\Clusters\Cluster as FilamentCluster;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Lang;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
use Filament\Clusters\Cluster as FilamentCluster;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Lang;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
use Illuminate\Support\Facades\Lang;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class XotBaseCluster extends FilamentCluster
{
    use NavigationLabelTrait;

    /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
     * public static function getNavigationGroup(): ?string
     * {
     *
     * return 'ZZZZZZZZZZZZZZZZZZ';
     * }
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public static function getNavigationGroup(): ?string
    {

        return 'ZZZZZZZZZZZZZZZZZZ';
    }
    */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)

    public function getTitle(): Htmlable|string
    {
        $key = static::getKeyTransFunc(__FUNCTION__);
        $res = static::transFunc(__FUNCTION__);
        dddx([
            'key' => $key,
            'res' => $res,
        ]);

        // return Lang::get('broker::cliente.navigation_group');
        return 'AAAAAAAAA';
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

    /*
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function getNavigationLabel(): string
    {
        //return Lang::get('broker::cliente.cluster.label');
        return 'ZZZZZZZZZZZZZZZZZZ';
    }



    public static function getNavigationSort(): ?int
    {
        //return (int) Lang::get('broker::cliente.navigation_sort');
        return 1;
    }

    public static function getNavigationBadge(): ?string
    {
        return null;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClientes::route('/'),
            'brain' => Pages\ListaBrain::route('/brain'),
        ];
    }
    */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
}
