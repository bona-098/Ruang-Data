<?php

use App\Models\Mitra;
use App\Models\Sales;
use App\Models\Gedung;
use App\Models\Project;
use App\Models\Karyawan;
use App\Models\Personil;
use App\Models\Perangkat;
use App\Imports\MitraImport;
use App\Imports\SalesImport;
use App\Imports\GedungImport;
use App\Imports\ProjectImport;
use App\Imports\KaryawanImport;
use App\Imports\PersonilImport;
use App\Imports\PerangkatImport;
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
use App\Http\Controllers\BpoController;
use App\Http\Controllers\PersonilController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\LogActivityController;
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


// Rute untuk login dan logout
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
// Rute untuk halaman beranda bisa diakses semua role
Route::get('/', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');
Route::resource('/dashboard', DashboardController::class);
Route::get('/add-to-log', [LogActivityController::class, 'myTestAddToLog']);
Route::get('/log-activity', [LogActivityController::class, 'logActivity'])->name('log-activity.logActivity');
//hanya di akses oleh role admin
Route::resource('/pengguna', UserController::class)->middleware('auth');
Route::resource('/personil', PersonilController::class);
//dapat dilihat oleh semua role tatapi crud hanya bisa dilakukan role oms
Route::resource('/gedung', GedungController::class);
//dapat dilihat oleh semua role tatapi crud hanya bisa dilakukan role bsrm
Route::resource('/performance', PerformanceController::class);
Route::resource('/karyawan', KaryawanController::class);
Route::resource('/mitra', MitraController::class);
//dapat dilihat oleh semua role tatapi crud hanya bisa dilakukan role marshal
Route::resource('/sales', SalesController::class);
//dapat dilihat oleh semua role tatapi crud hanya bisa dilakukan role psd
Route::resource('/project', ProjectController::class);

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
//import mitra
Route::get('/import-mitra', function () {
    $mitra = Mitra::all();
    return view('mitras', ['mitra' => $mitra]);
});
Route::post('/mitras', function () {
    Excel::import(new MitraImport, request()->file('file'));
    return back();
});
Route::get('/import-personil', function () {
    $personil = Personil::all();
    return view('personul', ['personil' => $personil]);
});
Route::post('/personul', function () {
    Excel::import(new PersonilImport, request()->file('file'));
    return back();
});
Route::get('/import-perangkat', function () {
    $perangkat = Perangkat::all();
    return view('perang', ['perangkat' => $perangkat]);
});
Route::post('/perang', function () {
    Excel::import(new PerangkatImport, request()->file('file'));
    return back();
});
Route::get('/import-karyawan', function () {
    $karyawan = Karyawan::all();
    return view('karyawans', ['karyawan' => $karyawan]);
});
Route::post('/karyawans', function () {
    Excel::import(new KaryawanImport, request()->file('file'));
    return back();
});
//import sales
Route::get('/salees', function () {
    $sales = Sales::all();
    return view('salees', ['sales' => $sales]);
});
Route::post('/salees', function () {
    Excel::import(new SalesImport, request()->file('file'));
    return back();
});
Route::get('/sales/export', [SalesController::class, 'export'])->name('sales.export');
//import project
Route::get('/projek', function () {
    $project = Project::all();
    return view('projek', ['project' => $project]);
});
Route::post('/projek', function () {
    Excel::import(new ProjectImport, request()->file('file'));
    return back();
});
//import gedung
Route::get('/gedung_import', function () {
    $gedung = Gedung::all();
    return view('gedung', ['gedung' => $gedung]);
});
Route::post('/gedung_import', function () {
    Excel::import(new GedungImport, request()->file('file'));
    return back();
});
Route::get('/sales/export', [SalesController::class, 'export'])->name('sales.export');
Route::get('/testing', function () {
    return view('testing');
});
Route::resource('/calon_bpo', BpoController::class);
Route::get('/detail_chart_nilai', [ProjectController::class, 'detailchartnilai']);
Route::get('/detail_chart_projek', [ProjectController::class, 'detailchartprojek']);
Route::get('/detail_chart_sales', [SalesController::class, 'detailchartsales']);

// // Rute untuk pendaftaran pengguna baru
// Route::get('/register', [RegisteredUserController::class, 'create'])
//     ->middleware('guest')
//     ->name('register');
// Route::post('/register', [RegisteredUserController::class, 'store'])
//     ->middleware('guest');
// Rute untuk verifikasi email
// Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
//     ->middleware('auth')
//     ->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
//     ->middleware(['auth', 'signed', 'throttle:6,1'])
//     ->name('verification.verify');
// Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//     ->middleware(['auth', 'throttle:6,1'])
//     ->name('verification.send');
// // Rute untuk reset password
// Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
//     ->middleware('guest')
//     ->name('password.request');
// Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
//     ->middleware('guest')
//     ->name('password.email');
// Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
//     ->middleware('guest')
//     ->name('password.reset');
// Route::post('/reset-password', [NewPasswordController::class, 'store'])
//     ->middleware('guest')
//     ->name('password.update');