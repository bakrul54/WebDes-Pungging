<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatistikController;

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

Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('home', [
        "title" => "Desa Pungging"
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        "title" => "Profil Desa"
    ]);
});

// Route::get('/statistik', function () {
//     return view('statistik', [
//         "title" => "Data Statistik"
//     ]);
// });

Route::get('/struktur-organisasi', function () {
    return view('struktur', [
        "title" => "Profil Desa"
    ]);
});

Route::get('/lembaga-masyarakat', function () {
    return view('lembaga', [
        "title" => "Lembaga Masyarakat"
    ]);
});

Route::get('/layanan', function () {
    return view('layanan', [
        "title" => "Layanan"
    ]);
});

Route::get('/login', [LoginController::class,  'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,  'authenticate']);
Route::post('/logout', [LoginController::class,  'logout']);

// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// })->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/statistik', [StatistikController::class, 'index']);
Route::resource('/dashboard/statistik', StatistikController::class)->middleware('auth');

Route::resource('/dashboard/surat', SuratController::class)->middleware('auth');
Route::get('/dashboard/surat/{id}', [SuratController::class, 'show'])->name('dashboard.surat.show')->middleware('auth');
Route::get('/dashboard/surat', [SuratController::class, 'index'])->name('dashboard.surat.index')->middleware('auth');
Route::delete('/dashboard/surat/{id}', [SuratController::class, 'destroy'])->name('dashboard.surat.destroy')->middleware('auth');


Route::get('/layanan', [SuratController::class, 'show'])->name('layanan');
Route::get('/layanan', [SuratController::class, 'showInputForm'])->name('layanan.input-surat');
Route::post('/layanan', [SuratController::class, 'store'])->name('layanan.store');


Route::get('/dashboard/statistik', [StatistikController::class, 'dashboardIndex'])->name('dashboard.statistik.index')->middleware('auth');
Route::get('/dashboard/statistik/{id}/edit', [StatistikController::class, 'edit'])->name('dashboard.statistik.edit')->middleware('auth');
Route::put('/dashboard/statistik/{id}', [StatistikController::class, 'update'])->name('dashboard.statistik.update')->middleware('auth');

// Route::get('/layanan', [SuratController::class, 'layanan'])->name('layanan')->middleware('guest');
// Route::resource('/dashboard/surat', SuratController::class)->middleware('auth');

// Route::get('/surat/kirim/{suratId}', [SuratController::class, 'kirimEmail'])->name('surat.kirim');
// Route::post('/surat/{suratId}/kirim', [SuratController::class, 'kirimEmail'])->name('surat.kirim');


Route::post('/surat/{suratId}/upload', [SuratController::class, 'uploadFile'])->name('surat.upload');
Route::post('/surat/{suratId}/kirim', [SuratController::class, 'kirimEmail'])->name('surat.kirim');
