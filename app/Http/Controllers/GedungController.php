<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Personil;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gedung = Gedung::query();
        if ($request->nama_area && $request->nama_area != 'Pilih') {
            $gedung->where('nama_area', $request->nama_area);
        }    
        if ($request->witel && $request->witel != 'Pilih') {
            $gedung->where('witel', $request->witel);
        }    
        // if ($request->kategori && $request->kategori != 'Pilih') {
        //     $gedung->where('kategori', $request->kategori);
        // }    
        // if ($request->tahap && $request->tahap != 'Pilih') {
        //     $gedung->where('tahap', $request->tahap);
        // }
        // dd($request);
        $gedung = $gedung->get();
        // $gedung = Gedung->get();
        return view('oms.gedung.index', compact('gedung'));
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
            'Id_gedung' => 'required',
            'nama_gedung' => 'required',
            'nama_area' => 'required',
            'nama_witel' => 'required',
            'alamat' => 'required',
            'koordinat' => 'required',
            'total_petugas' => 'required',
            'luasan' => 'required',
        ]);

        Gedung::create([
            'nama_gedung' => $request->nama_gedung,
            'Id_gedung' => $request->Id_gedung,
            'nama_area' => $request->nama_area,
            'nama_witel' => $request->nama_witel,
            'alamat' => $request->alamat,
            'koordinat' => $request->koordinat,
            'total_petugas' => $request->total_petugas,
            'luasan' => $request->luasan,
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
        $gedung = Gedung::findOrfail($id);
        // $personil = Personil::where('gedung_id', $id)->get();
        return view('oms.gedung.detail', compact('gedung'));
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
            'Id_gedung' => 'required',
            'nama_gedung' => 'required',
            'nama_area' => 'required',
            'nama_witel' => 'required',
            'alamat' => 'required',
            'koordinat' => 'required',
            // 'total_petugas' => 'required',
            'luasan' => 'required',
        ]);
        $gedung = Gedung::find($id);
        if (!$gedung) {
            return redirect()->back()->with('error', 'data salah');
        }
        // $gedung = Gedung::find($id);
        $gedung->update([
            'Id_gedung' => $request->Id_gedung,
            'nama_gedung' => $request->nama_gedung,
            'nama_area' => $request->nama_area,
            'nama_witel' => $request->nama_witel,
            'alamat' => $request->alamat,
            'koordinat' => $request->koordinat,
            // 'total_petugas' => $request->total_petugas,
            'luasan' => $request->luasan,
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
        $gedung = Gedung::findOrfail($id);
        $gedung->delete();
        return redirect()->route('gedung.index');
    }

    public function export()
    {
        try {
            $gedung = Gedung::all();

            if ($gedung->isEmpty()) {
                return redirect()->back()->with('error', 'Tidak ada data yang diekspor.');
            }

            $exportSales = [];

            foreach ($gedung as $item) {
                $exportGedung[] = [
                    'unit_kerja' => $item->unit_kerja ?? '',
                    // 'Unit Kerja' => $item->unit_kerja ?? '',
                    // tambahkan properti lainnya sesuai kebutuhan
                ];
            }

            $fileName = 'gedung_export.xlsx';

            $excel = new Excel();
            $excel->store(new class($exportGedung) implements FromCollection {
                private $gedung;

                public function __construct($gedung)
                {
                    $this->gedung = $gedung;
                }

                public function collection()
                {
                    return collect($this->gedung);
                }
            }, $fileName, 'public');

            return $excel->download($fileName, \Maatwebsite\Excel\Excel::XLSX);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengexport data: ' . $e->getMessage());
        }
    }
}