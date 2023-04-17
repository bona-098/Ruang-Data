<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::get();
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
        $project = Project::dinfOrFail($id);
        $project->update([
            'customer' =>$request->customer,
        ]);
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
}
