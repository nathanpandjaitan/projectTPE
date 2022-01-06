<?php

use App\Models\dataProduk;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dataProdukController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\DashboardAdminController;

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


Route::get('/', [ProdukController::class, 'index']);


route::get('/detailProduk/{produkID}', [ProdukController::class, 'DetailProduk'])->name('detail.produk');
route::post('pesan/{produkID}', [ProdukController::class, 'pesan']);
route::get('checkout', [ProdukController::class, 'check_out']);
route::delete('checkout/{id}', [ProdukController::class, 'delete']);

route::get('konfirmasi-checkout', [ProdukController::class, 'konfirmasi']);




Route::get('/adminDashboard', [DashboardAdminController::class, 'index']) ;


// LOGIN USER
Route::get('/loginUser', [LoginController::class, 'index'])->Middleware('guest');
Route::post('/loginUser', [LoginController::class, 'authenticate']);
Route::post('/logoutUser', [LoginController::class, 'logout']);

// REGISTRASI USER
Route::get('/registerUser', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registerUser', [RegisterController::class, 'store']);




// LOGIN ADMIN 
route::get('/login', [LoginAdminController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginAdminController::class, 'authenticate']);

// REGISTRASI ADMIN

Route::get('/register', [RegisterAdminController::class, 'index']);
Route::post('/register', [RegisterAdminController::class, 'store']);




// Route::get('produk/', [dataProdukController::class, 'index']);
// Route::get('produk/create', [dataProdukController::class, 'create']);
// Route::post('produk/', [dataProdukController::class, 'store']);
// Route::get('produk/{produkID}', [dataProdukController::class, 'edit']);
// Route::put('produk/{produkID}/edit', [dataProdukController::class, 'update']);
// Route::delete('produk/{produkID}/delete', [dataProdukController::class, 'destroy']);



// DATA PRODUK
Route::get('/dataProduk', [dataProdukController::class, 'index']);
route::get('/createProduk', [dataProdukController::class, 'create']);
route::post('submit', [dataProdukController::class, 'submit']);
route::get('/editProduk/{produkID}', [dataProdukController::class, 'edit'])->name('produk.edit');
route::post('/updateProduk/{produkID}', [dataProdukController::class, 'update']);
route::get('/deleteProduk/{produkID}', [dataProdukController::class, 'destroy'])->name('produk.destroy');