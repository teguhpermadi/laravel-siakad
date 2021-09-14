<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name' => 'Super Admin',
            'email' => 'super.admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);

        $superadmin->assignRole('super admin');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');
    }
}
