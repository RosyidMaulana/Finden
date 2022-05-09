<?php

use App\Models\Post;
use App\Models\Orang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Orangcontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostHewanController;
use App\Http\Controllers\PostOrangController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\SementaraController;
use App\Http\Controllers\AdminKategoriController;
/*
|------------------------------------ --------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home.index');
});
// Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore optio quos ipsa placeat laudantium neque aliquid architecto! Dolore minima eligendi mollitia saepe beatae debitis odio doloremque omnis ullam tempora!

// Send email 
Route::get('#contact', [EmailController::class, 'create']);
Route::post('/email', [EmailController::class, 'sendemail'])->name('send.email');

Route::get('/kehilangan-orang', [Orangcontroller::class, 'detail']);
Route::get('/kehilangan-orang/{slug}', [Orangcontroller::class, 'daleman']);
Route::post('/komentar/{slug}', [Orangcontroller::class, 'komentar'])->middleware('auth');

Route::get('/kehilangan-hewan', [PostHewanController::class, 'detailHewan']);
Route::get('/kehilangan-hewan/{slug}', [PostHewanController::class, 'slugHewan']);
Route::post('/komentar-hewan/{slug}', [PostHewanController::class, 'tambahKomentar'])->middleware('auth');





Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'identifikasi']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::resource('/register', RegisterController::class);

// bagian dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/homepage', [DashboardController::class, 'home'])->middleware('auth');

Route::get('/dashboard/homepage/{slug}', [DashboardController::class, 'kehilangan'])->middleware('auth');



// Route::get('/post_orang/addorang', [PostOrangController::class, 'index'])->middleware('auth');



Route::get('/post', [DashboardController::class, 'riwayat'])->middleware('auth');

Route::get('/profil', [DashboardController::class, 'profil'])->middleware('auth');

Route::get('/dashboard/kategori', [AdminKategoriController::class, 'kategori']);
Route::get('/dashboard/all-orang', [AdminKategoriController::class, 'orang']);

//Bagian CRUD Dashboard
//orang
Route::get('/post_orang/crud/checkSlug', [PostOrangController::class, 'checkSlug'])->middleware('auth');
Route::resource('/post_orang/crud', PostOrangController::class)->middleware('auth');
Route::get('post_orang/menemukan', [DashboardController::class, 'menemukan'])->middleware('auth');
// Route::resource('/post_orang/crud/checkSlug', [PostOrangController::class,'checkSlug'])->middleware('auth');



//hewan
Route::get('/post_hewan/tambah/checkSlug', [HewanController::class, 'checkSlug'])->middleware('auth');
Route::resource('/post_hewan', HewanController::class)->middleware('auth');
Route::get('/post-hewan/datamenemukan', [DashboardController::class, 'nemuHewan'])->middleware('auth');


// Route::resource('/post_orang/crud/{slug}', PostOrangController::class)->middleware('auth');








Route::get('/dashboard/kategori/add', [AdminKategoriController::class, 'add']);
Route::get('/dashboard/daftar_user', [AdminKategoriController::class, 'users']);


