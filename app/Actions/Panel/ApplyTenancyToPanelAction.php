<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Panel;

use Filament\Panel;
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\Xot\Datas\MetatagData;
=======
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
>>>>>>> 551c768c4 (.)
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
=======
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
>>>>>>> ce6fc085 (.)
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 551c768c4 (.)
        // $user = Auth::user();

<<<<<<< HEAD
<<<<<<< HEAD
        // if (Gate::allows('superadmin', $user)) {
=======
<<<<<<< HEAD
        // if (Gate::allows('superadmin', $user)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
<<<<<<< HEAD
=======
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 2f3197ab (.)
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
        // if (Gate::allows('superadmin', $user)) {
>>>>>>> b7afadf9 (.)
=======
        //if (Gate::allows('superadmin', $user)) {
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
        //if (Gate::allows('superadmin', $user)) {
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
        //if (Gate::allows('superadmin', $user)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        // Configurazione completa per superadmin
        $panel
            ->tenant($tenant_class, 'slug', 'tenants')
            ->tenantRegistration(RegisterTenant::class)
            ->tenantProfile(EditTenantProfile::class);
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
        // } else {
        // Configurazione limitata per non-superadmin
<<<<<<< HEAD
        // $panel->tenant($tenant_class, slugAttribute: 'slug');
        // }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        //} else {
        // Configurazione limitata per non-superadmin
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
            // Configurazione completa per superadmin
            $panel
                ->tenant($tenant_class, 'slug', 'tenants')
                ->tenantRegistration(RegisterTenant::class)
                ->tenantProfile(EditTenantProfile::class);
        //} else {
            // Configurazione limitata per non-superadmin
            //$panel->tenant($tenant_class, slugAttribute: 'slug');
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        //} else {
        // Configurazione limitata per non-superadmin
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
        //}
<<<<<<< HEAD
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
        //}
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
        //}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
        // $panel->tenant($tenant_class, slugAttribute: 'slug');
        // }
>>>>>>> b7afadf9 (.)
=======
        //$panel->tenant($tenant_class, slugAttribute: 'slug');
<<<<<<< HEAD
=======
            // Configurazione completa per superadmin
            $panel
                ->tenant($tenant_class, 'slug', 'tenants')
                ->tenantRegistration(RegisterTenant::class)
                ->tenantProfile(EditTenantProfile::class);
        //} else {
            // Configurazione limitata per non-superadmin
            //$panel->tenant($tenant_class, slugAttribute: 'slug');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        //}
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)

        return $panel;
    }
}
