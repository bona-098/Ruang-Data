<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;

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
        $jumlahKaryawan = Karyawan::count();

        // Menyaring karyawan berdasarkan unit kerja
        $karyawan_organik = Karyawan::whereIn('unit_kerja', [
            'General Manager Regional'
        ])->get();
        $karyawan_regional6 = Karyawan::whereIn('unit_kerja', [
            'General Manager Regional',
            'Manager Marketing, Sales & Solution',
            'Manager Planning & Delivery',
            'Manager Operation & Maintenance',
            'Manager Business Support & Risk Management'
        ])->get();
        $karyawan_areakaltimtara = Karyawan::whereIn('unit_kerja', [
            'Area Kaltimtara'
        ])->get();
        $karyawan_areakalselteng = Karyawan::whereIn('unit_kerja', [
            'Area Kalselteng'
        ])->get();
        $karyawan_areakalbar = Karyawan::whereIn('unit_kerja', [
            'Area Kalbar'
        ])->get();

        // Menyaring karyawan berdasarkan pendidikan
        $karyawan_s2 = Karyawan::whereIn('jenjang_pendidikan', [
            'S2'
        ])->get();
        $karyawan_s1 = Karyawan::whereIn('jenjang_pendidikan', [
            'S1'
        ])->get();
        $karyawan_diploma = Karyawan::whereIn('jenjang_pendidikan', [
            'Diploma III'
        ])->get();
        $karyawan_sekolah = Karyawan::whereIn('jenjang_pendidikan', [
            'SMK/SLTA Kejuruan'
        ])->get();

        // Menghitung jumlah karyawan di Regional 6
        $jumlah_karyawan_regional6 = Karyawan::whereIn('unit_kerja', [
            'General Manager Regional',
            'Manager Marketing, Sales & Solution',
            'Manager Planning & Delivery',
            'Manager Operation & Maintenance',
            'Manager Business Support & Risk Management'
        ])->count();

        $jumlah_karyawan_areakaltimtara = Karyawan::whereIn('unit_kerja', [
            'Area Kaltimtara'
        ])->count();

        $jumlah_karyawan_areakalselteng = Karyawan::whereIn('unit_kerja', [
            'Area Kalselteng'
        ])->count();

        $jumlah_karyawan_areakalbar = Karyawan::whereIn('unit_kerja', [
            'Area Kalbar'
        ])->count();

        $jumlah_karyawan_s2 = Karyawan::whereIn('jenjang_pendidikan', [
            'S2'
        ])->count();

        $jumlah_karyawan_s1 = Karyawan::whereIn('jenjang_pendidikan', [
            'S1'
        ])->count();

        $jumlah_karyawan_DIII = Karyawan::whereIn('jenjang_pendidikan', [
            'Diploma III'
        ])->count();

        $jumlah_karyawan_sekolah = Karyawan::whereIn('jenjang_pendidikan', [
            'SMK/SLTA Kejuruan'
        ])->count();

        return view('bsrm.karyawan.karyawan', compact(
            'karyawan',
            'jumlahKaryawan',
            'karyawan_organik',
            'karyawan_regional6',
            'karyawan_areakaltimtara',
            'karyawan_areakalselteng',
            'karyawan_areakalbar',
            'karyawan_s2',
            'karyawan_s1',
            'karyawan_diploma',
            'karyawan_sekolah',
            'jumlah_karyawan_regional6',
            'jumlah_karyawan_areakaltimtara',
            'jumlah_karyawan_areakalselteng',
            'jumlah_karyawan_areakalbar',
            'jumlah_karyawan_s2',
            'jumlah_karyawan_s1',
            'jumlah_karyawan_DIII',
            'jumlah_karyawan_sekolah',
        ));
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
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required|numeric',
            'nik_telpro' => 'required|numeric',
            'nama_karyawan' => 'required|string|max:100',
            'jenis_kelamin' => 'required|string|max:10',
            'tgl_lahir' => 'required|date',
            'kota_lahir' => 'required|string|max:100',
            'agama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'unit_kerja' => 'required|string|max:100',
            'no_hp' => 'required|string|max:100',
            'kontak_darurat' => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'band_kelas_posisi' => 'required|string|max:10',
            'status_nikah' => 'required|string|max:100',
            'nama_pasangan' => 'required|string|max:100',
            'suku' => 'required|string|max:100',
            'golongan_darah' => 'required|string|max:100',
            'jumlah_anak' => 'required|string|max:10',
            'tgl_bergabung' => 'required|date',
            'nomor_sk' => 'required|string|max:100',
            'jenjang_pendidikan' => 'required|string|max:100',
            'program_studi' => 'required|string|max:100',
            'penyelenggara_pendidikan' => 'required|string|max:100',
            'ijazah' => 'nullable|string|max:100',
            'nomor_bpjs_kesehatan' => 'required|string|max:100',
            'nomor_bpjs_ketenagakerjaan' => 'required|string|max:100',
            'nomor_telkomedika' => 'required|string|max:100',
            'nomor_npwp' => 'required|string|max:100',
            'nomor_rekening_bank' => 'required|string|max:100',

            // Tambahkan validasi untuk field lainnya sesuai kebutuhan
        ]);

        // Ambil data dari request
        $nik = $request->nik;
        $namaKaryawan = $request->nama_karyawan;

        // Simpan foto ke folder 'public/foto_karyawan'
        $path = null; // Inisialisasi path
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = $nik . '_' . $namaKaryawan . '.' . $foto->getClientOriginalExtension();
            $path = $foto->storeAs('foto', $filename, 'public');
        }

        try {
            // Simpan data karyawan
            Karyawan::create([
                'nik' => $request->nik,
                'telkomgroup' => $request->nik_telpro,
                'nama_karyawan' => $request->nama_karyawan,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' => $request->tgl_lahir,
                'kota_lahir' => $request->kota_lahir,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'unit_kerja' => $request->unit_kerja,
                'no_hp' => $request->no_hp,
                'kontak_darurat' => $request->kontak_darurat,
                'jabatan' => $request->jabatan,
                'band_kelas_posisi' => $request->band_kelas_posisi,
                'status_nikah' => $request->status_nikah,
                'nama_pasangan' => $request->nama_pasangan,
                'suku' => $request->suku,
                'golongan_darah' => $request->golongan_darah,
                'jumlah_anak' => $request->jumlah_anak,
                'tgl_bergabung' => $request->tgl_bergabung,
                'nomor_sk' => $request->nomor_sk,
                'surat_sk' => $request->surat_sk,
                'jenjang_pendidikan' => $request->jenjang_pendidikan,
                'program_studi' => $request->program_studi,
                'penyelenggara_pendidikan' => $request->penyelenggara_pendidikan,
                'ijazah' => $request->ijazah,
                'bpjs_kesehatan' => $request->nomor_bpjs_kesehatan,
                'bpjs_ketenagakerjaan' => $request->nomor_bpjs_ketenagakerjaan,
                'telkomedika' => $request->nomor_telkomedika,
                'npwp' => $request->nomor_npwp,
                'rekening_bank' => $request->nomor_rekening_bank,
                'foto' => $filename,
            ]);

            // Catat aktivitas tambah data karyawan ke dalam log
            LogActivities::create([
                'user_id' => auth()->id(),
                'activity' => 'Menambah Data Karyawan',
                'login_at' => Carbon::now('Asia/Singapore'),
            ]);

            // Redirect atau berikan respon sesuai kebutuhan        
            return redirect()->back()->with('success', 'Data karyawan berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Menangkap error dan memberikan respon
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
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
        $karyawan = Karyawan::find($id);
        return view('bsrm.karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrfail($id);
        // dd($karyawan);
        return view('bsrm.karyawan.show', compact('karyawan'));
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
            'nik' => $request->nik,
            'nik_telkomgroup' => $request->nik_telkomgroup,
            'nama_karyawan' => $request->nama_karyawan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'kota_lahir' => $request->kota_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'unit_kerja' => $request->unit_kerja,
            // 'loker'=>$request->loker,            
            'jabatan' => $request->jabatan,
            'band_kelas_posisi' => $request->band_kelas_posisi,
            'status_nikah' => $request->status_nikah,
            'nama_pasangan' => $request->nama_pasangan,
            'suku' => $request->suku,
            'golongan_darah' => $request->golongan_darah,
            'jumlah_anak' => $request->jumlah_anak,
            'tgl_bergabung' => $request->tgl_bergabung,
            // 'status_kepegawaian'=>$request->status_kepegawaian,
            'nomor_sk' => $request->nomor_sk,
            'surat_sk' => $request->surat_sk,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'program_studi' => $request->program_studi,
            'penyelenggara_pendidikan' => $request->penyelenggara_pendidikan,
            'ijazah' => $request->ijazah,
            'bpjs_kesehatan' => $request->bpjs_kesehatan,
            'bpjs_ketenagakerjaan' => $request->bpjs_ketenagakerjaan,
            'telkomedika' => $request->telkomedika,
            'npwp' => $request->npwp,
            'rekening_bank' => $request->rekening_bank,
        ]);
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Mengubah Data Karyawan', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
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
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'MEnghapus Data Karyawan', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->route('karyawan.index');
    }


    // Metode tambahan untuk pembaruan spesifik
    public function update_pribadi(Request $request, $id)
    {
        $karya = $request->all();
        $karyawan = Karyawan::find($id);
        $karyawan->update([
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'kota_lahir' => $request->kota_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'suku' => $request->suku,
            'golongan_darah' => $request->golongan_darah,
            'kontak_darurat' => $request->kontak_darurat,
        ]);
        // Catat aktivitas tambah data mitra ke dalam log
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->back();
    }

    public function update_keluarga(Request $request, $id)
    {
        // Logika untuk memperbarui data keluarga karyawan
    }

    public function update_job(Request $request, $id)
    {
        // Logika untuk memperbarui data pekerjaan karyawan
    }

    public function update_jobhistory(Request $request, $id)
    {
        // Logika untuk memperbarui riwayat pekerjaan karyawan
    }

    public function update_pendidikan(Request $request, $id)
    {
        // Logika untuk memperbarui data pendidikan karyawan
    }

    public function update_pelatihan(Request $request, $id)
    {
        // Logika untuk memperbarui data pelatihan karyawan
    }

    public function update_keterampilan(Request $request, $id)
    {
        // Logika untuk memperbarui keterampilan karyawan
    }
}
