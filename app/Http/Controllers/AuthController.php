<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function welcome(){
        return view ('welcome');
    }

    public function welcome_post(Request $request){
        //dd($request["fname" && "lname"]);
        $nama1 = $request ["fname"];
        $nama2 = $request ["lname"];
        return "<h1>Selamat Datang $nama1 $nama2 </h1><br>
        <h3>Terima kasih telah bergabung di SanberCode. Social Media kita bersama!</h3>";
    }
}
