<?php

namespace App\Http\Controllers;

use App\Models\Exma;
use Illuminate\Http\Request;
use Exception;
class ExmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Exma $customer)
    {
        $customer = Exma::get();
        return view('Role BSRM.costumer ', compact('customer'));
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
            'unit_kerja' => 'required',
            'status_revenue' => 'required',
            'customer' => 'required',
            'segment' => 'required',
            'nama_project' => 'required',
            'lokasi_gedung' => 'required',
            'jenis_pekerjaan' => 'required',
            'portofolio' => 'required',
            'progress_project' => 'required',
            'status_project' => 'required',
            'proses_pendekatan_customer' => 'required',
            'visit' => 'required',
            'sph' => 'required',
            'bakn' => 'required',
            'spk' => 'required',
            'masa_project' => 'required',
            'jumlah_man_power' => 'required',
            'tgl_sp' => 'required',
            'no_sp' => 'required',
            'jenis_kontrak' => 'required',
            'tgl_mulai_project' => 'required',
            'tgl_akhir_project' => 'required',
            'sisa_kontrak' => 'required',
            'nilai_total_project' => 'required',
            'nilai_project_pertahun' => 'required',
            'nilai_project_perbulan' => 'required',
            'nama_key_kontak_client' => 'required',
            'jabatan_pic_client' => 'required',
            'jabatan_pic_client' => 'required',
            'no_hp_pic_client' => 'required',
            'nama_pic_gsd' => 'required',
            'drive_kontrak' => 'required',
            'amandemen' => 'required',
            'keterangan' => 'required',
        ]);
        
        $notif = Exma::create([
            'unit_kerja' => $request->unit_kerja,
            'status_revenue'=> $request->status_revenue,
            'customer' => $request->customer,
            'segment' => $request->segment,
            'nama_project' => $request->nama_project,
            'lokasi_gedung' => $request->lokasi_gedung,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
            'portofolio' => $request->portofolio,
            'progress_project'=> $request->progress_project,
            'status_project'=> $request->status_project,
            'proses_pendekatan_customer'=> $request->proses_pendekatan_customer,
            'visit'=> $request->visit,
            'sph' => $request->sph,
            'bakn' => $request->bakn,
            'spk' => $request->spk,
            'masa_project'=> $request->masa_project,
            'jumlah_man_power' => $request->jumlah_man_power,
            'tgl_sp' => $request->tgl_sp,
            'no_sp' => $request->no_sp,
            'jenis_kontrak' => $request->jenis_kontrak,
            'tgl_mulai_project' => $request->tgl_mulai_project,
            'tgl_akhir_project' => $request->tgl_akhir_project,
            'sisa_kontrak'=> $request->sisa_kontrak,
            'nilai_total_project' => $request->nilai_total_project,
            'nilai_project_pertahun' => $request->nilai_project_pertahun,
            'nilai_project_perbulan' => $request->nilai_project_perbulan,
            'nama_key_kontak_client' => $request->nama_key_kontak_client,
            'jenis_kontrak' => $request->jenis_kontrak,
            'jabatan_pic_client' => $request->jabatan_pic_client,
            'no_hp_pic_client' => $request->no_hp_pic_client,
            'nama_pic_gsd' => $request->nama_pic_gsd,
            'drive_kontrak'=> $request->drive_kontrak,
            'amandemen'=> $request->amandemen,
            'keterangan' => $request->keterangan,
        ]);
    

        if ($notif) {
            //redirect dengan pesan sukses
            return redirect('/exma');
        } else {
            //redirect dengan pesan error
            return redirect()->route('dashboard.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exma  $exma
     * @return \Illuminate\Http\Response
     */
    public function show(Exma $exma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exma  $exma
     * @return \Illuminate\Http\Response
     */
    public function edit(Exma $exma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exma  $exma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exma $exma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exma  $exma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exma $exma)
    {
        //
    }
}
