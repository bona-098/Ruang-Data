<?php

namespace App\Http\Controllers;

use App\Models\JobHistory;
use App\Models\Rekomendasi;
use App\Models\Karyawan;
use App\Models\Pendidikan;
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
        $karyawan = Karyawan::with('datakerjakaryawans') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Mengambil semua kolom dari tabel karyawan dan semua kolom dari data_kerja_karyawan
            ->get();


        return view('bsrm.rekomendasi.index', compact(
            'karyawan',
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
        $talent = $request->input('talent');
        $lamaTalent = $request->input('lama_talent');

        // Dapatkan tanggal jabatan terbaru untuk setiap karyawan
        $subQuery = JobHistory::selectRaw('MAX(tgl_jabat) as latest_date, karyawan_id')
            ->groupBy('karyawan_id');

        // Ambil data berdasarkan subquery dan muat relasi karyawan dan data kerja karyawan
        $query = JobHistory::with(['karyawan.datakerjakaryawans']) // Menambahkan relasi di sini
            ->joinSub($subQuery, 'latest_job', function ($join) {
                $join->on('job_histories.tgl_jabat', '=', 'latest_job.latest_date')
                    ->on('job_histories.karyawan_id', '=', 'latest_job.karyawan_id');
            });

        // Jika tidak ada filter yang dipilih, ambil semua data
        if ($band || $lamaJabatan || $talent || $lamaTalent) {
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

            // Menggabungkan tabel talent
            $query->leftJoin('talent', 'job_histories.karyawan_id', '=', 'talent.karyawan_id');

            // Jika talent dipilih, tambahkan ke query
            if ($talent) {
                $query->where('talent.talent', $talent);
            }

            // Jika lama talent dipilih, tambahkan ke query
            if ($lamaTalent) {
                switch ($lamaTalent) {
                    case 'Kurang 1 Tahun':
                        $query->whereDate('talent.tanggal_talent', '>=', now()->subYear());
                        break;
                    case 'Antara 1-2 Tahun':
                        $query->whereDate('talent.tanggal_talent', '<', now()->subYear())
                            ->whereDate('talent.tanggal_talent', '>=', now()->subYears(2));
                        break;
                    case 'Lebih 2 Tahun':
                        $query->whereDate('talent.tanggal_talent', '<', now()->subYears(2));
                        break;
                }
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
