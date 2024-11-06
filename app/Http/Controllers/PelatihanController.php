<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Ambil data pelatihan dengan relasi karyawan dan datakerjakaryawans
        $pelatihan = Pelatihan::with(['karyawan', 'karyawan.datakerjakaryawans']);

        // Filter berdasarkan nama pelatihan jika ada
        if ($request->has('nama_pelatihan') && $request->nama_pelatihan != '') {
            $pelatihan->where('nama_pelatihan', $request->nama_pelatihan);
        }

        // Filter berdasarkan status pelatihan jika ada
        if ($request->has('status_pelatihan') && $request->status_pelatihan != '') {
            $status = $request->status_pelatihan;

            if ($status == 'Berlaku') {
                // Filter pelatihan yang belum kadaluarsa
                $pelatihan->where('tanggal_kadaluarsa', '>', now());
            } elseif ($status == 'Tidak Berlaku') {
                // Filter pelatihan yang sudah kadaluarsa
                $pelatihan->where('tanggal_kadaluarsa', '<', now());
            }
        }

        // Ambil data setelah difilter
        $pelatihan = $pelatihan->get();

        // Ambil nama pelatihan yang unik untuk dropdown
        $uniquePelatihanNames = Pelatihan::pluck('nama_pelatihan')->unique();

        // Kirim data ke view
        return view('bsrm.pelatihan.index', compact('pelatihan', 'uniquePelatihanNames'));
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
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatihan $pelatihan)
    {
        //
    }
}
