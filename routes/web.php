<?php

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
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// menu group data wilayah
Route::prefix('data_wilayah')->group(function () {
   // menu tps
   Route::prefix('tps')->group(function () {
      Route::get('/', [App\Http\Controllers\TpsController::class, 'index'])->name('data-wilayah.tps');
   });

   // end menu tps
   // menu tps
   Route::prefix('kelurahan-desa')->group(function () {
      Route::get('/', [App\Http\Controllers\KelurahanDesaController::class, 'index'])->name('data-wilayah.kelurahan-desa');
   });
   // end menu tps
});
