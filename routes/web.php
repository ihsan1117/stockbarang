<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\StockBarangController;
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

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/pemasukan', function () {
//     return view('menu.pemasukan');
// });

// Route::get('/pengeluaran', function () {
//     return view('menu.pengeluaran');
// });
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'postLogin'])->name('postlogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){

    Route::get('/stock', [StockBarangController::class, 'index'])->name('stock');

    Route::get('/pemasukan', [PemasukanController::class, 'index'])->name('pemasukan');
    Route::post('/pemasukan', [PemasukanController::class, 'store'])->name('storepemasukan');

    Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran');
    Route::get('/pengeluaran/store', [PengeluaranController::class, 'store'])->name('storepengeluaran');
    
});