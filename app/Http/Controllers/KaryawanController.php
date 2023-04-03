<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::get();
        return view ('bsrm.karyawan.karyawan', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('Role BSRM.karyawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // try {
        // dd($request->all());
    public function store(Request $request)
    {
            // $this->validate($request, [
            // 'nik' => 'required',
        //     'nama_karyawan' => 'required',
        //     'tgl_lahir'=> 'required',
        //     'kota_lahir'=> 'required',
        //     'agama'=> 'required',
        //     'jenis_kelamin'=> 'required',
        //     'jalan'=> 'required',
        //     'nama_status_nikah'=> 'required',
        //     'lokasi_kerja'=> 'required',
        //     'tgl_mulai_bekerja'=> 'required',
        //     'tgl_pegawai_perusahaan'=> 'required',
        //     'tgl_perkiraan_pensiun'=> 'required',
        //     'nama_divisi'=> 'required',
        //     'tgl_divisi'=> 'required',
        //     'kode_loker'=> 'required',
        //     'unit_kerja'=> 'required',
        //     'loker'=> 'required',
        //     'tgl_loker'=> 'required',
        //     'kode_posisi'=> 'required',
        //     'jabatan'=> 'required',
        //     'umur'=> 'required',
        //     'kelompok_usia'=> 'required',
        //     'nama_employee_group'=> 'required',
        //     'employee_sub_group'=> 'required',
        //     'level_pendidikan_terakhir'=> 'required',
        //     'pendidikan'=> 'required',
        //     'penyelenggara'=> 'required',
        //     'jumlah_anak'=> 'required',
        //     'adt_pajak'=> 'required',
        //     'adt_kesehatan'=> 'required',
        //     'jumlah_pasangan'=> 'required',
        //     'band_kelas_posisi'=> 'required',
        //     'kota'=> 'required',
        //     'npwp'=> 'required',
        //     'no_telkomedika'=> 'required',
        //     'no_bpjs'=> 'required',
        //     'no_jamsostek'=> 'required',
        //     'email'=> 'required',
        //     'no_hp'=> 'required',
        //     'keterangan_lanjut_kuliah'=> 'required',
        //     'pendidikan_lanjut'=> 'required',
        //     'penyelenggara_lanjut'=> 'required',
        //     'ukuran_baju'=> 'required'
        // ]);
        
        Karyawan::create([
            'nik'=>$request->nik,
            'nama_karyawan'=>$request->nama_karyawan,
            'tgl_lahir'=>$request->tgl_lahir,
            'kota_lahir'=>$request->kota_lahir,
            'agama'=>$request->agama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'jalan'=>$request->jalan,
            'nama_status_nikah'=>$request->nama_status_nikah,
            'lokasi_kerja'=>$request->lokasi_kerja,
            'tgl_mulai_bekerja'=>$request->tgl_mulai_bekerja,
            'tgl_pegawai_perusahaan'=>$request->tgl_pegawai_perusahaan,
            'tgl_perkiraan_pensiun'=>$request->tgl_perkiraan_pensiun,
            'nama_divisi'=>$request->nama_divisi,
            'tgl_divisi'=>$request->tgl_divisi,
            'kode_loker'=>$request->kode_loker,
            'unit_kerja'=>$request->unit_kerja,
            'loker'=>$request->loker,
            'tgl_loker'=>$request->tgl_loker,
            'kode_posisi'=>$request->kode_posisi,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'kelompok_usia'=>$request->kelompok_usia,
            'nama_employee_group'=>$request->nama_employee_group,
            'employee_sub_group'=>$request->employee_sub_group,
            'level_pendidikan_terakhir'=>$request->level_pendidikan_terakhir,
            'pendidikan'=>$request->pendidikan,
            'penyelenggara'=>$request->penyelenggara,
            'jumlah_anak'=>$request->jumlah_anak,
            'adt_pajak'=>$request->adt_pajak,
            'adt_kesehatan'=>$request->adt_kesehatan,
            'jumlah_pasangan'=>$request->jumlah_pasangan,
            'band_kelas_posisi'=>$request->band_kelas_posisi,
            'kota'=>$request->kota,
            'npwp'=>$request->npwp,
            'no_telkomedika'=>$request->no_telkomedika,
            'no_bpjs'=>$request->no_bpjs,
            'no_jamsostek'=>$request->no_jamsostek,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'keterangan_lanjut_kuliah'=>$request->keterangan_lanjut_kuliah,
            'pendidikan_lanjut'=>$request->pendidikan_lanjut,
            'penyelenggara_lanjut'=>$request->penyelenggara_lanjut,
            'ukuran_baju'=>$request->ukuran_baju
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
        $karyawan = Karyawan::find($id);
        // dd($karyawan);
        return view ('bsrm.karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findorfail($id);
        return view('bsrm.karyawan.edit', compact('karyawan'));
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
        $karya = $request->all();
        $karyawan = Karyawan::find($id);
        $karyawan->update([
            'nik'=>$request->nik,
            'nama_karyawan'=>$request->nama_karyawan,
            'tgl_lahir'=>$request->tgl_lahir,
            'kota_lahir'=>$request->kota_lahir,
            'agama'=>$request->agama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'jalan'=>$request->jalan,
            'nama_status_nikah'=>$request->nama_status_nikah,
            'lokasi_kerja'=>$request->lokasi_kerja,
            'tgl_mulai_bekerja'=>$request->tgl_mulai_bekerja,
            'tgl_pegawai_perusahaan'=>$request->tgl_pegawai_perusahaan,
            'tgl_perkiraan_pensiun'=>$request->tgl_perkiraan_pensiun,
            'nama_divisi'=>$request->nama_divisi,
            'tgl_divisi'=>$request->tgl_divisi,
            'kode_loker'=>$request->kode_loker,
            'unit_kerja'=>$request->unit_kerja,
            'loker'=>$request->loker,
            'tgl_loker'=>$request->tgl_loker,
            'kode_posisi'=>$request->kode_posisi,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'kelompok_usia'=>$request->kelompok_usia,
            'nama_employee_group'=>$request->nama_employee_group,
            'employee_sub_group'=>$request->employee_sub_group,
            'level_pendidikan_terakhir'=>$request->level_pendidikan_terakhir,
            'pendidikan'=>$request->pendidikan,
            'penyelenggara'=>$request->penyelenggara,
            'jumlah_anak'=>$request->jumlah_anak,
            'adt_pajak'=>$request->adt_pajak,
            'adt_kesehatan'=>$request->adt_kesehatan,
            'jumlah_pasangan'=>$request->jumlah_pasangan,
            'band_kelas_posisi'=>$request->band_kelas_posisi,
            'kota'=>$request->kota,
            'npwp'=>$request->npwp,
            'no_telkomedika'=>$request->no_telkomedika,
            'no_bpjs'=>$request->no_bpjs,
            'no_jamsostek'=>$request->no_jamsostek,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'keterangan_lanjut_kuliah'=>$request->keterangan_lanjut_kuliah,
            'pendidikan_lanjut'=>$request->pendidikan_lanjut,
            'penyelenggara_lanjut'=>$request->penyelenggara_lanjut,
            'ukuran_baju'=>$request->ukuran_baju
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
        $karyawan = Karyawan::findorFail($id);
        $karyawan->delete();
        return redirect()->back();
    }
}
