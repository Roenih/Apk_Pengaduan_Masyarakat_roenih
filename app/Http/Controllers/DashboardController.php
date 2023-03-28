<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        $pengaduan = DB::table('pengaduan')->count();
        $tanggapan = DB::table('tanggapan')->count();
        $user = DB::table('users')->count();
        // dd($pengaduan);
        return view('dashboard' , compact('pengaduan', 'tanggapan', 'user'));
    }
   
}
