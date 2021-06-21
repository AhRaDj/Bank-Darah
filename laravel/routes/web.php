<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsrTransfusiController;
use App\Http\Controllers\UsrPenerimaController;
use App\Http\Controllers\UsrPendonorController;
use App\Http\Controllers\UsrDonorController;
use App\Http\Controllers\AdmTransfusiController;
use App\Http\Controllers\AdmDonorController;
use App\Http\Controllers\AdmPendonorController;
use App\Http\Controllers\AdmPenerimaController;
use App\Http\Controllers\AdmStockController;
use App\Http\Controllers\UsrStockController;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
})->name('welcome.index');
Route::resource('UsrTransfusi', UsrTransfusiController::class);
Route::resource('UsrPenerima', UsrPenerimaController::class);
Route::resource('UsrPendonor', UsrPendonorController::class);
Route::resource('UsrDonor', UsrDonorController::class);
Route::resource('Login', LoginController::class);
Route::resource('AdmTransfusi', AdmTransfusiController::class);
Route::resource('AdmDonor', AdmDonorController::class);
Route::resource('AdmPendonor', AdmPendonorController::class);
Route::resource('AdmPenerima', AdmPenerimaController::class);
Route::resource('AdmStock', AdmStockController::class);
Route::resource('Report', UsrStockController::class);
Route::resource('Login', LoginController::class);

Route::get('/login', function(){
    return view('Login.index');
});