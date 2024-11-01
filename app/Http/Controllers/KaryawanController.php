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
use App\Models\Jabatan;
use App\Models\Prestasi;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\LogActivities; // Import model MitraActivityLog
use Illuminate\Support\Facades\Storage;
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
        $karyawan = Karyawan::with('datakerjakaryawans') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Mengambil semua kolom dari tabel karyawan dan semua kolom dari data_kerja_karyawan
            ->get();

            

        $jumlahKaryawan = Karyawan::count();

        // Menyaring karyawan berdasarkan unit kerja
        $karyawan_organik = Karyawan::with('datakerjakaryawans') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->where('data_kerja_karyawan.unit_kerja', 'General Manager Regional') // Kondisi unit_kerja
            ->select('karyawan.*') // Memilih kolom dari tabel karyawan
            ->get();



        $karyawan_regional6 = Karyawan::with('datakerjakaryawans') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->whereIn('data_kerja_karyawan.unit_kerja', [
                'General Manager Regional',
                'Manager Marketing, Sales & Solution',
                'Marketing, Sales & Solution',
                'Manager Planning & Delivery',
                'Planning & Delivery',
                'Manager Operation & Maintenance',
                'Operation & Maintenance',
                'Manager Business Support & Risk Management',
                'Business Support & Risk Management'
            ]) // Kondisi unit_kerja
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Memilih kolom dari tabel karyawan
            ->get();



        $karyawan_areakaltimtara = Karyawan::with('datakerjakaryawans') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kaltimtara') // Kondisi unit_kerja
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Memilih kolom dari tabel karyawan
            ->get();

        $karyawan_areakalselteng = Karyawan::with('datakerjakaryawans') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kalselteng') // Kondisi unit_kerja
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Memilih kolom dari tabel karyawan
            ->get();

        $karyawan_areakalbar = Karyawan::with('datakerjakaryawans') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kalbar') // Kondisi unit_kerja
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Memilih kolom dari tabel karyawan
            ->get();



        $jabatanList = Jabatan::whereNull('karyawan_id')
            ->with('unit') // Mengambil relasi 'unit'
            ->get();


        // Ensure jabatanList is always a collection (even if empty)
        if ($jabatanList === null) {
            $jabatanList = collect(); // If null, convert it to an empty collection
        }

        // You can now safely count it
        $jumlahJabatan = $jabatanList->count();


        // Menyaring karyawan berdasarkan pendidikan
        $karyawan_s2 = Karyawan::with('pendidikan') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->join('pendidikan', 'karyawan.id', '=', 'pendidikan.karyawan_id') // Join dengan tabel pendidikan
            ->where('pendidikan.jenjang_pendidikan', 'S2') // Kondisi jenjang pendidikan
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Memilih kolom dari tabel karyawan dan data_kerja_karyawan
            ->get();

        $karyawan_s1 = Karyawan::with('pendidikan') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->join('pendidikan', 'karyawan.id', '=', 'pendidikan.karyawan_id') // Join dengan tabel pendidikan
            ->where('pendidikan.jenjang_pendidikan', 'S1') // Kondisi jenjang pendidikan
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Memilih kolom dari tabel karyawan dan data_kerja_karyawan
            ->get();

        $karyawan_diploma = Karyawan::with('pendidikan') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->join('pendidikan', 'karyawan.id', '=', 'pendidikan.karyawan_id') // Join dengan tabel pendidikan
            ->where('pendidikan.jenjang_pendidikan', 'Diploma III') // Kondisi jenjang pendidikan
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Memilih kolom dari tabel karyawan dan data_kerja_karyawan
            ->get();

        $karyawan_sekolah = Karyawan::with('pendidikan') // Eager loading relasi
            ->join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id') // Join dengan tabel data_kerja_karyawan
            ->join('pendidikan', 'karyawan.id', '=', 'pendidikan.karyawan_id') // Join dengan tabel pendidikan
            ->where('pendidikan.jenjang_pendidikan', 'SMK/SLTA Kejuruan') // Kondisi jenjang pendidikan
            ->orderBy('data_kerja_karyawan.band_kelas_posisi') // Mengurutkan berdasarkan band_kelas_posisi
            ->select('karyawan.*', 'data_kerja_karyawan.*') // Memilih kolom dari tabel karyawan dan data_kerja_karyawan
            ->get();






        // Menghitung jumlah karyawan di Regional 6
        $jumlah_seluruh_karyawan = Karyawan::count();
        $jumlah_karyawan_regional6 = Karyawan::join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id')
            ->whereIn('data_kerja_karyawan.unit_kerja', [
                'General Manager Regional',
                'Manager Marketing, Sales & Solution',
                'Marketing, Sales & Solution',
                'Manager Planning & Delivery',
                'Planning & Delivery',
                'Manager Operation & Maintenance',
                'Operation & Maintenance',
                'Manager Business Support & Risk Management',
                'Business Support & Risk Management'
            ])
            ->count();

        $jumlah_karyawan_areakaltimtara = Karyawan::join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id')
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kaltimtara')
            ->count();

        $jumlah_karyawan_areakalselteng = Karyawan::join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id')
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kalselteng')
            ->count();

        $jumlah_karyawan_areakalbar = Karyawan::join('data_kerja_karyawan', 'karyawan.id', '=', 'data_kerja_karyawan.karyawan_id')
            ->where('data_kerja_karyawan.unit_kerja', 'Area Kalbar')
            ->count();


        // $jumlah_karyawan_formasi_kosong  'jumlah_formasi_kosong', = Karyawan::whereIn('unit_kerja', [
        //     'Area Kalbar'
        // ])->count();

        $jumlah_karyawan_s2 = Pendidikan::whereIn('jenjang_pendidikan', [
            'S2'
        ])->count();

        $jumlah_karyawan_s1 = Pendidikan::whereIn('jenjang_pendidikan', [
            'S1'
        ])->count();

        $jumlah_karyawan_DIII = Pendidikan::whereIn('jenjang_pendidikan', [
            'Diploma III'
        ])->count();

        $jumlah_karyawan_sekolah = Pendidikan::whereIn('jenjang_pendidikan', [
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
            'jumlah_seluruh_karyawan',
            'jumlah_karyawan_regional6',
            'jumlah_karyawan_areakaltimtara',
            'jumlah_karyawan_areakalselteng',
            'jumlah_karyawan_areakalbar',
            'jumlah_karyawan_s2',
            'jumlah_karyawan_s1',
            'jumlah_karyawan_DIII',
            'jumlah_karyawan_sekolah',
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
        $data_keluarga = $karyawan->keluarga;

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
        $karya = $request->all();
        $karyawan = Keluarga::find($id);
        $karyawan->update([
            'status_nikah' => $request->status_nikah,
            'tgl_nikah' => $request->tgl_nikah,
            'jumlah_anak' => $request->jumlah_anak,
            'nomor_kartu_keluarga' => $request->nomor_kartu_keluarga,
            'nama_pasangan' => $request->nama_pasangan,
            'nama_anak_pertama' => $request->nama_anak_pertama,
            'tgl_lahir_anak_pertama' => $request->tgl_lahir_anak_pertama,
            'nama_anak_kedua' => $request->nama_anak_kedua,
            'tgl_lahir_anak_kedua' => $request->tgl_lahir_anak_kedua,
            'nama_anak_ketiga' => $request->nama_anak_ketiga,
            'tgl_lahir_anak_ketiga' => $request->tgl_lahir_anak_ketiga,
        ]);
        // Catat aktivitas tambah data mitra ke dalam log
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->back();
    }

    public function update_job(Request $request, $id)
    {
        // Logika untuk memperbarui data pekerjaan karyawan
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
        $request->validate([
            'nama' => 'required|string|max:50',
            'tgl_jabat' => 'required|date',
            'lokasi' => 'nullable|string|max:50',
            'band' => 'nullable|string|max:50',
            'lampiran' => 'nullable|string|max:50',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Temukan job history berdasarkan ID
        $jobHistory = JobHistory::find($id);

        // Cek apakah job history ditemukan
        if (!$jobHistory) {
            return response()->json(['message' => 'Job history not found'], 404);
        }

        // Perbarui job history dengan data yang baru
        $jobHistory->update([
            'nama' => $request->input('nama'),
            'tgl_jabat' => $request->input('tgl_jabat'),
            'lokasi' => $request->input('lokasi'),
            'band' => $request->input('band'),
            'lampiran' => $request->input('lampiran'),
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);

        return response()->json(['message' => 'Job history updated successfully', 'data' => $jobHistory], 200);
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
            'lampiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;
        $jenjang = $request->jenjang_pendidikan;

        // Simpan lampiran ke folder 'public/lampiran'
        $lampiranPath = null; // Inisialisasi path
        if ($request->hasFile('lampiran')) {
            $lampiran = $request->file('lampiran');
            $filename = $karyawan_id . '_' . $jenjang . '.' . $lampiran->getClientOriginalExtension();
            $lampiranPath = $lampiran->storeAs('lampiran_pendidikan', $filename, 'public'); // Simpan lampiran dan dapatkan path
        }

        // Buat riwayat pekerjaan baru
        $jobHistory = Pendidikan::create([
            'karyawan_id' => $karyawan_id,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'nama_institusi' => $request->nama_institusi,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
            'lampiran' => $lampiranPath, // Simpan path lampiran yang sudah disimpan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat pekerjaan berhasil ditambahkan!');
    }

    public function update_pendidikan(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'jenjang_pendidikan' => 'required|string|max:100',
            'nama_institusi' => 'required|string|max:100',
            'jurusan' => 'required|string|max:100',
            'tahun_lulus' => 'required|integer|min:1900|max:' . date('Y'), // Validasi tahun
            'lampiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Temukan job history berdasarkan ID
        $pendidikan = Pendidikan::find($id);

        // Cek apakah job history ditemukan
        if (!$pendidikan) {
            return response()->json(['message' => 'Pendidikan not found'], 404);
        }

        // Perbarui job history dengan data yang baru
        $pendidikan->update([
            'jenjang_pendidikan' => $request->input('jenjang_pendidikan'),
            'nama_institusi' => $request->input('nama_institusi'),
            'jurusan' => $request->input('jurusan'),
            'tahun_lulus' => $request->input('tahun_lulus'),
            'lampiran' => $request->input('lampiran'),
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);

        return redirect()->back()->with('success', 'Pendidikan berhasil diubah!');
        //  return response()->json(['message' => 'Job history updated successfully', 'data' => $pendidikan], 200);
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
        if ($pendidikan->lampiran) {
            Storage::disk('public')->delete($pendidikan->lampiran);
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
            'lampiran_pendukung' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);


        // Ambil data dari request
        $karyawan_id = $request->karyawan_id;
        $pelatihan = $request->pelatihan;

        // Simpan lampiran ke folder 'public/lampiran'
        $lampiranPath = null; // Inisialisasi path
        if ($request->hasFile('lampiran_pendukung')) {
            $lampiran = $request->file('lampiran_pendukung');
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
            'lampiran_pendukung' => $lampiranPath, // Simpan path lampiran yang sudah disimpan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Riwayat pekerjaan berhasil ditambahkan!');
    }

    public function update_pelatihan(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama_pelatihan' => 'required|string|max:100',
            'nama_penyelenggara' => 'required|string|max:100',
            'tanggal_mulai' => 'required|date|before_or_equal:tanggal_akhir', // Pastikan tanggal mulai valid dan sebelum tanggal akhir
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai', // Pastikan tanggal akhir valid dan setelah tanggal mulai
            'lampiran_pendukung' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048', // Ganti nama sesuai input di form
        ]);

        // Temukan pelatihan berdasarkan ID
        $pelatihan = Pelatihan::find($id);

        // Cek apakah pelatihan ditemukan
        if (!$pelatihan) {
            return response()->json(['message' => 'Pelatihan tidak ditemukan'], 404);
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
            'lampiran_pendukung' => $lampiranPath, // Simpan path lampiran yang sudah disimpan
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);

        return redirect()->back()->with('success', 'Pelatihan berhasil diubah!');
    }


    public function destroy_pelatihan($id)
    {
        // Temukan pelatihan berdasarkan ID
        $pelatihan = Pelatihan::find($id);

        // Cek apakah pelatihan ditemukan
        if (!$pelatihan) {
            return response()->json(['message' => 'Pelatihan not found'], 404);
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
}
