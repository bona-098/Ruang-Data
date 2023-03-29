<?php

use App\Http\Controllers\KaryawanController;
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
//     return view('dashboard');
// });
// Route::get('/chart', function () {
//     return view('chart');
// });
// Route::get('/bsrm', function () {
//     return view('Role.bsrm');
// });
Route::resource('/', KaryawanController::class);
Route::resource('/bsrm', KaryawanController::class);

// Route::get('/bsrmcopy', function () {
//     return view('Role.bsrmcopy');
// });
Route::get('/karyawan', function () {
    return view('Role.karyawan');
});
Route::get('/lop', function () {
    return view('psd.lop');
});
Route::get('/nlop', function () {
    return view('psd.nlop');
});