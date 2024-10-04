<?php

namespace App\Http\Controllers;

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
        $karyawan_organik = Karyawan::whereIn('unit_kerja', [
            'General Manager Regional'
        ])->get();
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
    public function show(Rekomendasi $rekomendasi)
    {
        //
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
