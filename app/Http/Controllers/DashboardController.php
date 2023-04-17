<?php

namespace App\Http\Controllers;
use App\Models\karyawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::get();
        return view ('bsrm.dashboard_bsrm', compact('karyawan'));
    }
}
