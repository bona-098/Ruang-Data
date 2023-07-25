<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $performance = Performance::query();
        if ($request->area && $request->area != 'Pilih') {
            $performance->where('area', $request->area);
        }
        if ($request->tahun && $request->tahun != 'Pilih') {
            $performance->where('tahun', $request->tahun);
        }
        if ($request->bulan && $request->bulan != 'Pilih') {
            $performance->where('bulan', $request->bulan);
        }
        // if ($request->tahap && $request->tahap != 'Pilih') {
        //     $project->where('tahap', $request->tahap);
        // }
        $performance = $performance->get();
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
            // 'kategori' =>'required',
            'tahun' => 'required',
            'bulan' => 'required',
            'area' => 'required',
            'target_rkap' => 'required',
            'target_rkm' => 'required',
            'ach' => 'required',
            'foto' => 'required|file|image|mimes:jpg,img,pjeg,png,gif|max:50000'
        ]);

        // Cek apakah sudah ada data dengan area, bulan, dan tahun yang sama
        $existingData = Performance::where('tahun', $request->tahun)
            ->where('bulan', $request->bulan)
            ->where('area', $request->area)
            ->first();

        if ($existingData) {
            // Tampilkan SweetAlert error jika data sudah ada
            Alert::error('Data Gagal Tersimpan', 'Data sudah terisi mohon diperiksa lagi!');
            return redirect()->route('performance.index');
        }

        $newnamefoto = $request->kategori . '-' . date('His') . '-' . $request->foto->extension();
        $request->file('foto')->move(public_path('images/performance'), $newnamefoto);

        Performance::create([
            // 'kategori' =>$request->kategori,
            'tahun' => $request->tahun,
            'bulan' => $request->bulan,
            'area' => $request->area,
            'target_rkap' => $request->target_rkap,
            'target_rkm' => $request->target_rkm,
            'ach' => $request->ach,
            'foto' => $newnamefoto
        ]);

        // Tampilkan SweetAlert success setelah data berhasil disimpan
        Alert::success('SuccessAlert', 'Data berhasil disimpan!');

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
        $performance_chart = Performance::where('id', $id)->get();

        // Ambil data target RKAP per bulan dari database
        $target_rkap_data = Performance::where('tahun', $performance->tahun)
            ->where('area', $performance->area)
            ->pluck('target_rkap', 'bulan');

        // Ambil data target RKM per bulan dari database
        $target_rkm_data = Performance::where('tahun', $performance->tahun)
            ->where('area', $performance->area)
            ->pluck('target_rkm', 'bulan');

        // Ambil data ACH per bulan dari database
        $target_ach_data = Performance::where('tahun', $performance->tahun)
            ->where('area', $performance->area)
            ->pluck('ach', 'bulan');

        // Data bulan yang ingin ditampilkan
        $bulan_data = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        // Inisialisasi array untuk menyimpan data target RKAP, RKM, dan ACH per bulan
        $target_rkap_per_bulan = [];
        $target_rkm_per_bulan = [];
        $target_ach_per_bulan = [];

        // Loop untuk mengisi data target RKAP, RKM, dan ACH per bulan
        foreach ($bulan_data as $bulan) {
            $target_rkap_per_bulan[] = isset($target_rkap_data[$bulan]) ? $target_rkap_data[$bulan] : 0;
            $target_rkm_per_bulan[] = isset($target_rkm_data[$bulan]) ? $target_rkm_data[$bulan] : 0;
            $target_ach_per_bulan[] = isset($target_ach_data[$bulan]) ? $target_ach_data[$bulan] : 0;
        }

        return view('bsrm.performance.detail', compact(
            'performance',
            'performance_chart',
            'target_rkap_per_bulan',
            'target_rkm_per_bulan',
            'target_ach_per_bulan'
        ));
    }


    // tolong bantu saya ingin menampilkan chart berdasarkan id

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
        // $this->validate($request, [
        //     'tahun' => 'required',
        //     'bulan' => 'required',
        //     'area' => 'required',
        //     'target_rkap' => 'required',
        //     'target_rkm' => 'required',
        //     'ach' => 'required',
        //     'foto' => 'required|file|image|mimes:jpg,img,pjeg,png,gif|max:50000'
        // ]);
        // dd($request->all());
        $performance = Performance::findOrFail($id);
        $performance->tahun = $request->tahun;
        $performance->bulan = $request->bulan;
        $performance->area = $request->area;
        $performance->target_rkap = $request->target_rkap;
        $performance->target_rkm = $request->target_rkm;
        $performance->ach = $request->ach;

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
