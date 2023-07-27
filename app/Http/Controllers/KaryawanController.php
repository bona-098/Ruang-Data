<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::get();
        return view ('bsrm.karyawan.karyawan', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('Role BSRM.karyawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        Karyawan::create([
            'nik'=>$request->nik,
            'no_hp'=>$request->no_hp,            
            'nama_karyawan'=>$request->nama_karyawan,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'kota_lahir'=>$request->kota_lahir,
            'agama'=>$request->agama,
            'jalan'=>$request->jalan,
            'unit_kerja'=>$request->unit_kerja,
            'loker'=>$request->loker,            
            'jabatan'=>$request->jabatan,            
            'band_kelas_posisi'=>$request->band_kelas_posisi,
        ]);
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menambah Data Karyawan', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        return view ('bsrm.karyawan.show', compact('karyawan'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrfail($id);
        // dd($karyawan);
        return view('bsrm.karyawan.show', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $karya = $request->all();
        $karyawan = Karyawan::find($id);
        $karyawan->update([
            'nik'=>$request->nik,
            'no_hp'=>$request->no_hp,            
            'nama_karyawan'=>$request->nama_karyawan,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'kota_lahir'=>$request->kota_lahir,
            'agama'=>$request->agama,
            'jalan'=>$request->jalan,
            'unit_kerja'=>$request->unit_kerja,
            'loker'=>$request->loker,            
            'jabatan'=>$request->jabatan,            
            'band_kelas_posisi'=>$request->band_kelas_posisi,            
        ]);
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Mengubah Data Karyawan', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findorFail($id);
        $karyawan->delete();
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'MEnghapus Data Karyawan', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->route('karyawan.index');
    }
}
