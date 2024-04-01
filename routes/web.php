<?php

use Illuminate\Support\Facades\Route;
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




Route::get('/', function () {
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Bakrul",
            "body" => "AidfawHJLdfjailwjdlwjaldjwlajdljawlfjflawjjfwl"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Pler",
            "body" => "AidfawHJLdfjailwjdlwjaldjwlajdljawlfjflawjjfwl"
        ],
    ];

    return view('posts', [
        "title" => "Desa Pungging",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Bakrul",
            "body" => "AidfawHJLdfjailwjdlwjaldjwlajdljawlfjflawjjfwl"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Pler",
            "body" => "AidfawHJLdfjailwjdlwjaldjwlajdljawlfjflawjjfwl"
        ],
    ];

    $new_post = null;
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        "title" => "Profil Desa"
    ]);
});

Route::get('/statistik', function () {
    return view('statistik', [
        "title" => "Data Statistik"
    ]);
});

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

Route::resource('/dashboard/statistik', DashboardStatistikController::class)->middleware('auth');

Route::resource('/dashboard/surat', SuratController::class)->middleware('auth');
Route::get('/dashboard/surat/{id}', [SuratController::class, 'show'])->name('dashboard.surat.show');
Route::get('/dashboard/surat', [SuratController::class, 'index'])->name('dashboard.surat.index');
Route::delete('/dashboard/surat/{id}', [SuratController::class, 'destroy'])->name('dashboard.surat.destroy');


Route::get('/layanan', [SuratController::class, 'show'])->name('layanan');
Route::get('/layanan', [SuratController::class, 'showInputForm'])->name('layanan.input-surat');
Route::post('/layanan', [SuratController::class, 'store'])->name('layanan.store');

Route::get('/statistik', [StatistikController::class, 'showChart'])->name('statistik');

// Route::get('/layanan', [SuratController::class, 'layanan'])->name('layanan')->middleware('guest');
// Route::resource('/dashboard/surat', SuratController::class)->middleware('auth');
