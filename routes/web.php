<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/dashboard');
})->name('home');

Route::get('/login', [BackController::class, 'login'])->name('login');
Route::get('/register', [BackController::class, 'register'])->name('register');
Route::post('/post-login', [BackController::class, 'post_login'])->name('post-login');
Route::post('/post-register', [BackController::class, 'post_register'])->name('post-register');
Route::post('/logout', [BackController::class, 'logout'])->name('logout');

Route::group(['prefix' => '/dashboard', 'middleware' => 'ceklogin'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/profile', [BackController::class, 'profile'])->name('profile');
    Route::get('/lihat-jadwal/jadwal/{id}', [BackController::class, 'lihat_jadwal'])->name('lihat-jadwal');
    Route::get('/profile-balita/balita/{id}', [BackController::class, 'lihat_profile_balita'])->name('profile-balita');
    Route::get('/profile-bidan/bidan/{id}', [BackController::class, 'lihat_profile_bidan'])->name('profile-bidan');
    Route::get('/generate-balita', [GenerateController::class, 'generate_balita'])->name('generate-balita');
    Route::get('/generate-bidan', [GenerateController::class, 'generate_bidan'])->name('generate-bidan');
    Route::get('/generate-jadwal', [GenerateController::class, 'generate_jadwal'])->name('generate-jadwal');
    Route::get('/chained-generate', [GenerateController::class, 'chained_generate'])->name('chained-generate');

    // DAFTAR Route
    Route::get('/daftar-bidan/data', [BackController::class, 'daftar_bidan'])->name('daftar-bidan');
    Route::get('/daftar-jadwal-posyandu/data', [BackController::class, 'daftar_jadwal_posyandu'])->name('daftar-jadwal-posyandu');
    Route::get('/daftar-balita/data', [BackController::class, 'daftar_balita'])->name('daftar-balita');

    // Hapus Route
    Route::post('/balita/hapus/{id}', [BackController::class, 'hapus_balita'])->name('hapus-balita');
    Route::post('/bidan/hapus/{id}', [BackController::class, 'hapus_bidan'])->name('hapus-bidan');
    Route::post('/jadwal/hapus/{id}', [BackController::class, 'hapus_jadwal'])->name('hapus-jadwal');

    // Tambah Route
    Route::get('/tambah-data-balita/data/tambah', [BackController::class, 'tambah_balita'])->name('tambah-balita');
    Route::get('/tambah-data-bidan/data/tambah', [BackController::class, 'tambah_bidan'])->name('tambah-bidan');
    Route::get('/tambah-jadwal-posyandu/data/tambah', [BackController::class, 'tambah_jadwal_posyandu'])->name('tambah-jadwal-posyandu');
    Route::get('/tambah-data-pengguna/data', [BackController::class, 'tambah_data_pengguna'])->name('tambah-data-pengguna');

    // Ubah Route
    Route::get('/ubah-data-balita/ubah/{id}', [BackController::class, 'ubah_balita'])->name('ubah-balita');
    Route::post('/post/balita/ubah/{id}', [BackController::class, 'post_ubah_balita'])->name('post-ubah-balita');
    Route::get('/ubah-data-bidan/ubah/{id}', [BackController::class, 'ubah_bidan'])->name('ubah-bidan');
    Route::post('/post/bidan/ubah/{id}', [BackController::class, 'post_ubah_bidan'])->name('post-ubah-bidan');
    Route::get('/ubah-jadwal/ubah/{id}', [BackController::class, 'ubah_jadwal'])->name('ubah-jadwal');
    Route::post('/post/jadwal/ubah/{id}', [BackController::class, 'post_ubah_jadwal'])->name('post-ubah-jadwal');

    // Post Tambah
    Route::post('/tambah-jadwal-posyandu/post', [BackController::class, 'post_tambah_jadwal_posyandu'])->name('post-tambah-jadwal-posyandu');
    Route::post('/tambah-data-balita/post', [BackController::class, 'post_tambah_balita'])->name('post-tambah-balita');
    Route::post('/tambah-data-bidan/post', [BackController::class, 'post_tambah_bidan'])->name('post-tambah-bidan');
});
