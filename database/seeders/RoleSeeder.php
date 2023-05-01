<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'Super Administrateur',
            'description' => 'Agent ayant le niveau le plus élevé de privilèges d\'administration',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_permissions')->insert(
            collect()->range(1, 38)->map(function ($id) {
                return [ 'permission_id' => $id, 'role_id' => 1 ];
            })->all()
        );
    
    }
}
