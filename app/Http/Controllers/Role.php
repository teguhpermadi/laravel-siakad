<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as RoleSpatie;

class Role extends Controller
{
    public function index()
    {
        // buat beberapa role yang dibutuhkan untuk aplikasi ini
        RoleSpatie::create(['name' => 'super admin']);
        RoleSpatie::create(['name' => 'admin']);
        RoleSpatie::create(['name' => 'kepala sekolah']);
        RoleSpatie::create(['name' => 'waka kurikulum']);
        RoleSpatie::create(['name' => 'waka kesiswaan']);
        RoleSpatie::create(['name' => 'waka humas']);
        RoleSpatie::create(['name' => 'waka sarpras']);
        RoleSpatie::create(['name' => 'guru']);
        RoleSpatie::create(['name' => 'wali kelas']);
        RoleSpatie::create(['name' => 'konseling']);
        RoleSpatie::create(['name' => 'uks']);
        RoleSpatie::create(['name' => 'perpustakaan']);
        RoleSpatie::create(['name' => 'bendahara']);
        RoleSpatie::create(['name' => 'siswa aktif']);
        RoleSpatie::create(['name' => 'siswa non-aktif']);
        RoleSpatie::create(['name' => 'alumni']);
        RoleSpatie::create(['name' => 'tata usaha']);
        RoleSpatie::create(['name' => 'siswa baru']);
        RoleSpatie::create(['name' => 'panitia ppdb']);

        return "role berhasil dibuat";
    }
}
