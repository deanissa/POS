<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
//use resources\views\helloblade;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//JB 2
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('product.food-beverage');
    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('product.beauty-health');
    Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('product.home-care');
    Route::get('/category/baby-kid', [ProductController::class, 'babyKid'])->name('product.baby-kid');
});

//Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.show');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');

//JB3
//Routing Level 
Route::get('/', function() {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
//Routing Kategoti
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index'); // Tambahkan ini
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create'); 
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit'); 
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update'); // Perbaiki ini


//Routing User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
Route::get('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);


