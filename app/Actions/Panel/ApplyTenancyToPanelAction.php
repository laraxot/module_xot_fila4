<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Panel;

use Filament\Panel;
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
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\Xot\Datas\MetatagData;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;

class ApplyTenancyToPanelAction
{
    use QueueableAction;

    public function execute(Panel &$panel): Panel
    {
        $tenant_class = XotData::make()->getTenantClass();

        // $panel
        //     ->tenant($tenant_class, slugAttribute: 'slug')
        //     ->tenantRegistration(RegisterTenant::class)
        //     ->tenantProfile(EditTenantProfile::class);

        // Controlla se l'utente è superadmin
<<<<<<< HEAD
<<<<<<< HEAD
        // $user = Auth::user();

        // if (Gate::allows('superadmin', $user)) {
=======
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
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
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
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
        // Configurazione completa per superadmin
        $panel
            ->tenant($tenant_class, 'slug', 'tenants')
            ->tenantRegistration(RegisterTenant::class)
            ->tenantProfile(EditTenantProfile::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // } else {
        // Configurazione limitata per non-superadmin
        // $panel->tenant($tenant_class, slugAttribute: 'slug');
        // }
=======
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
        //} else {
        // Configurazione limitata per non-superadmin
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
        //}
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

        return $panel;
    }
}
