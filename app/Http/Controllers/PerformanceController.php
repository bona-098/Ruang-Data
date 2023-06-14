<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performance = Performance::get();
        return view('bsrm.performance.index', compact('performance'));
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
            'kategori' =>'required',
            'bulan' =>'required',
            'tahun' =>'required',
            'area' =>'required',
            'foto' =>'required|file|image|mimes:jpg,img,pjeg,png,gif|max:50000'
        ]);
        $newnamefoto = $request->kategori . '-' . date('His'). '-' .$request->foto->extension();
        $request->file('foto')->move(public_path('images/performance'), $newnamefoto);
        Performance::create([
            'kategori' =>$request->kategori,
            'bulan' =>$request->bulan,
            'tahun' =>$request->tahun,
            'area' =>$request->area,
            'foto' => $newnamefoto
        ]);
        return redirect()->route('performance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $performance = Performance::find($id);
        // return view('bsrm.performance.detail', compact('performance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $performance = Performance::findOrFail($id);
        // dd($performance);
        // return view('bsrm.performance.edit', compact('performance'));
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
            'kategori' =>'required',
            'tahun' => 'required',
            'bulan' => 'required',
            'area' => 'required',
            'foto' => 'file|mimes:jpg,img,pjeg,png,gif|max:50000'
        ]);       
        $performance = Performance::find($id);
        $performance->kategori = $request->kategori;
        $performance->tahun = $request->tahun;
        $performance->bulan = $request->bulan;
        $performance->area = $request->area;
    
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path('images/performance');
    
            // Generate unique file name
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
    
            // Move the uploaded file to the destination path
            $file->move($destinationPath, $fileName);
    
            // Delete old media file if exists
            if ($performance->foto) {
                $oldFilePath = $destinationPath . '/' . $performance->foto;
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
    
            $performance->foto = $fileName;
        }
        $performance->save();
        return redirect()->route('performance.index');
        // if ($foto = $request->file('foto')) {
        //     File::delete('images/performance/'.$performance->foto);
        //     $file_name = $request->foto->getClientOriginalExtension();
        //     $foto->move(public_path('images/performance'), $file_name);
        //     $performancis['foto'] = "file_name";
        // }else{
        //     unset($performancis['foto']);
        // }
        // $performance->update($performancis);


        // $performance->update($performancis);
        // if ($foto=$request->file('foto')){
        //     Storage::delete('images/performance'.$performance->foto);

        //     $imagename = time() . '-' . $foto->getClientOriginalExtension();
        //     $foto->storeAs('images', $imagename);

        //     $performance->foto = $imagename;
        //     $performance->save; 
        // }
        // if ($request->hasFile('foto')){
        //     Storage::delete($performance->foto);
        //     $imagePath = $request->file('foto')->store('foto');
        //     $performance->foto = $imagePath;
        // }
        // $performance->save();
        // $performancis = $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $performance = Performance::findOrFail($id);
        $performance->delete();
        return redirect()->back();
    }
}
