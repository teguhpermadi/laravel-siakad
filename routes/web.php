<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfilSekolahController;
// use App\Http\Controllers\Role;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserLocation;
use App\Http\Controllers\UserRoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// user harus login terlebih dahulu
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/home', [Home::class, 'index'])->name('home');
});


// Route::get('/role', [Role::class, 'index']);
Route::get('/location', [UserLocation::class, 'index']);
Route::get('/sekolah', [ProfilSekolahController::class, 'index'])->name('sekolah.index');


//yang bisa mengakses routes di bawah hanya user yang telah login dan memiliki tipe superadmin
Route::group(['middleware' => ['role:superadmin']], function () {    
    // sumber: https://sabithuraira.medium.com/laravel-membuat-fitur-pengelolaan-roles-permission-dg-spatie-7b5ab0c11176
    // ROUTE untuk pengaturan ROLE, PERMISSION dan USER ROLE

    Route::resource('permission',PermissionController::class)->except(['show', 'edit', 'update', 'create', 'destroy']);
    Route::resource('role',RoleController::class)->except(['show', 'edit', 'update', 'create', 'destroy']);
    Route::resource('user_role',UserRoleController::class)->except(['show', 'create', 'store', 'destroy']);

});