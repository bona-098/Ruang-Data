<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Personil;
use Illuminate\Http\Request;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;

class PersonilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personil = Personil::all();
        $gedungOptions = Gedung::all();

        return view('oms.personil.index', compact('personil', 'gedungOptions'));
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'area' => 'required',
            'witel' => 'required',
            'jabatan' => 'required',
            'gedung_id' => 'required',
        ]);
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menambah Data Personil', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
        try {
            Personil::create($validatedData);
            return redirect()->back();
        } catch (\Exception $e) {
            // Handle the exception here, e.g. log the error
            return redirect()->back()->withErrors(['error' => 'Failed to store data.']);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'nama' => 'required',
            'area' => 'required',
            'witel' => 'required',
            'jabatan' => 'required',
            'gedung_id' => 'nullable',
        ]);

        $personil = Personil::find($id);
        if (!$personil) {
            return redirect()->back()->with('error', 'Data personil tidak ditemukan');
        }

        $personil->nama = $request->nama;
        $personil->area = $request->area;
        $personil->witel = $request->witel;
        $personil->jabatan = $request->jabatan;
        $personil->save();
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Mengubah Data Personil', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->back()->with('success', 'Data personil berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personil = Personil::findOrFail($id);
        $personil->delete();
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menambah Data Mitra', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->back();
    }
}
