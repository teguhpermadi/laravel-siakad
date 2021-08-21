<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Permission::create(['name' => 'create profil sekolah']);
        // Permission::create(['name' => 'edit profil sekolah']);
        // Permission::create(['name' => 'show profil sekolah']);

        $super = Role::find(1); //super admin
        $super->givePermissionTo('create profil sekolah');
        $super->givePermissionTo('edit profil sekolah');
        $super->givePermissionTo('show profil sekolah');
    }
}
