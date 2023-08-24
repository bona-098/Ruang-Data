<?php

namespace App\Http\Controllers;

use App\Models\Ps;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LogActivities;

class PsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $ps = Ps::create([
            'target' => $request->target,
            'bulan' => $request->bulan,
        ]);

        // Catat aktivitas tambah data mitra ke dalam log
        LogActivities::create([
            'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
            'activity' => 'Menambah data target project solution', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
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
        //
    }
}
