<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
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
    	return view('pengaduan.create',compact('pengaduan'));
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
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status,

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
         $pengaduan = Pengaduan::where('pengaduan',$id)->first();
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
         $this->validate($request,[
        'tgl_pengaduan' => 'required',
         'nik' => 'required',
          'isi_laporan' => 'required',
           'foto' => 'required',
            'status' => 'required',
        ]);

        // $check = $request->nm_kelas;

        // $code = 'KLS'.str_replace("-", "", $check);
    
        Kelas::where('pengaduan',$id)->update([
            // 'kode_kelas' => $code,
    		'tgl_pengaduan' => $request->nm_kelas,
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
         Kelas::where('pengaduan',$id)->delete();
        return redirect('/pengaduan');
    }
}

