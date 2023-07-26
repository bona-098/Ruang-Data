<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Performance;
use App\Imports\MitraImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mitra = Mitra::query();

        if ($request->kategori && $request->kategori != 'Pilih') {
            $mitra->where('status', $request->kategori);
        }

        if ($request->domisili && $request->domisili != 'Pilih') {
            $mitra->where('domisili', $request->domisili);
        }

        $mitra = $mitra->get(); // Mengambil data dari query

        return view('bsrm.mitra.index', compact('mitra'));
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
        // Validasi data yang diterima dari form

        // ...

        // Rekam aktivitas penambahan mitra ke dalam database
        $mitra = Mitra::create([
            'nama_vendor' => $request->nama_vendor,
            'domisili' => $request->domisili,
            'kategori' => $request->kategori,
            'nilai_asses' => $request->nilai_asses,
            'status' => $request->status,
        ]);

        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menambah Data Mitra', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
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
        // $mitra = Mitra::find($id);
        // return view('bsrm.mitra.show', compact('mitra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mitra = Mitra::findOrfail($id);
        return view('bsrm.mitra.edit', compact('mitra'));
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
        $request->validate([
            'nama_vendor' => 'required|string',
            'domisili' => 'required|string',
            'kategori' => 'required|string',
            'nilai_asses' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $mitra = Mitra::find($id);
        if (!$mitra) {
            return redirect()->back()->with('error', 'Data mitra tidak ditemukan');
        }

        $mitra->nama_vendor = $request->nama_vendor;
        $mitra->domisili = $request->domisili;
        $mitra->kategori = $request->kategori;
        $mitra->nilai_asses = $request->nilai_asses;
        $mitra->status = $request->status;

        $mitra->save();

        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Mengubah Data Mitra', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);

        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->route('mitra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mitra = Mitra::findOrFail($id);
        $mitra->delete();
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menghapus Data Mitra', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        return redirect()->back();
    }
}
