<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\User;
use DB;
use Auth;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->level == 'admin' || Auth::user()->level == 'petugas') {
            $pengaduan = DB::table('pengaduan')
            ->join('users', 'pengaduan.nik', '=', 'users.id')
            ->select('pengaduan.*','users.nama as nama', 'users.nik as nik', 'pengaduan.nik as id_user')
            ->orderBy('tgl_pengaduan', 'desc')
            ->get();
        } else {
            $pengaduan = DB::table('pengaduan')
            ->join('users', 'pengaduan.nik', '=', 'users.id')
            ->select('pengaduan.*','users.nama as nama', 'users.nik as nik', 'pengaduan.nik as id_user')
            ->where('users.id', Auth::user()->id)
            ->orderBy('tgl_pengaduan', 'desc')
            ->get();

            // dd($pengaduan);
        }
        

        // dd($pengaduan);

    	return view('pengaduan.index',compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = Pengaduan::all();
        $user = User::all();
    	return view('pengaduan.create',compact('pengaduan','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengaduan::create([
    		'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => Auth::user()->level == "admin" ? $request->nik :  Auth::user()->id,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => 'proses',
    	]);

    	return redirect('/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
        return view('pengaduan.edit',compact('pengaduan'));
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
        Pengaduan::where('id_pengaduan',$id)->update([
    		'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status,
        ]);

        return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengaduan::where('id_pengaduan',$id)->delete();

        return redirect('/pengaduan');
    }
}

