<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
{
    $karyawan = Karyawan::get();
    $projects = Project::get();

    $telkomAkru = Project::where('kategori', 'Telkom')->sum('akru');
    $telkomGroupAkru = Project::where('kategori', 'Telkom Group')->sum('akru');
    $exmaAkru = Project::where('kategori', 'Exma')->sum('akru');
    $enterpriseAkru = Project::where('kategori', 'Enterprise')->sum('akru');

    $telkomsudahakru = Project::where('kategori', 'Telkom')->sum('sudah_akru');
    $telkomGroupsudahkru = Project::where('kategori', 'Telkom Group')->sum('sudah_akru');
    $exmasudahakru = Project::where('kategori', 'Exma')->sum('sudah_akru');
    $enterprisesudahakru = Project::where('kategori', 'Enterprise')->sum('sudah_akru');

    $telkombelumakru = Project::where('kategori', 'Telkom')->sum('sisa_belum_akru');
    $telkomGroupbelumakru = Project::where('kategori', 'Telkom Group')->sum('sisa_belum_akru');
    $exmabelumakru = Project::where('kategori', 'Exma')->sum('sisa_belum_akru');
    $enterprisebelumakru = Project::where('kategori', 'Enterprise')->sum('sisa_belum_akru');

    return view('bsrm.dashboard_bsrm', compact(
        'telkomAkru', 'telkomGroupAkru', 'exmaAkru', 'enterpriseAkru',
        'telkomsudahakru', 'telkomGroupsudahkru', 'exmasudahakru', 'enterprisesudahakru',
        'telkombelumakru', 'telkomGroupbelumakru', 'exmabelumakru', 'enterprisebelumakru'
    ));
}

// dd($telkombelumakru);
// var ctx = document.getElementById("barChart2");
//         var telkomAkru = {!! json_encode($telkomAkru) !!};
//         var telkomGroupAkru = {!! json_encode($telkomGroupAkru) !!};
//         var exmaAkru = {!! json_encode($exmaAkru) !!};
//         var enterpriseAkru = {!! json_encode($enterpriseAkru) !!};

//         var telkomsudahakru = {!! json_encode($telkomsudahakru) !!};
//         var telkomGroupsudahkru = {!! json_encode($telkomGroupsudahkru) !!};
//         var exmasudahakru = {!! json_encode($exmasudahakru) !!};
//         var enterprisesudahakru = {!! json_encode($enterprisesudahakru) !!};

//         var telkombelumakru = {!! json_encode($telkombelumakru) !!};
//         var telkomGroupbelumakru = {!! json_encode($telkomGroupbelumakru) !!};
//         var exmabelumakru = {!! json_encode($exmabelumakru) !!};
//         var enterprisebelumakru = {!! json_encode($enterprisebelumakru) !!};

    
}
