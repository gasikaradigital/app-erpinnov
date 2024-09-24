<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('plans')->insert([
            [
                'name' => 'Plan Gratuit',
                'price' => 0,
                'duration_days' => 30,
                'is_free' => true,
                'is_default' => true,
                'instance_limit' => 1,
                'modules' => json_encode(['module_basique_1']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plan Solo',
                'price' => 20.00,
                'duration_days' => 30,
                'is_free' => false,
                'is_default' => false,
                'instance_limit' => 10,
                'modules' => json_encode(['module_basique_1', 'module_basique_2']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plan Solo +',
                'price' => 50.00,
                'duration_days' => 30,
                'is_free' => false,
                'is_default' => false,
                'instance_limit' => null, //ilimité
                'modules' => json_encode(['module_basique_1', 'module_basique_2', 'module_pro_1', 'module_pro_2', 'module_pro_3']),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
