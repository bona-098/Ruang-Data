<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Personil;
use Illuminate\Http\Request;

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
            'nik' => 'required',
            'lokasi_kerja' => 'required',
            'kontrak' => 'required',
            'telepon' => 'required',
            'gedung_id' => 'required',
        ]);
    
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
            'nik' => 'required',
            'lokasi_kerja' => 'required',
            'kontrak' => 'required',
            'telepon' => 'required',
            'gedung_id' => 'required',
        ]);

        $personil = Personil::find($id);
        if (!$personil) {
            return redirect()->back()->with('error', 'Data personil tidak ditemukan');
        }

        $personil->nama = $request->nama;
        $personil->nik = $request->nik;
        $personil->lokasi_kerja = $request->lokasi_kerja;
        $personil->kotrak = $request->kotrak;
        $personil->telepon = $request->telepon;
        // $personil->gedung_id = $request->gedung_id;

        // Cek apakah gedung_id yang baru valid dan ada dalam tabel gedung
        $gedung = Gedung::find($request->gedung_id);
        if (!$gedung) {
            return redirect()->back()->with('error', 'Gedung tidak ditemukan');
        }

        $personil->gedung_id = $gedung->id;

        $personil->save();

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
        return redirect()->back();
    }
}
