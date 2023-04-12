<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return $request->all();
        // $sales = Sales::get();
        // dd($sales);
        $sales = Sales::query();
        $sales->when($request->unit_kerja, function($query) use ($request) {
            return $query->whereunit_kerja($request->unit_kerja);
        });
        return view ('marshal.sales.index', ['sales' => $sales->paginate(100000)]);
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
        Sales::create([
            'unit_kerja'=>$request->unit_kerja,
            'status_revenue'=>$request->status_revenue,
            'customer'=>$request->customer,
            'segment'=>$request->segment,
            'nama_project'=>$request->nama_project,
            'lokasi_gedung'=>$request->lokasi_gedung,
            'jenis_pekerjaan'=>$request->jenis_pekerjaan,
            'portfolio'=>$request->portfolio,
            'progress_project'=>$request->progress_project,
            'status_project'=>$request->status_project,
            'proses_pendekatan_customer'=>$request->proses_pendekatan_customer,
            'visit'=>$request->visit,
            'sph'=>$request->sph,
            'bakn'=>$request->bakn,
            'spk'=>$request->spk,
            'masa_project'=>$request->masa_project,
            'jumlah_man_power'=>$request->jumlah_man_power,
            'tgl_sp'=>$request->tgl_sp,
            'no_sp'=>$request->no_sp,
            'jenis_kontrak'=>$request->jenis_kontrak,
            'tgl_mulai_project'=>$request->tgl_mulai_project,
            'tgl_akhir_project'=>$request->tgl_akhir_project,
            'sisa_kontrak'=>$request->sisa_kontrak,
            'nilai_total_project'=>$request->nilai_total_project,
            'nilai_project_pertahun'=>$request->nilai_project_pertahun,
            'nilai_project_perbulan'=>$request->nilai_project_perbulan,
            'nama_key_kontak_client'=>$request->nama_key_kontak_client,
            'jabatan_pic_client'=>$request->jabatan_pic_client,
            'no_hp_pic_client'=>$request->no_hp_pic_client,
            'nama_pic_gsd'=>$request->nama_pic_gsd,
            'drive_kontrak'=>$request->drive_kontrak,
            'amandemen'=>$request->amandemen,
            'keterangan'=>$request->keterangan
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
        $sales = Sales::find($id);  
        return view ('marshal.sales.detail', compact('sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales = Sales::find($id);
        // dd($sales);
        // $id = $sales->id;
        return view('marshal.sales.edit', compact('sales'));
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
        $sales = Sales::findOrFail($id);
        $request->validate([
            'unit_kerja' => 'required',
            'status_revenue' => 'required'
        ]);
        $id = $sales->id;
        if (!$sales) {
            return redirect()->back()->with('error', 'data sales salah');
        }
        $sales->update([
            'unit_kerja' =>$request->unit_kerja,
            'status_revenue' =>$request->status_revenue,
            'customer' =>$request->customer,
            'segment' =>$request->segment,
            'nama_project' =>$request->nama_project,
            'lokasi_gedung' =>$request->lokasi_gedung,
            'jenis_pekerjaan' =>$request->jenis_pekerjaan,
            'portfolio' =>$request->portfolio,
            'progress_project' =>$request->progress_project,
            'status_project' =>$request->status_project,
            'proses_pendekatan_customer' =>$request->proses_pendekatan_customer,
            'visit' =>$request->visit,
            'sph' =>$request->sph, 
            'bakn' =>$request->bakn, 
            'spk' =>$request->spk,
            'masa_project' =>$request->masa_project,
            'jumlah_man_power' =>$request->jumlah_man_power,
            'tgl_sp' =>$request->tgl_sp,
            'no_sp' =>$request->no_sp,
            'jenis_kontrak' =>$request->jenis_kontrak,
            'tgl_mulai_project' =>$request->tgl_mulai_project,
            'tgl_akhir_project' =>$request->tgl_akhir_project,
            'sisa_kontrak' =>$request->sisa_kontrak,
            'nilai_total_project' =>$request->nilai_total_project,
            'nilai_project_pertahun' =>$request->nilai_project_pertahun,
            'nilai_project_perbulan' =>$request->nilai_project_perbulan,
            'nama_key_kontak_client' =>$request->nama_key_kontak_client,
            'jabatan_pic_client' =>$request->jabatan_pic_client,
            'no_hp_pic_client' =>$request->no_hp_pic_client,
            'nama_pic_gsd' =>$request->nama_pic_gsd,
            'drive_kontrak' =>$request->drive_kontrak,
            'amandemen' =>$request->amandemen,
            'keterangan' =>$request->keterangan
        ]);
        return redirect()->back()->with('berhasil', 'data sales berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();
        return redirect()->route('sales.index');
    }
}
