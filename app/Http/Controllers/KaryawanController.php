<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Karyawan;
use App\Models\JobHistory;
use App\Models\Keterampilan;
use App\Models\Pendidikan;
use App\Models\Pelatihan;
use App\Models\Keluarga;
use App\Models\Catatan;
use App\Models\Data;
use App\Models\DataKerja;
use App\Models\Jabatan;
use App\Models\Prestasi;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\LogActivities; // Import model MitraActivityLog
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = now()->format('m-d'); // Format hari dan bulan saat ini

        // Ambil data karyawan yang ulang tahun hari ini
        $karyawan_ulang_tahun = Karyawan::whereRaw('DATE_FORMAT(tgl_lahir, "%m-%d") = ?', [$today])
            ->select('nama_karyawan', 'foto') // Pilih kolom yang diperlukan saja
            ->get();

        $karyawan = Karyawan::with(['datakerjakaryawans', 'pendidikan'])
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id')
            ->leftJoin('pendidikan', 'karyawan.id', '=', 'pendidikan.karyawan_id')
            ->orderBy('data_kerja_karyawan.band_kelas_posisi')
            ->select('karyawan.*', 'data_kerja_karyawan.*', 'pendidikan.*')
            ->get();

        $jabatanList = Jabatan::whereNull('karyawan_id')->with('unit')->get();

        $jumlahJabatan = $jabatanList->count();
        $jumlah_seluruh_karyawan = Karyawan::count();

        $jumlah_karyawan_areakaltimtara = Karyawan::join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id')
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kaltimtara')
            ->count();

        $jumlah_karyawan_areakalselteng = Karyawan::join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id')
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kalselteng')
            ->count();

        $jumlah_karyawan_areakalbar = Karyawan::join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id')
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kalbar')
            ->count();

        return view('bsrm.karyawan.karyawan', compact(
            'karyawan',
            'karyawan_ulang_tahun',
            'jumlah_karyawan_areakaltimtara',
            'jumlah_karyawan_areakalselteng',
            'jumlah_karyawan_areakalbar',
            'jumlahJabatan',
            'jabatanList',

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
        $karyawan = Karyawan::with(['datakerjakaryawans', 'keluarga', 'prestasi', 'catatans'])->find($id);

        if (!$karyawan) {
            return redirect()->back()->with('error', 'Karyawan tidak ditemukan.');
        }

        // Ambil riwayat jabatan, pendidikan, pelatihan, keterampilan, dan talent
        $jobHistories = JobHistory::where('karyawan_id', $id)->orderBy('tgl_jabat', 'desc')->get();
        $pendidikan = Pendidikan::where('karyawan_id', $id)->orderBy('tahun_lulus', 'desc')->get();
        $pelatihan = Pelatihan::where('karyawan_id', $id)->orderBy('tanggal_akhir', 'desc')->get();
        $keterampilan = Keterampilan::where('karyawan_id', $id)->get();
        $talent = Talent::where('karyawan_id', $id)->get();
        $prestasi = $karyawan->prestasi;

        // Ambil catatan terkait karyawan
        $catatan = Catatan::where('karyawan_id', $id)->get();

        // Pastikan data keluarga ada
        $data_keluarga = Keluarga::where('karyawan_id', $id)->get();

        if ($data_keluarga->isEmpty()) {
            return redirect()->route('karyawan.index')->with('error', 'Data keluarga tidak ditemukan.');
        }

        // Ambil tanggal terbaru untuk riwayat jabatan dan tahun lulus terbaru
        $latestJobHistoryDate = $jobHistories->isNotEmpty() ? $jobHistories->first()->tgl_jabat : null;
        $latestGraduationYear = $pendidikan->isNotEmpty() ? $pendidikan->first()->tahun_lulus : null;

        // Kirim semua variabel ke view
        return view('bsrm.karyawan.show', compact('karyawan', 'jobHistories', 'latestJobHistoryDate', 'pendidikan', 'latestGraduationYear', 'pelatihan', 'data_keluarga', 'keterampilan', 'talent', 'prestasi', 'catatan'));
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
        try {
            // Validasi data yang diterima
            $request->validate([
                'status_nikah' => 'required|string|max:50',
                'nama_pasangan' => 'nullable|string|max:100',
                'tanggungan_keluarga' => 'nullable|string|max:100',
                'nama_anak_pertama' => 'nullable|string|max:100',
                'nama_anak_kedua' => 'nullable|string|max:100',
                'nama_anak_ketiga' => 'nullable|string|max:100',
            ]);

            // Temukan data keluarga berdasarkan ID
            $karyawan = Keluarga::find($id);

            // Cek apakah data keluarga ditemukan
            if (!$karyawan) {
                return response()->json(['message' => 'Data keluarga tidak ditemukan'], 404);
            }

            // Siapkan data yang akan diupdate
            $updateData = [
                'status_nikah' => $request->status_nikah,
                'tanggungan_keluarga' => $request->tanggungan_keluarga,
                'nama_pasangan' => !empty($request->nama_pasangan) ? $request->nama_pasangan : null,
                'nama_anak_pertama' => !empty($request->nama_anak_pertama) ? $request->nama_anak_pertama : null,
                'nama_anak_kedua' => !empty($request->nama_anak_kedua) ? $request->nama_anak_kedua : null,
                'nama_anak_ketiga' => !empty($request->nama_anak_ketiga) ? $request->nama_anak_ketiga : null,
            ];

            // Perbarui data keluarga
            $karyawan->update($updateData);

            // Menampilkan toast sukses setelah data diperbarui
            Alert::toast('Data keluarga berhasil diubah!', 'success');

            // Redirect dengan pesan sukses
            return redirect()->back();
        } catch (\Exception $e) {
            // Menampilkan toast gagal jika ada kesalahan
            Alert::toast('Gagal mengubah data keluarga: ' . $e->getMessage(), 'error');

            // Redirect kembali dengan pesan gagal
            return redirect()->back();
        }
    }



    public function update_job(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'nik' => 'nullable|string|max:50',
            'nik_telpro' => 'nullable|string|max:50',
            'jabatan' => 'nullable|string|max:50',
            'unit_kerja' => 'nullable|string|max:50',
            'band_kelas_posisi' => 'nullable|string|max:50',
            'tgl_bergabung' => 'nullable|date|max:50',
            'lokasi' => 'nullable|string|max:50',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Temukan job history berdasarkan ID
        $job = DataKerja::find($id);

        // Cek apakah job history ditemukan
        if (!$job) {
            return response()->json(['message' => 'Jobnot found'], 404);
        }
        try {
            // Perbarui job history dengan data yang baru
            $job->update([
                'nik' => $request->input('nik'),
                'telkomgroup' => $request->input('nik_telpro'),
                'jabatan' => $request->input('jabatan'),
                'unit_kerja' => $request->input('unit_kerja'),
                'band_kelas_posisi' => $request->input('band_kelas_posisi'),
                'tgl_bergabung' => $request->input('tgl_bergabung'),
                'lokasi_kerja' => $request->input('lokasi_kerja'),
                // Include other fields as necessary
            ]);
            // Menampilkan toast sukses setelah data diperbarui
            Alert::toast('Data pekerjaan berhasil diubah!', 'success');

            // Redirect dengan pesan sukses
            return redirect()->back();
        } catch (\Exception $e) {
            // Menampilkan toast gagal jika ada kesalahan
            Alert::toast('Gagal mengubah data pekerjaan: ' . $e->getMessage(), 'error');

            // Redirect kembali dengan pesan gagal
            return redirect()->back();
        }
    }

    public function add_jobhistory(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'nama' => 'required|string|max:100',
            'tgl_jabat' => 'required|date',
            'lokasi' => 'nullable|string|max:50',
            'band' => 'nullable|string|max:50',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;
        $lokasi = $request->lokasi;

        // Simpan lampiran ke folder 'public/lampiran'
        $lampiranPath = null; // Inisialisasi path
        if ($request->hasFile('lampiran')) {
            $lampiran = $request->file('lampiran');
            $filename = $karyawan_id . '_' . $lokasi . '.' . $lampiran->getClientOriginalExtension();
            $lampiranPath = $lampiran->storeAs('lampiran', $filename, 'public'); // Simpan lampiran dan dapatkan path
        }

        // Buat riwayat pekerjaan baru
        $jobHistory = JobHistory::create([
            'karyawan_id' => $karyawan_id,
            'nama' => $request->nama,
            'tgl_jabat' => $request->tgl_jabat,
            'lokasi' => $lokasi,
            'band' => $request->band,
            'lampiran' => $lampiranPath, // Simpan path lampiran yang sudah disimpan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat pekerjaan berhasil ditambahkan!');
    }

    public function update_jobhistory(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'nama' => 'required|string|max:50',
            'tgl_jabat' => 'required|date',
            'lokasi' => 'nullable|string|max:50',
            'band' => 'nullable|string|max:50',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,png|max:5048',
        ]);

        // Temukan job history berdasarkan ID
        $jobHistory = JobHistory::find($id);

        if (!$jobHistory) {
            return redirect()->back()->withErrors(['message' => 'Job history not found'])->withInput();
        }

        $lampiranPath = $jobHistory->lampiran;

        try {
            if ($request->hasFile('lampiran')) {
                if ($lampiranPath && Storage::disk('public')->exists($lampiranPath)) {
                    Storage::disk('public')->delete($lampiranPath);
                }

                $lampiran = $request->file('lampiran');
                $filename = $jobHistory->karyawan_id . '_' . $jobHistory->tgl_jabat . '_' . time() . '.' . $lampiran->getClientOriginalExtension();
                $lampiranPath = $lampiran->storeAs('lampiran_jobhistory', $filename, 'public');
            }

            $jobHistory->update([
                'nama' => $request->input('nama'),
                'tgl_jabat' => $request->input('tgl_jabat'),
                'lokasi' => $request->input('lokasi'),
                'band' => $request->input('band'),
                'lampiran' => $lampiranPath,
            ]);

            Alert::toast('Data pekerjaan berhasil diubah!', 'success');
            return redirect()->back()->with('success', 'Data pekerjaan berhasil diubah!');
        } catch (\Throwable $e) {
            Alert::toast('Gagal mengubah data pekerjaan: ' . $e->getMessage(), 'error');
            return redirect()->back()->withErrors(['error' => 'Gagal mengubah data pekerjaan.'])->withInput();
        }
    }



    public function destroy_jobhistory($id)
    {
        // Temukan pendidikan berdasarkan ID
        $jobhistory = JobHistory::find($id);

        // Cek apakah pendidikan ditemukan
        if (!$jobhistory) {
            return response()->json(['message' => 'Jobhistory not found'], 404);
        }

        // Hapus lampiran dari storage jika ada
        if ($jobhistory->lampiran) {
            Storage::disk('public')->delete($jobhistory->lampiran);
        }

        // Hapus entri pendidikan dari database
        $jobhistory->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat pendidikan berhasil dihapus!');
    }

    public function add_pendidikan(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'jenjang_pendidikan' => 'required|string|max:100',
            'nama_institusi' => 'required|string|max:100',
            'jurusan' => 'required|string|max:100',
            'tahun_lulus' => 'required|integer|min:1900|max:' . date('Y'), // Validasi tahun
            'lampiran_ijazah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;
        $jenjang = $request->jenjang_pendidikan;

        // Simpan lampiran ke folder 'public/lampiran_ijazah'
        $lampiranPath = null; // Inisialisasi path
        if ($request->hasFile('lampiran_ijazah')) {
            $lampiran = $request->file('lampiran_ijazah');

            // Membuat nama file berdasarkan karyawan_id, jenjang, nama institusi, tahun lulus, dan timestamp
            $filename = $karyawan_id . '_' . $jenjang . '_' . $request->nama_institusi . '_' . $request->tahun_lulus . '_' . time() . '.' . $lampiran->getClientOriginalExtension();

            // Simpan lampiran dan dapatkan path
            $lampiranPath = $lampiran->storeAs('lampiran_ijazah', $filename, 'public');
        }

        // Buat riwayat pendidikan baru
        $pendidikan = Pendidikan::create([
            'karyawan_id' => $karyawan_id,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'nama_institusi' => $request->nama_institusi,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
            'lampiran_ijazah' => $lampiranPath, // Simpan path lampiran yang sudah disimpan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat Pendidikan berhasil ditambahkan!');
    }

    public function update_pendidikan(Request $request, $id)
    {
        // Debugging: Tampilkan semua data yang diterima dari form
        // dd($request->all());
        try {
            // Validasi data yang diterima
            $request->validate([
                'karyawan_id' => 'required|exists:karyawan,id',
                'jenjang_pendidikan' => 'required|string|max:100',
                'nama_institusi' => 'required|string|max:100',
                'jurusan' => 'required|string|max:100',
                'tahun_lulus' => 'required|integer|min:1900|max:' . date('Y'),
                'lampiran_ijazah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            ]);

            // Temukan riwayat pendidikan berdasarkan ID
            $pendidikan = Pendidikan::find($id);

            // Cek apakah riwayat pendidikan ditemukan
            if (!$pendidikan) {
                return response()->json(['message' => 'Pendidikan tidak ditemukan'], 404);
            }

            // Variabel untuk menyimpan path lampiran
            $lampiranPath = $pendidikan->lampiran_ijazah;

            // Jika ada file lampiran baru
            if ($request->hasFile('lampiran_ijazah')) {
                // Hapus lampiran yang lama jika ada
                if ($lampiranPath && Storage::disk('public')->exists($lampiranPath)) {
                    Storage::disk('public')->delete($lampiranPath);
                }

                // Ambil file baru
                $lampiran = $request->file('lampiran_ijazah');
                $filename = $pendidikan->karyawan_id . '_' . $pendidikan->jenjang_pendidikan . '_' . time() . '.' . $lampiran->getClientOriginalExtension();

                // Simpan lampiran baru ke folder 'lampiran_ijazah'
                $lampiranPath = $lampiran->storeAs('lampiran_ijazah', $filename, 'public');
            }

            // Perbarui riwayat pendidikan dengan data baru
            $pendidikan->update([
                'jenjang_pendidikan' => $request->input('jenjang_pendidikan'),
                'nama_institusi' => $request->input('nama_institusi'),
                'jurusan' => $request->input('jurusan'),
                'tahun_lulus' => $request->input('tahun_lulus'),
                'lampiran_ijazah' => $lampiranPath,
            ]);

            // Menampilkan toast sukses setelah data diperbarui
            Alert::toast('Riwayat Pendidikan berhasil diubah!', 'success');

            // Redirect dengan pesan sukses
            return redirect()->back();
        } catch (\Exception $e) {
            // Menampilkan toast gagal jika ada kesalahan
            Alert::toast('Gagal mengubah Riwayat Pendidikan: ' . $e->getMessage(), 'error');

            // Redirect kembali dengan pesan gagal
            return redirect()->back();
        }
    }

    public function destroy_pendidikan($id)
    {
        // Temukan pendidikan berdasarkan ID
        $pendidikan = Pendidikan::find($id);

        // Cek apakah pendidikan ditemukan
        if (!$pendidikan) {
            return response()->json(['message' => 'Pendidikan not found'], 404);
        }

        // Hapus lampiran dari storage jika ada
        if ($pendidikan->lampiran_ijazah) {
            Storage::disk('public')->delete($pendidikan->lampiran_ijazah);
        }

        // Hapus entri pendidikan dari database
        $pendidikan->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat pendidikan berhasil dihapus!');
    }

    public function add_pelatihan(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'nama_pelatihan' => 'required|string|max:100',
            'nama_penyelenggara' => 'required|string|max:100',
            'tanggal_mulai' => 'required|date|before_or_equal:tanggal_akhir', // Pastikan tanggal mulai valid dan sebelum tanggal akhir
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai', // Pastikan tanggal akhir valid dan setelah tanggal mulai
            'tanggal_kadaluarsa' => 'required|date|after_or_equal:tanggal_mulai', // Pastikan tanggal akhir valid dan setelah tanggal mulai
            'lampiran_pendukung' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);


        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;
        $pelatihan = $request->pelatihan;

        // Simpan lampiran ke folder 'public/lampiran'
        $lampiranPath = null; // Inisialisasi path
        if ($request->hasFile('lampiran_pelatihan')) {
            $lampiran = $request->file('lampiran_pelatihan');
            $filename = $karyawan_id . '_' . $pelatihan . '.' . $lampiran->getClientOriginalExtension();
            $lampiranPath = $lampiran->storeAs('lampiran_pelatihan', $filename, 'public'); // Simpan lampiran dan dapatkan path
        }

        // Buat riwayat pekerjaan baru
        $pelatihan = Pelatihan::create([
            'karyawan_id' => $karyawan_id,
            'nama_pelatihan' => $request->nama_pelatihan,
            'nama_penyelenggara' => $request->nama_penyelenggara,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'lampiran_pendukung' => $lampiranPath, // Simpan path lampiran yang sudah disimpan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat pekerjaan berhasil ditambahkan!');
    }

    public function update_pelatihan(Request $request, $id)
    {
        try {
            // Validasi data yang diterima
            $request->validate([
                'nama_pelatihan' => 'required|string|max:100',
                'nama_penyelenggara' => 'required|string|max:100',
                'tanggal_mulai' => 'required|date|before_or_equal:tanggal_akhir',
                'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
                'tanggal_kadaluarsa' => 'required|date|after_or_equal:tanggal_mulai',
                'lampiran_pendukung' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            ]);

            // Temukan pelatihan berdasarkan ID
            $pelatihan = Pelatihan::find($id);

            // Cek apakah pelatihan ditemukan
            if (!$pelatihan) {
                Alert::toast('Pelatihan tidak ditemukan!', 'error');
                return redirect()->back();
            }

            // Inisialisasi path lampiran
            $lampiranPath = $pelatihan->lampiran_pendukung; // Simpan path lama

            // Periksa apakah ada lampiran baru yang diunggah
            if ($request->hasFile('lampiran_pendukung')) {
                // Hapus lampiran lama jika ada
                if ($lampiranPath) {
                    \Storage::disk('public')->delete($lampiranPath);
                }

                // Simpan lampiran baru
                $lampiran = $request->file('lampiran_pendukung');
                $filename = $pelatihan->karyawan_id . '_pelatihan_' . time() . '.' . $lampiran->getClientOriginalExtension();
                $lampiranPath = $lampiran->storeAs('lampiran_pelatihan', $filename, 'public'); // Simpan lampiran dan dapatkan path
            }

            // Perbarui pelatihan dengan data yang baru
            $pelatihan->update([
                'nama_pelatihan' => $request->input('nama_pelatihan'),
                'nama_penyelenggara' => $request->input('nama_penyelenggara'),
                'tanggal_mulai' => $request->input('tanggal_mulai'),
                'tanggal_akhir' => $request->input('tanggal_akhir'),
                'tanggal_kadaluarsa' => $request->input('tanggal_kadaluarsa'),
                'lampiran_pendukung' => $lampiranPath, // Simpan path lampiran yang sudah disimpan
            ]);

            // Menampilkan toast sukses setelah data diperbarui
            Alert::toast('Pelatihan berhasil diubah!', 'success');

            // Redirect dengan pesan sukses
            return redirect()->back();
        } catch (\Exception $e) {
            // Menampilkan toast gagal jika ada kesalahan
            Alert::toast('Gagal mengubah pelatihan: ' . $e->getMessage(), 'error');

            // Redirect kembali dengan pesan gagal
            return redirect()->back();
        }
    }

    public function destroy_pelatihan($id)
    {
        // Debugging: Pastikan $id diterima dengan benar
        // dd($id);  // Uncomment untuk debug jika diperlukan

        // Temukan pelatihan berdasarkan ID
        $pelatihan = Pelatihan::find($id);

        // Cek apakah pelatihan ditemukan
        if (!$pelatihan) {
            return redirect()->back()->with('error', 'Pelatihan tidak ditemukan!');
        }

        // Hapus lampiran dari storage jika ada
        if ($pelatihan->lampiran_pendukung) {
            Storage::disk('public')->delete($pelatihan->lampiran_pendukung);
        }

        // Hapus entri pelatihan dari database
        $pelatihan->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pelatihan berhasil dihapus!');
    }

    public function add_keterampilan(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'nama_keterampilan' => 'required|string|max:100',
        ]);
        // Buat riwayat keterampilan baru
        $keterampilan = Keterampilan::create([
            'karyawan_id' => $request->karyawan_id, // Corrected line
            'nama_keterampilan' => $request->nama_keterampilan,
        ]);
        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat keterampilan berhasil ditambahkan!');
    }

    public function update_keterampilan(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'nama_keterampilan' => 'required|string|max:100',
        ]);

        // Temukan job history berdasarkan ID
        $keterampilan = Keterampilan::find($id);

        // Cek apakah job history ditemukan
        if (!$keterampilan) {
            return response()->json(['message' => 'Pendidikan not found'], 404);
        }

        // Perbarui job history dengan data yang baru
        $keterampilan->update([
            'nama_keterampilan' => $request->input('nama_keterampilan'),
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);

        return redirect()->back()->with('success', 'keterampilan berhasil diubah!');
        //  return response()->json(['message' => 'Job history updated successfully', 'data' => $pendidikan], 200);
    }

    public function destroy_keterampilan($id)
    {
        // Temukan pendidikan berdasarkan ID
        $keterampilan = Keterampilan::find($id);

        // Cek apakah pendidikan ditemukan
        if (!$keterampilan) {
            return response()->json(['message' => 'Pendidikan not found'], 404);
        }

        // Hapus lampiran dari storage jika ada
        if ($keterampilan->lampiran) {
            Storage::disk('public')->delete($keterampilan->lampiran);
        }

        // Hapus entri pendidikan dari database
        $keterampilan->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pelatihan berhasil dihapus!');
    }

    public function add_prestasi(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'nama_event' => 'required|string|max:100',
            'nama_penghargaan' => 'required|string|max:100',
            'tahun_penghargaan' => 'required|string|max:100',
            'lampiran_penghargaan' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;

        // Simpan lampiran ke folder 'public/lampiran'
        $lampiranPath = null; // Inisialisasi path
        if ($request->hasFile('lampiran_penghargaan')) {
            $lampiran = $request->file('lampiran_penghargaan');
            $filename = $karyawan_id . '_' . time() . '.' . $lampiran->getClientOriginalExtension(); // Menggunakan time() untuk nama unik
            $lampiranPath = $lampiran->storeAs('lampiran_prestasi', $filename, 'public'); // Simpan lampiran dan dapatkan path
        }

        // Buat riwayat prestasi baru
        $prestasi = Prestasi::create([
            'karyawan_id' => $karyawan_id,
            'nama_event' => $request->nama_event,
            'nama_penghargaan' => $request->nama_penghargaan,
            'tahun_penghargaan' => $request->tahun_penghargaan,
            'lampiran_penghargaan' => $lampiranPath, // Menggunakan $lampiranPath
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Prestasi berhasil ditambahkan!');
    }

    public function update_prestasi(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'nama_event' => 'required|string|max:100',
            'nama_penghargaan' => 'required|string|max:100',
            'tahun_penghargaan' => 'required|string|max:100',
            'lampiran_penghargaan' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Cari prestasi berdasarkan ID
        $prestasi = Prestasi::findOrFail($id);

        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;

        // Simpan lampiran ke folder 'public/lampiran' jika ada file baru
        $lampiranPath = $prestasi->lampiran_penghargaan; // Simpan path lama
        if ($request->hasFile('lampiran_penghargaan')) {
            // Hapus file lama jika perlu (pastikan Anda sudah mengatur hak akses file)
            if ($lampiranPath) {
                Storage::disk('public')->delete($lampiranPath);
            }

            $lampiran = $request->file('lampiran_penghargaan');
            $filename = $karyawan_id . '_' . time() . '.' . $lampiran->getClientOriginalExtension(); // Menggunakan time() untuk nama unik
            $lampiranPath = $lampiran->storeAs('lampiran_prestasi', $filename, 'public'); // Simpan lampiran dan dapatkan path
        }

        // Perbarui data prestasi
        $prestasi->update([
            'karyawan_id' => $karyawan_id,
            'nama_event' => $request->nama_event,
            'nama_penghargaan' => $request->nama_penghargaan,
            'tahun_penghargaan' => $request->tahun_penghargaan,
            'lampiran_penghargaan' => $lampiranPath, // Menggunakan $lampiranPath yang baru
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Prestasi berhasil diperbarui!');
    }

    public function destroy_prestasi($id)
    {
        // Cari prestasi berdasarkan ID
        $prestasi = Prestasi::findOrFail($id);

        // Hapus lampiran jika ada
        if ($prestasi->lampiran_penghargaan) {
            Storage::disk('public')->delete($prestasi->lampiran_penghargaan);
        }

        // Hapus data prestasi dari database
        $prestasi->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Prestasi berhasil dihapus!');
    }

    public function add_talent(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'tanggal_talent' => 'required|string|max:100',
            'talent' => 'required|in:Talent Review,Assesment',
            'status' => 'required|in:LULUS,TIDAK LULUS', // Memastikan status hanya 'lulus' atau 'tidak'
        ]);

        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;  // Ini memperbaiki error undefined variable

        // Buat riwayat prestasi baru
        $prestasi = Talent::create([
            'karyawan_id' => $karyawan_id,
            'talent' => $request->talent,
            'tanggal_talent' => $request->tanggal_talent,
            'status' => $request->status,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Prestasi berhasil ditambahkan!');
    }


    public function update_talent(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'tanggal_talent' => 'required|string|max:100',
            'talent' => 'required|in:Talent Review,Assesment',
            'status' => 'required|in:LULUS,TIDAK LULUS', // Memastikan status hanya 'lulus' atau 'tidak'
        ]);

        // Cari prestasi berdasarkan ID
        $prestasi = Talent::findOrFail($id);

        // Update data prestasi
        $prestasi->update([
            'tanggal_talent' => $request->tanggal_talent,
            'talent' => $request->talent,
            'status' => $request->status,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Prestasi berhasil diperbarui!');
    }


    public function destroy_talent($id)
    {
        // Cari prestasi berdasarkan ID
        $prestasi = Talent::findOrFail($id);

        // Hapus prestasi
        $prestasi->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Prestasi berhasil dihapus!');
    }

    public function add_catatan(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'catatan' => 'required',
        ]);

        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;

        // Ambil user_id dari pengguna yang sedang login
        $user_id = auth()->user()->id; // Ambil ID pengguna yang sedang login

        // Buat riwayat prestasi baru
        $prestasi = Catatan::create([
            'karyawan_id' => $karyawan_id, // Perbaiki ini
            'user_id' => $user_id, // Gunakan user_id dari pengguna yang sedang login
            'catatan' => $request->catatan,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Prestasi berhasil ditambahkan!');
    }


    public function update_catatan(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'catatan' => 'required',
        ]);

        // Cari catatan berdasarkan ID
        $catatan = Catatan::findOrFail($id);

        // Update catatan
        $catatan->catatan = $request->catatan;
        $catatan->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Catatan berhasil diperbarui!');
    }



    public function delete_catatan($id)
    {
        // Cari catatan berdasarkan ID
        $catatan = Catatan::findOrFail($id);

        // Hapus catatan
        $catatan->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Catatan berhasil dihapus!');
    }

    public function kirimNotifikasiUlangTahun()
    {
        // Ambil tanggal hari ini (format bulan-hari)
        $today = now()->format('m-d');

        // Cari karyawan yang berulang tahun hari ini
        $karyawan_ulang_tahun = Karyawan::whereRaw('DATE_FORMAT(tgl_lahir, "%m-%d") = ?', [$today])->get();

        if ($karyawan_ulang_tahun->isEmpty()) {
            return response()->json(['message' => 'Tidak ada karyawan yang berulang tahun hari ini.']);
        }

        // Kirim email pemberitahuan ke admin
        $email_admin = 'fajriansyah573@gmail.com'; // Ganti dengan email Anda
        $subject = 'Notifikasi Ulang Tahun Karyawan';

        $karyawan_nama_list = $karyawan_ulang_tahun->pluck('nama_karyawan')->toArray();
        $isi_email = 'Hari ini ada karyawan yang berulang tahun: UUYYYY ' . implode(', ', $karyawan_nama_list) . '.';

        Mail::raw($isi_email, function ($message) use ($email_admin, $subject) {
            $message->to($email_admin)
                ->subject($subject);
        });

        return response()->json(['message' => 'Notifikasi ulang tahun berhasil dikirim.']);
    }
}
