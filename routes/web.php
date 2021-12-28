<?php

use App\Http\Controllers\dataProdukController;
use App\Models\dataProduk;
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
    return view('admin.adminDashboard', [
        "title" => "Dashboard Admin"
    ]);
});

Route::get('/login', function () {
    return view('admin.loginAdmin');
});

// Route::get('produk/', [dataProdukController::class, 'index']);
// Route::get('produk/create', [dataProdukController::class, 'create']);
// Route::post('produk/', [dataProdukController::class, 'store']);
// Route::get('produk/{produkID}', [dataProdukController::class, 'edit']);
// Route::put('produk/{produkID}/edit', [dataProdukController::class, 'update']);
// Route::delete('produk/{produkID}/delete', [dataProdukController::class, 'destroy']);


Route::get('/dataProduk', [dataProdukController::class, 'index']);
route::get('/createProduk', [dataProdukController::class, 'create']);
route::post('submit', [dataProdukController::class, 'submit']);
route::get('/editProduk/{produkID}', [dataProdukController::class, 'edit'])->name('produk.edit');
route::post('/updateProduk/{produkID}', [dataProdukController::class, 'update']);
route::get('/deleteProduk/{produkID}', [dataProdukController::class, 'destroy'])->name('produk.destroy');