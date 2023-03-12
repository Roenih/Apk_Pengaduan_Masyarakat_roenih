<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;

class RegionController extends Controller
{
    public function getAllProvince()
    {
        $province = Province::all();
        return response()->json(['data' => $province], 200);
    }

    public function getAllRegency($id)
    {
        $regency = Regency::where('province_id', $id)->get();
        return response()->json(['data' => $regency], 200);
    }

    public function getAllDistrict($id)
    {
        $district = District::where('regency_id', $id)->get();
        return response()->json(['data' => $district], 200);
    }

    public function getAllVillage($id)
    {
        $village = Village::where('district_id', $id)->get();
        return response()->json(['data' => $village], 200);
    }
}
