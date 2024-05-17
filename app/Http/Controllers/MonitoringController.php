<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoringpm;
use RealRashid\SweetAlert\Facades\Alert;

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
            'jumlah_driver' => 'nullable|string',
            'jumlah_admin' => 'nullable|string',
            'jumlah_teknisi' => 'nullable|string',
            'total_pkwt' => 'nullable|string',
            'awal_kontrak' => 'nullable|string',
            'akhir_kontrak' => 'nullable|string',
            'sisa_kontrak' => 'nullable|string',
            'tahun_pengadaan' => 'nullable|string',
            'sph' => 'nullable|file|mimes:pdf|max:2048',
            'boq' => 'nullable|file|mimes:pdf,excel,xlsx|max:2048',
            'bakn' => 'nullable|file|mimes:pdf|max:2048',
            'jib' => 'nullable|file|mimes:pdf|max:2048',
            'kontrak' => 'nullable|file|mimes:pdf|max:2048',
            'nd_pengajuan' => 'nullable|file|mimes:pdf|max:2048',
            'nd_persetujuan' => 'nullable|file|mimes:pdf|max:2048',
            'pkwt' => 'nullable|file|mimes:pdf|max:2048',
            'crm_np' => 'nullable|string',
            'crm_nd' => 'nullable|string',
            'crm_cc' => 'nullable|string',
        ]);

        // Siapkan data untuk disimpan kecuali file
        $data = $request->except(['sph', 'boq', 'bakn', 'jib', 'kontrak', 'nd_pengajuan', 'nd_persetujuan', 'pkwt']);

        // Simpan file yang diunggah jika ada dan tambahkan ke array $data
        if ($request->hasFile('sph')) {
            $newName = $request->unit_kerja . '-' . date('His') . '-' . 'sph' . '.' . $request->file('sph')->extension();
            $request->file('sph')->move(public_path('pdfs/monitoring'), $newName);
            $data['sph'] = $newName;
        }
        if ($request->hasFile('boq')) {
            $newName = $request->unit_kerja . '-' . date('His') . '-' . 'boq' . '.' . $request->file('boq')->extension();
            $request->file('boq')->move(public_path('pdfs/monitoring'), $newName);
            $data['boq'] = $newName;
        }
        if ($request->hasFile('bakn')) {
            $newName = $request->unit_kerja . '-' . date('His') . '-' . 'bakn' . '.' . $request->file('bakn')->extension();
            $request->file('bakn')->move(public_path('pdfs/monitoring'), $newName);
            $data['bakn'] = $newName;
        }
        if ($request->hasFile('jib')) {
            $newName = $request->unit_kerja . '-' . date('His') . '-' . 'jib' . '.' . $request->file('jib')->extension();
            $request->file('jib')->move(public_path('pdfs/monitoring'), $newName);
            $data['jib'] = $newName;
        }
        if ($request->hasFile('kontrak')) {
            $newName = $request->unit_kerja . '-' . date('His') . '-' . 'kontrak' . '.' . $request->file('kontrak')->extension();
            $request->file('kontrak')->move(public_path('pdfs/monitoring'), $newName);
            $data['kontrak'] = $newName;
        }
        if ($request->hasFile('nd_pengajuan')) {
            $newName = $request->unit_kerja . '-' . date('His') . '-' . 'nd_pengajuan' . '.' . $request->file('nd_pengajuan')->extension();
            $request->file('nd_pengajuan')->move(public_path('pdfs/monitoring'), $newName);
            $data['nd_pengajuan'] = $newName;
        }
        if ($request->hasFile('nd_persetujuan')) {
            $newName = $request->unit_kerja . '-' . date('His') . '-' . 'nd_persetujuan' . '.' . $request->file('nd_persetujuan')->extension();
            $request->file('nd_persetujuan')->move(public_path('pdfs/monitoring'), $newName);
            $data['nd_persetujuan'] = $newName;
        }
        if ($request->hasFile('pkwt')) {
            $newName = $request->unit_kerja . '-' . date('His') . '-' . 'pkwt' . '.' . $request->file('pkwt')->extension();
            $request->file('pkwt')->move(public_path('pdfs/monitoring'), $newName);
            $data['pkwt'] = $newName;
        }

        // Buat data baru di database
        $monitoringpm = Monitoringpm::create($data);

        // Redirect atau respon
        Alert::success('Success ', 'Data berhasil ditambah');
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
            'sph' => 'nullable|file|mimes:pdf',
            'boq' => 'nullable|file|mimes:pdf',
            'bakn' => 'nullable|file|mimes:pdf',
            'jib' => 'nullable|file|mimes:pdf',
            'kontrak' => 'nullable|file|mimes:pdf',
            'nd_pengajuan' => 'nullable|file|mimes:pdf',
            'nd_persetujuan' => 'nullable|file|mimes:pdf',
            'pkwt' => 'nullable|file|mimes:pdf',
            'crm_np' => 'nullable|string',
            'crm_nd' => 'nullable|string',
            'crm_cc' => 'nullable|string',
        ]);

        // Cari data yang akan di-update
        $monitoringpm = Monitoringpm::findOrFail($id);

        // Update hanya jika nilai tidak null
        $fields = [
            'unit_kerja', 'customer', 'segmen', 'nama_project', 'nilai_kontrak',
            'nilai_perbulan', 'jumlah_hk', 'jumlah_security', 'total_pkwt',
            'tanggal_kontrak', 'tahun_pengadaan', 'crm_np', 'crm_nd', 'crm_cc'
        ];

        foreach ($fields as $field) {
            if ($request->has($field) && $request->get($field) !== null) {
                $monitoringpm->$field = $request->get($field);
            }
        }

        // Simpan file yang diunggah jika ada dan tambahkan ke array $data
        $fileFields = [
            'sph', 'boq', 'bakn', 'jib', 'kontrak', 'nd_pengajuan', 'nd_persetujuan', 'pkwt'
        ];

        foreach ($fileFields as $fileField) {
            if ($request->hasFile($fileField)) {
                $newName = $request->unit_kerja . '-' . date('His') . '-' . $fileField . '.' . $request->file($fileField)->extension();
                $request->file($fileField)->move(public_path('pdfs/monitoring'), $newName);
                $monitoringpm->$fileField = $newName;
            }
        }

        // Simpan perubahan
        $monitoringpm->save();

        // Redirect atau respon
        Alert::success('Success ', 'Data berhasil update');
        return redirect()->route('monitoringpm.index')->with('success', 'Data berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('users.index', compact('users'));
    }
}
