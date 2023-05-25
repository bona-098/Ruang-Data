<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Performance;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra = Mitra::get();
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
        // return $request->all();
        // $this->validate($request, [
        //     'kategori' => 'required'
        // ]);

        
        if($request->nama_vendor == "" || $request->status == "");
        Mitra::create([
            'nama_vendor' => $request->nama_vendor,
            'domisili' => $request->domisili,
            'kategori' => $request->kategori,
            'nilai_asses' => $request->nilai_asses,
            'status' => $request->status,
        ]);
            // return redirect()->back()->with('error', 'isi semua');
        
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
        $mitra = Mitra::find($id);
        return view('bsrm.mitra.show', compact('mitra'));
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
        // $mitra = Mitra::find($id);
        $mitra = Mitra::find($id);
        if (!$mitra) {
            return redirect()->back()->with('error', 'Data mitra tidak ditemukan');
        }

        $mitra->update([
            'nama_vendor' => $request->nama_vendor,
            'domisili' => $request->domisili,
            'kategori' => $request->kategori,
            'nilai_asses' => $request->nilai_asses,
            'status' => $request->status,
        ]);

        return redirect()->route('mitra.index');

        // $mitra->update([
        //     'nama_vendor' => $request->nama_vendor,
        //     'domisili' => $request->domisili,
        //     'kategori' => $request->kategori,
        //     'nilai_asses' => $request->nilai_asses,
        //     'status' => $request->status,
        // ]);
        // return redirect()->route('mitra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        $mitra->delete();
        return redirect()->back();
    }
}
