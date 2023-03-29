<?php

namespace App\Http\Controllers;
use App\Models\karyawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::get();
        return view ('Role BSRM.dashboard_bsrm', compact('karyawan'));
    }
}
