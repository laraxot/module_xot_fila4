<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Panel;

use Filament\Panel;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\Xot\Datas\MetatagData;
>>>>>>> 5a14301c (.)
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
=======
=======
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use Spatie\QueueableAction\QueueableAction;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
        // $user = Auth::user();

        // if (Gate::allows('superadmin', $user)) {
=======
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        // Configurazione completa per superadmin
        $panel
            ->tenant($tenant_class, 'slug', 'tenants')
            ->tenantRegistration(RegisterTenant::class)
            ->tenantProfile(EditTenantProfile::class);
<<<<<<< HEAD
<<<<<<< HEAD
        // } else {
        // Configurazione limitata per non-superadmin
        // $panel->tenant($tenant_class, slugAttribute: 'slug');
        // }
=======
=======
>>>>>>> 399f46d3 (.)
        //} else {
        // Configurazione limitata per non-superadmin
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
=======
<<<<<<< HEAD
        //} else {
        // Configurazione limitata per non-superadmin
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
=======
=======
>>>>>>> origin/develop
            // Configurazione completa per superadmin
            $panel
                ->tenant($tenant_class, 'slug', 'tenants')
                ->tenantRegistration(RegisterTenant::class)
                ->tenantProfile(EditTenantProfile::class);
        //} else {
            // Configurazione limitata per non-superadmin
            //$panel->tenant($tenant_class, slugAttribute: 'slug');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        //} else {
        // Configurazione limitata per non-superadmin
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        //}
>>>>>>> 5a14301c (.)

        return $panel;
    }
}
