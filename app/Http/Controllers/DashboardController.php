<?php

namespace App\Http\Controllers;

use App\Models\Ps;
use Carbon\Carbon;
use App\Models\Sales;
use App\Models\Project;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\LogActivities;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::get();
        $project = Project::get();

        //target
        $tjanuari = Project::whereRaw('LOWER(akru) = ?', ['januari'])->sum('nilai_project');
        $tfebruari = Project::whereRaw('LOWER(akru) = ?', ['februari'])->sum('nilai_project');
        $tmaret = Project::whereRaw('LOWER(akru) = ?', ['maret'])->sum('nilai_project');
        $tapril = Project::whereRaw('LOWER(akru) = ?', ['april'])->sum('nilai_project');
        $tmei = Project::whereRaw('LOWER(akru) = ?', ['mei'])->sum('nilai_project');
        $tjuni = Project::whereRaw('LOWER(akru) = ?', ['juni'])->sum('nilai_project');
        $tjuli = Project::whereRaw('LOWER(akru) = ?', ['juli'])->sum('nilai_project');
        $tagustus = Project::whereRaw('LOWER(akru) = ?', ['agustus'])->sum('nilai_project');
        $tseptember = Project::whereRaw('LOWER(akru) = ?', ['september'])->sum('nilai_project');
        $toktober = Project::whereRaw('LOWER(akru) = ?', ['oktober'])->sum('nilai_project');
        $tnovember = Project::whereRaw('LOWER(akru) = ?', ['november'])->sum('nilai_project');
        $tdesember = Project::whereRaw('LOWER(akru) = ?', ['desember'])->sum('nilai_project');
        // dd($tfebruari);
        //realisasi
        $rjanuari = Ps::whereRaw('LOWER(bulan) = ?', ['januari'])->sum('target');
        $rfebruari = Ps::whereRaw('LOWER(bulan) = ?', ['februari'])->sum('target');
        $rmaret = Ps::whereRaw('LOWER(bulan) = ?', ['maret'])->sum('target');
        $rapril = Ps::whereRaw('LOWER(bulan) = ?', ['april'])->sum('target');
        $rmei = Ps::whereRaw('LOWER(bulan) = ?', ['mei'])->sum('target');
        $rjuni = Ps::whereRaw('LOWER(bulan) = ?', ['juni'])->sum('target');
        $rjuli = Ps::whereRaw('LOWER(bulan) = ?', ['juli'])->sum('target');
        $ragustus = Ps::whereRaw('LOWER(bulan) = ?', ['agustus'])->sum('target');
        $rseptember = Ps::whereRaw('LOWER(bulan) = ?', ['september'])->sum('target');
        $roktober = Ps::whereRaw('LOWER(bulan) = ?', ['oktober'])->sum('target');
        $rnovember = Ps::whereRaw('LOWER(bulan) = ?', ['november'])->sum('target');
        $rdesember = Ps::whereRaw('LOWER(bulan) = ?', ['desember'])->sum('target');
        // dd($rjanuari);
        // $telkomAkru = Project::where('kategori', 'Telkom')->sum('nilai_project');
        $telkomAkru = Project::where('kategori', 'Telkom')->get()->sum('nilai_project');
        $telkomGroupAkru = Project::where('kategori', 'Telkom Group')->sum('nilai_project');
        $enterpriseAkru = Project::where('kategori', 'Enterprise')->sum('nilai_project');
        $governanceAkru = Project::where('kategori', 'Governance')->sum('nilai_project');

        $telkomSudahAkru = Project::where('kategori', 'Telkom')
            ->where(function ($query) {
                $query->where('sudah_akru', '!=', null)
                    ->where('sudah_akru', '!=', 0);
            })
            ->sum('sudah_akru');
        $telkomGroupSudahAkru = Project::where('kategori', 'Telkom Group')
            ->where(function ($query) {
                $query->where('sudah_akru', '!=', null)
                    ->where('sudah_akru', '!=', 0);
            })
            ->sum('sudah_akru');
        $enterpriseSudahAkru = Project::where('kategori', 'Enterprise')
            ->where(function ($query) {
                $query->where('sudah_akru', '!=', null)
                    ->where('sudah_akru', '!=', 0);
            })
            ->sum('sudah_akru');
        $governanceSudahAkru = Project::where('kategori', 'Governance')
            ->where(function ($query) {
                $query->where('sudah_akru', '!=', null)
                    ->where('sudah_akru', '!=', 0);
            })
            ->sum('sudah_akru');

        $telkomBelumAkru = Project::where('kategori', 'Telkom')
            ->where(function ($query) {
                $query->where('sudah_akru', null)
                    ->orWhere('sudah_akru', 0);
            })
            ->sum('sisa_belum_akru');
        $telkomGroupBelumAkru = Project::where('kategori', 'Telkom Group')
            ->where(function ($query) {
                $query->where('sudah_akru', null)
                    ->orWhere('sudah_akru', 0);
            })
            ->sum('sisa_belum_akru');
        $enterpriseBelumAkru = Project::where('kategori', 'Enterprise')
            ->where(function ($query) {
                $query->where('sudah_akru', null)
                    ->orWhere('sudah_akru', 0);
            })
            ->sum('sisa_belum_akru');
        $governanceBelumAkru = Project::where('kategori', 'Governance')
            ->where(function ($query) {
                $query->where('sudah_akru', null)
                    ->orWhere('sudah_akru', 0);
            })
            ->sum('sisa_belum_akru');

        $telkomDone = Project::where('kategori', 'Telkom')
            ->where('tahap', 'Komersial')
            ->count();
        $telkomGroupDone = Project::where('kategori', 'Telkom Group')
            ->where('tahap', 'Komersial')
            ->count();
        $enterpriseDone = Project::where('kategori', 'Enterprise')
            ->where('tahap', 'Komersial')
            ->count();
        $governanceDone =  Project::where('kategori', 'Governance')
            ->where('tahap', 'Komersial')
            ->count();

        $telkomProgress = Project::where('kategori', 'Telkom')
            ->where('tahap', 'OnHand')
            ->count();
        $telkomGroupProgress = Project::where('kategori', 'Telkom Group')
            ->where('tahap', 'OnHand')
            ->count();
        $enterpriseProgress = Project::where('kategori', 'Enterprise')
            ->where('tahap', 'OnHand')
            ->count();
        $governanceProgress = Project::where('kategori', 'Governance')
            ->where('tahap', 'OnHand')
            ->count();

        $telkomBelumMulai = Project::where('kategori', 'Telkom')
            ->where('tahap', 'Co-OnHand')
            ->count();
        $telkomGroupBelumMulai = Project::where('kategori', 'Telkom Group')
            ->where('tahap', 'Co-OnHand')
            ->count();
        $enterpriseBelumMulai = Project::where('kategori', 'Enterprise')
            ->where('tahap', 'Co-OnHand')
            ->count();
        $governanceBelumMulai =  Project::where('kategori', 'Governance')
            ->where('tahap', 'Co-OnHand')
            ->count();

        // salesbpp
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
        //kt
        $ktprospekEnterprise = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'Prospek')
            ->count();

        $ktpotensiEnterprise = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'Potensi')
            ->count();

        $ktonhandEnterprise = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'On Hand')
            ->count();

        $ktoutEnterprise = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'out')
            ->count();

        $ktprospekGovernment = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Government')
            ->where('status_project', 'Prospek')
            ->count();

        $ktpotensiGovernment = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Government')
            ->where('status_project', 'Potensi')
            ->count();

        $ktonhandGovernment = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Government')
            ->where('status_project', 'On Hand')
            ->count();

        $ktoutGovernment = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Government')
            ->where('status_project', 'out')
            ->count();

        $ktprospekSubsidiaries = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'Prospek')
            ->count();

        $ktpotensiSubsidiaries = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'Potensi')
            ->count();

        $ktonhandSubsidiaries = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'On Hand')
            ->count();

        $ktoutSubsidiaries = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'out')
            ->count();

        $ktprospekTelkom = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Telkom')
            ->where('status_project', 'Prospek')
            ->count();

        $ktpotensiTelkom = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Telkom')
            ->where('status_project', 'Potensi')
            ->count();

        $ktonhandTelkom = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Telkom')
            ->where('status_project', 'On Hand')
            ->count();

        $ktoutTelkom = Sales::where('unit_kerja', 'Area Kaltim')
            ->where('segment', 'Telkom')
            ->where('status_project', 'out')
            ->count();
        //ks
        $ksprospekEnterprise = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'Prospek')
            ->count();

        $kspotensiEnterprise = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'Potensi')
            ->count();

        $ksonhandEnterprise = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'On Hand')
            ->count();

        $ksoutEnterprise = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'out')
            ->count();

        $ksprospekGovernment = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Government')
            ->where('status_project', 'Prospek')
            ->count();

        $kspotensiGovernment = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Government')
            ->where('status_project', 'Potensi')
            ->count();

        $ksonhandGovernment = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Government')
            ->where('status_project', 'On Hand')
            ->count();

        $ksoutGovernment = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Government')
            ->where('status_project', 'out')
            ->count();

        $ksprospekSubsidiaries = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'Prospek')
            ->count();

        $kspotensiSubsidiaries = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'Potensi')
            ->count();

        $ksonhandSubsidiaries = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'On Hand')
            ->count();

        $ksoutSubsidiaries = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'out')
            ->count();

        $ksprospekTelkom = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Telkom')
            ->where('status_project', 'Prospek')
            ->count();

        $kspotensiTelkom = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Telkom')
            ->where('status_project', 'Potensi')
            ->count();

        $ksonhandTelkom = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Telkom')
            ->where('status_project', 'On Hand')
            ->count();

        $ksoutTelkom = Sales::where('unit_kerja', 'Area Kalsel')
            ->where('segment', 'Telkom')
            ->where('status_project', 'out')
            ->count();

        //kb
        $kbprospekEnterprise = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'Prospek')
            ->count();

        $kbpotensiEnterprise = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'Potensi')
            ->count();

        $kbonhandEnterprise = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'On Hand')
            ->count();

        $kboutEnterprise = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Enterprise')
            ->where('status_project', 'out')
            ->count();

        $kbprospekGovernment = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Government')
            ->where('status_project', 'Prospek')
            ->count();

        $kbpotensiGovernment = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Government')
            ->where('status_project', 'Potensi')
            ->count();

        $kbonhandGovernment = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Government')
            ->where('status_project', 'On Hand')
            ->count();

        $kboutGovernment = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Government')
            ->where('status_project', 'out')
            ->count();

        $kbprospekSubsidiaries = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'Prospek')
            ->count();

        $kbpotensiSubsidiaries = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'Potensi')
            ->count();

        $kbonhandSubsidiaries = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'On Hand')
            ->count();

        $kboutSubsidiaries = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Subsidiaries')
            ->where('status_project', 'out')
            ->count();

        $kbprospekTelkom = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Telkom')
            ->where('status_project', 'Prospek')
            ->count();

        $kbpotensiTelkom = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Telkom')
            ->where('status_project', 'Potensi')
            ->count();

        $kbonhandTelkom = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Telkom')
            ->where('status_project', 'On Hand')
            ->count();

        $kboutTelkom = Sales::where('unit_kerja', 'Area Kalbar')
            ->where('segment', 'Telkom')
            ->where('status_project', 'out')
            ->count();
        // Total Jumlah untuk masing-masing segment bpp
        $totalEnterprise = $prospekEnterprise + $potensiEnterprise + $onhandEnterprise + $outEnterprise;
        $totalGovernment = $prospekGovernment + $potensiGovernment + $onhandGovernment + $outGovernment;
        $totalSubsidiaries = $prospekSubsidiaries + $potensiSubsidiaries + $onhandSubsidiaries + $outSubsidiaries;
        $totalTelkom = $prospekTelkom + $potensiTelkom + $onhandTelkom + $outTelkom;
        // Total Jumlah untuk masing-masing segment kt
        $kttotalEnterprise = $ktprospekEnterprise + $ktpotensiEnterprise + $ktonhandEnterprise + $ktoutEnterprise;
        $kttotalGovernment = $ktprospekGovernment + $ktpotensiGovernment + $ktonhandGovernment + $ktoutGovernment;
        $kttotalSubsidiaries = $ktprospekSubsidiaries + $ktpotensiSubsidiaries + $ktonhandSubsidiaries + $ktoutSubsidiaries;
        $kttotalTelkom = $ktprospekTelkom + $ktpotensiTelkom + $ktonhandTelkom + $ktoutTelkom;
        // Total Jumlah untuk masing-masing segment ks
        $kstotalEnterprise = $ksprospekEnterprise + $kspotensiEnterprise + $ksonhandEnterprise + $ksoutEnterprise;
        $kstotalGovernment = $ksprospekGovernment + $kspotensiGovernment + $ksonhandGovernment + $ksoutGovernment;
        $kstotalSubsidiaries = $ksprospekSubsidiaries + $kspotensiSubsidiaries + $ksonhandSubsidiaries + $ksoutSubsidiaries;
        $kstotalTelkom = $ksprospekTelkom + $kspotensiTelkom + $ksonhandTelkom + $ksoutTelkom;
        // Total Jumlah untuk masing-masing segment kb
        $kbtotalEnterprise = $ktprospekEnterprise + $ktpotensiEnterprise + $ktonhandEnterprise + $ktoutEnterprise;
        $kbtotalGovernment = $ktprospekGovernment + $ktpotensiGovernment + $ktonhandGovernment + $ktoutGovernment;
        $kbtotalSubsidiaries = $ktprospekSubsidiaries + $ktpotensiSubsidiaries + $ktonhandSubsidiaries + $ktoutSubsidiaries;
        $kbtotalTelkom = $ktprospekTelkom + $ktpotensiTelkom + $ktonhandTelkom + $ktoutTelkom;

        $data = [
            // bp
            'prospekEnterprise' => $prospekEnterprise,
            'potensiEnterprise' => $potensiEnterprise,
            'onhandEnterprise' => $onhandEnterprise,
            'outEnterprise' => $outEnterprise,
            'totalEnterprise' => $totalEnterprise,
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
            // kt
            'ktprospekEnterprise' => $ktprospekEnterprise,
            'ktpotensiEnterprise' => $ktpotensiEnterprise,
            'ktonhandEnterprise' => $ktonhandEnterprise,
            'ktoutEnterprise' => $ktoutEnterprise,
            'kttotalEnterprise' => $kttotalEnterprise,
            'ktprospekGovernment' => $ktprospekGovernment,
            'ktpotensiGovernment' => $ktpotensiGovernment,
            'ktonhandGovernment' => $ktonhandGovernment,
            'ktoutGovernment' => $ktoutGovernment,
            'kttotalGovernment' => $kttotalGovernment,
            'ktprospekSubsidiaries' => $ktprospekSubsidiaries,
            'ktpotensiSubsidiaries' => $ktpotensiSubsidiaries,
            'ktonhandSubsidiaries' => $ktonhandSubsidiaries,
            'ktoutSubsidiaries' => $ktoutSubsidiaries,
            'kttotalSubsidiaries' => $kttotalSubsidiaries,
            'ktprospekTelkom' => $ktprospekTelkom,
            'ktpotensiTelkom' => $ktpotensiTelkom,
            'ktonhandTelkom' => $ktonhandTelkom,
            'ktoutTelkom' => $ktoutTelkom,
            'kttotalTelkom' => $kttotalTelkom,
            // ks
            'ksprospekEnterprise' => $ksprospekEnterprise,
            'kspotensiEnterprise' => $kspotensiEnterprise,
            'ksonhandEnterprise' => $ksonhandEnterprise,
            'ksoutEnterprise' => $ksoutEnterprise,
            'kstotalEnterprise' => $kstotalEnterprise,
            'ksprospekGovernment' => $ksprospekGovernment,
            'kspotensiGovernment' => $kspotensiGovernment,
            'ksonhandGovernment' => $ksonhandGovernment,
            'ksoutGovernment' => $ksoutGovernment,
            'kstotalGovernment' => $kstotalGovernment,
            'ksprospekSubsidiaries' => $ksprospekSubsidiaries,
            'kspotensiSubsidiaries' => $kspotensiSubsidiaries,
            'ksonhandSubsidiaries' => $ksonhandSubsidiaries,
            'ksoutSubsidiaries' => $ksoutSubsidiaries,
            'kstotalSubsidiaries' => $kstotalSubsidiaries,
            'ksprospekTelkom' => $ksprospekTelkom,
            'kspotensiTelkom' => $kspotensiTelkom,
            'ksonhandTelkom' => $ksonhandTelkom,
            'ksoutTelkom' => $ksoutTelkom,
            'kstotalTelkom' => $kstotalTelkom,
            // kb
            'kbprospekEnterprise' => $kbprospekEnterprise,
            'kbpotensiEnterprise' => $kbpotensiEnterprise,
            'kbonhandEnterprise' => $kbonhandEnterprise,
            'kboutEnterprise' => $kboutEnterprise,
            'kbtotalEnterprise' => $kbtotalEnterprise,
            'kbprospekGovernment' => $kbprospekGovernment,
            'kbpotensiGovernment' => $kbpotensiGovernment,
            'kbonhandGovernment' => $kbonhandGovernment,
            'kboutGovernment' => $kboutGovernment,
            'kbtotalGovernment' => $kbtotalGovernment,
            'kbprospekSubsidiaries' => $kbprospekSubsidiaries,
            'kbpotensiSubsidiaries' => $kbpotensiSubsidiaries,
            'kbonhandSubsidiaries' => $kbonhandSubsidiaries,
            'kboutSubsidiaries' => $kboutSubsidiaries,
            'kbtotalSubsidiaries' => $kbtotalSubsidiaries,
            'kbprospekTelkom' => $kbprospekTelkom,
            'kbpotensiTelkom' => $kbpotensiTelkom,
            'kbonhandTelkom' => $kbonhandTelkom,
            'kboutTelkom' => $kboutTelkom,
            'kbtotalTelkom' => $kbtotalTelkom,
            //end
            'karyawan' => $karyawan,
            'project' => $project,
            'telkomAkru' => $telkomAkru,
            'telkomGroupAkru' => $telkomGroupAkru,
            'enterpriseAkru' => $enterpriseAkru,
            'governanceAkru' => $governanceAkru,
            'telkomSudahAkru' => $telkomSudahAkru,
            'telkomGroupSudahAkru' => $telkomGroupSudahAkru,
            'enterpriseSudahAkru' => $enterpriseSudahAkru,
            'governanceSudahAkru' => $governanceSudahAkru,
            'telkomBelumAkru' => $telkomBelumAkru,
            'telkomGroupBelumAkru' => $telkomGroupBelumAkru,
            'enterpriseBelumAkru' => $enterpriseBelumAkru,
            'governanceBelumAkru' => $governanceBelumAkru,
            'telkomDone' => $telkomDone,
            'telkomGroupDone' => $telkomGroupDone,
            'enterpriseDone' => $enterpriseDone,
            'governanceDone' => $governanceDone,
            'telkomProgress' => $telkomProgress,
            'telkomGroupProgress' => $telkomGroupProgress,
            'enterpriseProgress' => $enterpriseProgress,
            'governanceProgress' => $governanceProgress,
            'telkomBelumMulai' => $telkomBelumMulai,
            'telkomGroupBelumMulai' => $telkomGroupBelumMulai,
            'enterpriseBelumMulai' => $enterpriseBelumMulai,
            'governanceBelumMulai' => $governanceBelumMulai,
            //target
            'tjanuari' =>$tjanuari,
            'tfebruari' => $tfebruari,
            'tmaret' => $tmaret,
            'tapril' => $tapril,
            'tmei' => $tmei,
            'tjuni' => $tjuni,
            'tjuli' => $tjuli,
            'tagustus' => $tagustus,
            'tseptember' => $tseptember,
            'toktober' => $toktober,
            'tnovember' => $tnovember,
            'tdesember' => $tdesember,
            //realisasi
            'rjanuari' =>$rjanuari,
            'rfebruari' => $rfebruari,
            'rmaret' => $rmaret,
            'rapril' => $rapril,
            'rmei' => $rmei,
            'rjuni' => $rjuni,
            'rjuli' => $rjuli,
            'ragustus' => $ragustus,
            'rseptember' => $rseptember,
            'roktober' => $roktober,
            'rnovember' => $rnovember,
            'rdesember' => $rdesember
        ];
        return view('bsrm.dashboard_bsrm', $data);
    }

    public function store(Request $request)
    {
        $ps = Ps::create([
            'target' => $request ->target,
            'bulan' =>$request ->bulan
        ]);
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menambah data target project solution', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->back();
    }
}