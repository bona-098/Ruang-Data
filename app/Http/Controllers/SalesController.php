<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\CollectionExport;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return $request->all();
        // $sales = Sales::get();
        // dd($sales);
        $sales = Sales::query();
        $sales->when($request->unit_kerja, function($query) use ($request) {
            return $query->whereunit_kerja($request->unit_kerja);
        });
        $sales->when($request->status_revenue, function($query) use ($request) {
            return $query->wherestatus_revenue($request->status_revenue);
        });
        $sales->when($request->segment, function($query) use ($request) {
            return $query->wheresegment($request->segment);
        });
        $sales->when($request->portfolio, function($query) use ($request) {
            return $query->whereportfolio($request->portfolio);
        });
        $sales->when($request->progress_project, function($query) use ($request) {
            return $query->whereprogress_project($request->progress_project);
        });
        $sales->when($request->status_project, function($query) use ($request) {
            return $query->wherestatus_project($request->status_project);
        });
        $sales->when($request->jenis_kontrak, function($query) use ($request) {
            return $query->wherejenis_kontrak($request->jenis_kontrak);
        });
        return view ('marshal.sales.index', ['sales' => $sales->paginate(100000)]);
        dd($sales);
    }

    public function resetFilter()
    {
        session()->forget('filter');
        return redirect()->back();
    }

    public function export()
    {
        try {
            $sales = Sales::all();

            if ($sales->isEmpty()) {
                return redirect()->back()->with('error', 'Tidak ada data yang diekspor.');
            }

            $exportSales = [];

            foreach ($sales as $item) {
                $exportSales[] = [
                    'unit_kerja' => $item->unit_kerja ?? '',
                    // 'Unit Kerja' => $item->unit_kerja ?? '',
                    // tambahkan properti lainnya sesuai kebutuhan
                ];
            }

            $fileName = 'sales_export.xlsx';

            $excel = new Excel();
            $excel->store(new class($exportSales) implements FromCollection {
                private $sales;

                public function __construct($sales)
                {
                    $this->sales = $sales;
                }

                public function collection()
                {
                    return collect($this->sales);
                }
            }, $fileName, 'public');

            return $excel->download($fileName, \Maatwebsite\Excel\Excel::XLSX);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengexport data: ' . $e->getMessage());
        }
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
            'drive_kontrak' => 'required|mimes:pdf|max:100480'
        ]);
        $file = $request->file('drive_kontrak');
        $file_kontrak = time()."_".$file->getClientOriginalName();
        $file->move(public_path('/drive'), $file_kontrak);

        Sales::create([
            'unit_kerja'=>$request->unit_kerja,
            'status_revenue'=>$request->status_revenue,
            'customer'=>$request->customer,
            'segment'=>$request->segment,
            'nama_project'=>$request->nama_project,
            'lokasi_gedung'=>$request->lokasi_gedung,
            'jenis_pekerjaan'=>$request->jenis_pekerjaan,
            'portfolio'=>$request->portfolio,
            'progress_project'=>$request->progress_project,
            'status_project'=>$request->status_project,
            'proses_pendekatan_customer'=>$request->proses_pendekatan_customer,
            'visit'=>$request->visit,
            'sph'=>$request->sph,
            'bakn'=>$request->bakn,
            'spk'=>$request->spk,
            'masa_project'=>$request->masa_project,
            'jumlah_man_power'=>$request->jumlah_man_power,
            'tgl_sp'=>$request->tgl_sp,
            'no_sp'=>$request->no_sp,
            'jenis_kontrak'=>$request->jenis_kontrak,
            'tgl_mulai_project'=>$request->tgl_mulai_project,
            'tgl_akhir_project'=>$request->tgl_akhir_project,
            'sisa_kontrak'=>$request->sisa_kontrak,
            'nilai_total_project'=>$request->nilai_total_project,
            'nilai_project_pertahun'=>$request->nilai_project_pertahun,
            'nilai_project_perbulan'=>$request->nilai_project_perbulan,
            'nama_key_kontak_client'=>$request->nama_key_kontak_client,
            'jabatan_pic_client'=>$request->jabatan_pic_client,
            'no_hp_pic_client'=>$request->no_hp_pic_client,
            'nama_pic_gsd'=>$request->nama_pic_gsd,
            'drive_kontrak'=>$file_kontrak,
            'amandemen'=>$request->amandemen,
            'keterangan'=>$request->keterangan
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
        $sales = Sales::find($id);  
        return view ('marshal.sales.detail', compact('sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales = Sales::find($id);
        // dd($sales);
        // $id = $sales->id;
        return view('marshal.sales.edit', compact('sales'));
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
        $sales = Sales::findOrFail($id);
        $request->validate([
            'unit_kerja' => 'required',
            'status_revenue' => 'required',
            // 'drive_kontrak' => 'required|mimes:pdf|max:100480'
        ]);
        // $id = $sales->id;
        // if ($drive_kotrak = $request->file('drive_kontrak')){
        //     File::delete('drive/'. $sales->drive_kontrak);
        //     $file_name = $request->drive_kontrak->getClientOriginalName();
        //     $drive_kontrak->move(public_path('drive'), $file_name);
        //     $sales['media'] = "$file_name";
        // }else{
        // unset ($sales['srive_kontrak']);
        // }
        $sales->update([
            'unit_kerja' =>$request->unit_kerja,
            'status_revenue' =>$request->status_revenue,
            'customer' =>$request->customer,
            'segment' =>$request->segment,
            'nama_project' =>$request->nama_project,
            'lokasi_gedung' =>$request->lokasi_gedung,
            'jenis_pekerjaan' =>$request->jenis_pekerjaan,
            'portfolio' =>$request->portfolio,
            'progress_project' =>$request->progress_project,
            'status_project' =>$request->status_project,
            'proses_pendekatan_customer' =>$request->proses_pendekatan_customer,
            'visit' =>$request->visit,
            'sph' =>$request->sph, 
            'bakn' =>$request->bakn, 
            'spk' =>$request->spk,
            'masa_project' =>$request->masa_project,
            'jumlah_man_power' =>$request->jumlah_man_power,
            'tgl_sp' =>$request->tgl_sp,
            'no_sp' =>$request->no_sp,
            'jenis_kontrak' =>$request->jenis_kontrak,
            'tgl_mulai_project' =>$request->tgl_mulai_project,
            'tgl_akhir_project' =>$request->tgl_akhir_project,
            'sisa_kontrak' =>$request->sisa_kontrak,
            'nilai_total_project' =>$request->nilai_total_project,
            'nilai_project_pertahun' =>$request->nilai_project_pertahun,
            'nilai_project_perbulan' =>$request->nilai_project_perbulan,
            'nama_key_kontak_client' =>$request->nama_key_kontak_client,
            'jabatan_pic_client' =>$request->jabatan_pic_client,
            'no_hp_pic_client' =>$request->no_hp_pic_client,
            'nama_pic_gsd' =>$request->nama_pic_gsd,
            'drive_kontrak' =>$request->drive_kontrak,
            'amandemen' =>$request->amandemen,
            'keterangan' =>$request->keterangan
        ]);
        return redirect()->back()->with('berhasil', 'data sales berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();
        return redirect()->route('sales.index');
    }
}
