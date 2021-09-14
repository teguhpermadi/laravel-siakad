<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'super admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'guru',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'siswa',
            'guard_name' => 'web'
        ]);
    }
}
