<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        $auth = request()->only('username', 'password');
        if (Auth()->guard('user')->attempt($auth)) {
            return redirect()->to('/pengaduan');
        
        }
        
    }

}
