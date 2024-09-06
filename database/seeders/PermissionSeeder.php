<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'superadmin',
            'manager',
            'client'
        ];

        $label_permissions = [
            'Super Admin',
            'Manager',
            'Client',
        ];

        $descriptions_permissions = [
            'Plein administrateur controler tous',
            'Manager juste controle et contribuer avec super admin',
            'Client pour faire des testes et abonnement'
        ];

        // Loop through the permissions and create them using Spatie
        foreach ($permissions as $key => $permissionName) {
            Permission::create([
                'name' => $permissionName,
                'label' => $label_permissions[$key],
                'description' => $descriptions_permissions[$key],
            ]);
        }
    }
}
