<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\PermissionModule;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $modules = [
            'Dashboard Management' => [
                'fr' => 'Gestion dashboard',
                'description' => 'Gestion de tableau de bord et statistiques'
            ],
            'Client Management' => [
                'fr' => 'Gestion Client',
                'description' => 'Gestion des clients et de leurs informations'
            ],
            'Instance Management' => [
                'fr' => 'Gestion d\'instance',
                'description' => 'Gestion des instances du système'
            ],
            'Subscription Management' => [
                'fr' => 'Gestion d\'abonnement',
                'description' => 'Gestion des abonnements des clients'
            ],
            'Role and Permission' => [
                'fr' => 'Role et Permission',
                'description' => 'Gestion des rôles et des permissions des utilisateurs'
            ],
            'Settings' => [
                'fr' => 'Paramètres',
                'description' => 'Gestion des paramètres généraux du système'
            ],
        ];

        $actions = [
            'read' => 'Lecture',
            'create' => 'Création',
            'update' => 'Modification',
            'delete' => 'Suppression'
        ];

        foreach ($modules as $moduleEn => $moduleInfo) {
            foreach ($actions as $actionEn => $actionFr) {
                $name = Str::snake("{$actionEn}{$moduleEn}");

                Permission::create([
                    'name' => $name,
                    'label' => $actionFr,
                    'description' => "{$actionFr} - {$moduleInfo['description']}",
                    'module' => $moduleInfo['fr'],
                    'guard_name' => 'web',
                ]);
            }
        }
    }
}
