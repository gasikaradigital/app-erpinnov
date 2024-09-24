<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
<<<<<<< HEAD
        $roles = [
            'superadmin' => [
                'label' => 'Administrateur complet',
                'description' => 'Administrateur de Système',
                'permissions' => ['*'], // Tous les permissions
            ],
            'manager' => [
                'label' => 'Manager contributeur',
                'description' => 'Manager contributeur/aide',
                'permissions' => [
                    'Lecture', 'Ecrire', 'Modifier',
                    'Gestion Client', 'Gestion d\'instance', 'Gestion d\'abonnement',
                ],
            ],
            'client' => [
                'label' => 'Client',
                'description' => 'Client ERP',
                'permissions' => [
                    'Lecture Gestion Client',
                    'Lecture Gestion d\'abonnement',
                    'Lecture Paramètres',
                ],
            ],
        ];

        foreach ($roles as $roleName => $roleData) {
            $role = Role::create([
                'name' => $roleName,
                'label' => $roleData['label'],
                'description' => $roleData['description'],
            ]);

            if ($roleData['permissions'][0] === '*') {
                $role->givePermissionTo(Permission::all());
            } else {
                $permissions = [];
                foreach ($roleData['permissions'] as $permission) {
                    $permissions = array_merge(
                        $permissions,
                        Permission::where('name', 'LIKE', "%$permission%")->pluck('name')->toArray()
                    );
                }
                $role->givePermissionTo($permissions);
            }
        }
=======
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
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    }
}
