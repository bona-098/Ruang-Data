<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;

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
//     return view('dashboard');
// });
// Route::get('/chart', function () {
//     return view('chart');
// });
// Route::get('/bsrm', function () {
//     return view('Role.bsrm');
// });
Route::resource('/karyawan', KaryawanController::class);

// Route::get('/bsrmcopy', function () {
//     return view('Role.bsrmcopy');
// });
Route::resource('/dashboard', DashboardController::class);
Route::get('/mitra', function () {
    return view('Role BSRM.mitra');
});
Route::get('/costumer', function () {
    return view('Role BSRM.costumer');
});
// Route::get('/karyawan', function () {
//     return view('Role.karyawan');
// });