<?php

use App\Models\Mitra;
use App\Models\Sales;
use App\Models\Project;
use App\Imports\MitraImport;
use App\Imports\SalesImport;
use App\Imports\ProjectImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\ProjectController;

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PersonilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

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

// Rute untuk login dan logout
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest') 
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Rute untuk pendaftaran pengguna baru
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

// Rute untuk verifikasi email
Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

// Rute untuk reset password
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

// Rute untuk halaman beranda
Route::get('/', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::resource('/tambah-user', UserController::class)->middleware('auth');
Route::resource('/personil', PersonilController::class);
Route::resource('/gedung', GedungController::class);
Route::resource('/perangkat', PerangkatController::class);
Route::resource('/performance', PerformanceController::class);
Route::resource('/karyawan', KaryawanController::class);
Route::resource('/mitra', MitraController::class);
Route::resource('/sales', SalesController::class);
Route::resource('/project', ProjectController::class);
// Route::get('/project', [ProjectController::class], 'grafik');
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

// Route::get('/detail_grafik', function () {
//     return view('project.detail_grafik');
// });
//import mitra
Route::get('/import-mitra', function () {
    $mitra = Mitra::all();
    return view('mitras',['mitra'=>$mitra]);
});
Route::post('/mitras', function () {
    Excel::import(new MitraImport, request()->file('file'));
    return back();
});

//import sales
Route::get('/salees', function () {
    $sales = Sales::all();
    return view('salees',['sales'=>$sales]);
});
Route::post('/salees', function () {
    Excel::import(new SalesImport, request()->file('file'));
    return back();
});

Route::get('/sales/export', [SalesController::class, 'export'])->name('sales.export');

//import project
Route::get('/projek', function () {
    $project = Project::all();
    return view('projek',['project'=>$project]);
});
Route::post('/projek', function () {
    Excel::import(new ProjectImport, request()->file('file'));
    return back();
});
// Auth::routes();
// Route::get('/ ', function () {
//     $sales = Sales::all();
//     return view('sales',['sales'=>$sales]);
// });
// Route::post('/', function () {
//     Excel::import(new SalesImport, request()->file('file'));
//     return back();
// });
// require __DIR__.'/auth.php';