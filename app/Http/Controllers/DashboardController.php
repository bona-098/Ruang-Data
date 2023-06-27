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

    $telkomAkru = Project::where('kategori', 'Telkom')->sum('nilai_project');
    $telkomGroupAkru = Project::where('kategori', 'Telkom Group')->sum('nilai_project');
    $exmaAkru = Project::where('kategori', 'Exma')->sum('nilai_project');
    $enterpriseAkru = Project::where('kategori', 'Enterprise')->sum('nilai_project');

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
    
}
