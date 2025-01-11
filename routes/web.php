<?php

use App\Http\Controllers\WEB\AuthController;
use App\Http\Controllers\WEB\BimbinganController;
use App\Http\Controllers\WEB\CreateuserController;
use App\Http\Controllers\WEB\DashboardCOntroller;
use App\Http\Controllers\WEB\JurnalController;
use App\Http\Controllers\WEB\MappingRombelController;
use App\Http\Controllers\Web\SemesterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// start Authentication Route
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginStore'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// start route dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'check-user:admin,siswa,dudi,guru']], function () {
    Route::get('/', [DashboardCOntroller::class, 'index'])->name('dashboard');
});

// start route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'check-user:admin']], function () {
    // create users
    Route::get('/user-table', [CreateuserController::class, 'index'])->name('user-table');
    Route::get('/create-user', [CreateuserController::class, 'create'])->name('create-user');
    Route::post('/create-user', [CreateuserController::class, 'store'])->name('store-user');
    Route::get('/edit-user/{id}', [CreateuserController::class, 'edit'])->name('edit-user');
    Route::post('/edit-user/{id}', [CreateuserController::class, 'update'])->name('update-user');
    Route::get('/delete-user/{id}', [CreateuserController::class, 'destroy'])->name('delete-user');
    // mapping rombel
    Route::get('/mapping-rombel', [MappingRombelController::class, 'index'])->name('mapping-rombel');
    // semster
    Route::get('/semester', [SemesterController::class, 'index'])->name('semester');
    Route::get('/create-semester', [SemesterController::class, 'create'])->name('create-semester');
    Route::post('/create-semester', [SemesterController::class, 'store'])->name('store-semester');
    Route::get('/edit-semester/{id}', [SemesterController::class, 'edit'])->name('edit-semester');
    Route::post('/edit-semester/{id}', [SemesterController::class, 'update'])->name('update-semester');
    Route::get('/delete-semester/{id}', [SemesterController::class, 'destroy'])->name('delete-semester');

});

// start route siswa
Route::group(['prefix' => 'siswa', 'middleware' => ['auth', 'check-user:siswa']], function () {
    // create users
    Route::get('/jurnal-siswa', [JurnalController::class, 'index'])->name('jurnal-siswa');
    Route::get('/create-jurnal', [JurnalController::class, 'create'])->name('create-jurnal');
    Route::post('/create-jurnal', [JurnalController::class, 'store'])->name('store-jurnal');
    Route::get('/edit-jurnal/{id}', [JurnalController::class, 'edit'])->name('edit-jurnal');
    Route::post('/edit-jurnal/{id}', [JurnalController::class, 'update'])->name('update-jurnal');
    Route::get('/delete-jurnal/{id}', [JurnalController::class, 'destroy'])->name('delete-jurnal');
});

// start route siswa
Route::group(['prefix' => 'guru', 'middleware' => ['auth', 'check-user:guru']], function () {
    Route::get('/bimbingan-siswa', [BimbinganController::class, 'index'])->name('bimbingan-siswa');
});






