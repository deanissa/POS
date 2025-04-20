<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StokController;


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
//Route::get('/', [HomeController::class, 'index'])->name('home');

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
Route::get('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

//Routing User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
Route::get('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

//Route Welcome
Route::get('/', [WelcomeController::class, 'index']);

//Route User
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']); // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']); // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']); // menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']);//Menampilkan halaman form tambah user Ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']); //Menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']); // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']); // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']); // menyimpan perubahan data user
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // menampilkan halaman form edit user Ajax
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // menyimpan perubahan data user Ajax
    Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete user Ajax
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // menghapus data user Ajax
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});

//Route Level
Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']); // menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']); // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']); // menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']); // menyimpan data level baru
    Route::get('/create_ajax', [LevelController::class, 'create_ajax']);//Menampilkan halaman form tambah Level Ajax
    Route::post('/ajax', [LevelController::class, 'store_ajax']); //Menyimpan data Level baru
    Route::get('/{id}', [LevelController::class, 'show']); // menampilkan detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit']); // menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']); // menyimpan perubahan data level
    Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']); // menampilkan halaman form edit level Ajax
    Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']); // menyimpan perubahan data level Ajax
    Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete level Ajax
    Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']); // menghapus data level Ajax
    Route::delete('/{id}', [LevelController::class, 'destroy']); // menghapus data level
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);          // menampilkan halaman awal kategori
    Route::post('/list', [KategoriController::class, 'list']);      // menampilkan data kategori dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);   // menampilkan halaman form tambah kategori
    Route::post('/', [KategoriController::class, 'store']);         // menyimpan data kategori baru
    Route::get('/create_ajax', [KategoriController::class, 'create_ajax']); // menampilkan halaman form tambah kategori (ajax)
    Route::post('/ajax', [KategoriController::class, 'store_ajax']);        // menyimpan data kategori baru (ajax)
    Route::get('/{id}', [KategoriController::class, 'show']);       // menampilkan detail kategori
    Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax']); // menampilkan detail kategori (ajax)
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // menampilkan halaman form edit kategori
    Route::put('/{id}', [KategoriController::class, 'update']);     // menyimpan perubahan data kategori
    Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']); // menampilkan halaman form edit kategori (ajax)
    Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']); // menyimpan perubahan data kategori (ajax)
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // menghapus data kategori
    Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']); // menampilkan konfirmasi hapus kategori (ajax)
    Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']); // menghapus data kategori (ajax)
});

//Route Stok
Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']);                              // menampilkan halaman awal stok   
    Route::post('/list', [StokController::class, 'list']);                          // menampilkan data stok dalam bentuk json untuk datatables   
    Route::get('/create', [StokController::class, 'create']);                       // menampilkan halaman form tambah stok
    Route::post('/', [StokController::class, 'store']);                             // menyimpan data stok baru
    Route::get('/create_ajax', [StokController::class, 'create_ajax']);             // menampilkan halaman form tambah user Ajax             
    Route::post('/ajax', [StokController::class, 'store_ajax']);                    // menyimpan data user baru Ajax   
    Route::get('/{id}', [StokController::class, 'show']);                           // menampilkan detail stok  
    Route::get('/{id}/edit', [StokController::class, 'edit']);                      // menampilkan halaman form edit stok
    Route::put('/{id}', [StokController::class, 'update']);                         // menyimpan perubahan data stok 
    Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);            // Menampilkan halaman form edit user Ajax           
    Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);        // Menyimpan perubahan data user Ajax   
    Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);       // Untuk tampilkan form confirm delete user Ajax  
    Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);     // Untuk hapus data user Ajax   
    Route::delete('/{id}', [StokController::class, 'destroy']);                      // menghapus data stok
});

//Route Barang
Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);          // menampilkan halaman awal barang
    Route::post('/list', [BarangController::class, 'list']);      // menampilkan data barang dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']);   // menampilkan halaman form tambah barang
    Route::post('/', [BarangController::class, 'store']);         // menyimpan data barang baru
    Route::get('/create_ajax', [BarangController::class, 'create_ajax']); // menampilkan halaman form tambah barang (ajax)
    Route::post('/ajax', [BarangController::class, 'store_ajax']);        // menyimpan data barang baru (ajax)
    Route::get('/{id}', [BarangController::class, 'show']);       // menampilkan detail barang
    Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax']); // menampilkan detail barang (ajax)
    Route::get('/{id}/edit', [BarangController::class, 'edit']);  // menampilkan halaman form edit barang
    Route::put('/{id}', [BarangController::class, 'update']);     // menyimpan perubahan data barang
    Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']); // menampilkan halaman form edit barang (ajax)
    Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']); // menyimpan perubahan data barang (ajax)
    Route::delete('/{id}', [BarangController::class, 'destroy']); // menghapus data barang
    Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']); // menghapus data barang (ajax)
    Route::delete('/{id}', [BarangController::class, 'destroy']);         // menghapus data barang
});




