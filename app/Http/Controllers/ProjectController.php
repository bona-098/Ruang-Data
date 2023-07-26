<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $project = Project::query();
        if ($request->id_crm && $request->id_crm != 'Pilih') {
            $project->where('id_crm', $request->id_crm);
        }
        if ($request->witel && $request->witel != 'Pilih') {
            $project->where('witel', $request->witel);
        }
        if ($request->kategori && $request->kategori != 'Pilih') {
            $project->where('kategori', $request->kategori);
        }
        if ($request->tahap && $request->tahap != 'Pilih') {
            $project->where('tahap', $request->tahap);
        }
        // dd($request);
        $project = $project->get();
        return view('project.index', compact('project'));
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
        Project::create([
            'customer' => $request->customer,
            'witel' => $request->witel,
            'nama_project' => $request->nama_project,
            'kategori' => $request->kategori,
            'skema' => $request->skema,
            'nilai_project' => $request->nilai_project,
            'sudah_akru' => $request->sudah_akru,
            'sisa_belum_akru' => $request->sisa_belum_akru,
            'progress_ml' => $request->progress_ml,
            'progress_mi' => $request->progress_mi,
            'target_deal' => $request->target_deal,
            'keterangan' => $request->keterangan,
            'tahap' => $request->tahap,
            'akru' => $request->akru
        ]);
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menambah Data Project', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
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
        $project = Project::find($id);
        // dd($project);
        return view('project.detail', compact('project'));
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
        $project = Project::findOrFail($id);
        $project->update([
            'customer' => $request->customer,
            'witel' => $request->witel,
            'nama_project' => $request->nama_project,
            'kategori' => $request->kategori,
            'skema' => $request->skema,
            'nilai_project' => $request->nilai_project,
            'sudah_akru' => $request->sudah_akru,
            'sisa_belum_akru' => $request->sisa_belum_akru,
            'progress_ml' => $request->progress_ml,
            'progress_mi' => $request->progress_mi,
            'target_deal' => $request->target_deal,
            'keterangan' => $request->keterangan,
            'tahap' => $request->tahap,
            'akru' => $request->akru
        ]);
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Mengubah Data Project', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
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
        $project = Project::findOrFail($id);
        $project->delete();
        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menghapus Data Project', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
            'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
        ]);
        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->route('project.index');
    }

    public function detailchartnilai(Request $request)
    {
        $labelValue = $request->query('label');
        $columnName = $request->query('category');
        $sudahAkru = $request->query('sudahAkru');

        if ($columnName === 'sudah_akru') {
            $project = Project::where('kategori', $labelValue)
                ->whereNotNull('sudah_akru')
                ->where('sudah_akru', '!=', 0)
                ->get();
        } elseif ($columnName === 'sisa_belum_akru') {
            $project = Project::where('kategori', $labelValue)
                ->where(function ($query) {
                    $query->whereNull('sudah_akru')
                        ->orWhere('sudah_akru', 0);
                })
                ->get();
        } else {
            $project = Project::where('kategori', $labelValue)->get();
        }

        return view('project.detail_chart', compact('project'));
    }






    public function detailchartprojek(Request $request)
    {
        $label = $request->query('label');
        $columnName = $request->query('category');

        // Tentukan nilai $labelValue berdasarkan label
        if ($label === 'Done') {
            $labelValue = 'Komersial';
        } elseif ($label === 'Progress') {
            $labelValue = 'OnHand';
        } elseif ($label === 'Potensial') {
            $labelValue = 'Co-OnHand';
        } else {
            // Nilai default jika label tidak cocok dengan kondisi di atas
            $labelValue = null;
        }

        // Mencari project berdasarkan nilai dari kolom 'labelValue' dan nama kolom
        $project = Project::where('tahap', $labelValue)
            ->where('kategori', $columnName)
            ->get();

        // Jika project tidak ditemukan, bisa melakukan penanganan sesuai kebutuhan Anda, misalnya menampilkan pesan error atau mengarahkan pengguna ke halaman lain.
        if (!$project) {
            abort(404); // Contoh: Menampilkan halaman error 404
        }

        return view('project.detail_chart', compact('project'));
    }
}
