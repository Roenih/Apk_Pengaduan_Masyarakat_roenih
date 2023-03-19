<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;
use App\Pengaduan;
use DB;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tanggapan = Tanggapan::all();
        $tanggapan = DB::table('tanggapan')
                    ->join('pengaduan', 'tanggapan.id_pengaduan', '=', 'pengaduan.id_pengaduan')
                    ->join('users', 'users.id', '=', 'tanggapan.id_user')
                    ->select('tanggapan.*','users.nama as nama', 'pengaduan.isi_laporan as laporan')
                    ->get();
        // dd($tanggapan);

    	return view('tanggapan.index',compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tanggapan = Tanggapan::all();
    	return view('tanggapan.create',compact('tanggapan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggapan = DB::table('tanggapan')
                    ->where('id_pengaduan', $request->id_pengaduan)
                    ->get();

        // dd($tanggapan[0]->id_pengaduan);
        if (count($tanggapan) === 0) {
            Tanggapan::create([
                'tgl_tanggapan' => $request->tgl_tanggapan,
                'tanggapan' => $request->tanggapan,
                'id_user' => $request->id_user,
                'id_pengaduan' => $request->id_pengaduan,
    	    ]);
        } else {
            // $cek = [
            //         'tgl_tanggapan' => $request->tgl_tanggapan,
            //         'tanggapan' => $request->tanggapan,
            //         'id_user' => $request->id_user,
            //         'id_pengaduan' => $request->id_pengaduan,
            // ];
            Tanggapan::where('id_tanggapan', $tanggapan[0]->id_tanggapan)->update([
                'tgl_tanggapan' => $request->tgl_tanggapan,
                'tanggapan' => $request->tanggapan,
                'id_user' => $request->id_user,
                'id_pengaduan' => $request->id_pengaduan,
            ]);
        }
        // dd($cek);

    	return redirect('/tanggapan');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanggapan = Tanggapan::where('id_tanggapan',$id)->first();
        return view('tanggapan.edit',compact('tanggapan'));
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
        Tanggapan::where('id_tanggapan',$id)->update([
    		'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'id_user' => $request->id_user,
        ]);

        return redirect('/tanggapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tanggapan::where('id_tanggapan',$id)->delete();

        return redirect('/tanggapan');
    }

    public function tanggapanAction($id)
    {
        $pengaduan = DB::table('pengaduan')
        ->where('id_pengaduan', $id)
        ->join('users', 'pengaduan.nik', '=', 'users.id')
        ->select('pengaduan.*', 'users.nama as nama', 'users.nik as nik', 'pengaduan.nik as id_user')
        ->get();
        $data = $pengaduan[0];
        $date = date("y-m-d");

        $tanggapan = DB::table('tanggapan')->where('id_pengaduan', $data->id_pengaduan)->get();
        $dataTanggapan = count($tanggapan) === 1 ? $tanggapan[0]->tanggapan : '';

        return view('tanggapan.create',compact('data','date', 'dataTanggapan'));
    }
}
