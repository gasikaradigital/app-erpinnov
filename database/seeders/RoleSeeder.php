<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $superadmin = Role::create([
            'name' => 'superadmin',
            'label' => 'Administrateur complet',
            'description' => 'Administrateur de Système'
        ]);
        $manager = Role::create([
            'name' => 'manager',
            'label' => 'Manager contributeur',
            'description' => 'Manager contributeur/aide'
        ]);
        $client = Role::create([
            'name' => 'client',
            'label' => 'Client',
            'description' => 'Client erp'
        ]);
        $superadmin->givePermissionTo([
            'superadmin',
        ]);

        $manager->givePermissionTo([
            'manager',
        ]);
        $client->givePermissionTo([
            'client',
        ]);
    }
}
