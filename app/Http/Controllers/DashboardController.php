<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Project;
use App\Models\karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::get();
        $project = Project::get();

        // $telkomAkru = Project::where('kategori', 'Telkom')->sum('nilai_project');
        $telkomAkru = Project::where('kategori', 'Telkom')->get()->sum('nilai_project');
        // dd($telkomAkru);

        $telkomGroupAkru = Project::where('kategori', 'Telkom Group')->sum('nilai_project');
        $enterpriseAkru = Project::where('kategori', 'Enterprise')->sum('nilai_project');

        $telkomSudahAkru = Project::where('kategori', 'Telkom')->sum('sudah_akru');
        $telkomGroupSudahAkru = Project::where('kategori', 'Telkom Group')->sum('sudah_akru');
        $enterpriseSudahAkru = Project::where('kategori', 'Enterprise')->sum('sudah_akru');

        $telkomBelumAkru = Project::where('kategori', 'Telkom')->sum('sisa_belum_akru');
        $telkomGroupBelumAkru = Project::where('kategori', 'Telkom Group')->sum('sisa_belum_akru');
        $enterpriseBelumAkru = Project::where('kategori', 'Enterprise')->sum('sisa_belum_akru');
        $data = [
            'karyawan' => $karyawan,
            'project' => $project,
            'telkomAkru' => $telkomAkru,
            'telkomGroupAkru' => $telkomGroupAkru,
            'enterpriseAkru' => $enterpriseAkru,
            'telkomSudahAkru' => $telkomSudahAkru,
            'telkomGroupSudahAkru' => $telkomGroupSudahAkru,
            'enterpriseSudahAkru' => $enterpriseSudahAkru,
            'telkomBelumAkru' => $telkomBelumAkru,
            'telkomGroupBelumAkru' => $telkomGroupBelumAkru,
            'enterpriseBelumAkru' => $enterpriseBelumAkru
        ];

        return view('bsrm.dashboard_bsrm', $data);
    }

    public function areabpp()
    {
        $sales = Sales::get();
        // Menghitung jumlah data untuk masing-masing status_project dan segment pada unit_kerja "Area Balikpapan"
        $prospekEnterprise = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'Prospek')
            ->count();

        $potensiEnterprise = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'Potensi')
            ->count();

        $onhandEnterprise = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'On Hand')
            ->count();

        $outEnterprise = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'out')
            ->count();

        $prospekGovernment = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Government')
            ->where('status_project', 'Prospek')
            ->count();

        $potensiGovernment = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Government')
            ->where('status_project', 'Potensi')
            ->count();

        $onhandGovernment = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Government')
            ->where('status_project', 'On Hand')
            ->count();

        $outGovernment = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Government')
            ->where('status_project', 'out')
            ->count();

        $prospekSubsidiaries = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'Prospek')
            ->count();

        $potensiSubsidiaries = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'Potensi')
            ->count();

        $onhandSubsidiaries = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'On Hand')
            ->count();

        $outSubsidiaries = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'out')
            ->count();

        $prospekTelkom = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Telkom')
            ->where('status_project', 'Prospek')
            ->count();

        $potensiTelkom = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Telkom')
            ->where('status_project', 'Potensi')
            ->count();

        $onhandTelkom = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Telkom')
            ->where('status_project', 'On Hand')
            ->count();

        $outTelkom = Sales::where('unit_kerja', 'Area Balikpapan')
            ->where('segment', 'Telkom')
            ->where('status_project', 'out')
            ->count();
        // Lanjutkan untuk variabel lainnya

        // Total Jumlah untuk masing-masing segment
        $totalEnterprise = $prospekEnterprise + $potensiEnterprise + $onhandEnterprise + $outEnterprise;
        $totalGovernment = $prospekGovernment + $potensiGovernment + $onhandGovernment + $outGovernment;
        $totalSubsidiaries = $prospekSubsidiaries + $potensiSubsidiaries + $onhandSubsidiaries + $outSubsidiaries;
        $totalTelkom = $prospekTelkom + $potensiTelkom + $onhandTelkom + $outTelkom;

        // Variabel yang akan dikirimkan ke view
        $data = [
            'prospekEnterprise' => $prospekEnterprise,
            'potensiEnterprise' => $potensiEnterprise,
            'onhandEnterprise' => $onhandEnterprise,
            'outEnterprise' => $outEnterprise,
            'totalEnterprise' => $totalEnterprise,
            // Lanjutkan untuk variabel lainnya
            'prospekGovernment' => $prospekGovernment,
            'potensiGovernment' => $potensiGovernment,
            'onhandGovernment' => $onhandGovernment,
            'outGovernment' => $outGovernment,
            'totalGovernment' => $totalGovernment,
            'prospekSubsidiaries' => $prospekSubsidiaries,
            'potensiSubsidiaries' => $potensiSubsidiaries,
            'onhandSubsidiaries' => $onhandSubsidiaries,
            'outSubsidiaries' => $outSubsidiaries,
            'totalSubsidiaries' => $totalSubsidiaries,
            'prospekTelkom' => $prospekTelkom,
            'potensiTelkom' => $potensiTelkom,
            'onhandTelkom' => $onhandTelkom,
            'outTelkom' => $outTelkom,
            'totalTelkom' => $totalTelkom,
        ];

        return view('bsrm.dashboardbsrm', compact('sales'), $data);
    }
}
