<?php

use App\Models\Mitra;
use App\Models\Sales;
use App\Imports\MitraImport;
use App\Imports\SalesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProjectController;
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
Route::resource('/mitra', MitraController::class);
Route::resource('/sales', SalesController::class);
Route::resource('/project', ProjectController::class);
Route::resource('/dashboard', DashboardController::class);
Route::get('/filter', [SalesController::class, 'resetFilter'])->name('resetFilter');
Route::get('/costumer', function () {
    return view('Role BSRM.costumer');
});
Route::get('/lop', function () {
    return view('psd.lop');
});
Route::get('/nlop', function () {
    return view('psd.nlop');
});

Route::get('/', function () {
    $mitra = Mitra::all();
    return view('mitras',['mitra'=>$mitra]);
});
Route::post('/mitras', function () {
    Excel::import(new MitraImport, request()->file('file'));
    return back();
});
Route::get('/ ', function () {
    $sales = Sales::all();
    return view('sales',['sales'=>$sales]);
});
Route::post('/', function () {
    Excel::import(new SalesImport, request()->file('file'));
    return back();
});