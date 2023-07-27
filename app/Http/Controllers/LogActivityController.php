<?php

namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use App\Models\LogActivities;
class LogActivityController extends Controller
{
    public function myTestAddToLog()
    {
        // Kalian bisa melakukan apapun 
        // seperti create, read, update, dan delete sebelum fungsi log di bawah ini dijalankan

        LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function logActivity()
    {
        // Mengambil data log activity dari model LogActivities
        $logs = LogActivities::latest()->get();
        return view('log_activity', compact('logs'));
    }

    public function logActivityLists()
    {
        // Di sini, kita mengambil data log activity dari model LogActivityModel.
        // Misalnya, jika Anda menggunakan database, gunakan query seperti berikut:
        $logs = LogActivities::where('activity', 'login')->latest()->get();

        return $logs;
    }
}
