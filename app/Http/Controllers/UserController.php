<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use DB;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')
                    ->join('indoregion_provinces', 'users.province_id', '=', 'indoregion_provinces.id')
                    ->join('indoregion_regencies', 'users.regency_id', '=', 'indoregion_regencies.id')
                    ->join('indoregion_districts', 'users.district_id', '=', 'indoregion_districts.id')
                    ->join('indoregion_villages', 'users.village_id', '=', 'indoregion_villages.id')
                    ->select('users.*', 'indoregion_provinces.name as province_id', 'indoregion_regencies.name as regency_id', 'indoregion_districts.name as district_id', 'indoregion_villages.name as village_id')
                    ->get();
        // dd($user);

    	return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' =>  'required|email|unique:users',
            'nik' => 'required', 
            'telp' => 'required', 
        ]);

        $user = [
            'nama' => $request->nama, 
            'email' => $request->email, 
            'password' => bcrypt('12345678'), 
            'nik' => $request->nik, 
            'telp' => $request->telp, 
            'jenkel' => $request->jenkel, 
            'level' => $request->level, 
            'alamat' => $request->alamat, 
            'rt' => $request->rt, 
            'rw' => $request->rw, 
            'kode_pos' => $request->kode_pos, 
            'province_id' => $request->province_id, 
            'regency_id' => $request->regency_id, 
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
        ];

        User::create($user);

        return redirect('/user');
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
        $user = User::find($id);
        $district =  District::find($user->district_id);
        $province =  Province::find($user->province_id);
        $regency =  Regency::find($user->regency_id);
        $village =  Village::find($user->village_id);

        return view('user.edit',compact('user','district','province','regency','village'));
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
        $user = User::find($id);
        $updateData = [
            'nama' => $request->nama, 
            'email' => $request->email, 
            'password' => $request->password, 
            'nik' => $request->nik, 
            'telp' => $request->telp, 
            'jenkel' => $request->jenkel, 
            'level' => $request->level, 
            'alamat' => $request->alamat, 
            'rt' => $request->rt, 
            'rw' => $request->rw, 
            'kode_pos' => $request->kode_pos, 
            'province_id' => $request->province_id, 
            'regency_id' => $request->regency_id, 
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
        ];
        $user->update($updateData);

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();

        return redirect('/user')->with('Data dihapus','Data berhasil dihapus!');
    }

    public function cetakPDF()
    {
        // ngambil semua data
        $user = DB::table('users')
                    ->join('indoregion_provinces', 'users.province_id', '=', 'indoregion_provinces.id')
                    ->join('indoregion_regencies', 'users.regency_id', '=', 'indoregion_regencies.id')
                    ->join('indoregion_districts', 'users.district_id', '=', 'indoregion_districts.id')
                    ->join('indoregion_villages', 'users.village_id', '=', 'indoregion_villages.id')
                    ->select('users.*', 'indoregion_provinces.name as province_id', 'indoregion_regencies.name as regency_id', 'indoregion_districts.name as district_id', 'indoregion_villages.name as village_id')
                    ->get();
    	$pdf = PDF::loadview('user.cetakPdf',compact('user'));
        $pdf->setPaper('A4', 'landscape');
    	return $pdf->download('laporan-user-pdf.pdf');
    }
}
