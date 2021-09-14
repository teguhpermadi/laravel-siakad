<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleGivePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super = Role::findByName('super admin');
        $super->givePermissionTo('create profil sekolah');
        $super->givePermissionTo('edit profil sekolah');
        $super->givePermissionTo('show profil sekolah');
        $super->givePermissionTo('remove profil sekolah');

        $admin = Role::findByName('admin');
        $admin->givePermissionTo('create profil sekolah');
        $admin->givePermissionTo('edit profil sekolah');
        $admin->givePermissionTo('show profil sekolah');
    }
}
