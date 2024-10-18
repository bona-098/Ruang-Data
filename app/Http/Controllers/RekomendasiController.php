<?php

namespace App\Http\Controllers;

use App\Models\JobHistory;
use App\Models\Rekomendasi;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::get();
        $jumlahKaryawan = Karyawan::count();

        // Menyaring karyawan berdasarkan unit kerja
        $karyawan_organik = Karyawan::with('dataKerja') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->where('data_kerja_karyawan.unit_kerja', 'General Manager Regional') // Kondisi unit_kerja
            ->select('karyawan.*') // Memilih kolom dari tabel karyawan
            ->get();
        $karyawan_regional6 = Karyawan::whereIn('unit_kerja', [
            'General Manager Regional',
            'Manager Marketing, Sales & Solution',
            'Manager Planning & Delivery',
            'Manager Operation & Maintenance',
            'Manager Business Support & Risk Management'
        ])->get();
        $karyawan_areakaltimtara = Karyawan::whereIn('unit_kerja', [
            'Area Kaltimtara'
        ])->get();
        $karyawan_areakalselteng = Karyawan::whereIn('unit_kerja', [
            'Area Kalselteng'
        ])->get();
        $karyawan_areakalbar = Karyawan::whereIn('unit_kerja', [
            'Area Kalbar'
        ])->get();
        // Menghitung jumlah karyawan di Regional 6
        $jumlah_karyawan_regional6 = Karyawan::whereIn('unit_kerja', [
            'General Manager Regional',
            'Manager Marketing, Sales & Solution',
            'Manager Planning & Delivery',
            'Manager Operation & Maintenance',
            'Manager Business Support & Risk Management'
        ])->count();

        $jumlah_karyawan_areakaltimtara = Karyawan::whereIn('unit_kerja', [
            'Area Kaltimtara'
        ])->count();

        $jumlah_karyawan_areakalselteng = Karyawan::whereIn('unit_kerja', [
            'Area Kalselteng'
        ])->count();

        $jumlah_karyawan_areakalbar = Karyawan::whereIn('unit_kerja', [
            'Area Kalbar'
        ])->count();

        $jumlah_karyawan_s2 = Karyawan::whereIn('jenjang_pendidikan', [
            'S2'
        ])->count();

        $jumlah_karyawan_s1 = Karyawan::whereIn('jenjang_pendidikan', [
            'S1'
        ])->count();

        $jumlah_karyawan_DIII = Karyawan::whereIn('jenjang_pendidikan', [
            'Diploma III'
        ])->count();

        $jumlah_karyawan_sekolah = Karyawan::whereIn('jenjang_pendidikan', [
            'SMK/SLTA Kejuruan'
        ])->count();


        return view('bsrm.rekomendasi.index', compact(
            'karyawan',
            'jumlahKaryawan',
            'karyawan_organik',
            'karyawan_regional6',
            'karyawan_areakaltimtara',
            'karyawan_areakalselteng',
            'karyawan_areakalbar',
            'jumlah_karyawan_regional6',
            'jumlah_karyawan_areakaltimtara',
            'jumlah_karyawan_areakalselteng',
            'jumlah_karyawan_areakalbar',
            'jumlah_karyawan_s2',
            'jumlah_karyawan_s1',
            'jumlah_karyawan_DIII',
            'jumlah_karyawan_sekolah',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekomendasi  $rekomendasi
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        // Ambil parameter dari request
        $band = $request->input('band');
        $lamaJabatan = $request->input('lama_jabatan');

        // Dapatkan tanggal jabatan terbaru untuk setiap karyawan
        $subQuery = JobHistory::selectRaw('MAX(tgl_jabat) as latest_date, karyawan_id')
            ->groupBy('karyawan_id');

        // Ambil data berdasarkan subquery dan muat relasi karyawan
        $query = JobHistory::with('karyawan')
            ->joinSub($subQuery, 'latest_job', function ($join) {
                $join->on('job_histories.tgl_jabat', '=', 'latest_job.latest_date')
                    ->on('job_histories.karyawan_id', '=', 'latest_job.karyawan_id');
            });

        // Jika band dipilih, tambahkan ke query
        if ($band) {
            $query->where('job_histories.band', $band);
        }

        // Jika lama jabatan dipilih, tambahkan ke query
        if ($lamaJabatan) {
            switch ($lamaJabatan) {
                case 'Kurang 1 Tahun':
                    $query->whereDate('job_histories.tgl_jabat', '>=', now()->subYear());
                    break;
                case 'Antara 1-2 Tahun':
                    $query->whereDate('job_histories.tgl_jabat', '<', now()->subYear())
                        ->whereDate('job_histories.tgl_jabat', '>=', now()->subYears(2));
                    break;
                case 'Lebih 2 Tahun':
                    $query->whereDate('job_histories.tgl_jabat', '<', now()->subYears(2));
                    break;
            }
        }

        // Ambil data yang telah difilter
        $jobHistories = $query->orderBy('job_histories.tgl_jabat', 'desc')->get();

        // Kembalikan view dengan data yang difilter
        return view('bsrm.rekomendasi.show', compact('jobHistories'));
    }







    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekomendasi  $rekomendasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekomendasi $rekomendasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekomendasi  $rekomendasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekomendasi $rekomendasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekomendasi  $rekomendasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekomendasi $rekomendasi)
    {
        //
    }
}
