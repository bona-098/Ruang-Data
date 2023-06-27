<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\personil;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedung = Gedung::get();
        return view('oms.gedung.index', compact('gedung'));
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
        $this->validate($request, [
            'nama_area' => 'required',
            'nama_witel' => 'required',
            'alamat' => 'required',
            'nama_gedung' => 'required',
            'koordinat' => 'required',
            'total_petugas' => 'required',
        ]);

        Gedung::create([
            'nama_area' => $request->nama_area,
            'nama_witel' => $request->nama_witel,
            'alamat' => $request->alamat,
            'nama_gedung' => $request->nama_gedung,
            'koordinat' => $request->koordinat,
            'total_petugas' => $request->total_petugas,
        ]);
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
        $gedung = Gedung::findOrfail($id);
        $personil = Personil::where('gedung_id', $id)->get();
        return view('oms.gedung.detail', compact('gedung', 'personil'));
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
            'nama_area' => 'required',
            'nama_witel' => 'required',
            'alamat' => 'required',
            'nama_gedung' => 'required',
            'koordinat' => 'required',
            // 'total_petugas' => 'required',
        ]);
        $gedung = Gedung::find($id);
        if (!$gedung) {
            return redirect()->back()->with('error', 'data salah');
        }
        // $gedung = Gedung::find($id);
        $gedung->update([
            'nama_area' => $request->nama_area,
            'nama_witel' => $request->nama_witel,
            'alamat' => $request->alamat,
            'nama_gedung' => $request->nama_gedung,
            'koordinat' => $request->koordinat,
            // 'total_petugas' => $request->total_petugas,
        ]);

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
        $gedung = Gedung::findOrfail($id);
        $gedung->delete();
        return redirect()->route('gedung.index');
    }
}