<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'customer' =>$request->customer,
            'id_crm' =>$request->id_crm,
            'witel' =>$request->witel,
            'nama_project' =>$request->nama_project,
            'kategori' =>$request->kategori,
            'skema' =>$request->skema,
            'nilai_project' =>$request->nilai_project,
            'sudah_akru' =>$request->sudah_akru,
            'sisa_belum_akru' =>$request->sisa_belum_akru,
            'progress_ml' =>$request->progress_ml,
            'progress_mi' =>$request->progress_mi,
            'target_deal' =>$request->target_deal,
            'keterangan' =>$request->keterangan,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'tahap' =>$request->tahap,
            'akru' =>$request->akru
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
        $project = Project::find($id);  
        // dd($project);
        return view ('project.detail', compact('project'));
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
            'customer' =>$request->customer,
            'id_crm' =>$request->id_crm,
            'witel' =>$request->witel,
            'nama_project' =>$request->nama_project,
            'kategori' =>$request->kategori,
            'skema' =>$request->skema,
            'nilai_project' =>$request->nilai_project,
            'sudah_akru' =>$request->sudah_akru,
            'sisa_belum_akru' =>$request->sisa_belum_akru,
            'progress_ml' =>$request->progress_ml,
            'progress_mi' =>$request->progress_mi,
            'target_deal' =>$request->target_deal,
            'keterangan' =>$request->keterangan,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'tahap' =>$request->tahap,
            'akru' =>$request->akru
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
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index');
    }

    public function detailchart(Request $request)
    {
        $labelValue = $request->query('label');
        $columnName = $request->query('category');
        
        // Mencari project berdasarkan nilai dari kolom 'label' dan nama kolom
        $project = Project::where('kategori', $labelValue)
                          ->whereNotNull($columnName)
                          ->get();
        
        // Jika project tidak ditemukan, bisa melakukan penanganan sesuai kebutuhan Anda, misalnya menampilkan pesan error atau mengarahkan pengguna ke halaman lain.
        if (!$project) {
            abort(404); // Contoh: Menampilkan halaman error 404
        }
        
        return view('project.detail_chart', compact('project'));
    }

}
