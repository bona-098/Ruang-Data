<?php

namespace App\Http\Controllers;

use App\Models\Perangkat;
use Illuminate\Http\Request;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkat = Perangkat::get();
        return view('oms.perangkat.index', compact('perangkat'));
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
            'id_group' => 'required',
            'id_area' => 'required',
            'id_unit' => 'required',
            'nama_unit' => 'required',
            'id_witel' => 'required',
            'nama_witel' => 'required',
            'id_lokasi' => 'required',
            'nama_lokasi' => 'required',
            'id_gedung' => 'required',
            'nama_gedung' => 'required',
            'id_kelas' => 'required',
            'id_room' => 'required',
            'id_lantai' => 'required',
            'nama_lantai' => 'required',
            'jid' => 'required',
            'nama_jenis' => 'required',
            'kid' => 'required',
            'kategori' => 'required',
            'skid' => 'required',
            'sub_kategori' => 'required',
            'nama_perangkat' => 'required',
            'is_ceklis' => 'required',
            'merk' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
            'kapasitas' => 'required',
            'no_seri' => 'required',
            'type' => 'required',
            'tahun' => 'required',
            'kondisi' => 'required',
            'milik' => 'required',
            'keterangan' => 'required',
            'id_perangkat' => 'required',
        ]);
        Perangkat::create([            
            'id_group' =>$request->id_group,
            'id_area' =>$request->id_area,
            'id_unit' =>$request->id_unit,
            'nama_unit' =>$request->nama_unit,
            'id_witel' =>$request->id_witel,
            'nama_witel' =>$request->nama_witel,
            'id_lokasi' =>$request->id_lokasi,
            'nama_lokasi' =>$request->nama_lokasi,
            'id_gedung' =>$request->id_gedung,
            'nama_gedung' =>$request->nama_gedung,
            'id_kelas' =>$request->id_kelas,
            'id_room' =>$request->id_room,
            'id_lantai' =>$request->id_lantai,
            'nama_lantai' =>$request->nama_lantai,
            'jid' =>$request->jid,
            'nama_jenis' =>$request->nama_jenis,
            'kid' =>$request->kid,
            'kategori' =>$request->kategori,
            'skid' =>$request->skid,
            'sub_kategori' =>$request->sub_kategori,
            'nama_perangkat' =>$request->nama_perangkat,
            'is_ceklis' =>$request->is_ceklis,
            'merk' =>$request->merk,
            'satuan' =>$request->satuan,
            'jumlah' =>$request->jumlah,
            'kapasitas' =>$request->kapasitas,
            'no_seri' =>$request->no_seri,
            'type' =>$request->type,
            'tahun' =>$request->tahun,
            'kondisi' =>$request->kondisi,
            'milik' =>$request->milik,
            'keterangan' =>$request->keterangan,
            'id_perangkat' =>$request->id_perangkat,
        ]);
        return redirect()->route('perangkat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perangkat = Perangkat::find($id);
        return view('oms.perangkat.detail', compact('perangkat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perangkat = Perangkat::findOrfail($id);
        return view('oms.perangkat.detail', compact('perangkat'));
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
        $perangkat = Perangkat::find($id);
        $perangkat->update([
            'id_group' =>$request->id_group,
            'id_area' =>$request->id_area,
            'id_unit' =>$request->id_unit,
            'nama_unit' =>$request->nama_unit,
            'id_witel' =>$request->id_witel,
            'nama_witel' =>$request->nama_witel,
            'id_lokasi' =>$request->id_lokasi,
            'nama_lokasi' =>$request->nama_lokasi,
            'id_gedung' =>$request->id_gedung,
            'nama_gedung' =>$request->nama_gedung,
            'id_kelas' =>$request->id_kelas,
            'id_room' =>$request->id_room,
            'id_lantai' =>$request->id_lantai,
            'nama_lantai' =>$request->nama_lantai,
            'jid' =>$request->jid,
            'nama_jenis' =>$request->nama_jenis,
            'kid' =>$request->kid,
            'kategori' =>$request->kategori,
            'skid' =>$request->skid,
            'sub_kategori' =>$request->sub_kategori,
            'nama_perangkat' =>$request->nama_perangkat,
            'is_ceklis' =>$request->is_ceklis,
            'merk' =>$request->merk,
            'satuan' =>$request->satuan,
            'jumlah' =>$request->jumlah,
            'kapasitas' =>$request->kapasitas,
            'no_seri' =>$request->no_seri,
            'type' =>$request->type,
            'tahun' =>$request->tahun,
            'kondisi' =>$request->kondisi,
            'milik' =>$request->milik,
            'keterangan' =>$request->keterangan,
            'id_perangkat' =>$request->id_perangkat,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perangkat $perangkat)
    {
        $perangkat->delete();
        return redirect()->back();
    }
}
