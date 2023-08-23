<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Calonbpo;
use Illuminate\Http\Request;
use App\Models\LogActivities;
use Illuminate\Routing\Controller;

class BpoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calonbpo = Calonbpo::get();
        return view('bsrm.calon_bpo.index', compact('calonbpo'));
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
        $request->validate([
            'cv' => 'file|image|mimes:jpg,png,jpeg,gif|max:50000',
        ]);
        
        if ($request->hasFile('cv')) {
            $newnamecv = $request->nama . '-' . date('His') . '.' . $request->file('cv')->extension();
            $request->file('cv')->move(public_path('images/calon_bpo'), $newnamecv);
        } else {
            $newnamecv = null;
        }
        
        $calonbpo = calonbpo::create([
            'nama' => $request->nama,
            'pendidikan' => $request->pendidikan,
            'jurusan' => $request->jurusan,
            'umur' => $request->umur,
            'domisili' => $request->domisili,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'cv' => $newnamecv, // Simpan nama file saja, bukan validasi disini
        ]);

        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menambah Data Calon BPO', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        return redirect()->back();
        // return view('bsrm.calon_bpo.index', compact('calonbpo')); // perbaikan di sini
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calonbpo  $calonbpo
     * @return \Illuminate\Http\Response
     */
    public function show($calonbpo)
    {
        $bpo = Calonbpo::find($calonbpo);
        return view ('bsrm.calon_bpo.show', compact('bpo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calonbpo  $calonbpo
     * @return \Illuminate\Http\Response
     */
    public function edit(Calonbpo $calonbpo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calonbpo  $calonbpo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calonbpo $calonbpo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calonbpo  $calonbpo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calonbpo $calonbpo)
    {
        //
    }
}
