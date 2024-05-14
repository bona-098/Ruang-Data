<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoringpm;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitoringpm = Monitoringpm::get();
        // dd($monitoringpm);
        return view('oms.monitoring.index', compact('monitoringpm'));
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
        // Validasi data
        $request->validate([
            'unit_kerja' => 'nullable|string',
            'customer' => 'nullable|string',
            'segmen' => 'nullable|string',
            'nama_project' => 'nullable|string',
            'nilai_kontrak' => 'nullable|string',
            'nilai_perbulan' => 'nullable|string',
            'jumlah_hk' => 'nullable|string',
            'jumlah_security' => 'nullable|string',
            'total_pkwt' => 'nullable|string',
            'tanggal_kontrak' => 'nullable|string',
            'tahun_pengadaan' => 'nullable|string',
            'sph' => 'nullable|string',
            'boq' => 'nullable|string',
            'bakn' => 'nullable|string',
            'jib' => 'nullable|string',
            'kontrak' => 'nullable|string',
            'nd_pengajuan' => 'nullable|string',
            'nd_persetujuan' => 'nullable|string',
            'pkwt' => 'nullable|string',
            'crm' => 'nullable|string',
        ]);

        // Buat data baru
        $monitoringpm = new Monitoringpm([
            'unit_kerja' => $request->get('unit_kerja'),
            'customer' => $request->get('customer'),
            'segmen' => $request->get('segmen'),
            'nama_project' => $request->get('nama_project'),
            'nilai_kontrak' => $request->get('nilai_kontrak'),
            'nilai_perbulan' => $request->get('nilai_perbulan'),
            'jumlah_hk' => $request->get('jumlah_hk'),
            'jumlah_security' => $request->get('jumlah_security'),
            'total_pkwt' => $request->get('total_pkwt'),
            'tanggal_kontrak' => $request->get('tanggal_kontrak'),
            'tahun_pengadaan' => $request->get('tahun_pengadaan'),
            'sph' => $request->get('sph'),
            'boq' => $request->get('boq'),
            'bakn' => $request->get('bakn'),
            'jib' => $request->get('jib'),
            'kontrak' => $request->get('kontrak'),
            'nd_pengajuan' => $request->get('nd_pengajuan'),
            'nd_persetujuan' => $request->get('nd_persetujuan'),
            'pkwt' => $request->get('pkwt'),
            'crm' => $request->get('crm'),
        ]);

        // Simpan data ke database
        $monitoringpm->save();

        // Redirect atau respon
        return redirect()->route('monitoringpm.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monitoringpm = Monitoringpm::find($id);
        return view('oms.monitoring.show', compact('monitoringpm'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
